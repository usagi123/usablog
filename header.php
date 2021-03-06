<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script>
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myNav").style.background = "linear-gradient(rgba(20,20,20, .6), rgba(20,20,20, .5))";
                document.getElementById("myNav").style.transition = "background 2s ease 0s";
            } else {
                document.getElementById("myNav").style.background = "transparent";
            }
        };
        </script>
        <title><?php bloginfo('title'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="aloha container-fluid">
            <div class="navbar navbar-expand-lg navbar-dark fixed-top" id="myNav" <?php echo (is_admin_bar_showing()) ? 'style="top: 32px;"' : ''; ?>>
                <div class="container custom-nav">
                    <a href="<?php echo get_home_url(); ?>" class="navbar-brand"><?php bloginfo('title'); ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
                        <ul class="navbar-nav ml-auto">
                            <?php wp_nav_menu(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>