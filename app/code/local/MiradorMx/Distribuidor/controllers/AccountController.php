  <?php

  /**
   * @package MiradorMx
   * @category Distribuidor
   * @author Mariana Valdivia
   *
   */

require_once (Mage::getModuleDir('controllers','Mage_Customer').DS.'AccountController.php');
  class MiradorMx_Distribuidor_AccountController extends Mage_Customer_AccountController {

    public function createwholesaleAction(){
        if($this->_getSession()->isLoggedIn()){
            $this->_redirect('*/*');
            return;
        }

        $this->loadLayout();
        $this->_initLayoutMessages('customer/session');
        $this->renderLayout();
    }

    public function loginAction()
    {

        return parent::loginAction(); // TODO: Change the autogenerated stub
    }

  }
?>
