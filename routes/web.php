<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $searchTerm = "Javascript";
    // $results = searchCompleteDatabase($searchTerm);
    // // Output the results
    // foreach ($results as $table => $records) {
    //     foreach ($records as $items) {
    //         foreach ($items as $result) {
    //             echo "<pre>" . json_encode($result, JSON_PRETTY_PRINT) . "</pre>";
    //         }
    //     }
    // }
    $tables = getTablesWithColumns();
    return view('welcome')->with('tables', $tables);
});


function getTablesWithColumns()
{
    $tables = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
    $tables = getFilteredTables($tables);
    $tables_with_columns = [];
    foreach ($tables as $table) {
        $columns = Schema::getColumnListing($table);
          $tables_with_columns[$table] = $columns;
    }
    return $tables_with_columns;
}

function searchCompleteDatabase($searchTerm)
{
    $tables = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
    $tables = getFilteredTables($tables);
    $results = [];
    foreach ($tables as $table) {
        $columns = Schema::getColumnListing($table);
        foreach ($columns as $column) {
            if (isFK($table, $column)) {
                // Fetch the relationship data
                $relationship = fetchRelationship($table, $column, $searchTerm);
                if ($relationship) {
                    $results[$table][$column] = $relationship;
                }
            } else {
                $query = DB::table($table)
                    ->where($column, 'LIKE', "%{$searchTerm}%")
                    ->get();

                if (!$query->isEmpty()) {
                    $results[$table][$column] = $query;
                }
            }
            // $query = DB::table($table)
            //     ->where($column, 'LIKE', "%{$searchTerm}%")
            //     ->get();

            // if (!$query->isEmpty()) {
            //     $results[$table][] = $query;
            // }
        }
    }
    return $results;
}

function getFilteredTables($tables)
{
    return array_diff($tables, array('migrations', 'failed_jobs', 'model_has_permissions', 'model_has_roles', 'password_reset_tokens', 'permissions', 'personal_access_tokens', 'roles', 'role_has_permissions'));
}
function isFK($table, $column)
{
    $fkColumns = Schema::getConnection()
        ->getDoctrineSchemaManager()
        ->listTableForeignKeys($table);

    $fkColumns = collect($fkColumns);
    return $fkColumns->map->getColumns()->flatten()->search($column) !== FALSE;
}
function fetchRelationship($table, $column, $searchTerm)
{
    $query = DB::table(getJoinTableThroughRelationKey($column))
        ->join(getJoinTableThroughRelationKey($column) . ' as table_one', $table . '.' . $column, '=', 'table_one.id')
        ->latest()
        ->limit(20)
        ->get([getJoinTableThroughRelationKey($column) . '.*', 'table_one.*']);
    // Return the related data or false if not found
    return $query ? $query : false;
}


function getJoinTableThroughRelationKey($column_name)
{
    if (substr($column_name, -3) === "_id") {
        $table_name = substr($column_name, 0, -3) . "s";
    } else {
        $table_name = $column_name;
    }
    return $table_name;
}
