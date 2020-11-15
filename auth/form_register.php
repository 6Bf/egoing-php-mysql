<!DOCTYPE html>
<html>
	<head>
		<title>병무청</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<h1>
			입대신청
		</h1>
		<p>
			훈련병들은 이곳에 신상정보를 기입합니다!
		</p>
		<form action="process_register.php" method="post" autocomplete="on">
			<div>
				<label for="userId">User Id</label>
				<input type="text" name="userId" id="userId" required placeholder="input your id"/>
			</div>
			<div>
				<label for="userPw">Password</label>
				<input type="password" minlength="6" name="userPw" id="userPw" required placeholder="전우님의 비밀번호를 입력하세요!"/>
			</div>
			<div>
				<label for="userPwc">Confirm Password</label>
				<input type="password" minlength="6" name="userPwc" id="userPwc" required placeholder="한번더!"/>
			</div>
			<div>
				<label for="userName">User Name</label>
				<input type="text" name="userName" id="userName" required placeholder="이름 입력!"/>
			</div>
			<div>
				<label for="userEmail">User Email</label>
				<input type="email" name="userEmail" id="userEmail" required placeholder="이메일 입력!"/>
			</div>
			<span class="button"><input type="submit" value="Submit"/></span>
			<span class="button"><input type="reset" value="Reset"/></span>
		</form>
	</body>
</html>