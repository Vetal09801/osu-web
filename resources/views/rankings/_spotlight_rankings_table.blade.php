{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
    See the LICENCE file in the repository root for full licence text.
--}}
<table class="ranking-page-table">
    <thead>
        <tr>
            <th class="ranking-page-table__heading"></th>
            <th class="ranking-page-table__heading ranking-page-table__heading--main"></th>
            <th class="ranking-page-table__heading">
                {{ trans('rankings.stat.accuracy') }}
            </th>
            <th class="ranking-page-table__heading">
                {{ trans('rankings.stat.play_count') }}
            </th>
            <th class="ranking-page-table__heading">
                {{ trans('rankings.stat.total_score') }}
            </th>
            <th class="ranking-page-table__heading ranking-page-table__heading--focused">
                {{ trans('rankings.stat.ranked_score') }}
            </th>
            <th class="ranking-page-table__heading ranking-page-table__heading--grade">
                {{ trans('rankings.stat.ss') }}
            </th>
            <th class="ranking-page-table__heading ranking-page-table__heading--grade">
                {{ trans('rankings.stat.s') }}
            </th>
            <th class="ranking-page-table__heading ranking-page-table__heading--grade">
                {{ trans('rankings.stat.a') }}
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($scores as $index => $score)
            <tr class="ranking-page-table__row{{$score->user->isActive() ? '' : ' ranking-page-table__row--inactive'}}">
                <td class="ranking-page-table__column ranking-page-table__column--rank">
                    #{{ $index + 1 }}
                </td>
                <td class="ranking-page-table__column">
                    <div class="ranking-page-table__user-link">
                        @include('objects._country_flag', [
                            'countryName' => $score->user->country->name,
                            'countryCode' => $score->user->country->acronym,
                        ])
                        <a
                            href="{{ route('users.show', ['user' => $score->user_id, 'mode' => $mode]) }}"
                            class="ranking-page-table__user-link-text js-usercard"
                            data-user-id="{{ $score->user_id }}"
                            data-tooltip-position="right center"
                        >
                            {{ $score->user->username }}
                        </a>
                    </div>
                </td>
                <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                    {{ format_percentage($score->hit_accuracy) }}
                </td>
                <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                    {{ i18n_number_format($score->playcount) }}
                </td>
                <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                    {!! suffixed_number_format_tag($score->total_score) !!}
                </td>
                <td class="ranking-page-table__column ranking-page-table__column--focused">
                    {!! suffixed_number_format_tag($score->ranked_score) !!}
                </td>
                <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                    {{ i18n_number_format(max(0, $score->x_rank_count + $score->xh_rank_count)) }}
                </td>
                <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                    {{ i18n_number_format(max(0, $score->s_rank_count + $score->sh_rank_count)) }}
                </td>
                <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                    {{ i18n_number_format(max(0, $score->a_rank_count)) }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
