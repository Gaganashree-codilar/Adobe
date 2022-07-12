<?php
namespace Gaganashree\Assignment4\Model;

use Gaganashree\Assignment4\Api\AddressRepositoryInterface;
use Gaganashree\Assignment4\Model\AddressAttribute as Model;
use Gaganashree\Assignment4\Model\ResourceModel\Address as ResourceModel;
use Gaganashree\Assignment4\Api\Data\AddressInterface;
use Gaganashree\Assignment4\Api\Data\AddressExtensionFactory;

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
     * AddressAttributeRepository constructor.
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     */
    public function __construct(
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
    }

    /**
     * @param int $id
     * @return AddressAttribute
     */
    public function getDataBYId($id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id);
        return $model->getData();
    }
    public function setAddressId(AddressInterface $address)
    {
        $extensionAttributes = $address->getExtensionAttributes();
        $extensionAttributes = $extensionAttributes ? $extensionAttributes : $this->extensionFactory->create();
    }
}
