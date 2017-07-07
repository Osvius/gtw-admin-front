<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
	<div class="order_wrap">
			<h5>Здесь Вы можете настроить категории.</h5>
			<div class="order_content ">
				
				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name char_add">
					Добавление категории 
					</span>
					<div class="btn-container_1">

						<a class="btn btn_remove">
						</a >
					</div>		
				</div>
				
				<form action="post" class="character_container ">
					<div class="tab_inputs_container paddin0">
						<div class="tab_inputs_wrap">
							<label class="tab_label" ><span class="star">* </span>Название категории</label>
							<input type="text" class="tab_input" >
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label"  class="tab_label">Родительская категория</label>
						<div class="custom-select">
					      <select name="select">
					          <option>Пункт 1</option>
					          <option>Пункт 2</option>
					          <option>Пункт 3</option>
					      </select>
					    </div>								

						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" class="tab_label">Порядок сортировки</label>
							<input type="text" class="tab_input">
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label"  class="tab_label">Статус</label>
						<div class="custom-select">
					      <select name="select">
					          <option>Пункт 1</option>
					          <option>Пункт 2</option>
					          <option>Пункт 3</option>
					      </select>
					    </div>	
	
						</div>	
						<div class="tab_inputs_wrap">
							<label class="tab_label"  class="tab_label">Добавить изображение</label>
							<a href="#" class="add_img is-img">
								<button class="close_btn"></button>	
							</a>
				
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" class="tab_label">Главное меню <span class="star"> * </span></label>
							<div class="switch_box">
								<input type="checkbox" class="switch" id="switch4" />
								<label for="switch4" class="switch_label"></label>
							</div>
						</div>
						<div class="tab_inputs_wrap h_min">
							<p class="tab_text">* показывать в верхнем меню (работает только для основных категорий)</p>
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