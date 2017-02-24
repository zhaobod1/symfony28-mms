<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/7/29
 * Time: 上午10:33
 */

namespace AppBundle\Controller\modules;


use AppBundle\Controller\BaseController;
use AppBundle\Entity\Authority;
use AppBundle\Entity\Field;
use AppBundle\Entity\ModData;
use AppBundle\Entity\Module;
use AppBundle\Entity\SubData;
use AppBundle\Entity\SubDataFileUpload;
use Doctrine\Common\Util\Debug;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Model\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Finder\Expression\Regex;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Form\Type\AddModFormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\huo15class\UploadHandler;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Class ModulesController
 * @package AppBundle\Controller\modules
 * @Route("/modules/")
 */
class ModulesController extends BaseController
{


    /**
     * @Route("modList")
     * @Method("GET")
     * @Template()
     */
    public function modListAction(Request $request)
    {

        //判断用户权限
        /** @var User $sessionUser */
        $sessionUser = $this->getUser();
        if ($sessionUser->getId() == 1) {
            $modules = $this->getEM()->getRepository('AppBundle:Module')
                ->findAll();


        } else {
            $authorList = $this->getEM()->getRepository('AppBundle:Authority')
                ->findBy(array('userId' => $sessionUser->getId()));
            /**
             * @var  $key
             * @var Authority $item
             */
            foreach ($authorList as $key => $item) {
                if ($item->getModAuthor() >= 4) {
                    $module = $this->getEM()->getRepository('AppBundle:Module')
                        ->find($item->getModId());
                    $modules[$key] = $module;
                }

            }

        }
	    foreach ($modules as $key => $module) {
		    if ($module == null) {
			    unset($modules[$key]);
		    }
	    }

        return $this->render(
            'modules/modList.html.twig',
            array(
                'title' => '模块列表 | 模块管理',
                'routes' => $this->returnURL($this->baseURL),
                'modules' => $modules
            )

        );


    }

    /**
     * @Route("dataList")
     * @Method("GET")
     * @Template()
     */
    public function dataListAction(Request $request)
    {
        $moduleId = $request->get('moduleId');
        /** @var EntityManager $em */
        $em = $this->getEM();
        //获取字段列表
        $fieldList = $em->getRepository('AppBundle:Field')
            ->findBy(
                array('moduleId' => $moduleId),
                array('id' => 'ASC')
            );

        if (count($fieldList) == 0) {
            return $this->userMessage('请给模块添加字段',$this->generateUrl('app_modules_modules_modlist'),'请给模块添加字段');
        }
        $fieldGroup = array();
        /**
         * @var  $key
         * @var Field $value
         */
        foreach ($fieldList as $key => $value) {
            $fieldGroup[$key] = $value;
        }

        if (count($fieldGroup) < 4) {//不够4个补空
            for ($i = 0; $i < (4 - count($fieldGroup)); $i++) {
                $f = new Field();
                $fieldGroup[] = $f;
            }
        }

        return $this->render(
            'modules/dataList.html.twig',
            array(
                'title' => '数据列表 | 模块列表 | 模块管理',
                'routes' => $this->returnURL($this->baseURL),
                'fieldGroup' => $fieldGroup,
                'huo15ModuleId' => $moduleId,
            )

        );
    }


    /**
     * @Route("addMod")
     * @Template()
     */
    public function addModAction(Request $request)
    {
        $moduleId = $request->get('moduleId');
        $module = '';
        if (isset($moduleId)) {
            $moduleId = intval($moduleId);
            //修改模块
            $module = $this->getEM()->getRepository('AppBundle:Module')
                ->find($moduleId);
            $avatar = $module->getAvatar();
        } else {
            $module = new Module();
        }
        $form = $this->createForm(AddModFormType::class, $module, array(
            'attr' => array(
                'id' => 'addMod',
                'role' => 'form'
            )
        ));

        $form->setData($module);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var Module $moduleTask */
            $moduleTask = $form->getData();

            /** @var File $file */
            $file = $moduleTask->getAvatar();
            if ($file) {
                if (isset($avatar)) {
                    $imgLink = $this->get('kernel')->getRootDir() . '/../web/' . urldecode($avatar);
                    try {
                        if (file_exists($imgLink)) {
                            unlink($imgLink);
                        }

                    } catch (Exception $e) {
                        $x = $e;
                    }

                }

                $dateTime = new \DateTime('now');
                $folder = 'huo15upload/' . $dateTime->format('y-m-d');
                $filePrefix = $dateTime->format("ymdHis");
                $fileName = $filePrefix . '.' . $file->guessExtension();
                $file->move(
                    $folder,
                    $fileName
                );
                $path = '/' . $folder . '/' . $fileName;
                $moduleTask->setAvatar(urlencode($path));


            }

            $this->getEM()->persist($moduleTask);
            $this->getEM()->flush();
            if (isset($moduleId)) {


                return $this->render(
                    'user/message.html.twig',
                    array(
                        'title' => '修改模块成功',
                        'headTitle' => '修改模块成功!',
                        'content' => '恭喜您!成功修改模块!如果有疑问,请留言给我们',
                        'backUrl' => $this->generateUrl('app_modules_modules_modlist'),
                    )
                );
            } else {
                return $this->render(
                    'user/message.html.twig',
                    array(
                        'title' => '添加模块成功',
                        'headTitle' => '添加模块成功!',
                        'content' => '恭喜您!成功添加新模块!如果有疑问,请留言给我们',
                        'backUrl' => $this->generateUrl('app_modules_modules_modlist'),
                    )
                );
            }


        }


        return $this->render(
            'modules/addMod.html.twig',
            array(
                'title' => '数据列表 | 模块列表 | 模块管理',
                'routes' => $this->returnURL($this->baseURL),
                'moduleId' => $moduleId,
                'form' => $form->createView()
            )

        );
    }


    public function fileUpGet(Request $request)
    {
        $fileId = $request->get('fileId');
        $clientId = $request->get('clientId');
        $addUrl = '';
        if (isset($clientId)) {
            $clientId = intval($clientId);
            $addUrl = '&clientId=' . $clientId;

        }
        preg_match('/form\[(.*)\]/', $fileId, $matches);
        $fileId = $matches[1];
        $clientId = $request->get('clientId');
        if (isset($clientId)) {
            $clientId = intval($clientId);
            /** @var EntityManager $em */
            $em = $this->getEM();

            $subDataUploadRespos = $em->getRepository('AppBundle:SubDataFileUpload');
            $subDataUploads = $subDataUploadRespos->findBy(array(
                'clientId' => $clientId
            ));

            $donePathArr = array();
            /** @var SubDataFileUpload $subDataUpload */
            foreach ($subDataUploads as $key => $subDataUpload) {
                $path = $subDataUpload->getFilePath();
                $pathArr = explode('->', trim($path));

                if (preg_match('/' . $fileId . '_h/', $pathArr[0])) {
                    $donePathArr[$key]['url'] = $pathArr[1];
                    $donePathArr[$key]['thumbnailUrl'] = $pathArr[1];
                    $donePathArr[$key]['deleteType'] = 'GET';
                    $donePathArr[$key]['fileId'] = $fileId;
                    $donePathArr[$key]['name'] = substr($pathArr[1], 22);
                    $donePathArr[$key]['prefix'] = substr($donePathArr[$key]['name'], 0, 12);
                    $donePathArr[$key]['size'] = '';
                    $donePathArr[$key]['type'] = 'file';
                    $donePathArr[$key]['deleteUrl'] = '/modules/addData?upload=1&moduleId=7&file=' . urlencode($pathArr[1]) . $addUrl;


                }


            }

            $res = array();
            $res['files'] = $donePathArr;

            echo json_encode($res);
            die;


        }


    }

    public function postUploadFiles(Request $request, $moudleId)
    {

        $fileId = $request->get('fileId');
        $clientId = $request->get('clientId');
        $addUrl = '';
        if (isset($clientId)) {
            $clientId = intval($clientId);
            $addUrl = '&clientId=' . $clientId;

        }
        preg_match('/form\[(.*)\]/', $fileId, $matches);
        $fileId = $matches[1];
        /** @var FileBag $upload */
        $upload = $request->files->get('form');
        $returnFiles = array();
        if ($upload) {
            $arr = array();
            $arr[] = $upload[$fileId];
            /** @var File $file */
            foreach ($arr as $key => $file) {

                if ($file != NULL) {
                    $dateTime = new \DateTime('now');
                    $folder = 'huo15upload/' . $dateTime->format('y-m-d');
                    $filePrefix = $dateTime->format("ymdHis");
                    $fileName = $filePrefix . '.' . $file->guessExtension();
                    $returnFiles[$key]['size'] = $file->getSize();
                    $returnFiles[$key]['type'] = $file->getType();
                    $returnFiles[$key]['name'] = $fileName;
                    $returnFiles[$key]['prefix'] = $filePrefix;
                    $returnFiles[$key]['fileId'] = $fileId;
                    $r = $file->move(
                        $folder,
                        $fileName
                    );

                    $returnFiles[$key]['url'] = '/' . $folder . '/' . $fileName;
                    $returnFiles[$key]['thumbnailUrl'] = '/' . $folder . '/' . $fileName;
                    $returnFiles[$key]['deleteUrl'] = '/modules/addData?upload=1&moduleId=' . $moudleId . $addUrl . '&file=' . urlencode('/' . $folder . '/' . $fileName);
                    $returnFiles[$key]['deleteType'] = 'GET';

                }
            }

            $res['files'] = $returnFiles;
            //$res['fileId'] = $fileId;
            return $res;


        }
    }

    public function deleteUploadFiles(Request $request)
    {
        $files = $request->get('file');
        /** @var EntityManager $em */
        $em = $this->getEM();
        $clientId = $request->get('clientId');
        if (isset($clientId)) {
            $clientId = intval($clientId);
            $subDataUploadRespos = $em->getRepository('AppBundle:SubDataFileUpload');
            $subDataUploads = $subDataUploadRespos->findBy(array(
                'clientId' => $clientId
            ));
            /** @var SubDataFileUpload $subDataUpload */
            foreach ($subDataUploads as $key => $subDataUpload) {
                $path = $subDataUpload->getFilePath();
                $pathArr = explode('->', trim($path));
                if ($files == trim($pathArr[1])) {
                    $em->remove($subDataUpload);
                    $em->flush();

                }


            }


        }


        $res = array();

        if (@unlink($this->get('kernel')->getRootDir() . '/../web' . $files)) {
            $res[$files] = true;
            echo json_encode($res);
            die;
        } else {
            $res[$files] = true;
            echo json_encode($res);
            die;
        }
    }

    /**
     * @Route("detailData")
     * @Template()
     */
    public function detailDataAction(Request $request) {
        /** @var EntityManager $em */
        $em = $this->getEM();
        $moduleId = $request->get('moduleId');
        $dataId = $request->get('clientId');
        if (isset($dataId)) {
            //修改数据
            $module = $em->getRepository('AppBundle:Module')
                ->find($moduleId);
            $clientInfo = $em->getRepository('AppBundle:SubData')
                ->findBy(
                    array(
                        'clientId' => $dataId
                    )
                );


            $fieldList = $em->getRepository('AppBundle:Field')
                ->findBy(array('moduleId' => $moduleId));
            $defaultData = array();
            /** @var FormBuilder $qb */
            $qb = $this->createFormBuilder($defaultData);

            $default_data = '';
            /** @var Field $value */
            foreach ($fieldList as $value) {

                /** @var SubData $v */
                foreach ($clientInfo as $v) {
                    if ($v->getFieldName() == $value->getFieldID()) {
                        $default_data = $v->getValue();
                    }
                }
                $type = '';
                switch ($value->getType()) {
                    case '0':
                        $type = 'text';
                        break;
                    case '1':
                        $type = 'choice';
                        break;
                    case '2':
                        $type = 'file';
                        break;
                    default:
                        $type = 'text';
                        break;

                }

                if ($type == 'file') {
                    $qb->add($value->getFieldID(), $type, array(
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => '请输入' . $value->getFieldName()
                        )
                    ));
                    $qb->add($value->getFieldID() . '_h', 'hidden', array(
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),

                    ));
                } elseif ($type != 'choice') {
                    $qb->add($value->getFieldID(), $type, array(
                        'data' => $default_data,
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => '请输入' . $value->getFieldName()
                        ),
                        'data_class' => null

                    ));
                }

            }


            /** @var Field $choiceField */
            $choiceFieldList = $em->getRepository('AppBundle:Field')
                ->findBy(array(
                    'moduleId' => $moduleId,
                    'type' => '1'
                ));


            if (count($choiceFieldList) > 0) {
                foreach ($choiceFieldList as $key => $choiceField) {
                    if (is_object($choiceField)) {
                        $choices = array();
                        $text = nl2br($choiceField->getValue());//将分行符"\r\n"转义成HTML的换行符"<br />"
                        $choices = explode("<br />", $text);//"<br />"作为分隔切成数组

                        $qb->add($choiceField->getFieldID(), ChoiceType::class, array(
                            'data' => $default_data,
                            'label' => $choiceField->getFieldName(),
                            'choices' => $choices,
                            'label_attr' => array(
                                'class' => 'control-label'
                            ),
                            'attr' => array(
                                'class' => 'form-control',
                            ),
                            'data_class' => null
                        ));
                    }
                }
            }




            $form = $qb->getForm();
            $form->handleRequest($request);
            return $this->render(
                'modules/addData.html.twig',
                array(
                    'title' => '数据详情 | 模块列表 | 模块管理',
                    'routes' => $this->returnURL($this->baseURL),
                    'form' => $form->createView(),
                    'module' => $module,
                    'is_detail' => true
                )

            );

        }


    }

    /**
     * @Route("addData")
     * @Template()
     */
    public function addDataAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getEM();
        $moduleId = $request->get('moduleId');

        $is_upload = $request->get('upload');
        $dataId = $request->get('clientId');

        if (isset($is_upload)) {
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'OPTIONS':

                case 'GET':
                    $clientId = $request->get('clientId');
                    $file = $request->get('file');
                    if (isset($file)) {
                        //删除文件
                        $this->deleteUploadFiles($request);
                        die;
                    }
                    if (isset($clientId)) {
                        //获取文件
                        $this->fileUpGet($request);
                        die;
                    }


                    break;

                case 'POST':

                    $res = $this->postUploadFiles($request, $moduleId);
                    echo json_encode($res);


                    break;
                case 'DELETE':
                    $this->deleteUploadFiles($request);
                    break;
                default:
                    //$upload_handler->header('HTTP/1.1 405 Method Not Allowed');
            }

            die;

        }
        if (isset($dataId)) {
            //修改数据
            $module = $em->getRepository('AppBundle:Module')
                ->find($moduleId);
            $clientInfo = $em->getRepository('AppBundle:SubData')
                ->findBy(
                    array(
                        'clientId' => $dataId
                    )
                );


            $fieldList = $em->getRepository('AppBundle:Field')
                ->findBy(array('moduleId' => $moduleId));
            $defaultData = array();
            /** @var FormBuilder $qb */
            $qb = $this->createFormBuilder($defaultData);

            $default_data = '';
            /** @var Field $value */
            foreach ($fieldList as $value) {

                /** @var SubData $v */
                foreach ($clientInfo as $v) {
                    if ($v->getFieldName() == $value->getFieldID()) {
                        $default_data = $v->getValue();
                    }
                }
                $type = '';
                switch ($value->getType()) {
                    case '0':
                        $type = 'text';
                        break;
                    case '1':
                        $type = 'choice';
                        break;
                    case '2':
                        $type = 'file';
                        break;
                    default:
                        $type = 'text';
                        break;

                }

                if ($type == 'file') {
                    $qb->add($value->getFieldID(), $type, array(
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => '请输入' . $value->getFieldName()
                        )
                    ));
                    $qb->add($value->getFieldID() . '_h', 'hidden', array(
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),

                    ));
                } elseif ($type != 'choice') {
                    $qb->add($value->getFieldID(), $type, array(
                        'data' => $default_data,
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => '请输入' . $value->getFieldName()
                        ),
                        'data_class' => null

                    ));
                }

            }


            /** @var Field $choiceField */
            $choiceFieldList = $em->getRepository('AppBundle:Field')
                ->findBy(array(
                    'moduleId' => $moduleId,
                    'type' => '1'
                ));


            if (count($choiceFieldList) > 0) {
                foreach ($choiceFieldList as $key => $choiceField) {
                    if (is_object($choiceField)) {
                        $choices = array();
                        $text = nl2br($choiceField->getValue());//将分行符"\r\n"转义成HTML的换行符"<br />"
                        $choices = explode("<br />", $text);//"<br />"作为分隔切成数组

                        $qb->add($choiceField->getFieldID(), ChoiceType::class, array(
                            'data' => $default_data,
                            'label' => $choiceField->getFieldName(),
                            'choices' => $choices,
                            'label_attr' => array(
                                'class' => 'control-label'
                            ),
                            'attr' => array(
                                'class' => 'form-control',
                            ),
                            'data_class' => null
                        ));
                    }
                }
            }


            $qb->add('save', SubmitType::class, array(
                'label' => '提交',
                'attr' => array(
                    'class' => 'form-control btn green',
                )
            ));

            $form = $qb->getForm();
            $form->handleRequest($request);
            if ($form->isValid()) {
                $formData = $form->getData();

                $em->getConnection()->beginTransaction();
                try {


                    $subDataUploads = $em->getRepository('AppBundle:SubDataFileUpload')
                        ->findBy(array(
                            'clientId' => $dataId
                        ));

                    if ($subDataUploads) {
                        foreach ($subDataUploads as $dataFileUpload) {
                            $em->remove($dataFileUpload);
                            $em->flush();
                        }
                    }


                    foreach ($formData as $key => $value) {
                        if ($value != null) {

                            $subData = $em->getRepository('AppBundle:SubData')
                                ->findOneBy(
                                    array(
                                        'clientId' => $request->get('clientId'),
                                        'fieldName' => $key
                                    )
                                );


                            if (preg_match('/.*;.*/', $value)) {
                                $pathArr = explode(';', $value);
                                foreach ($pathArr as $item) {
                                    if (strlen($item) > 0) {
                                        /** @var SubDataFileUpload $subDataUpload */
                                        $subDataUpload = new SubDataFileUpload();
                                        $subDataUpload->setClientId($dataId);
                                        $subDataUpload->setFilePath($key . '->' . $item);
                                        $em->persist($subDataUpload);
                                        $em->flush();
                                    }

                                }


                            } else {
                                $subData->setValue($value);
                                $em->persist($subData);
                                $em->flush();
                            }

                        }

                    }


                    $em->commit();
                    return $this->userMessage('修改数据成功!', $this->generateUrl('app_modules_modules_modlist'), '操作成功!', '恭喜您!添加新数据成功!');


                } catch (Exception $e) {
                    $em->getConnection()->rollBack();
                    return $this->userMessage('添加数据失败!' . $e, $this->generateUrl('app_modules_modules_modlist'), '操作失败!', '操作异常!请联系技术人员!!');

                }


            }

        } else {
            //新增数据
            $module = $em->getRepository('AppBundle:Module')
                ->find($moduleId);
            //获取字段列表
            $fieldList = $em->getRepository('AppBundle:Field')
                ->findBy(array('moduleId' => $moduleId));
            $defaultData = array();
            /** @var FormBuilder $qb */
            $qb = $this->createFormBuilder($defaultData);
            /** @var Field $value */
            foreach ($fieldList as $value) {
                $type = '';
                switch ($value->getType()) {
                    case '0':
                        $type = 'text';
                        break;
                    case '1':
                        $type = 'choice';
                        break;
                    case '2':
                        $type = 'file';
                        break;
                    default:
                        $type = 'text';
                        break;

                }

                if ($type == 'file') {
                    $qb->add($value->getFieldID(), $type, array(
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => '请输入' . $value->getFieldName()
                        )
                    ));
                    $qb->add($value->getFieldID() . '_h', 'hidden', array(
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),

                    ));
                } elseif ($type != 'choice') {
                    $qb->add($value->getFieldID(), $type, array(
                        'label' => $value->getFieldName(),
                        'required' => $value->getRequired(),
                        'label_attr' => array(
                            'class' => 'control-label'
                        ),
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => '请输入' . $value->getFieldName()
                        )
                    ));
                }


            }


            /** @var Field $choiceField */
            $choiceFieldList = $em->getRepository('AppBundle:Field')
                ->findBy(array(
                    'moduleId' => $moduleId,
                    'type' => '1'
                ));


            if (count($choiceFieldList) > 0) {
                foreach ($choiceFieldList as $key => $choiceField) {
                    if (is_object($choiceField)) {
                        $choices = array();
                        $text = nl2br($choiceField->getValue());//将分行符"\r\n"转义成HTML的换行符"<br />"
                        $choices = explode("<br />", $text);//"<br />"作为分隔切成数组
                        $newChoices = array();
                        foreach ($choices as $choice) {
                            $newChoices[$choice] = $choice;
                        }
                        $qb->add($choiceField->getFieldID(), ChoiceType::class, array(
                            'label' => $choiceField->getFieldName(),
                            'choices' => $choices,
                            'label_attr' => array(
                                'class' => 'control-label'
                            ),
                            'attr' => array(
                                'class' => 'form-control',
                            ),
                            'data_class' => null
                        ));
                    }
                }
            }


            $qb->add('save', SubmitType::class, array(
                'label' => '提交',
                'attr' => array(
                    'class' => 'form-control btn green',
                )
            ));


            $form = $qb->getForm();
            $form->handleRequest($request);

            if ($form->isValid()) {
                $formData = $form->getData();
                $em->getConnection()->beginTransaction();
                try {
                    /** @var ModData $modData */
                    $modData = new ModData();
                    $modData->setModuleId($moduleId);
                    $modData->prePresist();
                    $em->persist($modData);
                    $em->flush();
                    foreach ($formData as $key => $value) {
                        if ($value != null) {


                            if (preg_match('/.*;.*/', $value)) {
                                $pathArr = explode(';', $value);
                                foreach ($pathArr as $item) {
                                    if (strlen($item) > 0) {
                                        /** @var SubDataFileUpload $subDataUpload */
                                        $subDataUpload = new SubDataFileUpload();
                                        $subDataUpload->setClientId($modData->getClientId());
                                        $subDataUpload->setFilePath($key . '->' . $item);
                                        $em->persist($subDataUpload);
                                        $em->flush();
                                    }

                                }


                            } else {
                                $subData = new SubData();
                                $subData->setFieldName($key);
                                $subData->setValue($value);
                                $subData->setClientId($modData->getClientId());
                                $em->persist($subData);
                                $em->flush();
                            }
                        }

                    }
                    $em->commit();
                    return $this->userMessage('添加数据成功!', $this->generateUrl('app_modules_modules_modlist'), '操作成功!', '恭喜您!添加新数据成功!');


                } catch (Exception $e) {
                    $em->getConnection()->rollBack();
                    return $this->userMessage('添加数据失败!' . $e, $this->generateUrl('app_modules_modules_modlist'), '操作失败!', '操作异常!请联系技术人员!!');

                }


            }

        }

        return $this->render(
            'modules/addData.html.twig',
            array(
                'title' => '数据列表 | 模块列表 | 模块管理',
                'routes' => $this->returnURL($this->baseURL),
                'form' => $form->createView(),
                'module' => $module,
                'is_detail' => 0
            )

        );
    }

    /**
     * @Route("deleteData")
     * @Template()
     */
    public function deleteDataAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getEM();
        $clientId = $request->get('clientId');

        if (isset($clientId)) {
            $clientId = intval($clientId);
            $em->getConnection()->beginTransaction();
            try {
                //modData
                $modData = $em->getRepository('AppBundle:ModData')
                    ->findOneBy(
                        array(
                            'clientId' => $clientId
                        )
                    );
                $em->remove($modData);
                $subDatas = $em->getRepository('AppBundle:SubData')
                    ->findBy(
                        array(
                            'clientId' => $clientId
                        )
                    );

                foreach ($subDatas as $subData) {

                    $em->remove($subData);

                }

                $em->flush();

                $em->getConnection()->commit();
                return $this->userMessage('删除数据成功!', $this->generateUrl('app_modules_modules_modlist'), '操作成功!', '客户档案已经删除成功!!');


            } catch (Exception $e) {
                $em->getConnection()->rollBack();
                return $this->userMessage('删除数据失败!' . $e, $this->generateUrl('app_modules_modules_modlist'), '操作失败!', '操作异常!请联系技术人员!!');

            }

        }


    }


    /**
     * @Route("addModField", name="addModField")
     * @Template()
     */
    public function addModField(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getEM();
        $moduleId = intval($request->get('moduleId'));
        $id = $request->get('id');
        if (isset($id)) {
            $field = $em->getRepository('AppBundle:Field')
                ->findOneBy(array('id' => intval($id)));
        } else {
            $field = new Field();
        }
        $form = $this->createFormBuilder($field)
            ->add('fieldID', 'text', array(
                'label' => '字段ID号',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入唯一的ID号, 以字母开头.'
                )
            ))
            ->add('fieldName', 'text', array(
                'label' => '字段名称',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入字段名称.'
                )
            ))
            ->add('type', 'choice', array(
                'label' => '字段名称',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入字段名称.'
                ),
                'choices' => array(
                    0 => '输入框',
                    1 => '下拉菜单',
                    2 => '多文件上传',
                )
            ))
            ->add('required', 'choice', array(
                'label' => '是否必填',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                ),
                'choices' => array(
                    0 => '否',
                    1 => '是',
                )
            ))
            ->add('value', 'textarea', array(
                'label' => '字段值(下拉菜单专用)',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入下拉菜单的选项值, 按回车分组.'
                )
            ))
            ->add('save', SubmitType::class, array(
                'label' => '提交',
                'attr' => array(
                    'class' => 'form-control btn green',
                )
            ))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var Field $fieldTask */
            $fieldTask = $form->getData();


            if (isset($id)) {
                $is = $em->getRepository('AppBundle:Field')
                    ->findBy(array('fieldID' => $fieldTask->getFieldID()));
                if (count($is) > 1) {
                    return $this->userMessage('此字段ID已经存在!');
                }
            } else {
                $is = $em->getRepository('AppBundle:Field')
                    ->findOneBy(array('moduleId' => $moduleId, 'fieldID' => $fieldTask->getFieldID()));

                if (is_object($is)) {
                    return $this->userMessage('此字段ID已经存在!');

                }
            }

            $field->setModuleId($moduleId);
            $field->setFieldID($fieldTask->getFieldID());
            $field->setValue($fieldTask->getValue());
            $field->setFieldName($fieldTask->getFieldName());
            $field->setType($fieldTask->getType());
            $field->setRequired($fieldTask->getRequired());

            $em->persist($field);
            $em->flush();

            if (isset($id)) {
                return $this->userMessage('修改字段成功!', $this->generateUrl('app_modules_modules_modlist'));

            } else {
                return $this->userMessage('新增字段成功!', $this->generateUrl('app_modules_modules_modlist'));

            }

        }

        return $this->render(
            'modules/addModField.html.twig',
            array(
                'title' => '模块管理 | 添加模块字段',
                'routes' => $this->returnURL($this->baseURL),
                'form' => $form->createView()
            )

        );
    }

    /**
     * @Route("deleteModField", name="deleteModField")
     */
    public function deleteModField(Request $request)
    {

        $id = $request->get('id');

        if (isset($id)) {
            $id = intval($id);
            /** @var EntityManager $em */
            $em = $this->getEM();
            $field = $em->getRepository('AppBundle:Field')
                ->findOneBy(array('id' => $id));
            $em->remove($field);
            $em->flush();
            return $this->userMessage('删除字段成功!', $this->generateUrl('app_modules_modules_modlist'));


        }

        return new Response('');
    }

    /**
     * @Route("deleteMod", name="deleteMod")
     */
    public function deleteMod(Request $request)
    {


        $moduleId = $request->get('moduleId');

        if (isset($moduleId)) {
            $moduleId = intval($moduleId);
            /** @var EntityManager $em */
            $em = $this->getEM();

            $module = $em->getRepository('AppBundle:Module')
                ->findOneBy(array('id' => $moduleId));
            $em->remove($module);
            $em->flush();
            return $this->userMessage('删除模块成功!', $this->generateUrl('app_modules_modules_modlist'));
        }

        return new Response(
            ''
        );
    }

    /**
     * @Route("test")
     * @Template()
     */
    public function testAction(Request $request)
    {

        $module = new Module();
        $form = $this->createForm(AddModFormType::class, $module);

        $form->setData($module);

        $form->handleRequest($request);

        if ($form->isValid()) {

        }

        return $this->render(
            'modules/test.html.twig',
            array(
                'title' => '模块列表 | 模块管理',
                'routes' => $this->returnURL($this->baseURL),
                'form' => $form->createView(),
            )

        );

    }

    /**
     * @Route("test1")
     * @Template()
     */
    public function test1Action(Request $request)
    {

        $module = new Module();
        $form = $this->createForm(AddModFormType::class, $module);

        $form->setData($module);

        $form->handleRequest($request);

        if ($form->isValid()) {

        }

        return $this->render(
            'modules/test1.html.twig',
            array(
                'title' => '模块列表 | 模块管理',
                'routes' => $this->returnURL($this->baseURL),
                'form' => $form->createView(),
            )

        );

    }

    /**
     * @Route("liangtian", name="liangtian")
     */
    public function liangtian(Request $request)
    {
        $request2 = '';
        $formPath = '';
        $formName = '';
        $intCount = '';
        $intTemp = '';


    }

}