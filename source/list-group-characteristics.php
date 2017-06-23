<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
		<div class="order_wrap">
			<h5>Здесь Вы можете настроить группы характеристик.</h5>
			<div class="order_content">
				
				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name char_list">
					Список групп характеристик  
					</span>
					<div class="btn-container_1">
						<a href="#" class="btn btn_add">
							Добавить
						</a>
						<button  class="btn btn_delete">
						</button >
					</div>		
				</div>
				
				<form action="post" id="form-order" class="character_container">
					<table class="table ">
						<tr>
							<th class="table_xs">
							<div class="chechbox_block char_table">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</th>
							<th class="table_lg">
								<a href="#" class="asc">Название группы </a>
							</th>
							<th class="table_lg">
								<a href="#">Порядок
							сортировки</a>
							</th>
							<th class="table_xs">
								<a href="#">Действия</a>
							</th>
						</tr>
						<tr>
							<td class="table_xs">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td class="table_lg">
	
							</td>
							<td class="table_lg">
							
							</td>
							<td class="table_xs">
							
								<a href="#" class="edit_2"></a>	
							</td>
						</tr>
						

						
					</table>
				</form>
				<div class="btn-container_1">
						<a href="#" class="btn btn_add">
							Добавить
						</a>
						<button  class="btn btn_delete">
						</button >
					</div>	
			</div>
		</div>	
	  </div>
</main>


</body>
</html>