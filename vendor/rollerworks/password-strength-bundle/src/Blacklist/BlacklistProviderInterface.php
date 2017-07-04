<?php

/*
 * This file is part of the RollerworksPasswordStrengthBundle package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Bundle\PasswordStrengthBundle\Blacklist;

/**
 * Blacklist Provider Interface.
 *
 * @author Sebastiaan Stok <s.stok@rollerscapes.net>
 */
interface BlacklistProviderInterface
{
    /**
     * Returns whether the provided password is blacklisted.
     *
     * @param string $password
     *
     * @return bool
     */
    public function isBlacklisted($password);
}
