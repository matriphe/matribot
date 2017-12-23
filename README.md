# Matribot

Matribot is a simple basic skeleton application to build bot that based on Laravel application. It is used internally by Muhammad Zamroni (matriphe) for fun projects.

## Installation

Using `composer` run this command.

```
composer create-project matriphe/matribot {your_application_path} --prefer-dist
```

Now you can use Matribot just like using Laravel application.

## Configuration

Check `config/` directory for more details. Use `.env` file to set configuration locally.

## Deployment

Matribot uses Envoy task runner to do deployment. Make sure your server is properly configured, SSH without password configured, and has composer installed.

Open `Envoy.blade.php` and make adjustment there.

For first deployment, use this command.

```
envoy run install
```

For regular deployment, run this command.

```
envoy run deploy
```

## Packages

Matribot are using these packages to do the basic things.

* [Goutte](https://github.com/FriendsOfPHP/Goutte) for web scrapping
* [Telegram](https://github.com/irazasyed/telegram-bot-sdk) for notification 
* [Laravel Intl](https://github.com/Propaganistas/Laravel-Intl) for formatting


## License

Matribot is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).