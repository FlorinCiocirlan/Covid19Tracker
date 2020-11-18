<?php

    namespace App\Service;


    use App\Entity\Country;
    use App\Repository\ObjectMapper;


    class CountryHelper extends ObjectMapper
    {

        public function __construct(){
            $this->modelClass = Country::class;
        }
        public function getCountryObject(array $apiValues): Country
        {
            return $this->mapObject($apiValues);
        }

        public function getCountryList(array $countries) : array {
            foreach ($countries as &$country) {
                $country = $this->getCountryObject($country);
            }
            return $countries;
        }

    }