<?php
/**
<<<<<<< HEAD:UnPHP/Core/View_Abstract.php
 * ��ͼ��
 * @system UNPHP 
 * @version UNPHP 1.0
 * @author Xiao Tangren  <unphp@qq.com>
 * @data 2014-03-05
 * */
=======
 * Description of View_Interface
 *
 * @author xiao
 */
>>>>>>> be3ceb0d38a20221c5cabaf67a91af80f7ce34cf:UnPHP/Core/View_Abstract.php
abstract class UnPHP_View_Abstract implements UnPHP_View_Interface
{
        protected $_tpl_vars = array();
        protected $_script_path = null;
}

Interface UnPHP_View_Interface{
        
        public function init($conf = array());

        public function render($view_path, $tpl_vars = NULL);

        public function display($view_path, $tpl_vars = NULL);

        public function assign($name, $value);

        public function setScriptPath($view_directory);

        public function getScriptPath();
}
