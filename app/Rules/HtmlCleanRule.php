<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021-2025 guanguans<ityaozm@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/guanguans/laravel-skeleton
 */

namespace App\Rules;

final class HtmlCleanRule extends Rule
{
    #[\Override]
    public function passes(string $attribute, mixed $value): bool
    {
        return strip_tags($value) === $value;
    }
}
