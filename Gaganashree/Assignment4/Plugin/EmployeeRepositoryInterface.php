<?php

namespace Gaganashree\Assignment4\Plugin;

use Gaganashree\Assignment4\Model\ResourceModel\Employee\CollectionFactory;
use Gaganashree\Assignment4\Api\Data\EmployeeExtensionFactory;
use Gaganashree\Assignment4\Api\AddressRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;

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
        AddressRepositoryInterface $addressRepository,
        SearchCriteriaBuilder $searchCriteria
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->employeeExtensionFactory = $employeeExtensionFactory;
        $this->addressRepository = $addressRepository;
        $this->searchCriteria = $searchCriteria;
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
        $listFilter = $this->searchCriteria->addFilter('emp_id', $employee->getEntityId());
        $addressData=$this->addressRepository->getList($listFilter->create())->getItems();
        $extensionAttributes=$employee->getExtensionAttributes();
        $employeeExtension = $extensionAttributes ? $extensionAttributes : $this->employeeExtensionFactory->create();
        $employeeExtension->setEmpId($addressData);
        $employee->setExtensionAttributes($employeeExtension);
        return $employee;
    }
}
