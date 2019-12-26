$(function(){

    $('#member_form').submit(function(){
        let data = $(this).serialize();
        addMember(data);
        return false;
    });
    
});

function addMember(data){
    $.ajax({
        url : '/add-member',
        type : 'POST',
        data : data
    }).done(function(result){
        if(result.message == 'success'){
            toastr.success('Success!', '', {
                progressBar: true,
                timeOut: 2000,
            });
        }else if(result.message == 'error'){
            $.each(result.messsages, function(key, val){
                toastr.error(val, '', {
                    progressBar: true,
                    timeOut: 2000,
                });
            });
        }
    }).fail(function(e){
        alert(e);
    });
}