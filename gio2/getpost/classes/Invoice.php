<?php

declare(strict_types=1);

namespace classes;

class Invoice {
	public static function index() : string
	{
		return 'Invoices';
	}

	public static function create(): string
	{
		return 'Create Invoice';
	}
}