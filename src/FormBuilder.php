<?php
declare(strict_types=1);

namespace FormGenerator;

class FormBuilder
{
    protected $attributes;
    protected $fields;

    public function generate(): string
    {
        $formAttributes = '';
        foreach ($this->attributes as $k => $a) {
                $formAttributes .= "$k='$a' ";
            }
        $output = "<form $formAttributes >";

        foreach($this->fields as $key => $field)
        {
            extract($field);
            if($type == "button")
            {
                $output.="<button id='$name' class='$class'>$label</button>";
            }elseif($type=="textarea"){
                if($label !== NULL){
                    $output.= "<label class='$classLabel'>$label</label><br>";
                }
                $output.="<textarea name='$name' id='$name' class='$class'>$value</textarea><br>";
            }else{
                if($label !== NULL){
                    $output.= "<label class='$classLabel'>$label</label><br>";
                }
                $output.="<input type='$type' name='$name' id='$name' value='$value' class='$class' /><br>";
            }
        }

        $output .= "</form>";
        return $output;
    }

    public function setFormAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setFields(array $fields): void
    {
        $this->fields = $fields;
    }
}


