<?php

/*
 * This file is part of the man30/weather.
 *
 * (c) overtrue <i@man30.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace man30\weather;

use GuzzleHttp\Client;
    use man30\weather\Exceptions\InvalidArgumentException;

    class Weather
    {
        protected $key;

        protected $guzzleOptions = [];

        public function __construct($key)
        {
            $this->key = $key;
        }

        public function getHttpClient()
        {
            return new Client($this->guzzleOptions);
        }

        public function getWeather($city)
        {
            if ('cs' === $city) {
                throw new InvalidArgumentException('go');
            }

            echo $city;

            return 'helloworld';
        }
    }
