<?php

/**
 * jquery_demo actions.
 *
 * @package    ysJQueryRevolutionsPlugin
 * @subpackage jquery_demo
 * @author     Omar Yepez
 */
class jquery_demoActions extends sfActions
{
  /**
   * Executes index action
   *
   */

  public function executeIndex()
  {
    return sfView::SUCCESS;
  }


  public function executeAjaxExample()
  {
    return sfView::SUCCESS;
  }

  public function executeEventsExample()
  {
    return sfView::SUCCESS;
  }

  public function executeAnotherAjax()
  {
    return sfView::SUCCESS;
  }

  public function executeAjaxEvents()
  {
    return sfView::SUCCESS;
  }

  public function executeEffectsExample(){
    return sfView::SUCCESS;
  }


  public function executeGetjson(){
    $jsonresponse = null;
    $description = 'frameworks';
    $this->getResponse()->setHttpHeader('Content-Type', 'application/json;');
    $time = microtime(true);
    $idLenguage = $this->getRequest()->getParameter('cboIdLenguage');
      switch ($idLenguage) {
      case 1:
        $jsonresponse = array('Symfony','Zend','CakePHP','Kumbia');
        break;
      case 2:
        $jsonresponse = array('JSF','Struts','Spring','ICEFaces');
        break;
      case 3:
        $jsonresponse = array('FRAMA-C','Wt','Reason');
        break;
      default:
      break;
      }
      return $this->renderText('{'. $description .' : ' . json_encode($jsonresponse) . '}');
  }

  public function executeGethtml(){
    return sfView::SUCCESS;
  }

  public function executeSayhello(){
    $request = $this->getRequest();
    $gender = array('M' => 'Male' , 'F' => 'Female');
    $magazines = array('Sport' , 'Development', 'Food' );
    $choseMagazines =  'None';

    if(is_array($request->getParameter('chkMagazine[]'))){
      $choseMagazines = '';
      foreach($request->getParameter('chkMagazine[]') as $chkMagazine){
        $choseMagazines .=  $magazines[$chkMagazine]. ' ';
      }
    }

    if($request->getParameter('optBool')){
      $this->likeplugin = "Thanks for you acknowledgment. <br> :)";
    }else{
      $this->likeplugin = "Sorry. we are working to improve it. <br> :(";
    }

    $this->magazines = $choseMagazines;
    $this->name = $request->getParameter('txtName');
    $this->lastname = $request->getParameter('txtLastname');
    $this->gender = $gender[$request->getParameter('cboGender')];
    return sfView::SUCCESS;
  }

}
