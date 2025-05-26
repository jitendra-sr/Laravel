# Laravel Commands

1. composer create-project laravel/laravel project-name
2. php artisan serve

## Generators

1. php artisan make:view view-name
2. php artisan make:controller MyController
3. php artisan make:component ComponentName
4. php artisan make:middleware MiddlewareName
5. php artisan make:model ModelName

6. php artisan make:rule CustomRule

## Cache and Debugging

1. php artisan cache:clear
2. php artisan config:clear
3. php artisan route:clear
4. php artisan view:clear
5. php artisan optimize:clear

# Other

1. php artisan migrate -> Creates tables as defined in migration files.
2. php artisan model:show ModelName -> Shows the structure of the table to which model is connected
3. php artisan storage:link -> Creates a symbolic link from public/storage to storage/app/public
4. php artisan lang:publish -> Publish the validation.php file for customization of error messages.

# Steps to go through

1. Open routes/web.php file.
2. each route will open a view and all view are stored in resources/views
3. You will also find models, middlewares, controllers in app
