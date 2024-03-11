<?php

use Toumeh\Cars\Controller\CarController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;


ExtensionUtility::configurePlugin(
    'Cars',
    'Show',
    [
        CarController::class => 'list, show'
    ]
);