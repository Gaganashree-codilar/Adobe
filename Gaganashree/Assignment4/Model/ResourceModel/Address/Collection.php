<?php

namespace Gaganashree\Assignment4\Model\ResourceModel\Address;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Gaganashree\Assignment4\Model\AddressAttribute as Model;
use Gaganashree\Assignment4\Model\ResourceModel\Address as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Construct
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
