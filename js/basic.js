var mobileShown = false;

function displayMobile(){
	if(!mobileShown){
		document.getElementById('mobile-menu').style.left = '0';
		mobileShown = true;
	}else{
		document.getElementById('mobile-menu').style.left = '-100%';
		mobileShown = false;
	}
}