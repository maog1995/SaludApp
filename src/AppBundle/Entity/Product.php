<?php
/**
 * Created by PhpStorm.
 * User: maog
 * Date: 7/03/18
 * Time: 18:57
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 * @ORM\Entity
 */
class Product
{
    /**
     * @var string
     * @ORM\Column(type="string", length=25)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false, unique=true)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $trademark;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $netWeight;

    /**
     *@var integer
     * @ORM\Column(type="integer", nullable=true)
     */
    private $score;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Product
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
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrademark()
    {
        return $this->trademark;
    }

    /**
     * @param string $trademark
     * @return Product
     */
    public function setTrademark($trademark)
    {
        $this->trademark = $trademark;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param float $netWeight
     * @return Product
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return Product
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }


}