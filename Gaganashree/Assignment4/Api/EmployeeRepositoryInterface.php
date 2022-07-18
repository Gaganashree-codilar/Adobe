<?php

namespace Gaganashree\Assignment4\Api;

use Gaganashree\Assignment4\Model\Employee as Model;
use Magento\Framework\Api\SearchCriteriaInterface;

interface EmployeeRepositoryInterface
{
    /**
     * Get data
     *
     * @param int $entityId
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function getDataBYId($entityId);

    /**
     * Get collection
     *
     * @return array
     */
    public function getCollection();

    /**
     * @param $Id
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function getById($Id);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
