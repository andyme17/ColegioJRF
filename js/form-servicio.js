/**
 * Script for service form 
*/

//variables
var flag1 = false,
    flag2 = false;

//regular expressions
const regText = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

eventListener();

function eventListener() {     
    document.addEventListener('DOMContentLoaded', iniciar);
}

function iniciar() {
    document.getElementById("btnForm").addEventListener('click', validar, false);
}

document.getElementById("btnCloseForm").addEventListener('click',function(){
    location.href="servicios_afterschool.php";
});

servicio.addEventListener('change', function () {
    return flag1 = true;
});

descripcion.addEventListener('change', function () {
    return flag2 = true;
});

function validaText(campo) {
    limpiarError('error-servicio');
    limpiarError('error-descrip');

    if(campo.name == "servicio"){
        if (campo.value.trim() == "" || !regText.test(campo.value.trim())) {
            error(campo, 'error-servicio', "Ingrese el nombre del servicio.");
            return false;
        }
    }else{
        if (campo.value.trim() == "") {
            error(campo, 'error-descrip', "Ingrese la descripción del servicio.");
            return false;
        }
    }
    
    return true;
}

function validaImagen(obj){
    var uploadFile = obj.files[0];
       
    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|jpeg)$/i).test(uploadFile.name)) {
        error(obj,'error-thumb','Formato de imagen no válido.');   
        document.getElementById('thumb').value = "";
    }
    else {
        var img = new Image();
        img.onload = function () {
            if  (uploadFile.size > 270000){
                error(obj,'error-thumb','El tamaño de la imagen no puede exceder los 250 KB');                
                document.getElementById('thumb').value = "";               
            }else if(uploadFile.name.length > 200){
                error(obj,'error-thumb','El nombre del archivo no debe exceder los 200 caracteres. Por favor, modifica el nombre.');                
                document.getElementById('thumb').value = "";    
            }else{
                limpiarError('error-thumb');
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }                 
}

function validaImagen2(){
    var  thumb = document.getElementById('thumb');
    limpiarError('error-thumb');

    if(thumb.value == ""){
        error(thumb,'error-thumb','Ingrese la imagen del servicio.');
        return false;
    }
    return true;  
}
   
function error(elemento, div_error, mensaje) {
    document.getElementById(div_error).textContent = mensaje;
    document.getElementById(div_error).className = "error";
    elemento.focus();
}

function limpiarError(div_error) {
    document.getElementById(div_error).textContent = "";
    document.getElementById(div_error).className = "";
}

function validar(e) {
    var action = document.getElementById('action').value,
        servicio = document.getElementById('servicio'),
        descripcion = document.getElementById('descripcion');

    if (action === "new") {
        if (validaText(servicio) && validaText(descripcion) & validaImagen2(thumb) &&
            confirm("Pulsa aceptar para añadir un nuevo servicio.")) {
            return true;
        } else {
            e.preventDefault();
            return false;
        }
    } else {
        if ((flag1 === false) && (flag2 === false) && thumb.value =="") {
            if (confirm("Deseas salir sin realizar ningún cambio.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        } else {
            if (validaText(servicio) && validaText(descripcion) &&
                confirm("Pulsa aceptar para actualizar la sección de servicios.")) {
                return true;
            } else {
                e.preventDefault();
                return false;
            }
        }
    }
}