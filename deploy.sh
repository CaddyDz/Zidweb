cd /home/forge/zidweb.com
git checkout -- . && git reset --hard HEAD && git clean -df
git pull origin master
php artisan optimize
composer install --optimize-autoloader --no-dev
php artisan migrate
php artisan l5-swagger:generate
npm install
npm run prod

( flock -w 10 9 || exit 1
    echo 'Restarting FPM...'; sudo -S service $FORGE_PHP_FPM reload ) 9>/tmp/fpmlock
