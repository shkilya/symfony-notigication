<?php
declare(strict_types=1);

namespace App\Utils\Email;

use App\Utils\INotification;

/**
 * Class EmailNotification
 * @package App\Model\Email
 */
class EmailNotification implements INotification
{

    /**
     * @return string
     */
    public function send()
    {
        return EmailNotification::class;
    }
}
