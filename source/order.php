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
						<label class="label" for="order_number">Заказ №</label>
						<input class="input" type="text" id="order_number">
					</div>
					<div class="inputs_wrap">
						<label class="label" for="order_status" >Статус заказа</label>
						<div class="custom-select select40">
							  <select name="select">
							      <option>Пункт 1</option>
							      <option>Пункт 2</option>
							      <option>Пункт 3</option>
							  </select>
						</div>
					</div>
					<div class="inputs_wrap ">
						<label class="label" for="order_date" >Дата добавления</label>
						<div class="datepicker1">
						<input  type="text" id="date1" class="input">
						<span  class="datepicker_btn"></span>
						</div>	

					</div>
					<div class="inputs_wrap">
						<label class="label" for="order_buyer" >Покупатель</label>
						<input class="input" type="text" id="order_buyer">
					</div>
					<div class="inputs_wrap">
						<label class="label" for="order_total" >Итого</label>
						<input class="input" type="text" id="order_total">
					</div>
					<div class="inputs_wrap">	
						<label class="label" for="order_edit_date">Дата редактирования</label>
						<div class="datepicker1">
							<input class="input" id="date2" type="text" >
							<span class="datepicker_btn"></span>
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
					<table class="table">
					<thead>
						<tr>
							<th  class="td_5">
							<div class="chechbox_block">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</th>
							<th class="td_10">
								<a href="#" class="asc">Заказ № </a>
							</th>
							<th  class="td_15">
								<a href="#" class="desc">Покупатель</a>
							</th>
							<th class="td_15">
								<a href="#">Статус</a>
							</th>
							<th class="td_15">
									<a href="#">Всего</a>
							</th>
							<th  class="td_15">
								<a href="#">Создан</a>
							</th>
							<th  class="td_15">
								<a href="#">Обнавлен</a>
							</th>
							<th  class="td_15">
								<a href="#">Действие</a>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label="Выбрать" class="td_5">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td data-label="Заказ №"  class="td_10">
								<p>132</p>
							</td>
							<td data-label="Покупатель" class="td_15">
								<p>Алексей</p>
							</td>
							<td data-label="Статус"  class="td_15">
								<p>Ожидание</p>
							</td>
							<td  data-label="Всего" class="td_15">
								<p>1350 грн</p>
							</td>
							<td data-label="Создан" class="td_15">
								<p>19.05.2017</p>
							</td>
							<td data-label="Обнавлен" class="td_15">
								<p>19.05.2017</p>
							</td>
							<td data-label="Действие" class="td_15">
								<div class="td-btn-container">
									<button class="look"></button>
									<button class="edit"></button>
								</div>	
							</td>
						</tr>
						<tr>
							<td data-label="Выбрать" class="td_5">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td data-label="Заказ №" class="td_10">
								<p></p>
							</td>
							<td data-label="Покупатель" class="td_15">
								<p></p>
							</td>
							<td  data-label="Статус" class="td_15">
								<p></p>
							</td>
							<td data-label="Всего" class="td_15">
								<p></p>
							</td>
							<td data-label="Создан" class="td_15">
								<p></p>
							</td >
							<td data-label="Обнавлен"  class="td_15">
								<p></p>
							</td>
							<td data-label="Действие" class="td_15">
								<div class="td-btn-container">
									<button class="look"></button>
									<button class="edit"></button>
								</div>	
							</td>
						</tr>
						<tr>
							<td data-label="Выбрать" class="td_5">
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox" type="checkbox" name="radio-test">
								    <span class="checkbox-custom"></span>
								</label>
							</div>
							</td>
							<td data-label="Заказ №"  class="td_10">
								<p>132</p>
							</td>
							<td data-label="Покупатель" class="td_15">
								<p>Алексей</p>
							</td>
							<td data-label="Статус"  class="td_15">
								<p>Ожидание</p>
							</td>
							<td  data-label="Всего" class="td_15">
								<p>1350 грн</p>
							</td>
							<td data-label="Создан" class="td_15">
								<p>19.05.2017</p>
							</td>
							<td data-label="Обнавлен" class="td_15">
								<p>19.05.2017</p>
							</td>
							<td data-label="Действие" class="td_15">
								<div class="td-btn-container">
									<button class="look"></button>
									<button class="edit"></button>
								</div>	
							</td>
						</tr>	
					</tbody>
					</table>
				</form>
				<div class="pagination">
					<ul class="pagination-list">
						<li class="prev"><a href="#">
							&laquo;
						</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><span>...</span></li>
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