<?php
namespace Vimeo\MysqlEngine\Schema;

class TableDefinition
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $defaultCharacterSet;

    /**
     * @var string
     */
    public $defaultCollation;

    /**
     * @var array<string, Column>
     */
    public $columns;

    /**
     * @var array
     */
    public $primaryKeyColumns;

    /**
     * @var array<string, Index>
     */
    public $indexes;

    /**
     * @var array<string, int>
     */
    public $autoIncrementOffsets = [];

    /**
     * @param array<string, Index> $indexes
     */
    public function __construct(
        string $name,
        string $databaseName,
        array $columns,
        string $characterSet = '',
        string $collation = '',
        array $primaryKeyColumns = [],
        array $indexes = [],
        array $autoIncrementOffsets = []
    ) {
        $this->name = $name;
        $this->databaseName = $databaseName;
        $this->columns = $columns;
        $this->defaultCharacterSet = $characterSet;
        $this->defaultCollation = $collation;
        $this->primaryKeyColumns = $primaryKeyColumns;
        $this->indexes = $indexes;
        $this->autoIncrementOffsets = $autoIncrementOffsets;
    }
}
