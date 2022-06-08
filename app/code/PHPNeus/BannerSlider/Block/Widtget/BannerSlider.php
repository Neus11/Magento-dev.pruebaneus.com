<?php


namespace PHPNeus\BannerSlider\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class BannerSlider extends Template implements BlockInterface
{
    
    protected $bannerFactory;

   
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \PHPNeus\BannerSlider\Model\BannerFactory $bannerFactory,
        array $data = []
    ) {
        $this->bannerFactory = $bannerFactory;
        parent::__construct($context, $data);
    }

    public function getBanners()
    {
        $groupId = (int)$this->getGroupId();
        $collection = $this->bannerFactory->create()->getCollection()->addFieldToFilter(
            'group_id', $groupId
        )->addFieldToFilter(
            'status', \PHPNeus\BannerSlider\Model\Banner::STATUS_ENABLED
        )->setOrder('main_table.order', 'ASC');
        return $collection;
    }
}