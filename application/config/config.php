<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Configuration for: URL
 * Here we auto-detect your applications URL and the potential sub-folder. Works perfectly on most servers and in local
 * development environments (like WAMP, MAMP, etc.). Don't touch this unless you know what you do.
 *
 * URL_PUBLIC_FOLDER:
 * The folder that is visible to public, users will only have access to that folder so nobody can have a look into
 * "/application" or other folder inside your application or call any other .php file than index.php inside "/public".
 *
 * URL_PROTOCOL:
 * The protocol. Don't change unless you know exactly what you do.
 *
 * URL_DOMAIN:
 * The domain. Don't change unless you know exactly what you do.
 *
 * URL_SUB_FOLDER:
 * The sub-folder. Leave it like it is, even if you don't use a sub-folder (then this will be just "/").
 *
 * URL:
 * The final, auto-detected URL (build via the segments above). If you don't want to use auto-detection,
 * then replace this line with full URL (and sub-folder) and a trailing slash.
 */

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mini');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

/**
 * Configuration for: Cookies
 */
// 1209600 seconds = 2 weeks
define('COOKIE_RUNTIME', 1209600);
//IMPORTANT: always put a dot in front of the domain, like ".mydomain.com"!
define('COOKIE_DOMAIN', '.localhost');

/**
 * Configuration for: Hashing
 */
define('HASH_COST_FACTOR', '10');

/**
 * Configuration for: Feedback messages
 * This is the place where you define your feed messages
 */
define('FEEDBACK_USERNAME_FIELD_EMPTY','Username field was empty!');
define('FEEDBACK_PASSWORD_FIELD_EMPTY','Password field was empty!');
define('FEEDBACK_LOGIN_FAILED','Login failed.');
define('FEEDBACK_PASSWORD_WRONG_3_TIMES', 'You have typed in a wrong password 3 or more times already. Please wait 30 seconds to try again.');
define('FEEDBACK_PASSWORD_REPEAT_WRONG', 'Password and password repeat are not the same.');
define('FEEDBACK_PASSWORD_TOO_SHORT', 'Password has a minimum length of 6 characters');
define('FEEDBACK_USERNAME_TOO_SHORT_OR_TOO_LONG', 'Username cannot be shorter than 2 or longer than 64 characters');
define('FEEDBACK_USERNAME_DOES_NOT_FIT_PATTERN', 'Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters.');
define('FEEDBACK_EMAIL_FIELD_EMPTY', 'Email field was empty!');
define('FEEDBACK_EMAIL_TOO_LONG', 'Email cannot be longer than 64 characters');
define('FEEDBACK_EMAIL_DOES_NOT_FIT_PATTERN', 'Sorry, your chosen email does not fit into the email naming pattern');
define('FEEDBACK_UNKOWN_ERROR', 'WTF?');
define('FEEDBACK_USERNAME_ALREADY_TAKEN', 'Sorry, that username is already taken. Please choose another one.');
define('FEEDBACK_EMAIL_ALREADY_TAKEN', 'Sorry, that email was already used. Please choose another one.');
define('FEEDBACK_ACCOUNT_CREATION_FAILED', 'Sorry, your registration failed. Please go back and try again.');
define('FEEDBACK_ACCOUNT_SUCCESFULLY_CREATED', 'Your account has been succesfully created and we have sent you an email.');
define('FEEDBACK_VERIFICATION_EMAIL_SENDING_FAILED', 'Sorry, we could not send you a verification mail. Your account has NOT been created.');
define('FEEDBACK_VERIFICATION_EMAIL_SENDING_SUCCESFULL', 'A verification mail has been sent succesfully.');