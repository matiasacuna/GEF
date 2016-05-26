<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in as Admin user');
$I->amOnPage('loginprofe.php');

$I->fillField('mail_prof','admin@admin.admin');
$I->fillField('password','21232f297a57a5a743894a0e4a801fc3');

$I->click('submit');

?>