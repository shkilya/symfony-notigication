<?php
declare(strict_types=1);

namespace App\Utils;

use App\Utils\Email\EmailNotificationFactory;
use App\Utils\Sms\SmsNotificationFactory;

/**
 * Class NotificationManager
 * @package App\Model
 */
class NotificationManager
{
    public const SMS_NOTIFICATION = 'SMS_NOTIFICATION';
    public const EMAIL_NOTIFICATION = 'EMAIL_NOTIFICATION';

    /**
     * @var string
     */
    private $type;

    /**
     * NotificationManager constructor.
     * @param string $type
     */
    public function __construct(string $type = self::EMAIL_NOTIFICATION)
    {
        if (!in_array($type, [self::SMS_NOTIFICATION, self::EMAIL_NOTIFICATION])) {
            throw new \InvalidArgumentException("This notification service isn`t available");
        }
        $this->type = $type;
    }


    /**
     * @return INotification
     */
    public function getService(): INotification
    {
        switch ($this->type) {
            case self::SMS_NOTIFICATION:
                return (new SmsNotificationFactory())->createNotification();
                break;


            case self::EMAIL_NOTIFICATION:
            default:
                return (new EmailNotificationFactory())->createNotification();
                break;
        }
    }

    /**
     * @param string $type
     * @return NotificationManager
     */
    public function setType(string $type): NotificationManager
    {
        $this->type = $type;
        return $this;
    }
}