<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Guardian Response');

$I->amOnPage('/guardian-response/?pgnumb=1&pnumb=1&pet_id=1896893806&pet_name=Araxara&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@f4digital.com&pguardian_mobile_phone=(773)%20641-1561&pguardian_response=1&pguardian_prefix=Mr.&pguardian_first_name=Alef&pguardian_last_name=Anderson&eid=fwtBo5xPpCmHviQ4CHXsaLY56jmwFHYhM8%2B0aXz88dg%3D');
$I->see('Pet Guardian Nomination');
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');

$I->amOnPage('/guardian-response/?pgnumb=2&pnumb=1&pet_id=1896893806&pet_name=Araxara&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@found4digital.com&pguardian_response=d&pguardian_prefix=Mrs.&pguardian_first_name=Bet&pguardian_last_name=Bagelson&pguardian_mobile_phone=(773)%20609-2730&eid=fwtBo5xPpCmHviQ4CHXsaLY56jmwFHYhM8%2B0aXz88dg%3D');
$I->click('Submit Response');
$I->see('We are sorry to hear that you cannot be a guardian');

$response = 'd';
$I->amOnPage("/guardian-response/?pgnumb=3&pnumb=1&pet_id=1896893806&pet_name=Araxara&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@rezon8.net&pguardian_response={$response}&pguardian_prefix=Mr.&pguardian_first_name=P1G3&pguardian_last_name=Tested&pguardian_mobile_phone=7736092730&eid=khR5tFTWgW8JRA0KgZNxozT9wPUuyAwfVFhFZ5jzhIM%3D");
$I->click('Submit Response');
$I->see('We are sorry to hear that you cannot be a guardian');

$response = '1';
$I->amOnPage("/guardian-response/?pgnumb=4&pnumb=1&pet_id=1896893806&pet_name=Araxara&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@f4digital.com&pguardian_response={$response}&pguardian_prefix=Ms.&pguardian_first_name=P1G4&pguardian_last_name=Tester&pguardian_mobile_phone=7736411561&eid=khR5tFTWgW8JRA0KgZNxozT9wPUuyAwfVFhFZ5jzhIM%3D");
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');

$response = '1';
$I->amOnPage("/guardian-response/?pgnumb=5&pnumb=1&pet_id=1896893806&pet_name=Araxara&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@found4digital.com&pguardian_response={$response}&pguardian_prefix=Dr.&pguardian_first_name=P1G5&pguardian_last_name=Testing&pguardian_mobile_phone=7736092730&eid=khR5tFTWgW8JRA0KgZNxozT9wPUuyAwfVFhFZ5jzhIM%3D");
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');
 /*
 


  */
 
$I->amOnPage('/guardian-response/?pgnumb=1&pnumb=5&pet_id=5565838494&pet_name=Pentapet&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@f4digital.com&pguardian_mobile_phone=(773)%20641-1561&pguardian_response=1&pguardian_prefix=Mr.&pguardian_first_name=P5G1&pguardian_last_name=Anderson&eid=fwtBo5xPpCmHviQ4CHXsaLY56jmwFHYhM8%2B0aXz88dg%3D');
$I->see('Pet Guardian Nomination');
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');

$I->amOnPage('/guardian-response/?pgnumb=2&pnumb=5&pet_id=5565838494&pet_name=Pentapet&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@found4digital.com&pguardian_response=d&pguardian_prefix=Mrs.&pguardian_first_name=P5G2&pguardian_last_name=Bagelson&pguardian_mobile_phone=(773)%20609-2730&eid=fwtBo5xPpCmHviQ4CHXsaLY56jmwFHYhM8%2B0aXz88dg%3D');
$I->click('Submit Response');
$I->see('We are sorry to hear that you cannot be a guardian');

$response = 'd';
$I->amOnPage("/guardian-response/?pgnumb=3&pnumb=5&pet_id=5565838494&pet_name=Pentapet&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@rezon8.net&pguardian_response={$response}&pguardian_prefix=Mr.&pguardian_first_name=P5G3&pguardian_last_name=Tested&pguardian_mobile_phone=7736092730&eid=khR5tFTWgW8JRA0KgZNxozT9wPUuyAwfVFhFZ5jzhIM%3D");
$I->click('Submit Response');
$I->see('We are sorry to hear that you cannot be a guardian');

$response = '1';
$I->amOnPage("/guardian-response/?pgnumb=4&pnumb=5&pet_id=5565838494&pet_name=Pentapet&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@f4digital.com&pguardian_response={$response}&pguardian_prefix=Ms.&pguardian_first_name=P5G4&pguardian_last_name=Tester&pguardian_mobile_phone=7736411561&eid=khR5tFTWgW8JRA0KgZNxozT9wPUuyAwfVFhFZ5jzhIM%3D");
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');

$response = '1';
$I->amOnPage("/guardian-response/?pgnumb=5&pnumb=5&pet_id=5565838494&pet_name=Pentapet&pet_type=Bird&user_email=dpowers@rezon8.net&prefix=Mr.&first_name=Alpha&last_name=Beta&pguardian_email=dpowers@found4digital.com&pguardian_response={$response}&pguardian_prefix=Dr.&pguardian_first_name=P5G5&pguardian_last_name=Testing&pguardian_mobile_phone=7736092730&eid=khR5tFTWgW8JRA0KgZNxozT9wPUuyAwfVFhFZ5jzhIM%3D");
$I->click('Submit Response');
$I->see('Congratulations on becoming a PetGuardian!');
/*

 */ 