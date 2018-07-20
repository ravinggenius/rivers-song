<?php

namespace RiversSong\Parrot\Block;

class Index extends \Magento\Framework\View\Element\Template {
    public function getName() {
        return $this->getRequest()->getParam('name');
    }
}