<?php 


if (((isset($_POST['enviar'])) {
    if (!empty($_POST['email']) && !empty($_POST['contraseña1']))) {
        $email = $_POST['email'];
        $contraseña1 = $_POST['contraseña1'];
        $header = "From:lucero14.lucero@gmail.com" . "/r/n";
        $header.= "Reply-To: lucero14.lucero@gmail.com" . "/r/n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email, $contraseña1);

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
           
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">           

<link type="text/css" rel="stylesheet" href="practica_1.css">
<script type="text/javascript" src="practica_1.js"></script>
    
</head>
<body>


<div class="container"> 

    <div id="form">
        <h3>INICIAR SESION</h3>
        <hr>
        <form id="form1" action="index.html" method="post">
            <input class="inputs" type="email" id="email" name="email" value="" placeholder="Ingrese su Email" onmouseover="mostrarDatos('Email');" onmouseout="sacarDatos();" required><br>
            <input class="inputs" type="password" id="contraseña1" name="contraseña1" value="" placeholder="Ingrese su Contraseña"   onmouseover="mostrarDatos('Contraseña');" onmouseout="sacarDatos();" required><br>
            <input id="boton_e" type="submit" value="enviar" onclick="validarDatos();" ><br>
            <hr>
            <input id="boton_cc" type="button" value="Crear Cuenta" onclick="crearCuenta();">
        </form>
        <p id="contenido"></p>
    </div>

    <div id="form2">
        <h3>Registrate</h3>
        <p>Facil y Rapido</p>
        <hr>
        <form id="form3" action="index.html" method="post">
            <input class="input_nya" type="text" id="nombre" name="nombre" value="" placeholder="Nombre" onmouseover="validarMostrar('Nombre');" onmouseout="validarQuitar();" required>
            <input class="input_nya" type="text" id="apellido" name="apellido" value="" placeholder="Apellido" onmouseover="validarMostrar('Apellido');" onmouseout="validarQuitar();" required><br>
            <input class="inputs2" type="email" id="Email" name="email" value="" placeholder="Email" onmouseover="validarMostrar('Email');" onmouseout="validarQuitar();" required><br>
            <input class="inputs2" type="password" id="contraseña" name="contraseña" value="" placeholder="Contraseña"  onmouseover="validarMostrar('Contraseña');" onmouseout="validarQuitar();" required><br>
            <input class="input_nac" type="date" id="fecha_nac" name="fecha_nac" value="" placeholder="Fecha de Nacimieto" required><br>
            <input class="input_r" type="radio" id="hombre" name="hombre" value="" required>Hombre
            <input class="input_r" type="radio" id="mujer" name="mujer" value="" >Mujer<br>
            <input class="input_s" type="submit" value="Registrarme" onclick="validarDato();" >
            <input class="input_b" type="button" value="X" title="cerrar" onclick="cerrarCuenta();"><br>
            
        <div id="resultado"></div>
        </form>
    </div>

</div>   



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
<script src="js/jquery.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->


<script>
    function crearCuenta() {
    $("#form2").show();
    $("#form").hide();

    
    document.getElementById("container").style.display = "block";
document.getElementById("form").style.display = "none";
  }
</script>


</body>
</html>
