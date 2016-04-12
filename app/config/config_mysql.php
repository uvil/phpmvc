<?php


if( $_SERVER['REMOTE_ADDR']=="127.0.0.1"){ 
  
  // Define and return settings for localhost database connection
  
  define('DB_USER', 'root');          // The database username
  define('DB_PASSWORD', '');          // The database password
  define('DB_DSN', 'mysql:host=localhost;dbname=phpmvc;');    // The database connection
  define('DB_TABLE_PREFIX', '');      // The table prefix
  
  return[
     
    'dsn'             => DB_DSN,
    'username'        => DB_USER,
    'password'        => DB_PASSWORD,
    'driver_options'  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    'table_prefix'    => DB_TABLE_PREFIX,
  ];
}
else {
  
  // Define and return settings for student database connection
  
  define('DB_USER', 'xxxx');          // The database username
  define('DB_PASSWORD', 'yyyy');    // The database password
  define('DB_DSN', 'mysql:host=blu-ray.student.bth.se;dbname=zzz;');  // The database connection
  define('DB_TABLE_PREFIX', 'phpmvc04_');        // The table prefix
  
  return [

    'dsn'             => DB_DSN,
    'username'        => DB_USER,
    'password'        => DB_PASSWORD,
    'driver_options'  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    'table_prefix'    => DB_TABLE_PREFIX,
  

    // Display details on what happens
    //'verbose' => true,

    // Throw a more verbose exception when failing to connect
    //'debug_connect' => 'true',
];
  
}
