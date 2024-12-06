<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case COORDINATOR = 'coordinator';
    case USER = 'user';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
