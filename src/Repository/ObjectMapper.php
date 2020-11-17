<?php


    namespace App\Repository;


    class ObjectMapper
    {
        protected string $modelClass = '';

        protected function mapObject(array $values){
            $object = new $this->modelClass();
            foreach ($values as $key=>$value){
                $mapperFunction = 'set'.ucwords($key);
                $object->{$mapperFunction}($value);
            }
            return $object;
        }

    }