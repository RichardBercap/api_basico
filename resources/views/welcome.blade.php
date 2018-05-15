<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

       
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="container">
                <h2>Laravel Data Tables</h2>
                <table id="table" class="display"  width="100%">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>lastname</th>
                            <th>edad</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>name</th>
                            <th>lastname</th>
                            <th>edad</th>

                            
                        </tr>
                    </tfoot>
                </table>
                            
            </div>
        </div>
    </body>
<!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        /*$('#example').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url":"<?= route('dataProcessing') ?>",
                    "dataType":"json",
                    "type":"POST",
                    "data":{"_token":"<?= csrf_token() ?>"}
                },
                "columns":[
                    {"data":"name"},
                    {"data":"lastname"},
                    {"data":"edad"},
                    {"data":"action","searchable":false,"orderable":false}
                ]
            } );*/
            $(function() {
                $('#table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '/clientes',
                    columns:[
                        {data:'name'},
                        {data:'lastname'},
                        {data:'edad'}
                    ]
                });
            });

     
    </script>
</html>
