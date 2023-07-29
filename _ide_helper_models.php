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
 * App\Models\ActiveSurvey
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveSurvey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveSurvey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveSurvey query()
 */
	class ActiveSurvey extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Region $region
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Village> $villages
 * @property-read int|null $villages_count
 * @method static \Database\Factories\CityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DetailedSubmittedSurveys
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OptionQuestionWithResponse> $multipleSelectQuestions
 * @property-read int|null $multiple_select_questions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OptionQuestionWithResponse> $optionQuestionsWithResponse
 * @property-read int|null $option_questions_with_response_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubmittedSurveyTextResponse> $submittedSurveyTextResponses
 * @property-read int|null $submitted_survey_text_responses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TextQuestionWithResponse> $textQuestionWithResponses
 * @property-read int|null $text_question_with_responses_count
 * @method static \Illuminate\Database\Eloquent\Builder|DetailedSubmittedSurveys newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailedSubmittedSurveys newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailedSubmittedSurveys query()
 */
	class DetailedSubmittedSurveys extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Option
 *
 * @property int $id
 * @property string $text
 * @property int $option_question_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property bool $is_textfield_enabled
 * @property-read \App\Models\OptionQuestion $optionQuestion
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubmittedSurveyOptionResponse> $submittedSurveyOptionResponses
 * @property-read int|null $submitted_survey_option_responses_count
 * @method static \Database\Factories\OptionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereIsTextfieldEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereOptionQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereUpdatedAt($value)
 */
	class Option extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OptionQuestion
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $survey_id
 * @property string $question_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Option> $options
 * @property-read int|null $options_count
 * @property-read \App\Models\Survey $survey
 * @method static \Database\Factories\OptionQuestionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereQuestionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestion whereUpdatedAt($value)
 */
	class OptionQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OptionQuestionWithResponse
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestionWithResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestionWithResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionQuestionWithResponse query()
 */
	class OptionQuestionWithResponse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Organization
 *
 * @property int $id
 * @property string $name
 * @property int $village_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Village> $villages
 * @property-read int|null $villages_count
 * @method static \Database\Factories\OrganizationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization query()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereVillageId($value)
 */
	class Organization extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Region
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Survey> $surveys
 * @property-read int|null $surveys_count
 * @method static \Database\Factories\RegionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereUpdatedAt($value)
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SubmittedSurveyTextResponse|null $submittedSurveyTextResponses
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubmittedSurveyOptionResponse> $surveyOptionResponses
 * @property-read int|null $survey_option_responses_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurvey whereUserId($value)
 */
	class SubmittedSurvey extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubmittedSurveyOptionResponse
 *
 * @property int $id
 * @property int $option_id
 * @property int $submitted_survey_id
 * @property string|null $text_response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TextOptionResponse|null $textOptionResponses
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse whereSubmittedSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse whereTextResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyOptionResponse whereUpdatedAt($value)
 */
	class SubmittedSurveyOptionResponse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubmittedSurveyTextResponse
 *
 * @property int $id
 * @property int $text_question_id
 * @property int $submitted_survey_id
 * @property string $text_response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SubmittedSurveyTextResponseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse whereSubmittedSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse whereTextQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse whereTextResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubmittedSurveyTextResponse whereUpdatedAt($value)
 */
	class SubmittedSurveyTextResponse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Survey
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OptionQuestion> $optionQuestions
 * @property-read int|null $option_questions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Region> $regions
 * @property-read int|null $regions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubmittedSurvey> $submittedSurveys
 * @property-read int|null $submitted_surveys_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TextQuestion> $textQuestions
 * @property-read int|null $text_questions_count
 * @method static \Database\Factories\SurveyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey query()
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Survey whereUpdatedAt($value)
 */
	class Survey extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TextOptionResponse
 *
 * @method static \Database\Factories\TextOptionResponseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TextOptionResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextOptionResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextOptionResponse query()
 */
	class TextOptionResponse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TextQuestion
 *
 * @property int $id
 * @property int $survey_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $text
 * @property-read \App\Models\Survey $survey
 * @method static \Database\Factories\TextQuestionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion whereSurveyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestion whereUpdatedAt($value)
 */
	class TextQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TextQuestionWithResponse
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestionWithResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestionWithResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextQuestionWithResponse query()
 */
	class TextQuestionWithResponse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property mixed $password
 * @property bool $is_admin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Client> $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Organization> $organizations
 * @property-read int|null $organizations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Region> $regions
 * @property-read int|null $regions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Token> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserRegion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRegion query()
 */
	class UserRegion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Village
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Organization> $organizations
 * @property-read int|null $organizations_count
 * @method static \Database\Factories\VillageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Village newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Village newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Village query()
 * @method static \Illuminate\Database\Eloquent\Builder|Village whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Village whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Village whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Village whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Village whereUpdatedAt($value)
 */
	class Village extends \Eloquent {}
}

