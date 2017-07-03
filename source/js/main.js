(function($){ 
	'use strict ';

	$(document).ready(function() {
	//tabs

	$('#tabs li').click(function(){
	  var thisClass = this.className.slice(0,5);
	    $('div.tab1').hide();
	       $('div.tab2').hide();
	       $('div.tab3').hide();
	       $('div.tab4').hide();
         $('div.tab5').hide();
         $('div.tab6').hide();
	       $('div.' + thisClass).fadeIn(500);
	       $('#tabs li').removeClass('active');
	       $(this).addClass('active');

	       return false;
	  });
	 $('li.tab1').click();


$(function() {
  $('#date1').datepicker();
  $('#date2').datepicker(); 
});
 



// vallidator
	 function valid(){
	 	if( $(this).hasClass('error') ){
          		$(this).removeClass('error').addClass('not_error')
          	}		
                $(this).addClass('not_error').next('.error-box').text('Принято')
                                .css('color','green')
                                .animate({'paddingLeft':'10px'},400)
                                .animate({'paddingLeft':'5px'},400);             
       };
       function notValid(){
       	 $(this).removeClass('not_error').addClass('error');
                $(this).next('.error-box')
                   				.text(arguments[0])
                                .css('color','red')
                                .animate({'paddingLeft':'10px'},400)
                                .animate({'paddingLeft':'5px'},400);
       }
     $('input#name, input#email, input#tel').unbind().blur( function(){
         var id = $(this).attr('id');
         var val = $(this).val();
       switch(id) {
            case 'name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/;
                if(val.length > 2 && val.length <= 30  && val != '' && rv_name.test(val)){
                	valid.call(this)
                }
                else{
              	   notValid.call(this,"Обязательное поле. Длина от 2 до 30 символов") 
             }
             break;
            case 'email':
               var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
               if(val != '' && rv_email.test(val))
          	     {valid.call(this)}
               else{ notValid.call(this,"Неправильный формат email") ;}
           break;
          case 'tel':
              if(val != '' && !isNaN(val) && val.length < 12)
              {	valid.call(this)}
              else{ notValid.call(this,"Неправильный формат номера") ;}
          break;

       } // end switch(...)
     }); // end blur()
	//validaton tab 2 
    $('input#input-product, input#quantity').unbind().blur( function(){
         var id = $(this).attr('id');
         var val = $(this).val();
	switch(id)
		{      
		     case 'product_name':       		
			var rv_name = /^[a-zA-Zа-яА-Я]+$/;
			if(val.length > 5 && val.length <= 20  && val != '' && rv_name.test(val)){
		           valid.call(this)            
				}
                else{
                  notValid.call(this,"Неправильное имя товара") ;
                }
            break;
     case 'quantity':	  
  	    if(val != '' && !isNaN(val) ){
               	 valid.call(this)
              }
              else
              {
              	notValid.call(this,"Обязательное поле") ;
              }
          break;        
       } 

     }); // end blur()
	//validaton tab 2 
	$('textarea#adress').unbind().blur( function(){
         var id = $(this).attr('id');
         var val = $(this).val();
         if( val != '' && val.length > 10  ){
               $(this).addClass("not_error")
          }
            else{
                notValid.call(this,"Обязательное поле,минимум 10 символов") ;
              }
      })

// file validation
$(".upload_img").change(function (){
  var type   = ['image/jpeg','image/png'];
  var width  = 1024;
  var height = 768;
  var size   = 5000000; // bytes
  var file   = $(this)[0].files[0];
  var prev   = document.getElementById('img_prev');
  function errMsg(x) {
    alert('Error ' + x);
    prev.src = '';
    $(this)[0].value = '';
  }
  if (type.indexOf(file.type) == -1) {
    errMsg('Допустимый формат файла jpeg,png ');
    return false;
  } else if (file.size > size) {
    errMsg('Размер изображения до 5 мб');
    return false;
  } else {
      // errMsg('Validation success!');
      $(this)[0].value = '';
      alert('Validation success!')
    };
  
})


}) 
})(jQuery)
