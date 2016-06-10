<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;         
                         
use Zend\Db\TableGateway\TableGateway; // for table data gateway

use Application\Form\UserForm;
use Application\Form\UserFilter;

class UserController extends AbstractActionController
{
    public $usersTable;
    // R - retrieve CRUD
    public function indexAction()
    {       
        return new ViewModel(
            array('rowset' => $this->getUsersTable()->select())
            //array('rowset' => 'test')
        );
    }
    // C - create CRUD
    public function createAction()
    {
        $form = new UserForm();
        $request = $this->getRequest();
        if($request->isPost())
        {
            $form->setInputFilter(new UserFilter());
            $form->setData($request->getPost());
            if($form->isValid())
            {
                $data = $form->getData();
                unset($data['submit']);
                $this->getUsersTable()->insert($data);
                return $this->redirect()->toRoute('application/default',
                    array(
                        'controller' => 'user',
                        'action' => 'index',
                    )
                );
            }  
        }
        return new ViewModel(array('form' => $form));
    }
    // U - update CRUD
    public function updateAction()
    {
        return new ViewModel();
    }
    // D - delete CRUD
    public function deleteAction()
    {
        return new ViewModel();
    }   
    // G - get user table CRUD
    public function getUsersTable()
    {
        if(!$this->usersTable)
        {        
            $this->usersTable  = new TableGateway('users',$this->getServiceLocator()->get('Zend\Db\Adapter\Adapter'));   
        }
        return $this->usersTable;
    }
    
}
