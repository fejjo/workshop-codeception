<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */

use Nette\Application as NA,
	Nette\Security as NS;


/**
 * Sign in/out presenters.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class SignPresenter extends BasePresenter
{


	/**
	 * Sign in form component factory.
	 * @return Nette\Application\AppForm
	 */
	protected function createComponentSignInForm()
	{
		$form = new NA\AppForm;
		$form->addText('username', 'Username:')
			->setRequired('Please provide a username.');

		$form->addPassword('password', 'Password:')
			->setRequired('Please provide a password.');

		$form->addCheckbox('remember', 'Remember me on this computer');

		$form->addSubmit('send', 'Sign in');

		$form->onSubmit[] = callback($this, 'signInFormSubmitted');
		return $form;
	}



	public function signInFormSubmitted($form)
	{
		try {
			$values = $form->getValues();
			if ($values['remember']) {
				$this->getUser()->setExpiration('+ 14 days', FALSE);
			} else {
				$this->getUser()->setExpiration('+ 20 minutes', TRUE);
			}
			$this->getUser()->login($values['username'], $values['password']);
			$this->redirect('Homepage:');

		} catch (NS\AuthenticationException $e) {
			$form->addError($e->getMessage());
		}
	}



	public function actionOut()
	{
		$this->getUser()->logout();
		$this->flashMessage('You have been signed out.');
		$this->redirect('in');
	}

}