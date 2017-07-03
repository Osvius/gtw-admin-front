<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
<div class="login_wrap">
		<h1 class="login_greeting">Добро пожаловать в Go To Web админ панель</h1>
		<div class="login_container">
			<div class="login_head"><p>Введите логин и пароль</p></div>
			<div class="login_content">
				<div class="inputs_wrap">
					<label class="label" for="login">Логин</label>
					<div class="input_block">
						<span class="input_img user_img"></span>
						<input type="text" class="input" name="name" id="login" >
					</div>
				</div>
				<div class="inputs_wrap">
					<label class="label" for="password">Пароль</label>
					<div class="input_block">
						<span class="input_img user_key"></span>
						<input type="password" class="input" name="name" id="password" >
					</div>
					<span class="help-block">
						<a href="#" >Забыли пароль?</a>
					</span>	
				</div>
				<div class="btn_block">
					<button class="btn_enter">Войти</button>
				</div>
			</div>
		</div>
	</div>		
	  </div>
</main>

</body>
</html>