## PHP-ShockPot

![bashbug](https://pbs.twimg.com/media/ByXw51ZIcAATTKu.png:large)

PHP-ShockPot is a small honeypot aimed at showing you the interesting attempts made trying to exploit your host using the now famous ["Shellshock"](http://en.wikipedia.org/wiki/Shellshock_(software_bug)) (also known as bashbug) bug.

### Installation
Installation should be relatively fast. Most of the steps are *very* well documented elsewhere on the interwebz, but this should serve as small guideline:

1. Clone the repository with `git clone https://github.com/leonjza/PHP-ShockPot.git`.
2. Setup a web server (Apache/Nginx doesn't matter) to serve the contents of the `public/` folder to the world.
3. Ensure the web server can write to the `storage/` directory.
4. Run the database migrations with `php artisan migrate`.
5. Get [composer](https://getcomposer.org/) installed and run `composer install` to install all of the required dependencies.
5. Test by browsing to your instance!

### Contact
[@leonjza](https://twitter.com/leonjza)
