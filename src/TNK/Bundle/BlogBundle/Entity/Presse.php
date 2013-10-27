<?php

namespace TNK\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Presse
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="TNK\Bundle\BlogBundle\Entity\PresseRepository")
 */
class Presse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="sousTitre", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $sousTitre;

    /**
     * @var datetime
     * @ORM\Column(name="dateModification", type="datetime", nullable=false)
     * @Assert\NotBlank()
     */
    private $dateModification;

    /**
     * @var string
     *
     * @ORM\Column(name="vignette", type="string", length=255)
     */
    private $vignette;
    protected $fileVignette;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;
    protected $fileImage;
    

    public function __construct() {
        $this->dateModification = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Presse
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }


    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Presse
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
    
        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }


    /**
     * Set fileVignette
     *
     * @param string $fileVignette
     */
    public function setFileVignette($fileVignette)
    {
        $this->fileVignette = $fileVignette;
    
        return $this;
    }

    /**
     * Get fileVignette
     *
     * @return string 
     */
    public function getFileVignette()
    {
        return $this->fileVignette;
    }

    /**
     * Set fileImage
     *
     * @param string $fileImage
     */
    public function setFileImage($fileImage)
    {
        $this->fileImage = $fileImage;
    
        return $this;
    }

    /**
     * Get fileImage
     *
     * @return string 
     */
    public function getFileImage()
    {
        return $this->fileImage;
    }

    /**
     * Set sousTitre
     *
     * @param string $sousTitre
     * @return Presse
     */
    public function setSousTitre($sousTitre)
    {
        $this->sousTitre = $sousTitre;
    
        return $this;
    }

    /**
     * Get sousTitre
     *
     * @return string 
     */
    public function getSousTitre()
    {
        return $this->sousTitre;
    }

    /**
     * Set vignette
     *
     * @param string $vignette
     * @return Presse
     */
    public function setVignette($vignette)
    {
        $this->vignette = $vignette;
    
        return $this;
    }

    /**
     * Get vignette
     *
     * @return string 
     */
    public function getVignette()
    {
        return $this->vignette;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Presse
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }


    protected function getUploadDir()
    {
        return 'uploads/presse';
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    public function getAbsolutePathImage()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }

    public function getAbsolutePathVignette()
    {
        return null === $this->vignette ? null : $this->getUploadRootDir().'/'.$this->vignette;
    }

    public function getWebPathImage()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    public function getWebPathVignette()
    {
        return null === $this->vignette ? null : $this->getUploadDir().'/'.$this->vignette;
    }

    public function getFullWebPathImage()
    {
        return sprintf("/%s", $this->getWebPathImage());
    }

    public function getFullWebPathVignette()
    {
        return sprintf("/%s", $this->getWebPathVignette());
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->fileImage) {
            // faites ce que vous voulez pour générer un nom unique
            $this->image = sha1(uniqid(mt_rand(), true)).'.'.$this->fileImage->guessExtension();
        }

        if (null !== $this->fileVignette) {
            // faites ce que vous voulez pour générer un nom unique
            $this->vignette = sha1(uniqid(mt_rand(), true)).'.'.$this->fileVignette->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->fileVignette) {
            return;
        }

        if (null === $this->fileImage) {
            return;
        }

        $this->fileVignette->move($this->getUploadRootDir(), $this->vignette);
        $this->fileImage->move($this->getUploadRootDir(), $this->image);

        unset($this->fileVignette);
        unset($this->fileImage);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (file_exists($this->getAbsolutePathImage()) && $file = $this->getAbsolutePathImage()) {
            unlink($fileImage);
        }

        if (file_exists($this->getAbsolutePathVignette()) && $file = $this->getAbsolutePathVignette()) {
            unlink($fileVignette);
        }
    }
}