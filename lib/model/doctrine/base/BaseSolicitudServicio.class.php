<?php

/**
 * BaseSolicitudServicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $file_internacion_id
 * @property integer $atencion_id
 * @property string $para
 * @property string $diagnostico_presuncion
 * @property string $material_utilizado
 * @property FileInternacion $FileInternacion
 * @property Atencion $Atencion
 * 
 * @method integer           getFileInternacionId()      Returns the current record's "file_internacion_id" value
 * @method integer           getAtencionId()             Returns the current record's "atencion_id" value
 * @method string            getPara()                   Returns the current record's "para" value
 * @method string            getDiagnosticoPresuncion()  Returns the current record's "diagnostico_presuncion" value
 * @method string            getMaterialUtilizado()      Returns the current record's "material_utilizado" value
 * @method FileInternacion   getFileInternacion()        Returns the current record's "FileInternacion" value
 * @method Atencion          getAtencion()               Returns the current record's "Atencion" value
 * @method SolicitudServicio setFileInternacionId()      Sets the current record's "file_internacion_id" value
 * @method SolicitudServicio setAtencionId()             Sets the current record's "atencion_id" value
 * @method SolicitudServicio setPara()                   Sets the current record's "para" value
 * @method SolicitudServicio setDiagnosticoPresuncion()  Sets the current record's "diagnostico_presuncion" value
 * @method SolicitudServicio setMaterialUtilizado()      Sets the current record's "material_utilizado" value
 * @method SolicitudServicio setFileInternacion()        Sets the current record's "FileInternacion" value
 * @method SolicitudServicio setAtencion()               Sets the current record's "Atencion" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSolicitudServicio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('solicitud_servicio');
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('atencion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('para', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
        $this->hasColumn('diagnostico_presuncion', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('material_utilizado', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FileInternacion', array(
             'local' => 'file_internacion_id',
             'foreign' => 'id'));

        $this->hasOne('Atencion', array(
             'local' => 'atencion_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}