<?php
$I = new SeleniumTester($scenario);
$I->wantTo('Login');
$I->amOnPage('/');
$I->see('Войти');
$I->grabCookie('__SVOY_LOGGER__');
$I->grabCookie('km_ai');
$I->sendAjaxPostRequest('auth/login', array('template' => 'auth'));
$I->click('Войти');
$I->fillField('login','test.72@list.ru');
$I->fillField('password','qwe123qwe');
$I->click('Войти');
$I->see('test login 1 ...');
