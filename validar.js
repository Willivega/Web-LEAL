function validar(){

    //alert ("La funcion validar esta trabajando");
    
    var nombre,apellido,telefono,sexo,email;

    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    telefono = document.getElementById("telefono").value;
    sexo = document.querySelector('input[name="sexo"]:checked')
    email = document.getElementById("email").value;
     
   

    if(nombre === "" || apellido  === "" ||  telefono === "" ||  sexo === "" ||  email === ""){

    alert ("Complete todos los campos del formulario");
    return false;

    }else if(nombre.length>30){
        alert ("El nombre es mayor a 30 caracteres, escriba un nombre mas corto");
        return false;

    }else if(apellido.length>30){
        alert ("El apellido es mayor a 30 caracteres, escriba un apellido mas corto");
        return false;

    }else if(telefono.length>30){
        alert ("El telefono es mayor a 30 caracteres, escriba un telefono mas corto");
        return false;
    }else if(isNaN(telefono)){

        alert ("El telefono escrito no es un numero, escriba un numero");
        return false;


    }else if(email.length>30){
        alert ("El Email es mayor a 30 caracteres, escriba un Email mas corto");
        return false;

    }else if(!sexo){

        alert ("Seleccione una opción del campo sexo");
        return false;

    }
}