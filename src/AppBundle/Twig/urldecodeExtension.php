<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/20
 * Time: 下午11:13
 */

namespace AppBundle\Twig;



class urldecodeExtension extends \Twig_Extension
{
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('url_decode', array($this, 'urlDecode')),
        );
    }
    public function urlDecode($url) {
        $url_decode = urldecode($url);
        return $url_decode;
    }
    public function getName()
    {
        return 'app_url_decode_extension';
    }
}