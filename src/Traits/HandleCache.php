<?php

namespace App\Traits;

trait HandleCache
{
    public function clearCache($keys)
    {
        foreach ($keys as $key) {
            if (!cache()->has($key)) {
                continue;
            }

            cache()->forgot($key);
        }
    }
}
