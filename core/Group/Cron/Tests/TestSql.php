<?php

namespace core\Group\Cron\Tests;

class TestSql
{
    public function init()
    {
        $dao = new \Dao();
        $date = time();
        $sql = "INSERT INTO `Group`.`groups` (`id`, `title`) VALUES (NULL, {$date});";
        $dao -> querySql($sql, 'default');
    }

}