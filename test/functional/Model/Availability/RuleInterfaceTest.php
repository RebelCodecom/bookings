<?php

namespace RebelCode\Bookings\FuncTest\Model\Availability;

use \RebelCode\Bookings\Model\Availability\RuleInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see RebelCode\Bookings\Model\Availability\RuleInterface}.
 *
 * @since [*next-version*]
 */
class RuleInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Bookings\\Model\\Availability\\RuleInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return RuleInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->canBook()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'RebelCode\\Bookings\\Validation\\BookingValidatorInterface', $subject,
            'Subject is not a valid instance.'
        );
    }
}