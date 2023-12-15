$(function(){
    $("#signup-form").validate({
        rules:{
            username:{
                required:true,
                minlength:6
            },
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength:8
            },
            Confirmpassword:{
                required:true,
                equalTo:'#SignPass'
            }
        },
        messages:{
            username:{
                required:'enter a user name',
                minlength:'have minimum 6 char'
            },
            email:{
                required:'enter your email',
                email:'enter a valid email'
            },
            password:{
                required:'enter a password',
                minlength:'have minimum 8 char'
            },
            Confirmpassword:{
                required:'enter a password',
                equalTo:'enter same password'
            }
        }
    })
})

$(document).ready(function () {
    $("#signup-form").submit(function(e){
         //e.preventDefault();
        let formData=$(this).serialize();
         //$('#res').html(formData);
        $.ajax({
            url:$(this).attr('action'),
            type:$(this).attr('method'),
            data:formData,

            success:function(response){
                // console.log("Success Response:", response);
              alert(response);
            },
            error: function() {
             //$("#res").html("error is " + status + " " + error);
            // alert("email already exist");
            // console.log(error+status)
             }
        })
    })
});