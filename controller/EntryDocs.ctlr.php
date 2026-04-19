<?php
namespace BoomStick\Module\EntryDocs\Controller;
use BoomStick\Lib\Controller;
use BoomStick\Lib\Debug as D;

use BoomStick\Module\EntryDocs\Lib\EntryDocs as Hello;

class EntryDocs extends Controller
{
	public function index()
	{
		$this->currentPage = 'index';
		$this->bodyView = 'index';
		$this->render();
	}

	public function notFound()
	{
		$this->bodyView = 'not-found';
		header("HTTP/1.1 404 Not Found");
		$this->render();
	}

	public function entryModule()
	{
		$this->currentPage = 'entry-module';
		$this->bodyView = 'entry-module';
		$this->render();
	}

	public function coreLibrary()
	{
		$this->currentPage = 'core-library';
		$this->bodyView = 'core-library';
		$this->render();
	}
}
