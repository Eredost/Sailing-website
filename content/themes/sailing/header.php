<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">

    <aside class="sidebar">

        <div class="logo">
            <img src="content/themes/sailing/public/images/logo-osailing.svg" alt="" class="logo__image">
            <p class="logo__text">Sailing</p>
        </div>

        <nav class="navbar">

            <ul>
                <li class="navbar__item">
                    <a href="#intro" class="navbar__item__link">Intro</a>
                </li>
            </ul>
            <ul>
                <li class="navbar__item">
                    <a href="#articles" class="navbar__item__link">Articles</a>
                </li>
            </ul>
            <ul>
                <li class="navbar__item">
                    <a href="#counters" class="navbar__item__link">Les valeurs</a>
                </li>
            </ul>

        </nav>
    </aside>

    <div class="page">

        <header class="header" id="intro">
            <h1 class="header__title">Cap sur le grand large</h1>
        </header>