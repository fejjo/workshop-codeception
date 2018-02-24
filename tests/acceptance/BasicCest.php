<?php


use Page\Main;

class BasicCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
//    	$I->resizeWindow(400, 800);
    	$I->wantTo('click through website');
    	$I->amOnPage('/');
    	$I->see('weby', '/html/body/section[1]/div/div[1]/h1');
    	$text = $I->grabTextFrom('body > section.hp-banner > div > div.hp-banner-text > h1');
    	$I->seeNumberOfElements('body > section.hp-banner > div > div.hp-banner-text > div.hp-banner-text3', 1);
    	$I->seeNumberOfElements('/html/body/section[1]/div/div[1]/div[contains(@class, "hp-banner-")]', 2);
    	$I->seeNumberOfElements('/html/body//div[contains(text(), "Nette je sada")]', 1);
    	$I->click('body > section.hp-banner > div > div.hp-tiles > a.hp-tile-framework.hp-tile');
    	$I->seeInCurrentUrl('/cs/2.4/');
    	$I->fillField(Main::$searchField, 'presenter');
    	$I->click(Main::$searchButton);
    	$I->dontSeeInCurrentUrl('/cs/2.4/');
    	$this->doSomeMagic($I);
//    	$I->wait(1);

//
//	    $I->fillField('něco', 'name');
//	    $wysiwygJs = 'tinyMCE.activeEditor.setContent("'.str_replace(["\r\n", "\r", "\n"], '<br />', 'text').'");';
//	    $I->executeJS($wysiwygJs);
//	    $I->executeJS('tinyMCE.activeEditor.save();');


    }

	private function doSomeMagic(AcceptanceTester $I) {

    }
}
