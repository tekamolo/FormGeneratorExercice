<?php


/**
 * Created By Alfonso Fernandez-Ocampo
 */

include 'FormInstanceInterface.php';
include 'FormBase.php';
include 'FormBuilder.php';
include 'Form.php';
include 'FormEdit.php';
include 'ParametersEnvelop.php';

$form = new Form("service.php");
$form = $form->getForm();

print($form);


//$form = new FormEdit("service.php");
//$form->hydrate(array(
//    'email' => 'myEmail@hotmail.com',
//    'username' => 'apocalypse',
//    'password' => 'VDG$DSFWEf'
//));


//$form = $form->getForm();
//
//print($form);