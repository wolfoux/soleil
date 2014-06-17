<?php

namespace soleil\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Rubrique
 *
 * @ORM\Table(name="Rubriques")
 * @ORM\Entity(repositoryClass="soleil\SiteBundle\Entity\RubriqueRepository")
 */
class Rubrique
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
     * @ORM\Column(name="nomFr", type="string", length=50, nullable=false, unique=false)
     */
    private $nomFr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nomEn", type="string", length=50, nullable=false, unique=false)
     */
    private $nomEn;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descriptionFr", type="text", nullable=true)
     * @Assert\NotBlank()
     */
    private $descriptionFr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descriptionEn", type="text", nullable=true)
     * @Assert\NotBlank()
     */
    private $descriptionEn;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=50, nullable=false, unique=false)
     */
    private $url;
    
    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=255, nullable=false, unique=true)
     */
    private $icone;

    /**
     * @var string
     *
     * @ORM\Column(name="menusite", type="boolean",nullable=false)
     */
    private $menusite;
    
    /**
     * @var string
     *
     * @ORM\Column(name="asouscat", type="boolean",nullable=false)
     */
    private $asouscat;
    
    /**
     * @ORM\ManyToMany(targetEntity="soleil\SiteBundle\Entity\Site", mappedBy="rubriques")
     */
    private $sites;
    
    /**
    * @ORM\ManyToOne(targetEntity="soleil\SiteBundle\Entity\Rubrique", inversedBy="sousRubriques") 
    * @ORM\JoinColumn(nullable=true)
    */
    private $rubrique;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\SiteBundle\Entity\Rubrique", mappedBy="rubrique") 
    * @ORM\JoinColumn(nullable=true)
    */
    private $sousRubriques;

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
     * Set nomFr
     *
     * @param string $nomFr
     * @return Rubrique
     */
    public function setNomFr($nomFr)
    {
        $this->nomFr = $nomFr;

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string 
     */
    public function getNomFr()
    {
        return $this->nomFr;
    }

    /**
     * Set nomEn
     *
     * @param string $nomEn
     * @return Rubrique
     */
    public function setNomEn($nomEn)
    {
        $this->nomEn = $nomEn;

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string 
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return Rubrique
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string 
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return Rubrique
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string 
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Rubrique
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set menusite
     *
     * @param boolean $menusite
     * @return Rubrique
     */
    public function setMenusite($menusite)
    {
        $this->menusite = $menusite;

        return $this;
    }

    /**
     * Get menusite
     *
     * @return boolean 
     */
    public function getMenusite()
    {
        return $this->menusite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sites
     *
     * @param \soleil\SiteBundle\Entity\Site $sites
     * @return Rubrique
     */
    public function addSite(\soleil\SiteBundle\Entity\Site $sites)
    {
        $this->sites[] = $sites;

        return $this;
    }

    /**
     * Remove sites
     *
     * @param \soleil\SiteBundle\Entity\Site $sites
     */
    public function removeSite(\soleil\SiteBundle\Entity\Site $sites)
    {
        $this->sites->removeElement($sites);
    }

    /**
     * Get sites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Set icone
     *
     * @param string $icone
     * @return Rubrique
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;

        return $this;
    }

    /**
     * Get icone
     *
     * @return string 
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Set rubrique
     *
     * @param \soleil\SiteBundle\Entity\Rubrique $rubrique
     * @return Rubrique
     */
    public function setRubrique(\soleil\SiteBundle\Entity\Rubrique $rubrique = null)
    {
        $this->rubrique = $rubrique;

        return $this;
    }

    /**
     * Get rubrique
     *
     * @return \soleil\SiteBundle\Entity\Rubrique 
     */
    public function getRubrique()
    {
        return $this->rubrique;
    }

    /**
     * Add sousRubriques
     *
     * @param \soleil\SiteBundle\Entity\Rubrique $sousRubriques
     * @return Rubrique
     */
    public function addSousRubrique(\soleil\SiteBundle\Entity\Rubrique $sousRubriques)
    {
        $this->sousRubriques[] = $sousRubriques;

        return $this;
    }

    /**
     * Remove sousRubriques
     *
     * @param \soleil\SiteBundle\Entity\Rubrique $sousRubriques
     */
    public function removeSousRubrique(\soleil\SiteBundle\Entity\Rubrique $sousRubriques)
    {
        $this->sousRubriques->removeElement($sousRubriques);
    }

    /**
     * Get sousRubriques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSousRubriques()
    {
        return $this->sousRubriques;
    }

    /**
     * Set asouscat
     *
     * @param boolean $asouscat
     * @return Rubrique
     */
    public function setAsouscat($asouscat)
    {
        $this->asouscat = $asouscat;

        return $this;
    }

    /**
     * Get asouscat
     *
     * @return boolean 
     */
    public function getAsouscat()
    {
        return $this->asouscat;
    }
}
