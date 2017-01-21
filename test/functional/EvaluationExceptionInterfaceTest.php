<?php

namespace Dhii\Evaluable\Test;

use Dhii\Evaluable\EvaluationExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Evaluable\EvaluationExceptionInterface}.
 *
 * @since 0.1
 */
class EvaluationExceptionInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Evaluable\\EvaluationExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return EvaluationExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
