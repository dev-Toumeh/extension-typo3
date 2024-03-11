<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'cars',
    'Configuration/TypoScript',
    'Car setup'
);