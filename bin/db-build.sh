#!/bin/bash

#equivalent migrate: frsh 
#php artisan db:wipe
#php artisan migrate

php artisan migrate:fresh

#sans parametre, c'est la classe DatabaseSeeder qui est utilisée
php artisan db:seed 
