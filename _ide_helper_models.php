<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\OptionQuestion
 *
 * @property int $id
 * @property int $survey_id
 * @property string $question_type
 * @property bool $is_other_option_enabled
 * @property bool $is_other_option_text_enabled
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereIsOtherOptionEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereIsOtherOptionTextEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereQuestionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereSurveyId($value)
 */
	class OptionQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Region
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereName($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubmittedSurvey
 *
 * @property int $id
 * @property int $survey_id
 * @property int $user_id
 * @property string $submitted_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereUserId($value)
 */
	class SubmittedSurvey extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Survey
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon $created_at
 * @property bool $is_active
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey query()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereTitle($value)
 */
	class Survey extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

