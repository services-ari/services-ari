var tabla;
var gateSe="";
var bandera=true;

init();

var now = new Date();
var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);
var today = now.getFullYear()+"-"+(month)+"-"+(day) ;


function selectGate (id,gate){
  console.log(gate);
  gateSe=id;

  $('input.gate').prop('checked',false);
  $('#'+gate).prop('checked',true);


}

function init(){

    $( "#menu2" ).addClass( "active" );
    $('#btn_procesando').hide();
    $('#btn_enviar').show();
    $('#idProcesando').hide();
    

    $.post("../ajax/cc.php?op=selectGates", function(r){
      $('#gates').append(r);    
    });

}

function enviatTest(){

  var ccs=$('#tx_ccs').val();
  console.log(ccs);

  if(gateSe=="" || ccs==""){
    bootbox.alert("Ingrese los datos");
  }else{
    $.post("../ajax/generador.php?op=insertTest",{'cc':ccs,
    'usuario':'',
    'identificador':'',
    'estado':'test',
    'gate':gateSe}, function(r){
      if(r==1 || r.trim()=="1"){
        console.log("corriendo");
        $('#btn_procesando').show();
        $('#btn_enviar').hide();
        $("#tx_ccs" ).prop( "disabled", true );
        Concurrent.Thread.create(run);
      }
    });
  }
}

function detener(){

    $.post("../ajax/generador.php?op=update_test_stop",{
    'usuario':'',
    'identificador':''}, function(r){
      if(r==1 || r.trim()=="1"){
        console.log("detenido");
        bandera=false;
        $('#tx_ccs').val("");
        $('#btn_procesando').hide();
        $('#btn_enviar').show();
        $('#idProcesando').hide();
        $("#tx_ccs" ).prop( "disabled", false );
      }
    });

 
}


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  
  async function demo() {
    console.log('Taking a break...');
    await sleep(15000);
    console.log('Two seconds later, showing sleep in a loop...');
  
    // Sleep in loop

    let arrayLives = [];
    let arrayDives = [];

    while(bandera==true){
     
        await sleep(5000);
        console.log("GET CC");

        $.post("../ajax/generador.php?op=selectccserv",{
        'usuario':'',
        'identificador':''}, function(r){

           r = JSON.parse(r);

           console.log(r.proceso);


           var nproceso = r.proceso;
           var elementsproceso = nproceso.split('_');

           var nlives = r.lives;
           var elementslives = nlives.split('_');

           var ndead = r.dead;
           var elementsdead = ndead.split('_');


            $('#idProcesando').show();
            $('#procesando').html((elementsproceso.length)-1);
            $('#lives').html((elementslives.length)-1);
            $('#deads').html((elementsdead.length)-1);

            if((elementsproceso.length)-1==0){
                bandera=false;
            }

            for(var l=0;l<=elementslives.length-1;l++){

                let banLive=false;
                let banentraLive=false;
                arrayLives.forEach(function(elemento, indice, array) {
                  
                        banentraLive=true;
                        if(elemento.trim()==elementslives[l].trim()){
                            banLive=true;
                        }
                });

             
                    if( !banLive){
                        arrayLives.push(elementslives[l].trim());
                        if(elementslives[l]!=""){
                            $('#cardLives').append("<p>live : "+elementslives[0]+" </p>");
                        }
                       }
            }

            for(var d=0;d<=elementsdead.length-1;d++){

                let banDead=false;
                let banEntraDead=false;
                arrayDives.forEach(function(elemento, indice, array) {
                    
                        banEntraDead=true;
                        if(elemento.trim()==elementsdead[d].trim()){
                            banDead=true;
                           }
                });

                    if( !banDead){
                        arrayDives.push(elementsdead[d].trim());
                        if(elementsdead[d]!=""){
                            $('#cardDeads').append("<p>dead : "+elementsdead[d]+"</p>");
                        }
                       } 
            }

        });
    }
  }

  function run(){
      demo();
  }



   