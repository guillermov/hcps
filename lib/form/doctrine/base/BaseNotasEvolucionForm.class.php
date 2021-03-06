<?php

/**
 * NotasEvolucion form base class.
 *
 * @method NotasEvolucion getObject() Returns the current form's model object
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNotasEvolucionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'internado_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'), 'add_empty' => false)),
      'fecha_hora'   => new myWidgetFormDojoDateTime(),
      'numero_prob'  => new sfWidgetFormInputText(),
      'nota_soap'    => new sfWidgetFormTextarea(),
      'created_at'   => new myWidgetFormDojoDateTime(),
      'updated_at'   => new myWidgetFormDojoDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Internado'))),
      'fecha_hora'   => new myValidatorDojoDateTime(array('required' => false)),
      'numero_prob'  => new sfValidatorInteger(array('required' => false)),
      'nota_soap'    => new sfValidatorString(array('max_length' => 1500, 'required' => false)),
      'created_at'   => new myValidatorDojoDateTime(),
      'updated_at'   => new myValidatorDojoDateTime(),
    ));

    $this->widgetSchema->setNameFormat('notas_evolucion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasEvolucion';
  }

}
