<?php
declare(strict_types=1);

namespace App\Utils\Sms;

use App\Utils\INotification;

/**
 * Class EmailNotification
 * @package App\Model
 */
class SmsNotification implements INotification
{
    public function send()
    {
        return 'SmsNotification';
    }
}