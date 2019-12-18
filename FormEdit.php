<?php

/**
 * Created By Alfonso Fernandez-Ocampo
 */

class FormEdit extends Form implements FormInstanceInterface
{
    public function __construct($service)
    {
        parent::__construct($service);
        parent::prepareFormBuilder();
    }

    public function prepareFormBuilder(): void
    {
        $this->removeField('description');
    }


}