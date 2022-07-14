<?php

namespace Gaganashree\Assignment4\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface AddressInterface extends ExtensibleDataInterface
{
    public const ID = 'id';
    public const EMP_ID = 'emp_id';
    public const CITY = 'city';
    public const STATE = 'State';
    public const CREATED_AT = 'created_at';
    public const LAST_VISIT_AT = 'last_visit_at';

    /**
     * Get customer id
     *
     * @return int
     */
    public function getId();

    /**
     * Set  id
     *
     * @param $id
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setId($id);

    /**
     * Get Emp id
     *
     * @return int
     */
    public function getEmpId();

    /**
     * Set emp id
     *
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setEmpId($empId);

    /**
     * Get City
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * Set City
     *
     * @param string $city
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setCity(string $city);

    /**
     * Get state
     *
     * @return string
     */
    public function getState();

    /**
     * Set state
     *
     * * @param string $state
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setState(string $state);

    /**
     * Get created at time
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Set created at time
     *
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setCreatedAt(string $createdAt);

    /**
     * Get lastvist at time
     *
     * @return string
     */
    public function getLastVisitAt(): string;

    /**
     * Set lastvisit at time
     * @param string $lastVisitAt
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setLastVisitAt($lastVisitAt);

    /**
     * @return \Gaganashree\Assignment4\Api\Data\AddressExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * @param \Gaganashree\Assignment4\Api\Data\AddressExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Gaganashree\Assignment4\Api\Data\AddressExtensionInterface $extensionAttributes);
}
