<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Amqp\Consumer;

use Hyperf\Amqp\Annotation\Consumer;
use Hyperf\Amqp\Message\ConsumerMessage;
use Hyperf\Amqp\Result;

/**
 * @Consumer(exchange="hyperf", routingKey="timeout", queue="hyperf.timeout", name="TimeoutConsumer", nums=1)
 */
class TimeoutConsumer extends ConsumerMessage
{
    public function consume($data): string
    {
        sleep($data);
        var_dump($data);
        return Result::ACK;
    }
}
