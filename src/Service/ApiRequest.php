<?php


    namespace App\Service;

    use Symfony\Contracts\HttpClient\HttpClientInterface;

    class ApiRequest
    {

        private HttpClientInterface $client;

        public function __construct(HttpClientInterface $client)
        {
            $this->client = $client;
        }

        public function fetch(string $endpoint, $parameter)
        {
            $url = '';
            if (!empty($parameter)) {
                $url = $endpoint.'/'.$parameter;
            } else {
                $url = $endpoint;
            }

                $response = $this->client->request('GET',$url);
                $statusCode = $response->getStatusCode();
                $contentType = $response->getHeaders();
                $content = $response->getContent();
                $content = $response->toArray();

                return $content;

        }

        public function fetchGeneralInfo(){
            $endpoint = 'https://coronavirus-19-api.herokuapp.com/all';
            $parameter = '';

            return $this->fetch($endpoint,$parameter);
        }

        public function fetchAll(){
            $endpoint = 'https://coronavirus-19-api.herokuapp.com/countries';
            $parameter = '';

            return $this->fetch($endpoint,$parameter);
        }

        public function fetchByName(string $name){
            $endpoint = 'https://coronavirus-19-api.herokuapp.com/countries';

            return $this->fetch($endpoint,$name);
        }

    }