<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdContact', 'doctrine');

/**
 * BaseAdContact
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $content
 * @property string $lat
 * @property string $lng
 * @property string $zoom
 * @property string $maptypeid
 * 
 * @method string    getTitle()     Returns the current record's "title" value
 * @method string    getContent()   Returns the current record's "content" value
 * @method string    getLat()       Returns the current record's "lat" value
 * @method string    getLng()       Returns the current record's "lng" value
 * @method string    getZoom()      Returns the current record's "zoom" value
 * @method string    getMaptypeid() Returns the current record's "maptypeid" value
 * @method AdContact setTitle()     Sets the current record's "title" value
 * @method AdContact setContent()   Sets the current record's "content" value
 * @method AdContact setLat()       Sets the current record's "lat" value
 * @method AdContact setLng()       Sets the current record's "lng" value
 * @method AdContact setZoom()      Sets the current record's "zoom" value
 * @method AdContact setMaptypeid() Sets the current record's "maptypeid" value
 * 
 * @package    Web_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdContact extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_contact');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Tiêu đề',
             'length' => 255,
             ));
        $this->hasColumn('content', 'string', 500, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 500,
             ));
        $this->hasColumn('lat', 'string', 50, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 50,
             ));
        $this->hasColumn('lng', 'string', 50, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 50,
             ));
        $this->hasColumn('zoom', 'string', 5, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 5,
             ));
        $this->hasColumn('maptypeid', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $vtblameable0 = new Doctrine_Template_VtBlameable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($vtblameable0);
        $this->actAs($timestampable0);
    }
}