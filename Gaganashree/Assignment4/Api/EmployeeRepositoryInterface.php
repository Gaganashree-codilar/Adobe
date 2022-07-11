<?php

namespace Gaganashree\Assignment4\Api;

use Gaganashree\Assignment4\Model\Employee as Model;

interface EmployeeRepositoryInterface
{
    /**
     * Get data
     *
     * @param int $id
     * @return Model
     */
    public function getDataBYId($id);

    /**
     * Get collection
     *
     * @return array
     */
    public function getCollection();
}
