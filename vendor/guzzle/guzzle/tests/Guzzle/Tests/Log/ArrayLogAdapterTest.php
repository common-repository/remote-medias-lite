<?php

namespace WPRemoteMediaExt\Guzzle\Tests\Log;

use WPRemoteMediaExt\Guzzle\Log\ArrayLogAdapter;

class ArrayLogAdapterTest extends \WPRemoteMediaExt\Guzzle\Tests\GuzzleTestCase
{
    public function testLog()
    {
        $adapter = new ArrayLogAdapter();
        $adapter->log('test', \LOG_NOTICE, 'localhost');
        $this->assertEquals(array(array('message' => 'test', 'priority' => \LOG_NOTICE, 'extras' => 'localhost')), $adapter->getLogs());
    }

    public function testClearLog()
    {
        $adapter = new ArrayLogAdapter();
        $adapter->log('test', \LOG_NOTICE, 'localhost');
        $adapter->clearLogs();
        $this->assertEquals(array(), $adapter->getLogs());
    }
}
