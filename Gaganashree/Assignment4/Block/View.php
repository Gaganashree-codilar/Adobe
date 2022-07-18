<?php

namespace Gaganashree\Assignment4\Block;

use Magento\Framework\View\Element\Template;
use Gaganashree\Assignment4\Model\ResourceModel\Employee\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Gaganashree\Assignment4\Api\EmployeeRepositoryInterface;

class View extends Template
{
    /**
     * @var CollectionFactory
     */
    protected CollectionFactory $collectionFactory;

    /**
     * @var EmployeeRepositoryInterface
     */
    private EmployeeRepositoryInterface $employeeRepository;
    /**
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $SearchCriteriaBuilder;


    /**
     * EmployeeDisplay constructor.
     *
     * @param Template\Context $context
     * @param CollectionFactory $collectionFactory
     * @param EmployeeRepositoryInterface $employeeRepository
     * @param SearchCriteriaBuilder $SearchCriteriaBuilder
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        EmployeeRepositoryInterface $employeeRepository,
        SearchCriteriaBuilder $SearchCriteriaBuilder,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
        $this->employeeRepository = $employeeRepository;
        $this->SearchCriteriaBuilder =$SearchCriteriaBuilder;
    }

    /**
     * @return array[]
     */
    public function getAllData()
    {
        $collection = $this->employeeRepository->getList($this->SearchCriteriaBuilder->create());
        return $collection->getItems();
    }

    public function getEditUrl()
    {
        return $this->getUrl('gagana/employee/Edit');
    }

    /**
     * @return \Gaganashree\Assignment4\Api\Data\EmployeeInterface
     */
    public function getEmployees()
    {
        $id=$this->getRequest()->getParam('entity_id');
        $collection = $this->employeeRepository->getDataBYId($id);
        return $collection;
    }
    public function getFormUrl()
    {
        return $this->getUrl('gagana/employee/Form');
    }

    public function getAddUrl()
    {
        return $this->getUrl('gagana/employee/Add');
    }

    public function getViewUrl()
    {
        return $this->getUrl('gagana/employee/View');
    }
}
