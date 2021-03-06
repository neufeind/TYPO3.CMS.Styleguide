<?php
return [
    'ctrl' => [
        'title' => 'Form engine elements - input, text, checkbox, radio, none, passthrough, user',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY crdate',
        'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
    ],


    'columns' => [


        'hidden' => [
            'exclude' => 1,
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'Disable',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'Publish Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0'
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'Expiration Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0',
                'range' => [
                    'upper' => mktime(0, 0, 0, 12, 31, 2020)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],


        'input_1' => [
            'exclude' => 1,
            'label' => 'input_1',
            'config' => [
                'type' => 'input',
            ],
        ],
        'input_2' => [
            'exclude' => 1,
            'label' => 'input_2, size=10',
            'config' => [
                'type' => 'input',
                'size' => 10,
            ],
        ],
        'input_3' => [
            'exclude' => 1,
            'label' => 'input_3 max=4',
            'config' => [
                'type' => 'input',
                'max' => 4,
            ],
        ],
        'input_4' => [
            'exclude' => 1,
            'label' => 'input_4 eval=alpha',
            'config' => [
                'type' => 'input',
                'eval' => 'alpha',
            ],
        ],
        'input_5' => [
            'exclude' => 1,
            'label' => 'input_5 eval=alphanum',
            'config' => [
                'type' => 'input',
                'eval' => 'alphanum',
            ],
        ],
        'input_6' => [
            'exclude' => 1,
            'label' => 'input_6 eval=date',
            'config' => [
                'type' => 'input',
                'eval' => 'date',
            ],
        ],
        'input_7' => [
            'exclude' => 1,
            'label' => 'input_7 eval=datetime',
            'config' => [
                'type' => 'input',
                'eval' => 'datetime',
            ],
        ],
        'input_8' => [
            'exclude' => 1,
            'label' => 'input_8 eval=double2',
            'config' => [
                'type' => 'input',
                'eval' => 'double2',
            ],
        ],
        'input_9' => [
            'exclude' => 1,
            'label' => 'input_9 eval=int',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
            ],
        ],
        'input_10' => [
            'exclude' => 1,
            'label' => 'input_10 eval=is_in, is_in=abc123',
            'config' => [
                'type' => 'input',
                'eval' => 'is_in',
                'is_in' => 'abc123',
            ],
        ],
        'input_11' => [
            'exclude' => 1,
            'label' => 'input_11 eval=lower',
            'config' => [
                'type' => 'input',
                'eval' => 'lower',
            ],
        ],
        'input_12' => [
            'exclude' => 1,
            'label' => 'input_12 eval=md5',
            'config' => [
                'type' => 'input',
                'eval' => 'md5',
            ],
        ],
        'input_13' => [
            'exclude' => 1,
            'label' => 'input_13 eval=nospace',
            'config' => [
                'type' => 'input',
                'eval' => 'nospace',
            ],
        ],
        'input_14' => [
            'exclude' => 1,
            'label' => 'input_14 eval=null',
            'config' => [
                'type' => 'input',
                // @todo: document eval=null is currently only useful with useOrOverridePlaceholder
                'eval' => 'null',
            ],
        ],
        'input_15' => [
            'exclude' => 1,
            'label' => 'input_15 eval=num',
            'config' => [
                'type' => 'input',
                'eval' => 'num',
            ],
        ],
        'input_16' => [
            'exclude' => 1,
            'label' => 'input_16 eval=password',
            'config' => [
                'type' => 'input',
                'eval' => 'password',
            ],
        ],
        'input_17' => [
            'exclude' => 1,
            'label' => 'input_17 eval=time',
            'config' => [
                'type' => 'input',
                'eval' => 'time',
            ],
        ],
        'input_18' => [
            'exclude' => 1,
            'label' => 'input_18 eval=timesec',
            'config' => [
                'type' => 'input',
                'eval' => 'timesec',
            ],
        ],
        'input_19' => [
            'exclude' => 1,
            'label' => 'input_19 eval=trim',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'input_20' => [
            'exclude' => 1,
            'label' => 'input_20 eval with user function',
            'config' => [
                'type' => 'input',
                'eval' => 'TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\TypeInput21Eval',
            ],
        ],
        'input_21' => [
            'exclude' => 1,
            'label' => 'input_21 eval=unique',
            'config' => [
                'type' => 'input',
                'eval' => 'unique',
            ],
        ],
        'input_22' => [
            'exclude' => 1,
            'label' => 'input_22 eval=uniqueInPid',
            'config' => [
                'type' => 'input',
                'eval' => 'uniqueInPid',
            ],
        ],
        'input_23' => [
            'exclude' => 1,
            'label' => 'input_23 eval=upper',
            'config' => [
                'type' => 'input',
                'eval' => 'upper',
            ],
        ],
        'input_24' => [
            'exclude' => 1,
            'label' => 'input_24 eval=year',
            'config' => [
                'type' => 'input',
                'eval' => 'year',
            ],
        ],
        'input_25' => [
            'exclude' => 1,
            'label' => 'input_25 eval=int, default=0, range lower=-2, range upper=2',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'range' => [
                    'lower' => -2,
                    'upper' => 2,
                ],
                'default' => 0,
            ],
        ],
        'input_26' => [
            'exclude' => 1,
            'label' => 'input_26 default="input_26", value for input_27 and input_28',
            'config' => [
                'type' => 'input',
                'default' => 'input_26',
            ],
        ],
        'input_27' => [
            'exclude' => 1,
            'label' => 'input_27 placeholder=__row|input_26',
            'config' => [
                'type' => 'input',
                'placeholder' => '__row|input_26',
            ],
        ],
        'input_28' => [
            'exclude' => 1,
            'label' => 'input_28 placeholder=__row|input_26, mode=useOrOverridePlaceholder, eval=null',
            'config' => [
                'type' => 'input',
                'placeholder' => '__row|input_26',
                'eval' => 'null',
                'mode' => 'useOrOverridePlaceholder',
            ],
        ],
        'input_29' => [
            'exclude' => 1,
            'label' => 'input_29 wizard link',
            'config' => [
                'type' => 'input',
                'wizards' => [
                    'link' => [
                        'type' => 'popup',
                        'title' => 'Link',
                        'icon' => 'actions-wizard-link',
                        'module' => [
                            'name' => 'wizard_link',
                        ],
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                    ],
                ],
            ],
        ],
        'input_30' => [
            'exclude' => 1,
            'label' => 'input_30 wizard slider, step=10, width=200, eval=trim,int',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim,int',
                'range' => [
                    'lower' => -90,
                    'upper' => 90,
                ],
                'default' => 0,
                'wizards' => [
                    'angle' => [
                        'type' => 'slider',
                        'step' => 10,
                        'width' => 200,
                    ],
                ],
            ],
        ],
        'input_31' => [
            'exclude' => 1,
            'label' => 'input_31 wizard slider, default=14.5, step=0.5, width=150, eval=trim,double2',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim,double2',
                'range' => [
                    'lower' => -90,
                    'upper' => 90,
                ],
                'default' => 14.5,
                'wizards' => [
                    'angle' => [
                        'type' => 'slider',
                        'step' => 0.5,
                        'width' => 150,
                    ],
                ],
            ],
        ],
        'input_32' => [
            'exclude' => 1,
            'label' => 'input_32 wizard userFunc',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'eval' => 'int',
                'wizards' => [
                    'userFuncInputWizard' => [
                        'type' => 'userFunc',
                        'userFunc' => 'TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\WizardInput33->render',
                        'params' => [
                            'color' => 'green',
                        ],
                    ],
                ],
            ],
        ],
        'input_33' => [
            'exclude' => 1,
            'label' => 'input_33 wizard select',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'wizards' => [
                    'season_picker' => [
                        'type' => 'select',
                        'mode' => '',
                        'items' => [
                            ['spring', 'Spring'],
                            ['summer', 'Summer'],
                            ['autumn', 'Autumn'],
                            ['winter', 'Winter'],
                        ],
                    ],
                ],
            ],
        ],
        'input_34' => [
            'exclude' => 1,
            'label' => 'input_34 wizard colorbox',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
            ],
        ],
        'input_36' => [
            'exclude' => 1,
            'label' => 'input_36 dbType=date eval=date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'size' => 10,
                'eval' => 'date',
                'checkbox' => 0,
                'default' => '0000-00-00'
            ],
        ],
        'input_37' => [
            'exclude' => 1,
            'label' => 'input_37 dbType=datetime eval=datetime',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'size' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => '0000-00-00 00:00:00'
            ],
        ],


        'text_1' => [
            'exclude' => 1,
            'label' => 'text_1',
            'config' => [
                'type' => 'text',
            ],
        ],
        'text_2' => [
            'exclude' => 1,
            'label' => 'text_2 cols=20',
            'config' => [
                'type' => 'text',
                'cols' => 20,
            ],
        ],
        'text_3' => [
            'exclude' => 1,
            'label' => 'text_3 rows=2',
            'config' => [
                'type' => 'text',
                'rows' => 2,
            ],
        ],
        'text_4' => [
            'exclude' => 1,
            'label' => 'text_4 cols=20, rows=2',
            'config' => [
                'type' => 'text',
                'cols' => 20,
                'rows' => 2,
            ],
        ],
        'text_5' => [
            'exclude' => 1,
            'label' => 'text_5 wrap=off, long default text',
            'config' => [
                'type' => 'text',
                'wrap' => 'off',
                'default' => 'This textbox has wrap set to "off", so these long paragraphs should appear in one line:'
                    . ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus elit. In sed nunc velit.'
                    . ' Donec gravida eros sollicitudin ligula mollis id eleifend mauris laoreet. Donec turpis magna, pulvinar'
                    . ' id pretium eu, blandit et nisi. Nulla facilisi. Vivamus pharetra orci sed nunc auctor condimentum.'
                    . ' Aenean volutpat posuere scelerisque. Nullam sed dolor justo. Pellentesque id tellus nunc, id sodales'
                    . ' diam. Sed rhoncus risus a enim lacinia tincidunt. Aliquam ut neque augue.',
            ],
        ],
        'text_6' => [
            'exclude' => 1,
            'label' => 'text_6 wrap=virtual, long default text',
            'config' => [
                'type' => 'text',
                'wrap' => 'virtual',
                'default' => 'This textbox has wrap set to "virtual", so these long paragraphs should'
                    . ' appear in multiple lines (wrapped at the end of the textbox):'
                    . ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non luctus elit. In sed nunc velit.'
                    . ' Donec gravida eros sollicitudin ligula mollis id eleifend mauris laoreet. Donec turpis magna, pulvinar'
                    . ' id pretium eu, blandit et nisi. Nulla facilisi. Vivamus pharetra orci sed nunc auctor condimentum.'
                    . ' Aenean volutpat posuere scelerisque. Nullam sed dolor justo. Pellentesque id tellus nunc, id sodales'
                    . ' diam. Sed rhoncus risus a enim lacinia tincidunt. Aliquam ut neque augue.',
            ],
        ],
        'text_7' => [
            'exclude' => 1,
            'label' => 'text_7 eval=trim',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
            ],
        ],
        'text_8' => [
            'exclude' => 1,
            'label' => 'text_8 eval with user function',
            'config' => [
                'type' => 'text',
                'eval' => 'TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\TypeText9Eval',
            ],
        ],
        'text_9' => [
            'exclude' => 1,
            'label' => 'text_9 readOnly=1',
            'config' => [
                'type' => 'text',
                'readOnly' => 1,
            ],
        ],
        'text_10' => [
            'exclude' => 1,
            'label' => 'text_10 readOnly=1, format=datetime',
            'config' => [
                'type' => 'text',
                'readOnly' => 1,
                'format' => 'datetime',
            ],
        ],
        'text_11' => [
            'exclude' => 1,
            'label' => 'text_11 max=30',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 4,
                'max' => 30,
            ],
        ],
        'text_12' => [
            'exclude' => 1,
            'label' => 'text_12 default="text_12", value for text_13 and text_14',
            'config' => [
                'type' => 'input',
                'default' => 'text_12',
            ],
        ],
        'text_13' => [
            'exclude' => 1,
            'label' => 'text_13 placeholder=__row|text_12',
            'config' => [
                'type' => 'text',
                'placeholder' => '__row|text_12',
            ],
        ],
        'text_14' => [
            'exclude' => 1,
            'label' => 'text_14 placeholder=__row|text_12, mode=useOrOverridePlaceholder, eval=null',
            'config' => [
                'type' => 'text',
                'placeholder' => '__row|text_12',
                'eval' => 'null',
                'mode' => 'useOrOverridePlaceholder',
            ],
        ],
        'text_15' => [
            'exclude' => 1,
            'label' => 'text_15 defaultExtras="fixed-font : enable-tab"',
            'config' => [
                'type' => 'text',
            ],
            'defaultExtras' => 'fixed-font : enable-tab'
        ],
        'text_16' => [
            'label' => 'text_16 wizard table',
            'config' => [
                'type' => 'text',
                'cols' => '40',
                'rows' => '5',
                'wizards' => [
                    'table' => [
                        'type' => 'script',
                        'title' => 'Table wizard',
                        'icon' => 'content-table',
                        'module' => [
                            'name' => 'wizard_table'
                        ],
                        'params' => [
                            'xmlOutput' => 0
                        ],
                        'notNewRecords' => 1,
                    ],
                ],
            ],
        ],
        'text_17' => [
            'label' => 'text_17 wizard select',
            'config' => [
                'type' => 'text',
                'cols' => '40',
                'rows' => '5',
                'wizards' => [
                    'select' => [
                        'type' => 'select',
                        'items' => [
                            ['Option 1', 'Dummy Text for Option 1'],
                            ['Option 2', 'Dummy Text for Option 2'],
                            ['Option 3', 'Dummy Text for Option 3'],
                        ],
                    ],
                ],
            ],
        ],


        'checkbox_1' => [
            'exclude' => 1,
            'label' => 'checkbox_1',
            'config' => [
                'type' => 'check',
            ]
        ],
        'checkbox_2' => [
            'exclude' => 1,
            'label' => 'checkbox_2 one checkbox with label',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo', ''],
                ],
            ]
        ],
        'checkbox_3' => [
            'exclude' => 1,
            'label' => 'checkbox_3 three checkboxes, two with labels, one without',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo', ''],
                    ['', ''],
                    ['foobar', ''],
                ],
            ],
        ],
        'checkbox_4' => [
            'exclude' => 1,
            'label' => 'checkbox_4 four checkboxes with labels, long text',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo', ''],
                    [
                        'foo and this here is very long text that maybe does not really fit into the form in one line.'
                            . ' Ok let us add even more text to see how this looks like if wrapped. Is this enough now? No?'
                            . ' Then let us add some even more useless text here!',
                        ''
                    ],
                    ['foobar', ''],
                    ['foobar', ''],
                ],
            ],
        ],
        'checkbox_6' => [
            // @todo: Checking a checkbox that is added by itemsProcFunc is not persisted correctly.
            // @todo: HTML looks good, so this is probably an issue in DataHandler?
            'label' => 'checkbox_6 itemsProcFunc',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo', ''],
                    ['bar', ''],
                ],
                'itemsProcFunc' => 'TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\TypeCheckbox8ItemsProcFunc->itemsProcFunc',
            ],
        ],
        'checkbox_7' => [
            'exclude' => 1,
            'label' => 'checkbox_7 eval=maximumRecordsChecked, table wide',
            'config' => [
                'type' => 'check',
                'eval' => 'maximumRecordsChecked',
                'validation' => [
                    'maximumRecordsChecked' => 1,
                ],
            ],
        ],
        'checkbox_8' => [
            'exclude' => 1,
            'label' => 'checkbox_8 eval=maximumRecordsCheckedInPid, for this PID',
            'config' => [
                'type' => 'check',
                'eval' => 'maximumRecordsCheckedInPid',
                'validation' => [
                    'maximumRecordsCheckedInPid' => 1,
                ],
            ],
        ],
        'checkbox_9' => [
            'exclude' => 1,
            'label' => 'checkbox_9 readonly=1',
            'config' => [
                'type' => 'check',
                'readOnly' => 1,
                'items' => [
                    ['foo1', ''],
                    ['foo2', ''],
                ],
            ],
        ],
        'checkbox_10' => [
            'exclude' => 1,
            'label' => 'checkbox_10 cols=1',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo1', ''],
                    ['foo2', ''],
                    ['foo3', ''],
                ],
                'cols' => '1',
            ],
        ],
        'checkbox_11' => [
            'exclude' => 1,
            'label' => 'checkbox_11 cols=2',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo1', ''],
                    ['foo2', ''],
                    ['foo3', ''],
                ],
                'cols' => '2',
            ],
        ],
        'checkbox_12' => [
            'exclude' => 1,
            'label' => 'checkbox_12 cols=3',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo1', ''],
                    ['foo2', ''],
                    ['foo3', ''],
                    ['foo4', ''],
                ],
                'cols' => '3',
            ],
        ],
        'checkbox_13' => [
            'exclude' => 1,
            'label' => 'checkbox_13 cols=4',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo1', ''],
                    ['foo2', ''],
                    [
                        'foo3 and this here is very long text that maybe does not really fit into the'
                            . ' form in one line. Ok let us add even more text to see how',
                        ''
                    ],
                    ['foo4', ''],
                    ['foo5', ''],
                    ['foo6', ''],
                    ['foo7', ''],
                    ['foo8', ''],
                ],
                'cols' => '4',
            ],
        ],
        'checkbox_14' => [
            'exclude' => 1,
            'label' => 'checkbox_14 cols=5',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo1', ''],
                    ['foo2', ''],
                    ['foo3', ''],
                    ['foo4', ''],
                    ['foo5', ''],
                    ['foo6', ''],
                    ['foo7', ''],
                ],
                'cols' => '5',
            ],
        ],
        'checkbox_15' => [
            'exclude' => 1,
            'label' => 'checkbox_15 cols=6',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['foo1', ''],
                    ['foo2', ''],
                    ['foo3', ''],
                    ['foo4', ''],
                    ['foo5', ''],
                    ['foo6', ''],
                    ['foo7', ''],
                ],
                'cols' => '6',
            ],
        ],
        'checkbox_16' => [
            'exclude' => 1,
            'label' => 'checkbox_16 cols=inline',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['Mo', ''],
                    ['Tu', ''],
                    ['We', ''],
                    ['Th', ''],
                    ['Fr', ''],
                    ['Sa', ''],
                    ['Su', ''],
                ],
                'cols' => 'inline',
            ],
        ],


        'radio_1' => [
            'exclude' => 1,
            'label' => 'radio_1 three options, one without label',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['foo', 1],
                    ['', 2],
                    ['foobar', 3],
                ],
            ],
        ],
        'radio_2' => [
            'exclude' => 1,
            'label' => 'radio_2 three options, long text',
            'config' => [
                'type' => 'radio',
                'items' => [
                    [
                        'foo and this here is very long text that maybe does not really fit into the form in one line.'
                            . ' Ok let us add even more text to see how this looks like if wrapped. Is this enough now?'
                            . ' No? Then let us add some even more useless text here!',
                        1
                    ],
                    ['bar', 2],
                    ['foobar', 3],
                ],
            ],
        ],
        'radio_3' => [
            'exclude' => 1,
            'label' => 'radio_3 many options',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['foo1', 1],
                    ['foo2', 2],
                    ['foo3', 3],
                    ['foo4', 4],
                    ['foo5', 5],
                    ['foo6', 6],
                    ['foo7', 7],
                    ['foo8', 8],
                    ['foo9', 9],
                    ['foo10', 10],
                    ['foo11', 11],
                    ['foo12', 12],
                    ['foo13', 13],
                    ['foo14', 14],
                    ['foo15', 15],
                    ['foo16', 16],
                ],
            ],
        ],
        'radio_4' => [
            'exclude' => 1,
            'label' => 'radio_4 string values',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['foo', 'foo'],
                    ['bar', 'bar'],
                ],
            ],
        ],
        'radio_5' => [
            // @todo: Radio elements added by itemsProcFunc are not persisted correctly.
            // @todo: HTML looks good, so this is probably an issue in DataHandler?
            'exclude' => 1,
            'label' => 'radio_5 itemsProcFunc',
            'config' => [
                'type' => 'radio',
                'items' => [
                    ['foo', 1],
                    ['bar', 2],
                ],
                'itemsProcFunc' => 'TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\TypeRadio5ItemsProcFunc->itemsProcFunc',
            ],
        ],
        'radio_6' => [
            'exclude' => 1,
            'label' => 'radio_6 readonly=1',
            'config' => [
                'type' => 'radio',
                'readOnly' => 1,
                'items' => [
                    ['foo', 1],
                    ['bar', 2],
                ],
            ],
        ],


        'none_1' => [
            'exclude' => 1,
            'label' => 'none_1 pass_content=1',
            'config' => [
                'type' => 'none',
                'pass_content' => 1,
            ],
        ],
        'none_2' => [
            'exclude' => 1,
            'label' => 'none_2 pass_content=0',
            'config' => [
                'type' => 'none',
                'pass_content' => 0,
            ],
        ],
        'none_3' => [
            'exclude' => 1,
            'label' => 'none_3 rows=2',
            'config' => [
                'type' => 'none',
                'rows' => 2,
            ],
        ],
        'none_4' => [
            'exclude' => 1,
            'label' => 'none_4 cols=2',
            'config' => [
                'type' => 'none',
                'cols' => 2,
            ],
        ],
        'none_5' => [
            'exclude' => 1,
            'label' => 'none_5 rows=2, fixedRows=2',
            'config' => [
                'type' => 'none',
                'rows' => 2,
                'fixedRows' => 2,
            ],
        ],
        'none_6' => [
            'exclude' => 1,
            'label' => 'none_6 size=6',
            'config' => [
                'type' => 'none',
                'size' => 6,
            ],
        ],


        'passthrough_1' => [
            'exclude' => 1,
            'label' => 'passthrough_1 field should NOT be shown',
            'config' => [
                'type' => 'passthrough',
            ],
        ],


        'user_1' => [
            'exclude' => 1,
            'label' => 'user_1 parameter=color=green',
            'config' => [
                'type' => 'user',
                'userFunc' => 'TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\TypeUser1->render',
                'parameters' => [
                    'color' => 'green',
                ],
            ],
        ],
        'user_2' => [
            'exclude' => 1,
            'label' => 'user_2 noTableWrapping=true',
            'config' => [
                'type' => 'user',
                'userFunc' => 'TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\TypeUser2->render',
                'parameters' => [
                    'color' => 'green',
                ],
                'noTableWrapping' => true,
            ],
        ],


        'flex_1' => [
            'exclude' => 1,
            'label' => 'flex_1',
            'config' => [
                'type' => 'flex',
                'ds' => [
                    'default' => '
                        <T3DataStructure>
                            <sheets>

                                <sInput>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>input</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <input_1>
                                                <TCEforms>
                                                    <label>input_1 wizard link</label>
                                                    <config>
                                                        <type>input</type>
                                                        <eval>trim</eval>
                                                        <softref>typolink</softref>
                                                        <wizards type="array">
                                                            <link type="array">
                                                                <type>popup</type>
                                                                <title>Link</title>
                                                                <icon>actions-wizard-link</icon>
                                                                <module type="array">
                                                                    <name>wizard_link</name>
                                                                    <urlParameters type="array">
                                                                        <act>file|url</act>
                                                                    </urlParameters>
                                                                </module>
                                                                <params type="array">
                                                                    <blindLinkOptions>mail,folder,spec</blindLinkOptions>
                                                                </params>
                                                                <JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams>
                                                            </link>
                                                        </wizards>
                                                    </config>
                                                </TCEforms>
                                            </input_1>
                                            <input_2>
                                                <TCEforms>
                                                    <label>input_2 wizard table</label>
                                                    <config>
                                                        <type>text</type>
                                                        <cols>30</cols>
                                                        <rows>5</rows>
                                                        <wizards>
                                                            <table type="array">
                                                                <type>script</type>
                                                                <title>Table wizard</title>
                                                                <icon>content-table</icon>
                                                                <module type="array">
                                                                    <name>wizard_table</name>
                                                                </module>
                                                                <params type="array">
                                                                    <xmlOutput>0</xmlOutput>
                                                                </params>
                                                                <notNewRecords>1</notNewRecords>
                                                            </table>
                                                        </wizards>
                                                    </config>
                                                </TCEforms>
                                            </input_2>
                                            <input_3>
                                                <TCEforms>
                                                    <label>input_3 wizard select</label>
                                                    <config>
                                                        <type>input</type>
                                                        <wizards>
                                                            <valuePicker>
                                                                <type>select</type>
                                                                <mode></mode>
                                                                <items>
                                                                    <numIndex index="0">
                                                                        <numIndex index="0">Foo</numIndex>
                                                                        <numIndex index="1">foo</numIndex>
                                                                    </numIndex>
                                                                    <numIndex index="1">
                                                                        <numIndex index="0">Bar</numIndex>
                                                                        <numIndex index="1">bar</numIndex>
                                                                    </numIndex>
                                                                </items>
                                                            </valuePicker>
                                                        </wizards>
                                                    </config>
                                                </TCEforms>
                                            </input_3>
                                        </el>
                                    </ROOT>
                                </sInput>

                                <sText>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>text</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <text_1>
                                                <TCEforms>
                                                    <label>text_1 cols=20, rows=4</label>
                                                    <config>
                                                        <type>text</type>
                                                        <cols>20</cols>
                                                        <rows>4</rows>
                                                    </config>
                                                </TCEforms>
                                            </text_1>
                                        </el>
                                    </ROOT>
                                </sText>

                                <sCheck>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>check</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <check_1>
                                                <TCEforms>
                                                    <label>check_1</label>
                                                    <config>
                                                        <type>check</type>
                                                        <items>
                                                            <numIndex index="0">
                                                                <numIndex index="0">Foo</numIndex>
                                                            </numIndex>
                                                            <numIndex index="1">
                                                                <numIndex index="0">Bar</numIndex>
                                                            </numIndex>
                                                            <numIndex index="2">
                                                                <numIndex index="0">FooBar</numIndex>
                                                            </numIndex>
                                                        </items>
                                                    </config>
                                                </TCEforms>
                                            </check_1>
                                        </el>
                                    </ROOT>
                                </sCheck>

                                <sRadio>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>radio</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <radio_1>
                                                <TCEforms>
                                                    <label>radio_1</label>
                                                    <config>
                                                        <type>radio</type>
                                                        <items>
                                                            <numIndex index="0">
                                                                <numIndex index="0">Foo</numIndex>
                                                                <numIndex index="1">1</numIndex>
                                                            </numIndex>
                                                            <numIndex index="1">
                                                                <numIndex index="0">Bar</numIndex>
                                                                <numIndex index="1">2</numIndex>
                                                            </numIndex>
                                                        </items>
                                                    </config>
                                                </TCEforms>
                                            </radio_1>
                                        </el>
                                    </ROOT>
                                </sRadio>

                            </sheets>
                        </T3DataStructure>
                    ',
                ],
            ],
        ],


    ],


    'types' => [
        '0' => [
            'showitem' => '
                --div--;input,
                    input_1, input_2, input_3, input_4, input_5, input_6, input_36, input_7, input_37, input_8, input_9, input_10,
                    input_11, input_12, input_13, input_14, input_15, input_16, input_17, input_18, input_19, input_20,
                    input_21, input_22, input_23, input_24, input_25, input_26, input_27, input_28, input_29, input_30,
                    input_31, input_32, input_33, input_34,
                --div--;text,
                    text_1, text_2, text_3, text_4, text_5, text_6, text_7, text_8, text_9, text_10,
                    text_11, text_12, text_13, text_14, text_15, text_16, text_17,
                --div--;check,
                    checkbox_1, checkbox_2, checkbox_3, checkbox_4, checkbox_6, checkbox_7, checkbox_8, checkbox_9, checkbox_10,
                    checkbox_11, checkbox_12, checkbox_13, checkbox_14, checkbox_15, checkbox_16,
                --div--;radio,
                    radio_1, radio_2, radio_3, radio_4, radio_5, radio_6,
                --div--;none,
                    none_1, none_2, none_3, none_4, none_5, none_6,
                --div--;passthrough,
                    passthrough_1,
                --div--;user,
                    user_1, user_2,
                --div--;in flex,
                    flex_1,
            ',
        ],
    ],


];
