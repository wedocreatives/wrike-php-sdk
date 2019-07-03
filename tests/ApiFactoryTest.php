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

use wedocreatives\WrikePhpLibrary\Api;
use wedocreatives\WrikePhpLibrary\ApiInterface;
use wedocreatives\WrikePhpLibrary\ImmutableApiInterface;
use wedocreatives\WrikePhpSdk\ApiFactory;

/**
 * Api Factory Test.
 */
class ApiFactoryTest extends TestCase
{
    const TOKEN = 'properToken';

    public function test_create()
    {
        $api = ApiFactory::create();
        self::assertInstanceOf(Api::class, $api);
        self::assertInstanceOf(ApiInterface::class, $api);
        self::assertInstanceOf(ImmutableApiInterface::class, $api);
    }

    /**
     * @return array
     */
    public function tokenProvider()
    {
        return [
            // [token, isValid]
            ['properToken', true],
            ['', true],
            [new \stdClass(), false],
            [null, false],
        ];
    }

    /**
     * @param mixed $token
     * @param bool  $isValid
     *
     * @dataProvider tokenProvider
     */
    public function test_createWithAccessToken($token, $isValid)
    {
        $exceptionOccurred = false;

        try {
            ApiFactory::create($token);
        } catch (\Exception $e) {
            $exceptionOccurred = true;
        }

        if (false === $isValid) {
            self::assertTrue($exceptionOccurred);
        }
        if (true === $isValid) {
            self::assertFalse($exceptionOccurred);
        }
    }
}
