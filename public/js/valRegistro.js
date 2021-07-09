$(function() {
  var registreForm = $("#formulario"); 
   jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Solo letras");

  if(registreForm.length)
  { 

      registreForm.validate({
            
          rules:{
              nombre:{
                 required:true,
                 maxlength:75,
                 

                  
                  
             },

            fecha:{
              required:true,
            },
             

             tarjeta:{
                 required:true,
                 number:true,
                 minlength:13,
                 maxlength:18,
                 
                 
             },
             canal:{
                 required:true,
                 url:true,
                 
             },
             

          },

          

          messages:{
                nombre:{
                 required:"requerido",
                 maxlength:"maximo 75 caracteres"
                 
                
                },

                fecha:{
                  required:"",
                },
              
                
                tarjeta:{
                 required:"requerido",
                 number:"solo numeros",
                 range:"13 a 18 digitos",
                 minlength:"minimo 14",
                 maxlength:"maximo 18"
                 
                },
                canal:{
                 required:"requerido",
                 url:"solo acepta url"
               
                }     
            },
            submitHandler:function(){
                   //limpiamos el localstorage 
                   localStorage.removeItem("nombre");
                   //guardamos en localstorage un objeto con los datos del nuevo registro
                   let objeto=
                   {
                     nombre:$('#nombre').val(),
                     fecha:$('#fecha').val(),
                     tarjeta:$('#tarjeta').val(),
                     canal:$('#canal').val(),
                   };
                   //covertimos a string el objeto para poder guardrlo
                   localStorage.setItem("datos",JSON.stringify(objeto));

                   $.ajax({
                    url: 'registrar',
                    method: "POST",
                    data: $('#formulario').serialize(),_token:$('input[name="_token"]').val(),
                    success: function(data) {
                        $('#miModal').modal('show')
                        document.getElementById('formulario').reset();
                        //$('#resp').html(data);
                       
                        
                    }
                });
               

                
          }

      })

      

  }
             
   
});



