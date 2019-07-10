<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeDessert
 *
 * @ORM\Table(name="commande_dessert")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeDessertRepository")
 */
class CommandeDessert
{
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
     * @return CommandeDessert
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
}
