plug-like
=========

DO NOT USE FOR PRODUCTION
=========
Do not use the current version for production servers
1. Database isn't finished to be build
2. Apis call aren't optimised
3. Errors page haven't been built
4. NO SECURITY CHECKS HAVE BEEN BE

Installation
=======
1. Clone the repository
2. Install vendors with composer
php composer.phar self-update
php composer.phar install
3. Update the app/config/parameters.yml from the parameters.yml.dist patern to match your server configuration
4. Update your database
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
5. Set you public key for google apis int /web/js/video.js
