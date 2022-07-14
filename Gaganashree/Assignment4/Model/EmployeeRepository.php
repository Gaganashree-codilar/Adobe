<?php
namespace Gaganashree\Assignment4\Model;

use Gaganashree\Assignment4\Api\EmployeeRepositoryInterface;
use Gaganashree\Assignment4\Model\Employee as Model;
use Gaganashree\Assignment4\Model\EmployeeFactory as ModelFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;
use Gaganashree\Assignment4\Model\ResourceModel\Employee\CollectionFactory;
use phpDocumentor\Reflection\Types\Collection;

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
    private $CollectionFactory;

    /**
     * SellerRepository constructor.
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        CollectionFactory $collectionFactory
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionFactory = $collectionFactory;
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
}
