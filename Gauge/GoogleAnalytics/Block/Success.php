<?php

namespace Gauge\GoogleAnalytics\Block;

class Success extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Checkout\Model\Session $session
     * @param \Magento\Sales\Model\Order $order
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Gauge\GoogleAnalytics\Helper\Data $helper
     * @param array $data
     */

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Checkout\Model\Session $session,
        \Magento\Sales\Model\Order $order,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Gauge\GoogleAnalytics\Helper\Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->session = $session;
        $this->order = $order;
        $this->storeManager = $storeManager;
        $this->helper = $helper;
    }

    /**
    * @return string
    */
    public function getOrderId() {
        return $this->session->getLastRealOrder()->getIncrementId();
    }

    /**
    * @return array
    */
    public function getOrderDetails() {
        return $this->order->loadByIncrementId($this->getOrderId());
    }

    /**
    * @return string
    */
    public function getStoreName() {
        return $this->storeManager->getStore()->getName();
    }        

    /**
    * @return string
    */
    public function isGoogleAnalyticsEnabled() {
        return $this->helper->isGoogleAnalyticsEnabled();
    }
}