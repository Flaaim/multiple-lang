<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Widgets\Language\Language;

class LanguageTest extends TestCase
{
    protected $lang;

    public function setUp(): void
    {
        $this->lang = new Language();
    }

    public function test_path_to_tpl()
    {
        $reflectionClass = new \ReflectionClass('App\Widgets\Language\Language');

        $this->assertEquals('/home/vagrant/code/multiple-lang/app/Widgets/Language/lang_tpl.php', $reflectionClass->getProperty('tpl')->getValue(new Language));
    }
}