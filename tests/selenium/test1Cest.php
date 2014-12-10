<?php
use \SeleniumTester;

class test1Cest
{
    public function _before(SeleniumTester $I)
    {
    }

    public function _after(SeleniumTester $I)
    {
    }

    // tests
    public function tryToTest(SeleniumTester $I)
    {
	$I->wantTo("testCest");
	$I->amOnPage("/");
	$I->see("Музыка");
	$I->click("Музыка");
	$I->see("Жанры", "header > span");
    }
}