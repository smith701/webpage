<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');