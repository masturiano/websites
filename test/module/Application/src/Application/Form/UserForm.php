<?php 
namespace Application\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('user');
        $this->setAttribute('method','post');
        
        $this->add(array(
            'name' => 'username',
            'attributes' => array(
                'type' => 'text',    
            ),
            'options' => array(
                'label' => 'Username'   
            ),
        ));
        
        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type' => 'text',    
            ),
            'options' => array(
                'label' => 'Password'   
            ),
        ));
        
        $this->add(array(
            'name' => 'full_name',
            'attributes' => array(
                'type' => 'text',    
            ),
            'options' => array(
                'label' => 'Fullname'   
            ),
        ));
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit', 
                'value' => 'Go',
                'id' => 'submitbutton',   
            ),
        ));
    }             
}
?>