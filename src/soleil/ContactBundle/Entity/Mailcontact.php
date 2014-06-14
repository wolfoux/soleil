<?php

namespace soleil\ContactBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
* soleil\ContactBundle\Entity\Mailcontact
*/

class Mailcontact
{   
    /**
     * @var string
     *
     *
     * @Assert\Type(type="string", message="la valeur {{ value }} n'est pas valide {{ type }}.")
     * @Assert\Length(
     *      min = "5",
     *      max = "50",
     *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank()
     */
    private $nom;
    
    /**
     * @var string
     *
     * * @Assert\Type(type="string", message="la valeur {{ value }} n'est pas valide {{ type }}.")
     * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "Votre mail doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre mail ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank()
     */
    private $mail;
    
    /**
     * @var string
     *
     * * @Assert\Type(type="string", message="la valeur {{ value }} n'est pas valide {{ type }}.")
     * @Assert\Length(
     *      min = "5",
     *      max = "255",
     *      minMessage = "Votre mail doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre mail ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @Assert\NotBlank()
     */
    private $sujet;
    
    /**
    * @var text $message
    *
    * @Assert\Type(type="string", message="la valeur {{ value }} n'est pas valide {{ type }}.")  
    * @Assert\NotBlank()
    */
    private $message;

    /**
     * Set nom
     *
     * @param string $nom
     * @return Mailcontact
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
     * Set mail
     *
     * @param string $mail
     * @return Mailcontact
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
     * Set sujet
     *
     * @param string sujet
     * @return Mailcontact
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Mailcontact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
