<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="{{ route('generar')}}">
		{{ csrf_field() }}
		<button type="submit" class="btn">Guardar</button>

		<button type="button" class="btn" id="ver">Ver</button>
	</form>
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
</body>
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

            $("#ver").on('click',()=>{
            	//alert("Hrllo");
            	
	                $('#table').DataTable({
	                    //processing: true,
	                    //serverSide: true,
	                    paging: false,
    					searching: false,
	                    ajax: '/generar',
	                    columns:[
	                        {data:'name'},
	                        {data:'lastname'},
	                        {data:'edad'}
	                    ]
	                });
            	

            });
            
     
    </script>
</html>