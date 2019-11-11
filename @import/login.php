<?php
	is_login() and redirect('/');

	# common header
	$title = __SITE__['title'].' » Login';
	$need_login = false;
	$js_files = [
		'/assets/js/login.js'
	];
	$show_category = false;
	require __DIR__.'/header.php';
?>
					<main class="main-body">
						<form id="login-form" action="/login" method="POST">
							<div class="form-group">
								<label class="sr-only" for="login-username">Логин</label>
								<input type="text" class="form-control" id="login-username" name="username" placeholder="Логин" data-toggle="tooltip" data-placement="bottom" title="Введите свой логин.">
							</div>
							<div class="form-group">
								<label class="sr-only" for="login-password">Пароль</label>
								<input type="password" class="form-control" id="login-password" name="password" placeholder="Пароль" data-toggle="tooltip" data-placement="bottom" title="Введите пароль.">
							</div>
							<div class="pull-left text-left">
								Проблемы?!<br>
								<a href="https://vk.com/id563179473">Связаться с Админом.</a>
							</div>
							<div class="text-right">
								<button type="button" class="btn btn-default mr-10 show-join">Регистрация</button><button type="submit" class="btn btn-success">Войти</button>
							</div>
						</form>
						<form id="join-form" class="no-display" action="/join" method="POST">
							<div class="form-group">
								<label class="sr-only" for="join-username">Логин</label>
								<input type="text" class="form-control" id="join-username" name="username" placeholder="Логин" data-toggle="tooltip" data-placement="bottom" title="Логин должен быть уникальным размер от 5 до 20 символов. допустимые знаки(a-z, A-Z, 0-9, _, -)">
							</div>
							<div class="form-group">
								<label class="sr-only" for="join-email">Почта</label>
								<input type="text" class="form-control" id="join-email" name="email" placeholder="Почта" data-toggle="tooltip" data-placement="bottom" title="Почта должна быть настоящей для того, что бы вы могли восстановить доступ">
								<div class="checkbox ml-10">
									<label><input type="checkbox" id="join-open-email" name="open-email"> Сделать почту публичной.</label>
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="join-password">Пароль</label>
								<input type="password" class="form-control" id="join-password" name="password" placeholder="Пароль" data-toggle="tooltip" data-placement="bottom" title="Пароль должен состоять от 6 до 20 символов">
							</div>
							<div class="form-group">
								<label class="sr-only" for="join-confirm-password">Подтверждение пароля</label>
								<input type="password" class="form-control" id="join-confirm-password" name="confirm-password" placeholder="Подтверждение пароля" data-toggle="tooltip" data-placement="bottom" title="Введите снова пароль">
							</div>
							<div class="form-group">
								<label class="sr-only" for="join-comment">Название учебного заведения</label>
								<input type="text" class="form-control" id="join-comment" name="comment" placeholder="Учебное заведение" data-toggle="tooltip" data-placement="bottom" title="Введите название вашего учебного заведения">
							</div>
							<div class="pull-left text-left">
								Проблемы?!<br>
								<a href="https://vk.com/id563179473">Связаться с Админом.</a>
							</div>
							<div class="text-right">
								<button type="button" class="btn btn-default mr-10 show-login">Вход</button><button type="submit" class="btn btn-success">Регистрация</button>
							</div>
						</form>
					</main>
<?php
	# common footer
	require __DIR__.'/footer.php';
