<?php

namespace App\MessageHandler;

use App\Entity\News;
use App\Controller\NewsApiController;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * Class NewsMessageHandler
 * @package App\MessageHandler
 */
class NewsMessageHandler
{

    /**
     * @param News $message
     */
    public function __invoke(News $message)
    {
        echo $message->getTitle();
    }
}