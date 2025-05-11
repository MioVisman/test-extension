<?php
/**
 * This file is part of the ForkBB <https://forkbb.ru, https://github.com/forkbb>.
 *
 * @copyright (c) Visman <mio.visman@yandex.ru, https://github.com/MioVisman>
 * @license   The MIT License (MIT)
 */

declare(strict_types=1);

namespace MioVisman\TestExtension;

use ForkBB\Models\User\User as BasicUser;

class User extends BasicUser
{
    /**
     * Титул пользователя
     */
    public function title(): string
    {
        return '👻' . parent::title() . '👻';
    }
}
