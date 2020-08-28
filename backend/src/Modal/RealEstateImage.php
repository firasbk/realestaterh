<?php
namespace App\Modal;

/**
 * Description of RealEstateImage
 *
 * @author Firas Bou Karroum
 */
class RealEstateImage {
  private $id;

  private $imageUrl;

  private $description;
    
  function getId() {
      return $this->id;
  }

  function getImageUrl() {
      return $this->imageUrl;
  }

  function getDescription() {
      return $this->description;
  }

  function setId($id): void {
      $this->id = $id;
  }

  function setImageUrl($imageUrl): void {
      $this->imageUrl = $imageUrl;
  }

  function setDescription($description): void {
      $this->description = $description;
  }

}
