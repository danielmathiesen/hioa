<?php
class redactor_filters_shortcodes extends wv48fv_action {
	public function comment_textWPfilter($content) {
		return $this->the_contentWPfilter($content);
	}
	public function the_contentWPfilter($content) {
		$settings = $this->application ()->data ()->phrases;
		if (! is_array ( $settings )) {
			return $content;
		}
		$tag = bv48fv_tag::instance ();
		$content = ' ' . $content . ' ';
		// now tokenise all the tags or bbcode tags to stop search and replace breaking anything.
		$tag->tokenise ( $content );
		$cnt = count ( $content->tokens );
		// 2 pass to allow for people trying to swap in bad words 
		for($i = 0; $i < 2; $i ++) {
			foreach ( $settings as $setting ) {
				$token = "#" . str_pad ( $cnt, 4, "0", STR_PAD_LEFT ) . "#";
				$type = $setting ['style'];
				$phrase = $this->preg_safe ( $setting ['phrase'] );
				$pattern = '|[\W](' . $phrase . ')[\W]|Ui';
				preg_match_all ( $pattern, $content->text, $matches, PREG_SET_ORDER );
				foreach ( $matches as $match ) {
					//$this->debug($match);
					$pattern = null;
					switch ($type) {
						case 'blackout' :
							$new_content = $match [1];
							$pwords = $this->words ( $new_content );
							foreach ( $pwords as $pword ) {
								$new_content = preg_replace ( '/\b(' . $pword . ')\b/Ui', $this->blackout ( $pword ), $new_content );
							}
							$pattern = '|' . $match [0] . '|Ui';
							break;
						case 'censor' :
							$new_content = $this->$type ( $phrase );
							$pattern = '|\b(' . $phrase . ')\b|Ui';
							break;
						case 'spoiler' :
							if($this->application()->slug!='censor')
							{	
								$new_content = $this->$type ( $phrase );
								$pattern = '|\b(' . $phrase . ')\b|Ui';
							}
							break;
						case 'swap' :
							$new_content = $setting ['replacement'];
							$pattern = '|\b(' . $phrase . ')\b|Ui';
							break;
					}
					if (null !== $pattern) {
						$content->tokens [$cnt] = $new_content;
						$content->text = preg_replace ( $pattern, ' ' . $token . ' ', $content->text );
						$cnt ++;
					}
				}
			}
		}
		if ($content->text [0] == ' ') {
			$content->text = substr ( $content->text, 1 );
		}
		$tag->detokenise ( $content );
		return $content;
	}
	
	protected function preg_safe($text) {
		$text = str_replace ( ',', '\W', $text );
		return $text;
	}
	
	public function blackoutWPshortcode($atts, $content=null, $code='blackout' ) {
		return $this->censorWPshortcode($atts, $content, $code );
	}
	public function spoilerWPshortcode($atts, $content=null, $code='spoiler' ) {
		return $this->censorWPshortcode($atts, $content, $code );
	}
	public function censorWPshortcode($atts, $content=null, $code='censor' ) {
		$page = '';
		if(null!==$content)
		{
			$this->view->text = $content;
			$this->view->type=strtolower ( $code );
			$page = $this->render_script ( 'front/redacted.phtml' );
		}
		return $page;
	}	
	protected function words($text) {
		// find just words
		$return = array ();
		$words = preg_split ( '|\W|Ui', $text );
		// remove dupes to avaoid problems
		foreach ( $words as $word ) {
			$lword = strtolower ( $word );
			$return [$lword] = $lword;
		}
		return $return;
	}
	
	public function blackout($text) {
		return $this->blackoutWPshortcode ( '',$text );
	}
	
	public function censor($text) {
		return $this->censorWPshortcode ( '',$text );
	}
	
	public function spoiler($text) {
		return $this->spoilerWPshortcode ( '',$text );
	}
}
?>