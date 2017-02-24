<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/29
 * Time: 下午12:06
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SubDataFileUpload
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="SubDataFileUploadRespository")
 * @ORM\Table(name="subDataFileUpload")
 */
class SubDataFileUpload
{
    /**
     * @ORM\Id //主键
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") //自动增加
     */
    protected $Id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $clientId;

    /**
     * @ORM\Column(type="string")
     */
    protected $filePath;

    



    /**
     * Get Id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     * @return SubDataFileUpload
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

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
     * Set filePath
     *
     * @param string $filePath
     * @return SubDataFileUpload
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }
}
