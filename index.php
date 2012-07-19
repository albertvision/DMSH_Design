<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Дизайн - Детска музикална школа "Свиленград"</title>
        <meta name="description" content='Детска музикална школа "Свиленград"'>
        <meta name="keywords" content="детска, музикална, школа,свиленград">
        <meta name="robots" content="index,follow" />
		<!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/superfish.css" />
		<link rel="stylesheet" type="text/css" href="css/tipsy.css" />
		
		<!-- jQuery -->
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/tipsy.js"></script>
		<script type="text/javascript">
		<!-- Menu -->
		$(document).ready(function() {
			$('ul.sf-menu').superfish();
		});
		$(function () {
			$(".sf-menu a").click(function () {
				alert('Очаквайте скоро!');
				return false;
			})
			
		});
		</script>
		<!-- Tipsy -->
		<script type='text/javascript'>
		  $(function () {
			$('a.tooltip').tipsy({gravity: $.fn.tipsy.autoNS});
		  });
		</script>
    </head>
    <body>
        <div id="container">
            <div id="header">
				<div class="logo"></div>
                <div class="menu">
                    <ul class="sf-menu">
						<li class="sfHover"><a href="#" class="first">Начало</a></li>
						<li><a href="#">За школата</a>
							<ul>
								<li><a href="#">Създател</a></li>
								<li><a href="#">История</a></li>
							</ul>
						</li>
						<li><a href="#">Класове</a>
							<ul>
								<li><a href="#">Тромпет</a>
									<ul>
										<li><a href="#">Изявени ученици</a></li>
										<li><a href="#">Преподавател</a></li>
										<li><a href="#">За инструмента</a></li>
									</ul>
								</li>
								<li><a href="#">Флейта</a>
									<ul>
										<li><a href="#">Изявени ученици</a></li>
										<li><a href="#">Преподавател</a></li>
										<li><a href="#">За инструмента</a></li>
									</ul>
								</li>
								<li><a href="#">Ударни инструменти</a>
									<ul>
										<li><a href="#">Изявени ученици</a></li>
										<li><a href="#">Преподавател</a></li>
										<li><a href="#">За инструмента</a></li>
									</ul>
								</li>
								<li><a href="#">Кларинет</a>
									<ul>
										<li><a href="#">Преподавател</a></li>
										<li><a href="#">За инструмента</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">Новини</a></li>
						<li><a href="#">Снимки</a></li>
						<li><a href="#">Видеа</a></li>
						<li><a href="#">Спонсори</a></li>
						<li><a href="#">Контакти</a></li>
					</ul>
                </div>
            </div>
            <div id="content">
				<h1>Заглавие 1</h1>
				<h2>Заглавие 2</h2>
				<h3>Заглавие 3</h3>
				<h4>Заглавие 4</h4>
				<h5>Заглавие 5</h5>
				<h6>Заглавие 6</h6>
				<b>Получер</b><br />
				<button>Бутон тип 1</button><br />
				<input type="button" value="Бутон тип 2" /> <br />
				<input type="submit" /> <br />
				<blockquote>Цитат</blockquote>
				<table>
					<thead>
						<tr><th>Колона 1</th><th>Колона 2</th><th>Колона 3</th></tr>
					</thead>
					<tbody>
						<tr><td>Съдържание</td><td>Съдържание</td><td>Съдържание</td></tr>
						<tr><td>Съдържание</td><td>Съдържание</td><td>Съдържание</td></tr>
						<tr><td>Съдържание</td><td>Съдържание</td><td>Съдържание</td></tr>
					</tbody>
				</table>
				
            </div>
            <div id="footer">
				<div class="webhosting"><a href="http://superhosting.bg" title="Хостинг и домейн от СуперХостинг.БГ"><img src="images/superhosting.gif"></a></div>
                <div class="copyright">&copy; Детска музикална школа "Свиленград"<br /> Сайтът е създаден от <a href="http://ygeorguev.eu" class="tooltip" title="Код и дизайн от Ясен Георгиев">Ясен Георгиев</a></div>
            </div>
        </div>
    </body>
</html>