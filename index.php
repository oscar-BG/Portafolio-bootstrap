<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/dd15b4880f.js" crossorigin="anonymous"></script>
    <title>Portafolio web</title>
</head>
<body>
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <img src="img/user.png" alt="foto oscar bautista" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-7 text-center cuadro pt-5">
                    <h1 class="header-titulo">Oscar Bautista Gaytan</h1>
                </div>
            </div>
            <div class="row sub-cuadro">
                <div class="col-sm-12 align-self-center text-center">
                    <h2 class="sub-titulo">Portafolio Digital de programación</h2>
                    <i class="fas fa-laptop-code fa-2x"></i>
                </div>
            </div>
        </header>
        <section class="">
            <div class="d-flex text-white text-center font-weight-bold">
                <div class="item p-4 bg-success seccion" data-toggle="collapse" data-target="#inicio">
                    <i class="fas fa-home fa-2x d-block"></i>
                    <span class="d-none d-sm-block">Inicio</span>
                </div>
                <div class="item p-4 bg-info seccion" data-toggle="collapse" data-target="#habilidades">
                    <i class="fas fa-graduation-cap fa-2x d-block"></i>
                    <span class="d-none d-sm-block">Habilidades</span>
                </div>
                <div class="item p-4 bg-primary seccion" data-toggle="collapse" data-target="#trabajos">
                    <i class="fas fa-folder-open fa-2x d-block"></i>
                    <span class="d-none d-sm-block">Trabajos</span>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluit">
        <!-- Inicio -->
        <div id="inicio" class="collapse show">
            <div class="card bg-inicio border-success card-body">
                <h2 class="text-center">!Hola mundo dev¡</h2>
                <p class="text-monospace">Soy Oscar, estudiante de ingeniería en desarrollo de software y un aficionado de las tecnologias de
                    programación, como parte de esa afición nacio el actual proyecto, donde busco plasmar
                    mis conocimientos en la que llevo tiempo trabajando.
                </p>
                <p class="text-monospace">Como parte de mis estudios es conseguido un par de insignia, que no valen en el mundo laboral
                    pero te pone feliz saber que aprendiste mucho de ellos. Soy una persona que se considera autodidacta,
                    cuando me gusta un tema, la consulto y trato de aprender lo mejor que pueda.
                </p>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!-- Carrusel con texto -->
                        <div class="d-flex justify-content-center">
                            <div id="certificado" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://dl.dropboxusercontent.com/s/6abgmchd9ac0qfj/HTML_certificate.jpg" alt="certificado HTML" class="d-block img-fluit" style="width: 70%;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://dl.dropboxusercontent.com/s/o8if6u9grte1ows/PHP_certificate.jpg" alt="certificado php" class="d-block img-fluit" style="width: 70%;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://dl.dropboxusercontent.com/s/fbdezszr6k5mzcg/HTML5.jpg" alt="Certificado html" class="d-block img-fluit" style="width: 70%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <section>
                        <h3>Objetivos</h3>
                        <p class="text-monospace">Mi objetivo es dedicarme al desarrollo web, por lo que hay muchas tecnologias que hay que aprender
                            a lo largo de este tiempo he aprendido un par de tecnologias pero aun me falta mucho por aprender
                            y practicar, por lo que este año 2022 me he plateado agregar otras mas a mi aprendizaje.
                        </p>
                    </section>
                    <!-- Tabla -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Desarrollo web</th>
                                <th>Programacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bootstrap</td>
                                <td rowspan="3" class="middle">Python</td>
                            </tr>
                            <tr>
                                <td>JavaScript</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluit">
        <div id="habilidades" class="collapse">
            <div class="card card-body bg-habilidades">
                <h2 class="text-center">Habilidades</h2>
                <p class="text-monospace">
                    A lo largo de mis estudios en la Universidad como autodidacta he aprendido ciertas tecnologias,
                    con lo que me gustaria trabajar, aunque no profundizo mucho en el tema tengo reforzada la bases 
                    para trabajar con ellos.
                </p>
                <p class="text-monospace">Les presento las tecnologias con las que me gusta trabajar y su procentaje
                    que segun yo tengo conocimiento.
                </p>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h4>C#</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 30%;"></div>
                        </div>
                        <h4>Java SE</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 30%;"></div>
                        </div>
                        <h4>SQL</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 30%;"></div>
                        </div>
                        <h4>GIT</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h4>HTML5</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 80%;"></div>
                        </div>
                        <h4>CSS3</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 50%;"></div>
                        </div>
                        <h4>Bootstrap 4</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 30%;"></div>
                        </div>
                        <h4>PHP</h4>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trabajo -->
    <div id="trabajos" class="container-fluit collapse bg-trabajo p-5">
        <h4 class="text-center">Habilidades</h4>
        <p class="text-monospace">
            Durante mis estudios he realizado un par de practicas para mejorar mis habilidades
            y estos son algunos que me gustaria presentarles.
        </p>
        <div class="row">
            <div class="col-sm-6 col-md-12">

                <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top img-fluid img-card m-auto img-thumbnail rounded" src="https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/c-img.png?itok=D5IcuUPA" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Trabajos en C#</h5>
                        <p class="card-text">C# es un lenguaje de programación orientado a objetos, desarrollado por Microsoft.</p>
                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modalc">Ver mas ...</a>
                      </div>
                    </div>

                    <div class="card">
                      <img class="card-img-top img-fluid img-card m-auto" src="https://i0.wp.com/prog.world/wp-content/uploads/2020/02/busxz1th4tctxw-hy8drrzgjkjw.png?fit=768%2C384&ssl=1" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Trabajos en Java</h5>
                        <p class="card-text">Java es un lenguaje de programación, es una tecnologia que se ocupa tanto en la web, como escritorio o telefonos movil.</p>
                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modalc">Ver mas ...</a>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6 col-md-12 pt-5">

                <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top img-fluid img-card m-auto" src="https://www.img-academy.com/wp-content/uploads/2015/02/html-css.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Trabajos en HTML5</h5>
                        <p class="card-text"></p>
                        <p class="card-text"><small class="text-muted">HTML es un lenguaje de marcado que define la estructura de tu contenido en un sitio web, con la ayuda de css puedes lograr efectos visuales lo que ayuda a colocar los elemento HTML en una forma mas dinamica</small></p>
                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modalc">Ver mas ...</a>
                      </div>
                    </div>

                    <div class="card">
                      <img class="card-img-top img-fluid img-card m-auto" src="https://icons-for-free.com/iconfiles/png/128/vscode+icons+type+php-1324451602322534431.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Trabajos en PHP</h5>
                        <p class="card-text">PHP es un lenguaje de programación mas utilizado en la web, se usa en el lado del servidor para realizar las peticiones a tu pagina web</p>
                        <a href="#"  class="btn btn-outline-success" data-toggle="modal" data-target="#modalc">Ver mas ...</a>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
        </div>
    </div>

    <div class="container-fliut bg-footer">
        <div class="row justify-content-center">
            <div class="text-white pt-4">
                <h3>Redes sociales</h3> 
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-2">
                <a href="https://www.facebook.com/Ingenieros-en-Software-102111935247104" target="_blank"><i class="fab fa-facebook-square fa-5x "></i></a>
            </div>
            <div class="col-2">
                <a href="https://github.com/oscar-BG" target="_blank"><i class="fab fa-github fa-5x"></i></a>
            </div>
        </div>
        <div class="row justify-content-center text-white">
            <aside>
                <p class="p__autor">Autor: <strong>Oscar Bautista Gaytan<strong></p>
                <p class="p__autor">Web: hecha con el &#x2764;&#xFE0F; </p>
            </aside>
        </div>
        <div class="copyright">
            <p>© Copyright 2002 Oscar Bautista Gaytan</p>
            <p>Página con Bootstrap</p>
        </div>
    </div>
    <!-- Ventana modales -->
    
    <!-- Modal C# -->
    <div class="modal" id="modalc">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Página en construcción</div>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="img/construcion.png" alt="paginas en construccion" class="img-fluid" >
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal"> Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="jquery/jquery-3.4.1.slim.js"></script>
    <script src="jquery/popper.js"></script>
    <script src="jquery/bootstrap.bundle.js"></script>

    <script>
        $('.item').click(function(){
            $('.collapse').collapse('hide');
        });
    </script>
</body>
</html>