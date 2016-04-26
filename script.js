/*$(document).ready(function() {
    //loadForm(1);
    $('body').on('click', '#last', function(e){
        e.preventDefault;
        window.location.href = "tmp.php";
    })
});*/


function loadForm(elem) {
    formulaire=$(elem).parent('form');
    
    $.ajax({
        url:formulaire.attr('action'),
        type:formulaire.attr('method'),
        data:formulaire.serialize(),
        dataType:'text',
        success:function(html){
            if(html!=undefined)
            {
                if(html!=false)
                {
                     $('.question').slideUp().html(html).slideDown();   
                     
                }
                
               
                else{
                   alert("Veuillez remplir tous les champs du questionnaire");
                    
                }
               
            }
            
        }
      });

}

function loadFormLast(elem) {
    formulaire=$(elem).parent('form');
    
    $.ajax({
        url:formulaire.attr('action'),
        type:formulaire.attr('method'),
        data:formulaire.serialize(),
        dataType:'text',
        success:function(html){
            if(html!=undefined)
            {
                if(html==false)
                {
                   alert("Veuillez remplir tous les champs du questionnaire");
               }else{
                window.location.href = "tmp.php";
               }
               
            }
            
        }
      });

}