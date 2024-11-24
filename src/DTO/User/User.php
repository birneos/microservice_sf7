<?php

declare(strict_types=1);

namespace App\DTO\User;

class User{

  private string $clientid;

  private string $email;

  private string $region;
  

  /**
   * Get the value of clientid
   */
  public function getClientid(): string
  {
    return $this->clientid;
  }

  /**
   * Set the value of clientid
   */
  public function setClientid(string $clientid): self
  {
    $this->clientid = $clientid;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * Set the value of email
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of region
   */
  public function getRegion(): string
  {
    return $this->region;
  }

  /**
   * Set the value of region
   */
  public function setRegion(string $region): self
  {
    $this->region = $region;

    return $this;
  }
}