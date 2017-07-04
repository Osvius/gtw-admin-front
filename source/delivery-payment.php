<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	  <div class="content-wrap">
	  <?php include('aside.php')?>
	<div class="order_wrap">
		<h5>Здесь Вы можете настроить доставку и оплату.</h5>
		<div class="order_content">
			<div class="order_head">
				<span class="add_order">
					Доставка / Оплата  
				</span>		
				<div class="btn-container_1">
					<a href="#" class=" btn btn_remove"></a>	
				</div>						
			</div>
	
			<div class="order_tabs">
				<ul id="tabs" class="tabs flex-start">
					 <li class="tab1 btn active"><a href="#">1. Доставка</a></li>
			    	 <li class="tab2 btn"><a href="#">2. Оплата</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab1">
				<table class="table delivery_table">
					<tr>
						<th class="td_20">Название</th>
						<th class="td_20">Стоимость</th>
						<th class="td_20">Порядок сортировки</th>
						<th class="td_15">Отображать на сайте</th>
						<th></th>

					</tr>
					<tr>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_15">
							<div class="switch_box">
								<input type="checkbox" class="switch" id="switch2" />
								<label for="switch2" class="switch_label"></label>
							</div>
						</td>
						<td class="td_10">
							<button class="del"></button>
						</td>
					</tr>
					<tr>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_15 ">
							<div class="switch_box">
								<input type="checkbox" class="switch" id="switch3" />
								<label for="switch3" class="switch_label"></label>
							</div>
						</td>
						<td class="td_10">

								<button class="del"></button>
						</td>
					</tr>
						<tr>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_15">
							<div class="switch_box">
								<input type="checkbox" class="switch" id="switch4" />
								<label for="switch4" class="switch_label"></label>
							</div>
						</td>
						<td class="td_10">

								<button class="del"></button>

						</td>
					</tr>
					<tr>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_15">
							<div class="switch_box ">
								<input type="checkbox" class="switch" id="switch5" />
								<label for="switch5" class="switch_label"></label>
							</div>
						</td>
						<td class="td_10">
							<button class="del"></button>
						</td>
					</tr>
					<tr class="last_row">
						<td colspan="4"></td>
						<td class="td_10">
							<a href="#" class="chechbox_block btn_add"></a>
						</td>
					</tr>
				</table>
				<div class="btn_container">
					<button  class="btn btn_save">
						<span class="save_icon"></span>
						<span class="save_text">Сохранить</span>
					</button>				
				</div>	
			</div>
			<div class="tab2">
				<form  class="tab-form ">
					<table class="table delivery_table">
					<tr>
						<th class="td_20">Название</th>
						<th class="td_20">Информация </th>
						<th class="td_15">Порядок сортировки</th>
						<th  class="td_15">Отображать на сайте</th>
						
					</tr>
					<tr>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20 overflow-visible"><textarea class="textarea"></textarea></td>
						<td class="td_15"><input type="text" class="input"></td>
						<td class="td_10">
							<div class="switch_box">
								<input type="checkbox" class="switch" id="switch1" />
								<label for="switch1" class="switch_label"></label>
							</div>
						</td>
						<td class="td_10">
								<button class="del"></button>
						</td>
					</tr>
					<tr>
						<td class="td_20"><input type="text" class="input"></td>
						<td class="td_20 overflow-visible"><textarea class="textarea"></textarea></td>
						<td class="td_15"><input type="text" class="input"></td>
						<td class="td_10">
							<div class="switch_box">
								<input type="checkbox" class="switch" id="switch2_1" />
								<label for="switch2_1" class="switch_label"></label>
							</div>
						</td>
						<td class="td_10">
								<button class="del"></button>
						</td>
					</tr>
					<tr class="last_row">
						<td colspan='4'></td>
						<td class="td_10">
							<a href="#" class="chechbox_block btn_add"></a>
						</td>
					</tr>
				</table>
					<div class="btn_container">
						<button  class="btn btn_save">
							<span class="save_icon"></span>
							<span class="save_text">Сохранить</span>
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