<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Test_Table_By_Mahi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="">

    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-lg-10 m-auto">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="showData">

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            getTables();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getTables() {
            var filter = [];
            $.ajax({
                url: "/getTables",
                type: "GET",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: filter,
                success: function(res) {
                    var str = '';
                    console.log(res);

                    $.each(res, function(index, value) {
                        if (value.status == 2) {
                            value.status = '<span class="badge bg-success">INSTOCK</span>';
                        } else if (value.status == 1) {
                            value.status = '<span class="badge bg-warning">LOWSTOCK</span>';
                        } else {
                            value.status = '<span class="badge bg-danger">OUTOFSTOCK</span>';
                        }
                        str += `
                    <tr class="updateRow" data-id="${value.id}">
                        <td>
                            <span name="code">${value.code}</span>
                            <input style="display: none" type="text" name="code" class="form-control">
                        </td>
                        <td>
                            <span name="name">${value.name}</span>
                            <input style="display: none" type="text" name="name" class="form-control">
                        </td>
                        <td>
                            <span name="status">
                                ${value.status}
                            </span>
                            <select style="display: none" name="status" class="form-control">
                                <option value="2">INSTOCK</option>
                                <option value="1">LOWSTOCK</option>
                                <option value="0">OUTOFSTOCK</option>
                            </select>
                        </td>
                        <td>
                            <span name="price">${value.price}</span>
                            <input style="display: none" type="text" name="price" class="form-control">
                        </td>
                        <td>
                            <a style="display: none" onclick="saveRow(${value.id})" href="#" class="text-success save_row me-1">
                                <i class="bi bi-check"></i>
                            </a>
                            <a class="text-info edit_row me-1" href="#">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a onclick="delRow(${value.id})" class="text-danger del_row" href="#">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                `;
                    });

                    $('#showData').html(str);
                }
            });
        }


        function delRow(id) {
            $.ajax({
                url: "/delRow/" + id,
                type: "GET",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: [
                    id = id
                ],
                success: function(res) {
                    if (res.success) {
                        alert(res.message);
                        getTables();
                    }
                }
            });
        }

        $(document).on('click', '.edit_row', function() {
            var row = $(this).closest('.updateRow');

            var code = row.find('span[name="code"]').text();
            var name = row.find('span[name="name"]').text();
            var status = row.find('span[name="status"]').text();
            var price = row.find('span[name="price"]').text();

            row.find('input[name="code"]').val(code);
            row.find('input[name="name"]').val(name);
            row.find('select[name="status"]').val(status == 'INSTOCK' ? 2 : status == 'LOWSTOCK' ? 1 : 0);
            row.find('input[name="price"]').val(price);

            row.find('td span').hide();
            row.find('td input').show();
            row.find('td select').show();

            row.find('.save_row').show();
            row.find('.edit_row').hide();
            row.find('.del_row').hide();
        });

        function saveRow(id) {

            var row = $(`.updateRow[data-id="${id}"]`);
            var updatedData = {
                id: id,
                code: row.find('input[name="code"]').val(),
                name: row.find('input[name="name"]').val(),
                status: row.find('select[name="status"]').val(),
                price: row.find('input[name="price"]').val()
            };

            $.ajax({
                url: '/saveRow',
                type: 'POST',
                data: updatedData,
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        getTables();
                    }
                }
            });
        }
    </script>



</body>

</html>
