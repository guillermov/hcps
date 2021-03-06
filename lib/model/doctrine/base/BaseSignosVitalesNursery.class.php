<?php

/**
 * BaseSignosVitalesNursery
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property date $fecha
 * @property time $hora
 * @property string $fc_nursery
 * @property string $fr_nursery
 * @property string $to_nursery
 * @property string $diu_nursery
 * @property string $cat_nursery
 * @property string $lm_nursery
 * @property string $residuo
 * @property string $observaciones
 * @property Internado $Internado
 * 
 * @method integer              getInternadoId()   Returns the current record's "internado_id" value
 * @method date                 getFecha()         Returns the current record's "fecha" value
 * @method time                 getHora()          Returns the current record's "hora" value
 * @method string               getFcNursery()     Returns the current record's "fc_nursery" value
 * @method string               getFrNursery()     Returns the current record's "fr_nursery" value
 * @method string               getToNursery()     Returns the current record's "to_nursery" value
 * @method string               getDiuNursery()    Returns the current record's "diu_nursery" value
 * @method string               getCatNursery()    Returns the current record's "cat_nursery" value
 * @method string               getLmNursery()     Returns the current record's "lm_nursery" value
 * @method string               getResiduo()       Returns the current record's "residuo" value
 * @method string               getObservaciones() Returns the current record's "observaciones" value
 * @method Internado            getInternado()     Returns the current record's "Internado" value
 * @method SignosVitalesNursery setInternadoId()   Sets the current record's "internado_id" value
 * @method SignosVitalesNursery setFecha()         Sets the current record's "fecha" value
 * @method SignosVitalesNursery setHora()          Sets the current record's "hora" value
 * @method SignosVitalesNursery setFcNursery()     Sets the current record's "fc_nursery" value
 * @method SignosVitalesNursery setFrNursery()     Sets the current record's "fr_nursery" value
 * @method SignosVitalesNursery setToNursery()     Sets the current record's "to_nursery" value
 * @method SignosVitalesNursery setDiuNursery()    Sets the current record's "diu_nursery" value
 * @method SignosVitalesNursery setCatNursery()    Sets the current record's "cat_nursery" value
 * @method SignosVitalesNursery setLmNursery()     Sets the current record's "lm_nursery" value
 * @method SignosVitalesNursery setResiduo()       Sets the current record's "residuo" value
 * @method SignosVitalesNursery setObservaciones() Sets the current record's "observaciones" value
 * @method SignosVitalesNursery setInternado()     Sets the current record's "Internado" value
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSignosVitalesNursery extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('signos_vitales_nursery');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('hora', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('fc_nursery', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('fr_nursery', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('to_nursery', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('diu_nursery', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('cat_nursery', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('lm_nursery', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('residuo', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('observaciones', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
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