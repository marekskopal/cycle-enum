<?php

declare(strict_types=1);

namespace MarekSkopal\Cycle\Enum\Utils;

final class EnumUtils
{
    /**
     * @param class-string<T> $enumClass
     * @return array<string>
     * @template T
     * @api
     */
    public static function getEnumValues(string $enumClass): array
    {
        return array_column($enumClass::cases(), 'value');
    }

    /**
     * @param class-string<T> $enumClass
     * @return non-empty-string
     * @template T
     * @api
     */
    public static function getEnumValuesString(string $enumClass): string
    {
        return 'enum(' . implode(',', self::getEnumValues($enumClass)) . ')';
    }
}
