<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
