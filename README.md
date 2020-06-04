## Realtime chat application

This project is for the realtime chat application using laravel websockets.

## Installation and Configuration

1. Install the composer: ```composer install```

2. Copy the .env from .env.example using ``` cp .env.example .env ```.

3. Setup database into environment file.

4. Key generate using ``php artisan key:generate``

5. The migration using ```php artisan migrate```

6. Laravel websocket serve using ```php artisan websockets:serve``` 

## Usage 
If you have already registered the user then please login else register new user.
After logged display the chat screen and logged user are drop the new message into the chat and displayed the droped message to another logged chat screen without page reload using websocket.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email vishal@viitorcloud.com or ruchit.patel@viitor.cloud or shailesh.jakhaniya@viitor.cloud instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
