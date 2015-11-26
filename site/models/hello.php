
<?php

/**

 * Hello Model forHello World Component

 *

 * @package    Joomla.Tutorials

 * @subpackageComponents

 * @linkhttp://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_2

 * @license    GNU/GPL

 */

// No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

 

/**

 * Hello Model

 *

 * @package    Joomla.Tutorials

 * @subpackageComponents

 */

classHelloModelHello extends JModel

{

    /**

    * Gets thegreeting

    * @returnstring The greeting to be displayed to the user

    */

    functiongetGreeting()

    {

        return 'Hello,World!';

    }

}
