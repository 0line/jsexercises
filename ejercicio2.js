$(document).ready(function(){ 
   $("#btnpalindromo").on('click',function(){
        $.ajax({ type: "post",
        url: 'api.php',
        data: { "frase": $('#inpfrase').val()},
        dataType: "json"}).done(function(response, textstatus, jqxhr)
            {
                if(response!=0){
                    
                    alert("La palabra es palindroma");
                }
                else{
                    alert("La palabra no es palindroma");
                }
            }).fail(function(jqxhr, textstatus, errorthrown)
        {}).always(function(resp_o_jqxhr, textstatus, jqxhr_o_errorthrown)
        {
        });
   });
});