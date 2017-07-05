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
			<div class="goodsList_content">

				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name">
					 Список товаров
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
						<label  class="label">Наименование:</label>
						<input class="input" type="text" >
						<ul class="dropdown-menu hidden">
							<li><a href="#">1cckckkckckckckck</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</div>
					<div class="inputs_wrap">
						<label class="label">Цена:</label>
						<input type="text" class="input">
					</div>
					<div class="inputs_wrap ">
						<label class="label" for="order_date" class="label">Статус:</label>
						<div class="custom-select">
							  <select name="select">
							      <option>Пункт 1</option>
							      <option>Пункт 2</option>
							      <option>Пункт 3</option>
							  </select>
						</div>
					</div>
					<div class="inputs_wrap">
						<label class="label" >Категория</label>
						<div class="custom-select">
							  <select name="select">
							      <option>Пункт 1</option>
							      <option>Пункт 2</option>
							      <option>Пункт 3</option>
							  </select>
						</div>
					</div>
					<div class="inputs_wrap">
						<label class="label" >Количество:</label>
						<input class="input" type="text">
					</div>
					<div class="inputs_wrap">	
						<label class="label">Дата редактирования</label>
						<div class="custom-select">
							  <select name="select">
							      <option>Пункт 1</option>
							      <option>Пункт 2</option>
							      <option>Пункт 3</option>
							  </select>
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
							<th class="td_15">
								<a href="#" class="asc">
								Наименование товара</a>
							</th>
							<th  class="td_10">
								<a href="#" class="desc">Модель</a>
							</th>
							<th class="td_5">
								<a href="#">Цена</a>
							</th>
							<th class="td_15">
									<a href="#">Категория</a>
							</th>
							<th  class="td_5">
								<a href="#">Количество</a>
							</th>
							<th  class="td_10">
								<a href="#">Статус</a>
							</th>
							<th  class="td_5">
								<a href="#">Действие</a>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label="Выбрать" class="td_5">
						
							<div class="chechbox_block ">		
								<label >
								    <input class="checkbox"  type="checkbox">
								    <span class="checkbox-custom"></span>
								</label>
							</div>						
							</td>
							<td data-label="Наименование товара"  class="td_15">
								<img src="http://45.55.144.93/image/cache/catalog/aksessuary/za008cunkw63_3990077_1_v1-50x50.jpg" alt="">
								Шапка Запорожец Heritage
							</td>
							<td data-label="Модель" class="td_10">
								ZA008CUNKW63
							</td>
							<td data-label="Цена"  class="td_5">
								600.00
							</td>
							<td  data-label="Категория" class="td_15">
								Аксессуары<br>
								Аксессуары   Головные уборы<br>
								Распродажа 
							</td>
							<td data-label="Количество" class="td_5">
								<span class="count_label label-success">16</span>
							</td>
							<td data-label="Статус" class="td_10">
								Включено
							</td>
							<td data-label="Действие" class="td_5">
								<div class="td-btn-container">
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