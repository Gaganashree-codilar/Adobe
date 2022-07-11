<?php
namespace Gaganashree\Assignment4\Model;

use Gaganashree\Assignment4\Api\EmployeeRepositoryInterface;
use Gaganashree\Assignment4\Model\Employee as Model;
use Gaganashree\Assignment4\Model\EmployeeFactory as ModelFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;
use Gaganashree\Assignment4\Model\ResourceModel\Employee\CollectionFactory;

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
     * @return array
     */
    public function getCollection()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getData();
    }
    /**
     * Get data
     *
     * @param int $id
     * @return Model
    // * @throws NoSuchEntityException
     */
    public function getDataBYId($id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id);
        return $model->getData();
    }
}
