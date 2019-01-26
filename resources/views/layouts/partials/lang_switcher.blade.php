{!! FormField::formButton(['route' => 'lang.switch', 'method' => 'patch', 'title' => __('app.switch_en_lang')], 'en', ['class' => 'btn btn-default btn-xs navbar-btn', 'id' => 'lang_en'] + (config('app.locale') == 'en' ? ['disabled' => 'disabled'] : []), ['lang' => 'en']) !!}
{!! FormField::formButton(['route' => 'lang.switch', 'method' => 'patch', 'title' => __('app.switch_id_lang')], 'id', ['class' => 'btn btn-default btn-xs navbar-btn', 'id' => 'lang_id'] + (config('app.locale') == 'id' ? ['disabled' => 'disabled'] : []), ['lang' => 'id']) !!}
