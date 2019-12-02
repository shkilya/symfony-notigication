<?php

namespace App\Controller;

use App\Utils\NotificationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var NotificationManager
     */
    private $notificationManager;

    /**
     * HomeController constructor.
     * @param NotificationManager $notificationManager
     */
    public function __construct(NotificationManager $notificationManager)
    {
        $this->notificationManager = $notificationManager;
    }

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $r = $this->notificationManager
//            ->setType(NotificationManager::SMS_NOTIFICATION)
            ->getService()
            ->send();


        return $this->json([
            'message' => $r,
            'path' => 'src/Controller/HomeController.php',
        ]);
    }

    /**
     * @Route("send-notification",methods={"POST"})
     */
    public function sendNotification()
    {

    }
}
