<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel E-Mail Template and Jobs Queues

## creates model, migration, factory, controller[ resource ], seeder

php artisan make:model Customer -mfcsr

## create a email template with markdown

php artisan make:mail WelcomeMail -m emails.welcome

## Customizing email template

php artisan vendor:publish --tag=laravel-mail

## Sending Email with queues

Reference :
https://hackthestuff.com/article/working-with-laravel-queue-and-job-in-laravel6

Step - 1 :
In env
QUEUE_CONNECTION=database

Step - 2 :
Create a Job / Queue
php artisan make:job SendMailJob

Step - 3 :

## To creating the queue table ( remember to migrate )

php artisan queue:table

Step - 4 :

use App\Jobs\SendMailJob;
where you want to use job / queue

## To creating the queue in the database

SendMailJob::dispatch($details);

SendMailJob::dispatch($details);
->delay(now()->addMinutes(5));

## To process the queue / sending the email

php artisan queue:listen
