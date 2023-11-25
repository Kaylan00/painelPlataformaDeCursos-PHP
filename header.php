<!DOCTYPE html>
<html>
<head>
	<title>Academix</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/iconeLogo.png" type="image/x-icon">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
    
<body>
	<header>
    <nav class="navbar navbar-light navbar-expand-lg py-3 px-5" style="background-color: #0D1321;">
    <div class="container">
            <a class="navbar-brand" href="?pagina=home">
                <img src="img/academixx.png" alt="Logo" title="Logo" width="200">
            </a>
            <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #0D1321;">
            <div class="offcanvas-header">
                <span class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt="Logo" title="Logo"></span>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: white;"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <?php
                    $pagina_atual = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
                    ?>

                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo ($pagina_atual === 'cursos') ? 'border-bottom border-2' : ''; ?>" aria-current="page" href="?pagina=cursos">Cursos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white <?php echo ($pagina_atual === 'alunos') ? 'border-bottom border-2' : ''; ?>" href="?pagina=alunos">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo ($pagina_atual === 'matriculas') ? 'border-bottom border-2' : ''; ?>" href="?pagina=matriculas">Matrículas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>

	<div id="conteudo" class="container">