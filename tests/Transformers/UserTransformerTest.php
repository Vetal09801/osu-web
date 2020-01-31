<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Tests\Transformers;

use App\Models\User;
use Tests\TestCase;

class UserTransformerTest extends TestCase
{
    public function testAdminDataIsExcludedWhenUsingOAuth()
    {
        $viewer = factory(User::class)->states('admin')->create();
        $user = factory(User::class)->states('silenced')->create();
        $this->actAsScopedUser($viewer);

        $json = json_item($user, 'User', ['account_history.actor', 'account_history.supporting_url']);

        $accountHistory = array_get($json, 'account_history.0');
        $this->assertArrayNotHasKey('actor', $accountHistory);
        $this->assertArrayNotHasKey('supporting_url', $accountHistory);
    }


    public function testAdminDataIsNotExcludedWhenNotUsingOAuth()
    {
        $viewer = factory(User::class)->states('admin')->create();
        $user = factory(User::class)->states('silenced')->create();
        auth()->setUser($viewer);

        $json = json_item($user, 'User', ['account_history.actor', 'account_history.supporting_url']);

        $accountHistory = array_get($json, 'account_history.0');
        $this->assertArrayHasKey('actor', $accountHistory);
        $this->assertArrayHasKey('supporting_url', $accountHistory);
    }
}
