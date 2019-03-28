<?php

    namespace man30\Weather;

    use GuzzleHttp\Client;
    use man30\Weather\Exceptions\InvalidArgumentException;

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
            if ($city === 'cs')
            {
                throw new InvalidArgumentException('go');
            }


            print($city);

            return 'helloworld';
        }
    }