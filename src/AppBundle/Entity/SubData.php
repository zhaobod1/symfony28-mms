<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/24
 * Time: 下午10:13
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Data
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="SubDataRespository")
 * @ORM\Table(name="subData")
 */
class SubData
{
    /**
     * @ORM\Id //主键
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") //自动增加
     */
    protected $subId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $clientId;

    /**
     * @ORM\Column(type="string")
     */
    protected $fieldName;

    /**
     * @ORM\Column(type="string")
     */
    protected $value;



    /**
     * Get subId
     *
     * @return integer 
     */
    public function getSubId()
    {
        return $this->subId;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     * @return SubData
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
     * Set fieldName
     *
     * @param string $fieldName
     * @return SubData
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return SubData
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
