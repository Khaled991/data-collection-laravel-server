{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Regions" icon="la la-map-marker" :link="backpack_url('region')" />
<x-backpack::menu-item title="Cities" icon="la la-city" :link="backpack_url('city')" />
<x-backpack::menu-item title="Villages" icon="la la-igloo" :link="backpack_url('village')" />
<x-backpack::menu-item title="Organizations" icon="la la-building" :link="backpack_url('organization')" />
<x-backpack::menu-item title="Surveys" icon="la la-clipboard-list" :link="backpack_url('survey')" />
<x-backpack::menu-item title="Option questions" icon="la la-question" :link="backpack_url('option-question')" />
<x-backpack::menu-item title="Options" icon="la la-list-ul" :link="backpack_url('option')" />
<x-backpack::menu-item title="Text questions" icon="la la-question-circle" :link="backpack_url('text-question')" />
<x-backpack::menu-item title="Detailed submitted surveys" icon="la la-file-contract" :link="backpack_url('detailed-submitted-surveys')" />