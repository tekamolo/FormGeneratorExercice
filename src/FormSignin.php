<?php
declare(strict_types=1);

namespace FormGenerator;

class FormSignin extends FormBase implements FormInstanceInterface
{
    public function __construct(string $service)
    {
        self::prepareFormBuilder();
        $this->setFormAttributes($service);
    }

    public function prepareFormBuilder(): void
    {
        $parameters = new ParametersEnvelop();
        $this->addField($parameters->setName("email")->setType("email")->setLabel("Email")->getParameters())
            ->addField($parameters->clean()->setName("username")->setType("text")->getParameters())
            ->addField($parameters->clean()->setName("password")->setType("password")->setLabel("Password")->getParameters())
            ->addField($parameters->clean()->setName("description")->setType("textarea")->setLabel("Description")->getParameters())
            ->addField($parameters->clean()->setName("submit")->setType("button")->setLabel("Submit")->getParameters());
    }
}

