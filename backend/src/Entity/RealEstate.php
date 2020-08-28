<?php
 namespace App\Entity;
 
 use Doctrine\ORM\Mapping as ORM;
 use Symfony\Component\Validator\Constraints as Assert;
 /**
  * @ORM\Entity
  * @ORM\Table(name="real_estate")
  * @ORM\HasLifecycleCallbacks()
  */
 class RealEstate {
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=100)
   *
   */
  private $external_id;
  
  /**
   * @ORM\Column(type="integer")
   *
   */
  private $user_external_id;
  
  /**
   * @ORM\Column(type="string", length=255)
   *
   */
  private $user_name; 
  
  
  /**
   * @ORM\Column(type="string", length=255)
   *
   */
  private $user_email;
  
   /**
   * @ORM\Column(type="string", length=100)
   *
   */
  private $user_phone;
  
  /**
   * @ORM\Column(type="integer")
   *
   */
  private $postal_code;
  
  /**
   * @ORM\Column(type="text")
   */
  private $settlement;

  /**
   * @ORM\Column(type="text")
   */
  private $street;
  
  /**
   * @ORM\Column(type="integer")
   *
   */
  private $sync_address;
 
   /**
   * @ORM\Column(type="text")
   */
  private $type; 

  /**
   * @ORM\Column(type="integer")
   *
   */
  private $price;
 
  /**
   * @ORM\Column(type="integer")
   *
   */
  private $size;
  
  /**
   * @ORM\Column(type="string", length=100)
   *
   */
  private $status;
  
  /**
   * @ORM\Column(type="string", length=100)
   *
   */
  private $add_type;
  
  /**
   * @ORM\Column(type="integer")
   *
   */
  private $rentability;

  /**
   * @ORM\Column(type="integer")
   *
   */
  private $new;
  
   /**
   * @ORM\Column(type="text")
   */
  private $description;

  /**
   * @ORM\Column(type="integer")
   *
   */
  private $build_year;
  
  /**
   * @ORM\Column(type="integer")
   *
   */
  private $rooms;  
  
   /**
   * @ORM\Column(type="text")
   */
  private $floor;  
  
   /**
   * @ORM\Column(type="text")
   */
  private $state;

   /**
   * @ORM\Column(type="text")
   */
  private $heating;

   /**
   * @ORM\Column(type="text")
   */
  private $building;

   /**
   * @ORM\Column(type="text")
   */
  private $extras;
  
  /**
   * @ORM\Column(type="integer")
   *
   */
  private $terrace_size; 
  
   /**
   * @ORM\Column(type="text")
   */
  private $sight;

   /**
   * @ORM\Column(type="text")
   */
  private $siting;

   /**
   * @ORM\Column(type="text")
   */
  private $utilities;
  
   /**
     * @ORM\OneToMany(targetEntity="App\Entity\RealEstateImage", mappedBy="realEstate")
     */
  private $realEstateImages;
    
  function getId() {
      return $this->id;
  }

  function getExternal_id() {
      return $this->external_id;
  }

  function getUser_external_id() {
      return $this->user_external_id;
  }

  function getUser_name() {
      return $this->user_name;
  }

  function getUser_email() {
      return $this->user_email;
  }

  function getUser_phone() {
      return $this->user_phone;
  }

  function getPostal_code() {
      return $this->postal_code;
  }

  function getSettlement() {
      return $this->settlement;
  }

  function getStreet() {
      return $this->street;
  }

  function getSync_address() {
      return $this->sync_address;
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

  function getAdd_type() {
      return $this->add_type;
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

  function getBuild_year() {
      return $this->build_year;
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

  function getTerrace_size() {
      return $this->terrace_size;
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

  function setExternal_id($external_id): void {
      $this->external_id = $external_id;
  }

  function setUser_external_id($user_external_id): void {
      $this->user_external_id = $user_external_id;
  }

  function setUser_name($user_name): void {
      $this->user_name = $user_name;
  }

  function setUser_email($user_email): void {
      $this->user_email = $user_email;
  }

  function setUser_phone($user_phone): void {
      $this->user_phone = $user_phone;
  }

  function setPostal_code($postal_code): void {
      $this->postal_code = $postal_code;
  }

  function setSettlement($settlement): void {
      $this->settlement = $settlement;
  }

  function setStreet($street): void {
      $this->street = $street;
  }

  function setSync_address($sync_address): void {
      $this->sync_address = $sync_address;
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

  function setAdd_type($add_type): void {
      $this->add_type = $add_type;
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

  function setBuild_year($build_year): void {
      $this->build_year = $build_year;
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

  function setTerrace_size($terrace_size): void {
      $this->terrace_size = $terrace_size;
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

  /**
   * @throws \Exception
   * @ORM\PrePersist()
   */
  public function beforeSave(){

   $this->create_date = new \DateTime('now', new \DateTimeZone('Africa/Casablanca'));
  }

}