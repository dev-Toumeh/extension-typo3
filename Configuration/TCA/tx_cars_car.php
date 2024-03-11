<?php
return [
    'ctrl' => [
        'title' => 'Cars',
        'label' => 'manufacturer',
        'label-alt' => 'model',
        'label-alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'label',
        'versioningWS' => true,
        'rootLevel' => 0,
     //   'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'searchFields' => 'title,description',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],

    ],
    'columns' => [
        'manufacturer' => [
            'label' => 'LLL:EXT:cars/Resources/Private/Language/de.locallang_db.xlf:tx_cars_car.manufacturer',
            'config' => [
                'type' => 'input',
            ],
        ],
        'model' => [
            'label' => 'LLL:EXT:cars/Resources/Private/Language/de.locallang_db.xlf:tx_cars_car.model',
            'config' => [
                'type' => 'input',
            ],
        ],
        'ps' => [
            'label' => 'LLL:EXT:cars/Resources/Private/Language/de.locallang_db.xlf:tx_cars_car.ps',
            'config' => [
                'type' => 'input',
            ],
        ],
    ],
    'types' => [
        [
            'showitem' => 'manufacturer, model, ps',
        ],
    ],
];