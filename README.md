# LabeledEnum

Enum with label that extends myclabs/php-enum.

## Usage

```php
use Kalibora\LabeledEnum\LabeledEnum;

class Fruit extends LabeledEnum
{
    private const APPLE = 1;
    private const ORANGE = 2;
    private const BANANA = 3;

    public static function getLabels() : array
    {
        return [
            self::APPLE => 'Apple',
            self::ORANGE => 'Orange',
            self::BANANA => 'Banana',
        ];
    }
}
```

```php
$orange = Fruit::ORANGE();

echo $orange->getValue(), PHP_EOL; // 2
echo $orange->getLabal(), PHP_EOL; // Orange
```
