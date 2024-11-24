<?php

declare(strict_types=1);

namespace App\DTO\Newsletter;

class Newsletter{

    private string $newsletterId;

    private string $topic;

    private string $productId;

    /**
     * Get the value of newsletterId
     */
    public function getNewsletterId(): string
    {
        return $this->newsletterId;
    }

    /**
     * Set the value of newsletterId
     */
    public function setNewsletterId(string $newsletterId): self
    {
        $this->newsletterId = $newsletterId;

        return $this;
    }

    /**
     * Get the value of topic
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * Set the value of topic
     */
    public function setTopic(string $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get the value of productId
     */
    public function getProductId(): string
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     */
    public function setProductId(string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }
}