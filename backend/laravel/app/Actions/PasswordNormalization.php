<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class PasswordNormalization
{
    use AsAction;

    public function handle($phoneNumber)
    {
        $normalizationPhone = preg_replace('/[^\d+]/','', $phoneNumber);
        if (str_starts_with($normalizationPhone, '8'))
        {
            $normalizationPhone = '+7' . substr($normalizationPhone, 1);
        }
        elseif (str_starts_with($normalizationPhone, '7'))
        {
            $normalizationPhone = '+' . $normalizationPhone;
        }
        return $normalizationPhone;
    }
}
