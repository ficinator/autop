<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {

	/** @var Autop\UserRepository */
	private $userRepository;

	public function renderDefault() {
		$this->template->users = $this->userRepository->selectAll();
	}

	protected function startup() {
	    parent::startup();
	    $this->userRepository = $this->context->userRepository;
	}

}
