<?php

// src/Enum/Role.php
namespace App\Enum;

enum Role: string
{
    case ADMIN = 'ADMIN';
    case PARTICIPANT = 'PARTICIPANT';
    case ORGANISATEUR = 'ORGANISATEUR';


    public static function choices(): array
    {
        return [
            'ADMIN' => self::ADMIN,
            'ORGANISATEUR' => self::ORGANISATEUR,
            'PARTICIPANT' => self::PARTICIPANT
        ];
    }
}
