<?php
declare(strict_types=1);

namespace Tests;

use FormGenerator\FormSignin;
use FormGenerator\FormSigninEdit;
use PHPUnit\Framework\TestCase;

class FormGeneratorTest extends TestCase
{
    public function testGenerationForm(): void
    {
        $form = new FormSignin("service.php");
        $formString = $form->getForm();

        $this->assertTrue($this->in_array_r("email", $form->getFields()));
        $this->assertTrue($this->in_array_r("username", $form->getFields()));
        $this->assertTrue($this->in_array_r("password", $form->getFields()));
        $this->assertTrue($this->in_array_r("description", $form->getFields()));

        $this->assertEquals(5, count($form->getFields()));
        $this->assertEquals($this->getExpectedForm(), $formString);
    }

    private function getExpectedForm(): string
    {
        return "<form method='post' action='service.php'  ><label class=''>Email</label><br><input type='email' name='email' id='email' value='' class='' /><br><label class=''></label><br><input type='text' name='username' id='username' value='' class='' /><br><label class=''>Password</label><br><input type='password' name='password' id='password' value='' class='' /><br><label class=''>Description</label><br><textarea name='description' id='description' class=''></textarea><br><button id='submit' class=''>Submit</button></form>";
    }

    private function in_array_r($needle, $haystack, $strict = false)
    {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->in_array_r($needle, $item, $strict))) {
                return true;
            }
        }
        return false;
    }

    public function testGenerationFormInheritanceAndModification(): void
    {
        $form = new FormSigninEdit("editService.php");
        $formString = $form->getForm();

        $this->assertTrue($this->in_array_r("email", $form->getFields()));
        $this->assertTrue($this->in_array_r("username", $form->getFields()));
        $this->assertTrue($this->in_array_r("password", $form->getFields()));
        $this->assertFalse($this->in_array_r("description", $form->getFields()));

        $this->assertEquals(4, count($form->getFields()));
    }

}