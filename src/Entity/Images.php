<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ImagesRepository")
 */
class Images
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelles;
       
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Images" ,inversedBy="images")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bete;
    public function getId()
    {
        return $this->id;
    }
    public function getLibelles(): ?string
    {
        return $this->Libelles;
    }
    public function setLibelles(string $Libelles): self
    {
        $this->Libelles = $Libelles;
        return $this;
    }
    /**
     * Get the value of bete
     */ 
    public function getBete()
    {
        return $this->bete;
    }
    /**
     * Set the value of bete
     *
     * @return  self
     */ 
    public function setBete($bete)
    {
        $this->bete = $bete;
        return $this;
    }
}