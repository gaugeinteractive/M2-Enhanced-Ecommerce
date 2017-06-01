<?php
/**
 * Gauge_GoogleAnalytics Helper
 */

namespace Gauge\GoogleAnalytics\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
    * Constants
    */
    const XML_GOOGLE_ANALYTICS_ENABLED      = 'gauge/general/google_analytics_enabled';
    const XML_GOOGLE_ANALYTICS_ID           = 'gauge/general/analytics_id';

    public function isGoogleAnalyticsEnabled($store = null)
    {
        return $this->scopeConfig->getValue(self::XML_GOOGLE_ANALYTICS_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);   
    }

    public function getGoogleAnalyticsId($store = null)
    {
        return $this->scopeConfig->getValue(self::XML_GOOGLE_ANALYTICS_ID, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
    }
}