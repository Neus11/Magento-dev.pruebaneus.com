<?php

namespace PHPNeus\BannerSlider\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;

class Image extends \Magento\Ui\Component\Listing\Columns\Column
{
    /**
     * Url path
     */
    const URL_PATH_EDIT = 'phpneus_banners_slider/banner/edit';

    /**
     * @var \PHPCuong\BannerSlider\Model\Banner
     */
    protected $banner;


    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        \PHPNeus\BannerSlider\Model\Banner $banner,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->urlBuilder = $urlBuilder;
        $this->banner = $banner;
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            $fieldName = $this->getData('name');
            foreach ($dataSource['data']['items'] as & $item) {
                $banner = new \Magento\Framework\DataObject($item);
                $item[$fieldName . '_src'] = $this->banner->getImageUrl($banner['image']);
                $item[$fieldName . '_orig_src'] = $this->banner->getImageUrl($banner['image']);
                $item[$fieldName . '_link'] = $this->urlBuilder->getUrl(
                    self::URL_PATH_EDIT,
                    ['id' => $banner['id']]
                );
                $item[$fieldName . '_alt'] = $banner['name'];
            }
        }
        return $dataSource;
    }
}
