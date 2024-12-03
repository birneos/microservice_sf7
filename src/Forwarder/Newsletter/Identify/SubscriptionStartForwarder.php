<?php

declare(strict_types=1);

namespace App\Forwarder\Newsletter\Identify;

use App\Forwarder\Newsletter\ForwarderInterface;
use App\DTO\Newsletter\NewsletterWebhook;

class SubscriptionStartForwarder implements ForwarderInterface{

  private const SUPPORTED_EVENT = 'newsletter_subscribed';

	public function supports(NewsletterWebhook $newsletterWebhook): bool 
    {
        return $newsletterWebhook->getEvent() === self::SUPPORTED_EVENT;
    }

	public function forward(NewsletterWebhook $newsletterWebhook): void 
    {
        // TODO
    }
}