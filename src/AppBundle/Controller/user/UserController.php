<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/7/27
 * Time: 下午3:40
 */
namespace AppBundle\Controller\user;

use AppBundle\Controller\BaseController;
use AppBundle\Entity\Authority;
use AppBundle\Entity\Module;
use AppBundle\Entity\User;
use AppBundle\Entity\Department;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\Common\Util\Debug;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\DepartmentTaskType;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use AppBundle\Form\Type\ProfileFormType;

/**
 * Class UserController
 * @package AppBundle\Controller\user
 * @Route("/user/")
 */
class UserController extends BaseController
{
    /**
     * @Route("addDepartment", name="addDepartment")
     * @Template()
     */
    public function addDepartmentAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, '没有足够的权限!');
        $departmentId = $request->get('departmentId');
        /** @var EntityManager $em */
        $em = $this->getEM();
        if (is_string($departmentId)) {//修改部门
            $departmentId = intval($departmentId);
            /** @var EntityManager $em */
            $department = $em->getRepository('AppBundle:Department')->find($departmentId);
            $minister = $department->getMinister();
            $form = $this->createForm(DepartmentTaskType::class, $department);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {


                /* 判断用户是否存在 */
                $userId = $department->getMinister();
                /** @var User $user */
                $user = $em->getRepository('AppBundle:User')->find($userId);
                if(!$user) {
                    return $this->userMessage('您授权的部长用户不存在,请检查ID号!');

                }
                /* 判断用户是否存在 end */





                /** @var Department $task */
                $task = $form->getData();
                $saveUser = $em->getRepository('AppBundle:User')->find($task->getMinister());
                $roles = $saveUser->getRoles();
                $flag = 0;
                foreach ($roles as $role) {
                    if ($role == 'ROLE_ADMIN') {
                        $flag = 1;
                    }
                }

                if ($flag == 0) {
                    $saveUser->addRole('ROLE_ADMIN');
                }



                $inputMinister = $task->getMinister();
                if ($inputMinister != $minister) {
                    $beforeUser = $em->getRepository('AppBundle:User')->find($minister);
                    $roles = $beforeUser->getRoles();
                    $rolesNew = array();
                    foreach ($roles as $role) {
                        if ($role != 'ROLE_ADMIN') {
                            $rolesNew[] = $role;
                        }
                    }
                    $beforeUser->setRoles($rolesNew);
                    $em->persist($beforeUser);
                }
                /** @var File $file */
                /*$file = $task->getImageAvatar();
                if ($file) {
                    $dateTime = new \DateTime('now');
                    $folder = 'huo15upload/'.$dateTime->format('yyyy-mm-dd');
                    $filePrefix = $dateTime->format("yymmddHis");
                    $fileName = $filePrefix .'.'.$file->guessExtension();
                    $file->move(
                        $folder,
                        $fileName
                    );

                    $task->setImageAvatar('/' . $folder.'/'.$fileName);
                }*/
                $task->prePresist();
                $em->persist($task);
                $em->persist($user);
                $em->flush();
                return $this->userMessage('更新部门信息成功!', '/user/department');
            }

        } else {
            $task = new Department();
            $form = $this->createForm(DepartmentTaskType::class, $task);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                /** @var Department $task */
                $task = $form->getData();
                /** @var File $file */
                /*if ($file) {
                    $dateTime = new \DateTime('now');
                    $folder = 'huo15upload/'.$dateTime->format('yyyy-mm-dd');
                    $filePrefix = $dateTime->format("yymmddHis");
                    $fileName = $filePrefix .'.'.$file->guessExtension();
                    $file->move(
                        $folder,
                        $fileName
                    );

                    $task->setImageAvatar('/' . $folder.'/'.$fileName);
                }*/
                $task->prePresist();
                $em->persist($task);
                $em->flush();
                return $this->userMessage('添加部门成功!', '/user/department');


                //return $this->redirectToRoute('task_success');
            }

        }

        return $this->render(
            'user/addDepart.html.twig',
            array(
                'title' => '部门管理 | 会员管理',
                'routes' => $this->returnURL($this->baseURL),
                'huo15form' => $form->createView()
            )

        );

    }

    /**
     * @Route("index", name="userIndex")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {

        /** @var EntityManager $em */
        $em = $this->getEM();
        /** @var User $user */


        $userId = $request->get('userId');
        if (is_string($userId) && $userId > '0') {

            $theUserRoles = $em->getRepository('AppBundle:User')->find($userId)->getRoles();
            $userId = intval($request->get('userId'));
            $userRespos = $em->getRepository('AppBundle:User');
            /** @var User $user */
            $user = $userRespos->findOneBy(
                array(
                    'id' => $userId
                )
            );

            $departmentRespos = $em->getRepository('AppBundle:Department');
            $qb = $departmentRespos->createQueryBuilder('d');
            $departmentName = $qb->select('d.name')
                ->where('d.id = ' . $userId)
                ->getQuery()
                ->getOneOrNullResult();
            $userArr = array();
            $userArr['username'] = $user->getUsername();
            $userArr['age'] = $user->getAge();
            $userArr['department'] = $departmentName['name'];
            return $this->render(
                'user/index.html.twig',
                array(
                    'title' => '会员中心',
                    'routes' => $this->returnURL($this->baseURL),
                    'userArr' => $userArr,
                    'userRoles'=>$theUserRoles,
                    'isCheck' => '1'
                )
            );

        } else {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $departmentRespos = $em->getRepository('AppBundle:Department');
            $qb = $departmentRespos->createQueryBuilder('d');
            $departmentName = $qb->select('d.name')
                ->where('d.id = ' . $user->getDepartmentId())
                ->getQuery()
                ->getOneOrNullResult();
            $userArr = array();
            $userArr['username'] = $user->getUsername();
            $userArr['age'] = $user->getAge();
            $userArr['department'] = $departmentName['name'];
            return $this->render(
                'user/index.html.twig',
                array(
                    'title' => '会员中心',
                    'routes' => $this->returnURL($this->baseURL),
                    'userArr' => $userArr,
                    'isCheck' => 0
                )
            );
        }


    }

    /**
     * @Route("account")
     * @Method("GET")
     * @Template()
     */
    public function accountAction(Request $request)
    {

        $em = $this->getEM();
        $departmentRespos = $em->getRepository('AppBundle:Department');
        $departments = $departmentRespos->findAll();
        $choices = array();

        /**
         * @var  $key
         * @var  $department Department
         */
        foreach ($departments as $key => $department) {
            $choices[$department->getId()] = $department->getName();
        }
        $user = $this->getUser();

        $builder = $this->createFormBuilder($user);
        $form = $builder
            ->add('username', 'text', array(
                'label' => '用户名',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入用户名'
                )
            ))
         /*   ->add('mobile', 'text', array(
                'label' => '手机号',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入11位数字'
                )
            ))
            ->add('sex', 'choice', array(
                'label' => '性别',
                'choices' => array(1 => '男', 0 => '女'),
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入'
                )
            ))
            ->add('age', 'number', array(
                'label' => '年龄',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入年龄(只允许数字)'
                )
            ))*/
            ->add('departmentId', 'choice', array(
                'label' => '部门',
                'choices' => $choices,
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'enabled' => false
                )
            ))
           /* ->add('brief', 'textarea', array(
                'label' => '简介',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                )
            ))*/
            ->add('password', 'password', array(
                'label' => '密码',
                'required' => false,
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '留空表示不修改密码.'
                )
            ))
           /* ->add('avatar', FileType::class, array(
                'label' => '头像图片',
                'required' => false,
                'data_class' => null,
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                )
            ))*/
            ->add('save', SubmitType::class, array(
                'label' => '提交',

                'attr' => array(
                    'class' => 'form-control btn green',
                )
            ))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            /** @var User $task */
            $task = $form->getData();
            /** @var File $file */
            $file = $task->getAvatar();
            if ($file != NULL) {
                $dateTime = new \DateTime('now');
                $folder = 'huo15upload/' . $dateTime->format('yyyy-mm-dd');
                $filePrefix = $dateTime->format("yymmddHis");
                $fileName = $filePrefix . '.' . $file->guessExtension();
                $r = $file->move(
                    $folder,
                    $fileName
                );

                $task->setAvatar('/' . $folder . '/' . $fileName);
            }
            $departmentRespos = $em->getRepository('AppBundle:Department');
            $departmentId = $departmentRespos->createQueryBuilder('d')
                ->select('d.departmentId')
                ->where('d.departmentId=' . $task->getDepartmentId())
                ->getQuery()
                ->getOneOrNullResult();
            if (isset($departmentId['departmentId'])) {
                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                $dateTime = new \DateTime('now');
                $em->persist($task);
                $em->flush();
                header("Content-type: text/html; charset=utf-8");
                var_dump("保存成功!");
                die;
            } else {
                header("Content-type: text/html; charset=utf-8");
                var_dump("部门不存在,请核实后提交!");
                die;
            }


            //return $this->redirectToRoute('task_success');
        }

        return $this->render(
            'user/account.html.twig',
            array(
                'title' => '账号设置 | 会员中心',
                'routes' => $this->returnURL($this->baseURL),
                'huo15form' => $form->createView()
            )

        );
    }

    /**
     * @Route("help")
     * @Method("GET")
     * @Template()
     */
    public function helpAction()
    {


        return $this->render(
            'user/help.html.twig',
            array(
                'title' => '帮助 | 会员中心',
                'routes' => $this->returnURL($this->baseURL)
            )

        );
    }

    /**
     * @Route("ulist")
     * @Method("GET")
     * @Template()
     */
    public function ulistAction()
    {

        return $this->render(
            'user/ulist.html.twig',
            array(
                'title' => '会员列表 | 会员管理',
                'routes' => $this->returnURL($this->baseURL)
            )

        );
    }

    /**
     * @Route("modProfile/{id}", requirements={"id":"\d+"}, defaults={"id":-1})
     * @Method("GET")
     * @Template()
     */
    public function modProfileAction($id)
    {

        if ($id == -1) {
            $datas['username'] = '管理员';
        } else {
            $datas['username'] = '会员' . $id;
        }

        return $this->render(
            'user/modProfile.html.twig',
            array(
                'title' => '会员信息修改 | 会员列表 | 会员管理' . $id,
                'userData' => $datas,
                'routes' => $this->returnURL($this->baseURL)
            )

        );
    }


    /**
     * @Route("department", name="departmentList")
     * @Method("GET")
     * @Template()
     */
    public function departmentAction()
    {


        return $this->render(
            'user/department.html.twig',
            array(
                'title' => '部门列表 | 会员管理',
                'routes' => $this->returnURL($this->baseURL)
            )

        );
    }

    /**
     * @Route("authList")
     * @Method("GET")
     * @Template()
     */
    public function authListAction(Request $request)
    {

        $userId = $request->get('userId');
        if (!isset($userId)) {
            return $this->render(
                'user/message.html.twig',
                array(
                    'title' => '错误',
                    'headTitle' => '权限不足',
                    'content' => '您访问的路径是非法的! 如果有疑问, 请留言给我们',
                    'backUrl' => $this->generateUrl('departmentList'),
                )
            );
        }
        $userId = intval($userId);
        /** @var User $user */
        $user = $this->getEM()->getRepository('AppBundle:User')
            ->find($userId);

        /** @var User $sessionUser */
        $sessionUser = $this->getUser();
        if ($sessionUser->getId() != 1) {
            $sessionDepartment = $sessionUser->getDepartmentId();
            $userDepartment = $user->getDepartmentId();

            if ($sessionDepartment != $userDepartment) {
                return $this->render(
                    'user/message.html.twig',
                    array(
                        'title' => '错误',
                        'headTitle' => '权限不足',
                        'content' => '您不能修改其他部门用户的权限! 如果有疑问, 请留言给我们',
                        'backUrl' => $this->generateUrl('departmentList'),
                    )
                );
            }

        }


        //获取默认权限
        /** @var EntityManager $em */
        $em = $this->getEM();
        $each_modAuthor_arr = array();
        $each_dataAuthor_arr = array();
        $each_modAuthor = $this->getEM()->getRepository('AppBundle:GlobalSet')
            ->findOneBy(array('name' => 'each_modAuthor'));
        $each_modAuthor = str_pad(decbin(intval($each_modAuthor->getValue())),3,'0',STR_PAD_LEFT);
        for($i=0;$i<strlen($each_modAuthor);$i++) {
            $each_modAuthor_arr[$i] = $each_modAuthor[$i];
        }
        $each_dataAuthor = $this->getEM()->getRepository('AppBundle:GlobalSet')
            ->findOneBy(array('name' => 'each_dataAuthor'));

        $each_dataAuthor = str_pad(decbin(intval($each_dataAuthor->getValue())),3,'0',STR_PAD_LEFT);
        for($i=0;$i<strlen($each_dataAuthor);$i++) {
            $each_dataAuthor_arr[$i] = $each_dataAuthor[$i];
        }

        //获取模块列表
        if ($sessionUser->getId() == 1) {
            //管理员权限
            $modules = $this->getEM()->getRepository('AppBundle:Module')
                ->findAll();
        } else {
            //部长权限
            $sessionId = $sessionUser->getId();

            $query = $em->createQuery(
                'SELECT m FROM AppBundle:Module m WHERE m.id IN (SELECT a.modId FROM AppBundle:Authority a WHERE a.userId = :sId)'
            )
                ->setParameter('sId', $sessionId);
            $modules = $query->getResult();
        }

        $modulesAndAuthor = array();
        /**
         * @var  $key
         * @var Module $module
         */
        foreach ($modules as $key => $module) {
            $modulesAndAuthor[$key]['module'] = $module;
            /** @var Authority $authorObj */
            $authorObj = $em->getRepository('AppBundle:Authority')
                ->findOneBy(array('userId' => $userId, 'modId' => $module->getId()));
            if (is_object($authorObj)) {
                $modAndAuthor_each_modAuthor_arr = array();
                $modAndAuthor_each_dataAuthor_arr = array();
                $each_modAuthor = str_pad(decbin(intval($authorObj->getModAuthor())),3,'0',STR_PAD_LEFT);
                for($i=0;$i<strlen($each_modAuthor);$i++) {
                    $modAndAuthor_each_modAuthor_arr[$i] = $each_modAuthor[$i];
                }
                $each_dataAuthor = str_pad(decbin(intval($authorObj->getDataAuthor())),3,'0',STR_PAD_LEFT);
                for($i=0;$i<strlen($each_dataAuthor);$i++) {
                    $modAndAuthor_each_dataAuthor_arr[$i] = $each_dataAuthor[$i];
                }

                $modulesAndAuthor[$key]['each_mod_author'] = $modAndAuthor_each_modAuthor_arr;
                $modulesAndAuthor[$key]['each_data_author'] = $modAndAuthor_each_dataAuthor_arr;
            } else {
                $modulesAndAuthor[$key]['each_mod_author'] = $each_modAuthor_arr;
                $modulesAndAuthor[$key]['each_data_author'] = $each_dataAuthor_arr;
            }
        }


        return $this->render(
            'user/authList.html.twig',
            array(
                'title' => '权限列表 | 会员管理',
                'routes' => $this->returnURL($this->baseURL),
                'userObj' => $user,
                'each_modAuthor_arr' => $each_modAuthor_arr,
                'each_dataAuthor_arr' => $each_dataAuthor_arr,

                'modulesAndAuthor' => $modulesAndAuthor
            )

        );
    }

    /**
     * @Route("deleteUser", name="deleteUser")
     */
    public function deleteUser(Request $request)
    {

        //这里添加权限验证

        $userId = $request->get('userId');
        if (isset($userId) && $userId != 1) {
            $userId = intval($userId);
            $user = $this->getEM()->getRepository('AppBundle:User')->find($userId);
            $deleteDepartmentId = $user->getDepartmentId();
            /** @var User $myuser */
            $myuser = $this->getUser();
            $myDepartmentId = $myuser->getDepartmentId();

            $minister = $this->getEM()->getRepository('AppBundle:Department')->findOneBy(array(
                'minister' => $userId
            ));

            if ($minister) {
                return $this->userMessage('操作错误!',$this->generateUrl('app_user_user_ulist'),'操作错误', '请先撤去用户的部长职务,再删除他.');
            }


            if ($myuser->getId() !=1) {
                if ($myDepartmentId == $deleteDepartmentId) {
                    $this->getEM()->remove($user);
                    $this->getEM()->flush();
                } else {

                    return $this->render(
                        'user/message.html.twig',
                        array(
                            'title' => '错误',
                            'headTitle' => '删除失败',
                            'content' => '您不可以删除别的部门成员!如果有疑问,请留言给我们',
                            'backUrl' => $this->generateUrl('app_user_user_ulist'),
                        )
                    );
                }
            } else if ($myuser->getId() == 1 ) {
                $this->getEM()->remove($user);
                $this->getEM()->flush();
            }


        }
        if ($userId == 1) {
            return $this->render(
                'user/message.html.twig',
                array(
                    'title' => '错误',
                    'headTitle' => '删除失败',
                    'content' => '管理员账号不可以删除!如果有疑问,请留言给我们',
                    'backUrl' => $this->generateUrl('app_user_user_ulist'),
                )
            );
        }

        return $this->render(
            'user/message.html.twig',
            array(
                'title' => '操作成功',
                'headTitle' => '删除成功',
                'content' => '如果有疑问,请留言给我们',
                'backUrl' => $this->generateUrl('app_user_user_ulist'),
            )
        );


    }

    /**
     * @Route("deleteDepartment", name="deleteDepartment")
     */
    public function deleteDepartment(Request $request)
    {
        //这里添加权限验证

        $departmentId = $request->get('departmentId');
        if (isset($departmentId) && $departmentId != 1) {
            $departmentId = intval($departmentId);
            $department = $this->getEM()->getRepository('AppBundle:Department')->find($departmentId);
            $this->getEM()->remove($department);
            $this->getEM()->flush();

        }
        if ($departmentId == 1) {
            return $this->render(
                'user/message.html.twig',
                array(
                    'title' => '错误',
                    'headTitle' => '删除失败',
                    'content' => '董事会不可以删除! 如果有疑问, 请留言给我们',
                    'backUrl' => $this->generateUrl('departmentList'),
                )
            );
        }

        return $this->render(
            'user/message.html.twig',
            array(
                'title' => '操作成功',
                'headTitle' => '删除成功',
                'content' => '如果有疑问,请留言给我们',
                'backUrl' => $this->generateUrl('departmentList'),
            )
        );


    }

    /**
     * @Route("addNewMem", name="addNewMember")
     * @Template()
     */
    public function addNewMem(Request $request)
    {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        /** @var User $myUser */
        $myUser = $this->getUser();
        $isRegister = 0;
        $userId = $request->get('userId');
        if (is_string($userId) && intval($userId)>0) {
            /** @var User $user */
            $user = $userManager->findUserBy(
                array(
                    'id' => $userId
                )
            );
            $isRegister = 0;
        } else {
            /** @var User $user */
            $user = $userManager->createUser();
            $user->setEnabled(true);
            $isRegister = 1;
        }



        $event = new GetResponseUserEvent($user, $request);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $this->createForm(ProfileFormType::class,$user);
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            /** @var User $saveUser */
            $saveUser = $form->getData();

            if ($isRegister) {
                $result = $userManager->findUserByUsername($saveUser->getUsername());
                if (is_object($result)) {
                    return $this->render(
                        'user/message.html.twig',
                        array(
                            'title' => '错误',
                            'headTitle' => '用户名已经存在!',
                            'content' => '请重新填写用户名! 如果有疑问, 请留言给我们',
                            'backUrl' => '',
                        )
                    );
                }


                $result = $userManager->findUserByUsername($saveUser->getEmail());
                if (is_object($result)) {
                    return $this->render(
                        'user/message.html.twig',
                        array(
                            'title' => '错误',
                            'headTitle' => '邮箱已经存在!',
                            'content' => '请重新填写邮箱! 如果有疑问, 请留言给我们',
                            'backUrl' => '',
                        )
                    );
                }
            } else {
                /** @var User $result */
                $result = $userManager->findUserByUsername($saveUser->getUsername());
                if (is_object($result)) {
                    if ($result->getId() != $saveUser->getId()) {
                        return $this->render(
                            'user/message.html.twig',
                            array(
                                'title' => '错误',
                                'headTitle' => '用户名已经存在!',
                                'content' => '请重新填写用户名! 如果有疑问, 请留言给我们',
                                'backUrl' => '',
                            )
                        );
                    }
                }

                /** @var User $result */
                $result = $userManager->findUserByEmail($saveUser->getEmail());
                if (is_object($result)) {
                    if ($result->getId() != $saveUser->getId()) {
                        return $this->render(
                            'user/message.html.twig',
                            array(
                                'title' => '错误',
                                'headTitle' => '邮箱已经存在!',
                                'content' => '请重新填写邮箱! 如果有疑问, 请留言给我们',
                                'backUrl' => '',
                            )
                        );
                    }
                }

            }


            if ($myUser->getId() == 1) {
                //管理员
                $userManager->updateUser($user);

            } else {
                if ($myUser->getDepartmentId() == $user->getDepartmentId()) {
                    $userManager->updateUser($user);
                } else {
                    return $this->render(
                        'user/message.html.twig',
                        array(
                            'title' => '错误',
                            'headTitle' => '权限不足',
                            'content' => '您不可以添加或者修改其他部门的成员! 如果有疑问, 请留言给我们',
                            'backUrl' => $this->generateUrl('departmentList'),
                        )
                    );
                }
            }


            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('modifySuccess');
                $response = new RedirectResponse($url);
            }
            return $response;
        }

        return $this->render('user/addNewMem.html.twig', array(
            'title' => '修改会员信息',
            'routes' => $this->baseURL,
            'form' => $form->createView(),
        ));
    }




}