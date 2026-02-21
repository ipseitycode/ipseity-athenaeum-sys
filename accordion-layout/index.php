<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CONFIGURATION
require 'configuration/IpseityAthenaeumAccordionConfiguration.php';

// WIDGET
require 'widget/IpseityAthenaeumAccordionWidget.php';

$configuration = new IpseityAthenaeumAccordionConfiguration();

$page = new IpseityAthenaeumAccordionWidget();
$page->accordion($configuration);