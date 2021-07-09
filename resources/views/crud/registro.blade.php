@extends('welcome')
@section('contenido')
	<div class=" card shadow p-3 mb-5 bg-white rounded"> 
	 	<h4>Registro</h4>

	 	<form id="formulario"   >
	 	    @csrf
		 	
		 		
		 		<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fas fa-spell-check"></i>
				    </span>
				  </div>
				  <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>
			

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="far fa-id-card"></i>
				    </span>
				  </div>
				  <input type="text" id="tarjeta" name="tarjeta" placeholder="Tarjeta" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>
				

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="far fa-clock"></i>
				    </span>
				  </div>
				  <input type="date" id="fecha" name="fecha" placeholder="Tarjeta" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>

			
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	
				    	<i class="far fa-id-card"></i>
				    </span>
				  </div>
				  <input type="text" id="canal" name="canal" placeholder="canal youtube" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>
			

		 		<button id="registrar" class="btn btn-primary btn-block"><i class="fas fa-check-circle"></i>Registrar</button>
		</form> 		
	</div>
    <!-- Modal -->
	<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="alert alert-success" role="alert">
			  Registrado con exito!
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Listo</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
@endsection
 
@section('script')

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
    <script src="{{ asset('js/valRegistro.js') }}"></script>
	<script type="text/javascript">

    
		$(document).ready(function()
		{

		     	$("a").removeClass("focus");
		       $("#registro").addClass("focus");  
		     
		});

	</script>   
@endsection