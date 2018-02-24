<?php

use Codeception\Example;

class MvcCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests

	/**
	 * @dataProvider pagesProvider
	 */
    public function testPresenter(AcceptanceTester $I, Example $data)
    {
    	$I->amOnPage($data['page']);
    	$I->see($data['content']);
    }

	public function pagesProvider() {
		return [
			[
				'page' => '/2.4/presenters',
				'content' => 'MVC aplikace & presentery'
			],
			[
				'page' => '/2.4/components',
				'content' => 'Komponenty'
			],
		];
    }
}
