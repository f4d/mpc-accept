<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('ensure that frontpage works');
  $I->amOnPage('/');
  $I->see('Million Pet Challenge');