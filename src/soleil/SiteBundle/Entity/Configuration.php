<?php

namespace soleil\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configurations")
 * @ORM\Entity()
 */
class Configuration
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
     * @ORM\Column(name="facebook", type="string", length=255, nullable=false, unique=true)
     */
    private $facebook;
    
    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=false, unique=true)
     */
    private $twitter;
    
    /**
     * @var string
     *
     * @ORM\Column(name="likedln", type="string", length=255, nullable=false, unique=true)
     */
    private $likedln;


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
     * Set paypal
     *
     * @param string $paypal
     * @return Configuration
     */
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;

        return $this;
    }

    /**
     * Get paypal
     *
     * @return string 
     */
    public function getPaypal()
    {
        return $this->paypal;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Configuration
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Configuration
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set likedln
     *
     * @param string $likedln
     * @return Configuration
     */
    public function setLikedln($likedln)
    {
        $this->likedln = $likedln;

        return $this;
    }

    /**
     * Get likedln
     *
     * @return string 
     */
    public function getLikedln()
    {
        return $this->likedln;
    }
}
