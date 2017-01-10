<?php

namespace RebelCode\Bookings\Data\Test;

/**
 * Tests {@see \RebelCode\Bookings\Data\IdAwareDataObjectInterface}.
 *
 * @since [*next-version*]
 */
class IdAwareDataObjectInterfaceTest extends \Xpmock\TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\Bookings\Data\\IdAwareDataObjectInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \RebelCode\Bookings\Data\IdAwareDataObjectInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getId()
            ->getIdFieldName()
            ->getData()
            ->hasData()
            ->setData()
            ->unsData()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Bookings\Data\IdAwareDataObjectInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('RebelCode\\Bookings\\Data\\DataReadableInterface', $subject);
        $this->assertInstanceOf('RebelCode\\Bookings\\Data\\DataWriteableInterface', $subject);
        $this->assertInstanceOf('RebelCode\\Bookings\\Data\\IdAwareInterface', $subject);
    }

}
