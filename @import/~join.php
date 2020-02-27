<?php
	if(isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm-password'], $_POST['comment'], $_POST['ploshadka'])){

		is_login() and output(['status' => 'a']); # already logged

		is_username($_POST['username']) or output(['status' => 'x']); # valid username
		is_email($_POST['email']) or output(['status' => 'x']); # valid email
		is_password($_POST['password']) or output(['status' => 'x']); # valid password
		($_POST['password'] === $_POST['confirm-password']) or output(['status' => 'x']); # valid password
		is_comment($_POST['comment']) or output(['status' => 'x']); # valid comment
		is_ploshadka($_POST['ploshadka']) or output(['status' => 'x']); # valid ploshadky

		$p = $pdo->prepare("
			SELECT
				1
			FROM
				`{$db_prefix}_user`
			WHERE
				`username`=:username
			LIMIT
				1
		");
		$p->bindParam(':username', $_POST['username']);
		$p->execute();
		$p->fetch(PDO::FETCH_ASSOC) and output(['status' => 'u']); # already exists username

		$p = $pdo->prepare("
			SELECT
				1
			FROM
				`{$db_prefix}_user`
			WHERE
				`email`=:email
			LIMIT
				1
		");
		$p->bindParam(':email', $_POST['email']);
		$p->execute();
		$p->fetch(PDO::FETCH_ASSOC) and output(['status' => 'e']); # already exists email

		$p = $pdo->prepare("
			INSERT INTO
			`{$db_prefix}_user`
			(
				`no`,
				`username`,
				`email`,
				`open_email`,
				`password`,
				`comment`,
				'ploshadka',
				`score`,
				`join_time`
			)
			VALUES
			(
				NULL,
				:username,
				:email,
				:open_email,
				:password,
				:comment,
				:ploshadka,
				0,
				CURRENT_TIMESTAMP
			)
		");
		$p->bindParam(':username', $_POST['username']);
		$p->bindParam(':email', $_POST['email']);
		$p->bindValue(':open_email', isset($_POST['open-email']) ? '1' : '0');
		$p->bindValue(':password', secure_hash($_POST['password']));
		$p->bindParam(':comment', $_POST['comment']);
		$p->bindParam(':ploshadka', $_POST['ploshadka']);
		$p->execute();

		$p = $pdo->prepare("
			SELECT
				1
			FROM
				`{$db_prefix}_user`
			WHERE
				`username`=:username AND
				`email`=:email
			LIMIT
				1
		");
		$p->bindParam(':username', $_POST['username']);
		$p->bindParam(':email', $_POST['email']);
		$p->execute();
		$p->fetch(PDO::FETCH_ASSOC) or output(['status' => 'x']); # not exists username

		set_login($_POST['username']);

		# success
		output([
			'status' => 'o',
			'username' => $_POST['username']
		]);
	}
