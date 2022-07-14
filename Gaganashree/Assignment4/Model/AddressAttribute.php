<?php

namespace Gaganashree\Assignment4\Model;

use Gaganashree\Assignment4\Api\Data\AddressInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\AbstractExtensibleModel;
use Gaganashree\Assignment4\Model\ResourceModel\Address as ResourceModel;

class AddressAttribute extends AbstractExtensibleModel implements AddressInterface
{
    /**
     * Init
     */

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * Get id
     *
     * @inerhitDoc
     * @return int
     */
    public function getId(): int
    {
        return $this->getData(self::ID);
    }

    /**
     * Set id
     *
     * @param int $id
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setId($id): AddressInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Get emp id
     *
     * @return int
     */
    public function getEmpId(): int
    {
        return $this->getData(self::EMP_ID);
    }

    /**
     * Set emp id
     *
     * @param int $empId
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setEmpId($empId): AddressInterface
    {
        return $this->setData(self::EMP_ID, $empId);
    }
    /**
     * Get city
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->getData(self::CITY);
    }
    /**
     * Set city
     *
     * @param string $city
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setCity(string $city): AddressInterface
    {
        return $this->setData(self::CITY, $city);
    }
    /**
     * Get state
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->getData(self::STATE);
    }
    /**
     * Set city
     *
     * @param string $state
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setState(string $state): AddressInterface
    {
        return $this->setData(self::STATE, $state);
    }

    /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set created at
     *
     * @param string $createdAt
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setCreatedAt(string $createdAt):AddressInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
    /**
     * Get last visited at
     *
     * @return string
     */
    public function getLastVisitAt(): string
    {
        return $this->getData(self::LAST_VISIT_AT);
    }
    /**
     * Set last visited at
     *
     * @param string $lastVisitedAt
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function setLastVisitAt($lastVisitedAt): AddressInterface
    {
        return $this->setData(self::LAST_VISIT_AT, $lastVisitedAt);
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     *
     * @inerhitDoc
     * @param \Gaganashree\Assignment4\Api\Data\AddressExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Gaganashree\Assignment4\Api\Data\AddressExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
