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

class UserController extends AbstractActionController
{
    // R - retrieve CRUD
    public function indexAction()
    {
        return new ViewModel();
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
}
