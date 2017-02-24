<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/15
 * Time: 上午7:55
 */

namespace AppBundle\EventListener;
use Doctrine\Common\Util\Debug;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ProfileListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // TODO: Implement getSubscribedEvents() method.
        return array(
            FOSUserEvents::PROFILE_EDIT_INITIALIZE => 'onProfileEidtInitialize',
            FOSUserEvents::PROFILE_EDIT_SUCCESS => 'onProfileEidtSuccess',
            FOSUserEvents::PROFILE_EDIT_COMPLETED => 'onProfileEidtCompleted',
        );
    }

    public function onProfileEidtInitialize(GetResponseUserEvent $event) {


    }
    public function onProfileEidtSuccess(FormEvent $event) {

    }
    public function onProfileEidtCompleted(FilterUserResponseEvent $event) {
        $event->getResponse()->setTargetUrl('/modifySuccess');
    }
}