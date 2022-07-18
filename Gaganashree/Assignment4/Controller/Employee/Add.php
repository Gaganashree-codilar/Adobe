<?php

namespace Gaganashree\Assignment4\Controller\Employee;

use Magento\Framework\App\Action\Action;
use Gaganashree\Assignment4\Model\EmployeeFactory as ModelFactory;
use Gaganashree\Assignment4\Model\ResourceModel\Employee as ResourceModel;
use Magento\Framework\App\Action\Context;

class Add extends Action
{
    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    /**
     * @var ResourceModel
     */
    protected $resourceModel;

    /**
     * Add constructor.
     * @param Context $context
     * @param ModelFactory $modelFactory
     * @param ResourceModel $resourceModel
     */
    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    ) {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
    }

    /**
     * Execute
     *
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $employee = $this->modelFactory->create();
        $data = $this->getRequest()->getParams();
        $employee->load($data['entity_id']);
        $employee->setName($data['name'] ?? null);
        $employee->setEmail($data['email'] ?? null);
        $employee->setMobile($data['mobile'] ?? null);
        $employee->setDob($data['dob'] ?? null);
        $employee->setDoj($data['doj'] ?? null);
        $this->resourceModel->save($employee);
        $this->messageManager->addSuccessMessage(__('Employee %1 saved successfully', $employee->getName()));
        return $this->resultRedirectFactory->create()->setPath('gagana/employee/view');
    }
}
