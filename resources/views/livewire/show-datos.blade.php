
<div>
	@if(Session::has('eliminar'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('eliminar') }}!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
	  <div class="card-header">
	    Featured
	  </div>
	  <div class="card-body">
	     <button class="btn btn-success" data-toggle="modal" data-target="#registroModal">Add</button>
	        <table id="example" class="table table-striped table-bordered" style="width:100%">
			  <thead class="thead-default">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Apellidos</th>
			      <th scope="col">Edad</th>
			      <th scope="col">Eliminar</th>

			    </tr>
			  </thead>
			  <tbody>
			  	 @foreach($personas as $persona)
				    <tr>
				      <th scope="row">{{ $persona->id }}</th>
				      <td>{{ $persona->nombre }}</td>
				      <td>{{ $persona->apellidos }}</td>
				      <td>{{ $persona->edad }}</td>
				      <td>
				      	<button type="button" wire:click="eliminarPersona({{ $persona->id }})" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						  <i class="fas fa-edit"></i>
						</button>
				      	<button type="button" wire:click="eliminarPersona({{ $persona->id }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
						  <i class="fas fa-minus-circle"></i>
						</button>
				      </td>
				    </tr>
				 @endforeach
			  </tbody>
			</table>
	  </div>
	</div>



	<!-- Modal Eliminar -->
	<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Eliminar confirmacion</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Esta seguro que desea eliminar este registro?</p>
	        @if(($eliminar!=""))
	         {{ $eliminar->id }}
	         {{ $eliminar->nombre }}
	         {{ $eliminar->apellidos }}
	        @endif
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        <button wire:click="destroy()" type="button" class="btn btn-danger"  data-dismiss="modal">Eliminar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Registrar -->
	<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Registrar persona</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	        	<div class="col-sm-6">
	        		<input wire:model="mensaje" type="text"  placeholder="Nombre" class="form-control" name="">
	        		<br>
	        		{{ $mensaje }}
	        	</div>
	        	<div class="col-sm-6">
	        		<input type="text" placeholder="Apellidos" class="form-control" name="">
	        		<br>
	        	</div>
	        	<div class="col-sm-6">
	        		<input type="text" placeholder="Telefono" class="form-control" name="">
	        		<br>
	        	</div>
	        	<div class="col-sm-6">
	        		<input type="text" placeholder="Tarjeta" class="form-control" name="">
	        		<br>
	        	</div>
	        	<div class="col-sm-6">
	        		<input type="date" placeholder="Fecha de nacimiento" class="form-control" name="">
	        		<br>
	        	</div>
	        	<div class="col-sm-6">
	        		<input type="text" placeholder="edad" class="form-control" name="">
	        		<br>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary">Guardar</button>
	      </div>
	    </div>
	  </div>
	</div>
	
</div>
