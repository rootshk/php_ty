<!DOCTYPE html>
<html>
<head>
		<!--Import Google Icon Font-->
		
		<link href="https://font.c2cmalls.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<style type="text/css">
		.login_button_out {
	margin-top: 22px;
}
        </style>

	<!--Let browser know website is optimized for mobile-->
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
	<?php
		$servername = "172.104.124.93";
		$username = "root";
		$password = "hkhk456852";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=ty_sql", $username, $password);//连接数据库
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//预处理
    	$stmt = $conn->prepare("SELECT username = '沈鸿铿', password = 'root' FROM users");//x准备查询语句
		$stmt->execute();//执行查询
		list($tow,$dou) = $stmt->fetch(PDO::FETCH_NUM);
		if($tow == $dou){
			echo "登录成功!!!";
		}
		$db = null;
	?>
	<!--登录弹窗-->
		<button data-target="modal1" class="btn">登录博卡</button>
		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<div class="row">
    				<form class="col s12">
						<div class="row">
							<div class="input-field col s7">
							  <i class="material-icons prefix">account_circle</i>
							  <input placeholder="输入中文名" id="first_name" type="text" class="validate">
							  <label for="first_name">姓名</label>
							</div>
							<div class="col s4 offset-s1">
								<button data-target="modal1" class="btn">英文登录</button>
								<button data-target="modal1" class="btn login_button_out">工号登录</button>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s7">
							  <i class="material-icons prefix">dialpad</i>
							  <input placeholder="输入登录密码" id="password" type="password" class="validate">
							  <label for="password">密码</label>
							</div>
							<div class="col s4 offset-s1">
								<button data-target="modal1" class="btn">手机登录</button>
								<button data-target="modal1" class="btn login_button_out">扫码登录</button>
							</div>
						</div>
    				</form><!--表单-->
    			</div><!--表单外层-->
			</div><!--弹窗上部-->
			<div class="modal-footer">
				<button class="modal-action modal-close waves-effect waves-green btn-flat teal">登录</button>
				<button class=" modal-action modal-close waves-effect waves-green btn-flat">注册</button>
			</div><!--弹窗下部-->
		</div>
	<!--登录弹窗-->
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.modal').modal();
	 		});
		</script>
	</body>
</html>