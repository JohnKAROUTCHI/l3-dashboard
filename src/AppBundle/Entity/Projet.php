<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
{
    public function __toString()
    {
      return $this->projectName;
    }
    // ...
    /**

    * @ORM\ManyToOne(targetEntity="Manager", inversedBy="Projet")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    private $manager;
    // ...
    /**

    * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="Projet")
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
     * @ORM\Column(name="projectName", type="string", length=255)
     */
    private $projectName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateBegin", type="date")
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="date")
     */
    private $dateEnd;

    public function __construct()
    {
      $this->dateBegin = new \DateTime();
      $this->dateEnd = new \DateTime();
    }


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
     * Set projectName
     *
     * @param string $projectName
     *
     * @return Projet
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     *
     * @return Projet
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Projet
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set manager
     *
     * @param \AppBundle\Entity\Manager $manager
     *
     * @return Projet
     */
    public function setManager(\AppBundle\Entity\Manager $manager = null)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return \AppBundle\Entity\Manager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set fiches
     *
     * @param \AppBundle\Entity\Fiche $fiches
     *
     * @return Projet
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
