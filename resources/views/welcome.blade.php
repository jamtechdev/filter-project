<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <style>
        ul {
            list-style: none;
            padding-left: 8px;
        }

        ul li {
            margin-bottom: 15px;
        }

        ul li a {
            text-decoration: none;
        }

        .head {
            align-items: center;
        }

        .head h6 {
            color: red;
            text-transform: uppercase;
            margin-top: -7px;
        }

        .head span {
            display: flex;
            align-items: center;
            padding: 9px 0px;
            margin-right: 40px;
        }

        .fl-end {
            justify-content: end;
        }

        note {
            color: red;
            padding: 19px;
        }

        h4 span {
            color: red;
            text-transform: uppercase;
            font-size: 16px;
        }

        .sbet {
            justify-content: space-between;
        }

        .table td,
        .table th {
            border: none;
            box-shadow: none;
            background-color: transparent;
        }

        table {
            border-top: 1px solid #ddd;
        }

        h6 {
            color: red;
        }

        .accordion-item {
            border: none;
        }

        .accordion-button {
            padding: 8px 0px;
        }

        .accordion-button:not(.collapsed) {
            background-color: transparent;
            box-shadow: none;
        }

        .accordion-body {
            padding-top: 0;
            padding-bottom: 0;
            overflow: auto;
            height: calc(100vh - 635px);
        }

        .accordion-button:focus {
            border: none;
            box-shadow: none;
        }

        .accordion-button:after {
            display: none;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 6px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .right-sidebar {
            max-height: calc(100vh - 133px);
            overflow: auto;
        }

        .accordion-header {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <div class="shadow rounded">
                    <div class="d-flex head px-3 rounded">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex head">
                                <li class="breadcrumb-item">home</li>
                                <i class="fa fa-arrow-right ms-2 me-2"></i>
                                <li class="breadcrumb-item">name</li>
                            </ol>
                        </nav>

                        <h6 class="ms-5">Search conditions based on selected table columns on right panel</h6>
                    </div>

                    <div class="d-flex head px-3 rounded">
                        <span>
                            Condition <i class="fa fa-arrow-right ms-3"></i>

                            <select class="form-select ms-3" aria-label="Default select example">
                                <option value="=">=</option>
                                <option value=">">&gt;</option>
                                <option value=">=">&gt;=</option>
                                <option value="<">&lt;</option>
                                <option value="<=">&lt;=</option>
                                <option value="!=">!=</option>
                                <option value="LIKE">LIKE</option>
                                <option value="LIKE %...%">LIKE %...%</option>
                                <option value="NOT LIKE">NOT LIKE</option>
                                <option value="NOT LIKE %...%">NOT LIKE %...%</option>
                                <option value="IN (...)">IN (...)</option>
                                <option value="NOT IN (...)">NOT IN (...)</option>
                                <option value="BETWEEN">BETWEEN</option>
                                <option value="NOT BETWEEN">NOT BETWEEN</option>
                                <option value="IS NULL">IS NULL</option>
                                <option value="IS NOT NULL">IS NOT NULL</option>
                            </select>
                        </span>
                        <span>
                            Value to compare <i class="fa fa-arrow-right ms-3"></i>

                            <input type="text" class="ms-3" />
                        </span>
                    </div>
                    <div class="d-flex head fl-end px-3 rounded">
                        <span>
                            Logic <i class="fa fa-arrow-right ms-3"></i>
                            <select class="form-select ms-3" aria-label="Default select example">
                                <option value="AND">AND</option>
                                <option value="OR">OR</option>
                                <option value="NOT">NOT</option>
                            </select>
                        </span>
                    </div>
                    <div class="d-flex head px-3 rounded">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Subscription</a></li>
                                <li class="breadcrumb-item active" aria-current="page">price</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex head px-3 rounded">
                        <span>
                            Condition <i class="fa fa-arrow-rightt ms-3"></i>

                            <select class="form-select ms-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </span>

                        <span>
                            Value to compare <i class="fa fa-arrow-right ms-3"></i>

                            <input type="text" class="ms-3" />
                        </span>

                        <b<button type="button" class="btn btn-primary">Cerca</button>
                    </div>
                </div>

                <div class="shadow rounded mt-5 pb-2">
                    <div class="d-flex head px-3 rounded">
                        <h4 class="ms-0">Choose result table column</h4>
                    </div>

                    <div class="d-flex head px-3 rounded">
                        <span>
                            <select class="form-select me-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                            <strong>As</strong>

                            <input type="text" class="ms-3" />

                            <button type="button" class="btn btn-primary ms-5">Primary</button>
                        </span>



                    </div>
                    <note>* new column added configuration here*</note>


                </div>

                <div class="shadow rounded mt-5 pb-2">
                    <div class="d-flex head px-3 rounded sbet">
                        <h4 class="ms-0 d-flex">Risultati della ricerca <span class="ms-5">Search result with choosen
                                column</span> </h4><button type="button" class="btn btn-primary">Modifica
                            pagamento</button>
                    </div>

                    <div class="dataTable px-3">
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Tipologia incasso</th>
                                    <th scope="col">Voce incasso</th>
                                    <th scope="col">Importo</th>
                                    <th scope="col">IVA</th>
                                    <th scope="col">Importo Totalo</th>
                                    <th scope="col">Pagato</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

            <div class="col-sm-2 shadow rounded right-sidebar pt-3">
                <h4>Tabelle di ricerca</h4>
                <h6 class="mb-4">PANELS WITH ALL TABLES & COLUMNS</h6>
                @foreach ($tables as $table_key => $table)
                    <div class="accordion mt-2" id="table_accordian_{{ $table_key }}">
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingOne">
                                <input type="checkbox" class="me-2 table_selector_checkbox" data-bs-toggle="collapse"
                                    data-bs-target="#{{ $table_key }}" aria-expanded="true"
                                    aria-controls="{{ $table_key }}"
                                    value="{{ $table_key }}" />{{ $table_key }}
                            </p>
                            <div id="{{ $table_key }}" class="accordion-collapse collapse"
                                aria-labelledby="headingOne" data-bs-parent="table_accordian_{{ $table_key }}">
                                <div class="accordion-body">
                                    @foreach ($table as $column)
                                        <input value="{{ $column }}" data-parent-table="{{ $table_key }}"
                                            type="checkbox"
                                            class="me-2 table_column_selector_checkbox" />{{ $column }}<br />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <script>
        $(function() {
            let selectedTables = []; // Array to store selected checkbox values
            $('.table_selector_checkbox').change(function() {
                let selected_table_name = $(this).val();
                let childCheckboxes = $('.table_column_selector_checkbox')
                let parentObj = findParObject(selected_table_name);
                if ($(this).is(':checked')) {
                    if (!parentObj) {
                        parentObj = {
                            table: selected_table_name,
                            columns: []
                        };
                        selectedTables.push(parentObj);
                    }
                } else {
                    if (parentObj) {
                        let parentIndex = findParentIndex(selected_table_name);
                        if (parentIndex > -1) {
                            selectedTables.splice(parentIndex, 1);
                            let elements = $(`[data-parent-table="${selected_table_name}"]`);
                            elements.each(function() {
                                $(this).prop('checked', false);
                            })
                        }
                    }

                }
                console.log("call API");
            });

            $('.table_column_selector_checkbox').change(function() {
                let childValue = $(this).val();
                let parentCheckbox = $(this).attr('data-parent-table');
                if ($(this).is(':checked')) {
                    let selected_table_name = parentCheckbox;
                    let parentObj = findParentObject(selected_table_name);
                    if (!parentObj) {
                        parentObj = {
                            table: selected_table_name,
                            columns: []
                        };
                        selectedTables.push(parentObj);
                    }
                    parentObj.columns.push(childValue);
                } else {
                    let selected_table_name = parentCheckbox;
                    let parentObj = findParentObject(selected_table_name);
                    if (parentObj) {
                        let childIndex = parentObj.columns.indexOf(childValue);
                        if (childIndex > -1) {
                            parentObj.columns.splice(childIndex, 1);
                            if (parentObj.columns.length === 0) {
                                let parentIndex = findParentIndex(selected_table_name);
                                if (parentIndex > -1) {
                                    selectedTables.splice(parentIndex, 1);
                                }
                            }
                        }
                    }
                }
                console.log(selectedTables);
            });

            function findParentIndex(selected_table_name) {
                for (let i = 0; i < selectedTables.length; i++) {
                    if (selectedTables[i].table === selected_table_name) {
                        return i;
                    }
                }
                return -1;
            }
            function findParentObject(selected_table_name) {
                for (let i = 0; i < selectedTables.length; i++) {
                    if (selectedTables[i].table === selected_table_name) {
                        return selectedTables[i];
                    }
                }
                return null;
            }
        });
    </script>


</body>

</html>
