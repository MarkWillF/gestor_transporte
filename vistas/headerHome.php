<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: login.php"); exit();
}
$logged_in_user = $_SESSION['login_user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="Sistema de Gestion de Transporte" content="" />
    <meta name="Henry" content="" />
    <title>E.T Pegaso</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <!------------------------------------------------------------->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!------------------------------------------------------------>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">GESTOR - UNAP</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!--
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
            -->
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['login_user']; ?><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configuraciones</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../controllers/cerrarSesion.php">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">INICIO</div>
                        <a class="nav-link" href="principal.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">GESTION DE FLOTA</div>
                        <a class="nav-link collapsed" href="vehiculos.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                            Vehiculos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed" href="conductores.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Conductores
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="sb-sidenav-menu-heading">INFORMACION</div>
                        <a class="nav-link" href="pagos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Pagos
                        </a>
                        <a class="nav-link" href="registro.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Registro de salida
                        </a>
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>