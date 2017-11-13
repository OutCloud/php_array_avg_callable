# php_array_avg_callable

Calculates average value from array of objects/numbets via callable function

# Example usage:
Let's assume we have any object of any class with some numeric value inside.
We have an array of that objects, and we have to calculate a average of those numeric values.

Let's this be our class
```php
class Num{
    private $value;
    
    public function __construct(int $number){
        $this->value = $number;
    }
    public function getValue(){
        return $this->value;
    }
}
```

we have array of items of 'Num' class

```php
$items = [
    new Num(1),
    new Num(2),
    new Num(3),
];
```

Let's use array_avg_callable to calculate avg of that numbers
```php
array_avg_callable($items, function($item){
    return $item->getValue();
});
```

Result will of course be: 2

#### Return Values

Returns the avg of values as an integer or float; an exception will be thrown if array is empty

# Installation

via Composer:

```bash
composer require outcloud/php-array-avg-callable
```

function will be registered in global namespace.
