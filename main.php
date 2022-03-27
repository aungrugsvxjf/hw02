<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>PHP Practice</title>
	    <link rel="stylesheet" href="style.css"/>
	</head>

	<body>
		<div class="flex-container">
			<?php include 'incl/header.php'?>

			<div class="personal-info">
				<h1>  <?php echo $greeting ?> </h1>

				<div class="data">
					<div class="myImg">
						<?php echo '<img src="img/php.jpeg">'; ?>
					</div>

					<div class="fullname">
						<p>
							<?php echo "Меня зовут $name $surname ". '<br>';
								echo "город $city" ?>
						</p>

						<p><?php
								$age =  date("Y") - $birthYear;
								$year = 'лет';
								if ($age % 10 == 1) {
									$year = 'год';
								} elseif ($age % 10 < 5) {
									$year = 'года';
								}
								echo "Мне $age $year" ?>
						</p>
						<p>Мы научились создавать переменные</p>
						<p>Изучили простые операции с ними</p>
					</div>
				</div>

				<div class="knowledge">
					<?php include 'incl/knowledge.php'?>

					<p>
						<?php
							echo "Всего модулей в курсе - $totalModulesCount". '<br>';
							echo "Осталось модулей к изучению - $remainingModulesCount!". '<br>';
							echo $infoMessage;
						?>
					</p>
				</div>

				<div class="article">
					<p class="text">
						В 1994 году датский программист (ныне живущий в Канаде) Расмус Лердорф (Rasmus Lerdorf) создал набор CGI-скриптов на языке программирования C для вывода и учёта посетителей его онлайн-резюме, обрабатывающий шаблоны HTML-документов. Лердорф назвал набор Personal Home Page (Личная Домашняя Страница), но более часто упоминалось название "PHP Tools". Вскоре функциональности перестало хватать, и Расмус переписал PHP Tools, создав более крупную и богатую реализацию.<br>
						В июне 1995 года Расмус открыл исходный код PHP Tools общественности, что позволило разработчикам использовать его по своему усмотрению. Это также дало возможность пользователям исправлять ошибки в коде и улучшать его.<br>
						В 1997 году после длительного бета-тестирования вышла вторая версия обработчика, написанного на C — PHP/FI 2.0. Её использовали около 1 % (приблизительно 50 тысяч) всех интернет-доменов мира.<br>
						<a href="https://ru.wikipedia.org/wiki/%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F_PHP" class="excerpt-info">Источник: Википедия</a>
					</p>
				</div>
			</div>

			<?php include 'incl/footer.php'?>
		</div>
	</body>
</html>