<?php
/**
 * Created by IntelliJ IDEA.
 * User: mstzn
 * Date: 23/12/16
 * Time: 20:42
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
        $builder->add('password', 'password');
    }

    public function getName()
    {
        return 'login';
    }
}