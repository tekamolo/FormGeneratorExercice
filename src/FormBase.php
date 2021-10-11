<?php
declare(strict_types=1);

namespace FormGenerator;

abstract class FormBase
{

    protected array $fields = array();
    protected array $formAttributes = array();

    public function addField(array $fieldDetails): FormBase
    {
        $this->fields[] = $fieldDetails;
        return $this;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getFormAttributes(): array
    {
        return $this->formAttributes;
    }

    public function removeField(string $fieldId): FormBase
    {
        foreach ($this->fields as $key => $fields) {
            if ($fields['name'] == $fieldId) {
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