<?php

/**
 * BaseUsoHospitalario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $file_internacion_id
 * @property integer $medico_id
 * @property string $lugar
 * @property string $codigo
 * @property string $especialidad
 * @property FileInternacion $FileInternacion
 * @property Doctrine_Collection $DetallesUsoHospitalario
 * 
 * @method integer             getFileInternacionId()       Returns the current record's "file_internacion_id" value
 * @method integer             getMedicoId()                Returns the current record's "medico_id" value
 * @method string              getLugar()                   Returns the current record's "lugar" value
 * @method string              getCodigo()                  Returns the current record's "codigo" value
 * @method string              getEspecialidad()            Returns the current record's "especialidad" value
 * @method FileInternacion     getFileInternacion()         Returns the current record's "FileInternacion" value
 * @method Doctrine_Collection getDetallesUsoHospitalario() Returns the current record's "DetallesUsoHospitalario" collection
 * @method UsoHospitalario     setFileInternacionId()       Sets the current record's "file_internacion_id" value
 * @method UsoHospitalario     setMedicoId()                Sets the current record's "medico_id" value
 * @method UsoHospitalario     setLugar()                   Sets the current record's "lugar" value
 * @method UsoHospitalario     setCodigo()                  Sets the current record's "codigo" value
 * @method UsoHospitalario     setEspecialidad()            Sets the current record's "especialidad" value
 * @method UsoHospitalario     setFileInternacion()         Sets the current record's "FileInternacion" value
 * @method UsoHospitalario     setDetallesUsoHospitalario() Sets the current record's "DetallesUsoHospitalario" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsoHospitalario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('uso_hospitalario');
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('medico_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('lugar', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
        $this->hasColumn('codigo', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('especialidad', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id'));

        $this->hasMany('DetalleUsoHospitalario as DetallesUsoHospitalario', array(
             'local' => 'id',
             'foreign' => 'uso_hospitalario_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}