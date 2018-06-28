<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandesRepository")
 */
class Commandes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Betes")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bete;
    /**
     * @ORM\Column(type="boolean")
     */
    private $Etat;
    public function getId()
    {
        return $this->id;
    }
    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }
    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;
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