<html>
	<head>
		<title>Meu site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>
	<body>
		<header>
			<h1>Meu sistema de contatos</h1>
		</header>
		<section>
			<!-- Chamando a Views específica da página que será carregada e foi chamada pelo seu respectivo Controller -->
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>
		<footer>
			Todos os direitos reservados
		</footer>
	</body>
</html>