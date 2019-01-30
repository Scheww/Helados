<?php
/**
 * Created by PhpStorm.
 * User: TLA
 * Date: 8/4/17
 * Time: 14:04
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Wedadvisor</title>
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?>theme.css">
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?>font.css">
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?>main.css">
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?>grid.css">
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?>flexible-box.css">
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?>button.css">
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?>layout.css">
        <link rel="stylesheet" href="<?=ROOT_PUBLIC_STYLE;?><?=PAGE;?>.css">
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                var layoutHeader = document.getElementById('layout-header');
                var layoutContent = document.getElementById('layout-content');

                layoutContent.addEventListener('scroll', function () {
                    var scroll = layoutContent.scrollTop;

                    if (scroll >= 50) {
                        layoutHeader.classList.add('layout-header-floating');
                    } else {
                        layoutHeader.classList.remove('layout-header-floating');
                    }
                }, false);
            }, false);
        </script>
    </head>
    <body>
        <div id="layout">
            <header class="flexible-box flexible-row vertical-center" id="layout-header">
                <div class="flexible-box-item"></div>
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Explorar</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Registrate</a></li>
                        <li class="button"><a href="#">Login</a></li>
                    </ul>
                </nav>
            </header>
            <main id="layout-content">
                <section class="layout-section full-height flexible-box flexible-row vertical-center" id="home-search">
                    <div class="section-slider">
                        <div class="section-slide"></div>
                        <div class="section-slide"></div>
                        <div class="section-slide"></div>
                        <div class="section-slide"></div>
                    </div>
                    <div class="section-opacity"></div>
                    <div class="section-center">
                        <h1 class="typography-color-white">Wedadvisor</h1>
                        <h2 class="typography-color-white">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus.</h2>
                        <div class="search flexible-box flexible-row vertical-center">
                            <div class="search-field flexible-box flexible-row vertical-center flexible-box-item">
                                <input type="text" name="" value="" placeholder="¿Qué buscas?" class="flexible-box-item">
                            </div>
                            <div class="search-field flexible-box flexible-row vertical-center flexible-box-item">
                                <input type="text" name="" value="" placeholder="Selecciona una categoría" class="flexible-box-item">
                                <button class="button button-mini-icon">
                                    <i class="material-icons">expand_more</i>
                                </button>
                            </div>
                            <div class="search-field flexible-box flexible-row vertical-center flexible-box-item">
                                <input type="text" name="" value="" placeholder="Ingresa una ubicación" class="flexible-box-item">
                                <button class="button button-mini-icon">
                                    <i class="material-icons">my_location</i>
                                </button>
                            </div>
                            <button name="">Buscar</button>
                        </div>
                    </div>
                </section>
                <section class="layout-section" id="home-popular">
                    <div class="section-center">
                        <h3 class="section-title">Explore las categorías más populares</h3>
                        <h4 class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                        <div class="popular-grid">
                            <div class="popular-grid-row grid-row grid-mosaic-xs-1 grid-mosaic-sm-2">
                                <a href="#" class="grid-column-xs-12 grid-column-sm-8">
                                    <div class="popular-grid-column">
                                        <div class="popular-grid-column-image"></div>
                                        <div class="popular-grid-column-opacity"></div>
                                        <span class="popular-grid-column-name">Autos casamiento</span>
                                    </div>
                                </a>
                                <a href="#" class="grid-column-xs-12 grid-column-sm-4">
                                    <div class="popular-grid-column">
                                        <div class="popular-grid-column-image"></div>
                                        <div class="popular-grid-column-opacity"></div>
                                        <span class="popular-grid-column-name">Wedding planner</span>
                                    </div>
                                </a>
                            </div>
                            <div class="popular-grid-row grid-row grid-mosaic-xs-1 grid-mosaic-sm-2">
                                <a href="#" class="grid-column-xs-12 grid-column-sm-4">
                                    <div class="popular-grid-column">
                                        <div class="popular-grid-column-image"></div>
                                        <div class="popular-grid-column-opacity"></div>
                                        <span class="popular-grid-column-name">Estancias</span>
                                    </div>
                                </a>
                                <a href="#" class="grid-column-xs-12 grid-column-sm-8">
                                    <div class="popular-grid-column">
                                        <div class="popular-grid-column-image"></div>
                                        <div class="popular-grid-column-opacity"></div>
                                        <span class="popular-grid-column-name">Quintas</span>
                                    </div>
                                </a>
                            </div>
                            <div class="popular-grid-row grid-row grid-mosaic-xs-1 grid-mosaic-sm-3">
                                <a href="#" class="grid-column-xs-12 grid-column-sm-4">
                                    <div class="popular-grid-column">
                                        <div class="popular-grid-column-image"></div>
                                        <div class="popular-grid-column-opacity"></div>
                                        <span class="popular-grid-column-name">Vestidos de novia</span>
                                    </div>
                                </a>
                                <a href="#" class="grid-column-xs-12 grid-column-sm-4">
                                    <div class="popular-grid-column">
                                        <div class="popular-grid-column-image"></div>
                                        <div class="popular-grid-column-opacity"></div>
                                        <span class="popular-grid-column-name">Catering</span>
                                    </div>
                                </a>
                                <a href="#" class="grid-column-xs-12 grid-column-sm-4">
                                    <div class="popular-grid-column">
                                        <div class="popular-grid-column-image"></div>
                                        <div class="popular-grid-column-opacity"></div>
                                        <span class="popular-grid-column-name">Hoteles</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="layout-section" id="home-sponsors">
                    <div class="section-center">
                        <h3 class="section-title">Proveedores patrocinados</h3>
                        <h4 class="section-subtitle">Search and Find what you are looking for. Best spots are here for you.</h4>
                    </div>
                    <div class="section-full">
                        <div class="sponsors-grid">
                            <div class="sponsors-grid-row">
                                <?
                                for ($i = 0; $i < 12; $i++) {
                                    ?>
                                    <a href="#">
                                        <div class="sponsors-grid-column">
                                            <div class="sponsors-grid-column-image"></div>
                                            <div class="sponsors-grid-column-opacity"></div>
                                            <div class="sponsors-grid-column-content">
                                                <div class="sponsors-grid-column-content-top">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </div>
                                                <div class="sponsors-grid-column-content-middle">
                                                    <h5>LEOPARD</h5>
                                                </div>
                                                <div class="sponsors-grid-column-content-bottom">
                                                    <div>
                                                        <i class="material-icons">turned_in</i>
                                                        <span>Beauty</span>
                                                    </div>
                                                    <div>
                                                        <i class="material-icons">place</i>
                                                        <span>Shepherd’s Bush</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="layout-section" id="home-share">
                    <div class="section-center">
                        <h3 class="section-title">Comparta su experiencia</h3>
                        <p class="section-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        <div class="share-grid">
                            <div class="share-grid-row grid-row grid-mosaic-xs-2 grid-mosaic-sm-2 grid-mosaic-md-4">
                                <a href="#" class="grid-column-xs-6 grid-column-sm-6 grid-column-md-3">
                                    <div class="share-grid-column">
                                        <i class="share-grid-column-logo socicon-facebook"></i>
                                        <span class="share-grid-column-name">Facebook</span>
                                        <span class="share-grid-column-description">Mantengase en contacto</span>
                                    </div>
                                </a>
                                <a href="#" class="grid-column-xs-6 grid-column-sm-6 grid-column-md-3">
                                    <div class="share-grid-column">
                                        <i class="share-grid-column-logo socicon-twitter"></i>
                                        <span class="share-grid-column-name">Twitter</span>
                                        <span class="share-grid-column-description">Mantengase en contacto</span>
                                    </div>
                                </a>
                                <a href="#" class="grid-column-xs-6 grid-column-sm-6 grid-column-md-3">
                                    <div class="share-grid-column">
                                        <i class="share-grid-column-logo socicon-instagram"></i>
                                        <span class="share-grid-column-name">Instagram</span>
                                        <span class="share-grid-column-description">Mantengase en contacto</span>
                                    </div>
                                </a>
                                <a href="#" class="grid-column-xs-6 grid-column-sm-6 grid-column-md-3">
                                    <div class="share-grid-column">
                                        <i class="share-grid-column-logo socicon-youtube"></i>
                                        <span class="share-grid-column-name">Youtube</span>
                                        <span class="share-grid-column-description">Mantengase en contacto</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="layout-section" id="home-trends">
                    <div class="section-opacity"></div>
                    <div class="section-center">
                        <h3 class="section-title typography-color-white">Descubra las tendencias</h3>
                        <h4 class="section-subtitle typography-color-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</h4>
                        <a href="#">IR AL BLOG</a>
                    </div>
                </section>
                <section class="layout-section" id="home-categories">
                    <div class="section-center">
                        <h3 class="section-title">¡Encuentra lo que buscas!</h3>
                        <h4 class="section-subtitle">Search and Find what you are looking for. Best spots are here for you.</h4>
                        <div class="categories-grid">
                            <?php
                            for ($i = 0; $i < 36; $i++) {
                                ?>
                                <a href="#">Invitaciones bodas</a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </main>
            <footer id="layout-footer">
                <div id="layout-footer-center" class="grid-row">
                    <div id="layout-footer-center-left" class="grid-column-xs-12 grid-column-sm-6 grid-column-md-4 grid-column-lg-3">
                        <h3>Contacto</h3>
                        <img src="">
                        <ul>
                            <li>
                                <a href="">
                                    <i class="material-icons">email</i>
                                    <span>info@wedadvisor.com.ar</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="material-icons">access_time</i>
                                    <span>AM 09:00 - PM 06:00</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="layout-footer-center-right" class="grid-column-xs-12 grid-column-sm-6 grid-column-md-8 grid-column-lg-9">
                        <h3>Nuestro equipo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>