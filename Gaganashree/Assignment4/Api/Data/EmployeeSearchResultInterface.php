<?php

namespace Gaganashree\Assignment4\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;


interface EmployeeSearchResultInterface extends SearchResultsInterface
{
    /**
     * Get Interface
     *
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface[]
     */
    public function getItems();

    /**
     * Set Items
     *
     * @param \Gaganashree\Assignment4\Api\Data\EmployeeInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}
