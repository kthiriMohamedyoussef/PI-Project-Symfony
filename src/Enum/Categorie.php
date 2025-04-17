<?php

namespace App\Enum;

enum Categorie: string
{
    case SEMINAIRE = 'Seminaire';
    case CONFERENCE = 'Conference';
    case ATELIER = 'Atelier';

    public static function getAllCategories(): array
    {
        return [
            self::SEMINAIRE,
            self::CONFERENCE,
            self::ATELIER
        ];
    }

    // Méthode pour faciliter l'utilisation dans les formulaires
    public static function choices(): array
    {
        return [
            'Séminaire' => self::SEMINAIRE,
            'Conférence' => self::CONFERENCE,
            'Atelier' => self::ATELIER
        ];
    }
}