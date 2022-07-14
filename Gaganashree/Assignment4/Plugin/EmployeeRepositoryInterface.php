<?php

namespace Gaganashree\Assignment4\Plugin;

use Gaganashree\Assignment4\Model\ResourceModel\Employee\CollectionFactory;
use Gaganashree\Assignment4\Api\Data\EmployeeExtensionFactory;
use Gaganashree\Assignment4\Api\AddressRepositoryInterface;

class EmployeeRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @var EmployeeExtensionFactory
     */
    private EmployeeExtensionFactory $employeeExtensionFactory;
    /**
     * @var AddressRepositoryInterface
     */
    private AddressRepositoryInterface $addressRepository;

    /**
     * EmployeeRepositoryInterface constructor.
     *
     * @param CollectionFactory $collectionFactory
     * @param EmployeeExtensionFactory $employeeExtensionFactory
     * @param AddressRepositoryInterface $addressRepository
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        EmployeeExtensionFactory $employeeExtensionFactory,
        AddressRepositoryInterface $addressRepository
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->employeeExtensionFactory = $employeeExtensionFactory;
        $this->addressRepository = $addressRepository;
    }

    /**
     * Adding extension attribute first_name to getById
     *
     * @param \Gaganashree\Assignment4\Api\EmployeeRepositoryInterface $subject
     * @param \Gaganashree\Assignment4\Api\Data\EmployeeInterface $employee
     *
     * @return Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function afterGetDataBYId(
        \Gaganashree\Assignment4\Api\EmployeeRepositoryInterface $subject,
        \Gaganashree\Assignment4\Api\Data\EmployeeInterface $employee
    ) {
        $addressData=$this->addressRepository->getAddressById($employee->getEntityId());
        $extensionAttributes=$employee->getExtensionAttributes();
        $employeeExtension = $extensionAttributes ? $extensionAttributes : $this->employeeExtensionFactory->create();
        $employeeExtension->setEmpId($addressData);
        $employee->setExtensionAttributes($employeeExtension);
        return $employee;
    }
}
