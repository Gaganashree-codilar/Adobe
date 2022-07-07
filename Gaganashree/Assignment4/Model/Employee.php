<?php

namespace Gaganashree\Assignment4\Model;

use Magento\Framework\Model\AbstractModel;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;

class Employee extends AbstractModel
{
    /**
     * Init
     */

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
