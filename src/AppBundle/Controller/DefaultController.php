<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class DefaultController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction(Request $request)
    {

        return $this->redirectToRoute('userIndex');
        /*return $this->render('default/index.html.twig', array(
            'title' => '模块列表 | 模块管理',
            'routes' => $this->returnURL($this->baseURL)

        ));*/



    }

    /**
     * @Route("/registrationSuccess", name="registrationSuccess")
     */
    public function registrationSuccess() {
        return $this->render(
            'user/message.html.twig',
            array(
                'title' => '注册成功',
                'headTitle' => '注册成功',
                'content' => '如果有疑问,请留言给我们',
                'backUrl' => $this->generateUrl('app_user_user_ulist'),
            )
        );
    }
    /**
     * @Route("/modifySuccess", name="modifySuccess")
     */
    public function modifySuccess() {
        return $this->render(
            'user/message.html.twig',
            array(
                'title' => '修改成功',
                'headTitle' => '修改成功',
                'content' => '如果有疑问,请留言给我们',
                'backUrl' => $this->generateUrl('userIndex'),
            )
        );
    }



}
