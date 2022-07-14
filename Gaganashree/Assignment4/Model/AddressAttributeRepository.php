<?php
namespace Gaganashree\Assignment4\Model;

use Gaganashree\Assignment4\Api\AddressRepositoryInterface;
use Gaganashree\Assignment4\Model\AddressAttributeFactory as ModelFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Address as ResourceModel;
use Gaganashree\Assignment4\Api\Data\AddressInterface;
use Gaganashree\Assignment4\Api\Data\AddressExtensionFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Address\CollectionFactory;
use phpDocumentor\Reflection\Types\Collection;

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
     * AddressAttributeRepository constructor.
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
     * Get data
     *
     * @param int $id
     * @return \Gaganashree\Assignment4\Model\AddressAttribute
     */
    public function getDataBYId($id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id);
        return $model->getData();
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
}
