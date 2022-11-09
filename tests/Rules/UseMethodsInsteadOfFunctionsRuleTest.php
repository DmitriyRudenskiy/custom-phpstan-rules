<?php declare(strict_types = 1);

namespace CustomPHPStanTests\Rules;

use CustomPHPStan\Rules\UseMethodsInsteadOfFunctionsRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

class UseMethodsInsteadOfFunctionsRuleTest extends RuleTestCase
{

	protected function getRule(): Rule
	{
		return new UseMethodsInsteadOfFunctionsRule();
	}

	public function testFail(): void
	{
		$this->analyse([__DIR__ . '/data/simple_fail.php'], [[]]);
	}

}
