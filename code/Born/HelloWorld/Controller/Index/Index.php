<?php
namespace Born\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		// If we run this, it will be shown only in the page without existing header and footer
		// echo "testing a new HelloWorld module...";
		// exit;

		// Pagefactory is used to initialize the layout
		return $this->_pageFactory->create();
	}
}
