<?php

namespace BlogBundle\Entity;

/**
 * Order
 */
class Order
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var \BlogBundle\Entity\Users
     */
    private $iduser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idproduct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproduct = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Order
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Order
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set iduser
     *
     * @param \BlogBundle\Entity\Users $iduser
     *
     * @return Order
     */
    public function setIduser(\BlogBundle\Entity\Users $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \BlogBundle\Entity\Users
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Add idproduct
     *
     * @param \BlogBundle\Entity\Products $idproduct
     *
     * @return Order
     */
    public function addIdproduct(\BlogBundle\Entity\Products $idproduct)
    {
        $this->idproduct[] = $idproduct;

        return $this;
    }

    /**
     * Remove idproduct
     *
     * @param \BlogBundle\Entity\Products $idproduct
     */
    public function removeIdproduct(\BlogBundle\Entity\Products $idproduct)
    {
        $this->idproduct->removeElement($idproduct);
    }

    /**
     * Get idproduct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }
}

