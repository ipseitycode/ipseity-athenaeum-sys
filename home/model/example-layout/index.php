<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONFIGURATION
require 'configuration/IpseityAthenaeumExampleConfiguration.php';

// WIDGET
require 'widget/IpseityAthenaeumExampleWidget.php';

$configuration = new IpseityAthenaeumExampleConfiguration();

$page = new IpseityAthenaeumExampleWidget();
$page->example($configuration);