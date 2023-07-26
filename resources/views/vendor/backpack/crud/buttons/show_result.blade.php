@if ($crud->hasAccess('showResult'))
<a href="{{ url($crud->route.'/'.$entry->getKey().'/submitted-survey-result') }}" class="btn btn-sm btn-link"><i class="la la-eye"></i> Show Result</a>
@endif