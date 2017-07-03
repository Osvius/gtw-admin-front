<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
		<div class="order_wrap">
			<h5>Здесь Вы можете настроить характеристики.</h5>
			<div class="order_content ">
				
				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name char_add">
					Добавление групп  
					</span>	
				</div>
				
				<form action="post" id="form-order" class="character_container">
					<div class="tab_inputs_container">
						<div class="tab_inputs_wrap">
							<label class="tab_label" ><span class="star">* </span>Название</label>
							<input type="text" class="tab_input" >
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" class="tab_label">Порядок сортировки</label>
							<input type="text" class="tab_input">
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