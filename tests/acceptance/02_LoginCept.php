<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('login as dpowers@rezon8.net');
$I->amOnPage('/wp-login.php');
$I->fillField('log', 'dpowers@rezon8.net');
$I->fillField('pwd', 'passB0t');
$I->click('Log In');
$I->see('Update Your Pet Owner Profile');