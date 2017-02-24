<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/26
 * Time: 下午4:52
 */

namespace AppBundle\huo15class;


class UploadImg
{
    private $m_TotalSize;
    private $m_MaxSize;
    private $m_FileType;
    private $m_SavePath;
    private $m_AutoSave;
    private $m_Error;
    private $m_Charset;
    private $m_dicForm;
    private $m_binForm;
    private $m_binItem;
    private $m_strDate;
    private $m_lngTime;
    public $FormItem;
    public $FileItem;

    public function getVersion($version="huo15cms Version 1.0.0")
    {
        return $version;


    }

    public function getError() {
        return $this->m_Error;
    }
    public function getCharSet() {
        return $this->m_Charset;
    }

    public function charSet($strCharset) {
        $this->m_Charset = $strCharset;
    }

    public function getTotalSize() {
        return $this->m_TotalSize;
    }
    public function setTotalSize($totalSize) {
        if (is_numeric($totalSize)) {
            $this->m_TotalSize = $totalSize;
        }
    }

}