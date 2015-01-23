<?php

	return Affinity\Action::create(function($app, $broker) {
		$broker->prepare('Inkwell\View', function($view) {
			$view->filter('html', ['Inkwell\HTML\html', 'out']);
		});
	});
