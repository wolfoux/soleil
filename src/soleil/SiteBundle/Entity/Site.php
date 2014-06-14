<?php

namespace soleil\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="sites")
 * @ORM\Entity(repositoryClass="soleil\SiteBundle\Entity\SiteRepository")
 */
class Site
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
     * @ORM\Column(name="domaine", type="string", length=255, nullable=false, unique=true)
     */
    private $domaine;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titreFr", type="string", length=50, nullable=false, unique=false)
     */
    private $titreFr;
    
     /**
     * @var string
     *
     * @ORM\Column(name="titreEn", type="string", length=50, nullable=false, unique=false)
     */
    private $titreEn;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descFr", type="string", length=255, nullable=false, unique=true)
     */
    private $descFr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descEn", type="string", length=255, nullable=false, unique=true)
     */
    private $descEn;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false, unique=true)
     */
    private $image;
    
    /**
    * @ORM\ManyToMany(targetEntity="soleil\SiteBundle\Entity\Rubrique", inversedBy="sites",
    cascade={"persist"})
    */
    private $rubriques;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\ArticleBundle\Entity\Article", mappedBy="site")
    */
    private $articles;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\ContactBundle\Entity\Contact", mappedBy="site")
    */
    private $contacts;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\ecommerceBundle\Entity\Realisation", mappedBy="site")
    */
    private $realisations;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\FormationBundle\Entity\Formation", mappedBy="site")
    */
    private $formations;
    
    /**
    * @ORM\OneToMany(targetEntity="soleil\AgendaBundle\Entity\EvenementAgenda", mappedBy="site")
    */
    private $evenements;


    

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
     * Set domaine
     *
     * @param string $domaine
     * @return Site
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return Site
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
     * @return Site
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
     * Add articles
     *
     * @param \soleil\ArticleBundle\Entity\Article $articles
     * @return Site
     */
    public function addArticle(\soleil\ArticleBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \soleil\ArticleBundle\Entity\Article $articles
     */
    public function removeArticle(\soleil\ArticleBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add contacts
     *
     * @param \soleil\ContactBundle\Entity\Contact $contacts
     * @return Site
     */
    public function addContact(\soleil\ContactBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;

        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \soleil\ContactBundle\Entity\Contact $contacts
     */
    public function removeContact(\soleil\ContactBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Add realisations
     *
     * @param \soleil\ecommerceBundle\Entity\Realisation $realisations
     * @return Site
     */
    public function addRealisation(\soleil\ecommerceBundle\Entity\Realisation $realisations)
    {
        $this->realisations[] = $realisations;

        return $this;
    }

    /**
     * Remove realisations
     *
     * @param \soleil\ecommerceBundle\Entity\Realisation $realisations
     */
    public function removeRealisation(\soleil\ecommerceBundle\Entity\Realisation $realisations)
    {
        $this->realisations->removeElement($realisations);
    }

    /**
     * Get realisations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRealisations()
    {
        return $this->realisations;
    }

    /**
     * Add formations
     *
     * @param \soleil\FormationBundle\Entity\Formation $formations
     * @return Site
     */
    public function addFormation(\soleil\FormationBundle\Entity\Formation $formations)
    {
        $this->formations[] = $formations;

        return $this;
    }

    /**
     * Remove formations
     *
     * @param \soleil\FormationBundle\Entity\Formation $formations
     */
    public function removeFormation(\soleil\FormationBundle\Entity\Formation $formations)
    {
        $this->formations->removeElement($formations);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormations()
    {
        return $this->formations;
    }


    /**
     * Add evenements
     *
     * @param \soleil\AgendaBundle\Entity\EvenementAgenda $evenements
     * @return Site
     */
    public function addEvenement(\soleil\AgendaBundle\Entity\EvenementAgenda $evenements)
    {
        $this->evenements[] = $evenements;

        return $this;
    }

    /**
     * Remove evenements
     *
     * @param \soleil\AgendaBundle\Entity\EvenementAgenda $evenements
     */
    public function removeEvenement(\soleil\AgendaBundle\Entity\EvenementAgenda $evenements)
    {
        $this->evenements->removeElement($evenements);
    }

    /**
     * Get evenements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvenements()
    {
        return $this->evenements;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rubriques = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->realisations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->formations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->evenements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rubriques
     *
     * @param \soleil\SiteBundle\Entity\Rubrique $rubriques
     * @return Site
     */
    public function addRubrique(\soleil\SiteBundle\Entity\Rubrique $rubriques)
    {
        $this->rubriques[] = $rubriques;

        return $this;
    }

    /**
     * Remove rubriques
     *
     * @param \soleil\SiteBundle\Entity\Rubrique $rubriques
     */
    public function removeRubrique(\soleil\SiteBundle\Entity\Rubrique $rubriques)
    {
        $this->rubriques->removeElement($rubriques);
    }

    /**
     * Get rubriques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRubriques()
    {
        return $this->rubriques;
    }

    /**
     * Set descFr
     *
     * @param string $descFr
     * @return Site
     */
    public function setDescFr($descFr)
    {
        $this->descFr = $descFr;

        return $this;
    }

    /**
     * Get descFr
     *
     * @return string 
     */
    public function getDescFr()
    {
        return $this->descFr;
    }

    /**
     * Set descEn
     *
     * @param string $descEn
     * @return Site
     */
    public function setDescEn($descEn)
    {
        $this->descEn = $descEn;

        return $this;
    }

    /**
     * Get descEn
     *
     * @return string 
     */
    public function getDescEn()
    {
        return $this->descEn;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Site
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
}
