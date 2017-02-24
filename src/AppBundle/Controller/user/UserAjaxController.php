<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/8
 * Time: 上午11:39
 */

namespace AppBundle\Controller\user;


use AppBundle\Controller\BaseController;
use AppBundle\Entity\Authority;
use AppBundle\Entity\Department;
use AppBundle\Entity\Field;
use AppBundle\Entity\FieldRespository;
use AppBundle\Entity\GlobalSet;
use AppBundle\Entity\ModData;
use AppBundle\Entity\ModDataRespository;
use AppBundle\Entity\SubData;
use AppBundle\Entity\SubDataRespository;
use AppBundle\Entity\User;
use AppBundle\Entity\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Util\Debug;


/**
 * Class UserAjaxController
 * @package AppBundle\Controller\user
 * @Route("/user/")
 */
class UserAjaxController extends BaseController
{


    /**
     * @Route("ulistAjax")
     * @Method("POST")
     */
    public function ulistAjaxAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getEM();
        $iTotalRecords = $em->createQuery(
            'SELECT COUNT(u) FROM AppBundle:User u'
        )
            ->getOneOrNullResult();
        //总数
        $iTotalRecords = intval($iTotalRecords[1]);
        //每页条数
        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        //每页开始
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);

        //每页结束
        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $colums = $request->get('columns');
        $order = $request->get('order');
        $order = $order[0];

        $orderColumn = $order['column'];
        $orderName = '';
        switch ($orderColumn) {
            case 1:
                $orderName = 'username';
                break;
            case 2:
                $orderName = 'departmentId';//department
                break;
            case 3:
                $orderName = 'age';
                break;
            case 4:
                $orderName = 'updateAt';
                break;
            default:
                $orderName = 'name';
                break;

        }
        $orderDir = $order['dir'];

        $sUsername = $request->get('order_customer_name');
        $sDepartment = $request->get('order_ship_to');
        $sAgeStart = $request->get('order_price_from');
        $sAgeEnd = $request->get('order_price_to');
        $MidfyStart = $request->get('order_date_from');
        $MidfyEnd = $request->get('order_date_to');

        $huo15sql = '';


        /** @var UserRepository $users */
        $userRespo = $em->getRepository('AppBundle:User');
        $departmentRespo = $em->getRepository('AppBundle:Department');

        $sqlArr = array();
        $sAgeStart and $sqlArr[] = 'u.age >= ' . $sAgeStart;
        $sAgeEnd and $sqlArr[] = 'u.age <= ' . $sAgeEnd;
        /*   $MidfyStart and $sqlArr[] = 'u.updateAt <= "'.$MidfyStart.'"';
           $MidfyEnd and $sqlArr[] = 'u.updateAt <= "'.$MidfyEnd.'"';*/
        if ($sDepartment) {
            /** @var QueryBuilder $qb */
            $qb = $departmentRespo->createQueryBuilder('d');
            $departmentIds = $qb->select('d.id')
                ->where($qb->expr()->like('d.name', $qb->expr()->literal('%' . $sDepartment . '%')))
                ->getQuery()
                ->getResult();
            foreach ($departmentIds as $departmentId) {
                $idsArr[] = $departmentId['id'];
            }
        }

        if ($sqlArr) {
            $huo15sql = implode(' and ', $sqlArr);

        } else {
            $huo15sql = 'u.id>=0';
        }

        $qb = $userRespo->createQueryBuilder('u');

        /** @var User $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();


        if (is_numeric(intval($user->getId())) && intval($user->getId()) == 1) {
            //管理员,超级
            if (isset($idsArr)) {//搜索部门
                $users = $userRespo->createQueryBuilder('u')
                    ->orderBy("u." . $orderName, $orderDir)
                    ->where($qb->expr()->like('u.username', $qb->expr()->literal('%' . $sUsername . '%')))
                    ->andWhere($qb->expr()->in('u.departmentId', $idsArr))
                    ->andWhere($huo15sql)
                    ->getQuery()
                    ->setFirstResult($iDisplayStart)
                    ->setMaxResults($end - $iDisplayStart)
                    ->getResult();


            } else {
                $users = $userRespo->createQueryBuilder('u')
                    ->orderBy("u." . $orderName, $orderDir)
                    ->where($qb->expr()->like('u.username', $qb->expr()->literal('%' . $sUsername . '%')))
                    ->andWhere($huo15sql)
                    ->getQuery()
                    ->setFirstResult($iDisplayStart)
                    ->setMaxResults($end - $iDisplayStart)
                    ->getResult();
            }

        } else {
            $users = $userRespo->createQueryBuilder('u')
                ->orderBy("u." . $orderName, $orderDir)
                ->where($qb->expr()->like('u.username', $qb->expr()->literal('%' . $sUsername . '%')))
                ->andWhere($qb->expr()->eq('u.departmentId', $user->getDepartmentId()))
                ->andWhere($huo15sql)
                ->getQuery()
                ->setFirstResult($iDisplayStart)
                ->setMaxResults($end - $iDisplayStart)
                ->getResult();
        }

        $records = array();
        $records["data"] = array();

        /**
         * @var  $key
         * @var  $user User
         */
        foreach ($users as $key => $user) {
            $res = $departmentRespo
                ->createQueryBuilder('d')
                ->select('d.name')
                ->where(
                    'd.id = ' . $user->getDepartmentId()
                )
                ->getQuery()
                ->getOneOrNullResult();
            /*
            if ($res == null) {
                return new Response(json_encode('会员是非法会员,请管理员删除!'));
            }
            if ($user->getLastLogin()) {
                $t = $user->getLastLogin()->format('Y-m-d H:i:s');

            } else {
                $t = '';
            }
            */
            if ($user->getLastLogin()) {
                $t = $user->getLastLogin()->format('Y-m-d H:i:s');

            } else {
                $t = '';
            }

            $records["data"][] = array(

                '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input name="id[]" type="checkbox" class="checkboxes" value="' . $user->getId() . '"/><span></span></label>',
                $user->getId(),
                $user->getUsername(),
                $res['name'],
                $user->getAge(),
                $t,
                '<a href="/user/index?userId=' . $user->getId() . '" class=""> 查看</a>|<a href="' . $this->generateUrl('addNewMember') . '?userId=' . $user->getId() . '" class=""> 修改</a>|<a href="' . $this->generateUrl('app_user_user_authlist') . '?userId='.$user->getId().'" class=""> 权限列表</a>|<a class="deleteHuo15User" href="' . $this->generateUrl('deleteUser') . '?userId=' . $user->getId() . '" class=""> 删除</a>'
            );


        }


        if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
            $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;
        $records["sql"] = $huo15sql;


        return new Response(json_encode($records));
    }
    /**
     * @Route("fieldAjax")
     */
    public function fieldAjaxAction(Request $request)
    {

        /** @var EntityManager $em */
        $em = $this->getEM();
        $moduleId = intval($request->get('moduleId'));

        $iTotalRecords = $em->createQuery(
            'SELECT COUNT(f) FROM AppBundle:Field f WHERE f.moduleId = '. $moduleId
        )
            ->getOneOrNullResult();

        //总数
        $iTotalRecords = intval($iTotalRecords[1]);
        //每页条数
        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        //每页开始
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);

        //每页结束
        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $colums = $request->get('columns');
        $order = $request->get('order');
        $order = $order[0];
        $orderColumn = $order['column'];
        $orderName = '';
        switch ($orderColumn) {
            case 1:
                $orderName = 'fieldId';
                break;
            case 2:
                $orderName = 'fieldName';//department
                break;
            case 3:
                $orderName = 'type';
                break;
            case 4:
                $orderName = 'value';
                break;
            default:
                $orderName = 'required';
                break;

        }
        $orderDir = $order['dir'];

        $sFieldId = $request->get('order_customer_id');
        $sFieldName = $request->get('order_customer_name');
        $sType = $request->get('order_customer_type');
        $sValue = $request->get('order_customer_value');
        $sRequired = $request->get('order_customer_required');
        /** @var FieldRespository $fieldRespo */
        $fieldRespo = $em->getRepository('AppBundle:Field');
        /** @var QueryBuilder $qb */
        $qb = $fieldRespo->createQueryBuilder('f');

        /** @var User $user */
        $user = $this->get('security.token_storage')->getToken()->getUser();


        if (is_numeric(intval($user->getId())) && intval($user->getId()) == 1) {
            //管理员,超级

            //orderBy("f." . $orderName . " " . $orderDir)
            $fields = $qb->select('f')
                ->where($qb->expr()->like("f.fieldID", $qb->expr()->literal("%" . $sFieldId . "%")))
                /*->andWhere($qb->expr()->like("f.fieldName", $qb->expr()->literal("%" . $sFieldName . "%")))
                ->andWhere($qb->expr()->like("f.value", $qb->expr()->literal("%" . $sValue . "%")))*/
                ->andWhere($qb->expr()->eq("f.moduleId", $moduleId))
                ->getQuery()
                ->getResult();
        }


        $records = array();
        $records["data"] = array();

        /**
         * @var  $key
         * @var Field $field
         */
        foreach ($fields as $key => $field) {

            if ($field->getRequired()) {
                $isRequired = "是";
            } else {
                $isRequired = "否";
            }
            $typeName = '';
            switch ($field->getType()) {
                case 0:
                    $typeName = '输入框';
                    break;
                case 1:
                    $typeName = '下拉菜单';
                    break;
                case 2:
                    $typeName = '多文件上传';
                    break;
            }
            $records["data"][] = array(

                '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input name="id[]" type="checkbox" class="checkboxes" value="' . $field->getId() . '"/><span></span></label>',
                $field->getFieldID(),
                $field->getFieldName(),
                $typeName,
                $field->getValue(),
                $isRequired,
                '<a href="' . $this->generateUrl('addModField') . '?id=' . $field->getId() . '&moduleId=' . $moduleId . '" class=""> 修改</a>|<a class="deleteHuo15User" href="'. $this->generateUrl('deleteModField') .'?moduleId=' . $moduleId . '&id=' . $field->getId() . '" class=""> 删除</a>'
            );


        }


        if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
            $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;
        $records["order"] = $order;


        return new Response(json_encode($records));
    }


    /**
     * @Route("departmentAjax")
     * @Method("POST")
     */
    public function departmentAjaxAction(Request $request)
    {
        /** @var User $user */
        $user = $this->getUser();
        /** @var EntityManager $em */
        $em = $this->getEM();
        $iTotalRecords = $em->createQuery(
            'SELECT COUNT(d) FROM AppBundle:Department d'
        )
            ->getOneOrNullResult();
        $iTotalRecords = intval($iTotalRecords[1]);
        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);


        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;


        $colums = $request->get('columns');
        $order = $request->get('order');
        $order = $order[0];

        $orderColumn = $order['column'];
        $orderName = '';
        switch ($orderColumn) {
            case 1:
                $orderName = 'no';
                break;
            case 2:
                $orderName = 'name';//department
                break;
            case 3:
                $orderName = 'createAt';
                break;
            case 4:
                $orderName = 'updateAt';
                break;
            default:
                $orderName = 'no';
                break;

        }
        $orderDir = $order['dir'];

        $sNo = $request->get('order_department_no');
        $sName = $request->get('order_department_name');
        $sCreateStart = $request->get('order_create_from');
        $sCreateEnd = $request->get('order_create_to');
        $sUpdateStart = $request->get('order_update_from');
        $sUpdateEnd = $request->get('order_update_to');

        $huo15sql = '';


        /** @var Department $departmentRespo */
        $departmentRespo = $em->getRepository('AppBundle:Department');

        $sqlArr = array();
        $sCreateStart and $sqlArr[] = 'd.createAt >= "' . $sCreateStart . '"';
        $sCreateEnd and $sqlArr[] = 'd.createAt <= "' . $sCreateEnd . '"';
        $sUpdateStart and $sqlArr[] = 'd.createAt >= "' . $sUpdateStart . '"';
        $sUpdateEnd and $sqlArr[] = 'd.createAt <= "' . $sUpdateEnd . '"';


        if ($sqlArr) {
            $huo15sql = implode(' and ', $sqlArr);

        } else {
            $huo15sql = 'd.id>=0';
        }
        $qb = $departmentRespo->createQueryBuilder('d');

        if (is_numeric($user->getDepartmentId()) && intval($user->getDepartmentId()) == 1) {
            $departments = $departmentRespo->createQueryBuilder('d')
                ->orderBy("d." . $orderName, $orderDir)
                ->where($qb->expr()->like('d.name', '%' . $sName . '%'))
                ->where($huo15sql)
                ->getQuery()
                ->setFirstResult($iDisplayStart)
                ->setMaxResults($end - $iDisplayStart)
                ->getResult();
        } else {
            $departments = $departmentRespo->createQueryBuilder('d')
                ->orderBy("d." . $orderName, $orderDir)
                ->where($qb->expr()->like('d.name', '%' . $sName . '%'))
                ->where($huo15sql)
                ->where('d.id = ' . $user->getDepartmentId())
                ->getQuery()
                ->setFirstResult($iDisplayStart)
                ->setMaxResults($end - $iDisplayStart)
                ->getResult();
        }

        $records = array();
        $records["data"] = array();
        $allUsers = array();


        /**
         * @var  $key
         * @var  $department Department
         */
        foreach ($departments as $key => $department) {
            $records["data"][] = array(

                '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input name="id[]" type="checkbox" class="checkboxes" value="' . $department->getId() . '"/><span></span></label>',
                $department->getNo(),
                $department->getName(),
                $department->getCreatedAt()->format('y-m-d H:i:s'),
                $department->getUpdateAt()->format('y-m-d H:i:s'),
                '<a href="/user/addDepartment?departmentId=' . $department->getId() . '" class=""> 修改</a>|<a href="/user/deleteDepartment?departmentId=' . $department->getId() . '" class=""> 删除</a>'
            );


        }


        if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
            $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;


        return new Response(json_encode($records));
    }
    /**
     * @Route("modDataAjax")
     * @Method("POST")
     */
    public function modDataAjaxAction(Request $request)
    {

        $user = $this->getUser();
        $moduleId = $request->get('moduleId');

        /** @var EntityManager $em */
        $em = $this->getEM();
        $iTotalRecords = $em->createQuery(
            'SELECT COUNT(d) FROM AppBundle:ModData d WHERE d.moduleId = ' . $moduleId
        )
            ->getOneOrNullResult();
        $iTotalRecords = intval($iTotalRecords[1]);

        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);


        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;





        /** @var ModDataRespository $departmentRespo */
        $modDataRespo = $em->getRepository('AppBundle:ModData');

        //获取字段列表
        $fieldList = $em->getRepository('AppBundle:Field')
            ->findBy(
                array('moduleId' => $moduleId),
                array('id' => 'ASC')
            );

        /** @var QueryBuilder $qb */
        $qb = $modDataRespo->createQueryBuilder('d');

        $no = $request->get('order_customer_id');
        if (isset($no) && $no) {
            $no = intval($no);
            $qb->where($qb->expr()->eq('d.clientId', $no));

        } else {
	        $qb->where($qb->expr()->eq('d.moduleId', $moduleId));
        }
        $modeDatas = $qb->getQuery()
            ->setFirstResult($iDisplayStart)
            ->setMaxResults($end - $iDisplayStart)
            ->getResult();

        /**
         * @var  $k
         * @var ModData $modeData
         */
        foreach ($modeDatas as $k => $modeData) {
            $subDatas = $em->getRepository('AppBundle:SubData')->findBy(array(
                'clientId' => $modeData->getClientId()
            ));

            $queryStrs = array();
            /**
             * @var  $key
             * @var Field $field
             */
            foreach ($fieldList as $key => $field) {
                $queryStr = $request->get($field->getFieldID());
                if (isset($queryStr)) {
                    $queryStrs[$field->getFieldID()] = $queryStr;
                }
            }

            /**
             * @var  $key
             * @var SubData $subData
             */
            foreach ($subDatas as $key => $subData) {
                foreach ($queryStrs as $key2 => $v) {


                    if ($key2 == $subData->getFieldName()) {

                        if (!preg_match('/(.*)' . $v . '(.*)/', $subData->getValue())) {
                           /* Debug::dump('$v:' . $v);
                            Debug::dump('subdata.value: ' . $subData->getValue());*/

                            //unset($modeDatas[$k]);
                        }
                    }
                }
            }

        }
        $records = array();
        $records["data"] = array();


        /**
         * @var  $key
         * @var ModData $modeData
         */
        foreach ($modeDatas as $key => $modeData) {
            $clientId = $modeData->getClientId();

            /** @var SubDataRespository $subDataRespos */
            $subDataRespos = $em->getRepository('AppBundle:SubData');
            $subDatas = $subDataRespos->findBy(array(
                'clientId' => $clientId
            ));


            /** @var Field $field */
            foreach ($fieldList as $field) {
                $queryStr = $request->get($field->getFieldID());

                if (isset($queryStr)) {
                    $qb->andWhere($qb->expr()->eq('d.clientId', $queryStr));
                    //$qb->andWhere('d.' . $qb->expr()->like($field->getFieldID(), "'%" . $queryStr . "%'"));
                }
            }


            $doneSubDatas = array();
            /**
             * @var  $key
             * @var Field $field
             */
	        foreach ($fieldList as $key => $field) {
                    /**
                     * @var  $k
                     * @var SubData $subData
                     */
                    foreach ($subDatas as $k => $subData) {
                        if ($subData->getFieldName() == $field->getFieldID()) {
                            $doneSubDatas[$key] = $subData;
                        }
                    }
            }


            if (count($doneSubDatas) < 6) {

                for ($i=0;$i<=(6 - count($doneSubDatas));$i++) {

                    $doneSubDatas[] = new SubData();
                }
            }



            /** @var Field $choiceField */
            $choiceFieldList = $em->getRepository('AppBundle:Field')
                ->findBy(array(
                    'moduleId' => $moduleId,
                    'type' => '1'
                ));
            $choices = array();
            foreach ($choiceFieldList as $key => $choiceField) {
                if (is_object($choiceField)) {
                    $choices = array();
                    $text = nl2br($choiceField->getValue());//将分行符"\r\n"转义成HTML的换行符"<br />"
                    $choices = explode("<br />", $text);//"<br />"作为分隔切成数组

                }
            }



            $recordsArr = array();
            $recordsArr[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input name="id[]" type="checkbox" class="checkboxes" value="' . $modeData->getClientId() . '"/><span></span></label>';
            $recordsArr[] = $modeData->getClientId();
            /**
             * @var  $key
             * @var SubData $doneSubData
             */
            foreach ($doneSubDatas as $key => $doneSubData) {
                if ($key < 4) {

                    /** @var Field $fieldType */
                    $myField = $em->getRepository('AppBundle:Field')
                        ->findOneBy(array(
                            'fieldID' => $doneSubData->getFieldName()
                        ));
                    $fieldType = '';
                    if (is_object($myField))
                    $fieldType = $myField->getType();

                    if ($fieldType == 1) {
                        foreach ($choices as $k => $choice) {
                            if ($doneSubData->getValue() == $k) {
                                $recordsArr[] = $choice;

                            }
                        }
                    } else {
                        $recordsArr[] = $doneSubData->getValue();
                    }



                }
            }
            $recordsArr[] = '<a href="/modules/detailData?moduleId='.$moduleId.'&clientId=' . $modeData->getClientId() . '" class=""> 查看 </a>|' . '<a href="/modules/addData?moduleId='.$moduleId.'&clientId=' . $modeData->getClientId() . '" class=""> 修改</a>|<a href="/modules/deleteData?moduleId='.$moduleId.'&clientId=' . $modeData->getClientId() . '" class=""> 删除</a>';

            //array_shift($recordsArr);

            $records["data"][] = $recordsArr;



        }



        if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
            $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;


        return new Response(json_encode($records));
    }
    /**
     * @Route("defaultAuthorSave")
     * @Method("POST")
     */
    public function defaultAuthorSave(Request $request) {
        $sessionUser = $this->getUser();
        if ($sessionUser->getId() != 1) {
            $result['flag'] = 0;
            $result['msg'] = "权限不足,需要超级管理员权限! 非法操作";
            return new Response(
                json_encode($result)
            );
        }
        $each_modAuthor = $request->get('each_mod_author');
        $each_dataAuthor = $request->get('each_data_author');

        if ( isset($each_modAuthor) && isset($each_dataAuthor)) {
            /** @var GlobalSet $each_modAuthorObj */
            $each_modAuthorObj = $this->getEM()->getRepository('AppBundle:GlobalSet')
                ->findOneBy(array('name' => 'each_modAuthor'));
            /** @var GlobalSet $each_dataAuthorObj */
            $each_dataAuthorObj = $this->getEM()->getRepository('AppBundle:GlobalSet')
                ->findOneBy(array('name' => 'each_dataAuthor'));

            $each_modAuthorObj->setValue($each_modAuthor);
            $each_dataAuthorObj->setValue($each_dataAuthor);
            $this->getEM()->persist($each_dataAuthorObj);
            $this->getEM()->persist($each_modAuthorObj);
            $this->getEM()->flush();
            $result['flag'] = 1;
            $result['msg'] = "保存成功!";
            return new Response(
                json_encode($result)
            );

        } else {
            $result['flag'] = 0;
            $result['msg'] = "非法操作";
            return new Response(
                json_encode($result)
            );
        }

    }

    /**
     * @Route("userModAuthorSave", name="userModAuthorSave")
     * @Method("POST")
     */
    public function userModAuthorSave(Request $request) {

        $modArr = $request->get('mod');
        $dataAuthordArr = $request->get('modAuthor');

        $newAuthorArr = array();

        foreach ($modArr as $key => $item) {
            $newAuthorArr[$key]['modAuthor'] = $item;
            foreach ($dataAuthordArr as $k => $v) {
                if ($k == $key) {
                    $newAuthorArr[$key]['dataAuthor'] = $v;

                }
            }
        }
        $userId = $request->get('userId');

        foreach ($newAuthorArr as $key => $item) {
            $author = $this->getEM()->getRepository('AppBundle:Authority')
                ->findOneBy(array('userId' => $userId, 'modId' => $key));
            if (is_object($author)) {
                $author->setModAuthor($item['modAuthor']);
                $author->setDataAuthor($item['dataAuthor']);
                $this->getEM()->persist($author);
                $this->getEM()->flush();
            } else {
                $author = new Authority();
                $author->setModAuthor($item['modAuthor']);
                $author->setDataAuthor($item['dataAuthor']);
                $author->setUserId($userId);
                $author->setModId($key);
                $this->getEM()->persist($author);
                $this->getEM()->flush();
            }
        }



        $result['flag'] = 1;
        $result['msg'] = "保存成功!";
        return new Response(
            json_encode($result)
        );


    }
}


