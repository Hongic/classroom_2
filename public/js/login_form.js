function user_form(form) {
	
	if (form.user.value == "") {
		alert("用户名不能为空！！");
		form.user.focus();
		return false;
	}
	if (form.pwd.value == "") {
		alert("密码不能为空!!");
		form.pwd.focus();
		return false;
	}
	if (form.verify.value == "") {
		alert("验证码不能为空！！");
		form.verify.focus();
		return false;
	}
}