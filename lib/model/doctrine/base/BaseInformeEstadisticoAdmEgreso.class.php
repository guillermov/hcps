<?php

/**
 * BaseInformeEstadisticoAdmEgreso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $file_internacion_id
 * @property string $urgencia_persona_ref
 * @property string $urgencia_direccion_calle
 * @property string $urgencia_direccion_no
 * @property string $urgencia_direccion_fono
 * @property FileInternacion $FileInternacion
 * 
 * @method integer                     getFileInternacionId()        Returns the current record's "file_internacion_id" value
 * @method string                      getUrgenciaPersonaRef()       Returns the current record's "urgencia_persona_ref" value
 * @method string                      getUrgenciaDireccionCalle()   Returns the current record's "urgencia_direccion_calle" value
 * @method string                      getUrgenciaDireccionNo()      Returns the current record's "urgencia_direccion_no" value
 * @method string                      getUrgenciaDireccionFono()    Returns the current record's "urgencia_direccion_fono" value
 * @method FileInternacion             getFileInternacion()          Returns the current record's "FileInternacion" value
 * @method InformeEstadisticoAdmEgreso setFileInternacionId()        Sets the current record's "file_internacion_id" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaPersonaRef()       Sets the current record's "urgencia_persona_ref" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaDireccionCalle()   Sets the current record's "urgencia_direccion_calle" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaDireccionNo()      Sets the current record's "urgencia_direccion_no" value
 * @method InformeEstadisticoAdmEgreso setUrgenciaDireccionFono()    Sets the current record's "urgencia_direccion_fono" value
 * @method InformeEstadisticoAdmEgreso setFileInternacion()          Sets the current record's "FileInternacion" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInformeEstadisticoAdmEgreso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('informe_estadistico_adm_egreso');
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('urgencia_persona_ref', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('urgencia_direccion_calle', 'string', 70, array(
             'type' => 'string',
             'length' => 70,
             ));
        $this->hasColumn('urgencia_direccion_no', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('urgencia_direccion_fono', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}