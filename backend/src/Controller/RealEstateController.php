<?php

 namespace App\Controller;


 use App\Modal\RealEstate;
 use App\Modal\RealEstateImage;
 use App\Services\RealEstateService; 
 
 use Doctrine\ORM\EntityManagerInterface;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\Routing\Annotation\Route;

 /**
  * Class RealEstateController
  * @package App\Controller
  * @Route("/api", name="realestate_api")
  */
 class RealEstateController extends AbstractController
 {
  /**
   * @param RealEstateService $realEstateService
   * @return JsonResponse
   * @Route("/realestate", name="realestates_list", methods={"GET"})
   */
  public function getRealEstatesList(RealEstateService $realEstateService){
   $data = $realEstateService->getRealEstatesList();
   return $this->response($data);
  }


  /**   
   * @param $id
   * @param RealEstateService $realEstateService
   * @return JsonResponse
   * @Route("/realestate/{id}", name="realestate_get", methods={"GET"})
   */
  public function getRealEstateDetails($id, RealEstateService $realEstateService){
   $realEstate = $realEstateService->getRealEstate($id);

   if (!$realEstate){
    $data = [
     'status' => 404,
     'errors' => "RealEstate not found",
    ];
    return $this->response($data, 404);
   }
   return $this->response($realEstate);
  }

  /**
   * Returns a JSON response
   *
   * @param array $data
   * @param $status
   * @param array $headers
   * @return JsonResponse
   */
  public function response($data, $status = 200, $headers = [])
  {
   return new JsonResponse($data, $status, $headers);
  }

 }

