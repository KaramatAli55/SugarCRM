<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

$connector_strings = array (
    'LBL_LICENSING_INFO' => '<table border=&#39;0&#39; cellspacing=&#39;1&#39;><tr><td valign=&#39;top&#39; width=&#39;35%&#39; class=&#39;dataLabel&#39;>Hanki avain ja salasana IBM SmartCloud -palvelusta rekisteröimällä Sugar-instanssisi uutena sovelluksena.<br />
&nbsp;<br />
Sugar-instanssisi rekisteröinti tapahtuu seuraavasti:<br />
&nbsp;<br />
<ol>
<li>Kirjaudu IBM SmartCloud -tilillesi. (Sinun pitää olla järjestelmänvalvoja)</li>
<li>Mene Administration &rarr; Manage Organization</li>
<li>Valitse "Integrated Third-Party Apps" -linkki sivupalkista ja ota käyttöön SugarCRM kaikille käyttäjille.</li>
<li>Mene "Internal Apps" -kohtaan sivupalkissa ja valitse "Register App"</li>
<li>Anna sovellukselle vapaavalintainen nimi (vaikkapa "SugarCRM tuotanto") ja varmista, että "OAuth 2.x" -valintaruutu <strong>EI</strong> ole valittuna ponnahdusikkunan alalaidassa.</li>
<li>Kun sovellus on luotu, klikkaa sovelluksen nimen vieressä olevaa kolmiota ja valitse "Show Credentials" pudotusvalikosta.</li>
<li>Kopioi tunnistetiedot alle.</li>
</ol>
</td></tr></table>',
    'oauth_consumer_key' => 'Kuluttajan OAuth-avain',
    'oauth_consumer_secret' => 'Kuluttajan OAuth-salasana',
);
