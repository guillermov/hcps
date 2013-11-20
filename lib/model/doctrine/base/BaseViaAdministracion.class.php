<?php

/**
 * BaseViaAdministracion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Doctrine_Collection $DetalleOrdenMedica
 * 
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method Doctrine_Collection getDetalleOrdenMedica() Returns the current record's "DetalleOrdenMedica" collection
 * @method ViaAdministracion   setNombre()             Sets the current record's "nombre" value
 * @method ViaAdministracion   setDetalleOrdenMedica() Sets the current record's "DetalleOrdenMedica" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseViaAdministracion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('via_administracion');
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DetalleOrdenMedica', array(
             'local' => 'id',
             'foreign' => 'via_administracion_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}