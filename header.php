<?php 

// Custom Body Classes
$classes = array(
    'custom',
);

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <meta name="theme-color" content="#29211d;">
    <meta name="msapplication-TileColor" content="#29211d;">
    <meta name="msapplication-navbutton-color" content="#29211d;">
    <meta name="apple-mobile-web-app-status-bar-style" content="#29211d;">

</head>
<body <?php body_class($classes); ?>>
<?php wp_body_open(); ?>

<main class="content--main"> <!-- End Main Content Wrapper -->