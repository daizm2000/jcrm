<?php

/**

 * @package    Joomla.Tutorials

 * @subpackageComponents

 * @linkhttp://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1

 * @license    GNU/GPL

 */

// No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

 

/**

 * Hello WorldComponent Controller

 *

 * @package    Joomla.Tutorials

 * @subpackageComponents

 */

classHelloController extends JController

{

    /**

     * Method todisplay the view

     *

     * @access    public

     */

    functiondisplay()

    {

        parent::display();

    }

}

