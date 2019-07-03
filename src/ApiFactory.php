<?php

/*
 * This file is part of the wedocreatives/wrike-php-sdk package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace wedocreatives\WrikePhpSdk;

use wedocreatives\WrikePhpGuzzle\ClientFactory;
use wedocreatives\WrikePhpGuzzle\Transformer\ApiException\GuzzleTransformer;
use wedocreatives\WrikePhpLibrary\Api;
use wedocreatives\WrikePhpLibrary\Transformer\Response\Psr\ArrayBodyTransformer;

/**
 * Api Factory.
 */
class ApiFactory
{
    /**
     * @param string|null $accessToken
     *
     * @throws \InvalidArgumentException
     *
     * @return Api
     */
    public static function create($accessToken = '')
    {
        $client = ClientFactory::create();
        $responseTransformer = new ArrayBodyTransformer();
        $apiExceptionTransformer = new GuzzleTransformer();

        return new Api($client, $responseTransformer, $apiExceptionTransformer, $accessToken);
    }
}
