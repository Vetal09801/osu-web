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

return [
    'event' => [
        'approve' => 'Schváleno.',
        'discussion_delete' => 'Moderátor smazal tuto diskusi :discussion.',
        'discussion_lock' => '',
        'discussion_post_delete' => 'Moderátor smazal příspěvek z této diskuse :discussion.',
        'discussion_post_restore' => 'Moderátor obnovil příspěvek z této diskuse :discussion.',
        'discussion_restore' => 'Moderátor obnovil tuto diskusi :discussion.',
        'discussion_unlock' => '',
        'disqualify' => 'Diskvalifikováno uživatelem :user. Důvod: :discussion (:text).',
        'disqualify_legacy' => 'Diskvalifikováno uživatelem :user. Důvod: text.',
        'issue_reopen' => 'Vyřešený problém :discussion byl obnoven.',
        'issue_resolve' => 'Problém :discussion byl označen jako vyřešen.',
        'kudosu_allow' => 'Odmítnutí kudosu pro diskuzi :discussion odebráno.',
        'kudosu_deny' => 'Diskuse :discussion nemůže přjímat kudosu.',
        'kudosu_gain' => 'Diskuse :discussion uživatele :user dosáhla dostatku hlasů pro kudosu.',
        'kudosu_lost' => 'Diskuse :discussion uživatele :user ztratila hlasy a získané kudosu byly odebrány.',
        'kudosu_recalculate' => 'Diskusi :discussion byly získané kudosu přepočteny.',
        'love' => 'Tuto mapu miluje :user',
        'nominate' => 'Nominováno uživatelem :user.',
        'nomination_reset' => 'Nový problém :discussion (:text) způsobil resetování nominace.',
        'qualify' => 'Tato beatmapa získala požadované množství nominací a byla kvalifikována.',
        'rank' => 'Hodnocené.',
    ],

    'index' => [
        'title' => 'Události beatmapsetu',

        'form' => [
            'period' => 'Období',
            'types' => 'Typy',
        ],
    ],

    'item' => [
        'content' => 'Obsah',
        'discussion_deleted' => '[odstraněno]',
        'type' => 'Typ',
    ],

    'type' => [
        'approve' => 'Schválení',
        'discussion_delete' => 'Odstranění diskuze',
        'discussion_post_delete' => 'Odstranění odpovědí diskuze',
        'discussion_post_restore' => 'Obnovení odpovědí diskuze',
        'discussion_restore' => 'Obnovení diskuze',
        'disqualify' => 'Diskvalifikace',
        'issue_reopen' => 'Znovuotevření diskuze',
        'issue_resolve' => 'Vyřešení diskuze',
        'kudosu_allow' => 'Příspěvek Kudosu',
        'kudosu_deny' => 'Odmítnutí Kudosu',
        'kudosu_gain' => 'Zisk Kudosu',
        'kudosu_lost' => 'Ztráta Kudosu',
        'kudosu_recalculate' => 'Přepočet Kudosu',
        'love' => 'Obliba',
        'nominate' => 'Nominace',
        'nomination_reset' => 'Resetování nominací',
        'qualify' => 'Kvalifikace',
        'rank' => 'Hodnocení',
    ],
];
