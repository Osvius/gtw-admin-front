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
			<div class="order_content">
				
				<div class="order_form">
		
				<div class="order_head">
					<span class="order_list_name char_add">
					Добавление товара 
					</span>
	
				</div>
				
				<form action="post" class="main_goods">
					<div class="main_setting">
						<div class="setting_left">
							<p class="add_img_text">Добавить изображение</p>
							<a href="#"  class="add_img"><img src="image/gtw-images/add-plus-sign-outline.png" alt="add"></a>

							<p class="add_img_text">Дополнительные изображения:</p>
							<div class="add_more_container">
								<a href="#" class="add_more_img"><img src="image/gtw-images/add-plus-sign-outline.png" alt="add"></a>
								<a href="#"  class="add_more_img"><img src="image/gtw-images/add-plus-sign-outline.png" alt="add"></a>
								<a href="#" class="add_more_img"><img src="image/gtw-images/add-plus-sign-outline.png" alt="add"></a>
							</div>
						</div>
						<div class="setting_right">
							<div class="inputs_wrap">
								<label  class="label">Название товара</label>
								<input type="text"  class="input">
							</div>

							<div class="inputs_wrap">
								<label  class="label">Код  товара</label>
								<input type="text"  class="input">
							</div>							
							<div class="inputs_wrap ">
								<label  class="label ">Цена</label>
								<input type="text"  class="input ">
							</div>
							<div class="inputs_wrap wrap2">
								<label  class="label ">Наличие</label>
								<input type="text"  class="input ">
							</div>
							<div class="inputs_wrap">
								<label  class="label">Описание</label>
								<textarea class="textarea"></textarea>
							</div>
						</div>
					</div>

					<div class="additional_setting">
						<div class="btn-container_1">
							<span >Дополнительные настройки</span>
							<a href="#"  class="btn btn_add">Добавить</a>
						</div>
						<div class="tabs_container">
							<ul id="tabs" class="tabs">
							 	 <li class="tab1 active"><a href="#">Связи</a></li>
							     <li class="tab2"><a href="#">Характеристики</a></li>
							     <li class="tab3"><a href="#">Вырианты</a></li>
							     <li class="tab4"><a href="#">Акции</a></li>
							</ul>
						</div>
		<div class="tab-content">
					 <!-- tab 1 index12.html addGoods start   -->
			<div class="tab1">
				<div  class="tab-form">
					<div class="inputs_container visible">
						<div class="tab_inputs_wrap">
							<label class="tab_label" for="delivery_method">Способ доставки</label>
							<div class="tab4_select_bg">
								<select  class="tab4_select">
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
							<label class="tab_label" for="delivery_method">Главная категория</label>
							<div class="tab4_select_bg">
								<select  class="tab4_select">
									<option>Категория 1</option>
									<option>Категория 2</option>
								</select>
								<div class="tab4_select_btn">
									<img src="image/gtw-images/triangle-t.png" alt="triang">
									<img src="image/gtw-images/triangle-b.png" alt="triang">
								</div>
								<span class="tab4_select_arrow_block"></span>
							</div>
						</div>
						<div class="tab_table_wrap h_300">
							<label class="tab_label">Главная категория</label>
							<div class="table_scroll">
							<table class="table tab_table">
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
										<span class="table_text">Electronics</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
										<span class="table_text">Electronics</span>
									</td>
								</tr>								
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
										<span class="table_text">Electronics</span>
									</td>
								</tr>	
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
										<span class="table_text">Electronics</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
										<span class="table_text">Electronics</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
										<span class="table_text">Electronics</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="chechbox_block">		
											<label >
												<input class="checkbox" type="checkbox" name="radio-test">
												<span class="checkbox-custom"></span>
											</label>
										</div>
										<span class="table_text">Electronics</span>
									</td>
								</tr>																
	

							</table>
						</div>
						<div class="link_container">
							<a onclick="$(this).parent().find('.checkbox').prop('checked ', true);">Выделить всё  </a>
							<a  onclick="$(this).parent().find('.checkbox').prop('checked', false);">Снять выделение</a>
						</div>
					</div>
					<div class="tab_inputs_wrap">
						<label  class="tab_label">Сопутствующие товары:
 						</label>
						<input type="text" class="tab1_input">
						<ul class="dropdown-menu hidden">
							<li><a href="#"></a>1cckckkckckckckck</li>
							<li><a href="#"></a>2</li>
							<li><a href="#"></a>3</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		 <!-- tab 1 index12.html addGoods end   -->

		<!-- tab 2 index12.html addGoods start -->
			<div class="tab2">
				<div  class="tab-form">
					<div class="inputs_container ">
						<div class="tab_table_wrap ">
						<table class="table delivery_table border-b">
							<tr>
								<th class="td_5">Характеристика:</th>
								<th class="td_20">Текст </th>
								<th class="td_10"></th>
								
							</tr>
							<tr>
								<td class="td_5"><input type="text" class="input"></td>
								<td class="td_20 overflow-visible"><textarea class="textarea"></textarea></td>
								<td class="td_10 ">
										<button class="del"></button>
								</td>
							</tr>
							<tr class="last_row">
								<td colspan="2"></td>
								<td class="td_10 ">
									<a href="#" class="chechbox_block btn_add"></a>
								</td>
							</tr>


						</table>
						</div>
					</div>		
				</div>
			</div>
			<!-- tab 2 index12.html addGoods end -->

			<!-- tab 3 index12.html addGoods start -->
			<div class="tab3">
				<div  class="tab-form">
					<div class="inputs_container">
						<div class="tab_table_wrap ">
						<table class="table delivery_table border-b ">
							<thead>
							<tr>
								<th class="td_20">Вариант:</th>
								<th class="td_20">Характеристики:</th>
								<th class="td_10"></th>
								
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="td_20">
									<div class="tab4_select_bg">
										<select  class="tab4_select">
											<option>Вариант 1 </option>
											<option>Вариант 2 </option>
										</select>
										<div class="tab4_select_btn">
											<img src="image/gtw-images/triangle-t.png" alt="triang">
											<img src="image/gtw-images/triangle-b.png" alt="triang">
										</div>
										<span class="tab4_select_arrow_block"></span>
									</div>
									<input type="text" class="input input2">
								</td>
								<td class="td_30">
									<table class="sub_table">
										<thead>
											<tr>
												<th class="td_50">Цена</th>
												<th class="td_50">Количество</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="td_50"><input type="text" class="input"></td>
												<td class="td_50"><input type="text" class="input"></td>
											</tr>
										</tbody>
									</table>	
								</td>
								<td class="td_10 ">
									<button class="del"></button>
								</td>
							</tr>
							<tr class="last_row">
								<td colspan="2"></td>
								<td class="td_10 ">
									<a href="#" class="chechbox_block btn_add"></a>
								</td>
							</tr>
							</tbody>
						</table>
						</div>
					</div>	
				</div>
			</div>
			<!-- tab 3 index12.html addGoodsend -->

			<!-- tab 4 index12.html addGoods start -->
			<div class="tab4">
				<div  class="tab-form">
					<div class="inputs_container">
						<div class="tab_table_wrap ">
						<table class="table delivery_table border-b">
							<tr>
								<th class="td_15">Цена:</th>
								<th class="td_15">Дата начала</th>
								<th class="td_15">Дата окончания:</th>
								<th class="td_10"></th>
								
							</tr>
							<tr>
								<td class="td_15"><input type="text" class="input"></td>
								<td class="td_15">
									<div class="datepicker1">
										<input  type="text" id="date1" class="input">
										<span  class="datepicker_btn"></span>
									</div>	
								</td>
								<td class="td_15">
									<div class="datepicker1">
										<input  type="text" id="date2" class="input">
										<span  class="datepicker_btn"></span>
									</div>	
								</td>
								<td class="td_10 ">
										<button class="del"></button>
								</td>
							</tr>
							<tr class="last_row">
								<td colspan="3"></td>
								<td class="td_10 ">
									<a href="#" class="chechbox_block btn_add"></a>
								</td>
							</tr>
			
						</table>
						</div>	
				</div>
			</div>
		</div>
		<!-- tab 4 index12.html addGoods end -->
		<dl class="dl_container">
			<dt>Расширенные настройки:</dt>
			<dd>Здесь будет какое-нибудь текстовое описание текстовое  описание
					Здесь будет какое-нибудь текстовое описание текстовое описание</dd>
			</dl>
		<div class="btn_container">
			<a href="index12_1additional.html" class="btn btn_additional">
				<span class="btn_text">Перейти в расширенные 				настройки</span>
				<span class="btn_icon"></span>
			</a>		
		</div>			
					
			</div>



		</form>

			</div>
		</div>	
	  </div>
</main>


</body>
</html>