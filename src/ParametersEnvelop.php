<?php
declare(strict_types=1);

namespace FormGenerator;

class ParametersEnvelop
{
    private $parameters = array(
        'name' => "",
        'type' => "",
        'label' => "",
        'value' => "",
        'class' => "",
        'classLabel' => ""
    );

    public function clean(){
        $this->parameters = array(
            'name'=>"",
            'type'=>"",
            'label'=>"",
            'value'=>"",
            'class'=>"",
            'classLabel' => ""
        );

        return $this;
    }

    public function setName(string $string)
    {
        $this->parameters['name'] = $string;

        return $this;
    }

    public function setType(string $string)
    {
        $this->parameters['type'] = $string;

        return $this;
    }

    public function setLabel(string $string)
    {
        $this->parameters['label'] = $string;

        return $this;
    }

    public function setValue(string $string)
    {
        $this->parameters['value'] = $string;

        return $this;
    }

    public function setClass(string $string)
    {
        $this->parameters['class'] = $string;

        return $this;
    }

    public function setClassLabel(string $string)
    {
        $this->parameters['classLabel'] = $string;

        return $this;
    }

    public function getParameters(){
        return $this->parameters;
    }
}