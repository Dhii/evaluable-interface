<?php

namespace Dhii\Evaluable;

use Dhii\Data\ValueAwareInterface;

/**
 * Any object that can be evaluated.
 *
 * @since [*next-version*]
 */
interface EvaluableInterface
{
    /**
     * Gets the evaluated result.
     *
     * @param ValueAwareInterface $ctx [optional] A contextual value. Default: null
     *
     * @return mixed The evaluated result.
     *
     * @throws EvaluationExceptionInterface If an error was encountered during evaluation.
     */
    public function evaluate(ValueAwareInterface $ctx = null);
}
