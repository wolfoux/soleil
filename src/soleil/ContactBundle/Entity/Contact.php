<?php

namespace soleil\ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\Validator\Constraints as Assert;

/**
* soleil\ContactBundle\Entity\Contact
* @ORM\Table(name="contacts")
* @ORM\Entity()
*/

class Contact
{
    /**
    * @var integer $id
    **
    @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $prenom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $gsm;
    
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false, unique=true)
     * @Assert\NotBlank()
     */
    private $adresse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false, unique=true)
     * @Assert\NotBlank()
     */
    private $mail;
    
    /**
    * @Gedmo\Slug(fields={"nom","prenom"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;

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
     * Set nom
     *
     * @param string $nom
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Contact
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     * @return Contact
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string 
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Contact
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Contact
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Contact
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
}
