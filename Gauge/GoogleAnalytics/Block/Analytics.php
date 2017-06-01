<?php

namespace Gauge\GoogleAnalytics\Block;

class Analytics extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Gauge\GoogleAnalytics\Helper\Data $helper
     * @param array $data
     */

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Gauge\GoogleAnalytics\Helper\Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }

    /**
    * @return string
    */
    public function getGoogleAnalyticsId() {
        return $this->helper->getGoogleAnalyticsId();
    }

    /**
    * @return string
    */
    public function isGoogleAnalyticsEnabled() {
        return $this->helper->isGoogleAnalyticsEnabled();
    }
}