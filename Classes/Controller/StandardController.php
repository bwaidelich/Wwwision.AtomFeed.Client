<?php
namespace Wwwision\AtomPub\Client\Controller;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Wwwision\AtomPub\Client\StreamIterator;
use Wwwision\AtomPub\Client\Test;

class StandardController extends ActionController
{

    public function indexAction()
    {
        $events = [];
        $stream = new StreamIterator('http://flow-master.dev', 'stream', 82);
        #\TYPO3\Flow\var_dump($t->count());
        foreach ($stream as $item) {
            $events[] = $item['title'];
        }
        \TYPO3\Flow\var_dump($events);
        exit;
    }
}