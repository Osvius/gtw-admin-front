<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
			<div class="order_wrap">
			<h5>Здесь Вы можете настроить страницы.</h5>
			<div class="order_content ">
				
				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name char_add">
					Добавление страниц
					</span>
					<div class="btn-container_1">

						<a class="btn btn_remove">
						</a >
					</div>		
				</div>
				
				<form action="post" class="character_container add_pages_2 ">
					<div class="tab_inputs_container ">
						<div class="tab_inputs_wrap">
							<label class="tab_label" >Заголовок страницы</label>
							<input type="text" class="tab_input" >
						</div>
						<div class="tab_textarea_wrap">
							<label class="tab_label"  class="tab_label">Описание</label>
							<textarea  class="tab_input"></textarea>
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" class="tab_label">Порядок сортировки</label>
							<input type="text" class="tab_input">
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" class="tab_label">Отображать в футере</label>
							<div class="switch_box">
								<input type="checkbox" class="switch" id="switch1" />
								<label for="switch1" class="switch_label"></label>
							</div>
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" class="tab_label">Статус отображения</label>
							<div class="switch_box">
								<input type="checkbox" class="switch switch_red" id="switch2" />
								<label for="switch2" class="switch_label"></label>
							</div>
						</div>

					</div>
				</form>
				<div class="btn_container">
						<button  class="btn btn_save">
							<span class="save_icon"></span>
							<span class="save_text">Сохранить</span>
						</button>		
				</div>
			</div>
		</div>
	  </div>
</main>

</body>
</html>