<?php

namespace yedincisenol\UserProviderLinkedin;

use Laravel\Passport\Bridge\RefreshTokenRepository;
use Laravel\Passport\Bridge\UserRepository;
use Laravel\Passport\Passport;
use yedincisenol\UserProvider\UserProviderServiceProviderAbstract;

class UserProviderLinkedinServiceProvider extends UserProviderServiceProviderAbstract
{

    /**
     * Create and configure a Password grant instance.
     *
     */
    protected function makeUserProviderGrant()
    {
        $grant = new UserProviderLinkedinGrant(
            $this->config,
            $this->app->make(UserRepository::class),
            $this->app->make(RefreshTokenRepository::class)
        );

        $grant->setRefreshTokenTTL(Passport::refreshTokensExpireIn());

        return $grant;
    }
}