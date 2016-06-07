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
        return new ViewModel();
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
