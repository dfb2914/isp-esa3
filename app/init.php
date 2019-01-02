<?php

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views/');

require_once 'classes/FrontController.php';
require_once 'classes/Dispatcher.php';

require_once 'classes/HomeView.php';
require_once 'classes/BillingView.php';
require_once 'classes/SummaryView.php';

require_once 'classes/ErrorHandler.php';
require_once 'classes/Validator.php';

require_once 'classes/HtmlBuilder.php';
