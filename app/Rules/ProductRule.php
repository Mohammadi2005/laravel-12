<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ProductRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! request()->has($attribute)) {
            $fail('The :attribute is invalid.');
        }
        if (strlen($value) < 5) {
            $fail('The :attribute خیلی کوچیکه.');
        }
    }
}
