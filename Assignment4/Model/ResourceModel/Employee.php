<?php

namespace Gaganashree\Assignment4\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Employee extends AbstractDb
{
    public const TABLE_NAME = 'gagana_db';
    public const ID_FIELD_NAME = 'entity_id';

    /**
     * Construct
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::ID_FIELD_NAME);
    }
}
