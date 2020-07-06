<?php

require_once 'db.class.php';
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'vetshop';

DB::$error_handler = false;
DB::$throw_exception_on_error = true;