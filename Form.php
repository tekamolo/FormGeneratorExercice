<?php

/**
 * Created By Alfonso Fernandez-Ocampo
 */

class Form extends FormBase
{
    public function __construct()
    {
        $this->prepareFormBuilder();
        $this->FormAttributesSetup();
    }

    public function prepareFormBuilder()
    {
        $this->addField('email','email','Email');
        $this->addField('username','text','Username');
        $this->addField('password','password','Password');
        $this->addField('description','textarea','Description');
        $this->addField('submit','button','Submit');
    }

    public function FormAttributesSetup()
    {
        $this->formAttributes=array(
            'method' => 'post',
            'action' => 'service.php',
        );
    }

}

