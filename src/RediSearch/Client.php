<?php

namespace WpRediSearch\RediSearch;

use FKRediSearch\Setup;
use WpRediSearch\Settings;

class Client {

  public $client;
  /**
   * Create connection to redis server.
   * @return object $client
   * @since    1.0.0
   */
  public function __construct() {
    $database = defined('REDISEARCH_DB_NUMBER') ? REDISEARCH_DB_NUMBER : 0;
    $this->client = Setup::connect(
      Settings::RedisServer(),
      Settings::RedisPort(),
      Settings::RedisPassword(),
      $database,
      Settings::RedisScheme()
    );
  }

  public function return() {
    return $this->client;
  }
  
}
