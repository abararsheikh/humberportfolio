<?php 
$I = new AcceptanceTester($scenario);
$I->am('admin');
$I->wantTo('login');
$I->amOnPage('/admin');
$I->see('Email');
$I->see('Password');
$I->fillField('email', 'admin@gmail.com');
$I->fillField('password', '123');
$I->click('Login');
$I->see('Overview');
