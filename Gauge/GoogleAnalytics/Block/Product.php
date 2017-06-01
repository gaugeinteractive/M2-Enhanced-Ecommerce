<?php

namespace Gauge\GoogleAnalytics\Block;

class Product extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Catalog\Block\Product\View $product
     * @param \Gauge\GoogleAnalytics\Helper\Data $helper
     * @param array $data
     */

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Block\Product\View $product,
        \Gauge\GoogleAnalytics\Helper\Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->product = $product;
        $this->helper = $helper;
    }

    /**
    * @return string
    */
    public function getProduct() {
        return $this->product->getProduct();
    }

    /**
    * @return string
    */
    public function getProductName() {
        return $this->getProduct()->getName();
    }

    /**
    * @return string
    */
    public function getProductSku() {
        return $this->getProduct()->getSku();
    }

    /**
    * @return string
    */
    public function getProductCategory() {
        return $this->getProduct()->getCategory()->getName();
    }

    /**
    * @return string
    */
    public function isGoogleAnalyticsEnabled() {
        return $this->helper->isGoogleAnalyticsEnabled();
    }
}