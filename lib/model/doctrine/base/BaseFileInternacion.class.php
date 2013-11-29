<?php

/**
 * BaseFileInternacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $internado_id
 * @property Doctrine_Collection $OrdenMedica
 * @property Doctrine_Collection $ServicioMantenimiento
 * @property Doctrine_Collection $JuntaMedica
 * @property Doctrine_Collection $ExamenFisicoRecienNacido
 * @property Doctrine_Collection $SolicitudInterconsulta
 * @property Doctrine_Collection $SolicitudServicio
 * @property Internado $Internado
 * @property Doctrine_Collection $SolicitudMateriales
 * @property Doctrine_Collection $Nurserys
 * @property Doctrine_Collection $Enfermerias
 * @property Doctrine_Collection $Evoluciones
 * @property Doctrine_Collection $AutorizacionesTratamiento
 * @property Doctrine_Collection $AutorizacionesAltaSolicitada
 * @property Doctrine_Collection $AutorizacionesAutopsia
 * @property Doctrine_Collection $ProgracionesCirugia
 * @property Doctrine_Collection $SolicitudesExamenLaboratorio
 * @property Doctrine_Collection $AdministracionesMedicamento
 * @property Doctrine_Collection $ResumenesAlta
 * @property Doctrine_Collection $AtencionesEnfermeria
 * @property Doctrine_Collection $ListasDieta
 * @property Doctrine_Collection $DetallesListaDieta
 * @property Doctrine_Collection $SolicitudesTransfusionSanguinea
 * @property Doctrine_Collection $InformesEstadisticoAdmEgreso
 * @property Doctrine_Collection $PapeletasPedidoMaterial
 * 
 * @method integer             getInternadoId()                     Returns the current record's "internado_id" value
 * @method Doctrine_Collection getOrdenMedica()                     Returns the current record's "OrdenMedica" collection
 * @method Doctrine_Collection getServicioMantenimiento()           Returns the current record's "ServicioMantenimiento" collection
 * @method Doctrine_Collection getJuntaMedica()                     Returns the current record's "JuntaMedica" collection
 * @method Doctrine_Collection getExamenFisicoRecienNacido()        Returns the current record's "ExamenFisicoRecienNacido" collection
 * @method Doctrine_Collection getSolicitudInterconsulta()          Returns the current record's "SolicitudInterconsulta" collection
 * @method Doctrine_Collection getSolicitudServicio()               Returns the current record's "SolicitudServicio" collection
 * @method Internado           getInternado()                       Returns the current record's "Internado" value
 * @method Doctrine_Collection getSolicitudMateriales()             Returns the current record's "SolicitudMateriales" collection
 * @method Doctrine_Collection getNurserys()                        Returns the current record's "Nurserys" collection
 * @method Doctrine_Collection getEnfermerias()                     Returns the current record's "Enfermerias" collection
 * @method Doctrine_Collection getEvoluciones()                     Returns the current record's "Evoluciones" collection
 * @method Doctrine_Collection getAutorizacionesTratamiento()       Returns the current record's "AutorizacionesTratamiento" collection
 * @method Doctrine_Collection getAutorizacionesAltaSolicitada()    Returns the current record's "AutorizacionesAltaSolicitada" collection
 * @method Doctrine_Collection getAutorizacionesAutopsia()          Returns the current record's "AutorizacionesAutopsia" collection
 * @method Doctrine_Collection getProgracionesCirugia()             Returns the current record's "ProgracionesCirugia" collection
 * @method Doctrine_Collection getSolicitudesExamenLaboratorio()    Returns the current record's "SolicitudesExamenLaboratorio" collection
 * @method Doctrine_Collection getAdministracionesMedicamento()     Returns the current record's "AdministracionesMedicamento" collection
 * @method Doctrine_Collection getResumenesAlta()                   Returns the current record's "ResumenesAlta" collection
 * @method Doctrine_Collection getAtencionesEnfermeria()            Returns the current record's "AtencionesEnfermeria" collection
 * @method Doctrine_Collection getListasDieta()                     Returns the current record's "ListasDieta" collection
 * @method Doctrine_Collection getDetallesListaDieta()              Returns the current record's "DetallesListaDieta" collection
 * @method Doctrine_Collection getSolicitudesTransfusionSanguinea() Returns the current record's "SolicitudesTransfusionSanguinea" collection
 * @method Doctrine_Collection getInformesEstadisticoAdmEgreso()    Returns the current record's "InformesEstadisticoAdmEgreso" collection
 * @method Doctrine_Collection getPapeletasPedidoMaterial()         Returns the current record's "PapeletasPedidoMaterial" collection
 * @method FileInternacion     setInternadoId()                     Sets the current record's "internado_id" value
 * @method FileInternacion     setOrdenMedica()                     Sets the current record's "OrdenMedica" collection
 * @method FileInternacion     setServicioMantenimiento()           Sets the current record's "ServicioMantenimiento" collection
 * @method FileInternacion     setJuntaMedica()                     Sets the current record's "JuntaMedica" collection
 * @method FileInternacion     setExamenFisicoRecienNacido()        Sets the current record's "ExamenFisicoRecienNacido" collection
 * @method FileInternacion     setSolicitudInterconsulta()          Sets the current record's "SolicitudInterconsulta" collection
 * @method FileInternacion     setSolicitudServicio()               Sets the current record's "SolicitudServicio" collection
 * @method FileInternacion     setInternado()                       Sets the current record's "Internado" value
 * @method FileInternacion     setSolicitudMateriales()             Sets the current record's "SolicitudMateriales" collection
 * @method FileInternacion     setNurserys()                        Sets the current record's "Nurserys" collection
 * @method FileInternacion     setEnfermerias()                     Sets the current record's "Enfermerias" collection
 * @method FileInternacion     setEvoluciones()                     Sets the current record's "Evoluciones" collection
 * @method FileInternacion     setAutorizacionesTratamiento()       Sets the current record's "AutorizacionesTratamiento" collection
 * @method FileInternacion     setAutorizacionesAltaSolicitada()    Sets the current record's "AutorizacionesAltaSolicitada" collection
 * @method FileInternacion     setAutorizacionesAutopsia()          Sets the current record's "AutorizacionesAutopsia" collection
 * @method FileInternacion     setProgracionesCirugia()             Sets the current record's "ProgracionesCirugia" collection
 * @method FileInternacion     setSolicitudesExamenLaboratorio()    Sets the current record's "SolicitudesExamenLaboratorio" collection
 * @method FileInternacion     setAdministracionesMedicamento()     Sets the current record's "AdministracionesMedicamento" collection
 * @method FileInternacion     setResumenesAlta()                   Sets the current record's "ResumenesAlta" collection
 * @method FileInternacion     setAtencionesEnfermeria()            Sets the current record's "AtencionesEnfermeria" collection
 * @method FileInternacion     setListasDieta()                     Sets the current record's "ListasDieta" collection
 * @method FileInternacion     setDetallesListaDieta()              Sets the current record's "DetallesListaDieta" collection
 * @method FileInternacion     setSolicitudesTransfusionSanguinea() Sets the current record's "SolicitudesTransfusionSanguinea" collection
 * @method FileInternacion     setInformesEstadisticoAdmEgreso()    Sets the current record's "InformesEstadisticoAdmEgreso" collection
 * @method FileInternacion     setPapeletasPedidoMaterial()         Sets the current record's "PapeletasPedidoMaterial" collection
 * 
 * @package    hcps
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFileInternacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('file_internacion');
        $this->hasColumn('internado_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('OrdenMedica', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('ServicioMantenimiento', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('JuntaMedica', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('ExamenFisicoRecienNacido', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('SolicitudInterconsulta', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('SolicitudServicio', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasOne('Internado', array(
             'local' => 'internado_id',
             'foreign' => 'id'));

        $this->hasMany('SolicitudReposicionMaterial as SolicitudMateriales', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('SignosVitalesNursery as Nurserys', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('NotasEnfermeria as Enfermerias', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('NotasEvolucion as Evoluciones', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('AutorizacionDiagnosticoTratamiento as AutorizacionesTratamiento', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('AutorizacionAltaSolicitada as AutorizacionesAltaSolicitada', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('AutorizacionAutopsia as AutorizacionesAutopsia', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('ProgramacionCirugia as ProgracionesCirugia', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('SolicitudExamenLaboratorio as SolicitudesExamenLaboratorio', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('AdministracionMedicamento as AdministracionesMedicamento', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('ResumenAlta as ResumenesAlta', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('AtencionEnfermeria as AtencionesEnfermeria', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('ListaDieta as ListasDieta', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('DetalleListaDieta as DetallesListaDieta', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('SolicitudTransfusionSanguinea as SolicitudesTransfusionSanguinea', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('InformeEstadisticoAdmEgreso as InformesEstadisticoAdmEgreso', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $this->hasMany('PapeletaPedidoMaterial as PapeletasPedidoMaterial', array(
             'local' => 'id',
             'foreign' => 'file_internacion_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}