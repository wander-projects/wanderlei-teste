<?php

/*
 * This file is part of the RollerworksPasswordStrengthBundle package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Bundle\PasswordStrengthBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class PasswordStrength extends Constraint
{
    public $tooShortMessage = 'Your password must be at least {{length}} characters long.';
    public $message = 'password_too_weak';
    public $minLength = 6;
    public $minStrength;
    public $unicodeEquality = false;

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'minStrength';
    }

    public function getRequiredOptions()
    {
        return array('minStrength');
    }

    public function validatedBy()
    {
        return 'rollerworks_password_strength';
    }
}
