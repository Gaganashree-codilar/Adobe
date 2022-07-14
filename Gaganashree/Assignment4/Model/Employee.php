<?php

namespace Gaganashree\Assignment4\Model;

use Magento\Framework\Model\AbstractModel;
use Gaganashree\Assignment4\Api\Data\EmployeeExtensionInterface;
use Gaganashree\Assignment4\Api\Data\EmployeeInterface;
use Magento\Framework\Model\AbstractExtensibleModel;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;

class Employee extends AbstractExtensibleModel implements EmployeeInterface
{
    /**
     * Employee Constructor
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * Get entity id
     *
     * @inerhitDoc
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set entity id
     *
     * @param int $entityId
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setEntityId($entityId): string
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set name
     *
     * @param string $name
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setName($name): String
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getData(self::EMAIL);
    }
    /**
     * Set email
     *
     * @param string $email
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setEmail($email): EmployeeInterface
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile(): string
    {
        return $this->getData(self::MOBILE);
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setMobile($mobile): EmployeeInterface
    {
        return $this->setData(self::MOBILE, $mobile);
    }

    /**
     * Get dob
     *
     * @return string
     */
    public function getDob(): string
    {
        return $this->getData(self::DOB);
    }
    /**
     * Set dob
     *
     * @param string $dob
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setDob($dob): EmployeeInterface
    {
        return $this->setData(self::DOB, $dob);
    }
    /**
     * Get dob
     *
     * @param string $doj
     * @return string
     */
    public function getDoj(): string
    {
        return $this->getData(self::DOJ);
    }
    /**
     * Set doj
     *
     * @param string $doj
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function setDoj($doj): EmployeeInterface
    {
        return $this->setData(self::DOJ, $doj);
    }

    /**
     * Get created at time
     *
     * @return string
     */

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }
    /**
     * Set created at time
     *
     * @param string $createdAt
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */

    public function setCreatedAt($createdAt): EmployeeInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated at time
     *
     * @param string $updatedAt
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set updated at time
     *
     * @param string $updatedAt
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */

    public function setUpdatedAt($updatedAt): EmployeeInterface
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inerhitDoc
     *
     * *
     * @param \Gaganashree\Assignment4\Api\Data\EmployeeExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Gaganashree\Assignment4\Api\Data\EmployeeExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
