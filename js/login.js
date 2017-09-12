$(function(){$('.show-login').click(function(){$('#join-form').hide(150,function(){$('#login-form').show(150)})});$('.show-join').click(function(){$('#login-form').hide(150,function(){$('#join-form').show(150)})});$('#login-form').submit(function(){var username=$(this).find('#login-username');var password=$(this).find('#login-password');if(!username.val()){username.focus();return false}if(!password.val()){password.focus();return false}$.post({url:'/login',data:{'username':username.val(),'password':password.val()},dataType:'json',success:function(res){switch(res.status){case'o':show_alert($('.alert-parent'),'success','<b>Success!</b> Hello, '+res.username+'! Please wait while you are redirected.');location.reload(0);break;case'a':show_alert($('.alert-parent'),'info','<b>Info!</b> You\'re already logged in. Please wait while you are redirected.');location.reload(0);break;case'x':show_alert($('.alert-parent'),'danger','<b>Failure!</b> This username or password is wrong.');$('#login-password').focus();break;default:show_alert($('.alert-parent'),'danger','<b>Error!</b> Please try again.')}},error:function(){show_alert($('.alert-parent'),'danger','<b>Error!</b> Please try again.')}});return false});$('#join-form').submit(function(){var username=$(this).find('#join-username');var email=$(this).find('#join-email');var password=$(this).find('#join-password');var confirm_password=$(this).find('#join-confirm-password');var comment=$(this).find('#join-comment');if(!/^[a-zA-Z0-9_-]{5,20}$/.test(username.val())){username.focus();return false}if(!/^.{6,320}$/.test(email.val())||!/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(email.val())){email.focus();return false}if(!/^.{6,50}$/.test(password.val())){password.focus();return false}if(password.val()!=confirm_password.val()){confirm_password.focus();return false}if(!/^.{0,30}$/.test(comment.val())){comment.focus();return false}$.post({url:'/join',data:{'username':username.val(),'email':email.val(),'password':password.val(),'comment':comment.val()},dataType:'json',success:function(res){switch(res.status){case'o':show_alert($('.alert-parent'),'success','<b>Success!</b> Welcome, '+res.username+'! Please wait while you are redirected.');location.reload(0);break;case'a':show_alert($('.alert-parent'),'info','<b>Info!</b> You\'re already logged in. Please wait while you are redirected.');location.reload(0);break;case'u':show_alert($('.alert-parent'),'warning','<b>Warning!</b> This username is already exists.');$('#join-username').focus();break;case'e':show_alert($('.alert-parent'),'warning','<b>Warning!</b> This email is already exists.');$('#join-email').focus();break;default:show_alert($('.alert-parent'),'danger','<b>Error!</b> Please try again.')}},error:function(){show_alert($('.alert-parent'),'danger','<b>Error!</b> Please try again.')}});return false})});