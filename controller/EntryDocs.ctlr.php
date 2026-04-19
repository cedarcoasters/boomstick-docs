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
		$this->pageTitle = 'Getting Started';
		$this->pageDescription = 'Get started with BoomStick PHP MVC framework. Step-by-step setup guide for rapid web application development. Alright you primitive screwheads, listen up!';
		$this->pagePath = '/';
		$this->bodyView = 'index';
		$this->render();
	}

	public function notFound()
	{
		$this->pageTitle = 'Page Not Found';
		$this->pageDescription = 'The requested page was not found.';
		$this->bodyView = 'not-found';
		header("HTTP/1.1 404 Not Found");
		$this->render();
	}

	public function entryModule()
	{
		$this->currentPage = 'entry-module';
		$this->pageTitle = 'Working With the Entry Module';
		$this->pageDescription = 'Learn how to add functionality to your BoomStick application using entry modules, controllers, views, and routes.';
		$this->pagePath = '/entry-module';
		$this->bodyView = 'entry-module';
		$this->render();
	}

	public function coreLibrary()
	{
		$this->currentPage = 'core-library';
		$this->pageTitle = 'Core Library Reference';
		$this->pageDescription = 'Comprehensive reference documentation for all BoomStick core libraries including Controller, Route, Request, Session, and Debug.';
		$this->pagePath = '/core-library';
		$this->bodyView = 'core-library';
		$this->render();
	}
}
