<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in as Admin user');
$I->amOnPage('loginprofe.php');

$I->fillField('mail_prof','flor@flor.flor');
$I->fillField('password','flor');

$I->click('submit');
$I->see('Hola');

$I->wantTo('Click material docente');
$I->click('Material Docente');
$I->see('Matematicas');

$I->wantTo('Click Fisica');
$I->click('Fisica');
$I->see('Holanda');

?>