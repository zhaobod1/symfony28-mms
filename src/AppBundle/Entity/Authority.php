<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/21
 * Time: 上午12:35
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Authority
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AuthorityRespository")
 * @ORM\Table(name="authority")
 */
class Authority
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
    protected $userId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $modId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $dataAuthor;

    /**
     * @ORM\Column(type="integer")
     */
    protected $modAuthor;


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
     * Set userId
     *
     * @param integer $userId
     * @return Authority
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set modId
     *
     * @param integer $modId
     * @return Authority
     */
    public function setModId($modId)
    {
        $this->modId = $modId;

        return $this;
    }

    /**
     * Get modId
     *
     * @return integer 
     */
    public function getModId()
    {
        return $this->modId;
    }

    /**
     * Set dataAuthor
     *
     * @param integer $dataAuthor
     * @return Authority
     */
    public function setDataAuthor($dataAuthor)
    {
        $this->dataAuthor = $dataAuthor;

        return $this;
    }

    /**
     * Get dataAuthor
     *
     * @return integer 
     */
    public function getDataAuthor()
    {
        return $this->dataAuthor;
    }

    /**
     * Set modAuthor
     *
     * @param integer $modAuthor
     * @return Authority
     */
    public function setModAuthor($modAuthor)
    {
        $this->modAuthor = $modAuthor;

        return $this;
    }

    /**
     * Get modAuthor
     *
     * @return integer 
     */
    public function getModAuthor()
    {
        return $this->modAuthor;
    }
}
