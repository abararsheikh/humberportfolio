<?php 
$I = new AcceptanceTester($scenario);
$I->am('student');
$I->wantTo('Login');
$I->amOnPage('/');
$I->see('Welcome to Portfolio Tool');
$I->fillField('email', 'adam.potter@gmail.com');
$I->fillField('password', '123');
$I->click('Login');
$I->see('Welcome : Adam');
$I->seeLink('Logout');