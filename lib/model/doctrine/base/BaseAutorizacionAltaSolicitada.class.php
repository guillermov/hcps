<?php

/**
 * BaseAutorizacionAltaSolicitada
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $file_internacion_id
 * @property string $nombre_familiar
 * @property string $ci_familiar
 * @property timestamp $fecha_hora
 * @property FileInternacion $FileInternacion
 * 
 * @method integer                    getFileInternacionId()   Returns the current record's "file_internacion_id" value
 * @method string                     getNombreFamiliar()      Returns the current record's "nombre_familiar" value
 * @method string                     getCiFamiliar()          Returns the current record's "ci_familiar" value
 * @method timestamp                  getFechaHora()           Returns the current record's "fecha_hora" value
 * @method FileInternacion            getFileInternacion()     Returns the current record's "FileInternacion" value
 * @method AutorizacionAltaSolicitada setFileInternacionId()   Sets the current record's "file_internacion_id" value
 * @method AutorizacionAltaSolicitada setNombreFamiliar()      Sets the current record's "nombre_familiar" value
 * @method AutorizacionAltaSolicitada setCiFamiliar()          Sets the current record's "ci_familiar" value
 * @method AutorizacionAltaSolicitada setFechaHora()           Sets the current record's "fecha_hora" value
 * @method AutorizacionAltaSolicitada setFileInternacion()     Sets the current record's "FileInternacion" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAutorizacionAltaSolicitada extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('autorizacion_alta_solicitada');
        $this->hasColumn('file_internacion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nombre_familiar', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('ci_familiar', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('fecha_hora', 'timestamp', null, array(
             'type' => 'timestamp',
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