<?php
namespace BoomStick\Module\EntryDocs\Controller;
use BoomStick\Lib\Controller;
use BoomStick\Lib\Debug as D;

use BoomStick\Module\EntryDocs\Lib\EntryDocs as Hello;

class EntryDocs extends Controller
{
	public function index()
	{
		$lib = new Hello();

		$this->libSaysHello = $lib->hello();
		$this->bodyView = 'index';
		$this->render();
	}

	public function notFound()
	{
		$this->bodyView = 'not-found';
		header("HTTP/1.1 404 Not Found");
		$this->render();
	}
}
