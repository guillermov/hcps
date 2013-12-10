<?php

/**
 * BaseProgramacionCirugia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property integer $medico_id
 * @property date $operacion_fecha
 * @property time $operacion_hora
 * @property string $diagnostico_preoperatorio
 * @property string $tratamiento_quirurgico
 * @property string $anestesia
 * @property string $otros
 * @property string $examenes_auxiliares
 * @property date $fecha
 * @property integer $enfermera_id
 * @property string $enviado
 * @property string $recibido
 * @property Internado $Internado
 * 
 * @method integer             getInternadoId()               Returns the current record's "internado_id" value
 * @method integer             getMedicoId()                  Returns the current record's "medico_id" value
 * @method date                getOperacionFecha()            Returns the current record's "operacion_fecha" value
 * @method time                getOperacionHora()             Returns the current record's "operacion_hora" value
 * @method string              getDiagnosticoPreoperatorio()  Returns the current record's "diagnostico_preoperatorio" value
 * @method string              getTratamientoQuirurgico()     Returns the current record's "tratamiento_quirurgico" value
 * @method string              getAnestesia()                 Returns the current record's "anestesia" value
 * @method string              getOtros()                     Returns the current record's "otros" value
 * @method string              getExamenesAuxiliares()        Returns the current record's "examenes_auxiliares" value
 * @method date                getFecha()                     Returns the current record's "fecha" value
 * @method integer             getEnfermeraId()               Returns the current record's "enfermera_id" value
 * @method string              getEnviado()                   Returns the current record's "enviado" value
 * @method string              getRecibido()                  Returns the current record's "recibido" value
 * @method Internado           getInternado()                 Returns the current record's "Internado" value
 * @method ProgramacionCirugia setInternadoId()               Sets the current record's "internado_id" value
 * @method ProgramacionCirugia setMedicoId()                  Sets the current record's "medico_id" value
 * @method ProgramacionCirugia setOperacionFecha()            Sets the current record's "operacion_fecha" value
 * @method ProgramacionCirugia setOperacionHora()             Sets the current record's "operacion_hora" value
 * @method ProgramacionCirugia setDiagnosticoPreoperatorio()  Sets the current record's "diagnostico_preoperatorio" value
 * @method ProgramacionCirugia setTratamientoQuirurgico()     Sets the current record's "tratamiento_quirurgico" value
 * @method ProgramacionCirugia setAnestesia()                 Sets the current record's "anestesia" value
 * @method ProgramacionCirugia setOtros()                     Sets the current record's "otros" value
 * @method ProgramacionCirugia setExamenesAuxiliares()        Sets the current record's "examenes_auxiliares" value
 * @method ProgramacionCirugia setFecha()                     Sets the current record's "fecha" value
 * @method ProgramacionCirugia setEnfermeraId()               Sets the current record's "enfermera_id" value
 * @method ProgramacionCirugia setEnviado()                   Sets the current record's "enviado" value
 * @method ProgramacionCirugia setRecibido()                  Sets the current record's "recibido" value
 * @method ProgramacionCirugia setInternado()                 Sets the current record's "Internado" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProgramacionCirugia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('programacion_cirugia');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('medico_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('operacion_fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('operacion_hora', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('diagnostico_preoperatorio', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('tratamiento_quirurgico', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('anestesia', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('otros', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('examenes_auxiliares', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('enfermera_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('enviado', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('recibido', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}