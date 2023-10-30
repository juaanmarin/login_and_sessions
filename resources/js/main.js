function mostrarContrasena(cb){
    var tipo = document.getElementById("password");

    if(cb.checked){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}