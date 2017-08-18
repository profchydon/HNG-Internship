<?php
require __DIR__ . '..\..\interface\databaseConnectInterface.php';

/**
 *
 * @package iamchidi webdev
 * @author Chidi Nkwocha <profchydon@gmail.com>
 * @copyright Copyright (c) 2016, iamchidi webdev
 */

class Database implements DatabaseConnectionInterface {

    public function createConnection($host,$database_name,$username,$password) {

        $this->dsn = 'mysql:host='.$host.';dbname='.$database_name;
        return new PDO($this->dsn, $username, $password);

    }
}

?>
