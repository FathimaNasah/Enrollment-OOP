
<?php

trait Database
{
    protected $conn;

    protected function connect()
    {
        if (!$this->conn) {
            $this->conn = mysqli_connect(
                "localhost",
                "root",
                "",
                "dbcollege"
            );

            if (!$this->conn) {
                die("Database Connection Failed");
            }
        }

        return $this->conn;
    }
}
