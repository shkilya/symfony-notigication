<?php
declare(strict_types=1);

namespace App\Utils\Sms;

use App\Utils\INotificationFactory;

/**
 * Class EmailNotification
 * @package App\Model
 */
class SmsNotificationFactory implements INotificationFactory
{
    /**
     * @return SmsNotification
     */
    public function createNotification()
    {
        return new SmsNotification();
    }
}