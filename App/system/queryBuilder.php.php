<?php
class DB
{
    // Variables for define connection to pdo 
    final public const SERVER = 'localhost';
    final public const USERNAME = 'root';
    final public const PASSWORD = '';
    final public const DATABASE = '';

    //Variable to connection
    public $conn;
    //variable for  table name that will using in query
    private $table_name;
    //variable for table colunms  
    private $columns    = [];
    // Variable for values that will use in condition 
    private $values     = [];
    // Variable for counditon that will control query
    private $condition;
    // Variable for limit number of rows
    private $limit;
    // Variable for olderBy that will use for sorting query
    private $orderBy;
    // Variable for groupBy  that will use for grouping  query
    private $groupBy;
    // Variable for join statment 
    private $join;
    // Variable for right join statment 
    private $rightJoin;
    // Variable for left join statment 
    private $leftJoin;
    // Variable will use for prevent the repeat records 
    private $duplicate;
    private $columnCount;

    public $result;

    public function __construct()
    {

        try {
            $this->conn = new PDO("mysql:host=" . self::SERVER . ";dbname=" . self::DATABASE . "", self::USERNAME, self::PASSWORD);
        }
        // This code will appare error massage if dissconnect to database
        catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

    public function table(string $table_name): DB
    {
        $this->table_name = $table_name;
        return $this;
    }

    public function select(string ...$column_name): DB
    {
        $this->columns = $column_name;
        return $this;
    }

    public function orderBy(string $order, string ...$column_name): DB
    {
        $this->orderBy = implode(',', $column_name) . " $order";
        return $this;
    }

    public function groupBy(string ...$column_name): DB
    {
        $this->groupBy = implode(',', $column_name);
        return $this;
    }

    // This function for where statment 
    public function where(string $column_name, string $opreation, $value): DB
    {
        $condition = $column_name . " " . $opreation . "  '$value'";

        $this->condition === null ?
            $this->condition = $condition :
            $this->condition .= ' AND ' . $condition;

        return $this;
    }


    // This function for orWhere statement
    public function orWhere(string $column, string $opreation, $value): DB
    {
        $condition = $column . " " . $opreation . "  '$value'";
        $this->condition = $this->condition . ' OR ' . $condition;

        return $this;
    }

    // This function for getting value
    public function value(...$values): DB
    {
        $this->values[] = $values;
        return $this;
    }


    // This function for limit statement

    public function limit($number, $to = null): DB
    {
        $toRecord = $to === null ? '' : ",$to";
        $this->limit = "$number" . $toRecord;

        return $this;
    }


    // This function for left join query
    public function leftJoin(string $table_name, $FK, $PK): DB
    {
        $this->leftJoin = " LEFT JOIN  $table_name  ON  $FK  =  $PK";
        return $this;
    }


    // This function for right statement

    public function rightJoin(string $table_name, $FK, $PK): DB
    {
        $this->rightJoin = " RIGHT JOIN  $table_name  ON  $FK  =  $PK";
        return $this;
    }

    public function join(string $table_name, $FK, $PK): DB
    {
        $this->join = " JOIN  $table_name  ON  $FK  =  $PK";
        return $this;
    }

    public function get()
    {
        $this->initializStm();

        $sql = "SELECT " . $this->columns .
            " FROM " . $this->table_name
            . $this->join
            . $this->leftJoin
            . $this->rightJoin
            . $this->condition
            . $this->groupBy
            . $this->orderBy
            . $this->limit;

        $stm = $this->conn->prepare($sql);
        echo $sql;
        if ($stm->execute()) {
            $this->result = $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            $this->result = "error";
        }
    }

    // Function for update query
    public function update()
    {

        $this->initializStm();

        $sql = "UPDATE " . $this->table_name
            . " SET "
            . $this->values
            . $this->condition;

        $this->conn->prepare($sql)->execute();

        $this->resetInput();
    }

    //count function for count recoards

    public function count(string $column = null, bool $duplicate = true)
    {
        $this->columnCount = $column;
        $this->duplicate   = $duplicate;

        $this->initializStm();

        $sql = "SELECT COUNT (" . $column . " )" .
            " FROM " . $this->table_name
            . $this->condition
            . $this->orderBy;

        $stm = $this->conn->prepare($sql);
        if ($stm->execute()) {
            $this->result = $stm->fetchAll(PDO::FETCH_OBJ);
        }

        $this->resetInput();
    }

    // This function for reading sql queries
    private function initializStm()
    {
        $this->table_name = $this->table_name === null ? ''  : $this->table_name;

        $this->columns    = $this->columns    === [] ? '*' : implode(', ', $this->columns);
        $this->values     = $this->values     === [] ? ''  : implode(', ', $this->values);

        $this->join      = $this->join      === null ? '' : $this->join;
        $this->rightJoin = $this->rightJoin === null ? '' : $this->rightJoin;
        $this->leftJoin  = $this->leftJoin  === null ? '' : $this->leftJoin;

        $this->condition = $this->condition === null ? ''  : " WHERE $this->condition ";
        $this->orderBy   = $this->orderBy   === null ? ''  : " ORDER BY $this->orderBy ";
        $this->limit     = $this->limit     === null ? ''  : " LIMIT $this->limit ";
        $this->groupBy   = $this->groupBy   === null ? ''  : " GROUP BY $this->groupBy ";

        $this->duplicate   = $this->duplicate   === true ? '' : 'DISTINCT';
        $this->columnCount = $this->columnCount === null ? " id " : "$this->duplicate  $this->columnCount";
    }

    private function resetInput()
    {
        $this->table_name = null;
        $this->columns    = [];
        $this->values     = [];

        $this->join      = null;
        $this->rightJoin = null;
        $this->leftJoin  = null;

        $this->condition   = null;
        $this->order       = null;
        $this->orderColumn = null;
        $this->limit       = null;

        $this->columnCount = null;
        $this->duplicate   = null;

        $this->result = [];
    }
}
?>