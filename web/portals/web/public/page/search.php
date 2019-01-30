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
                var layoutHeader = document.getElementById('layout-header');

                layout.addEventListener('scroll', function () {
                    var scroll = layout.scrollTop;

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
                <section class="layout-section" id="search-search">
                    <div class="section-padding flexible-box-md flexible-row-md vertical-start-md">
                        <div class="search-filters">
                            <div class="search-filters-group">
                                <div class="search-filters-group-header">
                                    <span>Búsqueda</span>
                                </div>
                                <div class="search-filters-group-content">
                                    <input type="text" name="" value="" placeholder="¿Qué buscas?">
                                </div>
                            </div>
                            <div class="search-filters-group">
                                <div class="search-filters-group-header">
                                    <span>Categoría</span>
                                </div>
                                <div class="search-filters-group-content">
                                    <select name="">
                                        <option value="">Selecciona una categoría</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-filters-group">
                                <div class="search-filters-group-header">
                                    <span>Ubicación</span>
                                </div>
                                <div class="search-filters-group-content">
                                    <input type="text" name="" value="" placeholder="Ingresa una ubicación">
                                </div>
                            </div>
                            <div class="search-filters-group">
                                <div class="search-filters-group-header">
                                    <span>Comodidades</span>
                                </div>
                                <div class="search-filters-group-content">
                                    <?php
                                    for ($i = 0; $i < 20; $i++) {
                                        ?>
                                        <div class="search-filters-group-content-item">
                                            <input type="checkbox" name="" value="">
                                            <label>Ingresa una ubicación</label>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="search-grid flexible-box-item-md">
                            <?php
                            for ($i = 0; $i < 20; $i++) {
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-image"></div>
                                        <div class="card-opacity"></div>
                                        <div class="card-tag">
                                            <span>Beauty</span>
                                        </div>
                                        <div class="card-rating">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-name">Leopard</h5>
                                        <div class="card-attributes">
                                            <div>
                                                <i class="material-icons">place</i>
                                                <span>Shepherd’s Bush</span>
                                            </div>
                                        </div>
                                        <p class="card-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                                        <label class="card-favorite">
                                            <input type="checkbox" name="" value="">
                                            <span class="material-icons"></span>
                                        </label>
                                    </div>
                                </div>
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