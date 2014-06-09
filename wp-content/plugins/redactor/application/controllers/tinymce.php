<?php
class redactor_tinymce extends wv48fv_action {
	function mce_buttonsWPfilter($buttons) {
		array_push ( $buttons,  'spoiler','censor','blackout' );
		return $buttons;
	}
	function mce_external_pluginsWPfilter($plugin_array) {
		$plugin_array ['v48fv_tinymce'] = $this->application ()->pluginuri () . '/library/base/public/js/tinymce_register.js';
		return $plugin_array;
	}
	public function v48fv_dataWPfilter($data)
	{
		$data['tinymce']['cmds']['spoiler']['always']= true;
		$data['tinymce']['buttons']['spoiler']['image'] = $this->application ()->pluginuri () . '/library/base/public/images/48x16_spoiler.png' ;
		$data['tinymce']['buttons']['spoiler']['title'] = 'Spoiler' ;
		$data['tinymce']['buttons']['spoiler']['cmd'] = 'spoiler'; ;
		$data['tinymce']['cmds']['censor']['always']= true;
		$data['tinymce']['buttons']['censor']['image'] = $this->application ()->pluginuri () . '/library/base/public/images/48x16_censor.png' ;
		$data['tinymce']['buttons']['censor']['title'] = 'Censor' ;
		$data['tinymce']['buttons']['censor']['cmd'] = 'censor'; ;
		$data['tinymce']['cmds']['blackout']['always']= true;
		$data['tinymce']['buttons']['blackout']['image'] = $this->application ()->pluginuri () . '/library/base/public/images/16x16_blackout.png' ;
		$data['tinymce']['buttons']['blackout']['title'] = 'Blackout' ;
		$data['tinymce']['buttons']['blackout']['cmd'] = 'blackout'; ;
		return $data;
	}
	public function popupWPpageMeta($return) {
		$return ['slug'] = $this->application()->slug.'/popup';
		return $return;
	}
	public function popupWPpage() {
		$this->view->title = 'Select Plate';
		echo $this->render_script ( 'popups/single_select.phtml' );
	}
}