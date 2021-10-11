# FormGeneratorExercice

Form generator project for teaching purposes.

That set of classes allows you to generate a form and hydrate that form, according to your needs.

### Creation
Create a use case of the Form Base class which will represent a concrete form.
Example given in `Form.php`:


```php
    public function prepareFormBuilder(): void
    {   $parameters = new ParametersEnvelop();
        $this->addField($parameters->setName("email")->setType("email")->setLabel("Email")->getParameters())
            ->addField($parameters->clean()->setName("username")->setType("text")->getParameters())
            ->addField($parameters->clean()->setName("password")->setType("password")->setLabel("Password")->getParameters())
            ->addField($parameters->clean()->setName("description")->setType("textarea")->setLabel("Description")->getParameters())
            ->addField($parameters->clean()->setName("submit")->setType("button")->setLabel("Submit")->getParameters());
    }
```

Here you can generate on demand the kind of html tags.

To cast the form
```php
$form = new Form("service.php");
$form = $form->getForm();

```
Where service.php is the targeted action
and `$form` will give us the string

### Hydration
To hydrate the object:
```php
$form = new Form("service.php");
$form = $form->hydrate(
        'email' => 'myEmail@hotmail.com',
        'username' => 'apocalypse',
        'password' => 'VDG$DSFWEf',
        'description' => 'This is the description'
);

```

### Inheritance
You can also inherit an existing form and modify the previous fields.
Example in `FormEdit.php`:

```php
    public function prepareFormBuilder(): void
    {
        $this->removeField('description');
    }

```




