var app = {};
app.Site = {
	init: function() {
		this.setEvents();
	},
	
	setEvents: function() {
		//bind tab menu click events
		var els = app.Helpers.SCLASS('menu-item');
		for(var i = 0; i < els.length; i++){
			var el = els[i];
			//set onclick in the <a> tag
			el.firstChild.onclick = function() {
				app.Site.hideMenuTabs(); //hide all tab contents
				//extracting the id
				var idx = this.href.indexOf('#');
				var hash = this.href.substr(idx + 1, this.href.length - idx);
				//show content for clicked button
				app.Helpers.SID(hash).style.display = 'block';
				return false; //we dont need the hash in the address bar
			}
		}
	},
	
	hideMenuTabs: function() {
		var els = app.Helpers.SCLASS('menu-item-content');
		for(var i = 0; i < els.length; i++){
			var el = els[i];
			el.style.display = 'none';
		}
	}
};
app.Helpers = {
	//return the element with the provided id
	SID: function(id) {
		return document.getElementById(id);
	},
	//return the elements containing the provided CSS class
	SCLASS: function(cls) {
		return document.getElementsByClassName(cls);
	}
};
app.Site.init();