<?php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Modal\RealEstate;
use App\Modal\RealEstateImage;

class RealEstateService{
     
    private $api_url = "https://prod.rockhome.hu/gendocs/ingatlanok.xml";
    
    public function _construct() {
        
    }
    public function getRealEstatesList() {
        // Read entire file into string 
        $xmlfile = file_get_contents($this->api_url); 

        // Convert xml string into an object 
        $sxml = simplexml_load_string($xmlfile, 'SimpleXMLElement', LIBXML_NOCDATA);
        // Convert into json 
        $con = json_encode($sxml); 

        // Convert into associative array 
        $newArr = json_decode($con, true); 
        
        return $newArr;
    }
    public function getRealEstate(string $externalId='') {
        $result = "";
        // Read entire file into string 
        $xmlfile = file_get_contents($this->api_url); 

        // Convert xml string into an object 
        $sxml = simplexml_load_string($xmlfile, 'SimpleXMLElement', LIBXML_NOCDATA);
        
        foreach($sxml->children() as $estates) {
            if ($estates->external_id == $externalId) {
                $result = json_encode($estates);
                return $estates;
            }
        }
        return $result;
    }
 }