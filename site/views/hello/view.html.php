<?php

/**

 * @package    Joomla.Tutorials

 * @subpackageComponents

 * @linkhttp://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1

 * @license    GNU/GPL

*/

// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

 

/**

 * HTML View classfor the HelloWorld Component

 *

 * @package    HelloWorld

 */

classHelloViewHello extends JView

{

    functiondisplay($tpl = null)

    {

        $greeting = "HelloWorld!";

        $this->assignRef( 'greeting', $greeting );

        parent::display($tpl);

    }

}

