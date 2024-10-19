<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class pastDate implements DataAwareRule, ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $data = [];
    
    public function setData(array $data): static
    {
        $this->data = $data;
 
        return $this;
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value < Carbon::now()->format('Y-m-d') && $this->data['status']=='upcoming') {
            $fail('la date est passe event pourait etre passe');
        }
    }
}
