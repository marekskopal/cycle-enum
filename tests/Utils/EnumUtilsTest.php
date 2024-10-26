<?php

declare(strict_types=1);

namespace MarekSkopal\Cycle\Enum\Tests\Utils;

use MarekSkopal\Cycle\Enum\Tests\Fixtures\TestEnum;
use MarekSkopal\Cycle\Enum\Utils\EnumUtils;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(EnumUtils::class)]
final class EnumUtilsTest extends TestCase
{
    /**
     * @param class-string $enumClass
     * @param list<string> $expectedValues
     */
    #[TestWith([TestEnum::class, ['a', 'b', 'c']])]
    public function testGetEnumValues(string $enumClass, array $expectedValues): void
    {
        self::assertEquals($expectedValues, EnumUtils::getEnumValues($enumClass));
    }

    /** @param class-string $enumClass */
    #[TestWith([TestEnum::class, 'enum(a,b,c)'])]
    public function testGetEnumValuesString(string $enumClass, string $expectedValues): void
    {
        self::assertEquals($expectedValues, EnumUtils::getEnumValuesString($enumClass));
    }
}
