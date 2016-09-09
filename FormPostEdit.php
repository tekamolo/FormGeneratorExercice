<?php

/**
 * Created By Alfonso Fernandez-Ocampo
 */

class FormPostEdit extends FormPost
{
    public function __construct()
    {
        parent::__construct();
        $this->prepareFormPostEditBuilder();
        $this->FormPostAttributesSetup();
    }

    public function prepareFormPostEditBuilder()
    {
        $this->removeField('description');
    }

    public function FormPostAttributesSetup()
    {
        $this->formAttributes=array(
            'method' => 'post',
            'action' => 'servicePostEdit.php',
        );
    }
}


$form = new FormPostEdit();
$form = $form->getFormPost();
print($form);








/*
$inst = new FormPostEdit();

$inst->hydrate(array(
    'email' => 'fernandez45@hotmail.com',
    'username' => 'apocalypse',
    'password' => 'VDG$DSFWEf'
));

$form = $inst->getFormPost();

print($form);*/