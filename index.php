<?php


/**
 * Created By Alfonso Fernandez-Ocampo
 */

include 'FormBase.php';
include 'FormBuilder.php';
include 'FormPost.php';
include 'FormPostEdit.php';

$form = new FormPostEdit();
$form = $form->getFormPost();
print($form);


/*
$inst = new FormPostEdit();

$inst->hydrate(array(
    'email' => 'myEmail@hotmail.com',
    'username' => 'apocalypse',
    'password' => 'VDG$DSFWEf'
));

$form = $inst->getFormPost();

print($form);*/