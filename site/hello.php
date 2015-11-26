<?php

/**

 * @package   Joomla.Tutorials

 * @subpackage Components

 * components/com_hello/hello.php

 * @linkhttp://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1

 * @license   GNU/GPL

*/

// No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

// Require the basecontroller

require_once( JPATH_COMPONENT.DS.'controller.php' );

 

// Require specificcontroller if requested

if($controller = JRequest::getWord('controller')) {

    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';

    if (file_exists($path)) {

        require_once $path;

    } else {

        $controller = '';

    }

}

 

// Create thecontroller

$classname    = 'HelloController'.$controller;

$controller   = new $classname( );

 

// Perform the Requesttask

$controller->execute( JRequest::getWord( 'task' ) );

 

// Redirect if set bythe controller

$controller->redirect();

