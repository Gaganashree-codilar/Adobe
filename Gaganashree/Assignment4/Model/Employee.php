<?php

namespace Gaganashree\Assignment4\Model;

use Magento\Framework\Model\AbstractModel;
use Gaganashree\Assignment4\Api\Data\DataExtensionInterface;
use Gaganashree\Assignment4\Api\Data\DataInterface;
use Magento\Framework\Model\AbstractExtensibleModel;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;

class Employee extends AbstractModel
{
    /**
     * Init
     */

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inerhitDoc
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @param int $entityId
     * @return DataInterface
     */
    public function setEntityId($entityId): DataInterface
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }
    /**
     * @param string $Name
     * @return DataInterface
     */
    public function getName(): string
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * @param string $Name
     * @return DataInterface
     */
    public function setName(string $name): DataInterface
    {
        return $this->setData(self::NAME, $name);
    }
    /**
     * @param string $Email
     * @return DataInterface
     */
    public function getEmail(): string
    {
        return $this->getData(self::email);
    }
    /**
     * @param string $email
     * @return DataInterface
     */
    public function setEmail(string $email): DataInterface
    {
        return $this->setData(self::Email, $email);
    }
    /**
     * @param string $Mobile
     * @return DataInterface
     */
    public function getMobile(): string
    {
        return $this->getData(self::Mobile);
    }
    /**
     * @param string $Mobile
     * @return DataInterface
     */
    public function setMobile(string $mobile): DataInterface
    {
        return $this->setData(self::Mobile, $mobile);
    }
    /**
     * @param string $dob
     * @return DataInterface
     */
    public function getDob(): string
    {
        return $this->getData(self::Dob);
    }
    /**
     * @param string $dob
     * @return DataInterface
     */
    public function setDob(string $dob): DataInterface
    {
        return $this->setData(self::DOB, $dob);
    }
    /**
     * @param string $doj
     * @return DataInterface
     */
    public function getDoj(): string
    {
        return $this->getData(self::Doj);
    }
    /**
     * @param string $doj
     * @return DataInterface
     */
    public function setDoj(string $doj): DataInterface
    {
        return $this->setData(self::DOJ, $doj);
    }
    /**
     * Get created at time
     *
     * @param string $createdAt
     * @return $this
     */

    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }
    /**
     * Set created at time
     *
     * @param string $createdAt
     * @return $this
     */

    public function setCreatedAt(string $createdAt): DataInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated at time
     *
     * @param string $updatedAt
     * @return $this
     */
    public function getUpdatedAt(): string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set updated at time
     *
     * @param string $updatedAt
     * @return $this
     */

    public function setUpdatedAt(string $updatedAt): DataInterface
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
     */
    public function setExtensionAttributes(\Gaganashree\Assignment4\Api\Data\DataExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
