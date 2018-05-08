<?php 
class ig2tools{
	static function http_request($url, $data = null){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		if (!empty($data)){
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen($data))
			);
		}
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($curl);
		curl_close($curl);
		return $output;
	}
	static function getMillisecond() {
		list($t1, $t2) = explode(' ', microtime());
		return $t2.ceil( ($t1 * 1000) );
	}
	static function getIP() {
      $unknown = 'unknown';
      if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){
         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)) {
         $ip = $_SERVER['REMOTE_ADDR'];
      }
      if (false !== strpos($ip, ',')) $ip = reset(explode(',', $ip));
      return $ip;
   }
    static function getIPLoc_Sina($ip)
    {
        $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
        if (empty($res)) {
            return false;
        }
        $jsonMatches = array();
        preg_match('#\{.+?\}#', $res, $jsonMatches);
        if (!isset($jsonMatches[0])) {
            return false;
        }
        $json = json_decode($jsonMatches[0], true);
        if (isset($json['ret']) && $json['ret'] == 1) {
            $json['ip'] = $ip;
            unset($json['ret']);
        } else {
            return false;
        }
        return $json;
    }
   
	static function getRand($length=16,$type=['lower','capital','num']){
		$str = null;
		$strPol='';
		$keySTR_lower = "abcdefghijklmnopqrstuvwxyz";
		$keySTR_capital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$keyNUM = "0123456789";
		if(in_array('lower',$type)){
			$strPol.=$keySTR_lower;
		}
		if(in_array('num',$type)){
			$strPol.=$keyNUM;
		}
		if(in_array('capital',$type)){
			$strPol.=$keySTR_capital;
		}
		
		$max = strlen($strPol)-1;
		
		for($i=0;$i<$length;$i++){
			$str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
		}
		
		return $str;
	}
	static function readXML($simple){
		$p = xml_parser_create();
		xml_parse_into_struct($p, $simple, $vals, $index);
		xml_parser_free($p);
		return array('index'=>$index,'value'=>$vals);
	}
	
	static function headerWX($url,$appid){
		$uri=urlencode($url);
		echo "<script language=javascript>
			location.href='https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$uri."&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect';
		</script>";
	}
	static function getWXInfo($code,$appid,$secret){
		/* errcode报错代码： 
		 * 0：无报错
		 * 110：拉去授权错误
		 * 120：拉去用户信息错误
		 */
		$getcode=ig2tools::getToken("https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$secret."&code=".$code."&grant_type=authorization_code");
		$code_obj=json_decode($getcode);
		if($code_obj->access_token&&$code_obj->openid){
			$getuser=ig2tools::getToken("https://api.weixin.qq.com/sns/userinfo?access_token=".$code_obj->access_token."&openid=".$code_obj->openid);
			$user_obj=json_decode($getuser,true);
			if($user_obj['openid']){
				$user_obj['errcode']=0;
				return $user_obj;
			}else{
				return array('errcode'=>120);
			}
		}else{
			return array('errcode'=>110);
		}
	}
	static function getToken($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		$row=curl_exec($ch);
		return $row;
	}
	
	static function tellgoto($tell,$goto){
		if($tell){
			echo "<script language=javascript>alert('".$tell."');</script>";
			echo "<script language=javascript>document.location.href='".$goto."';</script>";
		}else{
			echo "<script language=javascript>document.location.href='".$goto."';</script>";
		}
		exit();
	}
	static function formToken($str,$token=false){
		$rtn=md5($str,true);
		$rtn=substr($rtn,1,10).$str.$rtn;
		$rtn=sha1($rtn,false);
		$rtn=substr($rtn,4,10).$str.$rtn;
		$rtn=md5($rtn,false);
		$rtn=substr($rtn,3,10).$str.$rtn;
		$rtn=sha1($rtn,true);
		$rtn=substr($rtn,2,10).$str.$rtn;
		$rtn=md5($rtn,false);
		if($token){
			$rtn=md5($rtn.$_SESSION['formToken'],false);
			unset($_SESSION['formToken']);
			if($rtn==$token){
				$right=true;
			}else{
				$right=false;
			}
		}else{
			$_SESSION['formToken']=ig2tools::getRand();
			$rtn=md5($rtn.$_SESSION['formToken'],false);
			$right=false;
		}
		return array('str'=>$rtn,'right'=>$right);
	}

	static function base64EncodeImage ($image_file,$addhead=true) {
        $base64_image = '';
        $image_info = getimagesize($image_file);
        $image_data = fread(fopen($image_file, 'r'), filesize($image_file));
        if($addhead)
            $base64_image = 'data:' . $image_info['mime'] . ';base64,' . chunk_split(base64_encode($image_data));
        else
            $base64_image =base64_encode($image_data);
        return $base64_image;
    }

    static function baidu_request_post($url = '', $param = '')
    {
        if (empty($url) || empty($param)) {
            return false;
        }

        $postUrl = $url;
        $curlPost = $param;
        // 初始化curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $postUrl);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        // 要求结果为字符串且输出到屏幕上
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // post提交方式
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        // 运行curl
        $data = curl_exec($curl);
        curl_close($curl);

        return $data;
    }
}
?>