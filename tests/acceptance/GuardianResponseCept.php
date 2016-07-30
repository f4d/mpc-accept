<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Guardian Response');

$I->amOnPage('/guardian-response/?pgnumb=1&pnumb=1&pet_id=&pet_name=Nimh&pet_type=Rodent&user_email=dpowers@rezon8.net&prefix=%7Buser:prefix%7D&first_name=dpowers@rezon8.net&last_name=Powers&pguardian_email=dpowers@f4digital.com&pguardian_mobile_phone=(773)%20641-1561&pguardian_response=Accepted&pguardian_prefix=Mr.&pguardian_first_name=Donald&pguardian_last_name=Duck&eid=ozILpxqYrl3J2UoLK533%2F%2FGfV6SOOegHJD%2F%2BcjVBZXw%3D');
$I->see('Pet Guardian Nomination');
$I->fillField('input_15', '1');
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');

$I->amOnPage('/guardian-response/?pgnumb=2&pnumb=1&pet_id=&pet_name=Nimh&pet_type=Rodent&user_email=dpowers@rezon8.net&prefix=&first_name=&last_name=&pguardian_email=dpowers@found4digital.com&pguardian_response=Declined&pguardian_prefix=Mr.&pguardian_first_name=Dizzy&pguardian_last_name=Dukes&pguardian_mobile_phone=(773)%20609-2730&eid=ozILpxqYrl3J2UoLK533%2F%2FGfV6SOOegHJD%2F%2BcjVBZXw%3D');
$I->fillField('input_15', '0');
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');

/*

 */ 