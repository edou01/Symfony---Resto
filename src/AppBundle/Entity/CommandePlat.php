<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandePlat
 *
 * @ORM\Table(name="commandeplat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandePlatRepository")
 */
class CommandePlat
{

    /**
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumn(nullable=false)
     */

    private $commande;

    /**
     * @ORM\ManyToOne(targetEntity="Plat")
     * @ORM\JoinColumn(nullable=false)
     */

    private $palt;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr", type="integer")
     */
    private $nbr;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbr.
     *
     * @param int $nbr
     *
     * @return CommandePlat
     */
    public function setNbr($nbr)
    {
        $this->nbr = $nbr;

        return $this;
    }

    /**
     * Get nbr.
     *
     * @return int
     */
    public function getNbr()
    {
        return $this->nbr;
    }

    /**
     * Set commande.
     *
     * @param \AppBundle\Entity\Commande $commande
     *
     * @return CommandePlat
     */
    public function setCommande(\AppBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande.
     *
     * @return \AppBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set palt.
     *
     * @param \AppBundle\Entity\Plat $palt
     *
     * @return CommandePlat
     */
    public function setPalt(\AppBundle\Entity\Plat $palt)
    {
        $this->palt = $palt;

        return $this;
    }

    /**
     * Get palt.
     *
     * @return \AppBundle\Entity\Plat
     */
    public function getPalt()
    {
        return $this->palt;
    }
}
