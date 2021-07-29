
/*div form*/
/*function onclick crearCuenta*/
/*function crearCuenta() {
    document.getElementById("form2").style.display = "block";
    document.getElementById("form").style.display = "none";
}*/


  

/*function onmouseover mostrarDatos*/
function mostrarDatos(datos) { 
    if ((datos == 'Contraseña') || (datos == 'Email')) {
        document.getElementById("contenido").innerHTML = "Complete el campo: <b>" + datos + "</b>";
    }
}

/*function onmouseout*/
function sacarDatos() {
    document.getElementById("contenido").innerHTML = "";
}


/*function validardatos*/
function validarDatos() {
     
    var form1 = document.getElementById('form1').value;
    var email = document.getElementById('email').value;
    var contraseña1 = document.getElementById('contraseña1').value;
     
    if   (email == 0) {
    document.getElementById("contenido").innerHTML = "<b>Esta vacio el campo email!</b>";
    return false;
      
    }  
    
    if  (email.indexOf("@") < 0) {
        document.getElementById("contenido").innerHTML = "<b>Escriba bien el Email</b>" ; 
        return false;  
    } 
    
  
    if (contraseña1 == 0) {
    document.getElementById("contenido").innerHTML = "<b>Esta vacio el campo Contraseña!</b>";
    return false;
    
    
             
    }  
    

    form1.submit();


   

  }





  
        /*function onclick crearCuenta*/
function cerrarCuenta() {
    document.getElementById("form2").style.display = "none";
    document.getElementById("form").style.display = "block";



document.getElementById("container").style.display = "none";
document.getElementById("form").style.display = "block";
}



/*function onmouseover mostrarDatos*/
function validarMostrar(mostrar) {
    if ((((mostrar == 'Nombre') || (mostrar == 'Apellido') || (mostrar == 'Email') || (mostrar == 'Contraseña')))) {
    document.getElementById("resultado").innerHTML = "Complete el campo <b> " + mostrar + " </b> ";
    }
}


/*function onmouseout validarQuitar*/
function validarQuitar() {
    document.getElementById("resultado").innerHTML = "";
}

/*function onclick validarDato*/
function validarDato() {
    var form3 = document.getElementById('form3').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var Email = document.getElementById('Email').value;
    var contraseñas = document.getElementById('contraseña').value;
    var fecha_nac = document.getElementById('fecha_nac').value;
    var hombre = document.getElementById('hombre').value;   
    var mujer = document.getElementById('mujer').value;


    
    if (nombre == 0) {
    document.getElementById("resultado").innerHTML = "<b> Esta vacio el campo Nombre!</b>";
    return false;
    }

    if (nombre.length < 5) {
        document.getElementById("resultado").innerHTML = "Ingrese mas de 5 caracteres en el campo <b>Nombre</b>";
        return false;
    }     

    if (apellido == 0) {
    document.getElementById("resultado").innerHTML = " <b> Esta vacio el campo Apellido! </b>";
    return false;
    }

    if (apellido.length < 5) {
        document.getElementById("resultado").innerHTML = "<b>Ingrese mas de 5 caracteres en el campo Apellido</b>";
        return false;
    } 

    if (Email == 0) {
        document.getElementById("resultado").innerHTML = " <b> Esta vacio el campo Email!</b>";
        return false;
     }

    if (Email.indexOf("@") < 0) {
        document.getElementById("resultado").innerHTML = "<b>Escriba bien el Email</b>" ;
        return false;    
   } 

    if (contraseñas == 0) {
        document.getElementById("resultado").innerHTML = " <b> Esta vacio el campo Contraseña! </b>";
        return false;
      }


    if (fecha_nac == 0) {
        document.getElementById("resultado").innerHTML = "<b>complete su fecha de nacimiento</b>";
         return false;
    }

    if (hombre == 0 ) {
        document.getElementById("resultado").innerHTML = "<b>Completa una de las DOS opciones</b>";
        return false;
    }

    if (mujer == 0) {
        document.getElementById("resultado").innerHTML = "<b>Completa una de las DOS opciones</b>";
         return false;
    }

      form3.submit();    

}
var form = form2 ;

alert(form2 +"<h1>gracias por registrarse</h1>");

