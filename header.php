<!DOCTYPE HTML>
<html >
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" />
        <meta name="description" content=" " />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Title -->
        <title>
            <?php $this->options->title(); ?>
        </title>

        <link rel="icon" type="image/ico" href="<?php $this->options->favicon() ?>">

        <!-- Header -->
        <?php $this->header(); ?>

        <!-- Typecho Theme Void Style -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/void.css'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/normalize.css'); ?>" />
    </head>
    <body>