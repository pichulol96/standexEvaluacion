@extends('welcome')
@section('contenido')
 @livewire('show-datos')

@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function(){
        
 		$("a").removeClass('focus');
 		$("#consulta").addClass("focus");
 		$('#example').DataTable({
 			responsive:true,
 			autoWidth:false,

 			"language":{
 				"search":"Buscar",
 				"lengthMenu":"Mostrar _MENU_ registro por  pagina",
                "previous":"atras",
                "Next":"siguiente",
 			}
 		});

 	});

 </script>
@endsection