<?php
namespace Gaganashree\Assignment5\CustomerData;

use Magento\Customer\Model\Session;
use Magento\Customer\CustomerData\SectionSourceInterface;

class CustomerSection implements SectionSourceInterface
{
    /**
     * @var Session
     */
    protected Session $session;

    /**
     * Customer constructor.
     *
     * @param Session $session
     */
    public function __construct(
        Session $session
    ) {
        $this->session =$session;
    }

    /**
     * Return customer name
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getSectionData()
    {
        return [
            "customername" => $this->session->getCustomer()->getName(),
        ];
    }
}
