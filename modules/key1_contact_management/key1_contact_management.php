<?PHP
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
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/key1_contact_management/key1_contact_management_sugar.php');
class key1_contact_management extends key1_contact_management_sugar {

    /**
     * @deprecated Use __construct() instead
     */
    public function key1_contact_management()
    {
        self::__construct();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
}