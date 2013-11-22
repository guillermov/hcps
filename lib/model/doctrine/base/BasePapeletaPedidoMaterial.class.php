<?php

/**
 * BasePapeletaPedidoMaterial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $file_internacion_id
 * @property integer $enfermera_id
 * @property date $fecha_solicitud
 * @property string $numero
 * @property string $detalle
 * @property string $cantidad
 * @property boolean $entregado
 * @property FileInternacion $FileInternacion
 * 
 * @method integer                getId()                  Returns the current record's "id" value
 * @method integer                getFileInternacionId()   Returns the current record's "file_internacion_id" value
 * @method integer                getEnfermeraId()         Returns the current record's "enfermera_id" value
 * @method date                   getFechaSolicitud()      Returns the current record's "fecha_solicitud" value
 * @method string                 getNumero()              Returns the current record's "numero" value
 * @method string                 getDetalle()             Returns the current record's "detalle" value
 * @method string                 getCantidad()            Returns the current record's "cantidad" value
 * @method boolean                getEntregado()           Returns the current record's "entregado" value
 * @method FileInternacion        getFileInternacion()     Returns the current record's "FileInternacion" value
 * @method PapeletaPedidoMaterial setId()                  Sets the current record's "id" value
 * @method PapeletaPedidoMaterial setFileInternacionId()   Sets the current record's "file_internacion_id" value
 * @method PapeletaPedidoMaterial setEnfermeraId()         Sets the current record's "enfermera_id" value
 * @method PapeletaPedidoMaterial setFechaSolicitud()      Sets the current record's "fecha_solicitud" value
 * @method PapeletaPedidoMaterial setNumero()              Sets the current record's "numero" value
 * @method PapeletaPedidoMaterial setDetalle()             Sets the current record's "detalle" value
 * @method PapeletaPedidoMaterial setCantidad()            Sets the current record's "cantidad" value
 * @method PapeletaPedidoMaterial setEntregado()           Sets the current record's "entregado" value
 * @method PapeletaPedidoMaterial setFileInternacion()     Sets the current record's "FileInternacion" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePapeletaPedidoMaterial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('papeleta_pedido_material');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('enfermera_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('fecha_solicitud', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('numero', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));
        $this->hasColumn('detalle', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('cantidad', 'string', 25, array(
             'type' => 'string',
             'length' => 25,
             ));
        $this->hasColumn('entregado', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}