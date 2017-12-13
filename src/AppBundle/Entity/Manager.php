<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manager
 *
 * @ORM\Table(name="manager")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ManagerRepository")
 */
class Manager
{
  public function __toString()
  {
    return $this->firstName.' '.$this->lastName;
  }
    // ...
    /**

    * @ORM\ManyToOne(targetEntity="Projet", inversedBy="Manager")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    private $project;
    // ...
    /**

    * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="Manager")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    private $fiches;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Manager
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Manager
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Manager
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set project
     *
     * @param \AppBundle\Entity\Projet $project
     *
     * @return Manager
     */
    public function setProject(\AppBundle\Entity\Projet $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set fiches
     *
     * @param \AppBundle\Entity\Fiche $fiches
     *
     * @return Manager
     */
    public function setFiches(\AppBundle\Entity\Fiche $fiches = null)
    {
        $this->fiches = $fiches;

        return $this;
    }

    /**
     * Get fiches
     *
     * @return \AppBundle\Entity\Fiche
     */
    public function getFiches()
    {
        return $this->fiches;
    }
}
