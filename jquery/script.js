// При загрузке документа устанавливаем обработчики на события //
$(document).ready(function(){
//При нажатии кнопки Отправить предотвращаем стандартное поведение. И устанавливаем своё поведение.
$("#submit").click(function(e){ 
        e.preventDefault(); 
        send(); 
    });
//Функция отправляет данные из формы (поле email) на обработку в файл email.php.
function send(){
	var data_var = {};
	data_var['email'] = $(inputEmail).val();
	$.ajax({
  		 url: "email.php",
	  	 type: "POST",
	  	 dataType: 'json',
 	 	 data:
	  	 data_var,
   		success: function(html){
	   	  	 $(place).html(html);
	      },
	    error: function (error) {
      		 $(place).html("Ваш email не был подписан на рассылку!");
		}
	 });

}
//Обработчик событи на очистку div responce при нажатии на input email
$("#inputEmail").click(function(e){ 
        $(place).html('');
    });


 });