
//Validar dados do cadastro

$(document).ready(function () {

    $('#frmcadastro').validate({
        rules: {
        
            edtimagems: {
                required: true,
                file: true,
            },
            agree: "required"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    })

    $("#btnregistro").click(function () {
        let valida = $('#frmcadastro').valid();
        if (valida == true) { 
            alert();
        } else { 
        
        }
    });
});

//Muda o checkbox quando clicado
//Utilizado para validação de termos de uso no modal
 function aceite(){
  $("#agreeTerms").prop("checked", true);
}






