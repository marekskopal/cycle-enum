# Cycle ORM - Enum Attribute

Syntax sugar for using Enum column type in Cycle ORM.

Declaration of enum column type in Cycle ORM is not very user friendly, because you must declare all enum values in column type.

This package provides attribute for declaring enum column type in Cycle ORM, which needs only enum class.


## Install

```sh
composer require marekskopal/cycle-enum
```

## Usage

```php
use Cycle\Annotated\Annotation\Entity;
use MarekSkopal\Cycle\Enum\ColumnEnum;

#[Entity]
class MyEntity
{    
    #[ColumnEnum(enum: MyEnum::class)]
    public MyEnum $myColumn;
}
```

