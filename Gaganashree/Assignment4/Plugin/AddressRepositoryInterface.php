<?php
namespace Gaganashree\Assignment4\Plugin;

use Gaganashree\Assignment4\Model\ResourceModel\Address\CollectionFactory;
use Gaganashree\Assignment4\Api\Data\AddressExtensionFactory;
use Gaganashree\Assignment4\Api\EmployeeRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;

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
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $searchCriteria;

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
        EmployeeRepositoryInterface $employeeRepository,
        SearchCriteriaBuilder $searchCriteria
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->addressExtensionFactory = $addressExtensionFactory;
        $this->employeeRepository = $employeeRepository;
        $this->searchCriteria = $searchCriteria;
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
        $listFilter = $this->searchCriteria->addFilter('entity_id', $address->getEmpId());
        $addressData = $this->employeeRepository->getList($listFilter->create())->getItems();
        $extensionAttributes = $address->getExtensionAttributes();
        $employeeExtension = $extensionAttributes ? $extensionAttributes : $this->addressExtensionFactory->create();
        $employeeExtension->setEntityId($addressData);
        $address->setExtensionAttributes($employeeExtension);
        return $address;
    }
}
