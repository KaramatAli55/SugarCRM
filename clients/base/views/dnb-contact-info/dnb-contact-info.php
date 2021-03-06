<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$viewdefs['base']['view']['dnb-contact-info'] = array(
    'dashlets' => array(
        array(
            'label' => 'LBL_DNB_CONTACT',
            'description' => 'LBL_DNB_CONTACT_DESC',
            'filter' => array(
                'module' => array(
                    'Accounts',
                ),
                'view' => 'record'
            ),
            'config' => array(
                'pagesz' => '10',
            ),
            'preview' => array(
                'pagesz' => '10',
            ),
        ),
    ),
    'custom_toolbar' => array(
        'buttons' => array(
            array(
                'type' => 'dashletaction',
                "css_class" => "btn btn-primary importDNBData hide",
                'name' => 'import_dnb_data',
                "action" => "importDNBContact",
                "label" => "LBL_DNB_IMPORT",
            ),
            array(
                'dropdown_buttons' => array(
                    array(
                        'type' => 'dashletaction',
                        'action' => 'editClicked',
                        'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                    ),
                    array(
                        'type' => 'dashletaction',
                        'action' => 'refreshClicked',
                        'label' => 'LBL_DASHLET_REFRESH_LABEL',
                    ),
                    array(
                        'type' => 'dashletaction',
                        'action' => 'removeClicked',
                        'label' => 'LBL_DASHLET_REMOVE_LABEL',
                    ),
                )
            ),
            array(
                "type" => "dashletaction",
                "css_class" => "dashlet-toggle btn btn-invisible minify",
                "icon" => "fa-chevron-down",
                "action" => "toggleMinify",
                "tooltip" => "LBL_DASHLET_MAXIMIZE",
            ),
        )
    ),
    'config' => array(
        'fields' => array(
            array(
                'name' => 'pagesz',
                'label' => 'LBL_DNB_PAGESZ',
                'type' => 'enum',
                'searchBarThreshold' => -1,
                'options' => array(
                    5 => 5,
                    10 => 10,
                    15 => 15,
                    20 => 20
                ),
            ),
        ),
    ),
);
