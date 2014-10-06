skvr-web
=======

## Setup

 * Set up Git by following the instructions [here](https://help.github.com/articles/set-up-git).
 * Download and install Composer by following the instructions [here](http://getcomposer.org/download/).
 * Run `git clone https://github.com/ivko/skvr-web.git skvr-web` and git will clone the project for you.
 * Go to project root `cd skvr-web` and run `composer.phar install` and composer will install the project.
 * Run `app/yiic environment dev` to activate the development environment.
 * Update the configurations in `app/config` to suit your needs.
 * Download and install Node.js by following the instructions here [here](https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager).
 * Run `npm install` to download the Node.js dependencies.
 * Start Grunt by running `grunt` and it will compile your LESS and deploy your JavaScript files.
 * You're done! Navigate to `web/index.php` to see your application.

For more information on Composer and Grunt:

* [Composer documentation](http://getcomposer.org/doc/)
* [Grunt documentation](http://gruntjs.com/getting-started)

## Extensions

The following extensions are part of yii-app:

 * Audit https://github.com/nordsoftware/yii-audit
 * Auth https://github.com/Crisu83/yii-auth
 * Debug toolbar https://github.com/malyshev/yii-debug-toolbar
 * Console tools https://github.com/Crisu83/yii-consoletools
 * Emailer https://github.com/nordsoftware/yii-emailer
 * Password https://github.com/phpnode/YiiPassword
 * Yiistrap https://github.com/Crisu83/yiistrap

Please consult the extension documentation for further information.
