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
		<div class="order_content my_shop">
			<div class="order_head">
				<span class="add_order shop_img">
				Мой магазин
				</span>
			</div>	
		<form action="">
			<div class="order_tabs">
				<ul id="tabs" class="tabs">
				 	 <li class="tab1 btn active"><a href="#">Основное</a></li>
				     <li class="tab2 btn"><a href="#">Логотип</a></li>
				     <li class="tab3 btn"><a href="#">Соц. сети</a></li>
				     <li class="tab4 btn"><a href="#">Валюта</a></li>
				     <li class="tab5 btn"><a href="#">Карта</a></li>
				     <li class="tab6 btn"><a href="#">Текст писем</a></li>
				</ul>
			</div>
		<div class="tab-content">
			<div class="tab1">
				<div  class="tab-form">
				<div class="inputs_container">
					<div class="tab_inputs_wrap">
						<label class="label" for="name">* Название магазина</label>
						<input type="text" class="tab1_input">
					</div>
					<div class="tab_textarea_wrap">
						<label class="label" for="name"> Адрес магазина</label>
						<textarea class="tab_textarea"></textarea>
					</div>
					<div class="tab_textarea_wrap">
						<label class="label" for="name">Время работы</label>
						<textarea class="tab_textarea"></textarea>
					</div>
					<div class="tab_inputs_wrap">
						<label class="label" for="name">Телефон</label>
						<input type="tel" class="tab1_input">
					</div>
					<div class="tab_inputs_wrap">
						<label class="label" for="name">E-mail</label>
						<input type="email" class="tab1_input">
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
			<!-- tab 1 end  -->

			<!-- tab 2 START  -->
			<div class="tab2">

				<div class="tab-form ">
					
					<div class="inputs_container ">
					<div class="logoEdit_container">
						<div class="logo_block1">
							<div class="item1">
								<span class="add_icon_text">1. Изменить логотип</span>		
							</div>
							<div class="item2">
								<a href="#" class="download_icon is-img">
									<button class="close_btn"></button>	
								</a>
							</div>
						</div>
						<div class="logo_block2">
							<div class="item1">
								<span class="add_icon_text">2. Изменить фавикон</span>		
							</div>
							<div class="item2">
								<a href="#" class="download_icon no-img">
									<button class="close_btn"></button>	
								</a>
							</div>
						</div>
					</div>
					<div class="logoEdit_container ">
						<div class="logo_block1">
							<div class="item1">
								<span class="add_icon_text">Изменить логотип для мобильной версии:</span>		
							</div>
							<div class="item2">
								<a href="#" class="download_icon no-img">
									<!-- <a href="#" class="no-img"> -->
										<button class="close_btn"></button>	
									<!-- </a> -->

								</a>

							</div>
						</div>
						<div class="logo_block2">
							<div class="item1">
								<span class="add_icon_text">Отображать логотип в мобильной версии</span>		
							</div>
							<div class="item2">
								<!-- <a href="#" class="download_icon"> -->
								<div class="switch_box">
									<input type="checkbox" class="switch" id="switch4" />
									<label for="switch4" class="switch_label"></label>
								</div>
								<!-- </a> -->
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
					<div class="tab-form" >
						<div class="inputs_container ">
						<div class="tab_table_wrap ">
						<table class="table delivery_table border-b social_table">
						<thead>
							<tr>
								<th class="td_10">Иконка</th>
								<th class="td_20">Текст </th>
								<th class="td_10"></th>	
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="td_10">
									<a href="#" class="social_icon">
										<img src="image/gtw-images/add-plus-sign-outline-little.png" alt="AddImg">
									</a>
								</td>
								<td class="td_20"><input type="text" class="input"></td>
								<td class="td_10 ">
									<div class="switch_box">
										<input type="checkbox" class="switch" id="switch3" />
										<label for="switch3" class="switch_label"></label>
									</div>									
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
						<div class="btn_container">
							<button  class="btn btn_save">
								<span class="save_icon"></span>
								<span class="save_text">Сохранить</span>
							</button>			
						</div>	
					</div>
			</div>
			
			<div class="tab4">
				<div  class="tab-form">
				<div class="inputs_container">
					<div class="tab_inputs_wrap">
						<label class="label">Валюта системы</label>
					<div class="custom-select">
				      <select name="select">
				          <option>Пункт 1</option>
				          <option>Пункт 2</option>
				          <option>Пункт 3</option>
				      </select>
				    </div>
<!-- 						<div class="tab4_select_bg">
							<select  class="tab4_select">
								<option>Валюта 1</option>
								<option>Валюта 1</option>
							</select>
							<div class="tab4_select_btn">
								<img src="image/gtw-images/triangle-t.png" alt="triang">
								<img src="image/gtw-images/triangle-b.png" alt="triang">
							</div>
							<span class="tab4_select_arrow_block"></span>
						</div> -->
					</div>	
					<div class="tab_inputs_wrap">
						<label class="label">Валюта цен на сайте</label>
					<div class="custom-select">
				      <select name="select">
				          <option>Пункт 1</option>
				          <option>Пункт 2</option>
				          <option>Пункт 3</option>
				      </select>
				    </div>
<!-- 						<div class="tab4_select_bg">
							<select  class="tab4_select">
								<option>Валюта 1</option>
								<option>Валюта 1</option>
							</select>
							<div class="tab4_select_btn">
								<img src="image/gtw-images/triangle-t.png" alt="triang">
								<img src="image/gtw-images/triangle-b.png" alt="triang">
							</div>
							<span class="tab4_select_arrow_block"></span>
						</div> -->
					</div>	
					<div class="tab_inputs_wrap">
						<label class="label" >Курс валют</label>
						<input type="text" class="tab1_input">
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
			<div class="tab5">
				<div  class="tab-form">
					<div class="inputs_container">	
						<span class="map_text">Укажите точку на карте</span>
						<div id="map"></div>			
    <script>
      function initMap() {
        var uluru = {lat:50.4387573675085, lng: 30.475987633690238};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>	
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC89S35Vje50IkzLRK-UXA8bEejDpUfhs4&callback=initMap">
    </script>		
					</div>
					<div class="btn_container">
						<button  class="btn btn_save">
							<span class="save_icon"></span>
							<span class="save_text">Сохранить</span>
						</button>			
					</div>	
				</div>	
			</div>

			<div class="tab6">
				<div  class="tab-form">
				<div class="inputs_container">
					<div class="tab_textarea_wrap">
						<label class="label" for="name">Текст приветствия (перед данными о заказе)</label>
						<textarea class="tab_textarea" placeholder="Ваш заказ успешно оформлен…"></textarea>
					</div>
					<div class="tab_textarea_wrap">
						<label class="label" for="name">Подпись (после данных о заказе)</label>
						<textarea class="tab_textarea" placeholder="Спасибо что выбрали нас…"></textarea>
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