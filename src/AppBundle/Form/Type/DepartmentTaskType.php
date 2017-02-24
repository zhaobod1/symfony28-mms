<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 16/8/10
 * Time: 下午3:40
 */

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DepartmentTaskType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('no', 'text', array(
            'label' => '编号',
            'label_attr' => array(
                'class' => 'control-label'
            ),
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => '请输入部门编号(唯一)'
            )
        ))
            ->add('name', 'text', array(
                'label' => '部门名称',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入部门名称'
                )
            ))
            ->add('minister', 'integer', array(
                'label' => '部长ID号',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => '请输入部长ID号(ID号可以在会员列表里进行查询)'
                )
            ))
           /* ->add('imageAvatar', FileType::class, array(
                'label' => '部门图标',
                'required' => false,
                'data_class' => null,
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                )
            ))*/
            //->add('额外的字段',null,array('mapped' => false))
            ->add('save', SubmitType::class, array(
                'label' => '提交',
                'attr' => array(
                    'class' => 'form-control btn green',
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Department',
        ));
    }
}