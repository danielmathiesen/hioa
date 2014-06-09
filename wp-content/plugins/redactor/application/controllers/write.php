<?php
class redactor_write extends wv48fv_action {
	public function redactor_writeWPfilter($data) {
		$return = array ();
		foreach ( $data['phrases'] as $value ) {
			if(!isset($value['style']))
			{
				$value['style']=$this->application()->slug;
			}
			if(!isset($value['replacement']))
			{
				$value['replacement']='';
			}
			if ($value ['phrase'] != "" && ! isset ( $value ['delete'] )) {
				$return [$value ['phrase']] = $value;
				if (! is_numeric ( $value ['priority'] )) {
					$return [$value ['phrase']] ['priority'] = 0;
				}
				if ($value ['style'] == 'swap' && $value ['replacement'] == $value ['phrase']) {
					$return [$value ['phrase']] ['style'] = 'blackout';
				}
				if ($value ['style'] != 'swap' && $value ['replacement'] != "") {
					$return [$value ['phrase']] ['replacement'] = '';
				}
			}
		}
		uasort ( $return['phrases'], array ($this, 'sort_phrases' ) );
		return $return;
	}
	public function sort_phrases($a, $b) {
		$al = strtolower ( $a ['phrase'] );
		$bl = strtolower ( $b ['phrase'] );
		if ($a ['priority'] == $b ['priority']) {
			if ($al == $bl) {
				return 0;
			}
			return ($al > $bl) ? + 1 : - 1;
		} else {
			return ($a ['priority'] < $b ['priority']) ? + 1 : - 1;
		}
	}
}
?>