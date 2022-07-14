<?php

namespace Gaganashree\Assignment4\Controller\Employee;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Gaganashree\Assignment4\Api\EmployeeRepositoryInterface;

class Index extends Action
{
    /**
     * @var JsonFactory
     */
    private JsonFactory $jsonFactory;

    /**
     * @var EmployeeRepositoryInterface
     */
    protected EmployeeRepositoryInterface $employeeRepositoryInterface;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param JsonFactory $jsonFactory
     * @param EmployeeRepositoryInterface $employeeRepositoryInterface
     */
    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        EmployeeRepositoryInterface $employeeRepositoryInterface
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->employeeRepositoryInterface =$employeeRepositoryInterface;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->jsonFactory->create();
        $employeeData = $this->employeeRepositoryInterface->getDataBYId(1);
        return $result->setData($employeeData);
    }
}
