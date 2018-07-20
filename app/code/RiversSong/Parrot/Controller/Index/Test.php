<?php

namespace RiversSong\Parrot\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Test extends \Magento\Framework\App\Action\Action {
    protected $_pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute() {
        echo "hello world from parrot";
    }
}
