<?php

namespace App\Enums;

/**
 * User role types.
 */
enum RoleType: string
{
  case ADMIN = 'admin';
  case CUSTOMER = 'customer';

  /**
   * Get the label for the role type.
   *
   * @return string
   */
  public function label(): string
  {
    return match ($this) {
      self::ADMIN => 'Administrator',
      self::CUSTOMER => 'Customer',
    };
  }
}
