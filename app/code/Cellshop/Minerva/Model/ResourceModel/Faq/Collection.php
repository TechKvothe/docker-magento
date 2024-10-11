<?php declare(strict_types=1);

namespace Cellshop\Minerva\Model\ResourceModel\Faq;

use Cellshop\Minerva\Model\Faq;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected function _construct() {

        $this->_init(Faq::class, \Cellshop\Minerva\Model\ResourceModel\Faq::class);

    }

}