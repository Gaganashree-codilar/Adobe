<?php
namespace Gaganashree\Assignment4\Plugin;

use Gaganashree\Assignment4\Model\ResourceModel\Address\CollectionFactory;
use Gaganashree\Assignment4\Api\Data\AddressExtensionFactory;
use Gaganashree\Assignment4\Api\EmployeeRepositoryInterface;

class AddressRepositoryInterface
{

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @var AddressExtensionFactory
     */
    private AddressExtensionFactory $addressExtensionFactory;
    /**
     * @var EmployeeRepositoryInterface
     */
    private EmployeeRepositoryInterface $employeeRepository;

    /**
     * EmployeeRepositoryInterface constructor.
     *
     * @param CollectionFactory $collectionFactory
     * @param AddressExtensionFactory $addressExtensionFactory
     * @param EmployeeRepositoryInterface $employeeRepository
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        AddressExtensionFactory $addressExtensionFactory,
        EmployeeRepositoryInterface $employeeRepository
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->addressExtensionFactory = $addressExtensionFactory;
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * Adding extension attribute
     *
     * @param \Gaganashree\Assignment4\Api\AddressRepositoryInterface $subject
     * @param \Gaganashree\Assignment4\Api\Data\AddressInterface $address
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function afterGetDataBYId(
        \Gaganashree\Assignment4\Api\AddressRepositoryInterface $subject,
        \Gaganashree\Assignment4\Api\Data\AddressInterface $address
    ) {
        $addressData = $this->employeeRepository->getById($address->getEmpId());
//        var_dump($addressData);die();
        $extensionAttributes = $address->getExtensionAttributes();
        $employeeExtension = $extensionAttributes ? $extensionAttributes : $this->addressExtensionFactory->create();
        $employeeExtension->setEntityId($addressData);
        $address->setExtensionAttributes($employeeExtension);
        return $address;
    }
}
