<?php

/**
 * Created By Alfonso Fernandez-Ocampo
 */

abstract class FormBase
{

    protected $fields = array();
    protected $formAttributes = array();

    public function addField(array $fieldDetails): FormBase
    {
        $this->fields[]=$fieldDetails;
        return $this;
    }

    public function removeField($fieldid): FormBase
    {
        foreach($this->fields as $key => $fields)
        {
                if($fields['name']==$fieldid){
                    unset($this->fields[$key]);
                }
        }
        return $this;
    }

    public function getForm(): string
    {
        $form = new FormBuilder();
        $form->setFormAttributes($this->formAttributes);
        $form->setFields($this->fields);

        return $form->generate();
    }

    public function hydrate(array $data): void
    {
        foreach($data as $key => $d){
            foreach($this->fields as $key2 => $field)
            {
                if($field['name']==$key)
                {
                    $this->fields[$key2]['value']=$d;
                }
            }
        }
    }

    public function setFormAttributes($action, $method="post"): void
    {
        $this->formAttributes=array(
            'method' => $method,
            'action' => $action,
        );
    }
}