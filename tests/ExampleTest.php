<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use TenantCloud\Skeleton\Example;

class ExampleTest extends TestCase
{
	public function testSomethingWorks(): void
	{
		/* @phpstan-ignore-next-line */
		$this->assertNotNull(new Example());
	}
}
