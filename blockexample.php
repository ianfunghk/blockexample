<?php

if (!defined('_PS_VERSION_')) {
    die('/modules/blockexample/blockexample.php');
}

class BlockExample extends Module
{

    public function __construct()
    {
        $this->name = 'blockexample';
        $this->tab = 'front_office_features';
        $this->version = '0.1';
        $this->author = 'Ian Fung';
        $this->bootstrap = true;
        //$this->dependencies = array('lbspoint');
        parent::__construct();
        $this->displayName = $this->l('Blocks of example');
        $this->description = $this->l('View location of blocks');
    }

    public function install()
    {
        if (!parent::install() ||
            !$this->installDB() ||
            !$this->registerHook('displayBeforePayment') ||
            !$this->registerHook('displayCarrierList') ||
            !$this->registerHook('displayCustomerAccount') ||
            !$this->registerHook('displayCustomerAccountForm') ||
            !$this->registerHook('displayCustomerAccountFormTop') ||
            !$this->registerHook('displayFooter') ||
            !$this->registerHook('displayFooterProduct') ||
            !$this->registerHook('displayHeader') ||
            !$this->registerHook('displayHome') ||
            !$this->registerHook('displayInvoice') ||
            !$this->registerHook('displayLeftColumn') ||
            !$this->registerHook('displayLeftColumnProduct') ||
            !$this->registerHook('displayMyAccountBlock') ||
            !$this->registerHook('displayMyAccountBlockFooter') ||
            !$this->registerHook('displayOrderConfirmation') ||
            !$this->registerHook('displayOrderDetail') ||
            !$this->registerHook('displayPayment') ||
            !$this->registerHook('displayPaymentReturn') ||
            !$this->registerHook('displayPaymentTop') ||
            !$this->registerHook('displayPDFInvoice') ||
            !$this->registerHook('displayProductButtons') ||
            !$this->registerHook('displayProductComparison') ||
            !$this->registerHook('displayProductTab') ||
            !$this->registerHook('displayProductTabContent') ||
            !$this->registerHook('displayRightColumn') ||
            !$this->registerHook('displayRightColumnProduct') ||
            !$this->registerHook('displayShoppingCart') ||
            !$this->registerHook('displayShoppingCartFooter') ||
            false
        ) {
            return false;
        }

        return true;
    }

    public function hookDisplayShoppingCartFooter($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayShoppingCart($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayRightColumnProduct($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayRightColumn($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayProductTabContent($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayProductTab($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayProductComparison($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayProductButtons($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayPDFInvoice($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayPaymentTop($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayPaymentReturn($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayPayment($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayOrderDetail($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayOrderConfirmation($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayMyAccountBlockFooter($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayMyAccountBlock($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayLeftColumnProduct($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayLeftColumn($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayInvoice($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayHome($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayHeader($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayFooterProduct($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayFooter($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayBeforePayment($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayCarrierList($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayCustomerAccount($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayCustomerAccountForm($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }

    public function hookDisplayCustomerAccountTop($params)
    {
        $this->smarty->assign(array(
            'blockName' => __FUNCTION__,
            'params' => json_encode($params),
        ));
        return $this->display(__FILE__, 'show_block_name.tpl');
    }


    public function installDB()
    {
        //TODO:
        return true;
    }

    public function uninstallDB()
    {
        //TODO:
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall() ||
            !$this->uninstallDB()
        )
            return false;
        return true;
    }


}