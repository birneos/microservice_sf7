<?php

declare(strict_types=1);

namespace App\Webhook\Handler;

use App\DTO\Webhook;
use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;

class HandlerDelegator
{

    public function __construct(
        #[AutowireIterator('webhook.handler')] private iterable $handlers
    ) {}

    public function delegate(Webhook $webhook): void
    {

        dd($this->handlers, $webhook);

        // Loop over the handlers
        foreach ($this->handlers as $handler) {

            // Ask if supported 
            if ($handler->supports($webhook)) {

                // if support call handler
                $handler->handle($webhook);
            }
        }
    }
}
