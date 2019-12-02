<?php
declare(strict_types=1);

namespace App\Utils;

/**
 * Interface INotification
 * @package App\Controller\Model
 */
interface INotification
{
    public function send();
}