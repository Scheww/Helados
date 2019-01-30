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
                var layout = document.getElementById('layout');
                var front = document.getElementById('publication-front');
                var nav = document.getElementById('publication-nav');

                layout.addEventListener('scroll', function () {
                    var scroll = layout.scrollTop;

                    if (scroll >= front.offsetHeight) {
                        nav.classList.add('nav-floating');
                    } else {
                        nav.classList.remove('nav-floating');
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
                <section class="layout-section" id="publication-front">
                    <div class="section-image"></div>
                    <div class="section-opacity"></div>
                    <div class="section-center">
                        <div class="front-main flexible-box-md flexible-row-md vertical-start-md">
                            <div class="front-data flexible-box-item-md">
                                <div class="front-top">
                                    <span>Computer / Camberwell</span>
                                </div>
                                <div class="front-bottom">
                                    <h1>Javo cafe</h1>
                                </div>
                            </div>
                            <div class="front-actions">
                                <div class="front-top">
                                    <label class="front-favorite">
                                        <input type="checkbox" name="" value="">
                                        <span class="front-favorite-label" data-unchecked="Agregar a favoritos" data-checked="Quitar de favoritos"></span>
                                        <span class="front-favorite-icon material-icons"></span>
                                    </label>
                                    <a href="#" class="front-rating">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                    </a>
                                </div>
                                <div class="front-bottom">
                                    <button>
                                        <i class="material-icons">place</i>
                                    </button>
                                    <button>
                                        <i class="material-icons">streetview</i>
                                    </button>
                                    <button>
                                        <i class="material-icons">3d_rotation</i>
                                    </button>
                                    <button>
                                        <i class="material-icons">videocam</i>
                                    </button>
                                    <button>
                                        <i class="material-icons">directions_car</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="layout-section" id="publication-nav">
                    <div class="section-center flexible-box-md flexible-row-md vertical-start-md">
                        <nav class="nav-list flexible-box-item-md">
                            <ul>
                                <li class="active">
                                    <a href="#">
                                        <i class="material-icons">home</i>
                                        <span>Portada</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="material-icons">storage</i>
                                        <span>Detalles</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="material-icons">format_align_left</i>
                                        <span>Descripción</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="material-icons">done_all</i>
                                        <span>Comodidades</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="material-icons">chat_bubble</i>
                                        <span>Recomendaciones</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <button name="" class="nav-budget">Pedir presupuesto</button>
                    </div>
                </section>
                <section class="layout-section" id="publication-content">
                    <div class="section-center flexible-box-md flexible-row-md vertical-start-md">
                        <div class="content-items flexible-box-item-md">
                            <div class="content-section" id="publication-content-gallery">
                                <div class="content-section-header">
                                    <h3>Galería</h3>
                                </div>
                                <div class="content-section-content">
                                    <div class="row grid-row">
                                        <a href="#" class="column grid-column-xs-4">
                                            <div class="item">
                                                <div class="item-image"></div>
                                                <div class="item-opacity"></div>
                                            </div>
                                        </a>
                                        <a href="#" class="column grid-column-xs-4">
                                            <div class="item">
                                                <div class="item-image"></div>
                                                <div class="item-opacity"></div>
                                            </div>
                                        </a>
                                        <a href="#" class="column grid-column-xs-4">
                                            <div class="item">
                                                <div class="item-image"></div>
                                                <div class="item-opacity"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row grid-row">
                                        <a href="#" class="column grid-column-xs-6">
                                            <div class="item">
                                                <div class="item-image"></div>
                                                <div class="item-opacity"></div>
                                            </div>
                                        </a>
                                        <a href="#" class="column grid-column-xs-6">
                                            <div class="item">
                                                <div class="item-image"></div>
                                                <div class="item-opacity"></div>
                                                <span>Ver más</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-section" id="publication-content-detail">
                                <div class="content-section-header">
                                    <h3>Detalles</h3>
                                </div>
                                <div class="content-section-content">
                                    <div class="detail-row grid-row">
                                        <div class="detail-col grid-row grid-column-xs-12 grid-column-lg-6">
                                            <span class="grid-column-xs-4">Website</span>
                                            <a href="#" class="grid-column-xs-8">javothemes.com</a>
                                        </div>
                                        <div class="detail-col grid-row grid-column-xs-12 grid-column-lg-6">
                                            <span class="grid-column-xs-4">Email</span>
                                            <a href="#" class="grid-column-xs-8">javothemes@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="detail-row grid-row">
                                        <div class="detail-col grid-row grid-column-xs-12 grid-column-lg-6">
                                            <span class="grid-column-xs-4">Address</span>
                                            <a href="#" class="grid-column-xs-8">javothemes@gmail.com</a>
                                        </div>
                                        <div class="detail-col grid-row grid-column-xs-12 grid-column-lg-6">
                                            <span class="grid-column-xs-4">Phone</span>
                                            <a href="#" class="grid-column-xs-8">207-2363-4657</a>
                                        </div>
                                    </div>
                                    <div class="detail-row grid-row">
                                        <div class="detail-col grid-row grid-column-xs-12 grid-column-lg-6">
                                            <span class="grid-column-xs-4">Phone</span>
                                            <a href="#" class="grid-column-xs-8">207-2363-4657</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-section" id="publication-content-description">
                                <div class="content-section-header">
                                    <h3>Descripción</h3>
                                </div>
                                <div class="content-section-content">
                                    <p class="description-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissimblandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                    <button name="" class="description-more" data-contract="+ Leer más" data-expanded="- Leer menos"></button>
                                </div>
                            </div>
                            <div class="content-section" id="publication-content-amenities">
                                <div class="content-section-header">
                                    <h3>Comodidades</h3>
                                </div>
                                <div class="content-section-content">
                                    <div class="list grid-row grid-mosaic-xs-2 grid-mosaic-sm-2 grid-mosaic-md-2 grid-mosaic-lg-3 grid-mosaic-xl-3">
                                        <?php
                                        for ($i = 0; $i < 12; $i++) {
                                            ?>
                                            <div class="item grid-column-xs-6 grid-column-sm-6 grid-column-md-6 grid-column-lg-4 grid-column-xl-4">
                                                <i class="material-icons">done</i>
                                                <span>Posee Wi-Fi</span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="content-section" id="publication-content-review">
                                <div class="content-section-header">
                                    <h3>Recomendaciones</h3>
                                </div>
                                <div class="content-section-content">
                                    <div class="review-rating">
                                        <div class="review-rating-score">
                                            <div class="review-rating-score-content">
                                                <span>5.0</span>
                                                <div class="review-rating-score-rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-rating-description flexible-box flexible-column">
                                            <div class="review-rating-item grid-row">
                                                <span class="review-rating-item-label grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-4">Servicio</span>
                                                <div class="review-rating-item-progress grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-8">
                                                    <div class="review-rating-item-progress-bar" style="width: 50.0%;">
                                                        <span>50.0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flexible-box-item"></div>
                                            <div class="review-rating-item grid-row">
                                                <span class="review-rating-item-label grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-4">Precio</span>
                                                <div class="review-rating-item-progress grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-8">
                                                    <div class="review-rating-item-progress-bar" style="width: 50.0%;">
                                                        <span>50.0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flexible-box-item"></div>
                                            <div class="review-rating-item grid-row">
                                                <span class="review-rating-item-label grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-4">Ubicación</span>
                                                <div class="review-rating-item-progress grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-8">
                                                    <div class="review-rating-item-progress-bar" style="width: 50.0%;">
                                                        <span>50.0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flexible-box-item"></div>
                                            <div class="review-rating-item grid-row">
                                                <span class="review-rating-item-label grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-4">Calidad</span>
                                                <div class="review-rating-item-progress grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-8">
                                                    <div class="review-rating-item-progress-bar" style="width: 50.0%;">
                                                        <span>50.0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flexible-box-item"></div>
                                            <div class="review-rating-item grid-row">
                                                <span class="review-rating-item-label grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-4">Otros</span>
                                                <div class="review-rating-item-progress grid-column-xs-12 grid-column-sm-12 grid-column-md-12 grid-column-lg-8">
                                                    <div class="review-rating-item-progress-bar" style="width: 50.0%;">
                                                        <span>50.0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-comments">
                                        <?php
                                        for ($i = 0; $i < 3; $i++) {
                                            ?>
                                            <div class="review-comment">
                                                <div class="review-comment-image"></div>
                                                <div class="review-comment-content">
                                                    <div class="review-comment-header">
                                                        <h5 class="review-comment-name">Javo</h5>
                                                        <span class="review-comment-time">2 meses atrás</span>
                                                    </div>
                                                    <p class="review-comment-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea com.</p>
                                                    <div class="review-comment-rating">
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                        <i class="material-icons">star</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <button name="" class="review-more">Cargar más</button>
                                </div>
                            </div>
                        </div>
                        <div class="content-sidebar">
                            <div class="content-section" id="publication-content-contact">
                                <div class="content-section-header">
                                    <h4>Contacto</h4>
                                </div>
                                <div class="content-section-content">
                                    <input type="text" name="" value="" placeholder="Nombre completo">
                                    <input type="email" name="" value="" placeholder="Dirección de email">
                                    <input type="text" name="" value="" placeholder="Asunto">
                                    <textarea name="" placeholder="Mensaje"></textarea>
                                    <button name="">Enviar mensaje</button>
                                </div>
                            </div>
                            <div class="content-section" id="publication-content-social">
                                <div class="content-section-header">
                                    <h4>Social</h4>
                                </div>
                                <div class="content-section-content grid-row grid-mosaic-xs-4 grid-mosaic-sm-4 grid-mosaic-md-3 grid-mosaic-lg-3 grid-mosaic-xl-3">
                                    <div class="social-item grid-column-xs-3 grid-column-sm-3 grid-column-md-4 grid-column-lg-4 grid-column-xl-4">
                                        <a href="#">
                                            <i class="socicon-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="social-item grid-column-xs-3 grid-column-sm-3 grid-column-md-4 grid-column-lg-4 grid-column-xl-4">
                                        <a href="#">
                                            <i class="socicon-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="social-item grid-column-xs-3 grid-column-sm-3 grid-column-md-4 grid-column-lg-4 grid-column-xl-4">
                                        <a href="#">
                                            <i class="socicon-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="social-item grid-column-xs-3 grid-column-sm-3 grid-column-md-4 grid-column-lg-4 grid-column-xl-4">
                                        <a href="#">
                                            <i class="socicon-googleplus"></i>
                                        </a>
                                    </div>
                                    <div class="social-item grid-column-xs-3 grid-column-sm-3 grid-column-md-4 grid-column-lg-4 grid-column-xl-4">
                                        <a href="#">
                                            <i class="socicon-youtube"></i>
                                        </a>
                                    </div>
                                    <div class="social-item grid-column-xs-3 grid-column-sm-3 grid-column-md-4 grid-column-lg-4 grid-column-xl-4">
                                        <a href="#">
                                            <i class="socicon-vimeo"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-section" id="publication-content-featured">
                                <div class="content-section-header">
                                    <h4>Destacados</h4>
                                </div>
                                <div class="content-section-content">
                                    <?php
                                    for ($i = 0; $i < 3; $i++) {
                                        ?>
                                        <div class="featured-item">
                                            <div class="featured-item-header">
                                                <span class="featured-item-name">Nata chair</span>
                                                <div class="featured-item-rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </div>
                                            </div>
                                            <div class="featured-item-content">
                                                <div class="featured-item-image"></div>
                                                <div class="featured-item-attribute">
                                                    <i class="material-icons">turned_in</i>
                                                    <span>Beauty</span>
                                                </div>
                                                <div class="featured-item-attribute">
                                                    <i class="material-icons">place</i>
                                                    <span>Shepherd’s Bush</span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
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