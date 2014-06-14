<?php

namespace soleil\ecommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\Validator\Constraints as Assert;

/**
* soleil\ecommerceBundle\Entity\Client
* @ORM\Table(name="clients")
* @ORM\Entity(repositoryClass="soleil\ecommerceBundle\Entity\ClientRepository")
*/

class Client
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
     * @ORM\Column(name="genre", type="string", length=5, nullable=true, unique=false)
     */
    private $genre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true, unique=false)
     * 
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true, unique=false)
     * 
     */
    private $adresse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true, unique=false)
     * 
     */
    private $ville;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="integer",nullable=true, unique=false)
     * 
     */
    private $cp;
    
    /**
     * @var string
     *
     * @ORM\Column(name="etatprov", type="string", length=255, nullable=true, unique=false)
     * 
     */
    private $etatprov;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=100, nullable=true, unique=false)
     * 
     */
    private $pays;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=100, nullable=true, unique=false)
     * 
     */
    private $tel;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true, unique=false)
     * 
     */
    private $mail;
    
    /**
    * @var \DateTime
    * @ORM\Column(name="datenaissance", type="date", nullable=true)
    */
    private $datenaissance;
    
   /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateIsc", type="datetime", nullable=true)
     */
    private $dateIns;

    /**
    * @Gedmo\Slug(fields={"nom"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;
    
    /**
    * @var \DateTime
    * @ORM\Column(name="numTrans", type="integer", nullable=true, unique=true)
    */
    private $numTrans;
    
    /**
     * @var string
     *
     * @ORM\Column(name="numInscrit", type="string", length=255, nullable=true, unique=true)
     * 
     */
    private $numInscrit;
    
    /**
     * @var string
     *
     * @ORM\Column(name="moyenpayement", type="string", length=255, nullable=true, unique=false)
     * 
     */
    private $moyenpayement;
    
    /**
    * @ORM\ManyToOne(targetEntity="soleil\ecommerceBundle\Entity\Realisation",
    inversedBy="clients")
    * @ORM\JoinColumn(nullable=false)
    */
    private $realisation;
    
    /** @ORM\Column(name="amount", type="float", nullable=true) */
    private $amount;
     
    /** @ORM\Column(name="statut", type="string", length=60 , nullable=true) */
    private $statut;
     
    /** @ORM\Column(name="dl_token", type="string", length=60 , nullable=true) */
    private $dl_token;
     
    /** @ORM\Column(name="paypal_complete", type="text", nullable=true) */
    private $paypal_complete;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lu", type="boolean",nullable=false)
     */
    private $lu;

    /**
     * Constructor
     */
    public function __construct($amout)
    {
        $this->dateIns = new \Datetime();
        $this->amount = $amout;
        $this->lu = 0;
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
     * Set genre
     *
     * @param string $genre
     * @return Client
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
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
     * Set adresse
     *
     * @param string $adresse
     * @return Client
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
     * Set ville
     *
     * @param string $ville
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set etatprov
     *
     * @param string $etatprov
     * @return Client
     */
    public function setEtatprov($etatprov)
    {
        $this->etatprov = $etatprov;

        return $this;
    }

    /**
     * Get etatprov
     *
     * @return string 
     */
    public function getEtatprov()
    {
        return $this->etatprov;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Client
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Client
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
     * Set mail
     *
     * @param string $mail
     * @return Client
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

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Client
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set dateIns
     *
     * @param \DateTime $dateIns
     * @return Client
     */
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

    /**
     * Get dateIns
     *
     * @return \DateTime 
     */
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Client
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
     * Set numTrans
     *
     * @param integer $numTrans
     * @return Client
     */
    public function setNumTrans($numTrans)
    {
        $this->numTrans = $numTrans;

        return $this;
    }

    /**
     * Get numTrans
     *
     * @return integer 
     */
    public function getNumTrans()
    {
        return $this->numTrans;
    }

    /**
     * Set numInscrit
     *
     * @param string $numInscrit
     * @return Client
     */
    public function setNumInscrit($numInscrit)
    {
        $this->numInscrit = $numInscrit;

        return $this;
    }

    /**
     * Get numInscrit
     *
     * @return string 
     */
    public function getNumInscrit()
    {
        return $this->numInscrit;
    }

    /**
     * Set moyenpayement
     *
     * @param string $moyenpayement
     * @return Client
     */
    public function setMoyenpayement($moyenpayement)
    {
        $this->moyenpayement = $moyenpayement;

        return $this;
    }

    /**
     * Get moyenpayement
     *
     * @return string 
     */
    public function getMoyenpayement()
    {
        return $this->moyenpayement;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Client
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Client
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set dl_token
     *
     * @param string $dlToken
     * @return Client
     */
    public function setDlToken($dlToken)
    {
        $this->dl_token = $dlToken;

        return $this;
    }

    /**
     * Get dl_token
     *
     * @return string 
     */
    public function getDlToken()
    {
        return $this->dl_token;
    }

    /**
     * Set paypal_complete
     *
     * @param string $paypalComplete
     * @return Client
     */
    public function setPaypalComplete($paypalComplete)
    {
        $this->paypal_complete = $paypalComplete;

        return $this;
    }

    /**
     * Get paypal_complete
     *
     * @return string 
     */
    public function getPaypalComplete()
    {
        return $this->paypal_complete;
    }

    /**
     * Set realisation
     *
     * @param \soleil\ecommerceBundle\Entity\Realisation $realisation
     * @return Client
     */
    public function setRealisation(\soleil\ecommerceBundle\Entity\Realisation $realisation)
    {
        $this->realisation = $realisation;

        return $this;
    }

    /**
     * Get realisation
     *
     * @return \soleil\ecommerceBundle\Entity\Realisation 
     */
    public function getRealisation()
    {
        return $this->realisation;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Client
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set lu
     *
     * @param boolean $lu
     * @return Client
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return boolean 
     */
    public function getLu()
    {
        return $this->lu;
    }
}
