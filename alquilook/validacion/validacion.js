function validacion_login_propietario(){

	var nombre_usuario = document.getElementById("usuario1").value;
	var filtro_nombre = /^([A-Za-z0-9_\-ñÑ]+)$/;
	if(nombre_usuario == "") {
  		alert("Introduzca su nombre");
  		return false;
	} else {
		if (!filtro_nombre.test(nombre_usuario)){
			alert("Su nombre no es correcto, vuelva a intentarlo");
			return false;
		}
	}

	var contrasena = document.getElementById("password1").value;
	if(contrasena == ""){
  		alert("Introduzca su contraseña");
  		return false;
	}

	return true;
}

function validacion_login_inquilino(){

	var nombre_usuario = document.getElementById("usuario2").value;
	var filtro_nombre = /^([A-Za-z0-9_\-ñÑ]+)$/;
	if(nombre_usuario == "") {
  		alert("Introduzca su nombre");
  		return false;
	} else {
		if (!filtro_nombre.test(nombre_usuario)){
			alert("Su nombre no es correcto, vuelva a intentarlo");
			return false;
		}
	}

	var contrasena = document.getElementById("password2").value;
	if(contrasena == ""){
  		alert("Introduzca su contraseña");
  		return false;
	}

	return true;
}

function validacion_registro(){
	
	//aceptamos como nombre y apellidos combinaciones de letras y espacios
	var nombre = document.getElementById("nombre").value;
	var filtro_nombre = /^([A-Za-z0-9ñÑ\s]+)$/;
	if(nombre == "") {
  		alert("Introduce tu nombre");
  		return false;
	} else {
		if (!filtro_nombre.test(nombre)){
			alert("Tu nombre no es correcto");
			return false;
		}
	}
	
	//aceptamos como email cualquier combinacion alfanumerica de al menos un caracter
	//seguido de la arroba, seguido de cualquier combinacion alfanumerica, un punto
	//y combinacion alfanumerica de 2, 3 o 4 letras
	
	var email = document.getElementById("email").value;
	var filtro_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(email == ""){
  		alert("Introduce tu email");
  		return false;
	}
	else {
		if(filtro_email.test(email) == false) {
			alert("La direccion de correo no es valida");
			return false;
		}
	}

    
        var pass = document.getElementById("pass").value;
        if(pass == ""){
                alert("Introduce tu password");
                return false;
        }
        var pass2 = document.getElementById("repita_pass").value;
        if(pass2 == "") {
		alert("Vuelva a escribir su password");
		return false;
	} else {
		if ( pass != pass2){
			alert("Ha fallado la verificacion del password");
                        return false;
                }
        }

	return true;
}

function validacion_envio(){

	var dni = document.getElementById("dni_envio").value;
	var letra = document.getElementById("letra_envio").value;
	var filtro_letra = /^([a-zA-Z])$/;
	var filtro_dni = /^([0-9]{8})$/;
	if(dni == "") {
		alert("Falta DNI");
  		return false;
	}
 	if (isNaN(dni)) {
		alert("El DNI no es valido");
		return false;
	}
	if (!filtro_dni.test(dni)) {
		alert("El DNI no es valido");
		return false;
	}
	if (letra == "") {
		alert("Falta la letra del DNI");
        return false;
	}
	if (!filtro_letra.test(letra)) {
        alert("La letra del DNI no es valida");
        return false;
 	}

    var tabla = new Array();
    tabla = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    var modulo = dni%23;
    var nif = tabla[modulo];
        
  	if((nif == letra.toUpperCase())==false){
  		alert("La letra de tu DNI no es correcta");
   		return false;
	}

	//aceptamos como nombre y apellidos combinaciones de letras y espacios
	var nombre = document.getElementById("nombre_envio").value;
	var filtro_nombre = /^([A-Za-z0-9ñÑ\s]+)$/;
	if(nombre == "") {
  		alert("Introduce tu nombre");
  		return false;
	} else {
		if (!filtro_nombre.test(nombre)){
			alert("Tu nombre no es correcto");
			return false;
		}
	}

    var apellidos = document.getElementById("apellidos_envio").value;
    if(apellidos == "") {
    	alert("Introduce tus apellidos");
        return false;
    } else {
    	if (!filtro_nombre.test(apellidos)){
        	alert("Tus apellidos no son correctos");
            return false;
        }
    }


	var direccion = document.getElementById("direccion_envio").value;
	var filtro_direccion = /^([A-Za-z0-9ñÑ\s,]+)$/;
	if(direccion == ""){
  		alert("Introduce tu direccion postal");
  		return false;
	} else {
		if (!filtro_direccion.test(direccion)) {
			alert("Tu direccion postal no parece ser correcta");
			return false;
		}
	}

    var poblacion = document.getElementById("poblacion_envio").value;
    var filtro_ciudad = /^([A-Za-zñÑ\s]+)$/;
    if(poblacion == "") {
    	alert("Introduce tu poblacion");
        return false;
    } else {
    	if (!filtro_ciudad.test(poblacion)){
        	alert("Tu poblacion no es correcta");
            return false;
        }
    }

    var ciudad = document.getElementById("ciudad_envio").value;
    if( ciudad == "") {
    	alert("Introduce tu ciudad");
        return false;
    } else {
    	if (!filtro_ciudad.test(ciudad)){
        	alert("Tu ciudad no es correcta");
            return false;
        }
    }

    var filtro_cp = /^([0-9]{5})$/;
    var cp = document.getElementById("codigo_postal_envio").value;
    if(cp == "") {
    	alert("Introduce tu codigo postal");
        return false;
    }
	if (isNaN(cp)) {
       	alert("El Codigo Postal no es valido");
       	return false;
	}
	if (!filtro_cp.test(cp)) {
       	alert("El Codigo Postal no es correcto");
       	return false;
	}

    var pais = document.getElementById("pais_envio").value;
    if(pais == "") {
    	alert("Introduce tu pais");
        return false;
    } else {
    	if (!filtro_ciudad.test(pais)){
        	alert("Tu pais no es correcto");
            return false;
        }
    }

	return true;
}

function validacion_guardar(){

	// 20 pares de zapatos como maximo
	var cantidad = document.getElementById("cantidad_zapato").value;
	var filtro_numero = /^(20|1[0-9]|[0-9])$/;
	if(cantidad == ""){
  		alert("Introduce una cantidad entre 0 y 20");
  		return false;
	}
	if (isNaN(cantidad)){
		alert("Cantidad no valida");
		return false;
	}
	if (!filtro_numero.test(cantidad)){
		alert("Introduce una cantidad entre 0 y 20");
		return false;
	}
	return true;
}