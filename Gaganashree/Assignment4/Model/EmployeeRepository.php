<?php
namespace Gaganashree\Assignment4\Model;

use Gaganashree\Assignment4\Api\EmployeeRepositoryInterface;
use Gaganashree\Assignment4\Model\Employee as Model;
use Gaganashree\Assignment4\Model\EmployeeFactory as ModelFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;
use Gaganashree\Assignment4\Model\ResourceModel\Employee\CollectionFactory;
use Magento\Framework\Api\SearchCriteria;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Magento\Framework\Api\SearchCriteriaInterface;
use Gaganashree\Assignment4\Api\Data\EmployeeSearchResultInterfaceFactory;

class EmployeeRepository implements EmployeeRepositoryInterface
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
    private $collectionFactory;

    /**
     * @var CollectionProcessor
     */
    private $collectionProcessor;
    /**
     * @var EmployeeSearchResultInterfaceFactory
     */
    private EmployeeSearchResultInterfaceFactory $employeeSearchResultInterfaceFactory;


    /**
     * SellerRepository constructor.
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
     * Get data
     *
     * @param int $entityId
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function getDataBYId($entityId)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $entityId);
        return $model;
    }
    /**
     * @param $Id
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function getById($Id)
    {
        $model= $this->modelFactory->create();
        $collecton=$model->getCollection();
        $collecton->addFieldToFilter('entity_id', $Id);
        return $collecton->getData();
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

    /**
     * @inheritDoc
     */
    public function saveData($data)
    {
        $model= $this->modelFactory->create();
        if (!empty($data['entity_id'])) {
            $model=$this->load($data['entity_id']);
        }
        $model->setName($data['name']);
        $model->setEmail($data['email']);
        $model->setMobile($data['mobile']);
        $model->setDob($data['dob']);
        $model->setDoj($data['doj']);
        $this->resourceModel->save($model);
        return $model->getName()." Saved Successfully";
    }
}
