<?php

namespace soleil\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\Validator\Constraints as Assert;

/**
* soleil\ArticleBundle\Entity\Article
* @ORM\Table(name="articles")
* @ORM\Entity(repositoryClass="soleil\ArticleBundle\Entity\ArticleRepository")
*/

class Article
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
    private $date;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdition", type="datetime")
     */
    private $dateEdition;
    
    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true, unique=false)
     */
    private $video;

    
    /**
    * @Gedmo\Slug(fields={"titreFr"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;
    
    /**
    * @ORM\ManyToOne(targetEntity="soleil\SiteBundle\Entity\Site", inversedBy="articles") 
    * @ORM\JoinColumn(nullable=false)
    */
    private $site;
    
    /**
    * @ORM\OneToOne(targetEntity="soleil\ArticleBundle\Entity\ImageArticle", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
    */
    private $image;

    public function __construct(){
        
        $this->date = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     * @return Article
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
     * Set site
     *
     * @param \soleil\SiteBundle\Entity\Site $site
     * @return Article
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
     * Set image
     *
     * @param \soleil\ArticleBundle\Entity\ImageArticle $image
     * @return Article
     */
    public function setImage(\soleil\ArticleBundle\Entity\ImageArticle $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \soleil\ArticleBundle\Entity\ImageArticle 
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
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
     * Set video
     *
     * @param string $video
     * @return Article
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }
}
