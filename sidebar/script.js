function getPosition(el){
	var x = 0,
      y = 0;

  while (el != null && (el.tagName || '').toLowerCase() != 'html') {
    x += el.offsetLeft || 0; 
    y += el.offsetTop || 0;
    el = el.parentElement;
  }

  return { x: parseInt(x, 10), y: parseInt(y, 10) };
}

function getAllPositions(el){
	var x = 0,
      y = 0,
			a = el;

  while (el != null && (el.tagName || '').toLowerCase() != 'html') {
    x += el.offsetLeft || 0; 
    y += el.offsetTop || 0;
    el = el.parentElement;
  }

  return { top: parseInt(y, 10), right: parseInt(x, 10) + parseInt(a.offsetWidth), bottom: parseInt(y, 10) + parseInt(a.offsetHeight), left: parseInt(x, 10) };
}

function getScrollData(){
	scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
	scrollDir = ( scrollTop > prevScrollTop ) ? 'down' : 'up';
	prevScrollTop = (scrollTop <= 0) ? 0 : scrollTop;
	
	return { scrollTop: scrollTop, direction: scrollDir };
}

function stickToViewport(el){
	var scrollData = getScrollData();
	var positions  = getAllPositions(el);
	var width      = positions.right - positions.left + 'px';
	
	var watch     = ( scrollData.direction == 'down' ) ? positions.bottom : positions.top;
	var threshold = ( scrollData.direction == 'down' ) ? scrollData.scrollTop + windowHeight : scrollData.scrollTop;
	
	if( scrollData.direction == 'down' ){
		if( threshold > watch ){
			el.style.position = 'fixed';
			el.style.bottom   = 0;
			el.style.top      = 'auto';
			el.style.width    = width;
		} else {
			if( el.style.position == 'fixed' ){
				el.style.position = 'absolute';
				el.style.top      = 'auto';
				el.style.bottom   = positions.bottom + 'px';
				el.style.width    = 'auto';
			}
		}
	} else {
		if( threshold < watch ){
			el.style.position = 'fixed';
			el.style.bottom   = 'auto';
			el.style.top      = 0;
			el.style.width    = width;
		} else {
			if( el.style.position == 'fixed' ){
				el.style.position = 'absolute';
				el.style.top      = scrollData.scrollTop + positions.top + 'px';
				el.style.bottom   = 'auto';
				el.style.width    = 'auto';
			}
		}
	}
}

function changePosition(el, position, top, right, bottom, left, addClasses, removeClasses){
	el.style.position = position;
	el.style.top      = ( isNaN(top) ) ? top : top + 'px';
	el.style.right    = ( isNaN(right) ) ? right : right + 'px';
	el.style.bottom   = ( isNaN(bottom) ) ? bottom : bottom + 'px';
	el.style.left     = ( isNaN(left) ) ? left : left + 'px';
	
	if( addClasses ){
		el.classList.add(...addClasses);
	}
	
	if( removeClasses ){
		el.classList.remove(...removeClasses);
	}
}

var body = document.body;
var logo = '<svg class="whirlocal-pin" viewBox="0 0 346 473"><defs><style>.el-1, .el-3{ fill: #e3e3e3; }.el-1, .el-2, .el-4{ fill-rule: evenodd; }.el-2 { fill: #0778bf; }.el-4 { fill: #fff; fill-opacity: 0; }</style></defs><g><g><g><path class="el-1" d="M172.884,472.99C107.82,302.342,0,302.342,0,172.5,0,77.229,77.4,0,172.884,0S345.768,77.229,345.768,172.5C345.768,302.342,237.948,302.342,172.884,472.99Z"></path><path class="el-2" d="M172.884,25.965c81.108,0,146.859,65.606,146.859,146.535,0,105.728-81.795,115-146.859,237.425C107.82,287.5,26.026,278.228,26.026,172.5,26.026,91.571,91.776,25.965,172.884,25.965Z"></path></g><g><circle class="el-3" cx="172.859" cy="172.547" r="106.016"></circle><ellipse cx="172.922" cy="172.484" rx="79.922" ry="79.734"></ellipse></g><g><path class="el-4" d="M172.884,472.99C107.82,302.342,0,302.342,0,172.5,0,77.229,77.4,0,172.884,0S345.768,77.229,345.768,172.5C345.768,302.342,237.948,302.342,172.884,472.99Z"></path></g></g></g></svg>';
body.innerHTML = body.innerHTML.replace(/\[whir•local pin\]/ig, '<span class="whirlocal-logo" via="JS">'+logo+'<span class="whirlocal-font">WHIR<span class="whirlocal-dot">•</span>LOCAL</span></span>');
body.innerHTML = body.innerHTML.replace(/\[whir•local\]/ig, '<span class="whirlocal-logo" via="JS"><span class="whirlocal-font">WHIR<span class="whirlocal-dot">•</span>LOCAL</span></span>');

var collapse = document.querySelector('.collapse');
if( collapse != null ){
	collapse.onclick = function(){
		body.classList.toggle('collapsed-nav');
		return false;
	};
}

var windowHeight  = window.innerHeight || document.documentElement.clientHeight,
		content       = document.querySelector('#content'),
		mainMenu      = document.querySelector('#main-menu'),
		mainMenuPos   = getPosition(mainMenu),
		showcase      = document.querySelector('#showcase'),
		background    = document.querySelector('#background'),
		sideNav       = document.querySelector('#side-nav'),
		sidebar       = document.querySelector('#sidebar'),
		sideMenu      = sideNav.querySelector('.menu'),
		sideMenuPos   = getPosition(sideMenu),
		prevScrollTop = 0,
		sideMenuTop   = 0,
		parallax;

window.onscroll = function(){
	// Make Side Menu "Sticky" if bottom is in viewport.
	// stickToViewport(sideMenu); // Need to fix before using
	
	// Parallax Effects defined here (start at 30%)
	var scrollData = getScrollData();
	parallax = scrollData.scrollTop * 0.3;
	
	// Showcase Background Photo Parallax Transform
	showcaseParallax = 50 + ( parallax / 7.5 );
	background.setAttribute( 'style', 'transform: translate(-50%, -'+showcaseParallax+'%)');
	
	// Make Main Menu "Sticky" on Scroll
	if( scrollData.scrollTop > mainMenuPos.y ){
		changePosition(mainMenu, 'fixed', 0, 'auto', 'auto', getAllPositions(content).left, ['fixed']);
		mainMenu.style.width = content.offsetWidth + 'px';
	} else {
		changePosition(mainMenu, 'relative', 'auto', 'auto', 'auto', 'auto', null, ['fixed']);
		mainMenu.style.width = 'auto';
	}
	
	// Make Posts Scroll In
	/*if( articles != null && 0 < articles.length ){
		for( var i = 0, n = articles.length; i < n; i++ ){
			if( scrollTop > articles[i].offsetTop - windowHeight + 200 ){
					articles[i].setAttribute('style', 'opacity: 1; transform: translateY(0);');
			}
		}
	}*/
};

/*document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});*/

var deals = document.querySelectorAll('.deal');
if( deals.length > 0 ){
	deals.forEach(function(deal){
		deal.onclick = function(){
			deal.classList.toggle('flipped');
		};
	});
}

var theme = document.querySelector('.theme');
if( theme != null ){
	theme.onclick = function(){
		document.body.classList.toggle('light-theme');
	};
}