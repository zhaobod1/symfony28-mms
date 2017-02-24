<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/1
 * Time: 下午12:19
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{


    /**
     * @ORM\Id //主键
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") //自动增加
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="部门ID不能为空")
     */
    protected $departmentId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $age;








    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->setDepartmentId(0);
        $this->setAge(28);

    }

    /**
     * Set departmentId
     *
     * @param integer $departmentId
     * @return User
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;

        return $this;
    }

    /**
     * Get departmentId
     *
     * @return integer 
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }


    /**
     * @ORM\PrePersist()
     */
    public function prePresist() {

    }

    /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }
}
