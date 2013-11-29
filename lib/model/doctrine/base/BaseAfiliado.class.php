<?php

/**
 * BaseAfiliado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $matricula
 * @property string $paterno
 * @property string $materno
 * @property string $nombre
 * @property string $hclinica
 * @property string $empresa
 * @property string $tafiliado
 * @property string $activo
 * @property string $grupofam
 * @property Doctrine_Collection $Internaciones
 * 
 * @method string              getMatricula()     Returns the current record's "matricula" value
 * @method string              getPaterno()       Returns the current record's "paterno" value
 * @method string              getMaterno()       Returns the current record's "materno" value
 * @method string              getNombre()        Returns the current record's "nombre" value
 * @method string              getHclinica()      Returns the current record's "hclinica" value
 * @method string              getEmpresa()       Returns the current record's "empresa" value
 * @method string              getTafiliado()     Returns the current record's "tafiliado" value
 * @method string              getActivo()        Returns the current record's "activo" value
 * @method string              getGrupofam()      Returns the current record's "grupofam" value
 * @method Doctrine_Collection getInternaciones() Returns the current record's "Internaciones" collection
 * @method Afiliado            setMatricula()     Sets the current record's "matricula" value
 * @method Afiliado            setPaterno()       Sets the current record's "paterno" value
 * @method Afiliado            setMaterno()       Sets the current record's "materno" value
 * @method Afiliado            setNombre()        Sets the current record's "nombre" value
 * @method Afiliado            setHclinica()      Sets the current record's "hclinica" value
 * @method Afiliado            setEmpresa()       Sets the current record's "empresa" value
 * @method Afiliado            setTafiliado()     Sets the current record's "tafiliado" value
 * @method Afiliado            setActivo()        Sets the current record's "activo" value
 * @method Afiliado            setGrupofam()      Sets the current record's "grupofam" value
 * @method Afiliado            setInternaciones() Sets the current record's "Internaciones" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAfiliado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('afiliado');
        $this->hasColumn('matricula', 'string', 12, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 12,
             ));
        $this->hasColumn('paterno', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('materno', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('nombre', 'string', 12, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 12,
             ));
        $this->hasColumn('hclinica', 'string', 12, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 12,
             ));
        $this->hasColumn('empresa', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('tafiliado', 'string', 12, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 12,
             ));
        $this->hasColumn('activo', 'string', 1, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('grupofam', 'string', 1, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Internado as Internaciones', array(
             'local' => 'id',
             'foreign' => 'afiliado_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}