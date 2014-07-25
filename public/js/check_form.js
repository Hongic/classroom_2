function check(form) {

	if (form.member.value == "") {
		alert("不能为空！！");
		form.member.focus();
		return false;
	}
	if (form.grade.value == "") {
		alert("年级不能为空!!");
		form.grade.focus();
		return false;
	}
	if (form.direction.value == "") {
		alert("方向不能为空！！");
		form.direction.focus();
		return false;
	}

	if (form.picture.value == "") {
		alert("不能为空！！");
		form.picture.focus();
		return false;
	}
	if (form.intro.value == "") {
		alert("不能为空！！");
		form.intro.focus();
		return false;
	}

	if (form.title.value == "") {
		alert("标题不能为空！！");
		form.title.focus();
		return false;
	}
	if (form.produce.value == "") {
		alert("不能为空！！");
		form.produce.focus();
		return false;
	}

	if (form.download.value == "") {
		alert("不能为空！！");
		form.download.focus();
		return false;
	}

	if (form.guest.value == "") {
		alert("不能为空！！");
		form.guest.focus();
		return false;
	}
	if (form.gintro.value == "") {
		alert("不能为空！！");
		form.gintro.focus();
		return false;
	}
	if (form.rely.value == "") {
		alert("不能为空！！");
		form.rely.focus();
		return false;
	}
	if (form.rintro.value == "") {
		alert("不能为空！！");
		form.rintro.focus();
		return false;
	}
	if (form.content.value == "") {
		alert("不能为空！！");
		form.content.focus();
		return false;
	}
	if (form.file.value == "") {
		alert("不能为空！！");
		form.file.focus();
		return false;
	}
}