<?php

namespace App\Enums;

enum ParticipantType: int
{
    case CONTRIBUTOR = 1;
    case TREASURER = 2;

    public static function getOptions(): array
    {
        return [
            self::CONTRIBUTOR->value => 'Contributor',
            self::TREASURER->value => 'Treasurer',
        ];
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::CONTRIBUTOR => 'Contributor',
            self::TREASURER => 'Treasurer',
        };
    }

    public static function fromValue(int $value): self
    {
        return match ($value) {
            self::CONTRIBUTOR->value => self::CONTRIBUTOR,
            self::TREASURER->value => self::TREASURER,
        };
    }

    public static function fromEnum(self $enum): self
    {
        return match ($enum) {
            self::CONTRIBUTOR => self::CONTRIBUTOR,
            self::TREASURER => self::TREASURER,
        };
    }

    public static function getElements(): array
    {
        return [
            self::CONTRIBUTOR->value,
            self::TREASURER->value,
        ];
    }
}
