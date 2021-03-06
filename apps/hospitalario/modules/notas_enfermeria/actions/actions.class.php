<?php

require_once dirname(__FILE__).'/../lib/notas_enfermeriaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/notas_enfermeriaGeneratorHelper.class.php';

/**
 * notas_enfermeria actions.
 *
 * @package    hcps
 * @subpackage notas_enfermeria
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class notas_enfermeriaActions extends autoNotas_enfermeriaActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->notas_enfermeria = $this->form->getObject();
        $internado = $this->getUser()->getAttribute('internado');
        $this->form->setDefault('internado_id', $internado->getId());
    }
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
        return $filters;
    }
}
