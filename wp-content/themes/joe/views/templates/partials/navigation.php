<header class="navbar-fixed-top">
    <div class="container">
        <nav class="navbar navbar-custom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-collapse-container">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><?php
                    get_template_part("views/templates/partials/brand"); ?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-menu-collapse-container"><?php
                    $theme_location = 'main-menu';
                    if( has_nav_menu($theme_location) )
                    {
                        wp_nav_menu( array(
                            'theme_location' => $theme_location,
                            'container'=>false,
                            'items_wrap' => '<ul id="navbar-nav" class="nav navbar-nav navbar-right">%3$s</ul>',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                    } ?>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav> <!-- end nav --> <div class="clearfix"></div>
    </div>
</header>