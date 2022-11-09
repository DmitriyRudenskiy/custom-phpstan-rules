<?php declare(strict_types = 1);

namespace CustomPHPStan\Rules;

use PhpParser\Node;
use PhpParser\Node\Stmt\Function_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;

/**
 * @implements \PHPStan\Rules\Rule<\PhpParser\Node\Stmt\Function_>
 */
class UseMethodsInsteadOfFunctionsRule implements Rule
{

	public function getNodeType(): string
	{
		return Function_::class;
	}

	/**
	 * @param \PhpParser\Node\Stmt\ClassMethod $node
	 * @param \PHPStan\Analyser\Scope $scope
	 * @return string[]
	 */
	public function processNode(Node $node, Scope $scope): array
	{
		foreach ($node->getParams() as $value) {
			/** @var \PhpParser\Node\Param $value */

			return ['Error'];

		}

		return [];
	}

}
