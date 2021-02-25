<?php


    namespace App\Controller\REST;

    use App\Service\ApiRequest;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class CountryEndpoint extends AbstractController
    {
        /**
         * @Route ("/api/country/{name}", name="app_country_endpoint")
         * @param string $name
         * @param ApiRequest $request
         * @return JsonResponse
         */

        public function endpoint(string $name , ApiRequest $request) {

            return new JsonResponse($request->fetchByName($name));
        }
    }