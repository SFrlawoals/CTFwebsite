
<style type="text/css">
.login_form{
	float: left;
	padding: 8px;
	width: 220px;
	background-color: transparent;
	border: 1px solid #999;
}
#input{
	width: 130px;
}
#login_button{
	float: right;
	height: 58px;
}
.login_div{
	padding-top: 3px;
	display:inline;
}
.register
{
	float: right;
	bottom: 0px;
}
.find_id_pw{
	font-size: auto;
}
	</style>


<form method="post" class="login_form" action="./member/member_login_chk.php">
	<div>
		<div>
			<button id="login_button">login</button>
			<div>
				<input id="input" type="text" name="id">
				<input id="input" type="password" name="pw">
			</div>
			
		</div>
		<div class="login_div">
			<a class="register" href="./member/member_register.html">register</a>
			find 
			<a class="find_id_pw" href="">id</a>
			·
			<a class="find_id_pw" href="">pw</a>
		</div>
	</div>	
</form>

