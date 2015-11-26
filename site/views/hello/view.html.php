<?php

/**

 * @package    Joomla.Tutorials

 * @subpackageComponents

 * @linkhttp://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_2

 * @license    GNU/GPL

*/

// No direct access

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

        $model = &$this->getModel();

        $greeting = $model->getGreeting();

        $this->assignRef( 'greeting',       $greeting );

        parent::display($tpl);

    }

}
