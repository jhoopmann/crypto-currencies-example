## Laravel Livewire - Crypto Currencies Showcase App

Showcase Application for https://github.com/jhoopmann/crypto-currencies-component

## Requirements

- PHP 8.3

## How It Works

Clone this repository and request an access token for
https://github.com/jhoopmann/crypto-currencies-component to execute \
```composer install```.

Then serve the application via \
```php artisan serve```.

![Screenshot 2024-09-04 at 21 50 37](https://github.com/user-attachments/assets/59999de1-41a7-4792-97eb-5ae6c5f84000)
![Screenshot 2024-09-04 at 21 49 01](https://github.com/user-attachments/assets/7c8b9d75-d5e6-408e-a334-0be5ff64adce)



## Envrionment Variables

Create or copy your own .env configuration from ```https://github.com/platformsh-templates/laravel/blob/master/.env.example```. 
Make sure to set correct session driver and cache store values (file instead of database f.e.).

Example .env:

```APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:uMzURPea4P+3C4cPgpazK6ndvT8v8TKD1gfsl37U/7k=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US
APP_MAINTENANCE_DRIVER=file
...
SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null
...
CACHE_STORE=file
CACHE_PREFIX=
...
OPEN_EXCHANGE_RATES_API_KEY="HIDDEN"```
