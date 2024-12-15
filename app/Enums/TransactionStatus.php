<?php

namespace App\Enums;

enum TransactionStatus: int
{
    case AWAITING_PAYMENT = 0;
    case PAID = 1;
    case PARTIALLY_PAID = 2;
    case FAILED = 3;

    public static function getOptions(): array
    {
        return [
            self::AWAITING_PAYMENT->value => 'awaiting_payment',
            self::PAID->value => 'paid',
            self::PARTIALLY_PAID->value => 'partially_paid',
            self::FAILED->value => 'failed',
        ];
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::AWAITING_PAYMENT->value => 'awaiting_payment',
            self::PAID->value => 'paid',
            self::PARTIALLY_PAID->value => 'partially_paid',
            self::FAILED->value => 'failed',
        };
    }

    public static function fromValue(int $value): string
    {
        return match ($value) {
            self::AWAITING_PAYMENT->value => 'awaiting_payment',
            self::PAID->value => 'paid',
            self::PARTIALLY_PAID->value => 'partially_paid',
            self::FAILED->value => 'failed',
        };
    }

    public static function fromEnum(self $enum): string
    {
        return match ($enum) {
            self::AWAITING_PAYMENT->value => 'awaiting_payment',
            self::PAID->value => 'paid',
            self::PARTIALLY_PAID->value => 'partially_paid',
            self::FAILED->value => 'failed',
        };
    }

    public static function getElements(): array
    {
        return [
            self::AWAITING_PAYMENT->value => 'awaiting_payment',
            self::PAID->value => 'paid',
            self::PARTIALLY_PAID->value => 'partially_paid',
            self::FAILED->value => 'failed',
        ];
    }
}
