<?php

namespace Gaganashree\Assignment4\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface EmployeeInterface extends ExtensibleDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */

    public const ENTITY_ID = 'entity_id';
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const MOBILE = 'mobile';
    public const DOB = 'dob';
    public const DOJ = 'doj';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * Get Entity id
     *
     * @return int|null
     */
    public function getEntityId();

    /**
     * Set Entity id
     *
     * @param int $entityId
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setEntityId($entityId);

    /**
     * Get created at time
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * Set created at time
     *
     * @param string $createdAt
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at time
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * Set updated at time
     *
     * @param string $updatedAt
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get date of birth
     *
     * @return string
     */
    public function getDob();

    /**
     * Set date of birth
     *
     * @param string $dob
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setDob($dob);

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set email
     *
     * @param string $email
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setEmail($email);
    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile();

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setMobile($mobile);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set name
     *
     * @param string $name
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getDoj();

    /**
     * Set name
     *
     * @param string $doj
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setDoj($doj);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Gaganashree\Assignment4\Api\Data\EmployeeExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Gaganashree\Assignment4\Api\Data\EmployeeExtensionInterface $extensionAttributes);
}
