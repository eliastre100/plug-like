plug-like
=========

Installation
=======
1. Clone the repository
2. Install composer
php composer.phar self-update
php composer.phar install
3. Update the app/config/parameters.yml to match your server configuration
4. Update your library
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
