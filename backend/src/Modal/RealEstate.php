<?php
namespace App\Modal;

use App\Modal\RealEstateImage;
/**
 * Description of RealEstate
 *
 * @author Firas Bou Karroum
 */
class RealEstate {
  private $id;

  private $externalId;

  private $userExternalId;
  
  private $userName; 
  
  private $userEmail;

  private $userPhone;

  private $postalCode;

  private $settlement;

  private $street;

  private $syncAddress;
 
  private $type; 

  private $price;
 
  private $size;
  
  private $status;

  private $addType;
  
  private $rentability;

  private $new;

  private $description;

  private $buildYear;

  private $rooms;  

  private $floor;  

  private $state;

  private $heating;
  
  private $building;

  private $extras;
  
  private $terraceSize; 
  
  private $sight;

  private $siting;

  private $utilities;
  
  private $realEstateImages = [];
    
  function getId() {
      return $this->id;
  }

  function getExternalId() {
      return $this->externalId;
  }

  function getUserExternalId() {
      return $this->userExternalId;
  }

  function getUserName() {
      return $this->userName;
  }

  function getUserEmail() {
      return $this->userEmail;
  }

  function getUserPhone() {
      return $this->userPhone;
  }

  function getPostalCode() {
      return $this->postalCode;
  }

  function getSettlement() {
      return $this->settlement;
  }

  function getStreet() {
      return $this->street;
  }

  function getSyncAddress() {
      return $this->syncAddress;
  }

  function getType() {
      return $this->type;
  }

  function getPrice() {
      return $this->price;
  }

  function getSize() {
      return $this->size;
  }

  function getStatus() {
      return $this->status;
  }

  function getAddType() {
      return $this->addType;
  }

  function getRentability() {
      return $this->rentability;
  }

  function getNew() {
      return $this->new;
  }

  function getDescription() {
      return $this->description;
  }

  function getBuildYear() {
      return $this->buildYear;
  }

  function getRooms() {
      return $this->rooms;
  }

  function getFloor() {
      return $this->floor;
  }

  function getState() {
      return $this->state;
  }

  function getHeating() {
      return $this->heating;
  }

  function getBuilding() {
      return $this->building;
  }

  function getExtras() {
      return $this->extras;
  }

  function getTerraceSize() {
      return $this->terraceSize;
  }

  function getSight() {
      return $this->sight;
  }

  function getSiting() {
      return $this->siting;
  }

  function getUtilities() {
      return $this->utilities;
  }

  function getRealEstateImages() {
      return $this->realEstateImages;
  }

  function setId($id): void {
      $this->id = $id;
  }

  function setExternalId($externalId): void {
      $this->externalId = $externalId;
  }

  function setUserExternalId($userExternalId): void {
      $this->userExternalId = $userExternalId;
  }

  function setUserName($userName): void {
      $this->userName = $userName;
  }

  function setUserEmail($userEmail): void {
      $this->userEmail = $userEmail;
  }

  function setUserPhone($userPhone): void {
      $this->userPhone = $userPhone;
  }

  function setPostalCode($postalCode): void {
      $this->postalCode = $postalCode;
  }

  function setSettlement($settlement): void {
      $this->settlement = $settlement;
  }

  function setStreet($street): void {
      $this->street = $street;
  }

  function setSyncAddress($syncAddress): void {
      $this->syncAddress = $syncAddress;
  }

  function setType($type): void {
      $this->type = $type;
  }

  function setPrice($price): void {
      $this->price = $price;
  }

  function setSize($size): void {
      $this->size = $size;
  }

  function setStatus($status): void {
      $this->status = $status;
  }

  function setAddType($addType): void {
      $this->addType = $addType;
  }

  function setRentability($rentability): void {
      $this->rentability = $rentability;
  }

  function setNew($new): void {
      $this->new = $new;
  }

  function setDescription($description): void {
      $this->description = $description;
  }

  function setBuildYear($buildYear): void {
      $this->buildYear = $buildYear;
  }

  function setRooms($rooms): void {
      $this->rooms = $rooms;
  }

  function setFloor($floor): void {
      $this->floor = $floor;
  }

  function setState($state): void {
      $this->state = $state;
  }

  function setHeating($heating): void {
      $this->heating = $heating;
  }

  function setBuilding($building): void {
      $this->building = $building;
  }

  function setExtras($extras): void {
      $this->extras = $extras;
  }

  function setTerraceSize($terraceSize): void {
      $this->terraceSize = $terraceSize;
  }

  function setSight($sight): void {
      $this->sight = $sight;
  }

  function setSiting($siting): void {
      $this->siting = $siting;
  }

  function setUtilities($utilities): void {
      $this->utilities = $utilities;
  }

  function setRealEstateImages($realEstateImages): void {
      $this->realEstateImages = $realEstateImages;
  }
}
