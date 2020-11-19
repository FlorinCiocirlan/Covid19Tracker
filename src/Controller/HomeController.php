<?php


    namespace App\Controller;

    use App\Entity\Country;
    use App\Service\ApiRequest;
    use App\Service\CountryHelper;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class HomeController extends AbstractController
    {
        /**
         * @Route ("/", name="app_home")
         * @param ApiRequest $apiRequest
         * @param CountryHelper $mapper
         * @return Response
         */

        public function index(ApiRequest $apiRequest, CountryHelper $mapper): Response {
            $countries = $mapper->getCountryList($apiRequest->fetchAll());

            return $this->render('home/home.html.twig',['info'=>$countries]);
        }



    }