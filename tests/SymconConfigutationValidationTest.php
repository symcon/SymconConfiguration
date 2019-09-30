<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class SymconConfigurationValidationTest extends TestCaseSymconValidation
{
    public function testValidateSymconConfiguration(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateUmbenennerModule(): void
    {
        $this->validateModule(__DIR__ . '/../Umbenenner');
    }
}