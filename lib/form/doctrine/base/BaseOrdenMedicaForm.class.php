<?php

/**
 * OrdenMedica form base class.
 *
 * @method OrdenMedica getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrdenMedicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                            => new sfWidgetFormInputHidden(),
      'internado_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'via_administracion_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'), 'add_empty' => false)),
      'fecha_hora'                    => new myWidgetFormDojoDateTime(),
      'nombre_medicamento_indicacion' => new sfWidgetFormInputText(),
      'dosis_intervalo'               => new sfWidgetFormInputText(),
      'fecha_inicio'                  => new myWidgetFormDojoDate(),
      'fecha_terminacion'             => new myWidgetFormDojoDate(),
      'created_at'                    => new myWidgetFormDojoDateTime(),
      'updated_at'                    => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'via_administracion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ViaAdministracion'))),
      'fecha_hora'                    => new myValidatorDojoDateTime(array('required' => false)),
      'nombre_medicamento_indicacion' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'dosis_intervalo'               => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'fecha_inicio'                  => new myValidatorDojoDate(array('required' => false)),
      'fecha_terminacion'             => new myValidatorDojoDate(array('required' => false)),
      'created_at'                    => new myValidatorDojoDateTime(),
      'updated_at'                    => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('orden_medica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdenMedica';
  }

}
