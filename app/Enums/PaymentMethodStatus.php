<?php

namespace App\Enums;

enum PaymentMethodStatus: int
{
    case ACTIVE = 1;
    case INACTIVE = 2;

    public static function getOptions(): array
    {
        return [
            self::ACTIVE->value => 'active',
            self::INACTIVE->value => 'inactive',
        ];
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::ACTIVE => 'active',
            self::INACTIVE => 'inactive',
        };
    }

    public static function fromValue(int $value): self
    {
        return match ($value) {
            self::ACTIVE->value => self::ACTIVE,
            self::INACTIVE->value => self::INACTIVE,
        };
    }

    public static function fromEnum(self $enum): self
    {
        return match ($enum) {
            self::ACTIVE => self::ACTIVE,
            self::INACTIVE => self::INACTIVE,
        };
    }

    public static function getElements(): array
    {
        return [
            self::ACTIVE->value,
            self::INACTIVE->value,
        ];
    }
}
