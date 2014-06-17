<?php

namespace soleil\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\Validator\Constraints as Assert;

/**
* soleil\FormationBundle\Entity\Article
* @ORM\Table(name="formations")
* @ORM\Entity(repositoryClass="soleil\FormationBundle\Entity\FormationRepository")
*/

class Formation
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
    * @ORM\Column(name="textFr", type="text")
     * @Assert\NotBlank()
    */
    private $textFr;
    
    /**
    * @var text $contenu
    * @ORM\Column(name="textEn", type="text")
     * @Assert\NotBlank()
    */
    private $textEn;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\DateTime()
     */
    private $datecreat;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdition", type="datetime")
     */
    private $dateEdition;
    
    /**
    * @Gedmo\Slug(fields={"titreFr"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;
    
    /**
    * @ORM\ManyToOne(targetEntity="soleil\SiteBundle\Entity\Site", inversedBy="formations") 
    * @ORM\JoinColumn(nullable=false)
    */
    private $site;
    
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\AgendaBundle\Entity\EvenementAgenda", mappedBy="formation")
    */
    private $evenementsAgenda;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evenementsAgenda = new \Doctrine\Common\Collections\ArrayCollection();
        $this->datecreat = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
        $this->dateEdition  = new \Datetime();
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
     * Set titreFr
     *
     * @param string $titreFr
     * @return Formation
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
     * @return Formation
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
     * @return Formation
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
     * @return Formation
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
     * Set datecreat
     *
     * @param \DateTime $datecreat
     * @return Formation
     */
    public function setDatecreat($datecreat)
    {
        $this->datecreat = $datecreat;

        return $this;
    }

    /**
     * Get datecreat
     *
     * @return \DateTime 
     */
    public function getDatecreat()
    {
        return $this->datecreat;
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     * @return Formation
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return \DateTime 
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Formation
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
     * Set site
     *
     * @param \soleil\SiteBundle\Entity\Site $site
     * @return Formation
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
     * Add evenementsAgenda
     *
     * @param \soleil\AgendaBundle\Entity\EvenementAgenda $evenementsAgenda
     * @return Formation
     */
    public function addEvenementsAgenda(\soleil\AgendaBundle\Entity\EvenementAgenda $evenementsAgenda)
    {
        $this->evenementsAgenda[] = $evenementsAgenda;

        return $this;
    }

    /**
     * Remove evenementsAgenda
     *
     * @param \soleil\AgendaBundle\Entity\EvenementAgenda $evenementsAgenda
     */
    public function removeEvenementsAgenda(\soleil\AgendaBundle\Entity\EvenementAgenda $evenementsAgenda)
    {
        $this->evenementsAgenda->removeElement($evenementsAgenda);
    }

    /**
     * Get evenementsAgenda
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvenementsAgenda()
    {
        return $this->evenementsAgenda;
    }
}
