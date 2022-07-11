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

    /**
     * Join table
     *
     * @return $this|Collection|void
     */
    protected function _initSelect()
    {
        $this->getSelect()
             ->from(['main_table' => $this->getMainTable()])
             ->join(
                 'gagana_table',
                 'main_table.entity_id = gagana_table.emp_id',
                 ['*']
             );
//        var_dump($this->getData());die();
//        var_dump($this->getMainTable());die();
        return $this;
    }
}
