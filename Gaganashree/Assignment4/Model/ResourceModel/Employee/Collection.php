<?php

namespace Gaganashree\Assignment4\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Gaganashree\Assignment4\Model\Employee as Model;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;

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
