<?php

namespace Core;

class Session
{
    public static function has($key): bool
    {
        return (bool)static::get($key);
    }

    public static function put($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key): string
    {
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? '';
    }

    public static function all($key): array
    {
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? [];
    }

    public static function flash($key, $value): void
    {
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash(): void
    {
        unset($_SESSION['_flash']);
    }

    public static function clear(): void
    {
        $_SESSION = [];
    }

    public static function destroy(): void
    {
        static::clear();

        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
}