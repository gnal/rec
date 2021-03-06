<?php

namespace Rec\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Msi\AdminBundle\Entity\EntityRepository")
 */
class Artwork
{
    use \Msi\AdminBundle\Doctrine\Extension\Model\Timestampable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Sortable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Publishable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Uploadable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="ArtworkCategory", inversedBy="artworks")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $category;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description3;

    protected $imageFile;

    public function getDescription2()
    {
        return $this->description2;
    }

    public function setDescription2($description2)
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getDescription3()
    {
        return $this->description3;
    }

    public function setDescription3($description3)
    {
        $this->description3 = $description3;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getUploadFields()
    {
        return ['image'];
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
        $this->updatedAt = new \DateTime;

        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->image;
    }

    public function getId()
    {
        return $this->id;
    }
}
