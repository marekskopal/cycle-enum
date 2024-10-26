<?php

declare(strict_types=1);

namespace MarekSkopal\Cycle\Enum\Tests;

use MarekSkopal\Cycle\Enum\ColumnEnum;
use MarekSkopal\Cycle\Enum\Tests\Fixtures\TestEnum;
use MarekSkopal\Cycle\Enum\Utils\EnumUtils;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ColumnEnum::class)]
#[UsesClass(EnumUtils::class)]
final class ColumnEnumTest extends TestCase
{
    public function testColumnEnum(): void
    {
        $columnEnum = new ColumnEnum(TestEnum::class);
        self::assertEquals('enum(a,b,c)', $columnEnum->getType());
        self::assertEquals(TestEnum::class, $columnEnum->getTypecast());
    }
}
