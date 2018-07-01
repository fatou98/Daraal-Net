<?php
<<<<<<< HEAD
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
=======

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
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
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelles;
<<<<<<< HEAD
       
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Images" ,inversedBy="images")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bete;
=======

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Betes")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bete;

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getId()
    {
        return $this->id;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    public function getLibelles(): ?string
    {
        return $this->Libelles;
    }
<<<<<<< HEAD
    public function setLibelles(string $Libelles): self
    {
        $this->Libelles = $Libelles;
        return $this;
    }
=======

    public function setLibelles(string $Libelles): self
    {
        $this->Libelles = $Libelles;

        return $this;
    }

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Get the value of bete
     */ 
    public function getBete()
    {
        return $this->bete;
    }
<<<<<<< HEAD
=======

>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
    /**
     * Set the value of bete
     *
     * @return  self
     */ 
    public function setBete($bete)
    {
        $this->bete = $bete;
<<<<<<< HEAD
        return $this;
    }
}
=======

        return $this;
    }
}
>>>>>>> 2b1363964c25aa7d6b18bf99d5eba3e54b62b014
