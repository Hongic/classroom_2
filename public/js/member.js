function member_form(form) {
	if (form.member.value == "") {
		alert('成员名不能为空！！');
		form.member.focus();
		return false;
	}
	if (form.grade.value == "") {
		alert('请填写你的年级！');
		form.grade.focus();
		return false;
	}
	if (form.direction.value == "") {
		alert('请填写你的学习方向！');
		form.direction.focus();
		return false;
	}
	if (form.file.value == "") {
		alert('请上传你的图片！');
		form.file.focus();
		return false;
	}
	if (form.intro.value == "") {
		alert('请填写你个人简介！');
		form.intro.focus();
		return false;
	}

}