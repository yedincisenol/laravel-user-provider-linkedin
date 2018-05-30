<?php

namespace yedincisenol\UserProviderLinkedin;

use Illuminate\Contracts\Validation\Rule;

class LinkedinTokenValidationRule implements Rule
{

    public function passes($attribute, $value)
    {
        return $this->validate($value);
    }

    private function validate($accessToken)
    {
        try {
            file_get_contents(sprintf('https://api.linkedin.com/v1/people/~?oauth2_access_token=%s', $accessToken));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function message()
    {
        return ':attribute is invalid or scopes are not match!';
    }
}