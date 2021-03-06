<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/24
 * Time: 下午10:09
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ModData
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="ModDataRespository")
 * @ORM\Table(name="modData")
 */
class ModData
{
    /**
     * @ORM\Id //主键
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") //自动增加
     */
    protected $clientId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $moduleId;

    /**
     * @ORM\Column(type="time")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="time")
     */
    protected $updateAt;



    /**
     * Get clientId
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set moduleId
     *
     * @param integer $moduleId
     * @return Data
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer 
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }




    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return Data
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

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ModData
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
}
