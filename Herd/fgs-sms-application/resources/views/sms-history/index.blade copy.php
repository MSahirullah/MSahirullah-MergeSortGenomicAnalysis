<!DOCTYPE html>

<html lang="en">

<head>
    <title>Laravel 11 DataTables Example - Tutsmake.com</title>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

         <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
    <script src="https://cdn.tailwindcss.com/"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.tailwindcss.css">
</head>

<body>
    <div class="container">
        <h2>Laravel 11 DataTables Example - Tutsmake.com</h2>
        <table class="table table-bordered" id="y_dataTables">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                </tr>
            </thead>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#y_dataTables').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('list') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    }
                ]
            });
        });
    </script>
</body>

</html>
