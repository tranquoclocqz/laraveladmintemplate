<?php

function _substr($str_,$length_){
	if(strlen($str_)<=$length_){
		return $str_;
	} else {
		if(strpos($str_," ",$length_) > $length_){
			$newlength_ = strpos($str_," ",$length_);
			$newstr_ = substr($str_,0,$newlength_).'...';
			return $newstr_;
		}
		$newstr_ = substr($str_,0,$length_).'...';
		return $newstr_;
	}
}

function _slug($str_) {
	$str_ = trim(mb_strtolower($str_));
	$str_ = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str_);
	$str_ = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str_);
	$str_ = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str_);
	$str_ = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str_);
	$str_ = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str_);
	$str_ = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str_);
	$str_ = preg_replace('/(đ)/', 'd', $str_);
	$str_ = preg_replace('/[^a-z0-9-\s]/', '', $str_);
	$str_ = preg_replace('/([\s]+)/', '-', $str_);
	return $str_;
}

function _box($arr_,$class_,$com_){
	return $_box = '';
}

function imageUrl($path, $width = NULL, $height = NULL,$quality=NULL,$crop=NULL) {
	if(!$width && !$height) {
		$url = env('IMAGE_URL') . $path;
	} else {
		$url = 'timthumb.php?src=' . env('IMAGE_URL') . $path;
		if(isset($width)) {
			$url .= '&w=' . $width; 
		}
		if(isset($height) && $height>0) {
			$url .= '&h=' .$height;
		}
		if(isset($crop))   {
			$url .= '&zc='.$crop;
		}
		else
		{
			$url .= '&zc=1';
		}
		if(isset($quality))   {
			$url .='&q='.$quality.'&s=1';
		}
		else   {
			$url .='&q=95&s=1';
		}
	}
	return $url;
}
function timestamp($timestamp){
	$case = '';
	$today = new DateTime();
	$today->setTime( 0, 0, 0 );
	$match_date = DateTime::createFromFormat( "Y.m.d\\TH:i", $timestamp );
	$match_date->setTime( 0, 0, 0 );
	$diff = $today->diff( $match_date );
	$diffDays = (integer)$diff->format( "%R%a" );
	switch( $diffDays ) {
		case 0:
		$case = "Hôm nay";
		break;
		case -1:
		$case = "Hôm qua";
		break;
		case +1:
		$case = "Ngày mai";
		break;
		default:
		$case = $timestamp;
	}
	return $case;
}
function isAjaxRequest(){
	if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
		return true;
	return false;
}
function getIDyoutube($urlYoutube){
	return $idYoutube=end(explode('v=',$urlYoutube));
	
}

function getimgyoutube($urlYoutube){
	$idYoutube=end(explode('v=',$urlYoutube));
	return $ImgYoutube="http://img.youtube.com/vi/".$idYoutube."/0.jpg";
}	
function checkphantram($giacu,$giamoi){
	$phantramgiam= (100-$phantram=($giamoi/$giacu)*100);
	if($phantramgiam>0){
		return $phantramgiam;
	}
}
function format_money($gia,$donvi,$lienhe="Liên hệ"){
	if($gia>0){
		$str= number_format($gia,0,",",".");
		$str.=$donvi;
	}else{$str =$lienhe ;}
	return $str;
}
function magic_quote($str, $id_connect=false)	{	
	if (is_array($str))	{
		foreach($str as $key => $val){
			$str[$key] = escape_str($val);
		}
		return $str;
	}
	if (is_numeric($str)) {
		return $str;
	}
	if(get_magic_quotes_gpc()){
		$str = stripslashes($str);
	}
	if (function_exists('mysql_real_escape_string') AND is_resource($id_connect))	{
		return mysql_real_escape_string($str, $id_connect);
	}
	elseif (function_exists('mysql_escape_string'))	{
		return mysql_escape_string($str);
	}
	else{
		return addslashes($str);
	}
}