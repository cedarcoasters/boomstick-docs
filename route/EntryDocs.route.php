<?php
namespace BoomStick\Module\EntryDocs\Route;
use BoomStick\Lib\Route;
use BoomStick\Lib\Debug as D;

class EntryDocs extends Route
{
	public function __construct()
	{
		$this->module = str_replace('/route', '', __DIR__);
	}
}

$route = new EntryDocs();

$route->register('EntryDocs/notFound' ,'/not-found');

$route->register('EntryDocs/index' ,'/');

$route->register('EntryDocs/entryModule' ,'/entry-module');

$route->register('EntryDocs/coreLibrary' ,'/core-library');

$route->register('EntryDocs/aiTooling' ,'/ai-tooling');

