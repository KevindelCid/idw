

function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 

//     $(document).ready(function () {
//     //CheckBox mostrar contraseña
//     $('#ShowPassword').click(function () {
//         $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
//     });
// });



function mostrarPassword2(){
    var cambio = document.getElementById("txtPassword2");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 

//     $(document).ready(function () {
//     //CheckBox mostrar contraseña
//     $('#ShowPassword2').click(function () {
//         $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
//     });
// });

var calendar = null;


document.addEventListener('DOMContentLoaded', function() {


    // let formulario = document.querySelector("form");
    
   
    

    
      var calendarEl = document.getElementById('agenda');
    
       calendar = new FullCalendar.Calendar(calendarEl, {
        
            timeZone: 'local',
        initialView: 'dayGridMonth',
      
        locale:"es",

    
        headerToolbar: {

            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
    
        },
        slotLabelFormat:{
            hour: '2-digit',
            minute: '2-digit',
            hour12: true
            },//se visualizara de esta manera 01:00 AM en la columna de horas
eventTimeFormat: {
              hour: '2-digit',
              minute: '2-digit',
              hour12: true
             },//y este código se visualizara de la misma manera pero en 

        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        select: function(arg) {
        
            let m = moment(arg.start).format("YYYY-MM-DD");

            let hora_inicio = moment(arg.start).format("hh:mm:ss");
            let hora_finalizacion = moment(arg.start).format("hh:mm:ss");

console.log(hora_inicio, hora_finalizacion, m);

         $("#fecha").val(m);
         $("#inicio").val(hora_inicio);
         $("#finalizacion").val("30");
         $("#evento").modal();
          calendar.unselect();
        },
      

        eventClick: function(info) {
            // alert('Event: ' + info.event.title);
            // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            // alert('View: ' + info.view.type);
            moment.locale('es', {
                months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
                monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
                weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sabado'.split('_'),
                weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
                weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
              }
              );
            let hora_inicioE = moment(info.event.start).format("hh:mm A");
            let fecha_inicioE = moment(info.event.start).format("dddd DD [de] MMMM [de] YYYY");


            let hora_inicioed = moment(info.event.start).format("hh:mm:ss");
          
            let fecha_inicioed = moment(info.event.start).format("YYYY-MM-DD");

            $("#tituloE").text(info.event.title.toUpperCase());
            $("#tituloed").val(info.event.title);
            $("#idev").text(info.event.descripcion);
            // alert(info.event.id);
      

            $("#HoraE").text("La cita quedó agendada para la fecha: "+fecha_inicioE+" a las "+hora_inicioE);
            $("#inicioed").val(hora_inicioed);
            $("#fechaed").val(fecha_inicioed);

            $("#click_evento").modal(); // show para ver el modal && modal('hide') para esconder la vista.
// buscar(info.event.id);
var id = info.event.id;



$.ajax({
    type:'POST',
    url: 'http://localhost/IDW/public/agenda/eventito?id='+id,
    data: {id:id},
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      
      success: function(response) {

        
     

        var resultado = JSON.parse(JSON.stringify(response));
        console.log(resultado);
   
        $("#descriE").text(resultado["datoid"]);
        $("#descripcioned").val(resultado["datoid"]);




    }
});
//     .done(function(response){
        
// alert(response.Monto[0]);

//     //     console.log(respuesta);
//     //    alert(respuesta);

// });




        
            // change the border color just for fun
            info.el.style.borderColor = 'red';
          },


        editable: true,
     
        eventSources:  'http://localhost/IDW/public/agenda/listar',
        
        
      });
  


    //     dateClick:function(info){
    
    //         $("#evento").modal("show");
    //     }
    
    
    //   });
    
    
    
      calendar.render();
    
    // document.getElementById("btnGuardar").addEventListener("click", function(){
    
    // const datos = new FormData(formulario);
    // console.log(datos);
 
    
    //     axios.post("http://localhost/walijab/public/perfil/agregar", datos).
    //     then(
    //         (respuesta)=>{

    //             $("#evento").modal("hide");
    //         }

    //     )


    // });
    
    });
    

    function limpiar(){

        $('#evento').modal('hide');
        $("#fecha").val("");
        $("#inicio").val("");
        $("#tiempo").val("");
        $("#titulo").val("");
        $("#descripcion").val("");

    }




function buscar(id){




}










    function guardar(){


            // agrego la data del form a formData
            var fd = new FormData(document.getElementById("datosform"));
            

        let fecha = $("#fecha").val();
        let hora = $("#inicio").val();
        let tiempo = $("#tiempo").val();
        let hora_inicial = moment(fecha+" "+hora).format('HH:mm:ss');
        let hora_final = moment(fecha+" "+hora).add(tiempo,'m').format('HH:mm:ss');

        fd.set("inicio", hora_inicial);
        fd.set("horafinal", hora_final);


      
          
            $.ajax({
                type:'POST',
                url: 'http://localhost/IDW/public/agenda/guardar',
                data:fd,
                cache:false,
                contentType: false,
                processData: false,
             
            }).done(function(respuesta){

                if(respuesta && respuesta.ok){
                    // $('agenda').fullCalendar( 'refetchEvents' );
                   
                    // $("#agenda").fullCalendar('render');
               
                    calendar.refetchEvents();
                    alert("se agregó el evento");
                    limpiar();
                    
                }else{

                    alert(" Hay un error al ingresar el evento");
                }

            });
            
    

    }


    function editar(){


        // agrego la data del form a formData
        var fded = new FormData(document.getElementById("datosed"));
        

    let fecha = $("#fechaed").val();
    let hora = $("#inicioed").val();
    // let tiempo = $("#tiempo").val();
    let hora_inicial = moment(fecha+" "+hora).format('HH:mm:ss');
    // let hora_final = moment(fecha+" "+hora).add(tiempo,'m').format('HH:mm:ss');

    fded.set("inicio", hora_inicial);
    // fd.set("horafinal", hora_final);


  
      
        $.ajax({
            type:'POST',
            url: 'http://localhost/IDW/public/agenda/editar',
            data:fded,
            cache:false,
            contentType: false,
            processData: false,
         
        }).done(function(respuesta){

            if(respuesta && respuesta.ok){
                // $('agenda').fullCalendar( 'refetchEvents' );
               
                // $("#agenda").fullCalendar('render');
           
                calendar.refetchEvents();
                alert("se editó el evento");
                limpiar();
                
            }else{

                alert(" Hay un error al modificar el evento");
            }

        });


}