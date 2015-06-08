

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">


<?php
$arr = array('contacts' => 'Контакты', 'aboutus' => 'О нас',
 'sidebar_test/instrukcia' => 'Инструкция', 'sidebar_test/dostavka' => 'Доставка', 'catalog' => 'Каталог', 
 'how_to' => 'Как Сделать Заказ', 'sidebar_test/color' => 'Выбор Цвета', 'sidebar_test/garantia' => 'Гарантия', 'sidebar_test/comments' => 'Комментарии',
 'sidebar_test/materials' => 'Материалы',
  'catalog_test/ortopedicheskie_matrasu' => 'Ортопедические Матрасы', 'catalog_test/odnospalnie_krovati' => 'Односпальные Кровати',
   'catalog_test/mebel_v_gostinuu' => 'Мебель в Гостинную', 'catalog_test/mebel_detskaja' => 'Мебель Детская', 'catalog_test/komody_tumby' => 'Комоды и Тумбы',
   'catalog_test/dvuhspalnie_krovati' => 'Двухспальные Кровати', 'catalog_test/dvuhjarusnie_krovati' => 'Двухъярусные Кровати',  );

$title = isset($arr[$_GET['view']]) ? $arr[$_GET['view']] : 'Главная страница';
?>

<title><?php echo $title; ?></title>
	<!--<title>Фабрика Мебели - Главная Страница</title>-->
	<!--[if lt IE 9]><script src="http://htm5shim.googlecode.com/svn/trunk/html5.js"></script><![end if]-->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/fotorama.css" />
	<link rel="stylesheet/less" type="text/css" href="my_frame.less">
	<link rel="stylesheet" href="css/jquery.bxslider.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/pure.css" />
	<link rel="stylesheet" href="css/bootstrap-social.css" />
	


</head>
<body>
<!--Соц-->

	
<!--Контент-->

	<div id="page_align" class="b3radius">
		
		<!--HEAD-->
		<?php include 'header.php'; ?>
		<!--HEAD-->



<div class="my_line0" style="color:#990033"><hr></div>
		<!--Sidebar-->	
		<?php include 'sidebar.php'; ?>	
		<!--Sidebar-->		

		<!--content-->
		<section>
			<?php $view = empty($_GET['view']) ? 'start_page' : $_GET['view'];
			include $view.'.php'; ?>
		</section>
		<!--content-->				

		<div class="clr"></div>
	</div>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>
	<script type="text/javascript" src="libs/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="libs/fotorama.js"></script>
	
<footer>	
	<style>
		.copyrights {
			text-align: center;
			color:#202020; 	
		}
	</style>
	<div class="copyrights"> 
		<strong>&copy;1986-2015 <h3>"Фарбрика Мебели"</h3> все права защищены</strong>
	</div>
</footer>

</body>

</html>