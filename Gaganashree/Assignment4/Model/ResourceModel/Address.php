<?php

namespace Gaganashree\Assignment4\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Address extends AbstractDb
{
    public const TABLE_NAME = 'gagana_table';
    public const ID_FIELD_NAME = 'id';

    /**
     * Construct
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::ID_FIELD_NAME);
    }
}
