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
         * @return Response
         */

        public function index(ApiRequest $apiRequest): Response {
            $mapper = new CountryHelper();
            $countries = $mapper->getCountryList($apiRequest->fetchAll());

//            $info = $apiRequest->fetchByName('Romania');
//            $country = $mapper->getCountryObject($info);


            return $this->render('home/home.html.twig',['info'=>$countries]);
        }



    }