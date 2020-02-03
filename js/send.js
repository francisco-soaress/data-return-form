$(function(){
    $('.send-form').submit(function(){
        var dados = $(this).serialize();
        var urlSend = './sendform/send-form.php'        
        
        $.ajax({
            type: 'POST',
            data: dados,
            url: urlSend,
            dataType: 'json',
            beforeSend: function () {
                $('button span').fadeOut();
                $('.img-ajax-loading').fadeIn();
            },
            success: function(data){
                console.log(data);

                if(data[0]){                    
                    $('.img-ajax-loading').fadeOut();
                    $('button span').fadeIn();
                    $('#form_contact input[name="nome"]').val('');
                    $('#form_contact input[name="email"]').val('');
                    $('#form_contact select[name="estado"]').val('Acre');
                    
                    $('.tbody_content').append("<tr><td>" + data[1] + "</td>" + "<td>" + data[2] + "</td>" + "<td>" + data[3] + "</td></tr>");
                    
                    
                }                 
                if (data.erro){
                    $('.erro_tag').fadeIn();
                    $('.img-ajax-loading').fadeOut();
                    $('button span').fadeIn();
                }                 
            },
            error: function(){                
                    alert('Erro: Algo não foi encontrado');                
            }
        });         
        return false;        
    });
});