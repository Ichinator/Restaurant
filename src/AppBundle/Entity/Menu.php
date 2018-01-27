<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Menu
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuRepository")
 */
class Menu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Entrees")
     */

    private $entree;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Plats")
     */

    private $plat;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Desserts")
     */

    private $dessert;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Boissons")
     */

    private $boisson;




    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="menus_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean")
     * @var \DateTime
     */
    private $enabled = true;

// ...

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

// VERY IMPORTANT:
// It is required that at least one field changes if you are using Doctrine,
// otherwise the event listeners won't be called and the file is lost
        if ($image) {
// if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Menu
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Menu
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Menu
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set entree
     *
     * @param \AppBundle\Entity\Entrees $entree
     *
     * @return Menu
     */
    public function setEntree(\AppBundle\Entity\Entrees $entree = null)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get entree
     *
     * @return \AppBundle\Entity\Entrees
     */
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * Set plat
     *
     * @param \AppBundle\Entity\Plats $plat
     *
     * @return Menu
     */
    public function setPlat(\AppBundle\Entity\Plats $plat = null)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat
     *
     * @return \AppBundle\Entity\Plats
     */
    public function getPlat()
    {
        return $this->plat;
    }

    /**
     * Set dessert
     *
     * @param \AppBundle\Entity\Desserts $dessert
     *
     * @return Menu
     */
    public function setDessert(\AppBundle\Entity\Desserts $dessert = null)
    {
        $this->dessert = $dessert;

        return $this;
    }

    /**
     * Get dessert
     *
     * @return \AppBundle\Entity\Desserts
     */
    public function getDessert()
    {
        return $this->dessert;
    }

    /**
     * Set boisson
     *
     * @param \AppBundle\Entity\Boissons $boisson
     *
     * @return Menu
     */
    public function setBoisson(\AppBundle\Entity\Boissons $boisson = null)
    {
        $this->boisson = $boisson;

        return $this;
    }

    /**
     * Get boisson
     *
     * @return \AppBundle\Entity\Boissons
     */
    public function getBoisson()
    {
        return $this->boisson;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Menu
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
