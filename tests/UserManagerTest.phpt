<?php

declare(strict_types=1);

namespace Test;

use App\Model\UserManager;
use Nette;
use Tester;
use Tester\Assert;

$container = require __DIR__ . '/bootstrap.php';


class ExampleTest extends Tester\TestCase
{
	/** @var Nette\DI\Container */
	private $container;

	/** @var UserManager */
	private $manager;

	public function __construct(Nette\DI\Container $container)
	{
		$this->container = $container;
	}


	public function setUp()
	{
		$this->manager = $this->container->getByType(UserManager::class);
	}


	public function testAddUser()
	{
//		arrange
//		assert
		Assert::false($this->manager->hasUser('tester 1'));
//      act
		$this->manager->add('tester 1', 'tester@seznam.cz', 'slabeHesloNepouzivat');
//		assert
		Assert::true($this->manager->hasUser('tester 1'));
	}
}


$test = new ExampleTest($container);
$test->run();
