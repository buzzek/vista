<?php
$favicon = '';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>

    <meta charset="UTF-8">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if (is_search()) : ?>
        <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>
    <link rel="icon" href="<?= $favicon ?>" type="image/x-icon">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <?php
    /*
     * extended libs
     */
    ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <?php wp_head(); ?>

</head>


<body>
    <div id="container">
        <?php gtp('shared', 'navigation'); ?>
        <main class="fullwidth">
            <div class="content">