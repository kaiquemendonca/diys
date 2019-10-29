

function apertouTecla(){
    
        document.getElementById("emailbut").style.backgroundColor="#08505a";
        document.getElementById("emailbut").style.pointerEvents="visible";
        document.getElementById("emailbut").style.cursor="pointer";

        var campo = document.getElementById("emaillog").value;
        if(campo.length<1){
            document.getElementById("emailbut").style.backgroundColor="#E0E0E0";
            document.getElementById("emailbut").style.pointerEvents="none";
            document.getElementById("emailbut").style.cursor="default";
        }

}

function apertouTeclaSenha(){
        document.getElementById("emailbut").style.backgroundColor="#08505a";
        document.getElementById("emailbut").style.pointerEvents="visible";
        document.getElementById("emailbut").style.cursor="pointer";

        var campo = document.getElementById("senhalog").value;
        if(campo.length<1){
            document.getElementById("emailbut").style.backgroundColor="#E0E0E0";
            document.getElementById("emailbut").style.pointerEvents="none";
            document.getElementById("emailbut").style.cursor="default";
        }
}

function validarEmail(){
    var campoemail = document.getElementById("emaillog").value;
    var email = "kai_que15@hotmail.com";
    if(campoemail== email){
        window.location.href = 'senha.html';
    }else{
        alert("email não válido");
    }
}

function validarSenha(){
    var camposenha= document.getElementById("senhalog").value;
    var senha= "coxinha123";
    if(camposenha==senha){
        alert("logado");
    }else{
        alert("senha incorreta");
    }

}