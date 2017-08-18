<?php
namespace Kitlabs;

use Medoo\Medoo;

class MedooCache extends Medoo 
{
    public function __construct($options)
    {
        parent::__construct($options);
    }
    
    public function query($query, $map = [])
    {}
    public function exec($query, $map = [])
    {}
    public function select($table, $join, $columns = null, $where = null)
    {}
}