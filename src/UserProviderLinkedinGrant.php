<?php

namespace yedincisenol\UserProviderLinkedin;

use yedincisenol\UserProvider\UserProviderGrantAbstract;

class UserProviderLinkedinGrant extends UserProviderGrantAbstract
{

    /**
     * {@inheritdoc}
     */
    public function getIdentifier()
    {
        return 'linkedin';
    }

}