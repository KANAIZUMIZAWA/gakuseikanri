$('#sort').on('click', '.sort-btn',function(){
    $.ajax({
        url: 'index.blade.php',
        type: 'GET',
        dateType: 'json',
        
    })
    .done(function(response) {
        console.log("success");
    })
    .fail(function(response){
        console.log("fail")
        console.log("error:"+e);
        return;
    })
})