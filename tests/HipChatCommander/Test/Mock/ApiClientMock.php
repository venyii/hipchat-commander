<?php

/*
 * This file is part of the HipChat Commander.
 *
 * (c) venyii
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Venyii\HipChatCommander\Test\Mock;

use Venyii\HipChatCommander\Api;

class ApiClientMock extends Api\Client
{
    /**
     * {@inheritdoc}
     */
    public function send($uri, array $data)
    {
        // too lazy...
    }
}
