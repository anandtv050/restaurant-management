
$(function(){
    $('.login').click(function(){
        $('.login-box').show();
    });

    $("#signup-link").on("click", function () {
      window.location.href = "signup.html";
    });


});

//     $('#login-form').validate({
//         rules:{
//             email:{
//                 required:true,
//                 email:true
//             },
//             password:{
//                 required:true,
//                 minlength:8,
//                 password:true
//             }
//         },
//         messages:{
//             email:{
//                 required:'enter a email',
//                 email:'enter a valid email'
//             },
//             password:{
//                 required: 'enter a password',
//                 minlength:'the password should contain 8 char',
//                 password:'enter a valid password'
//             }
//         }
//     })

//     $('')
//   });
  