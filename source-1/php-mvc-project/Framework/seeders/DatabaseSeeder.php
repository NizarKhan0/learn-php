<?php

namespace Framework\Seeders;

use Framework\Database;

class DatabaseSeeder
{
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function run()
    {
        // This method should be overridden by child classes
    }
}
?>