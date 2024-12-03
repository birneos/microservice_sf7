<?php

declare(strict_types=1);

namespace App\DTO\Newsletter;

use App\DTO\User\User;
use DateTimeImmutable;

class NewsletterWebhook
{
    private string $event;

    private string $id;

    private string $origin;

    private DateTimeImmutable $timestamp;

    private User $user;

    private Newsletter $newsletter;


  /**
   * Get the value of event
   */
    public function getEvent(): string
    {
        return $this->event;
    }

  /**
   * Set the value of event
   */
    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }

  /**
   * Get the value of id
   */
    public function getId(): string
    {
        return $this->id;
    }

  /**
   * Set the value of id
   */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

  /**
   * Get the value of origin
   */
    public function getOrigin(): string
    {
        return $this->origin;
    }

  /**
   * Set the value of origin
   */
    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

  /**
   * Get the value of timestamp
   */
    public function getTimestamp(): DateTimeImmutable
    {
        return $this->timestamp;
    }

  /**
   * Set the value of timestamp
   */
    public function setTimestamp(DateTimeImmutable $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

  /**
   * Get the value of user
   */
    public function getUser(): User
    {
        return $this->user;
    }

  /**
   * Set the value of user
   */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

  /**
   * Get the value of newsletter
   */
    public function getNewsletter(): Newsletter
    {
        return $this->newsletter;
    }

  /**
   * Set the value of newsletter
   */
    public function setNewsletter(Newsletter $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }
}
