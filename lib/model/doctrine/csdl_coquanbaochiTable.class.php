<?php

/**
 * csdl_coquanbaochiTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class csdl_coquanbaochiTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object csdl_coquanbaochiTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('csdl_coquanbaochi');
    }

    public static function getJob(){
        $query=  csdl_coquanbaochiTable::getInstance()->createQuery()
            ->andWhere('trangthai = ',VtCommonEnum::NUMBER_ONE);
        return $query;
    }
}