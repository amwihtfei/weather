<?php

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
            if ($city === 'cs')
            {
                throw new InvalidArgumentException('go');
            }


            print($city);

            return 'helloworld';
        }
    }