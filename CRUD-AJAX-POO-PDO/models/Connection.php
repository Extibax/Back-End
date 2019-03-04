<?php 
declare(strict_types = 1);

class Connection
{
    protected $DB;

    public function __construct()
    {
        $this->DB=$this->connect();
    }

    private function connect()
    {
        try 
        {
            $HOST = 'localhost';
            $DBNAME = 'php_tests';
            $USER = 'root';
            $PASS = '';

            $connection = 
            new PDO("mysql:host={$HOST}; dbname={$DBNAME}", $USER, $PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->exec('SET CHARACTER SET UTF8');

        } catch (PDOException $e) 
        {
            echo $e->getMessage();
        }

        return $connection;
    }

    public function simpleQuery(string $query): array
    {
        return $this->DB->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
}