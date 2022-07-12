<?php

namespace Gaganashree\Assignment4\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;


interface AddressInterface extends ExtensibleDataInterface
{
    const ID = 'id';
    const EMP_ID = 'emp_id';
    const CITY = 'city';
    const STATE = 'state';
    const CREATED_AT = 'created_at';
    const LAST_VISIT_AT = 'last_visit_at';

    /**
     * Get customer id
     *
     * @return int|null
     */
    public function getId();
    /**
     * Set  id
     *
     * @return int|null
     */
    public function setId($id);
    /**
     * Get Emp id
     *
     * @return int|null
     */
    public function getEmpId(): int;
    /**
     * Set emp id
     *
     * @return int|null
     */
    public function setEmpId($emp_id);
    /**
     * Get City
     *
     * @return int|null
     */
    public function getCity(): string;

    /**
     * Set City
     *
     * @param string $city
     * @return int|null
     */
    public function setCity(string $city);
    /**
     * Get state
     *
     * @return string|null
     */
    public function getState();
    /**
     * Set state
     *
     * @return string|null
     */
    public function setState(string $state);
    /**
     * Get created at time
     *
     * @return string|null
     */
    public function getCreatedAt();
    /**
     * Set created at time
     *
     * @return string|null
     */
    public function setCreatedAt(string $createdAt);
    /**
     * Get lastvist at time
     *
     * @return string|null
     */
    public function getLastVisitAt(): string;
    /**
     * Set lastvisit at time
     *
     * @return string|null
     */
    public function setLastVisitAt(string $lastvisitat);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Gaganashree\Assignment4\Api\Data\AddressExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Gaganashree\Assignment4\Api\Data\AddressExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Gaganashree\Assignment4\Api\Data\AddressExtensionInterface $extensionAttributes);
}

