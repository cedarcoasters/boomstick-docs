<?php
namespace BoomStick\Module\EntryDocs\Lib;
use BoomStick\Lib\Debug as D;

class EntryDocs{
	public function __construct()
	{

	}

	public function hello()
	{
		return 'Hello, from '.__CLASS__.'::'.__FUNCTION__.'()';
	}
}
