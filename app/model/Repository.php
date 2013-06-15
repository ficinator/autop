<?php

namespace Autop;
use Nette;

/**
 * Makes operations with database table.
 */
abstract class Repository extends Nette\Object {
    /** @var Nette\Database\Connection */
    protected $connection;

    public function __construct(Nette\Database\Connection $db) {
        $this->connection = $db;
    }

    /**
     * Returns object representing database table.
     * @return Nette\Database\Table\Selection
     */
    protected function getTable() {
        // table name derived from class name
        preg_match('#(\w+)Repository$#', get_class($this), $m);
        return $this->connection->table(lcfirst($m[1]));
    }

    /**
     * Returns all table lines.
     * @return Nette\Database\Table\Selection
     */
    public function selectAll() {
        return $this->getTable();
    }

    /**
     * Returns lines of the this table where etc. array('name' => 'John').
     * @return Nette\Database\Table\Selection
     */
    public function selectWhere(array $cond) {
        return $this->getTable()->where($cond);
    }
}