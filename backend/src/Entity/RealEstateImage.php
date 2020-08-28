<?php
 namespace App\Entity;
 
 use Doctrine\ORM\Mapping as ORM;
 use Symfony\Component\Validator\Constraints as Assert;
 /**
  * @ORM\Entity
  * @ORM\Table(name="real_estate_image")
  * @ORM\HasLifecycleCallbacks()
  */
 class RealEstateImage {
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="text")
   *
   */
  private $src;

  /**
   * @ORM\Column(type="text")
   */
  private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RealEstate", inversedBy="realEstateImage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $realEstate;
    function getId() {
        return $this->id;
    }

    function getSrc() {
        return $this->src;
    }

    function getDescription() {
        return $this->description;
    }

    function getRealEstate() {
        return $this->realEstate;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setSrc($src): void {
        $this->src = $src;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setRealEstate($realEstate): void {
        $this->realEstate = $realEstate;
    }
    
    /**
   * @throws \Exception
   * @ORM\PrePersist()
   */
  public function beforeSave(){

   $this->create_date = new \DateTime('now', new \DateTimeZone('Africa/Casablanca'));
  }

}