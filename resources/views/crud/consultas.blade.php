@extends('welcome')
@section('contenido')

    <div class="shadow consulta  p-3 mb-5 bg-white rounded">
	 <center>
	 	<h4>Consultas</h4>
	 </center>
        @if(Session::has('accion'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ Session::get('accion') }}!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             </div>
        @endif

	 <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                    <th>Tarjeta</th>
                    <th>Canal de youtube</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @php($indice=1)
                @foreach($personas as $persona)
                    <tr>
                        <td>{{ $indice }}</td>
                        <td id="persona">{{ $persona->nombre }}</td>
                        <td>{{ $persona->fecha_nacimiento }}</td>
                        <td>{{ $persona->tarjeta }}</td>
                        <td>
                          <a href="{{ $persona->canal }}" target="_blank">{{ $persona->canal }}</a>
                        </td>
                        <td>
                            <button class="editar btn btn-primary"data-toggle="modal" data-target="#persona{{$persona->id}}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#eliminar{{ $persona->id }}"><i class="fas fa-minus-circle"></i></button>
                        </td>
                    </tr>
                 @php($indice++)
                 @endforeach   

                
              </tbody>
        </table>
         <!-- Modal Actualizar -->
        @foreach($personas as $persona)
            <div class="modal  fade" id="persona{{$persona->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered   modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <form method="post" action="{{url('editar')}}">
                           @csrf
                            <div class="row">
                                <input type="text" hidden="" value="{{$persona->id }}" name="id">
                                <div class="col-sm-6">
                                  <label>Nombre</label>
                                  <input required="" type="text" class="form-control" value="{{$persona->nombre }}" placeholder="nombre" id="nombre" name="nombre"> 
                                </div>
                                
                                
                                <div class="col-sm-6">
                                 <label>Tarjeta</label>
                                 <input required="" type="text" class="form-control" value="{{$persona->tarjeta }}" placeholder="nombre" id="nombre" name="tarjeta">
                                </div>
                                <div class="col-sm-6">
                                 <label>Fecha de nacimiento</label>
                                 <input required="" type="date" class="form-control" value="{{$persona->fecha_nacimiento }}" placeholder="nombre" id="nombre" name="fecha">
                                </div>
                                <div class="col-sm-6">
                                 <label>Canal de youtube</label>
                                 <input required="" type="text" class="form-control" value="{{$persona->canal }}" placeholder="nombre" id="nombre" name="canal">
                                </div>

                                <dir class="col-sm-12">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </dir>
                            </div>
                         </form>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endforeach   

        <!-- Modal Eliminar -->
        @foreach($personas as $persona)
        <div class="modal fade" id="eliminar{{$persona->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Estas seguro de eliminar el siguiente registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="{{ url("eliminar",$persona->id) }}">
                 @csrf
                 @method('delete')   
                <h5>ID: {{ $persona->id }}</h5>
                <h5>Nombre: {{ $persona->nombre }}</h5>

              
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Aceptar</button>
              </div>
              </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>    
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