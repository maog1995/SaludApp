<?php
/**
 * Created by PhpStorm.
 * User: maog
 * Date: 8/03/18
 * Time: 0:20
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ingredient
 * @ORM\Entity
 */
class Ingredient
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     * @ORM\Id()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=false, unique=true)
     */
    private $name;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\GreaterThanOrEqual(1)
     * @Assert\LessThanOrEqual(5)
     */
    private $quality;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ProductIngredient", mappedBy="idIngredient")
     */
    private $products;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Ingredient
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Ingredient
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param int $quality
     * @return Ingredient
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     * @return Ingredient
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }


}