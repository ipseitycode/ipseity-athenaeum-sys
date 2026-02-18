<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONFIGURATION
require 'configuration/IpseityAthenaeumConfiguration.php';

// WIDGET
require 'widget/IpseityAthenaeumPageWidget.php';

$configuration = new IpseityAthenaeumConfiguration();

$status = $_GET['status'] ?? null;
$layout = $_GET['layout'] ?? null;

if ($status) {
    $layoutLista = $configuration->filtrarPorStatus($status);
} elseif ($layout) {
    $layoutLista = $configuration->filtrarPorBusca($layout);
} else {
    $layoutLista = $configuration->configurarLayout();
}

$page = new IpseityAthenaeumPageWidget();
$page->page($layoutLista);