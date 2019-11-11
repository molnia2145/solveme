<?php
	# common header
	$title = __SITE__['title'];
	$need_login = false;
	$show_category = true;
	require __DIR__.'/header.php';
?>
					<main class="main-body">
						<dl class="well">
							<dt class="main-dt mb-5">Цель соревнования</dt>
							<dd>
								Capture The Flag (CTF) КАИТ 20<br>
								Что бы решить задания найдите <var>флаг</var> (<code>CYBERTHON{[a-f/A-Z/0-9]}</code>) <br>
								Желаем вам удачи!
							</dd>
						</dl>
						<dl class="well">
							<dt class="main-dt mb-5">Правила</dt>
							<dd>
								<ul class="list-unstyled m-0">
									<li>Не брутфорсить флаги или авторизацию.<br>
									Нельзя передавать флаги и пути решения кому-либо.</li>
									<li>Нельзя аттаковать сервера соревнований.<br>
									Если вы нашли баг или есть какие-то вопросы обратитесь к организаторам.</li>
								</ul>
							</dd>
						</dl>
					</main>
<?php
	# common footer
	require __DIR__.'/footer.php';
