$(function() { 
    const regText = /^[A-Z][A-Z]*/;
    const regNum = /^([0-9])*$/;
    const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

    function alertaRadio(idInput, textAlert) {
        $('#' + idInput).append('<div class="error">' + textAlert + '</div>');
    }
    
    
    function alertaText(idInput, textAlert) {
        $('#' + idInput).after('<div class="error">' + textAlert + '</div>');
    }

    $('input,select').on('click', function () {
        $('.error').remove();
    });
    
    $('input[type="text"]').on('focus', function () {
        $('.error').remove();
    });

    $("#btnForm").click(function(){
        $('.error').remove();

        if(!$('input[name="grado"]').is(':checked')) {
            alertaRadio('campo-radio','Por favor, selecciona una opción');  
            return false;       
        }    

      /*   if(ap_pat_alu =="" || !regText.test(ap_pat_alu)){
            alertaText('text-label','Por favor, ingresa un apellido');    
            return false;        
        }
        
        if(ap_mat_alu =="" || !regText.test(ap_mat_alu)){
            alertaText('text-label-2','Por favor, ingresa un apellido');    
            return false;        
        } */
    });



});