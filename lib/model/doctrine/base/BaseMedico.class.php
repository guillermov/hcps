<?php

/**
 * BaseMedico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codigo
 * @property string $nombrec
 * @property integer $cargahor
 * @property string $hor_ini
 * @property string $hor_fin
 * @property integer $intervalo
 * @property string $activo
 * @property integer $cupos
 * @property string $consultorio
 * @property string $observacion
 * @property integer $especialidad_id
 * @property integer $item_id
 * @property Especialidad $Especialidad
 * 
 * @method string       getCodigo()          Returns the current record's "codigo" value
 * @method string       getNombrec()         Returns the current record's "nombrec" value
 * @method integer      getCargahor()        Returns the current record's "cargahor" value
 * @method string       getHorIni()          Returns the current record's "hor_ini" value
 * @method string       getHorFin()          Returns the current record's "hor_fin" value
 * @method integer      getIntervalo()       Returns the current record's "intervalo" value
 * @method string       getActivo()          Returns the current record's "activo" value
 * @method integer      getCupos()           Returns the current record's "cupos" value
 * @method string       getConsultorio()     Returns the current record's "consultorio" value
 * @method string       getObservacion()     Returns the current record's "observacion" value
 * @method integer      getEspecialidadId()  Returns the current record's "especialidad_id" value
 * @method integer      getItemId()          Returns the current record's "item_id" value
 * @method Especialidad getEspecialidad()    Returns the current record's "Especialidad" value
 * @method Medico       setCodigo()          Sets the current record's "codigo" value
 * @method Medico       setNombrec()         Sets the current record's "nombrec" value
 * @method Medico       setCargahor()        Sets the current record's "cargahor" value
 * @method Medico       setHorIni()          Sets the current record's "hor_ini" value
 * @method Medico       setHorFin()          Sets the current record's "hor_fin" value
 * @method Medico       setIntervalo()       Sets the current record's "intervalo" value
 * @method Medico       setActivo()          Sets the current record's "activo" value
 * @method Medico       setCupos()           Sets the current record's "cupos" value
 * @method Medico       setConsultorio()     Sets the current record's "consultorio" value
 * @method Medico       setObservacion()     Sets the current record's "observacion" value
 * @method Medico       setEspecialidadId()  Sets the current record's "especialidad_id" value
 * @method Medico       setItemId()          Sets the current record's "item_id" value
 * @method Medico       setEspecialidad()    Sets the current record's "Especialidad" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMedico extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('medico');
        $this->hasColumn('codigo', 'string', 8, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('nombrec', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('cargahor', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('hor_ini', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('hor_fin', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('intervalo', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('activo', 'string', 1, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('cupos', 'integer', 3, array(
             'type' => 'integer',
             'length' => 3,
             ));
        $this->hasColumn('consultorio', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('observacion', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('especialidad_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('item_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));


        $this->index('medico_unique1', array(
             'type' => 'unique',
             'fields' => 'codigo',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Especialidad', array(
             'local' => 'especialidad_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}