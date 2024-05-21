$(document).ready(function () {

	//слайдер на главной
	$(".index_slider").bxSlider({
		mode: 'fade'
	});

	//стилизация форм
	$(".filter_bl input:checkbox, .filter_bl input:radio, .styler input:radio, .styler input:checkbox, .styler select, .styler input:file").styler();

	//табы в детальной
	$('body').on('click', 'ul.tabs li:not(.current)', function () {
		$(this).addClass('current').siblings().removeClass('current')
			.parents('div.section').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
	});

	$('body').on('click', '.favor_bt', function () {
		let id = $(this).data('id');
		if ($(this).hasClass('active')) {
			activeFav('del', id);
			if (location.pathname == '/izbrannoe/') {
				$(this).closest('.catalog_el').remove();
			}
			$(this).removeClass('active');
		}
		else {

			activeFav('add', id);
			$(this).addClass('active');
		}
		return false;
	});
});

function activeFav(action, id) {

	var favorit = JSON.parse(getCookie('favorit'));
	if (favorit === null || !(favorit instanceof Array))
		favorit = [];
	var inArr = false;
	
	for (i = 0; i < favorit.length; i++) {
		if (favorit[i] == id) {
			if (action == 'del') {
				favorit.splice(i, 1);
			}
			inArr = true;
		}
	}
	if (action == 'add' && !inArr) {
		favorit.push(id);
	}
	var d = new Date();
	d.setMonth(d.getMonth() + 1);
	setCookie('favorit', JSON.stringify(favorit), d.toUTCString(), '/');

	$('.top_head_favor span').text(favorit.length);

	return favorit;
}

function setCookie(name, value, time, path) {
	document.cookie = name + "=" + value +
		((time) ? "; time=" + time : "") +
		((path) ? "; path=" + path : "");
}

function getCookie(name) {

	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset);
			if (end == -1) {
				end = cookie.length;
			}
			setStr = cookie.substring(offset, end);

		}
	}
	return (setStr);
}