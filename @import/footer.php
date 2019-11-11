					<nav class="text-center mb-10 main-menu">
						<ul class="list-inline m-0">
							<li>
<?php
	if(is_login()){
?>
								<a href="/logout/<?php echo get_logout_link(); ?>">Выход</a>
<?php
	}else{
?>
								<a href="/login">Авторизация</a>
<?php
	}
?>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	if(__IS_HTML_PACK__){
		$content = ob_get_contents();
		$content = strtr($content, ["\r" => null, "\n" => null, "\t" => null]);
		$content = preg_replace('/<!--.*?-->/', null, $content);
		ob_end_clean();
		echo $content;
	}