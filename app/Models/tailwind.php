<?php

namespace app\Models;

class tailwind
{
    public static function toast($type, $message)
    {
        echo '
        <div class="flex items-center h-10 mt-4 p-4 mb-4 text-sm text-' . $type . '-800 border border-' . $type . '-300 rounded-lg bg-' . $type . '-50 dark:bg-gray-800 dark:text-' . $type . '-400 dark:border-' . $type . '-800" role="alert">
       ' . static::typeSVG($type) . '
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium"> ' . $message . ' </span>
        </div>
      </div>
        ';
    }
    public static function typeSVG($type)
    {
        if ($type == "success") {
            return '
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
            ';
        }
        if ($type == "error") {
            return '
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
            ';
        }
    }
}
