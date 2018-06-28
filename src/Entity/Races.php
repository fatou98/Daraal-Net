<?php
<<<<<<< HEAD
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
=======

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
/**
 * @ORM\Entity(repositoryClass="App\Repository\RacesRepository")
 */
class Races
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelle;
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getId()
    {
        return $this->id;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }
<<<<<<< HEAD
    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;
        return $this;
    }
}
=======

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }
}
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
