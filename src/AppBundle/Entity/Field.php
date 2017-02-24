<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/21
 * Time: 下午8:39
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Field
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="FieldRespository")
 * @ORM\Table(name="field")
 */
class Field
{
    /**
     * @ORM\Id //主键
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") //自动增加
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $moduleId;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $fieldID;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $fieldName;

    /**
     * 0 text, 1 select, 2 file
     * @ORM\Column(type="integer")
     */
    protected $type;

    /**
     * @ORM\Column(type="string")
     */
    protected $value = null;

    /**
     * @ORM\Column(type="string")
     */
    protected $required;



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
     * Set moduleId
     *
     * @param integer $moduleId
     * @return Field
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
     * Set fieldID
     *
     * @param string $fieldID
     * @return Field
     */
    public function setFieldID($fieldID)
    {
        $this->fieldID = $fieldID;

        return $this;
    }

    /**
     * Get fieldID
     *
     * @return string 
     */
    public function getFieldID()
    {
        return $this->fieldID;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     * @return Field
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
     * Set type
     *
     * @param integer $type
     * @return Field
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Field
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

    /**
     * Set required
     *
     * @param string $required
     * @return Field
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return string 
     */
    public function getRequired()
    {
        return $this->required;
    }
}
