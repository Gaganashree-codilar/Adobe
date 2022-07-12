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
     * @inerhitDoc
     * @return int
     */
    public function getId(): int
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $id
     * @return AddressInterface
     */
    public function setId($id): AddressInterface
    {
        return $this->setData(self::ID, $id);
    }

    public function getEmpId(): int
    {
        return $this->getData(self::EMP_ID);
    }

    public function setEmpId($emp_id): AddressInterface
    {
        return $this->setData(self::emp_id, $emp_id);
    }

    public function getCity(): string
    {
        return $this->getData(self::CITY);
    }

    public function setCity(string $city): AddressInterface
    {
        return $this->setData(self::city, $city);
    }

    public function getState(): string
    {
        return $this->getData(self::STATE);
    }

    public function setState(string $state): AddressInterface
    {
        return $this->setData(self::state, $state);
    }

    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt):AddressInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getLastVisitAt(): string
    {
        return $this->getData(self::LAST_VISIT_AT);
    }

    public function setLastVisitAt(string $lastvisitedat): AddressInterface
    {
        return $this->setData(self::LAST_VISIT_AT, $lastvisitedat);
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
    public function setExtensionAttributes(\Gaganashree\Assignment4\Api\Data\AddressExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
