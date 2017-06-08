<?php 

	// print_r($_SERVER);
	// var_dump($_SERVER);
//路径：只要跟文件目录中的对应就行
	$path = 'index';
	//文件名称
	$filename = 'index';
	//判断数组是否包含对应的key（判断数组中是否有这个属性），因为在没有传路径时，这个值是不存在的
	if(array_key_exists('PATH_INFO', $_SERVER)) {
		//存在的话获取里面的值,得到的值的形式为/index/index或/index/login，得到的$url为字符串
		//获取url中的路径，域名后的那部分叫路径
		$url = $_SERVER['PATH_INFO'];
		//substr截取字符串
		$str = substr($url,1);
		//把一个路径按照某一个字符隔开，第一个参数是用什么字符隔开，第二个参数是要分隔的字符串	
		//根据/分隔字符串，结果就是数组	
		$pathinfo = explode('/',$str);
		if(count($pathinfo) == 2) {
			//真实的路径将默认的路径覆盖掉
			//两层路径
			$path = $pathinfo[0];
			$filename = $pathinfo[1];
		}else {
			//只有一层路径，访问的是登陆页面
			$filename = 'login';
		}

	}
	//根据路径请求的不同，返回不同的内容
	//在当前页面嵌入另一个页面，不加载这行代码就没有内容
	include('/view/'.$path.'/'.$filename.'.html');


 ?>
 