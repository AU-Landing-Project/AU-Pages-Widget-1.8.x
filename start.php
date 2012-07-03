<?php

function au_pages_widget_init(){
	elgg_unregister_widget_type('pages');
	elgg_register_widget_type('pages', elgg_echo('pages'), elgg_echo('pages:widget:description'), 'all,groups', TRUE);
}

elgg_register_event_handler("init", "system", "au_pages_widget_init");