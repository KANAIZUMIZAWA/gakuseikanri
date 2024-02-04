$('document').on('click', function(){
    $.ajax({
        url: 'show.blade.php',
        type: 'GET',
        dateType: 'json',
        
    })
    .done(function(data) {
        console.log("success");
    })
    .fail(function(data){
        console.log("fail")
        console.log("error:"+e);
        return;
    })
})