<?php

/**
 * BaseExamenFisicoRecienNacido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $file_internacion_id
 * @property string $ap_paterno
 * @property string $ap_maperno
 * @property date $fecha_nacimiento
 * @property string $sexo
 * @property string $peso_nacimiento
 * @property string $talla
 * @property string $circunferencia_torax
 * @property integer $numero_cuna
 * @property date $fecha_adminision
 * @property date $fecha_egreso
 * @property FileInternacion $FileInternacion
 * @property Doctrine_Collection $Apgar
 * 
 * @method integer                  getFileInternacionId()    Returns the current record's "file_internacion_id" value
 * @method string                   getApPaterno()            Returns the current record's "ap_paterno" value
 * @method string                   getApMaperno()            Returns the current record's "ap_maperno" value
 * @method date                     getFechaNacimiento()      Returns the current record's "fecha_nacimiento" value
 * @method string                   getSexo()                 Returns the current record's "sexo" value
 * @method string                   getPesoNacimiento()       Returns the current record's "peso_nacimiento" value
 * @method string                   getTalla()                Returns the current record's "talla" value
 * @method string                   getCircunferenciaTorax()  Returns the current record's "circunferencia_torax" value
 * @method integer                  getNumeroCuna()           Returns the current record's "numero_cuna" value
 * @method date                     getFechaAdminision()      Returns the current record's "fecha_adminision" value
 * @method date                     getFechaEgreso()          Returns the current record's "fecha_egreso" value
 * @method FileInternacion          getFileInternacion()      Returns the current record's "FileInternacion" value
 * @method Doctrine_Collection      getApgar()                Returns the current record's "Apgar" collection
 * @method ExamenFisicoRecienNacido setFileInternacionId()    Sets the current record's "file_internacion_id" value
 * @method ExamenFisicoRecienNacido setApPaterno()            Sets the current record's "ap_paterno" value
 * @method ExamenFisicoRecienNacido setApMaperno()            Sets the current record's "ap_maperno" value
 * @method ExamenFisicoRecienNacido setFechaNacimiento()      Sets the current record's "fecha_nacimiento" value
 * @method ExamenFisicoRecienNacido setSexo()                 Sets the current record's "sexo" value
 * @method ExamenFisicoRecienNacido setPesoNacimiento()       Sets the current record's "peso_nacimiento" value
 * @method ExamenFisicoRecienNacido setTalla()                Sets the current record's "talla" value
 * @method ExamenFisicoRecienNacido setCircunferenciaTorax()  Sets the current record's "circunferencia_torax" value
 * @method ExamenFisicoRecienNacido setNumeroCuna()           Sets the current record's "numero_cuna" value
 * @method ExamenFisicoRecienNacido setFechaAdminision()      Sets the current record's "fecha_adminision" value
 * @method ExamenFisicoRecienNacido setFechaEgreso()          Sets the current record's "fecha_egreso" value
 * @method ExamenFisicoRecienNacido setFileInternacion()      Sets the current record's "FileInternacion" value
 * @method ExamenFisicoRecienNacido setApgar()                Sets the current record's "Apgar" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExamenFisicoRecienNacido extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('examen_fisico_recien_nacido');
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('ap_paterno', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('ap_maperno', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('fecha_nacimiento', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('sexo', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('peso_nacimiento', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('talla', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('circunferencia_torax', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('numero_cuna', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('fecha_adminision', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('fecha_egreso', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id'));

        $this->hasMany('Apgar', array(
             'local' => 'id',
             'foreign' => 'examen_fisico_recien_nacido_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}