<?php

/*
 * This file is part of the wedocreatives/wrike-php-sdk package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace wedocreatives\WrikePhpSdk\Tests;

/**
 * Test Case.
 */
abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $sourceClass;

    /**
     * @var mixed
     */
    protected $object;
}
