<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/15
 * Time: 上午12:19
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Department
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="DepartmentRespository")
 * @ORM\Table(name="department")
 */
class Department
{
    /**
     * @ORM\Id //主键
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") //自动增加
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $no;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $minister;


    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $createdAt;


    /**
     * @ORM\Column(type="datetime")
     */
    protected $updateAt;




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
     * Set no
     *
     * @param string $no
     * @return Department
     */
    public function setNo($no)
    {
        $this->no = $no;

        return $this;
    }

    /**
     * Get no
     *
     * @return string 
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Department
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
     * Set minister
     *
     * @param string $minister
     * @return Department
     */
    public function setMinister($minister)
    {
        $this->minister = $minister;

        return $this;
    }

    /**
     * Get minister
     *
     * @return string 
     */
    public function getMinister()
    {
        return $this->minister;
    }



    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Department
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return Department
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime 
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }
    /**
     * @ORM\PrePersist()
     */
    public function prePresist()
    {
        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }

        $this->setUpdateAt(new \DateTime('now'));
    }

   
}
