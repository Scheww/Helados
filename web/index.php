<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 5/8/16
 * Time: 10:03 AM
 */

define('ROOT_CORE', "http://".$_SERVER["SERVER_NAME"]."/");
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dytar</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Nuestra visión es crear servicios y/o productos a partir de la creatividad, innovación y uso de las más avanzadas tecnologías.">
        <meta name="keywords" content="dytar, servicio, producto, cratividad, innovacion, tecnologia, digital, marketing, community, desarrollo, eventsip, wedadvisor, arpilar, wyndham">
        <meta name="language" content="es">
        <meta name="robots" content="index, follow">
        <meta name="og:title" content="Dytar">
        <meta name="og:site_name" content="Dytar">
        <meta name="og:url" content="<?=ROOT_CORE;?>">
        <meta name="og:description" content="Nuestra visión es crear servicios y/o productos a partir de la creatividad, innovación y uso de las más avanzadas tecnologías.">
        <meta name="og:type" content="website">
        <meta name="og:locale" content="es_AR">
        <meta name="og:image" content="<?=ROOT_CORE;?>images/dytar-opengraph.png">
        <meta name="og:image:type" content="image/png">
        <meta name="og:image:width" content="1200">
        <meta name="og:image:height" content="630">
        <meta name="theme-color" content="#000000">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" href="styles/font.min.css">
        <link rel="stylesheet" href="styles/socicon.min.css">
        <link rel="stylesheet" href="styles/responsive.min.css">
        <link rel="stylesheet" href="styles/main.min.css">
        <link rel="stylesheet" href="styles/header.min.css">
        <link rel="stylesheet" href="styles/nav.min.css">
        <link rel="stylesheet" href="styles/section.min.css">
        <link rel="stylesheet" href="styles/form.min.css">
        <link rel="stylesheet" href="styles/footer.min.css">
        <script type="text/javascript" src="scripts/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
        <script type="text/javascript" src="scripts/scrollme.min.js"></script>
        <script type="text/javascript" src="scripts/spin.min.js"></script>
        <script type="text/javascript" src="scripts/function.min.js"></script>
        <script type="text/javascript" src="scripts/start.min.js"></script>
    </head>
    <body>
        <header id="header">
            <div class="header-background"></div>
            <h1>Dytar</h1>
            <div class="header-logo">
                <?php
                include "images/dytar-full-white.svg";
                ?>
            </div>
            <button class="header-menu">
                <i class="material-icons">menu</i>
            </button>
            <nav id="nav">
                <button class="nav-close">
                    <i class="material-icons">close</i>
                </button>
                <ul>
                    <li><a href="#home"><span>Inicio</span></a></li>
                    <li><a href="#about"><span>Nosotros</span></a></li>
                    <!--
                    <li><a href="#services"><span>Servicios</span></a></li>
                    -->
                    <li><a href="#projects"><span>Proyectos</span></a></li>
                    <li><a href="#contact"><span>Contacto</span></a></li>
                    <li class="social facebook"><a href="https://www.facebook.com/dytar.com.ar/" target="_blank"><i class="socicon-facebook"></i><span>Facebook</span></a></li>
                    <li class="social googleplus"><a href="https://plus.google.com/+DytarAr" target="_blank"><i class="socicon-googleplus"></i><span>Google +</span></a></li>
                    <li class="social linkedin"><a href="https://www.linkedin.com/company/dytar-latam" target="_blank"><i class="socicon-linkedin"></i><span>Linkedin</span></a></li>
                    <!--
                    <li class="social instagram"><a href="" target="_blank"><i class="socicon-instagram"></i><span>Instagram</span></a></li>
                    -->
                </ul>
            </nav>
        </header>
        <div class="col-xs-12" id="sections">
            <section class="col-xs-12 section" id="home">
                <div class="opacity"></div>
                <div class="right">
                    <div class="col-xs-12 right-logo">
                        <?php
                        include "images/dytar-icon.svg";
                        ?>
                    </div>
                    <h2 class="col-xs-12 font-color-white">Inteligencia renovable</h2>
                </div>
            </section>
            <section class="col-xs-12 section" id="about">
                <div class="col-xs-12 bottom">
                    <h3 class="col-xs-12 scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">Nuestro equipo</h3>
                    <p class="col-xs-12 scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">Nuestra visión es crear servicios y/o productos a partir de la creatividad, innovación y uso de las más avanzadas tecnologías.<br>Somos un equipo de profesionales que trabaja con el objetivo permanente de estudiar, comprender y potencializar a nuestros clientes.</p>
                    <span class="col-xs-12 scrollme animateme" data-when="enter" data-from="0.25" data-to="0" data-translatex="-400" data-opacity="0">¡NOS APASIONA LO QUE HACEMOS!</span>
                </div>
            </section>
            <?php
            if (false) {
                ?>
                <!--
                <section class="col-xs-12 section" id="services">
                    <h3 class="col-xs-12 font-color-white scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">Servicios</h3>
                    <h4 class="col-xs-12 font-color-white scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">Somos el partner ideal para tus negocios digitales</h4>
                    <div class="flex"></div>
                    <div class="col-xs-12 items">
                        <div class="item scrollme animateme" data-id="1" data-when="enter" data-from="0.4" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">lightbulb_outline</i>
                                    <span class="col-xs-12">Branding</span>
                                </div>
                            </div>
                        </div>
                        <div class="item scrollme animateme" data-id="2" data-when="enter" data-from="0.6" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">trending_up</i>
                                    <span class="col-xs-12">Digital marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item scrollme animateme" data-id="3" data-when="enter" data-from="0.8" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">share</i>
                                    <span class="col-xs-12">Community management</span>
                                </div>
                            </div>
                        </div>
                        <div class="item scrollme animateme" data-id="4" data-when="enter" data-from="1" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">phonelink</i>
                                    <span class="col-xs-12">Desarrollos</span>
                                </div>
                            </div>
                        </div>
                        <div class="item scrollme animateme" data-id="5" data-when="enter" data-from="0.4" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">people</i>
                                    <span class="col-xs-12">Eventos</span>
                                </div>
                            </div>
                        </div>
                        <div class="item scrollme animateme" data-id="6" data-when="enter" data-from="0.6" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">camera</i>
                                    <span class="col-xs-12">Fotografía</span>
                                </div>
                            </div>
                        </div>
                        <div class="item scrollme animateme" data-id="7" data-when="enter" data-from="0.8" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">mail_outline</i>
                                    <span class="col-xs-12">Papelería</span>
                                </div>
                            </div>
                        </div>
                        <div class="item scrollme animateme" data-id="8" data-when="enter" data-from="1" data-to="0.05" data-scale="0" data-opacity="0">
                            <div class="item-background"></div>
                            <div class="item-inner">
                                <div class="col-xs-12 item-center">
                                    <i class="col-xs-12 material-icons">card_giftcard</i>
                                    <span class="col-xs-12">Merchandising</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                -->
                <?php
            }
            ?>
            <section class="col-xs-12 section" id="projects">
                <h3 class="col-xs-12 font-color-white scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">Proyectos y clientes</h3>
                <h4 class="col-xs-12 font-color-white scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">Traspasamos los límites de la imaginación</h4>
                <div class="bottom">
                    <div class="bottom-inner">
                        <div class="items">
                            <a href="http://eventsip.com/" target="_blank" class="item eventsip scrollme animateme" data-when="enter" data-from="0.7" data-to="0" data-translatex="-400" data-opacity="0">
                                <?php
                                include "images/projects-item-eventsip.svg";
                                ?>
                            </a>
                            <a href="http://www.wedadvisor.com.ar/" target="_blank" class="item wedadvisor scrollme animateme" data-when="enter" data-from="0.7" data-to="0" data-translatey="200" data-opacity="0">
                                <?php
                                include "images/projects-item-wedadvisor.svg";
                                ?>
                            </a>
                            <div class="item arpilar scrollme animateme" data-when="enter" data-from="0.7" data-to="0" data-translatex="400" data-opacity="0">
                                <?php
                                include "images/projects-item-arpilar.svg";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col-xs-12 section" id="contact">
                <div class="section-opacity"></div>
                <h3 class="col-xs-12 font-color-white scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">Contacto</h3>
                <h4 class="col-xs-12 font-color-white scrollme animateme" data-when="enter" data-from="0.75" data-to="0" data-translatex="-400" data-opacity="0">¡Nosotros también te queremos conocer!</h4>
                <div class="col-xs-12 middle">
                    <div id="map"></div>
                    <div id="form" class="scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-rotatey="90" data-rotatez="90">
                        <form method="post" class="col-xs-12">
                            <label class="col-xs-12">Nombre y apellido *</label>
                            <input type="text" name="name" value="" class="col-xs-12">
                            <label class="col-xs-12">Email *</label>
                            <input type="email" name="email" value="" class="col-xs-12">
                            <label class="col-xs-12">Teléfono</label>
                            <input type="text" name="phone" value="" class="col-xs-12">
                            <label class="col-xs-12">País</label>
                            <select name="country" class="col-xs-12">
                                <option value="">Seleccione su país de residencia</option>
                                <option value="Afganistán">Afganistán</option>
                                <option value="Albania">Albania</option>
                                <option value="Alemania">Alemania</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                <option value="Arabia Saudita">Arabia Saudita</option>
                                <option value="Argelia">Argelia</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaiyán">Azerbaiyán</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Baréin">Baréin</option>
                                <option value="Bangladés">Bangladés</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Bélgica">Bélgica</option>
                                <option value="Belice">Belice</option>
                                <option value="Benín">Benín</option>
                                <option value="Bielorrusia">Bielorrusia</option>
                                <option value="Birmania">Birmania</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                <option value="Botsuana">Botsuana</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Brunéi">Brunéi</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Bután">Bután</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Camboya">Camboya</option>
                                <option value="Camerún">Camerún</option>
                                <option value="Canadá">Canadá</option>
                                <option value="Catar">Catar</option>
                                <option value="Centroafricana, República">Centroafricana, República</option>
                                <option value="Chad">Chad</option>
                                <option value="Checa, República">Checa, República</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Chipre">Chipre</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoras">Comoras</option>
                                <option value="Congo, República del">Congo, República del</option>
                                <option value="Congo, República Democrática del">Congo, República Democrática del</option>
                                <option value="Corea del Norte">Corea del Norte</option>
                                <option value="Corea del Sur">Corea del Sur</option>
                                <option value="Costa de Marfil">Costa de Marfil</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croacia">Croacia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Dinamarca">Dinamarca</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominicana, República">Dominicana, República</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egipto">Egipto</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Eslovaquia">Eslovaquia</option>
                                <option value="Eslovenia">Eslovenia</option>
                                <option value="España">España</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Etiopía">Etiopía</option>
                                <option value="Filipinas">Filipinas</option>
                                <option value="Finlandia">Finlandia</option>
                                <option value="Fiyi">Fiyi</option>
                                <option value="Francia">Francia</option>
                                <option value="Gabón">Gabón</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Granada">Granada</option>
                                <option value="Grecia">Grecia</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bisáu">Guinea-Bisáu</option>
                                <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haití">Haití</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungría">Hungría</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Irak">Irak</option>
                                <option value="Irán">Irán</option>
                                <option value="Irlanda">Irlanda</option>
                                <option value="Islandia">Islandia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italia">Italia</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japón">Japón</option>
                                <option value="Jordania">Jordania</option>
                                <option value="Kazajistán">Kazajistán</option>
                                <option value="Kenia">Kenia</option>
                                <option value="Kirguistán">Kirguistán</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Laos">Laos</option>
                                <option value="Lesoto">Lesoto</option>
                                <option value="Letonia">Letonia</option>
                                <option value="Líbano">Líbano</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libia">Libia</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lituania">Lituania</option>
                                <option value="Luxemburgo">Luxemburgo</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malasia">Malasia</option>
                                <option value="Malaui">Malaui</option>
                                <option value="Maldivas">Maldivas</option>
                                <option value="Malí">Malí</option>
                                <option value="Malta">Malta</option>
                                <option value="Marruecos">Marruecos</option>
                                <option value="Marshall, Islas">Marshall, Islas</option>
                                <option value="Mauricio">Mauricio</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="México">México</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldavia">Moldavia</option>
                                <option value="Mónaco">Mónaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Níger">Níger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Noruega">Noruega</option>
                                <option value="Nueva Zelanda">Nueva Zelanda</option>
                                <option value="Omán">Omán</option>
                                <option value="Países Bajos">Países Bajos</option>
                                <option value="Pakistán">Pakistán</option>
                                <option value="Palaos">Palaos</option>
                                <option value="Palestina">Palestina</option>
                                <option value="Panamá">Panamá</option>
                                <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Perú">Perú</option>
                                <option value="Polonia">Polonia</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Reino Unido">Reino Unido</option>
                                <option value="Ruanda">Ruanda</option>
                                <option value="Rumania">Rumania</option>
                                <option value="Rusia">Rusia</option>
                                <option value="Salomón, Islas">Salomón, Islas</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                                <option value="San Marino">San Marino</option>
                                <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                <option value="Santa Lucía">Santa Lucía</option>
                                <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leona">Sierra Leona</option>
                                <option value="Singapur">Singapur</option>
                                <option value="Siria">Siria</option>
                                <option value="Somalia">Somalia</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Suazilandia">Suazilandia</option>
                                <option value="Sudáfrica">Sudáfrica</option>
                                <option value="Sudán">Sudán</option>
                                <option value="Sudán del Sur">Sudán del Sur</option>
                                <option value="Suecia">Suecia</option>
                                <option value="Suiza">Suiza</option>
                                <option value="Surinam">Surinam</option>
                                <option value="Tailandia">Tailandia</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Tayikistán">Tayikistán</option>
                                <option value="Timor Oriental">Timor Oriental</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                <option value="Túnez">Túnez</option>
                                <option value="Turkmenistán">Turkmenistán</option>
                                <option value="Turquía">Turquía</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Ucrania">Ucrania</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistán">Uzbekistán</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vaticano, Ciudad del">Vaticano, Ciudad del</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yibuti">Yibuti</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabue">Zimbabue</option>
                            </select>
                            <label class="col-xs-12">Asunto *</label>
                            <input type="text" name="subject" value="" class="col-xs-12">
                            <label class="col-xs-12">Mensaje *</label>
                            <input type="text" name="message" value="" class="col-xs-12">
                            <button class="colored">
                                <i class="material-icons">send</i>
                            </button>
                        </form>
                        <div id="success">
                            <i class="material-icons">check_circle</i>
                            <p class="col-xs-12">La consulta se envió exitosamente.<br>¡Pronto nos comunicaremos contigo!</p>
                        </div>
                        <div id="error">
                            <i class="material-icons">cancel</i>
                            <p class="col-xs-12">Ops! Surgió un problema al enviar la consulta.<br>¡Itente mas tarde!</p>
                        </div>
                    </div>
                </div>
                <?php
                if (false) {
                    ?>
                    <!--
                    <script>
                        function initMap() {
                            var element = document.getElementById('map');
                            var map = new google.maps.Map(element, {
                                center: {
                                    lat: -34.438348,
                                    lng: -58.792084
                                },
                                zoom: 14,
                                draggable: false,
                                scrollwheel: false,
                                navigationControl: false,
                                mapTypeControl: false,
                                scaleControl: false,
                                zoomControl: false,
                                streetViewControl: false,
                                disableDoubleClickZoom: true
                            });
                        }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHPqnuga2nFZvAyQnk4znKmbrrjg1_b3s&callback=initMap"></script>
                    -->
                    <?php
                }
                ?>
                <footer class="row" id="footer">
                    <div class="col-xs-6 footer-left">
                        <div class="footer-item scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="-400" data-opacity="0">
                            <div class="footer-logo">
                                <?php
                                include "images/dytar-full-white.svg";
                                ?>
                            </div>
                        </div>
                        <div class="footer-item scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="-400" data-opacity="0">
                        </div>
                        <!--
                        
                        <div class="footer-item scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="-400" data-opacity="0">
                            <a href="">
                                <i class="material-icons">phone</i>
                                <span>0800-111-6464</span>
                            </a>
                        </div>
                        -->
                        <div class="footer-item scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="-400" data-opacity="0">
                            <a href="">
                                <i class="material-icons">email</i>
                                <span>info@dytar.com.ar</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 footer-right">
                        <div class="footer-item facebook scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="400" data-opacity="0">
                            <a href="https://www.facebook.com/dytar.com.ar/" target="_blank">
                                <i class="socicon-facebook"></i>
                                <span>Facebook</span>
                            </a>
                        </div>
                        <div class="footer-item googleplus scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="400" data-opacity="0">
                            <a href="https://plus.google.com/+DytarAr" target="_blank">
                                <i class="socicon-googleplus"></i>
                                <span>Google +</span>
                            </a>
                        </div>
                        <div class="footer-item linkedin scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="400" data-opacity="0">
                            <a href="https://www.linkedin.com/company/dytar-latam" target="_blank">
                                <i class="socicon-linkedin"></i>
                                <span>Linkedin</span>
                            </a>
                        </div>
                        <!--
                        <div class="footer-item instagram scrollme animateme" data-when="enter" data-from="0.8" data-to="0" data-translatex="400" data-opacity="0">
                            <a href="" target="_blank">
                                <i class="socicon-instagram"></i>
                                <span>Instagram</span>
                            </a>
                        </div>
                        -->
                    </div>
                </footer>
            </section>
        </div>
    </body>
</html>