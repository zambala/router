<?php

namespace classes;

class RouteNotFoundException extends \Exception
{
	protected $message = '404 not found';
}