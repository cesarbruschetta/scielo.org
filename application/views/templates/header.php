<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $this->PageMetadata->get_page_title() ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

	<!-- css bootstrap -->
	<link href="<?= get_static_css_path('bootstrap.css') ?>" rel="stylesheet" type="text/css" media="screen" />

	<!-- css scielo.org novo -->
	<link href="<?= get_static_css_path('slick.css') ?>" rel="stylesheet">
	<link href="<?= get_static_css_path('slick-theme.css') ?>" rel="stylesheet">

	<!-- css scielo.org novo -->
	<link href="<?= get_static_css_path('style.css') ?>" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<meta name="description" content="<?= $this->PageMetadata->get_page_description() ?>"/>
</head>
<body>
