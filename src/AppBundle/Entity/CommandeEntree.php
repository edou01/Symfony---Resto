<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeEntree
 *
 * @ORM\Table(name="commande_entree")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeEntreeRepository")
 */
class CommandeEntree
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
     * @ORM\Column(name="ndr", type="integer")
     */
    private $ndr;


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
     * Set ndr.
     *
     * @param int $ndr
     *
     * @return CommandeEntree
     */
    public function setNdr($ndr)
    {
        $this->ndr = $ndr;

        return $this;
    }

    /**
     * Get ndr.
     *
     * @return int
     */
    public function getNdr()
    {
        return $this->ndr;
    }
}
