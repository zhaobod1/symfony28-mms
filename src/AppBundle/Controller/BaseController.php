<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/7/27
 * Time: 下午11:51
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Department;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class BaseController extends Controller
{
    protected $em;
    protected $headTitle;
    protected $title;
    protected $backUrl;
    protected $content;


    protected $baseURL =  array(
        /*'user' => '/web/app_dev.php/user/',
        'modules' => '/web/app_dev.php/modules/',*/
        'user' => '/user/',
        'modules' => '/modules/',
    );
    function __construct()
    {



    }

    function getEM() {
        return $this->getDoctrine()->getManager();
    }

    /**
     * @return \AppBundle\Entity\UserRepository
     */
    protected function getUserRespository() {
        return $this->getDoctrine()->getManager()->getRepository('AppBundle:user');
    }
    public function returnURL($baseURL) {
        return array(
            'user_index' => $baseURL['user'].'index',
            'user_account' => $baseURL['user'].'account',
            'user_help' => $baseURL['user'].'help',
            'user_ulist' => $baseURL['user'].'ulist',
            'user_department' => $baseURL['user'].'department',
            'user_ulist_modProfile' => $baseURL['user'].'modProfile',
            'user_ulist_addNew' => $baseURL['user'].'addNewMem',
            'user_ulist_auth' => $baseURL['user'].'authList',

            'modules_list' => $baseURL['modules'].'modList',
            'modules_data_list' => $baseURL['modules'].'dataList',
            'modules_add' => $baseURL['modules'].'addMod',
            'modules_list_add_data' => $baseURL['modules'].'addData',

        );
    }





    public function updateMember(User $user, Request $request, $is_add=false) {
        $em = $this->getEM();
        $departmentRespos = $this->getEM()->getRepository('AppBundle:Department');
        $departments = $departmentRespos->findAll();
        $choices = array();

        /**
         * @var  $key
         * @var  $department Department
         */
        foreach ($departments as $key => $department) {
            $choices[intval($department->getId())] = $department->getName();
        }
        $form = $this->createFormBuilder($user)
            ->add('username','text', array(
                'label' => '用户名',
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入用户名'
                )
            ))
            /*->add('mobile','text', array(
                'label' => '手机号',
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入11位数字'
                )
            ))
            ->add('sex','choice', array(
                'label' => '性别',
                'choices' => array(1=>'男',0 =>'女'),
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入'
                )
            ))*/
            ->add('age', 'number', array(
                'label' => '年龄',
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入年龄(只允许数字)'
                )
            ))
            ->add('departmentId', 'choice', array(
                'label' => '部门',
                'choices' => $choices,
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
          /*  ->add('brief', 'textarea', array(
                'label'=>'简介',
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                )
            ))*/
            ->add('password', 'password', array(
                'label' => '密码',
                'required' => false,
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '留空表示不修改密码.'
                )
            ))
            ->add('avatar', FileType::class, array(
                'label' => '头像图片',
                'required' =>false,
                'data_class'=>null,
                'label_attr' =>array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                )
            ))

            ->add('save', SubmitType::class, array(
                'label' => '提交',

                'attr' => array(
                    'class' => 'form-control btn green',
                )
            ))
            ->getForm();

        return $form;
    }

    /**
     * @Template()
     */
    public function userMessage($headTitle,$backUrl=null,$title="提示页面",$content="")
    {

        return $this->render(
            'user/message.html.twig',
            array(
                'title' => $title,
                'headTitle' => $headTitle,
                'content' => $content . " 如果有疑问, 请留言给我们.",
                'backUrl' => $backUrl,
            )
        );
    }





}