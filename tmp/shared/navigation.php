<?php

?>
<header class="header fullwidth flex horizontal__center show-on">
    <div class="header__content widewidth">
        <div class="header__content--logo">
            <a href="<?= get_home_url() ?>">
                <object data="<?= IMAGES . 'main-logo.svg' ?>" type="image/svg+xml" class="header-logo"></object>
            </a>
        </div>
        <div class="header__content--nav">
            <?php
            if (has_nav_menu('header-menu')) {
                wp_nav_menu(array(
                    'names' => 'Header menu',
                    'theme_location' => 'header-menu',
                    'container' => '',
                    'menu_id' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'menu_class' => ''
                ));
            }
            ?>

            <a href="" class="button">Let's Talk</a>
        </div>
        <div class="header__content--mobile"></div>
    </div>
</header>