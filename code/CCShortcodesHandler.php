<?php

class CCShortcodesHandler {

	public static function StyledIcon($arguments, $content = null, $parser = null, $tagName){
		if(!array_key_exists('icon', $arguments)){
			return false;
		}
		$icon = '<span class="styled-icon"><i class="'.$arguments['icon'].'"></i></span>';
		return $icon;
	}

}