<?php
namespace Born\HelloWorld\Block\Catalog\Product;
use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Block\Product\AbstractProduct;

class NewBlock extends AbstractProduct
{
    public function __construct(Context $context, array $data)
    {
        parent::__construct($context, $data);
    }
}