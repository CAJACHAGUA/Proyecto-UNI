<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Información Docente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://www.earpunifim.com/laravel_fim/public/img/general/uni.png">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/info-docente.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text" onclick="window.location.href = '/app/view/home.php';">
                <spam class="imge">
                    <img src="/public/assets/img/logo.png" alt="logo" />
                </spam>
                <div class="header-text">
                    <span class="empresa">UNI EARFIM</span>
                    <spam class="profession">DOCENTE</spam>
                </div>
            </div>
        </header>
        <div class="content-menu">
            <ul class="dropdown" id="menu">
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <i class='bx bxs-briefcase'></i>
                        <span class="dropdown__span">General</span>
                        <i class='bx bx-chevron-down arrow'></i>
                        <input type="checkbox" class="dropdown__check">
                    </a>
                    <div class="dropdown__content">
                        <ul class="dropdown__sub">
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-graduation '></i>Aula virtual
                                    FIM</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="/app/view/horario.php" class="dropdown__anchor"><i class='bx bxs-pencil'></i>Mi horario de
                                    clases</a>
                            </li>

                            <li class="dropdown__li">
                                <a href="/app/view/info-docente.php" class="dropdown__anchor"><i
                                        class='bx bxs-user-rectangle'></i>Información Docente</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-landmark'></i>Mis Cursos
                                    Asignados</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-book-bookmark'></i>Tutoria
                                    Alumnos</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="/app/view/asistencia.php" class="dropdown__anchor"><i
                                        class='bx bxs-book-bookmark'></i>Asistencia</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bx-link-alt'></i>Cargar Notas ORCE</a>
                            </li>

                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-copy-alt'></i>Biblioteca
                                    Virtual</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-dashboard'></i>Mi
                                    Disponibilidad</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-book-content'></i>Reclamo del
                                    docente</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-book-content'></i>Correción de
                                    notas</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-cog'></i>Ayuda en Aula</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor"><i class='bx bxs-graduation'></i>Aula virtual
                                    titulación</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <i class='bx bxs-briefcase'></i>
                        <span class="dropdown__span">Administrador</span>
                        <i class='bx bx-chevron-down arrow'></i>
                        <input type="checkbox" class="dropdown__check">
                    </a>
                </li>
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <i class='bx bxs-briefcase'></i>
                        <span class="dropdown__span">Acreditación FIM</span>
                        <i class='bx bx-chevron-down arrow'></i>
                        <input type="checkbox" class="dropdown__check">
                    </a>
                </li>
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <i class='bx bxs-briefcase'></i>
                        <span class="dropdown__span">Virtual</span>
                        <i class='bx bx-chevron-down arrow'></i>
                        <input type="checkbox" class="dropdown__check">
                    </a>
                </li>
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <i class='bx bxs-briefcase'></i>
                        <span class="dropdown__span">Documentos académicos</span>
                        <i class='bx bx-chevron-down arrow'></i>
                        <input type="checkbox" class="dropdown__check">
                    </a>
                </li>
            </ul>
        </div>
        <div class="pant" id="toggle"></div>
    </nav>
    <main class="home">
        <section class="content-nav">
            <i class="bx bx-menu toggle"></i>
            <p class="name">
                <?php 
                    $usuario = $_SESSION['usuario'];
                    echo $usuario;
                ?>
            </p>
            <div class="vertical-rounded">
                <div class="dropdown ms-3 dots-vertical-rounded">
                    <button class="btn btn-bd-light dropdown" id="bd-versions" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-display="static">
                        <i class='bx bx-dots-vertical-rounded' style="color: white;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions">
                        <li>Roles</li>
                        <li><img src="/public/assets/img/perfil.jpg"> DOCENTE</li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/app/view/informacion.php">Mi información</a></li>
                        <li><a class="dropdown-item" href="/app/view/miClave.php">Reinciar clave</a></li>
                        <li><a class="dropdown-item" href="#" onclick="cerrar_sesion()">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="content">
            <section class="">
                <div class="content-info">
                    <img src="/public/assets/img/perfil.jpg" alt="" class="perfil">
                    <div class="name">
                        <h4>OBREGON RAMOS, MAXIMO<p>0B16078</p>
                        </h4>
                        <div class="button-option d-flex">
                            <div class="m-2">
                                <p>Actualizar</p>
                                <button type="button" class="btn btn-outline-secondary"><i
                                        class='bx bxs-cloud-upload'></i></button>
                            </div>
                            <div class="m-2">
                                <p>Historial</p>
                                <button type="button" class="btn btn-outline-secondary"><i
                                        class='bx bxs-copy-alt'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-option">
                    <div class=" d-flex">
                        <div class="m-2">
                            <button type="button" class="btn btn-outline-success ">
                                <i class='bx bx-revision'></i></button>
                        </div>
                        <div class="m-2">
                            <button type="button" class="btn btn-outline-danger">Generar PDF</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="">
                <ul class="nav nav-tabs ">
                    <li class="nav-item ">
                        <a class="nav-link btn1 active" aria-current="page" href="#">1er</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn2" href="#">2do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">3er</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">4to</a>
                    </li>
                </ul>
                <article class="frame">
                    <article class="content-uno" id="content-uno">
                        <form action=""> 
                        <article class="content-datos">
                            <h4 class="title">1.- DATOS PERSONALES</h4>
                            <div class="content-columm">
                                <div class="datos-column-1">
                                    <div class="row g-4">
                                        <div class="col-md">
                                            <b>Sexo</b>
                                            <div class="form">
                                                <select class="form-select form-select-lg mb-3 fs-6 fs-6"
                                                    aria-label=".form-select-lg example" required>
                                                    <option value="" disabled selected>Seleccionar</option>
                                                    <option value="1">Masculino</option>
                                                    <option value="2">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <b>Fecha Nacimiento</b>
                                            <div class="form">
                                                <input type="date" class="date">
                                            </div>
                                        </div>
                                    </div>
                                    <b>Telefono Fijo<i class='bx bxs-pencil' style='color:#4178f0'></i><input
                                            class="text" type="text"></b>
                                    <b>RUC<input class="text" type="text"></b>
                                    <b>Brevete y Categoria<input class="text" type="text"></b>
                                    <div class="row g-4">
                                        <div class="col-md">
                                            <b>Estado Civil</b>
                                            <div class="form">
                                                <select class="form-select form-select-lg mb-3 fs-6"
                                                    aria-label=".form-select-lg example">
                                                    <option value="" disabled selected>Seleccionar</option>
                                                    <option value="1">Soltero</option>
                                                    <option value="2">Casado</option>
                                                    <option value="3">Viudo</option>
                                                    <option value="4">Divorciado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <b>Fecha de Matrimonio</b>
                                            <div class="form">
                                                <input type="date" class="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-md">
                                            <div class="form">
                                                <b>E-mail (S)<input class="text" type="email"></b>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form">
                                                <br><input class="text" type="email"></br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="datos-column-2 ">
                                    <div class="row g-4">
                                        <div class="col-md">
                                            <b>DNI</b><i class='bx bx-check-circle' style='color:#228903'></i>
                                            <div class="form">
                                                <input type="text" name="" id="" class="text">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-outline-secondary"><i
                                                    class='bx bxs-cloud-upload'></i></button>
                                            <button type="button" class="btn btn-outline-secondary"><i
                                                    class='bx bxs-show'></i></button>
                                            <button type="reset" class="btn btn-outline-secondary"><i
                                                    class='bx bx-trash-alt'></i></button>
                                        </div>
                                    </div>
                                    <b>Celular<i class='bx bxs-pencil' style='color:#4178f0'></i><input type="tel"
                                            class="text"></b>
                                    <b>Lib Militar<input type="text" class="text"></b>
                                    <b>Si cuenta con vehiculo,indicar modelo,placa,año,color<input type="text"
                                            class="text"></b>
                                    <b>Grupo Sanguineo<input type="text" class="text"></b>
                                </div>
                            </div>
                        </article>
                        <article class="content-lugar-naci">
                            <h3 class="title">Lugar de Nacimiento</h3>
                            <div class="row g-9 ">
                                <div class="col-md-6">
                                    <b>País</b>
                                    <div class="form">
                                        <select class="form-select form-select-lg mb-3 fs-6"
                                            aria-label=".form-select-lg example"  id="Lugar_pais" class="pais">
                                            <option disabled selected>Seleccionar</option>
                                            <option value="1">Perú</option>
                                            <option value="2">Otro país</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>Departamento</b>
                                    <div class="form">
                                        <select class="form-select form-select-lg mb-3 fs-6 "
                                            aria-label=".form-select-lg example"  id="Lugar_depa" class="departamento" disabled>
                                            <option value="" selected>Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>Provincia</b>
                                    <div class="form">
                                        <select class="form-select form-select-lg mb-3 fs-6"
                                            aria-label=".form-select-lg example"  id="Lugar_provi" class="provincia" disabled>
                                            <option value="" selected>Seleccionar</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>Distrito</b>
                                    <div class="form">
                                        <select class="form-select form-select-lg mb-3 fs-6"
                                            aria-label=".form-select-lg example"  id="Lugar_distri" class=".my-class" disabled>
                                            <option value="" selected>Seleccionar</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </article>
                        </form> 
                        <article class="content-domicilio">
                            <h3 class="title">Domicilio</h3>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Añadir Registro
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 800px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Agregar Domicilio</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form id="DomicilioForm">
                                            <div class="modal-body">
                                                <div class="row g-9 ">
                                                    <div class="col-md-6 " id="col-Pais">
                                                        <b>País</b>
                                                        <div class="form" id="select">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="pais" required>
                                                                <option value="" disabled selected>Seleccionar</option>
                                                                <option value="1">Perú</option>
                                                                <option value="2">Otro país</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6  d-none" id="col-Dire-extrajera">
                                                        <div style="display: flex; align-items: center;">
                                                            <i class='bx bx-left-arrow-alt'
                                                                style="cursor: pointer; font-size:30px; bottom:10px;"
                                                                onclick="restablecer()"></i><b> Dirección extrajera</b>
                                                        </div>
                                                        <div class="form">
                                                            <input type="text" class="text" id="dire_extrajera">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Departamento</b>
                                                        <div class="form" id="select">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="departamento"
                                                                 disabled required>
                                                                <option value="" disabled selected>Seleccionar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Provincia</b>
                                                        <div class="form" id="select">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="provincia"
                                                                disabled required>
                                                                <option value="" selected disabled>Seleccionar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Distrito</b>
                                                        <div class="form" id="select">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="distrito"
                                                                disabled required>
                                                                <option value="" disabled selected>Seleccionar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Tipo de Vía</b>
                                                        <div class="form" id="select">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="tip_via"
                                                                disabled required>
                                                                <option value="" disabled selected>Seleccionar</option>
                                                                <option value="1">Calle</option>
                                                                <option value="2">Avenida</option>
                                                                <option value="3">Carretera</option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Nombre de Vía</b>
                                                        <div class="form">
                                                            <input type="text" class="text" id="Nom_via" required
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Tipo</b>
                                                        <div class="form" id="select">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="tipo" disabled
                                                                required>
                                                                <option value="" disabled selected>Seleccionar</option>
                                                                <option value="1">Mz</option>
                                                                <option value="2">Two</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Número de Inmueblo</b>
                                                        <div class="form">
                                                            <input type="text" class="text" id="N_inmueblo" required
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Tipo de Zona</b>
                                                        <div class="form" id="select">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="tipo_zona"
                                                                disabled required>
                                                                <option value="" disabled selected>Seleccionar</option>
                                                                <option value="1">Urbanas</option>
                                                                <option value="2">Rurales</option>
                                                                <option value="3">Residencial</option>
                                                                <option value="4">Comercial</option>
                                                                <option value="5">Industrial</option>
                                                                <option value="6">Suburbana</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Nombre de la Zona</b>
                                                        <div class="form">
                                                            <input type="text" class="text" id="N_zona" required
                                                                disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                    onclick="restablecer()">Cerrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="content-table">
                                <table class="table table-bordered" id="DomicilioTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Orden</th>
                                            <th scope="col">País</th>
                                            <th scope="col">Dirección extrajera</th>
                                            <th scope="col">Departamento</th>
                                            <th scope="col">Provincia</th>
                                            <th scope="col">Distrito</th>
                                            <th scope="col">Tipo de vía</th>
                                            <th scope="col">Nombre de vía</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Número de Inmueble</th>
                                            <th scope="col">Tipo de Zona</th>
                                            <th scope="col">Nombre de Zonas </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabla">
                                        <tr >
                                            <td colspan="12" style="font-size: 20px;">NO HAY DATOS EN LA TABLA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="content-familiar">
                            <article>
                                <h3 class="title" id="title">Familiar</h3>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">
                                    Añadir Registro
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="max-width: 800px;">
                                        <div class="modal-content">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar Formación
                                                        Profesional</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form id="familiarForm">
                                                    <div class="modal-body p-4">

                                                        <div class="row g-9 ">
                                                            <div class="col-md-6">
                                                                <b>Apellidos y Nombres</b>
                                                                <div class="form">
                                                                    <input type="text" class="text" id="Ape_Nom"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <b>Parantesco</b>
                                                                <div class="form">
                                                                    <select class="form-select form-select-lg mb-3 fs-6"
                                                                        aria-label=".form-select-lg example" id="Paren"
                                                                        required>
                                                                        <option disabled selected>Seleccionar</option>
                                                                        <option value="1">Padre/madre</option>
                                                                        <option value="2">Hijo/Hija</option>
                                                                        <option value="3">Hermano/Hermana</option>
                                                                        <option value="4">Esposo/Esposa</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <b>Fecha de Nacimiento</b>
                                                                <div class="form">
                                                                    <input type="date" class="date" name="" id="Fech_na"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <b>Estado Civil</b>
                                                                <div class="form">
                                                                    <select class="form-select form-select-lg mb-3 fs-6"
                                                                        aria-label=".form-select-lg example"
                                                                        id="Esta_Civil" required>
                                                                        <option disabled selected>Seleccionar</option>
                                                                        <option value="1">Soltero</option>
                                                                        <option value="2">Casado</option>
                                                                        <option value="3">Viudo</option>
                                                                        <option value="4">Divorciado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <b>Nivel de estudios</b>
                                                                <div class="form">
                                                                    <select class="form-select form-select-lg mb-3 fs-6"
                                                                        aria-label=".form-select-lg example"
                                                                        id="Nivel_estu" required>
                                                                        <option disabled selected>Seleccionar</option>
                                                                        <option value="1">Nivel Primaria</option>
                                                                        <option value="2">Nivel Secundaria</option>
                                                                        <option value="3">Nivel Estudio Tecnico</option>
                                                                        <option value="4">Nivel Estudio Superior
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <b>Ocupación</b>
                                                                <div class="form">
                                                                    <input type="text" class="text" id="Ocupacion">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <b>¿Dependes economicamente de Ud.?</b>
                                                                <div class="form">
                                                                    <input type="radio" name="tsSelector" id="true">Si
                                                                    <input type="radio" name="tsSelector" id="false">No
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal" onclick="reset()">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="content-table">
                                <table class="table table-bordered" id="FamiliarTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Orden</th>
                                            <th scope="col">Apellido y Nombre</th>
                                            <th scope="col">Parentesco</th>
                                            <th scope="col">Fecha de Nacimiento</th>
                                            <th scope="col">Estado Civil</th>
                                            <th scope="col">Nivel de Estudio</th>
                                            <th scope="col">Ocupación</th>
                                            <th scope="col">Dependencia Economica</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyFamiliar">
                                        <tr>
                                            <td colspan="12" style="font-size: 20px;">NO DATOS EN LA TABLA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="content-caso-sos">
                            <h3 class="title">1.1.-PERSONAS A COMUNICAR EN CASO DE EMERGENCIA:</h3>
                            <div class="contacto">
                                <h5>Contacto 1 (*)</h5>
                                <div class="content-columm">
                                    <b>Apellidos y Nombres
                                        <input type="text" class="text"></b>
                                    <div class="content-columm">
                                        <b>Parentesco
                                            <input type="text" class="text"></b>
                                        <b>Celular
                                            <input type="tel" class="text"></b>
                                    </div>
                                </div>
                            </div>
                            <div class="contacto">
                                <h5>Contacto 2 (*)</h5>
                                <div class="content-columm">
                                    <b>Apellidos y Nombres
                                        <input type="text" class="text"></b>
                                    <div class="content-columm">
                                        <b>Parentesco
                                            <input type="text" class="text"></b>
                                        <b>Celular
                                            <input type="tel" class="text"></b>
                                    </div>
                                </div>
                            </div>
                            <div class="contacto">
                                <h5>Contacto 3 (*)</h5>
                                <div class="content-columm">
                                    <b>Apellidos y Nombres
                                        <input type="text" class="text"></b>
                                    <div class="content-columm">
                                        <b>Parentesco
                                            <input type="text" class="text"></b>
                                        <b>Celular
                                            <input type="tel" class="text"></b>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="content-datos-laborales">
                            <h3 class="title">2.- DATOS LABORABLES</h3>
                            <div class="datos">
                                <b>Condición (C/N)
                                    <select class="form-select form-select-lg mb-3 fs-6"
                                        aria-label=".form-select-lg example">
                                        <option disabled selected>Seleccionar</option>
                                        <option value="1">Contratado</option>
                                        <option value="2">Two</option>
                                    </select></b>
                                <b>Categoria
                                    <select class="form-select form-select-lg mb-3 fs-6"
                                        aria-label=".form-select-lg example">
                                        <option disabled selected>Seleccionar</option>
                                        <option value="1">Plantilla</option>
                                        <option value="2">Two</option>
                                    </select></b>
                                <b>Dedicación
                                    <select class="form-select form-select-lg mb-3 fs-6"
                                        aria-label=".form-select-lg example">
                                        <option disabled selected>Seleccionar</option>
                                        <option value="1">B1</option>
                                        <option value="2">Two</option>
                                    </select></b>
                                <b>Horas<br>
                                    <input type="datetime" class="text"></b>
                            </div>
                            <div class="dato">
                                <b>Horas Lectivas
                                    <input type="text" class="text"></b>
                                <b style="padding-left: 40px;">Dependecia donde Laboral(Actual)
                                    <input type="text" class="text"></b>
                            </div>
                            <div class="datos">
                                <b>Fecha de ingreso FIM
                                    <input type="date" class="date"></b>
                                <b>Fecha.Nombramiento
                                    <input type="date" class="date"></b>
                                <b>Regimen Seminario
                                    <select class="form-select form-select-lg mb-3 fs-6"
                                        aria-label=".form-select-lg example">
                                        <option disabled selected>Seleccionar</option>
                                        <option value="1">AFP</option>
                                        <option value="2">ONP</option>
                                    </select>
                                </b>
                            </div>
                            <div class="datos">
                                <b>AFP (Nombre)
                                    <input type="text" name="" id="" class="text"></b>
                                <b>Cód.AFP
                                    <input type="text" name="" id="" class="text"></b>
                                <b>Cód.EsSalud
                                    <input type="text" name="" id="" class="text"></b>
                                <b>Otro tipo de Seguro
                                    <input type="text" name="" id="" class="text"></b>
                            </div>
                        </article>
                    </article>
                    <article class="content-dos d-none" id="content-dos">
                        <h4 class="title">3.-DATOS DE FORMACIÓN PROFESIONAL: Indicar Grados y Títulos
                            obtenidos,señalando
                            Fercha de Revalidación para el caso de Títulos y Grados otorgados en el Extranjero</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2" onclick="borrar()">
                            Añadir Registro
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" style="max-width: 800px;">
                                <div class="modal-content">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title " id="title_profe">Agregar Formación
                                                Profesional</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form id="profesionalForm">
                                            <div class="modal-body p-4">
                                                <div class="row g-9 ">
                                                    <div class="col-md-6">
                                                        <b>Formación profesional</b>
                                                        <div class="form">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="form_profe"
                                                                required>
                                                                <option value="" disabled selected>Seleccionar</option>
                                                                <option value="1">Titulo profesional</option>
                                                                <option value="2">Maestria</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Pais</b>
                                                        <div class="form">
                                                            <select class="form-select form-select-lg mb-3 fs-6"
                                                                aria-label=".form-select-lg example" id="Pais" required >
                                                                <option value="" disabled selected>Seleccionar</option>
                                                                <option value="1">Perú</option>
                                                                <option value="2">Otro Pais</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Universidad</b>
                                                        <div class="form">
                                                            <input type="text" class="text" id="universidad" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Especialidad</b>
                                                        <div class="form">
                                                            <input type="text" class="text" id="especialidad" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Fecha Inicio</b>
                                                        <div class="form">
                                                            <input type="date" class="date" id="fech_ini" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Fecha Final</b>
                                                        <div class="form">
                                                            <input type="date" class="date" id="fech_fin" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 p-3">
                                                        <b>Grado Obtenido</b>
                                                        <div class="form">
                                                            <input type="text" class="text" id="grado" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 p-3 ">
                                                        <b>Documento Sustentado</b><br>
                                                        <div class="d-flex  align-items-center">
                                                            <input type="file" class="hidden" id="document_sus"
                                                                accept=".pdf " required>
                                                            <label for="document_sus"
                                                                class="fileLabel btn btn-outline-secondary">
                                                                <i class="bx bxs-cloud-upload"></i>
                                                            </label>

                                                            <i class='bx bx-check-circle bx-tada d-none' id="check"
                                                                style='color:#31c10d; font-size: 30px;'></i>
                                                        </div>

                                                    </div>
                                                    <b>Observación:</b>
                                                    <textarea id="miTextarea" style="height: 100px;"
                                                        placeholder="Escribe algo aquí..."></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                    onclick="reset()">Cerrar</button>
                                                <button type="submit" class="btn btn-primary a">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="content-table">
                            <table class="table table-bordered" id="FormacionTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Orden</th>
                                        <th scope="col">Formación Profesional</th>
                                        <th scope="col">País</th>
                                        <th scope="col">Universidad</th>
                                        <th scope="col">Especialidad</th>
                                        <th scope="col">Fecha Inicio</th>
                                        <th scope="col">Fecha Final</th>
                                        <th scope="col">Grado Obtenido</th>
                                        <th scope="col">Documento sustentatorio</th>
                                        <th scope="col">Observación</th>
                                        <th scope="col" colspan="2">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="bobyFormacion">
                                    <tr>
                                        <td colspan="12" style="font-size: 20px;">NO DATOS EN LA TABLA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal para PDF -->
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" style="max-width: 900px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-5 txt-center" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="contenedorPDF">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </article>
            </section>
        </section>

    </main>
    <script src="/public/assets/js/script.js"></script>
    <script src="/public/assets/js/info-docente.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <!-- Swee alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>