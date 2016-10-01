<?php
namespace App\Models;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;

/**
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * @Column(type="string", unique=true)
     *
     * @var string
     */
    protected $username;

    /**
     * @Column(type="string", name = "hashed_password")
     *
     * @var string
     */
    protected $hashedPassword;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->hashedPassword = md5($password);
    }

    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }
}