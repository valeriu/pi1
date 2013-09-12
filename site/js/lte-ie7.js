/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'hondaaccord\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-facebook' : '&#xe000;',
			'icon-twitter' : '&#xe001;',
			'icon-google-plus' : '&#xe002;',
			'icon-youtube' : '&#xe003;',
			'icon-foursquare' : '&#xe008;',
			'icon-feed' : '&#xe009;',
			'icon-css3' : '&#xe00a;',
			'icon-html5' : '&#xe00b;',
			'icon-lock-fill' : '&#xe00c;',
			'icon-unlock-fill' : '&#xe005;',
			'icon-heart-stroke' : '&#xe004;',
			'icon-checkmark' : '&#xe006;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};