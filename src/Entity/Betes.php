<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\BetesRepository")
 */
class Betes
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
    private $Nom;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DateNaissance;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Taille;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Poids;
    /**
     * @ORM\Column(type="text")
     */
    private $Description;
    /**
     * @ORM\Column(type="boolean")
     */
    private $Etat;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Bergeries")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bergerie;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Betes" ,  inversedBy="bete")
    * @ORM\JoinColumn(nullable=false)
    */
    private $images;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Races")
    * @ORM\JoinColumn(nullable=false)
    */
    private $race;
    public function getId()
    {
        return $this->id;
    }
    public function getNom(): ?string
    {
        return $this->Nom;
    }
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;
        return $this;
    }
    public function getDateNaissance(): ?string
    {
        return $this->DateNaissance;
    }
    public function setDateNaissance(string $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;
        return $this;
    }
    public function getTaille(): ?string
    {
        return $this->Taille;
    }
    public function setTaille(string $Taille): self
    {
        $this->Taille = $Taille;
        return $this;
    }
    public function getPoids(): ?string
    {
        return $this->Poids;
    }
    public function setPoids(string $Poids): self
    {
        $this->Poids = $Poids;
        return $this;
    }
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    public function setDescription(string $Description): self
    {
        $this->Description = $Description;
        return $this;
    }
    public function getEtat(): ?bool
    {
        return $this->Etat;
    }
    public function setEtat(bool $Etat): self
    {
        $this->Etat = $Etat;
        return $this;
    }
    /**
     * Get the value of race
     */ 
    public function getRace()
    {
        return $this->race;
    }
    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace($race)
    {
        $this->race = $race;
        return $this;
    }
    /**
     * Get the value of bergerie
     */ 
    public function getBergerie()
    {
        return $this->bergerie;
    }
    /**
     * Set the value of bergerie
     *
     * @return  self
     */ 
    public function setBergerie($bergerie)
    {
        $this->bergerie = $bergerie;
        return $this;
    }
}
