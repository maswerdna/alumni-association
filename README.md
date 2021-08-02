## Alumni Association

This is a project work carried out for assessment purpose under a limited time and so, there is no guarantee that it will work without bugs. I would dedicate more time to this work in the future to perfect it regardless of the outcome of the assessment.

### Installation

To install this project, clone to your local machine and set up a WAMP/LAMP/MAMP/XAMPP server. cd to the project folder and run `composer install` and `npm install`.

## Starting the Development server

Run `php artisan serve` and navigate to `localhost:8000` on your browser.

## Database

Run `copy .env.example .env` command and change the settings to suit your database configuration.

## Test Data

A database file has been included in this repo. Import it to your database through an interface like `PHPMyAdmin` but if you would love to generate your own test data, a `UserFactory` and `BlogPostFactory` has been created for you for that purpose. Run `php artisan key:generate`, `php artisan migrate` and `php artisan tinker` - followed by the necessary commands as outlined in those files.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
