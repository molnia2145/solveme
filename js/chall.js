$(function(){$('#auth-form').submit(function(){var flag=$(this).find('#auth-flag');if(!flag.val()){flag.focus();return false}$.post({url:'/chall/auth',data:{'flag':flag.val()},dataType:'json',success:function(res){switch(res.status){case'o':show_alert($('.alert-parent'),'success','<b>Congrats!</b> You solved the \''+res.title+'\' problem, so you got '+res.score+'pt.');$('#auth-flag').val(null);$('.prob-title').each(function(){if($(this).html()==res.title){$(this).after('<span class="label label-success m-l-10">Solved</span>')}});break;case'a':show_alert($('.alert-parent'),'info','<b>Correct!</b> But you\'re already solved this problem.');$('#auth-flag').val(null);break;case'l':show_alert($('.alert-parent'),'warning','<b>Warning!</b> You\'re not logged in. Please login first.');break;case'x':show_alert($('.alert-parent'),'danger','<b>Failed!</b> This flag is wrong.');$('#auth-flag').focus();break;default:show_alert($('.alert-parent'),'danger','<b>Error!</b> Please try again.')}},error:function(){show_alert($('.alert-parent'),'danger','<b>Error!</b> Please try again.')}});return false})});