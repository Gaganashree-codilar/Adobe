<?php

namespace Gaganashree\Assignment4\Api;

use Gaganashree\Assignment4\Model\AddressAttribute as Model;

interface AddressRepositoryInterface
{
    /**
     * Get data
     *
     * @param int $id
     * @return Model
     */
    public function getDataBYId($id);

}
