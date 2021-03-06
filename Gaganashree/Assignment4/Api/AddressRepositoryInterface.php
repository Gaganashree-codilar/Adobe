<?php

namespace Gaganashree\Assignment4\Api;

use Gaganashree\Assignment4\Model\AddressAttribute as Model;
use Magento\Framework\Api\SearchCriteriaInterface;

interface AddressRepositoryInterface
{
    /**
     * Get data
     *
     * @param int $id
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function getDataBYId($id);

    /**
     * Get data
     *
     * @param  int $id
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function getAddressById($id);

    /**
     * Get collection
     *
     * @return array
     */
    public function getCollection();

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
