<?php


namespace classes;


class DB
{
    private $host = "localhost";
    /**
     * @var string
     */
    private $username = "root";
    /**
     * @var string
     */
    private $password = "";
    /**
     * @var string
     */
    private $dbName = "";
    /**
     * @var int|mixed
     */
    private $port;
    /**
     * @var \PDO
     */

    private $connection;

    /**
     * DB constructor.
     * @param $host
     * @param $username
     * @param $password
     * @param $dbName
     * @param int $port
     */

    public function __construct($host, $username, $password, $dbName, $port = 3306){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->port = $port;
        /**
         *
         */
        try{
            $connection = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";port=".$this->port, $this->username, $this->password);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection = $connection;
        } catch (\PDOException $exception) {
            echo "Error while db connect".$exception->getMessage();
        }
    }
    /**
     *
     */

    /**
     * @return \PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param $connection
     */

    public function setConnection($connection){
        if($connection instanceof \PDO){
            $this->connection = $connection;
        }
    }
    /**
     *
     */

    /**
     * @return array
     */
    public function getMenuItems(){
        $sql = "SELECT * FROM menu ORDER BY idmenu";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    /**
     *
     */
    public function getGallery(){
        $sql = "SELECT * FROM post ORDER BY idpost";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    /**
     *
     */


}