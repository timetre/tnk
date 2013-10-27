<?php

class AdminOrdersController extends AdminOrdersControllerCore
{
	public function __construct()
    {
		parent::__construct();
		$this->addRowAction('delete');		
	}
}

