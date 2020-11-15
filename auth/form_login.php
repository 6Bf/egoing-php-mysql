<!DOCTYPE html>
<html>
	<head>
		<title>login page</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<h1>
			Login
		</h1>
		<p>
			로그인 해주세여!!!
		</p>
		<form action="process_login.php" method="post" autocomplete="on">
			<div>
				<label for="userId">userid</label>
				<input type="text" name="userId" id="userId" required placeholder="input user id!"/>
			</div>
			<div>
				<label for="userPw">password</label>
				<input type="password" name="userPw" id="userPw" required placeholder="input user password!"/>
			</div>
			<div class="button">
				<input type="submit" value="Login"/>
			</div>
			<p>
				아직도 이곳 회원이 아니라고요?!! <a href="form_register.php">새로운 회원은 언제나 환영이라고!!!</a>
			</p>
		</form>
	</body>
</html>