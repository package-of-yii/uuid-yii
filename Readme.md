# Uuid for Yii

The Uuid for Yii provides you with instant accessibility to use Uuid in Yii PHP applications. This package uses [Ramsey uuid](https://github.com/ramsey/uuid) to generate unique uuid string.


## Features

* Automatic insertion of Uuid using Behavior option.


## Installation

Use composer to install the package
```
composer require package-of-yii/uuid-yii
```

## Getting started

Behaviour Class Implementation
```php
use Poyii\Uuid\Behavior\UuidBehavior;

public function behaviors()
{
    return [
        'uuid' => [
            'class' => UuidBehavior::class,
            'column' => 'uuid',
            'value' => Uuid::uuid6(),
        ],
    ];
}
```



## Contributing

All contributors are welcome! For information on how to build, test, and release, see our [contributing guide](CONTRIBUTING.md).


## License

The Uuid Yii library is free software released under the MIT License.