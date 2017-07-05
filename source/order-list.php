<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
<div class="order_wrap ">
		<h5 >Здесь Вы можете добавлять, обрабатывать и удалять Ваши заказы</h5>
		<div class="order_content page_2">
			<div class="order_head">
				<span class="add_order">
				Заказы 
				</span>
				<div class="btn-container_1">
					<span class="btn btn_edit">
					</span>
					<span class="btn btn_remove">
					</span>
				</div>			
			</div>
		<div class="order_list_container ">
			<div class="order_list list_1">
				<h3 class="h3_block">Информация о заказе</h3>	
				<ul class="page2_main_list">
					<li class="real-estate">Мой магазин</li>
					<li class="calendar">20.05.2017</li>
					<li class="credit-card">карта Приват банка</li>
					<li class="truck">Доставка курьером</li>
				</ul>			
			</div>
			<div class="order_list list_2">
				<h3 class="h3_block">Информация о покупателе</h3>	
				<ul class="page2_main_list">
					<li class="id-card">Алексей</li>
					<li class="team">Default</li>
					<li class="mail">mail@gmail.com</li>
					<li class="phone-call">+380631234567</li>
				</ul>			
			</div>
		</div>
		<div class="order_details">
			<h3 class="h3_block h3_details">Детали заказа</h3>
			<table class="table">
				<thead>
				<tr>
					<th class="td_20">
						<p></p>
					</th>
					<th class="td_30">
						<p></p>
					</th>
					<th class="td_20">
						<p></p>
					</th>
					<th class="td_20">
						<p></p>
					</th>
				</tr>	
				</thead>
				<tbody>
					<tr>
						<td class="td_20">
							<p></p>
						</td>
						<td class="td_30">
							<p></p>
						</td>
						<td class="td_20">
							<p></p>
						</td>
						<td class="td_20">
							<p></p>
						</td>
					</tr>					
				</tbody>

			</table>			
		</div>
		<div class="order_history">
			<h3 class="h3_block h3_add_history">Добавить историю заказов</h3>
			<table class="table">
				<thead>
					<tr>
						<th class="td_20">
							<p></p>
						</th>
						<th class="td_30">
							<p></p>
						</th>
						<th class="td_20">
							<p></p>
						</th>
						<th class="td_20">
							<p></p>
						</th>
					</tr>	
				</thead>
				<tbody>
					<tr>
						<td class="td_20">
							<p></p>
						</td>
						<td class="td_30">
							<p></p>
						</td>
						<td class="td_20">
							<p></p>
						</td>
						<td class="td_20">
							<p></p>
						</td>
					</tr>					
				</tbody>
			</table>			
		</div>
		<h3 class="h3_block">Управление историей заказов</h3>
		<div class="history_form">
			<div class="inputs_container">
			<form>
				<div class="inputs_wrap">

					<label class="label" for="order_status">Статус заказа</label>
					<div class="custom-select">
				      <select name="select">
				          <option>Пункт 1</option>
				          <option>Пункт 2</option>
				          <option>Пункт 3</option>
				      </select>
				    </div>

			</div>
				<div class="inputs_wrap">
					<label  class="label">	Уведомить покупателя </label>
					<div class="switch_box">
						<input type="checkbox" class="switch" id="switch1" />
						<label for="switch1" class="switch_label"></label>
					</div>
				 	
					
				</div>
				<div class="inputs_wrap  wrap_large">
					<label for="order_comment" class="label">Комментарий к заказу</label>
					<textarea class="tab_textarea" ></textarea>
				</div>

				<div class="btn_container">
					<button  class="btn btn_add_history">
						<span class="add_icon"></span>
						<span class="add_text">Добавить историю</span>
					</button>

				</div>	
				</form>	
			</div>			
		</div>

		</div>
	</div>
	  </div>
</main>


</body>
</html>