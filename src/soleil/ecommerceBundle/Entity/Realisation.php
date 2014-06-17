<?php

namespace soleil\ecommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\Validator\Constraints as Assert;

/**
* soleil\ecommerceBundle\Entity\Realisation
* @ORM\Table(name="realisations")
* @ORM\Entity(repositoryClass="soleil\ecommerceBundle\Entity\RealisationRepository")
*/

class Realisation
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
     * @ORM\Column(name="titreFr", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $titreFr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titreEn", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $titreEn;
    
    /**
    * @var text $contenu
    * @ORM\Column(name="textFr", type="text", nullable=true)
    */
    private $textFr;
    
    /**
    * @var text $contenu
    * @ORM\Column(name="textEn", type="text", nullable=true)
    */
    private $textEn;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dimension", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $dimension;
    
    /**
    * @var integer 
    * @ORM\Column(name="prix", type="decimal",precision=10, scale=2, nullable=false)
    */
    private $prix;
    
    /**
     * @var string
     *
     * @ORM\Column(name="realiserpar", type="string", length=255, nullable=false, unique=false)
     * @Assert\NotBlank()
     */
    private $realiserpar;
    
    /**
     * @var string
     *
     * @ORM\Column(name="vendu", type="boolean",nullable=false)
     */
    private $vendu;

    
    /**
    * @Gedmo\Slug(fields={"titreFr"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;
    
    /**
    * @ORM\ManyToOne(targetEntity="soleil\SiteBundle\Entity\Site", inversedBy="realisations") 
    * @ORM\JoinColumn(nullable=false)
    */
    private $site;

    /**
    * @ORM\OneToOne(targetEntity="soleil\ecommerceBundle\Entity\ImageRealisation", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
    */
    private $image;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\ecommerceBundle\Entity\Client",
    mappedBy="realisation")
    */
    private $clients;

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
     * Set titreFr
     *
     * @param string $titreFr
     * @return Realisation
     */
    public function setTitreFr($titreFr)
    {
        $this->titreFr = $titreFr;

        return $this;
    }

    /**
     * Get titreFr
     *
     * @return string 
     */
    public function getTitreFr()
    {
        return $this->titreFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return Realisation
     */
    public function setTitreEn($titreEn)
    {
        $this->titreEn = $titreEn;

        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string 
     */
    public function getTitreEn()
    {
        return $this->titreEn;
    }

    /**
     * Set textFr
     *
     * @param string $textFr
     * @return Realisation
     */
    public function setTextFr($textFr)
    {
        $this->textFr = $textFr;

        return $this;
    }

    /**
     * Get textFr
     *
     * @return string 
     */
    public function getTextFr()
    {
        return $this->textFr;
    }

    /**
     * Set textEn
     *
     * @param string $textEn
     * @return Realisation
     */
    public function setTextEn($textEn)
    {
        $this->textEn = $textEn;

        return $this;
    }

    /**
     * Get textEn
     *
     * @return string 
     */
    public function getTextEn()
    {
        return $this->textEn;
    }

    /**
     * Set site
     *
     * @param \soleil\SiteBundle\Entity\Site $site
     * @return Realisation
     */
    public function setSite(\soleil\SiteBundle\Entity\Site $site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \soleil\SiteBundle\Entity\Site 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Realisation
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
     * Set dimension
     *
     * @param string $dimension
     * @return Realisation
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get dimension
     *
     * @return string 
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Realisation
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set vendu
     *
     * @param boolean $vendu
     * @return Realisation
     */
    public function setVendu($vendu)
    {
        $this->vendu = $vendu;

        return $this;
    }

    /**
     * Get vendu
     *
     * @return boolean 
     */
    public function getVendu()
    {
        return $this->vendu;
    }

    /**
     * Set realiserpar
     *
     * @param string $realiserpar
     * @return Realisation
     */
    public function setRealiserpar($realiserpar)
    {
        $this->realiserpar = $realiserpar;

        return $this;
    }

    /**
     * Get realiserpar
     *
     * @return string 
     */
    public function getRealiserpar()
    {
        return $this->realiserpar;
    }

    /**
     * Set image
     *
     * @param \soleil\ecommerceBundle\Entity\ImageRealisation $image
     * @return Realisation
     */
    public function setImage(\soleil\ecommerceBundle\Entity\ImageRealisation $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \soleil\ecommerceBundle\Entity\ImageRealisation 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add clients
     *
     * @param \soleil\ecommerceBundle\Entity\Client $clients
     * @return Realisation
     */
    public function addClient(\soleil\ecommerceBundle\Entity\Client $clients)
    {
        $this->clients[] = $clients;

        return $this;
    }

    /**
     * Remove clients
     *
     * @param \soleil\ecommerceBundle\Entity\Client $clients
     */
    public function removeClient(\soleil\ecommerceBundle\Entity\Client $clients)
    {
        $this->clients->removeElement($clients);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClients()
    {
        return $this->clients;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
