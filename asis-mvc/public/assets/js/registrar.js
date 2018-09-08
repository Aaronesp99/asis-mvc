$(function(){
    $('#frm1').submit(function(event){
            //console.log("bien");
        const data=$(this).serialize();
        event.preventDefault();

        $.ajax({
            type:'POST',
            url: 'ajax/registrar_practicante.php',
            data: data,
        })
        .done(function(data){
            if(data=="ok"){
                alert("Datos Registrados");
            }else{
                alert(data);
            }
        })
        .fail(function(err){
            alert("Error");
            console.log(err);
        })
    })
});
