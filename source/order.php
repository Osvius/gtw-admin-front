<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
		<div class="order_wrap">
			<h5>Здесь Вы можете добавлять, обрабатывать и удалять Ваши заказы</h5>
			<div class="order_content page_0">
				<div class="alert alert-danger"> <span>Предупреждение: У вас нет разрешения на доступ к API!</span> <a href="#" class="close" data-dismiss="alert">×</a></div>
				<div class="alert alert-success"> <span>Предупреждение: У вас нет разрешения на доступ к API!</span> <a href="#" class="close" data-dismiss="alert">×</a></div>
				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name">
					Список заказов
					</span>
					<div class="btn-container_1">
						<a href="#" class="btn btn_add">
							Добавить
						</a>
						<button  class="btn btn_delete">
						</button >
					</div>		
				</div>
				<div class="order_inputs">
					<div class="inputs_wrap">
						<label class="order_label" for="order_number" class="order_label">Заказ №</label>
						<input class="input" type="text" id="order_number">
					</div>
					<div class="inputs_wrap">
						<label class="order_label" for="order_status" class="order_label">Статус заказа</label>
						<!-- <input class="input" type="text" id="order_status"> -->
						<div class="select_bg">
						<select name="" id="">
							<option value="">lorem</option>
							<option value="">lorem</option>
							<option value="">lorem</option>
						</select>
						<div class="select_btn">
							<img src="image/gtw-images/triangle-t.png" alt="triang">
							<img src="image/gtw-images/triangle-b.png" alt="triang">
						</div>
						<span class="select_arrow_block"></span>						
						</div>
					</div>
					<div class="inputs_wrap ">
						<label class="order_label" for="order_date" class="label">Дата добавления</label>
						<div class="datepicker1">
						<input  type="text" id="order_date" class="input">
						<a href="#" class="datepicker_btn"></a>
						</div>	

					</div>
					<div class="inputs_wrap">
						<label class="order_label" for="order_buyer" class="order_label">Покупатель</label>
						<input class="input" type="text" id="order_buyer">
					</div>
					<div class="inputs_wrap">
						<label class="order_label" for="order_total" class="order_label">Итого</label>
						<input class="input" type="text" id="order_total">
					</div>
					<div class="inputs_wrap">	
						<label class="order_label" for="order_edit_date" class="order_label">Дата редактирования</label>
						<div class="datepicker1">
							<input class="input" type="text" id="order_edit_date">
							<a href="#" type="button" class="datepicker_btn"></a>
						</div>
					</div>
				</div>
				<div class="btn_container_2">
					<div class="btn-float">
						<button  class="btn btn_reset">Сброс</button>
						<button  class="btn btn_filter">
						Фильтр</button>
					</div>
				</div>

				</div>
				<form action="post" id="form-order">
					<table class="table table_col-8">
						<tr>
							<th class="checkB">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</th>
							<th class="td-border td-number">
								<a href="#" class="asc">Заказ № </a>
							</th>
							<th>
								<a href="#" class="desc">Покупатель</a>
							</th>
							<th class="td-border">
								<a href="#">Статус</a>
							</th>
							<th class="td-border">
									<a href="#">Всего</a>
							</th>
							<th>
								<a href="#">Создан</a>
							</th>
							<th>
								<a href="#">Обнавлен</a>
							</th>
							<th>
								<a href="#">Действие</a>
							</th>
						</tr>
						<tr>
							<td class="checkB">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td class="td-border td-number">
								<p>132</p>
							</td>
							<td >
								<p>Алексей</p>
							</td>
							<td class="td-border">
								<p>Ожидание</p>
							</td>
							<td class="td-border">
								<p>1350 грн</p>
							</td>
							<td>
								<p>19.05.2017</p>
							</td>
							<td>
								<p>19.05.2017</p>
							</td>
							<td>
									<a href="#" class="look"></a>
									<a href="#" class="edit"></a>	
							</td>
						</tr>
						<tr>
							<td class="checkB">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td class="td-border td-number">
								<p></p>
							</td>
							<td>
								<p></p>
							</td>
							<td class="td-border">
								<p></p>
							</td>
							<td class="td-border">
								<p></p>
							</td>
							<td>
								<p></p>
							</td>
							<td>
								<p></p>
							</td>
							<td class="table-btn">
								<div class="td-btn-container">
									<button class="look"></button>
									<button class="edit"></button>
								</div>	
							</td>
						</tr>
						<tr>
							<td class="checkB">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td class="td-border td-number">
								<p></p>
							</td>
							<td>
								<p></p>
							</td>
							<td class="td-border">
								<p></p>
							</td>
							<td class="td-border">
								<p></p>
							</td>
							<td>
								<p></p>
							</td>
							<td>
								<p></p>
							</td>
							<td>
								<div class="td-btn-container">
									<button class="look"></button>
									<button class="edit"></button>
								</div>	
							</td>
						</tr>
					</table>
				</form>
				<div class="pagination">
					<ul class="pagination-list">
						<li class="prev"><a href="#">
							&laquo;
						</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">35</a></li>
						<li class="next"><a href="#">&raquo;</a></li>
					</ul>

				</div>
			</div>
		</div>	
	  </div>
</main>


</body>
</html>