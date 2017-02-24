<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/19
 * Time: 下午12:36
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Department
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="ModuleRespository")
 * @ORM\Table(name="module")
 */
class Module
{
    /**
     * @ORM\Id //主键
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") //自动增加
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $name;


    /**
     * @ORM\Column(type="string")
     */
    protected $avatar;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $brief;


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
     * Set name
     *
     * @param string $name
     * @return Module
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Module
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set brief
     *
     * @param string $brief
     * @return Module
     */
    public function setBrief($brief)
    {
        $this->brief = $brief;

        return $this;
    }

    /**
     * Get brief
     *
     * @return string 
     */
    public function getBrief()
    {
        return $this->brief;
    }
}
