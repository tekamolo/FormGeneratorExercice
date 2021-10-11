<?php
declare(strict_types=1);

namespace FormGenerator;

class FormSigninEdit extends FormSignin implements FormInstanceInterface
{
    public function __construct(string $service)
    {
        parent::__construct($service);
        self::prepareFormBuilder();
    }

    public function prepareFormBuilder(): void
    {
        $this->removeField('description');
    }


}