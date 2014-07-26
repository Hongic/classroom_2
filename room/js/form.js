function checkform(form) {
	if (form.guest.value == "") {
		alert("昵称不能为空！");
		form.guest.focus();
		return false;
	}

}