<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-imagen" style="background-image: url(./images/fondo);">
    <div class="container mt-3 p-3">
        <div class="row p-4">
            <div class="col-6">
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    <div class="row">
                        <div class="col-4 text-center">
                            <button type="button">
                                <img src="./images/guardar" alt="imagen de boton" width="45" height="45">
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button">
                                <img src="./images/eliminar" alt="imagen de boton" width="45" height="45">
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button">
                                <img src="./images/editar" alt="imagen de boton" width="45" height="45">
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                                <div class="text-center">
                                    <button type="button">
                                        <img src="./images/infopersonal" alt="imagen de boton" width="60" height="60">
                                    </button>
                                </div>
                                <br>
                                <div class="text-center">
                                    FORMULARIO DE INFORMACION PERSONAL
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <form method="$_GET">
                            <!-- Información personal -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="catalogo" class="form-label">Catalogo</label>
                                    <input type="number" class="form-control" name="catalogo" placeholder="Ingresa tu catalogo">
                                </div>
                                <div class="col-md-4">
                                    <label for="nombre1" class="form-label">Primer Nombre</label>
                                    <input type="text" class="form-control" name="nombre1" placeholder="Ingresa tu 1er. nombre">
                                </div>
                                <div class="col-md-4">
                                    <label for="nombre2" class="form-label">Segundo Nombre</label>
                                    <input type="text" class="form-control" name="nombre2" placeholder="Ingresa tu 2do. nombre">
                                </div>
                            </div>
                            <!-- Información de contacto -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="apellido1" class="form-label">1er. Apellido</label>
                                    <input type="text" class="form-control" name="apellido1" placeholder="Ingresa tu 1er. apellido">
                                </div>
                                <div class="col-md-4">
                                    <label for="apellido2" class="form-label">2do. Apellido</label>
                                    <input type="text" class="form-control" name="apellido2" placeholder="Ingresa tu 2do. apellido">
                                </div>
                                <div class="col-md-4">
                                    <label for="correo" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control" name="correo" placeholder="Ingresa tu correo electrónico">
                                </div>
                            </div>
                            <!-- Seleccion de edad, sexo, grado y arma-->
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="edad" class="form-label">Edad</label>
                                    <input type="number" class="form-control" name="edad" placeholder="Ingresa tu edad">
                                </div>
                                </select>
                                <div class="col-md-3">
                                    <label for="sexo" class="form-label">Sexo</label>
                                    <select class="form-select" name="sexo">
                                        <option value="" selected>Selecciona tu sexo</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="grado" class="form-label">Grado</label>
                                    <select class="form-select" name="grado">
                                        <option value="" selected>Selecciona tu grado</option>
                                        <option value="Subteniente">Subteniente</option>
                                        <option value="Teniente">Teniente</option>
                                        <option value="Capitan 2do">Capitan 2do.</option>
                                        <option value="Capitan 1ro">Capitan 1ro.</option>
                                        <option value="Mayor">Mayor</option>
                                        <option value="Tte. Cnel.">Tte. Cnel.</option>
                                        <option value="Coronel">Coronel</option>
                                        <option value="General">General</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="arma" class="form-label">Arma</label>
                                    <select class="form-select" name="arma">
                                        <option value="" selected>Selecciona tu Arma o Servicio</option>
                                        <option value="Infanteria">Infanteria</option>
                                        <option value="Artilleria">Artilleria</option>
                                        <option value="Caballeria">Caballeria</option>
                                        <option value="Aviacion">Aviacion</option>
                                        <option value="Naval">Naval</option>
                                        <option value="Policia Militar">Policia Militar</option>
                                        <option value="Transmisiones">Transmisiones</option>
                                        <option value="Material de Guerra">Material de Guerra</option>
                                        <option value="Intendencia">Intendencia</option>
                                        <option value="Sanidad Militar">Sanidad Militar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="dependencia" class="form-label">Dependencia</label>
                                    <select class="form-select" name="dependencia">
                                        <option selected>Elige</option>
                                        <option value="1RA. B.I. GLGL">1RA. B.I. GLGL</option>
                                        <option value="2DA. B.I. ZACAPA">2DA. B.I. ZACAPA</option>\
                                        <option value="3RA. B.I. JUTIAPA">3RA. B.I. JUTIAPA</option>
                                        <option value="4TA. B.I. MAZATENANGO">4TA. B.I. MAZATENANGO</option>
                                        <option value="5TA. B.I. HUEHUETENANGO">5TA. B.I. HUEHUETENANGO</option>
                                        <option value="6TA. B.I. PLAYA GRANDE">6TA. B.I. PLAYA GRANDE</option>
                                        <option value="PRIMERA BRIGADA DE POLICIA MILITAR">PRIMERA BRIGADA DE POLICIA MILITAR</option>
                                        <option value="SEGUNDA BRIGADA DE POLICIA MILITAR">SEGUNDA BRIGADA DE POLICIA MILITAR</option>
                                        <option value="ESCUELA DE POLICIA MILITAR">ESCUELA DE POLICIA MILITAR</option>
                                        <option value="COMANDO DE INFORMATICA Y TECNOLOGIA">COMANDO DE INFORMATICA Y TECNOLOGIA</option>
                                        <option value="GUARDIA PRESIDENCIAL">GUARDIA PRESIDENCIAL</option>
                                        <option value="I.A.V.H. JALAPA">I.A.V.H. JALAPA</option>
                                    </select>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="row">
                                        <div class="col">CURSOS</div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="curso" value="Kaibil">
                                                <label class="form-check-label" for="curso">Kaibil</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="curso" value="Franco Tirador">
                                                <label class="form-check-label" for="curso">Franco Tirador</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="curso" value="Paracaidista">
                                                <label class="form-check-label" for="curso">Paracaidista</label>
                                            </div>
                                        </div>
                                        <div class="row-12">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Inicia carusel -->
            <div class="col-6">
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                                <div class="text-center">
                                    <button type="button">
                                        <img src="./images/ministerio" alt="imagen de boton" width="60" height="60">
                                    </button>
                                </div>
                                <br>
                                <div class="text-center">
                                    DEPENDENCIAS MILITARES
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="p-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                        <div class="row">
                            <div class="col-6">
                                <div id="carouselExampleCaptions" class="carousel slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active contenedor-imagen">
                                            <img src="./images/GUARDIA PRESIDENCIAL" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">

                                            </div>
                                        </div>
                                        <div class="carousel-item contenedor-imagen">
                                            <img src="./images/FUERZAS ESPECIALES" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">

                                            </div>
                                        </div>
                                        <div class="carousel-item contenedor-imagen">
                                            <img src="./images/3RA BRIGADA DE INFANTERIA.jpeg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">

                                            </div>
                                        </div>

                                        <div class="carousel-item contenedor-imagen">
                                            <img src="./images/2da.BPM" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">

                                            </div>
                                        </div>

                                        <div class="carousel-item contenedor-imagen">
                                            <img src="./images/1ra.BPM" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <!-- acordio -->
                            <div class="p-5 col-6 mt-5">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                GUARDIA PRESIDENCIAL
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body text-justify">
                                                MISIÓN:
                                                Proporcionar seguridad al Señor Presidente Constitucional de la República y
                                                Comandante General del Ejército, Señor Vicepresidente y sus familias, con el
                                                fin de preservar su integridad física y mantener la institucionalidad del
                                                país.
                                                <br>
                                                VISIÓN:
                                                Ser un comando militar especial, referente de eficiencia y eficacia,
                                                integrado por Oficiales, Especialistas y Tropa plenamente identificados con
                                                los principios de valor, lealtad y sacrificio; con movilidad adecuada y
                                                tecnología moderna; equipado, motivado y entrenado para garantizar la
                                                seguridad del Señor Presidente de la República, Señor Vicepresidente y sus
                                                familias.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                FUERZAS ESPECIALES KAIBIL
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body text-justify">
                                                MISIÓN:
                                                Efectuar operaciones especiales de corta duración, orientadas a la
                                                consecución de objetivos tácticos de valor estratégico; participar en
                                                operaciones de paz, en el marco de la ONU; a orden desarrollar operaciones
                                                de apoyo a las fuerzas de seguridad civil en el ámbito de la seguridad
                                                pública, en todo el territorio nacional; asimismo, adiestrar a unidades
                                                militares especiales y contribuir en el entrenamiento de unidades regulares.
                                                <br>
                                                VISIÓN:
                                                Mantener el estado de apresto ideal de fuerzas especiales del Ejército de
                                                Guatemala, preservando un alto nivel de disciplina y espíritu militar, en
                                                aras de salvaguardar el honor de Guatemala, la soberanía, la integridad del
                                                territorio, la paz y seguridad interior y exterior.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                TERCERA BRIGADA DE INFANTERIA
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body text-justify">La Tercera Brigada de Infantería
                                                "GMAS": conducirá
                                                operaciones militares,
                                                enmarcadas en las áreas de misión
                                                Fronteras nacionales y defensa contra amenazas transnacionales.
                                                Protección de infraestructura crítica y contribución al desarrollo nacional.
                                                Cooperación dentro del ámbito de gestión de riesgos y defensa civil,
                                                del sistema nacional de atención a desastres naturales.
                                                Acciones proactivas en apoyo a la política exterior del Estado de Guatemala
                                                a partir de la fecha y hasta nueva orden, en el área de responsabilidad
                                                operacional para coadyuvar a mantener la soberanía, la independencia, el
                                                honor de Guatemala, la integridad del territorio, la paz y la seguridad
                                                interior y exterior; con el propósito de crear condiciones que coadyuven a
                                                la construcción de condiciones de gobernabilidad que permitan el desarrollo
                                                integral del ciudadano, así como alcanzar los objetivos nacionales
                                                estratégicos permanentes y actuales.

                                                Asimismo, estará en condiciones de apoyar a otras brigadas o fuerzas de
                                                seguridad a orden del EMDN.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                SEGUNDA BRIGADA DE POLICIA MILITAR
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body text-justify">MISIÓN:
                                                La Segunda Brigada de Policía Militar, a orden del EMDN, mantiene la
                                                disciplina ley y orden en las unidades del Ejército de Guatemala. Y conduce
                                                operaciones bélicas y de cooperación integral de manera temporal en todo el
                                                territorio nacional, en apoyo a las fuerzas de seguridad civil, para
                                                restablecer y mantener el orden público, con el propósito de generar un
                                                ambiente adecuado para el desarrollo y seguridad de la población.
                                                <br>
                                                VISIÓN:
                                                Ser una unidad moderna, disuasiva, altamente móvil con capacidad de
                                                despliegue inmediato de unidades de magnitud pelotón, a lo largo y ancho del
                                                territorio nacional al servicio de la sociedad guatemalteca, en todas
                                                aquellas tareas que propicien el bien común, así como en apoyo a la paz
                                                mundial por medio de la participación en operaciones de mantenimiento de paz
                                                en el contexto de la Organización de Naciones Unidas.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                PRIMERA BRIGADA DE POLICIA MILITAR
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">MISIÓN:
                                                La Primera Brigada de Policía Militar “Guardia de Honor” conducirá
                                                operaciones de apoyo de combate y de seguridad ciudadana en apoyo a las
                                                fuerzas de seguridad civil, en su área de responsabilidad operacional y a
                                                orden del Estado Mayor de la Defensa Nacional, a partir del día “D” y a la
                                                hora “H”; para mantener la disciplina, ley y orden, velar por el orden
                                                público, la paz y seguridad de los ciudadanos.
                                                <br>
                                                VISIÓN:
                                                Ser la Brigada estratégica mejor entrenada y capacitada para cumplir con la
                                                misión asignada al servicio de los guatemaltecos.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabla -->
        <div class="row">
            <div class="col-6">
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    <div class="row">
                        <div class="col">
                            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                                <div class="text-center">
                                    TABLA DE INFORMACION
                                </div>
                                <div class="p-2 text-center">
                                    <button type="button">
                                        <img src="./images/tablainfo" alt="imagen de boton" width="60" height="60">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <?php
                        $catalogo = isset($_GET["catalogo"]) ? $_GET["catalogo"] : "";
                        $nombre1 = isset($_GET["nombre1"]) ? $_GET["nombre1"] : "";
                        $nombre2 = isset($_GET["nombre2"]) ? $_GET["nombre2"] : "";
                        $apellido1 = isset($_GET["apellido1"]) ? $_GET["apellido1"] : "";
                        $apellido2 = isset($_GET["apellido2"]) ? $_GET["apellido2"] : "";
                        $correo = isset($_GET["correo"]) ? $_GET["correo"] : "";
                        $edad = isset($_GET["edad"]) ? $_GET["edad"] : "";
                        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "";
                        $grado = isset($_GET["grado"]) ? $_GET["grado"] : "";
                        $dependencia = isset($_GET["dependencia"]) ? $_GET["dependencia"] : "";
                        $curso = isset($_GET["curso"]) ? $_GET["curso"] : "";
                        ?>
                        <div class="table-responsive text-center">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">CATALOGO</th>
                                            <th scope="col">PRIMER NOMBRE</th>
                                            <th scope="col">SEGUNDO NOMBRE</th>
                                            <th scope="col">PRIMER APELLIDO</th>
                                            <th scope="col">SEGUNDO APELLIDO</th>
                                            <th scope="col">CORREO</th>
                                            <th scope="col">EDAD</th>
                                            <th scope="col">SEXO</th>
                                            <th scope="col">GRADO</th>
                                            <th scope="col">Dependencia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "$catalogo";  ?> </td>
                                            <td><?php echo "$nombre1";  ?> </td>
                                            <td><?php echo "$nombre2";  ?> </td>
                                            <td><?php echo "$apellido1";  ?> </td>
                                            <td><?php echo "$apellido2";  ?> </td>
                                            <td><?php echo "$correo";  ?> </td>
                                            <td><?php echo "$edad";  ?> </td>
                                            <td><?php echo "$sexo";  ?> </td>
                                            <td><?php echo "$grado";  ?> </td>
                                            <td><?php echo "$dependencia";  ?> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- galeria -->
            <div class="col-6">
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                                <div class="text-center">
                                    GALERIA
                                </div>
                                <br>
                                <div class="text-center">
                                    <button type="button">
                                        <img src="./images/galeria" alt="imagen de boton" width="60" height="60">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="p-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                        <div class="row">

                            <div class="row mt-3">
                                <div class="col">
                                    <img src="./images/1ra.BPM" class="img-fluid w-70 h-70 border border-5 border-white rounded-5" alt="...">
                                </div>
                                <div class="col">
                                    <img src="./images/2da.BPM" class="img-fluid w-70 h-70 border border-5 border-white rounded-5" alt="...">
                                </div>
                                <div class="col">
                                    <img src="./images/3RA BRIGADA DE INFANTERIA.jpeg" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <img src="./images/FUERZAS ESPECIALES" class="img-fluid w-100 h-100 border border-5 border-white rounded-5" alt="...">
                                </div>
                                <div class="col">
                                    <img src="./images/GUARDIA PRESIDENCIAL" class="img-fluid w-100 h-100 border border-5 border-white rounded-5" alt="...">
                                </div>
                                <div class="col">
                                    <img src="./images/1ra.BPM" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col">
                                    <img src="./images/2da.BPM" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                                </div>
                                <div class="col">
                                    <img src="./images/3RA BRIGADA DE INFANTERIA.jpeg" class="img-fluid border border-5 border-white rounded-5" alt="...">
                                </div>
                                <div class="col">
                                    <img src="./images/FUERZAS ESPECIALES" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>