<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Mi Información | Usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://www.earpunifim.com/laravel_fim/public/img/general/uni.png" />
    <link href="/public/assets/css/style.css" rel="stylesheet">
    <link href="/public/assets/css/informacion.css" rel="stylesheet">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

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
                                <a href="/app/view/horario.php" class="dropdown__anchor"><i class='bx bxs-pencil'></i>Mi horario
                                    de
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
                <div class="pant" id="toggle"></div>
            </div>
        </section>
        <section class="content">
            <section class="content-informa">
                <div class="informa">
                    <div>
                        <h1 class="title">MI INFORMACIÓN</h1>
                        <span class="sub-title">OBREGON RAMOS, MAXIMO</span>
                    </div>
                    <div class="cod-user">
                        <span class="usuario">CÓDIGO USUARIO:</span><br>
                        <span class="cod">75921759</span>
                    </div>
                </div>
                <form>
                    <div>
                        <div class="content-columm">
                            <div class="column">
                                <div class="row g-4">
                                    <div class="col-md" dissbled>
                                        <label>Documento de Identidad</label>
                                        <div class="form">
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md"  >
                                        <label>Dirección de correo electronico</label>
                                        <div class="form"  >
                                            <input type="email" aria-label="First name" class="form-control">
                                            <small>Si poseé mas de un correo electronico separelo por espacios en blanco</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md">
                                        <label>Área / cargo</label>
                                        <div class="form">
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <label>Dirección de domicilio</label>
                                        <div class="form">
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md">
                                        <label>Número de telefono fijo</label>
                                        <div class="form">
                                            <input type="number" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                            <small>Si poseé mas de un número telefonico separelo por espacios en
                                                blanco</small>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form">
                                            <b style="color:rgb(34, 79, 177);font-weight: 600;">Comentario</b>
                                            <textarea class="form-control" placeholder="...."
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md">
                                        <label>Número de celular</label>
                                        <div class="form">
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                            <small>Si poseé mas de un número separelo por espacios en blanco</small>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                    </div>
                                </div>
                            </div>
                            <div class="select">
                                <label>Sexo *</label>
                                <select class="form-select " aria-label="Default select example">
                                    <option selected disabled>Seleccionar</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                                <br>
                                <label>Fecha Nac *</label>
                                <input type="date" class="date" id="">
                            </div>
                        </div>
                    </div>
                    <div class="grou-buttom" >
                        <button type="submit" class="envio">GUARDAR CAMBIOS</button>
                        <button type="button"  onclick="window.location.href='/login.php'"
                            class="Cerrar">
                           <i class='bx bx-x'></i>CERRAR
                        </button>
                    </div>
                </form>
            </section>
        </section>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <script src="/public/assets/js/script.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
</body>

</html>