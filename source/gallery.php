<!doctype html>
<html>
<?php include('head.php')?>
<body>
<?php include('header.php')?>
<main id="main">
	<div class="order_wrap">
			<h5>Здесь Вы можете настроить категории</h5>
			<div class="order_content gallery_block">
				<div class="order_head">
					<span class="order_list_name media_img">
					Галерея 
					</span>
				</div>
					<div class="btn-container_1">
						<a href="#" class="btn btn_upload">
							Скачать  все 
						</a>
						<a href="#" class="btn btn_delete delete_all">
							Удалить  все 
						</a>
					</div>
				<form class="gallery_container">
					<div class="add_img_block" onclick="$('#img_file').trigger('click')">
						<a href="#" class="add_img" >
							<img src="image/gtw-images/add-plus-sign-outline.png" alt="">
						</a>
					</div>
					<div class="img_block">
						<img src="https://cdn.pixabay.com/photo/2017/06/23/16/57/tree-2435269_960_720.jpg" alt="">
						<div class="chechbox_block ">		
							<label for="img1" >
								<input class="checkbox" id="img1" type="checkbox" >
								<span class="checkbox-custom"></span>
							</label>
						</div>
						<a href="#" class="close_btn"></a>	
						<a href="#" class="upload_layer"></a>	

					</div>
					<div class="img_block">
						<img src="http://www.gamer.ru/system/attached_images/images/000/625/881/original/the-witcher-3_6.jpg" alt="">
						<div class="chechbox_block">		
							<label for="img2">
								<input class="checkbox" id="img2" type="checkbox" >
								<span class="checkbox-custom"></span>
							</label>
						</div>
						<a href="#" class="upload_layer"></a>		
						<a href="#" class="close_btn"></a>		
			
					</div>
					<div class="img_block">
						<img src="https://cdn.pixabay.com/photo/2014/10/07/13/48/mt-fuji-477832_960_720.jpg" alt="">
						<div class="chechbox_block ">		
							<label for="img3">
								<input class="checkbox" id="img3" type="checkbox" >
								<span class="checkbox-custom"></span>
							</label>
						</div>
						<a href="#" class="close_btn"></a>	
						<a href="#" class="upload_layer"></a>							
					</div>
					<div class="img_block">
						<img src="https://cdn.pixabay.com/photo/2017/05/19/15/16/countryside-2326787_960_720.jpg" alt="">
						<div class="chechbox_block ">		
							<label for="img4" >
								<input class="checkbox" id="img4" type="checkbox" >
								<span class="checkbox-custom"></span>
							</label>
						</div>
						<a href="#" class="close_btn"></a>	
						<a href="#" class="upload_layer"></a>							
					</div>
					<div class="img_block">
						<img src="https://cdn.pixabay.com/photo/2017/06/14/15/18/cherries-2402449__340.jpg" alt="">
						<div class="chechbox_block ">		
							<label for="img5">
								<input class="checkbox" id="img5" type="checkbox" >
								<span class="checkbox-custom"></span>
							</label>
						</div>
						<a href="#" class="close_btn"></a>	
						<a href="#" class="upload_layer"></a>						
					</div>
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
	  <input id="img_file" type="file" class="upload_img " value="Загрузить" placeholder="">
</main>
// popUp start
<div class="overlay">
	<div class="popUp">
		<div class="btn_container">
			<button class="btn btn_close"></button>	
		</div>
		<div class="gallery_container">
			<div class="add_img_block" onclick="$('#img_file').trigger('click')">
				<a href="#" class="add_img" >
					<img src="image/gtw-images/add-plus-sign-outline.png" alt="">
				</a>
			</div>
			<div class="img_block">
				
				<a href="#" class="img_layer"><img src="https://cdn.pixabay.com/photo/2017/06/23/16/57/tree-2435269_960_720.jpg" alt="">
				<span class="img_layer"></span></a>
				</a>
			</div>
			<div class="img_block">
				<a href="#" class="img_layer">
					<img src="https://cdn.pixabay.com/photo/2017/04/09/09/56/avenue-2215317_960_720.jpg" alt="">						
					<span class="img_layer"></span>
				</a>
			</div>
			<div class="img_block">

				<a href="#" class="img_layer">
					<img src="https://cdn.pixabay.com/photo/2017/06/11/02/05/summer-2391348_960_720.jpg" alt="im">
					<span class="img_layer"></span>
				</a>		
			</div>
			<div class="img_block">

				<a href="#" class="img_layer">
				<img src="https://cdn.pixabay.com/photo/2017/05/24/11/40/desert-2340326_960_720.jpg" alt="">	<span class="img_layer"></span>				
				</a>		
			</div>
			<div class="img_block">

				<a href="#" class="img_layer">
				<img src="https://cdn.pixabay.com/photo/2017/02/19/15/28/italy-2080072_960_720.jpg" alt="">		
				<span class="img_layer"></span>				
				</a>			
			</div>
		</div>	
	</div>
</div>
// popUp end
</body>
</html>