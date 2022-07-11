<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dead Cells</title>
<!--	<link rel="stylesheet" type="text/css" href="../../CSS/slider.css">-->
<!--	<link rel="stylesheet" type="text/css" href="../../CSS/gameitem.css">-->
<!--	<link rel="stylesheet" type="text/css" href="../../../CSS/reset.css">-->
<!--	<link rel="stylesheet" type="text/css" href="../../../CSS/style.css">-->
    <?php include("../../defaultlink.html")?>
	<style>
		/* 70% */
.rate #rate1 .arc_end {
-webkit-transform: rotate(153deg);
-moz-transform: rotate(153deg);
-ms-transform: rotate(153deg);
-o-transform: rotate(153deg);
transform: rotate(153deg);
}

		/* 90% */
.rate #rate2 .arc_end {
-webkit-transform: rotate(81deg);
-moz-transform: rotate(81deg);
-ms-transform: rotate(81deg);
-o-transform: rotate(81deg);
transform: rotate(81deg);
}

		/* 80% */
.rate #rate3 .arc_end {
-webkit-transform: rotate(117deg);
-moz-transform: rotate(117deg);
-ms-transform: rotate(117deg);
-o-transform: rotate(117deg);
transform: rotate(117deg);
}
</style>
</head>
<body>
<?php include("D:/openserver/domains/BSGAMES/default/navgames.php") ?>
	
	<br id = "back"><br><br>
	
	<main>
		
		<section class="game">
			<div class="header">

				<p>
					<br>Dead Cells
				</p>
			</div>

			<div class="gameinfo">
				<div class="maininfo">
					<div class="images">
						<div class="all">
							<input checked type="radio" name="respond" id="desktop">
												<article id="slider">
														<input checked type="radio" name="slider" id="switch1">
														<input type="radio" name="slider" id="switch2">
														<input type="radio" name="slider" id="switch3">
														<input type="radio" name="slider" id="switch4">
														<input type="radio" name="slider" id="switch5">
													<div id="slides">
														<div id="overflow">
															<div class="image">
																<article><img src="1.jpg"></article>
																<article><img src="2.jpg"></article>
																<article><img src="3.jpg"></article>
																<article><img src="4.jpg"></article>
																<article><img src="5.jpg"></article>
															</div>
														</div>
													</div>
													<div id="controls">
														<label for="switch1"></label>
														<label for="switch2"></label>
														<label for="switch3"></label>
														<label for="switch4"></label>
														<label for="switch5"></label>
													</div>
													<div id="active">
														<label for="switch1"></label>
														<label for="switch2"></label>
														<label for="switch3"></label>
														<label for="switch4"></label>
														<label for="switch5"></label>
													</div>
												</article>				
						</div>
					</div>
					<div class="info">
						<p>
							Dead Cells — это экшн-платформер в жанре Rogue-lite и Metroidvania. Вас ждет огромный, постоянно меняющийся замок... Если, конечно, вы сможете победить тех, кто встанет у вас на пути, в 2D-схватках в стиле Souls-lite. Без сохранений. Убивайте, умирайте, учитесь и пробуйте снова.
						</p>
					</div>
					<div class="block" id="genres">
						<p class="title" id = "maintitle">
							Жанры
						</p>
				
						<div class="content">
							<a><div class="genre">
								урощённый рогалик
							</div></a>
							<a><div class="genre">
								пиксельная графика
							</div></a>
							<a><div class="genre">
								2D
							</div></a>
						</div>
					</div>

					<div class="block" id="rating">
						<p class="title" id = "maintitle">
							Рейтинг
						</p>
						<div class="content">
							<div class="percentline">
								<div class="rate">
									<div class="wrapper" id = "rate1">
										<div class="arc arc_fill">&nbsp;70%</div>
										<div class="arc arc_start"></div>    
										<div class="arc arc_end"></div>
									</div>
									<div class="title">
										Рекомендации критиков
									</div>								</div>
								<div class="rate">
									<div class="wrapper" id = "rate2">
										<div class="arc arc_fill">&nbsp;90%</div>
										<div class="arc arc_start"></div>    
										<div class="arc arc_end"></div>
									</div>
									<div class="title">
										Рекомендации игроков
									</div>
								</div>
								<div class="rate">
									<div class="wrapper" id = "rate3">
										<div class="arc arc_fill">&nbsp;80%</div>
										<div class="arc arc_start"></div>    
										<div class="arc arc_end"></div>
									</div>
									<div class="title">
										Средняя оценка
									</div>								</div>
							</div>
							<div class="reviews">
								<div class="review" >
										<p class="fill">&quot;Dead Cells may be the most fun I've had in a game all yea&quot;</p>
									<a href=""><div class="subfill"><p class="name">Polygon</p></div></a>
								</div>
								<div class="review" >
										<p class="fill">&quot;[...] The game smartly dissects what’s so exciting about Metroidvanias (exploring labyrinthine levels packed with variety, unlocking new abilities that re-contextualize areas you already passed through) and reassembles those things around a compulsive roguelike core.&quot;</p>
									<a href=""><div class="subfill"><p class="name">Kotaku</p></div></a>
								</div>
								<div class="review" >
										<p class="fill">&quot;[...] Dead Cells is worthy of its own invention. It’s not just a roguevania – it’s a damn good roguevania.&quot;</p>	
									<a href=""><div class="subfill"><p class="name">Rock Paper Shotgun</p></div></a>
									
								</div>
							</div>
						</div>
					</div>

					<div class="block" id="specification">
						<p class="title" id = "maintitle">
							Системные требования
						</p>
						
						<div class="content">
							<div class="spec" id="opt">
								<p class="title">Оптимальные</p>
								<div class="param">
									<p class="label">ОС</p>
									<p class="value"> Windows 7+</p>
								</div>
								<div class="param">
									<p class="label">Процессор</p>
									<p class="value">Intel i5+</p>
								</div>
								<div class="param">
									<p class="label">Видеокарта</p>
									<p class="value">Nvidia 450 GTS / Radeon HD 5750 или выше</p>
								</div>
								<div class="param">
									<p class="label">Память</p>
									<p class="value">4 ГБ</p>
								</div>
								<div class="param">
									<p class="label">Место на диске</p>
									<p class="value">500 МБ</p>
								</div>
								<div class="param" id = "last">
									<p class="label">DirectX</p>
									<p class="value">DirectX 9.1+ или OpenGL 3.2+</p>
								</div>

							</div>
							<div class="spec" id="min">
								<p class="title">Минимальные</p>
								<div class="param">
									<p class="label">ОС</p>
									<p class="value"> Windows 7+</p>
								</div>
								<div class="param">
									<p class="label">Процессор</p>
									<p class="value">Intel i5+</p>
								</div>
								<div class="param">
									<p class="label">Видеокарта</p>
									<p class="value">AMD RX 460 (4 ГБ) / NVIDIA GTX 960 (4 ГБ)</p>
								</div>
								<div class="param">
									<p class="label">Память</p>
									<p class="value">4 ГБ</p>
								</div>
								<div class="param">
									<p class="label">Место на диске</p>
									<p class="value">500 МБ</p>
								</div>
								<div class="param" id = "last">
									<p class="label">DirectX</p>
									<p class="value">DirectX 9.1+ или OpenGL 3.2+</p>
								</div>

							</div>
						</div>
					</div>
				</div>
				<aside class="subinfo">
					<img src="header.jpg" alt="header" class="header">
					<div class="costinfo">
						<div class="cost">
							<div class="discount">
								- 30%
							</div>
							<div class="price old">
								<s>499  руб.</s>
							</div>
							<div class="price">
								499  руб.
							</div>
						</div>
						<div class="discendtime">
							Распродажа заканчивается 06.01.2022 в 19:00
						</div>
					</div>
					<div class="buttons">
						<a class="buton" id = "buy">КУПИТЬ</a>
						<a class="buton" id = "bet">ДОБАВИТЬ В КОРЗИНУ</a>
						<a class="buton" id = "add">ДОБАВИТЬ В СПИСОК ЖЕЛАЕМОГО</a>						
					</div>
					<div class="age">
						<div class="image">
							<img src="../../../media/pegi/pegi16.png" alt="ПикВР"><span>16<b>+</b></span>
						</div>
					</div>
					<div class="info">
						<div class="line">
							<h2 class="label">Разработчик</h2>
							<h2 class="value">Motion Twin</h2>	
							
						</div>
						<div class="line">
							<h2 class="label">Издатель</h2>
							<h2 class="value">Motion Twin</h2>
						</div>
						<div class="line">
							<h2 class="label">Дата выхода	</h2>
							<h2 class="value">07.08 .2018</h2>
						</div>
						<div class="line">
							<h2 class="label">Платформа</h2>
							<h2 class="value">
								<img src="../../../media/OS/lin.png" alt="lin">
								<img src="../../../media/OS/mac.png" alt="mac">
								<img src="../../../media/OS/win.png" alt="win">
							</h2>
						</div>
					</div>
				</aside>
			</div>
		</section>
	</main>
<?php include("D:/openserver/domains/BSGAMES/default/footergames.php") ?>
</body>
</html>