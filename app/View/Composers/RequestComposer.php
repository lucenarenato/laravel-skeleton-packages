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

namespace App\View\Composers;

use Illuminate\Http\Request;
use Illuminate\View\View;

final readonly class RequestComposer
{
    public function __construct(private Request $request) {}

    /**
     * 绑定视图数据.
     */
    public function compose(View $view): void
    {
        $view->with('request', $this->request);
    }
}
