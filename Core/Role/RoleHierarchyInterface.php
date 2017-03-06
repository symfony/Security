<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Role;

/**
 * RoleHierarchyInterface is the interface for a role hierarchy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0.
 */
interface RoleHierarchyInterface
{
    /**
     * Returns an array of all reachable roles by the given ones.
     *
     * Reachable roles are the roles directly assigned but also all roles that
     * are transitively reachable from them in the role hierarchy.
     *
     * @param Role[] $roles An array of directly assigned roles
     *
     * @return Role[] An array of all reachable roles
     */
    public function getReachableRoles(array $roles);
}
