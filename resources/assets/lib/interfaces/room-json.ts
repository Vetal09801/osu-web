// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

import UserJson from 'interfaces/user-json';

export default interface RoomJson {
  active: boolean;
  category: string;
  channel_id: number | null;
  ends_at: string;
  id: number;
  host: UserJson;
  max_attempts: number | null;
  name: string;
  participant_count: number;
  starts_at: string;
  user_id: number;
}
