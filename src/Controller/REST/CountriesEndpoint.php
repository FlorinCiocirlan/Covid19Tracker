<?php


    namespace App\Controller\REST;
    use App\Service\ApiRequest;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class CountriesEndpoint extends AbstractController
    {
        /**
         * @Route("/api/countries" , name="app_countries_endpoint")
         * @param ApiRequest $request
         * @return JsonResponse
         */

        public function countriesEndpoint(ApiRequest $request) : JsonResponse{
            return new JsonResponse($request->fetchAll());
        }
    }