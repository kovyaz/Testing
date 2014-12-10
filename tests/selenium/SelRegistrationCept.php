<?php
$I = new WebGuy($scenario);
$I->wantTo('Check registration on portal');
$I->executeInSelenium(function(\WebDriver $webdriver){
    $webdriver->get('http://temp-mail.ru');
    });
$I->waitForElement('//*[@id="email"]');
$email = $I->grabTextFrom('//*[@id="email"]');
$I->executeInSelenium(function(\WebDriver $webdriver){
    $webdriver->get('http://svoy.akovyazin.svoy');
});
$I->canSee('РЕГИСТРАЦИЯ','#svoyRegistration');
$I->click('#svoyRegistration');
$I->click('#popupRegButton');
$I->canSee('Укажи адрес электронной почты!','#popupNotice');
$I->fillField('.auth-form > div:nth-child(1) > div:nth-child(1) > input:nth-child(1)', $email);
$I->click('#popupRegButton');
$I->cansee('Введи пароль!','#popupNotice');
$I->fillField('.tf2','qwe123qwe');
$I->dontSeeCheckboxIsChecked('ins.chb5:nth-child(1)');
$I->click('#popupRegButton');
$I->cansee('Вы должны согласиться с правилами портала','#popupNotice');
$I->canSee('Я принимаю правила','label.agree');
$I->click('ins.chb5:nth-child(1)');
$I->click('#popupRegButton');
$I->canSee('ДОБРО ПОЖАЛОВАТЬ К СВОИМ!','div.pw_bar:nth-child(2) > div:nth-child(1)');
$I->canSee('Чтобы получить доступ ко всем функциям портала, перейди по ссылке, которую мы выслали на указанную почту.','div.pw_bar:nth-child(3) > div:nth-child(1)');
$I->canSee('.pw_close');
$I->executeInSelenium(function(\WebDriver $webdriver){
    $webdriver->get('http://temp-mail.ru');
});
$I->click('.title-subject');
$I->canSee('Регистрация на портале SVOY');
$I->click('.pm-text > p:nth-child(1) > a:nth-child(3)');
$I->canSeeInCurrentUrl('registered');