<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />

<link href="personal.php" />

<link href="capacitacion.html" />
<link href="reportsCapacitacion.html" />

<link href="damas.html" />
<link href="reportsDamas.html" />

<link href="juventud.html" />
<link href="reportsJuventud.html" />

<link href="socorros.html" />
<link href="reportsSocorros.html" />

<link href="voluntariado.html" />
<link href="reportsVoluntariado.html" />

<link href="administracion.html" />
<link href="reportsAdmin.html" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <div><i class="fas fa-hand-holding-medical fa-sm"></i></div>
        <a class="navbar-brand ps-3" href="dashboard.php">Cruz roja</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
        <!-- Navbar-->
        <div class="text-right" style="width: 82%">
            <!-- <li class="nav-item dropdown"> -->
            <a style="float:right" id="navbarDropdown" href="./login.php" role="button" aria-expanded="false"><i
                    class="fas fa-sign-out-alt"></i></a>
            <!-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Ajustes</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Salir</a></li>
                    </ul> -->
            <!-- </li> -->
        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Principal</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Modulos</div>
                        <a class="nav-link collapsed" href="personal.php" data-bs-target="#collapseLayoutUser"
                            aria-expanded="false" aria-controls="collapseLayoutUser">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Personal
                        </a>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="voluntarios.php">Voluntarios</a>

                        </nav>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayoutAdmin" aria-expanded="false"
                            aria-controls="collapseLayoutAdmin">
                            <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
                            Administraci&oacute;n
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutAdmin" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="graficaIngresos.php">Ingresos</a>
                                <a class="nav-link" href="donantesPermanentes.php">Donantes permanentes</a>
                                <a class="nav-link" href="graficaGastosOp.php">Gasto operativo</a>
                                <a class="nav-link" href="donativos.php">Donativos</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayoutCapacitacion" aria-expanded="false"
                            aria-controls="collapseLayoutCapacitacion">
                            <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                            Capacitacion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutCapacitacion" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="CapacitacionContinua.php">Continua</a>
                                <a class="nav-link" href="capacitacionExterna.php">Externa</a>
                                <a class="nav-link" href="evaluaciones.php">Evaluaciones</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayoutDamas" aria-expanded="false"
                            aria-controls="collapseLayoutDamas">
                            <div class="sb-nav-link-icon"><i class="fas fa-female"></i></div>
                            Damas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutDamas" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="reporteActividades.php">Actividades</a>
                                <a class="nav-link" href="gestionDonativos.php">Gesti&oacute;n de donativos</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayoutJuve" aria-expanded="false"
                            aria-controls="collapseLayoutJuve">
                            <div class="sb-nav-link-icon"><i class="fas fa-child"></i></div>
                            Juventud
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutJuve" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="formacion.php">Formaci&oacute;n</a>
                                <a class="nav-link" href="programas.php">Programas</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayoutSocorros" aria-expanded="false"
                            aria-controls="collapseLayoutSocorros">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            Socorros
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutSocorros" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="inasistencias.php">Inasistencias</a>
                                <a class="nav-link" href="sanciones.php">Sanciones</a>
                                <a class="nav-link" href="horasVoluntarias.php">Horas voluntarias</a>
                                <a class="nav-link" href="estadoUnidades.php">Estado de unidades</a>
                                <a class="nav-link" href="combustible.php">Combustible</a>
                                <a class="nav-link" href="ServsNoNecesarios.php">Servicios no necesarios</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayoutVolunt" aria-expanded="false"
                            aria-controls="collapseLayoutVolunt">
                            <div class="sb-nav-link-icon"><i class="fas fa-hands-helping"></i></div>
                            Voluntariado
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutVolunt" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="credencializacion.php">Credencializaci&oacute;n</a>
                                <a class="nav-link" href="segurosVida.php">Seguros de vida</a>
                                <a class="nav-link" href="incentivos.php">Incentivos</a>
                                <a class="nav-link" href="Voluntarios.php">Voluntarios activos</a>


                                
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Sesi&oacute;n iniciada como:</div>
                    Administrador
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">