<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
