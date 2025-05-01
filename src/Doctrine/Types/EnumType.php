<?php

namespace App\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\StringType;

class EnumType extends StringType
{
    const ENUM = 'enum'; // Custom type name

    /**
     * Convert the database value to a PHP value.
     *
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return string|null
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null) {
            return null;
        }

        // Define your possible enum values
        $enumValues = ['value1', 'value2', 'value3'];

        // Check if the value is valid
        if (!in_array($value, $enumValues, true)) {
            throw new \InvalidArgumentException("Invalid enum value '$value'.");
        }

        return $value;
    }

    /**
     * Convert the PHP value to a database value.
     *
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return string
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        // Modify this if you want to store it in a different format
        return (string) $value;
    }

    /**
     * Get the SQL declaration for the enum field.
     *
     * @param array $fieldDeclaration
     * @param AbstractPlatform $platform
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        // Modify this SQL declaration based on your actual enum values
        return "ENUM('value1', 'value2', 'value3')";
    }

    /**
     * We do not need to implement `convertToPHPValueSQL` in this case.
     */
}
