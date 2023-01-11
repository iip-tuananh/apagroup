$('.btn__send_advise').on('click',function(e){

    var el = $(this);
    
    var url = el.parents('form').attr('action');

    var data =el.parents('form').serialize();

    $('.loadingcover').show();

    $.ajax({

        type: 'POST',

        url: url,

        dataType: "json",

        data: data,

        success:function(data){

            if(data.phone){

                $("#error_phone__fr")[0].setCustomValidity(data.phone);

                $("#error_phone__fr")[0].reportValidity();

            }

            if(data.name){

                $("#error_name__fr")[0].setCustomValidity(data.name);

                $("#error_name__fr")[0].reportValidity();

            }

            if (data.status==1) {

                toastr["success"](data.message, "Thông báo");
                
                el.parents('form')[0].reset();

            }

            $('.loadingcover').hide();

        }

    });
});

$('.btn__send__contact').click(function(e){

    e.preventDefault();

    $('.loadingcover').show();

    var UrlContact =$('#frmContactForm').attr('action');

    var data = $("#frmContactForm").serialize();

    $.ajax({

        type: 'POST',

        url: UrlContact,

        dataType: "json",

        data: data,

        success:function(data){

            if(data.message_name){

                $('.fr-error').css('display', 'block');

                $('#error_name').html(data.message_name);

            } else {

                $('#error_name').html('');

            }

            if(data.message_email){

                $('.fr-error').css('display', 'block');

                $('#error_email').html(data.message_email);

            } else {

                $('#error_email').html('');

            }

            if(data.message_phone){

                $('.fr-error').css('display', 'block');

                $('#error_phone').html(data.message_phone);

            } else {

                $('#error_phone').html('');

            }

            if(data.message_content){

                $('.fr-error').css('display', 'block');

                $('#error_content').html(data.message_content);

            } else {

                $('#error_content').html('');

            }

            if (data.success) {

                $('#frmContactForm')[0].reset();

                toastr["success"](data.success, "Thông báo");

            }

            $('.loadingcover').hide();

        }

    });

});