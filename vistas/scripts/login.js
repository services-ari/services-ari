function login() {

    //e.preventDefault();
    var logina = $("#usuario").val();
    var clavea = $("#password-field").val();

    $.post("../ajax/usuario.php?op=verificar", 
    {
    "logina": logina, 
    "clavea": clavea 
    },
        function(data) {
            console.log(data);

            if (data.trim() == "null" || data.trim()=="") {
            
                bootbox.alert("Usuario y/o Password incorrectos");
                $("#usuario").val("");
                $("#password-field").val("");

            }else{
                $(location).attr("href", "dashboard.php");
            }
            
        });
}