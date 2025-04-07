$('form.validate').submit(function () {

  $form = $(this).attr("id");
  $e = 0;
  
  $('span.helper').remove();
  $('#formErro').html('');

  $("form#"+$form+" input, form#"+$form+" select, form#"+$form+" textarea").each(function(){

    $(this).removeClass('helperShow');    
  
    var attr = $(this).attr("validate");
    var attrCheck = $(this).attr("validateCheck");

    if (($(this).val() == '' || $(this).val() == null) && (typeof attr !== typeof undefined && attr !== false)){
        $(this).addClass('helperShow');
        $(this).parent().append('<span class="helper">** Campo obrigatório</span>');
        $e++;
    }

    if (typeof attrCheck !== typeof undefined && attrCheck !== false){
        if ($(this).is(':checked')){

        }else{
            $(this).addClass('helperShow');
            $(this).parent().append('<span class="helper">** Você precisa clicar para concordar</span>');
            $e++;
        }
        
    }

  });

  if($e!=0){
      $('#formErro').html('Erro ao enviar, verifique o(s) campo(s) obrigatório(s)!');
      return false;
  }else{

    //disable
    $("form#"+$form+" button").prop("disabled",true);;
    $("form#"+$form+" button").html('enviando...');

    return true;

  }

});