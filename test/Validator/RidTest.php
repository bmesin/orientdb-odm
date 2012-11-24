<?php

/**
 * RidTest
 *
 * @package    Doctrine\OrientDB
 * @subpackage Test
 * @author     Alessandro Nadalin <alessandro.nadalin@gmail.com>
 * @author     David Funaro <ing.davidino@gmail.com>
 * @version
 */

namespace test;

use test\PHPUnit\TestCase;
use Doctrine\OrientDB\Validator\Rid;


class RidTest extends TestCase
{
    public function setup()
    {
        $this->validator = new Rid();
    }

    public function testTheValidatorAcceptsAValidRid()
    {
        $this->assertEquals('#1:1', $this->validator->check('1:1'));
    }

    public function testTheValidatorAcceptsAValidPrefixedRid()
    {
        $this->assertEquals('#1:1', $this->validator->check('#1:1'));
    }

    /**
     * @expectedException Doctrine\OrientDB\ValidationException
     */
    public function testTheValidatorDoesNotAcceptsStringsOnly()
    {
        $this->validator->check('hola');
    }

    /**
     * @expectedException Doctrine\OrientDB\ValidationException
     */
    public function testTheValidatorDoesNotAcceptsIntegersOnly()
    {
        $this->validator->check('11');
    }

    /**
     * @expectedException Doctrine\OrientDB\ValidationException
     */
    public function testTheValidatorDoesNotAcceptsRidsWithMultiplesPrefixes()
    {
        $this->validator->check('##1:1');
    }

    /**
     * @expectedException Doctrine\OrientDB\ValidationException
     */
    public function testEmptyRid()
    {
        $this->validator->check('');
    }
}
