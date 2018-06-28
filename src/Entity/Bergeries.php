<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\BergeriesRepository")
 */
class Bergeries
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
    private $Adresse;
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;
    
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
    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }
    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;
        return $this;
    }
    /**
     * Get the value of utilisateur
     */ 
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}