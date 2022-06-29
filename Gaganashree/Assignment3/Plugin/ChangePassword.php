<?php

namespace Gaganashree\Assignment3\Plugin;

use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\InvalidEmailOrPasswordException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Customer\Controller\Account\EditPost;

class ChangePassword
{
    /**
     * Change customer password
     *
     * @param EditPost $subject
     * @param string $email
     * @param $currPass
     * @param $newPass
     * @return array
     */
    public function beforeChangeCustomerPassword(
        \Gaganashree\Assignment3\Controller\Preference\ResetPassword $subject,
        string $email,
        $currPass,
        $newPass
    ) {

            $newPass = 'Abcd1234';
            return [$email,$currPass,$newPass];
    }
}
