$(function(){

    $('#member_form').submit(function(){
        let data = $(this).serialize();
        addMember(data);
        return false;
    });

    $('#pick_form').submit(function(){
        let data = $(this).serialize();
        pickMember(data);
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

function pickMember(data){
    $.ajax({
        url : '/pick-member',
        type : 'POST',
        data : data
    }).done(function(result){
        if(result.message == 'success'){
            Swal.fire({
                title: result.member_name,
                imageUrl: 'https://damp-brushlands-64558.herokuapp.com/image/' + result.imageName,
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            });
        }else if(result.message == 'error'){
            $.each(result.messsages, function(key, val){
                toastr.error(val, '', {
                    progressBar: true,
                    timeOut: 2000,
                });
            });
        }else if(result.message == 'error-1'){
            toastr.error('Hindi mahanap ang name mo gurl!', '', {
                progressBar: true,
                timeOut: 2000,
            });
        }else if(result.message == 'error-2'){
            toastr.error('Nakabunot kana gurl! Juliet?', '', {
                progressBar: true,
                timeOut: 2000,
            });
        }
    }).fail(function(e){
        alert(e);
    });
}