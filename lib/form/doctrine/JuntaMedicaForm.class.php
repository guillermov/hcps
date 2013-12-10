<?php

/**
 * JuntaMedica form.
 *
 * @package    hcps
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JuntaMedicaForm extends BaseJuntaMedicaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      
      $this->widgetSchema['internado_id'] = new sfWidgetFormInputHidden();
      
      
//            $subForm = new sfForm();
//
//            $medico = new MedicoParticular();
//            $medico->JuntaMedica = $this->getObject();
//
//            $form = new MedicoParticularForm($medico);
//
//            $subForm->embedForm(1, $form);
//            $this->embedForm('Medico Particular', $subForm);

      $medico = new MedicoParticular();
      $medico->setJuntaMedica($this->object);
      $medicoForm = new MedicoParticularForm($medico);
      $this->embedForm('NuevoMedicoParticular', $medicoForm);
      $this->embedRelation('MedicoParticular');
  }
}
