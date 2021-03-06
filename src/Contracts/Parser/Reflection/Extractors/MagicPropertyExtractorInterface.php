<?php

/**
 * This file is part of the ApiGen (http://apigen.org)
 *
 * For the full copyright and license information, please view
 * the file LICENSE that was distributed with this source code.
 */

namespace ApiGen\Contracts\Parser\Reflection\Extractors;

use ApiGen\Contracts\Parser\Reflection\ClassReflectionInterface;
use ApiGen\Contracts\Parser\Reflection\Magic\MagicPropertyReflectionInterface;


interface MagicPropertyExtractorInterface
{

	/**
	 * @return MagicPropertyReflectionInterface[]
	 */
	function extractFromClass(ClassReflectionInterface $reflectionClass);

}
