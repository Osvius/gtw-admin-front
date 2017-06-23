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
		<div class="order_content">
			<div class="order_head">
				<span class="add_order">
				Добавление заказа 
				</span>
				<div class="btn-container_1">
					<a href="#"  class="btn btn_add">Добавить</a>
					<a href="#" class="btn btn_remove"></a>
				</div>
			</div>	
		<form action="">
			<div class="order_tabs">
				<ul id="tabs" class="tabs">
				 	 <li class="tab1 btn active"><a href="#">1. Информация о покупателе</a></li>
				     <li class="tab2 btn"><a href="#">2. Товары</a></li>
				     <li class="tab3 btn"><a href="#">3. Адрес доставки</a></li>
				     <li class="tab4 btn"><a href="#">4. Итого</a></li>
				</ul>
			</div>
		<div class="tab-content">
			<div class="tab1">
						<div  class="tab-form">
						<div class="inputs_container">
							<div class="tab_inputs_wrap">
								<label class="tab_label" for="name">* Имя и Фамилия</label>
								<input type="text" class="tab1_input" name="name" id="name" placeholder="* Имя и Фамилия должны содержать от1 до 32 символов">
								<span  for="name" class="error-box">
								</span>
							</div>
							<div class="tab_inputs_wrap">
								<label class="tab_label" for="email">E-mail</label>
								<input type="email" class="tab1_input" id="email" name="email">
								<span  for="email" class="error-box">

								</span>
							</div>
							<div class="tab_inputs_wrap">
								<label class="tab_label" for="tel">Телефон</label>
								<input type="tel" class="tab1_input" id="tel" placeholder="8 (999) 123-45-64" pattern="2[0-9]{3}-[0-9]{3}" name="tel" >
								<span  for="tel" class="error-box">	
								</span>
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
			
			<div class="tab2">
				
				<div class="tab-form ">
					<table class="table ">
						<tr>
							<th class="td_15">
								Товар
							</th>
							<th class="td_15">
								Модель
							</th>
							<th class="td_15">
								Количество
							</th>
							<th class="td_15">
								Цена за еденицу
							</th>
							<th class="td_15">
								Всего
							</th>
							<th class="td_10">
								Действие
							</th>
						</tr>
						<tr>
							<td class="td_15">
								Macbook Pro
							</td>
							<td class="td_15">
								FR839
							</td>
							<td class="td_15">
								<div class="table_input_count">
									<input type="nubmer"  id="count" class="input_count">
									<button type="reset" class="button_count"></button>
								</div>
								
							</td>
							<td class="td_15">
								835 $
							</dh>
							<td class="td_15">
								1670 $
							</td>
							<td class="td_10">
								<div class="td-btn-container">
									<button class="del"></button>
								</div>	
							</td>
						</tr>
						<tr>
							<td class="td_15">
							
							</td>
							<td class="td_15">
							
							</td>
							<td class="td_15">
								
							</td>
							<td class="td_15">
							
							</dh>
							<td class="td_15">
							
							</td>
							<td class="td-15">
		
							</td>
						</tr>
					</table>

					<div class="inputs_container">
						<div class="tab_inputs_wrap">
							<label  for="product_name" class="tab_label">Выбрать товар </label>
							<input type="text"  name="product" value="" id="input-product" class="tab1_input">
							<span  for="tel" class="error-box">	
							<ul class="dropdown-menu hidden">
								<li><a href="#"></a>1cckckkckckckckck</li>
								<li><a href="#"></a>2</li>
								<li><a href="#"></a>3</li>
							</ul>
						</div>
						<div class="tab_inputs_wrap">
							<label  for="quantity" class="tab_label">Количество</label>
							<input type="number" class="tab1_input" id="quantity">
							<span  for="tel" class="error-box">	
								</span>
						</div>
						<div class="tab_inputs_wrap ">
							<label  for="product_name" class="tab_label">Выбрать товар </label>

							<div class="tab4_select_bg select-min">
								<select  class="tab4_select">
								    <option>Доставка курьером</option>
								    <option>Доставка не курьером</option>
								</select>
								
							</div>	

							<div class="radio_container">
							<label class="select_radio"><span class="star"> * </span>Выберите характеристики</label>
								<div class="radio_box">
									<input type="radio" name="radio" id="radio1">
									<label for="radio1">
								      вариант 1
									</label>
									

								</div>
								<div class="radio_box">
									<input type="radio" name="radio" id="radio2">
									<label for="radio2">
								      вариант 2
									</label>
									
									</div>	
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
			
			<div class="tab3">
					<div class="tab-form " >
						<div class="inputs_container ">
							<div class="tab_inputs_wrap tab_textarea_wrap">
								<label class="tab_label" for="adress" class="tab_label">Адрес</label>
								<textarea class="tab_textarea" name="adress" id="adress" cols="30" rows="10"></textarea>
								<span  for="tel" class="error-box">	
								</span>								
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
			
			<div class="tab4">

				<div class="tab-form">
					<table class="table table_col-5">
						<tr>
							<th class="td-15">
								<p>Товар</p>
							</th>
							<th class="td-15">
								<p>Модель</p>
							</th>
							<th class="td-15">
								<p>Количество</p>
							</th>
							<th class="td-15">
								<p>Цена за еденицу</p>
							</th>
							<th class="td-15">
								<p>Всего</p>
							</th>
						</tr>
						<tr>
							<td class="td-15">
								<p>Macbook Pro</p>
							</td>
							<td class="td-15">
								<p>FR839</p>
							</td>
							<td class="td-15">
								<p>2</p>
							</td>
							<td class="td-15">
								<p>835 $</p>
							</td>
							<td class="td-15">
								<p>1670 $</p>
							</td>
						</tr>
				</table>
				<div class="tab4_list_container">
						<dl class="tab4_order_list">
							<dt class="item_container">
								<li>Доставка курьером</li>
								<li>10 $</li>
							</dt>
							<dd class="item_container">
								<li>Итого:</li>
								<li">1680 $</li>
							</dd>
						</dl>

				</div>
				
					<div class="tab4_inputs_container">
						<div class="tab_inputs_wrap">
							<label class="tab_label" for="delivery_method">Способ доставки</label>
							<div class="tab4_select_bg">
							<select id="delivery_method" class="tab4_select">
							    <option>Доставка курьером</option>
							    <option>Доставка не курьером</option>
							</select>
							<div class="tab4_select_btn">
								<img src="image/gtw-images/triangle-t.png" alt="triang">
								<img src="image/gtw-images/triangle-b.png" alt="triang">
							</div>
							<span class="tab4_select_arrow_block"></span>
							</div>
						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" for="payment_method" class="tab_label">Способ оплаты</label>
							<div class="tab4_select_bg">
							<select id="payment_method" class="tab4_select">
							    <option >Выберите</option>
							    <option>Наличные</option>
							</select>
							<div class="tab4_select_btn">
								<img src="image/gtw-images/triangle-t.png" alt="triang">
								<img src="image/gtw-images/triangle-b.png" alt="triang">
							</div>
							<span class="tab4_select_arrow_block"></span>
							</div>

						</div>
						<div class="tab_inputs_wrap">
							<label class="tab_label" for="order_status" class="tab_label">Статус заказа</label>
							<input type="text" class="tab1_input" value="В ожидании" id="order_status">
						</div>
						<div class="tab_inputs_wrap tab_textarea_wrap">
							<label class="tab_label" for="comment" class="tab_label">Комментарий к заказу</label>
							<textarea class="tab_textarea" name="comment" id="comment" cols="30" rows="10"></textarea>
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
		
		</div>
		
		</form>

	</div>

	</div>
	  </div>
</main>


</body>
</html>