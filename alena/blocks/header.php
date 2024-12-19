<link rel="stylesheet" href="css/header.css">
<div class="navigation">  
		<div class="menu">
				<ul class="nav">
                    <li><a class="link" href="main.php">Главная</a></li>
					<li><a class="link" href="contacts.php">Контакты</a></li>
                    <li><a class="link" href="aboutus.php">О нас</a></li>
					<li><a class="link" href="services.php">Пончики</a></li>
						
					<?php
					if(isset($_COOKIE['name']))
					echo('<li><a class="link" href="userpage.php">Кабинет</a></li>');

				    else
                      echo('<li><a class="link" href="registration.php">Регистрация</a></li>
                    <li><a class="link" href="auth.php">Вход</a></li>');
				?>
					
				</ul>
				</div>
				</div>
			