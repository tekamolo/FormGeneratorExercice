<?php

/**
 * Created By Alfonso Fernandez-Ocampo
 */

class FormEdit extends Form
{
    public function __construct()
    {
        parent::__construct();
        $this->prepareFormPostEditBuilder();
        $this->FormAttributesSetup();
    }

    public function prepareFormPostEditBuilder()
    {
        $this->removeField('description');
    }

    public function FormAttributesSetup()
    {
        $this->formAttributes=array(
            'method' => 'post',
            'action' => 'servicePostEdit.php',
        );
    }
}


/*
$inst = new FormPostEdit();

$inst->hydrate(array(
    'email' => 'fernandez45@hotmail.com',
    'username' => 'apocalypse',
    'password' => 'VDG$DSFWEf'
));

$form = $inst->getFormPost();

print($form);*/