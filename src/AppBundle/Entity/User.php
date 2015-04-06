<?php
/*
 * Template by : matthieu / Matthieu POSNIC
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->roles = array('ROLE_ADMIN');
    }
}
