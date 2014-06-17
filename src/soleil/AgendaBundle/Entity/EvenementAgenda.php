<?php

namespace soleil\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

use Gedmo\Mapping\Annotation as Gedmo;


/** 
 * EvenementAgenda
 *
 * @ORM\Table(name="evenementsagenda")
 * @ORM\Entity(repositoryClass="soleil\AgendaBundle\Entity\EvenementAgendaRepository")
 */
class EvenementAgenda
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
    * @var text $descriptionFr
    * @ORM\Column(name="descriptionFr", type="text")
    */
    private $descriptionFr;
    
    /**
    * @var text $description
    * @ORM\Column(name="descriptionEn", type="text")
    */
    private $descriptionEn;
    
     /**
    * @var integer 
    * @ORM\Column(name="nbJour", type="integer", nullable=false, unique=false)
    */
    private $nbJour;
    
    /**
    * @var \DateTime
    * @ORM\Column(name="dateDeb", type="datetime")
    */
    private $dateDeb;
    
   /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;
    
    
    
    /**
    * @var integer 
    * @ORM\Column(name="nbMax", type="integer", nullable=false)
    */
    private $nbMax;
    
    /**
    * @var integer 
    * @ORM\Column(name="nbInsc", type="integer", nullable=false)
    */
    private $nbInsc;
    
    /**
    * @var integer 
    * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=false)
    */
    private $prix;

    /**
    * @Gedmo\Slug(fields={"nomFr"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;
    
    /**
    * @ORM\ManyToOne(targetEntity="soleil\SiteBundle\Entity\Site", inversedBy="evenements") 
    * @ORM\JoinColumn(nullable=false)
    */
    private $site;
    
    /**
    * @ORM\ManyToOne(targetEntity="soleil\FormationBundle\Entity\Formation", inversedBy="Formation") 
    * @ORM\JoinColumn(nullable=true)
    */
    private $formation;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\AgendaBundle\Entity\Inscri",
    mappedBy="evenementAgenda")
    */
    private $inscris;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nbInsc = 0;
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
     * Set nom
     *
     * @param string $nom
     * @return EvenementsAgenda
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
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     * @return EvenementsAgenda
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return EvenementsAgenda
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return EvenementsAgenda
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
     * @return EvenementAgenda
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
     * Set nbMax
     *
     * @param integer $nbMax
     * @return EvenementAgenda
     */
    public function setNbMax($nbMax)
    {
        $this->nbMax = $nbMax;

        return $this;
    }

    /**
     * Get nbMax
     *
     * @return integer 
     */
    public function getNbMax()
    {
        return $this->nbMax;
    }

    /**
     * Set nbInsc
     *
     * @param integer $nbInsc
     * @return EvenementAgenda
     */
    public function setNbInsc($nbInsc)
    {
        $this->nbInsc = $nbInsc;

        return $this;
    }

    /**
     * Get nbInsc
     *
     * @return integer 
     */
    public function getNbInsc()
    {
        return $this->nbInsc;
    }

    /**
     * Set formation
     *
     * @param \soleil\FormationBundle\Entity\Formation $formation
     * @return EvenementAgenda
     */
    public function setFormation(\soleil\FormationBundle\Entity\Formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \soleil\FormationBundle\Entity\Formation 
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return EvenementAgenda
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
     * @return EvenementAgenda
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
     * Set nomFr
     *
     * @param string $nomFr
     * @return EvenementAgenda
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
     * @return EvenementAgenda
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
     * Set prix
     *
     * @param string $prix
     * @return EvenementAgenda
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
     * Add inscris
     *
     * @param \soleil\AgendaBundle\Entity\Inscri $inscris
     * @return EvenementAgenda
     */
    public function addInscri(\soleil\AgendaBundle\Entity\Inscri $inscris)
    {
        $this->inscris[] = $inscris;

        return $this;
    }

    /**
     * Remove inscris
     *
     * @param \soleil\AgendaBundle\Entity\Inscri $inscris
     */
    public function removeInscri(\soleil\AgendaBundle\Entity\Inscri $inscris)
    {
        $this->inscris->removeElement($inscris);
    }

    /**
     * Get inscris
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInscris()
    {
        return $this->inscris;
    }

    /**
     * Set nbJour
     *
     * @param integer $nbJour
     * @return EvenementAgenda
     */
    public function setNbJour($nbJour)
    {
        $this->nbJour = $nbJour;

        return $this;
    }

    /**
     * Get nbJour
     *
     * @return integer 
     */
    public function getNbJour()
    {
        return $this->nbJour;
    }
}
