<?php

/**
 * AutorizacionAutopsia form base class.
 *
 * @method AutorizacionAutopsia getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAutorizacionAutopsiaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'file_internacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'), 'add_empty' => false)),
      'nombre_familiar1'    => new sfWidgetFormInputText(),
      'tipo_parentesco1'    => new sfWidgetFormInputText(),
      'ci_familiar1'        => new sfWidgetFormInputText(),
      'nombre_familiar2'    => new sfWidgetFormInputText(),
      'tipo_parentesco2'    => new sfWidgetFormInputText(),
      'ci_familiar2'        => new sfWidgetFormInputText(),
      'nombre_familiar3'    => new sfWidgetFormInputText(),
      'tipo_parentesco3'    => new sfWidgetFormInputText(),
      'ci_familiar3'        => new sfWidgetFormInputText(),
      'fecha_hora'          => new sfWidgetFormDateTime(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_internacion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FileInternacion'))),
      'nombre_familiar1'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo_parentesco1'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'ci_familiar1'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nombre_familiar2'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo_parentesco2'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'ci_familiar2'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nombre_familiar3'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo_parentesco3'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'ci_familiar3'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'fecha_hora'          => new sfValidatorDateTime(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('autorizacion_autopsia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AutorizacionAutopsia';
  }

}