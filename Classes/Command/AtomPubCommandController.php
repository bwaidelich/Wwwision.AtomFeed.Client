<?php
namespace Wwwision\AtomPub\Client\Command;

use TYPO3\Flow\Cli\CommandController;
use Wwwision\AtomPub\Client\StreamIterator;

class AtomPubCommandController extends CommandController
{
    public function fetchCommand()
    {
        #$stream = new StreamIterator('http://flow-master.dev', 'stream', 0, true);
        $stream = new StreamIterator('http://127.0.0.1:2113', 'streams/%24ce-User', 10, true);
        #\TYPO3\Flow\var_dump($t->count());
        foreach ($stream as $key => $item) {
            \TYPO3\Flow\var_dump($item, $key);
            #exit;
            #$this->outputLine('Event: %s: %s', [$key, $item['summary']]);
        }
        $this->outputLine('Done');
    }
}