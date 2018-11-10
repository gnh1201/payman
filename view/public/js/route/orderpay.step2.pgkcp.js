function goResult() {
	document.getElementById("pay_info").submit();
}

// 결제 중 새로고침 방지 샘플 스크립트 (중복결제 방지)
function noRefresh(e) {
	/* CTRL + N키 막음. */
	if ((e.keyCode == 78) && (e.ctrlKey == true)) {
		e.keyCode = 0;
		return false;
	}

	/* F5 번키 막음. */
	if(e.keyCode == 116) {
		e.keyCode = 0;
		return false;
	}
}

document.onkeydown = noRefresh;

window.onload = function() {
	goResult();
};