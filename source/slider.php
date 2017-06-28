<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
<div class="order_wrap">
			<h5>Здесь Вы можете настроить категории</h5>
			<div class="order_content slider_block">
		
				<div class="order_head">
					<span class="order_list_name slider_img">
					Редактирование слайдера
					</span>
				</div>
				<div class="slider_container">
					<div class="block1">
						<div class="block_item1">
							<h3>Добавить банер</h3>
							<div class="img_block">
								<a href="#" class="add_img">
									<img src="image/gtw-images/add-plus-sign-outline.png" alt="addimg">
								</a>
							</div>
						</div>	
						<div class="block_item2">
							<div class="inputs_wrap">
								<label  class="label">Заголовок</label>
								<input type="text"  class="input">
							</div>
							<div class="inputs_wrap">
								<label  class="label">Ссылка</label>
								<input type="text"  class="input">
							</div>
							<div class="double_inputs_wrap">
								<div class="inputs_wrap wrap1">
									<label  class="label">Сортировка</label>
									<input type="text"  class="input input1">
								</div>
								<div class="inputs_wrap wrap2">
									<label  class="label label2">Статус</label>
									<div class="switch_box">
										<input type="checkbox" class="switch" id="switch4" />
										<label for="switch4" class="switch_label"></label>
									</div>
								</div>
							</div>
						</div>
						<div class="block_item3">
							<a href="#" class="delete_slider">
							</a>
						</div>
					</div>	
					<div class="block2">
						<div class="btn_container_2">
							<span>Добавить банер</span>
							<a href="#" class="btn btn_add"></a>
						</div>						
					</div>
				</div>
				<div class="btn_container">
					<button  class="btn btn_save">
						<span class="save_icon"></span>
						<span class="save_text">Сохранить</span>
					</button>		
				</div>	
			</div>	
	  </div>
</main>

</body>
</html>