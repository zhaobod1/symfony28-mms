<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/15
 * Time: 下午1:18
 */

namespace AppBundle\EventListener;


use Doctrine\Common\Util\Debug;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;

class RegistrationListener implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        // TODO: Implement getSubscribedEvents() method.
        return array(
            FOSUserEvents::REGISTRATION_INITIALIZE => 'onRegistrationInitalize',
            FOSUserEvents::REGISTRATION_CONFIRM => 'onRegistrationConfirm',

            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
            FOSUserEvents::REGISTRATION_COMPLETED => 'onRegistrationCompleted',

        );
    }

    public function onRegistrationConfirm(GetResponseUserEvent $event) {

    }
    public function onRegistrationInitalize(GetResponseUserEvent $event)
    {

    }

    public function onRegistrationSuccess(FormEvent $event)
    {

    }

    public function onRegistrationCompleted(FilterUserResponseEvent $event)
    {



    }

}