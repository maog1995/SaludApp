<?php
/**
 * Created by PhpStorm.
 * User: maog
 * Date: 8/03/18
 * Time: 20:28
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 * @ORM\Entity()
 */
class User implements UserInterface
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
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     * @ORM\Column(type="string", length=75, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false, unique=true)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=false)
     * @Assert\Regex(
     *     pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,25}$",
     *     message="Minimum eight characters, at least one letter and one number"
     * )
     */
    private $password;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $admin = false;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $collaborator = false;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->admin;
    }

    /**
     * @param bool $admin
     * @return User
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCollaborator()
    {
        return $this->collaborator;
    }

    /**
     * @param bool $collaborator
     * @return User
     */
    public function setCollaborator($collaborator)
    {
        $this->collaborator = $collaborator;
        return $this;
    }


}