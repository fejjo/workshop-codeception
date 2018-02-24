<?php
/** @var \Codeception\Scenario $scenario */
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see('rychlé & bezpečné weby');
//$I->see('pomalé & nebezpečné weby');
//$I->wait(10);