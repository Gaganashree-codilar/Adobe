<?php

namespace Gaganashree\Assignment4\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface DataInterface extends ExtensibleDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */

    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const EMAIL = 'email';
    const mobile = 'mobile';
    const DOB = 'dob';
    const CREATED_IN = 'created_in';
    const UPDATED_AT = 'updated_at';


    /**
     * Get customer id
     *
     * @return int|null
     */
    public function getEntityId();

    /**
     * Set customer id
     *
     * @param int $id
     * @return $this
     */
    public function setEntityId($id);

    /**
     * Get created at time
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created at time
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at time
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated at time
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get created in area
     *
     * @return string|null
     */
    public function getCreatedIn();

    /**
     * Set created in area
     *
     * @param string $createdIn
     * @return $this
     */
    public function setCreatedIn($createdIn);

    /**
     * Get date of birth
     *
     * @return string|null In keeping with current security and privacy best practices, be sure you are aware of any
     * potential legal and security risks associated with the storage of customers’ full date of birth
     * (month, day, year) along with other personal identifiers (e.g., full name) before collecting or processing
     * such data.
     */
    public function getDob();

    /**
     * Set date of birth
     *
     * @param string $dob
     * @return $this
     */
    public function setDob($dob);

    /**
     * Get email address
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set email address
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * Get first name
     *
     * @return string
     */
    public function getName();

    /**
     * Set first name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get last name
     *
     * @return string
     */
    public function getDoj();

    /**
     * Set last name
     *
     * @param string $doj
     * @return $this
     */
    public function setDoj($doj);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Gaganashree\Assignment4\Api\Data\DataExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Gaganashree\Assignment4\Api\Data\DataExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(Gaganashree\Assignment4\Api\Data\DataExtensionInterface $extensionAttributes);
}
