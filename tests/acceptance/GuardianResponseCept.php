<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Guardian Response');

$I->amOnPage('/guardian-response/?pgnumb=1&pnumb=1&pet_id=1896893806&pet_name=Araxara&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@f4digital.com&pguardian_mobile_phone=(773)%20641-1561&pguardian_response=d&pguardian_prefix=Mr.&pguardian_first_name=Alef&pguardian_last_name=Anderson&eid=fwtBo5xPpCmHviQ4CHXsaLY56jmwFHYhM8%2B0aXz88dg%3D');
$I->see('Pet Guardian Nomination');
$I->click('Submit Response');
$I->see('We are sorry to hear that you cannot be a guardian ');

$I->amOnPage('/guardian-response/?pgnumb=2&pnumb=1&pet_id=1896893806&pet_name=Araxara&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@found4digital.com&pguardian_response=1&pguardian_prefix=Mrs.&pguardian_first_name=Bet&pguardian_last_name=Bagelson&pguardian_mobile_phone=(773)%20609-2730&eid=fwtBo5xPpCmHviQ4CHXsaLY56jmwFHYhM8%2B0aXz88dg%3D');
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');

/*

 */ 