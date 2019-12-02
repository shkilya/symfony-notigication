<?php
declare(strict_types=1);

namespace App\Utils\Email;

use App\Utils\INotificationFactory;

/**
 * Class EmailNotification
 * @package App\Model
 */
class EmailNotificationFactory implements INotificationFactory
{
    public function createNotification(): EmailNotification
    {
        return new EmailNotification();
    }
}