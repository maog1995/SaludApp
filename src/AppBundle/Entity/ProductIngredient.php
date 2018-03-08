<?php
/**
 * Created by PhpStorm.
 * User: maog
 * Date: 8/03/18
 * Time: 0:46
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ProductIngredient
 * @ORM\Entity
 */
class ProductIngredient
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="ingredients")
     * @ORM\JoinColumn(nullable=true)
     */
    private $idProduct;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ingredient", inversedBy="products")
     * @ORM\JoinColumn(nullable=true)
     */
    private $idIngredient;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     * @Assert\GreaterThan(0)
     * @Assert\LessThanOrEqual(100)
     */
    private $percentage;

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param mixed $idProduct
     * @return ProductIngredient
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdIngredient()
    {
        return $this->idIngredient;
    }

    /**
     * @param mixed $idIngredient
     * @return ProductIngredient
     */
    public function setIdIngredient($idIngredient)
    {
        $this->idIngredient = $idIngredient;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param float $percentage
     * @return ProductIngredient
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }
    

}