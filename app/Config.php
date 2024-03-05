<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config {

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = '';

    /**
     * Database user
     * @var string
     */
    const DB_USER = '';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = FALSE;

    /**
     * Number of retries if catch error when crawl
     * functions crawl.php
     * @var int
     */
    const RETRY_CRAWL_TIMES = 5;
}
