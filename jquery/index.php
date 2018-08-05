<!DOCTYPE html>
<html>
<head>
	<title>JQUERY</title>
	<!-- Подключаем стили -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='style.css' rel='stylesheet' type='text/css'>
    <!-- Подключаем JS и JQ -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <form class="form-signin">
      <p id="head" class="font-weight-normal">Подписаться на рассылку</p>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
   	   <br>
   	   <!-- Вывод ответа -->
   	   <div class="response">
    		<p id="place"></p>
   		</div>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

</body>
</html>