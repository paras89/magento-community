<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Checkout
 * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * One page checkout success page
 *
 * @category   Mage
 * @package    Mage_Checkout
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Checkout_Block_Onepage_Success extends Mage_Core_Block_Template
{
    /**
     * Retrieve identifier of created order
     *
     * @return string
     */
    public function getOrderId()
    {
        return Mage::getSingleton('checkout/session')->getLastRealOrderId();
    }

    /**
     * Check order print availability
     *
     * @return bool
     */
    public function canPrint()
    {
        return Mage::getSingleton('customer/session')->isLoggedIn();
    }

    /**
     * Get url for order detale print
     *
     * @return string
     */
    public function getPrintUrl()
    {
        /*if (Mage::getSingleton('customer/session')->isLoggedIn()) {
            return $this->getUrl('sales/order/print', array('order_id'=>Mage::getSingleton('checkout/session')->getLastOrderId()));
        }
        return $this->getUrl('sales/guest/printOrder', array('order_id'=>Mage::getSingleton('checkout/session')->getLastOrderId()));*/
        return $this->getUrl('sales/order/print', array('order_id'=>Mage::getSingleton('checkout/session')->getLastOrderId()));
    }

    /**
     * Get url for view order details
     *
     * @return string
     */
    public function getViewOrderUrl()
    {
        return $this->getUrl('sales/order/view/', array('order_id'=>Mage::getSingleton('checkout/session')->getLastOrderId(), '_secure' => true));
    }
}