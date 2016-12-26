<?php

namespace Dhii\Evaluable\Test;

use \Dhii\Evaluable\EvaluationExceptionInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Evaluable\EvaluationExceptionInterface}.
 *
 * @since [*next-version*]
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
     * @since [*next-version*]
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
     * @covers \Dhii\Evaluable\EvaluationExceptionInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
