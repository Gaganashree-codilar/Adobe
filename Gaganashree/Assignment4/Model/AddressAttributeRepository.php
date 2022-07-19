<?php
namespace Gaganashree\Assignment4\Model;

use Gaganashree\Assignment4\Api\AddressRepositoryInterface;
use Gaganashree\Assignment4\Model\AddressAttributeFactory as ModelFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Address as ResourceModel;
use Gaganashree\Assignment4\Api\Data\AddressInterface;
use Gaganashree\Assignment4\Api\Data\AddressExtensionFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Address\CollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Magento\Framework\Api\SearchCriteriaInterface;
use Gaganashree\Assignment4\Api\Data\EmployeeSearchResultInterfaceFactory;


class AddressAttributeRepository implements AddressRepositoryInterface
{
    /**
     * @var ModelFactory
     */
    private $modelFactory;
    /**
     * @var ResourceModel
     */
    private $resourceModel;
    /**
     * @var CollectionFactory
     */
    private $CollectionFactory;
    /**
     * @var EmployeeSearchResultInterfaceFactory|EmployeeSearchResultInterface
     */
    private EmployeeSearchResultInterface|EmployeeSearchResultInterfaceFactory $employeeSearchResultInterfaceFactory;
    /**
     * @var CollectionProcessor
     */
    private CollectionProcessor $collectionProcessor;
    /**
     * @var SearchCriteriaInterface
     */
    private SearchCriteriaInterface $searchCriteria;
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * AddressAttributeRepository constructor.
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param CollectionFactory $collectionFactory
     * @param SearchCriteriaInterface $searchCriteria
     * @param EmployeeSearchResultInterface $employeeSearchResultInterfaceFactory
     * @param CollectionProcessor $collectionProcessor
     */
    public function __construct(
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        CollectionFactory $collectionFactory,
        SearchCriteriaInterface $searchCriteria,
        EmployeeSearchResultInterfaceFactory $employeeSearchResultInterfaceFactory,
        CollectionProcessor  $collectionProcessor
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionFactory = $collectionFactory;
        $this->searchCriteria = $searchCriteria;
        $this->collectionProcessor = $collectionProcessor;
        $this->employeeSearchResultInterfaceFactory = $employeeSearchResultInterfaceFactory;
    }

    /**
     * Get data
     *
     * @param int $id
     * @return \Gaganashree\Assignment4\Model\AddressAttribute
     */
    public function getDataBYId($id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id);
        return $model;
    }
    /**
     * Collection
     *
     * @return Collection
     */
    public function getCollection()
    {
        $collection = $this->collectionFactory->create();
        return $collection;
    }
    /**
     * @param $id
     * @return \Gaganashree\Assignment4\Api\Data\AddressInterface
     */
    public function getAddressById($id)
    {
        $collection = $this->getCollection()->addFieldToFilter('emp_id', $id);
        return $collection->getData();
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return 
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $list= $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, $list);
        $searchResult=$this->employeeSearchResultInterfaceFactory->create();
        $searchResult->setItems($list->getItems());
        $searchResult->setTotalCount($list->getSize());
        $searchResult->setSearchCriteria($searchCriteria);
        return $searchResult;
    }
}
