/*
 * CS Hero
 *
 */
 /*same height*/
function sameHeight(){
	"use strict";
	var biggestHeight = 0;
    jQuery('.sameheight article').each(function(){
        if(jQuery(this).height() > biggestHeight){
            biggestHeight = jQuery(this).height();
        }
    });
    jQuery('.sameheight article').height(biggestHeight);
}
(function($) { "use strict";
/*color box*/
jQuery(function(){
	if(jQuery(".colorbox").length>0){
		jQuery(".colorbox").colorbox();
	}
	if(jQuery(".cs-colorbox-post-video").length>0){
		jQuery(".cs-colorbox-post-video").colorbox({
			iframe:true,
			innerWidth:640,
			innerHeight:390
		});
	}
	if(jQuery(".cs-colorbox-post-gallery").length>0){
		var pid=jQuery(".cs-colorbox-post-gallery").data('sid');
		jQuery(".cs-colorbox-post-gallery").colorbox({
			html: "<div id='cs-gallery-popup"+pid+"' class='carousel slide' data-ride='carousel'>"+jQuery("#"+jQuery(".cs-colorbox-post-gallery").data('selement')).html()+"</div>"
		});
	}

if(jQuery(".cs-masonry-layout").length>0){
	jQuery(".cs-masonry-layout").imagesLoaded(function(){
		jQuery(".cs-masonry-layout").isotope({
			itemSelector: '.cs-masonry-layout-item'
		});
	});
}


});
function wheel(event) {
	if (event.wheelDelta) delta = event.wheelDelta / 120;
	else if (event.detail) delta = -event.detail / 3;
	handle(270,300,delta);
	if (event.preventDefault){event.preventDefault()};
	event.returnValue = false;
}
function handle(distance,time,delta) {
	jQuery('html, body').stop().animate({
		scrollTop: jQuery(window).scrollTop() - (distance * delta)
	}, time);
}
function fullWidth(){
    var windowWidth = jQuery(window).width();
    jQuery('.stripe').each(function(){
        var $bgobj = jQuery(this);
        var width = $bgobj.width();
        var v = (windowWidth - width)/2;
        $bgobj.css({
            marginLeft:-v,
            paddingLeft:v,
            paddingRight:v
        });
    })
}
function boxed(){
    var windowWidth = jQuery(window).width();
    jQuery('.stripe').each(function(){
        jQuery(this).css({
            marginLeft:0,
            paddingLeft:0,
            paddingRight:0
        });
    })
}
jQuery(document).ready(function($){
	$('.widget_widget_cart_search').removeAttr('id');
	$('.smooth2pager').click(function(){
		var selector = $(this).data('el-selector');
		var top = $(selector).offset().top;
		$("html,body").animate({scrollTop: top }, 500);
	})
	var $mainmenu = $('.main-menu-content .cshero-dropdown');
	var $stickymenu = $('.sticky-menu .cshero-mobile > ul');
    var $mobilemenu = $mainmenu.clone().removeClass('main-menu right left').addClass('cshero-mobile-menu');
    $mobilemenu.find('li').each(function(){
        var $this = $(this);
        if($this.find('ul').length > 0){
            var $menutoggle = $('<span class="cs-menu-toggle"></span>');
            $menutoggle.bind('click',function(){$this.toggleClass('open')});
            $this.append($menutoggle);
        }
    });
	$mobilemenu.appendTo('#cshero-main-menu-mobile');
    var $mobilesticky = $mobilemenu.clone(true);
    $mobilesticky.find('li').each(function(){
        var $this = $(this);
        if($this.find('ul').length > 0){
            var $menutoggle = $('<span class="cs-menu-toggle"></span>');
            $menutoggle.bind('click',function(){$this.toggleClass('open')});
            $this.append($menutoggle);
        }
    });
    $mobilesticky.appendTo('#cshero-sticky-menu-mobile');

    /* Show Tooltip */
    jQuery('[data-rel="tooltip"]').tooltip();

    /* Back to top */
    var window_height = $(window).height();
    var back_to_top = $('#back_to_top');
    $(window).scroll(function() {
    	if($(window).scrollTop() < window_height){
    		back_to_top.addClass('off').removeClass('on');
    	} else {
    		back_to_top.removeClass('off').addClass('on');
    	}
    });
    back_to_top.click(function() {
    	$("html, body").animate({scrollTop: 0}, 1500);
	});
    /* Fix Column Height */
    jQuery('.feature-box').each(function(){
		var subs = $(this).find('> .column_container');
		if(subs.length < 2) return;
		var maxHeight = Math.max.apply(null, $(this).find("> .column_container").map(function(){
			return $(this).height();
		}).get());
		$(this).find("> .column_container").height(maxHeight-3);
	});
    /* Parallax Section */
    var windowHeight = jQuery(window).height();
    fullWidth();
	/*
    $.stellar({
		horizontalScrolling: false,
		verticalOffset: 40
	});
    */
    // Same Height
    jQuery('.wpb_row').each(function(){
        if(jQuery(this).hasClass('ww-same-height')){
            var height = jQuery(this).height();
            jQuery(this).children(":first").children().each(function(){
                jQuery(this).css('min-height', height);
            });
        }

    });
    //Fade out Title Bar on Scroll
    var item_height = $(".cs-page-title").outerHeight(true);
    var position = $(".cs-page-title").position();
    var title_animate = $("#title-animate");
    $(window).scroll(function() {
    	if(position){
	        var scroll = $(window).scrollTop();
	        var max = position.top + item_height;
	        if(scroll <= max){
	            var opacity = scroll/item_height;
	            title_animate.css("opacity",1 - opacity);
	        } else {
	        	title_animate.css("opacity",opacity);
	        }
    	}
    });
});
/* Mega menu */
(function ($) {
    var menuNav = function($el, options){
		this.$menu = $($el);
		var defaults = {
			mobMenuClass      : 'mob-nav-menu',
			mobPrecedingElSel : '#cshero-main-menu-mobile-bk',
			mobBtnSel         : '.btn-navbar',
			mobArrowClass     : 'mob-nav-arrow',
			mobSubOpenedClass : 'mob-sub-opened',
			megaMenuClass     : 'mega-menu-item',
			megaMenuMaxWidth  : 1000,
			megaMenuColumnWidth : 232
		};
		this.o = $.extend(defaults, options);
	};

	var mn = menuNav.prototype;
	mn.getBrowser = function(){
		var browser = {},
			ua,
			match,
			matched;

		if(mn.browser){
			return mn.browser;
		}

		ua = navigator.userAgent.toLowerCase();

		match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
			/(webkit)[ \/]([\w.]+)/.exec( ua ) ||
			/(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
			/(msie) ([\w.]+)/.exec( ua ) ||
			ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
			[];

		matched = {
			browser: match[ 1 ] || "",
			version: match[ 2 ] || "0"
		};

		if ( matched.browser ) {
			browser[ matched.browser ] = true;
			browser.version = matched.version;
		}

		// Chrome is Webkit, but Webkit is also Safari.
		if ( browser.chrome ) {
			browser.webkit = true;
		} else if ( browser.webkit ) {
			browser.safari = true;
		}

		mn.browser = browser;

		return browser;
	}
    mn.init = function(){
		var self = this,
			browser = mn.getBrowser();

		self.$win = $(window);
		self.$body = $('body');
		self.$mainUl = self.$menu.find('ul:first');
		self.isIE9 = browser.msie && parseInt(browser.version, 10)==9;

		if(self.$menu.is(':visible')){
			//init the main navigation functionality
			self.initMain();
		}else{
			$(window).on('resize.pexetodropdown', function(){
				if(self.$menu.is(':visible')){
					self.initMain();
					$(window).off('.pexetodropdown');
				}
			});
		}

		//init the mobile navigation functionality
		self.initMobileMenu();
	};

	/**
	 * Inits the main navigation functionality with the drop-down menus on
	 * hover.
	 */
	mn.initMain = function(){
		var self = this,
			menuPosition = 'right';

		if(this.$body.hasClass('header-layout-center')){
			menuPosition = 'center';
		}else if(this.$body.hasClass('header-layout-right')){
			menuPosition = 'left';
		}
		this.menuPosition = menuPosition;

		//bind the mouseover events
		self.$menu.find('ul li').has('ul').not('ul li.mega-menu-item li').each(function() {

			$(this).on('mouseenter', function(){
				self.doOnMenuMouseover($(this));
			}).on('mouseleave', function(){
				self.doOnMenuMouseout($(this));
			});
		});

		self.$menu.find('a[href="#"]').on('click', function(e){
			e.preventDefault();
		});

		this.initMegaMenu();
	};

	mn.initMegaMenu = function(){
		this.$megaUls = this.$menu.find('ul li.'+this.o.megaMenuClass).has('ul').children('ul');

		if(this.$megaUls.length){
			this.$parentWrapper = this.$menu.parents('.container:first');

			this.$win.on('pexetoresize', $.proxy(this.setMegaMenuWidth, this));

			this.setMegaMenuWidth();
		}

	};

	mn.setMegaMenuMaxWidth = function(){
		var maxWidth = 0;
		switch(this.menuPosition){
			case 'right' :
				if(!this.lastMenuLi){
					this.lastMenuLi = this.$menu.find('ul:first>li:last');
				}
				if(this.isIE9){
					this.lastMenuLi.offset();
				}
				maxWidth = this.lastMenuLi.offset().left + this.lastMenuLi.width() - this.$parentWrapper.offset().left;
			break;
			case 'left' :
				maxWidth = this.$parentWrapper.width();
			break;
			case 'center' :
				maxWidth = this.$parentWrapper.width();
			break;
		}

		this.megaMenuMaxWidth = Math.min(this.o.megaMenuMaxWidth, maxWidth);
	};

	mn.setMegaMenuWidth = function(){
		var self = this;

		this.setMegaMenuMaxWidth();
		this.mainUlWidth =  this.$mainUl.width();

		this.$megaUls.each(function(){
			$(this).addClass('colimdi');
			var $ul = $(this),
				liNum =$ul.children('li').length,
				width,
				colsToFit;

			if(liNum>0){
				if(self.o.megaMenuMaxWidth<liNum*self.o.megaMenuColumnWidth){
					colsToFit = Math.floor(self.megaMenuMaxWidth/self.o.megaMenuColumnWidth) || 1;
					width = colsToFit*self.o.megaMenuColumnWidth;
				}else{
					width = liNum*self.o.megaMenuColumnWidth;
					colsToFit = liNum;
				}
				if(this.lastMegaClass){
					$ul.removeClass(this.lastMegaClass);
				}
				this.lastMegaClass = 'mega-columns-'+colsToFit;

				$ul.width(width)
					.addClass(this.lastMegaClass);

				self.setMegaMenuPosition($ul, width);

			}
		});
	}

	mn.setMegaMenuPosition = function($ul, ulWidth){
		var left,
			$li,
			centerPosition,
			shortestEndDistance;

		if(ulWidth >= this.mainUlWidth){
			//the mega drop-down is bigger than the parent menu
			switch(this.menuPosition){
				case 'right' :
					//align right
					$ul.css({left:'auto', right:0});
				break;
				case 'left' :
					//align left
					$ul.css({left:0});
				break;
				case 'center' :
					//center
					if(typeof this.iconsWidth === 'undefined'){
						var $icons = this.$parentWrapper.find('.header-buttons');
						this.iconsWidth = $icons.length ? $icons.width() : 0;
					}
					left = -(ulWidth - (this.mainUlWidth + this.iconsWidth) )/2;
					$ul.css({left:left});
				break;
			}
		}else{
			$li = $ul.parents('li:first');
			centerPosition = $li.position().left + $li.width()/2,
			shortestEndDistance = Math.min(centerPosition, this.mainUlWidth-centerPosition);

			if(ulWidth/2<=shortestEndDistance){
				//center
				left = centerPosition - ulWidth/2;
				$ul.css({left:left});
			}else{
				if(centerPosition<=this.mainUlWidth-centerPosition){
					//align left
					$ul.css({left:0});
				}else{
					//align right
					$ul.css({left:'auto', right:0});
				}
			}

		}

	};


	/**
	 * Displays the drop-down menu on mouse over.
	 * @param  {object} $li the hovered element - jQuery object
	 */
	mn.doOnMenuMouseover = function($li) {
		var self = this,
			$ul = $li.find('ul:first'),
			parentUlNum = $ul.parents('ul').length,
			elWidth = $li.width(),
			ulWidth = $ul.width(),
			winWidth = self.$win.width(),
			elOffset = $li.offset().left;


		$li.addClass('hovered');

		if(self.menuPosition=='right' && !$li.hasClass(self.o.megaMenuClass)){
			if(parentUlNum > 1 && (elWidth + ulWidth + elOffset > winWidth)) {
				//if the drop down ul goes beyound the screen, move it on the left side
				$ul.css({
					left: -elWidth
				});
			} else if(parentUlNum === 1) {
				if(ulWidth + elOffset > winWidth) {
					$ul.css({
						left: (winWidth - 3 - (ulWidth + elOffset))
					});
				} else {
					$ul.css({
						left: 0
					});
				}
			}
		}

		// display the drop-down
		$ul.stop().fadeIn(300);
	};

	/**
	 * Hides the drop-down on mouse out.
	 * @param  {object} $li the hovered li element - jQuery object
	 */
	mn.doOnMenuMouseout = function($li) {
		var $ul = $li.find('ul:first');
		$li.removeClass('hovered');

		$ul.stop().fadeOut( 300);
	};

	/**
	 * Inits the mobile navigation menu.
	 */
	mn.initMobileMenu = function(){
		var self = this,
			$menu = $('<div />', {
				'class': self.o.mobMenuClass,
				html: self.$menu.html()
			}).insertAfter($(self.o.mobPrecedingElSel));

		self.mobile = {
			opened : false,
			inAnimation : false,
			$menuBtn : $(self.o.mobBtnSel),
			$menu : $menu
		};

		//remove the already added element styles
		$menu.find('ul').css('width', '').css('left', '').css('right','');

		//append a toggle arrow to the elements that contain submenus
		$menu.find('ul li').has('ul').each(function(){
			$(this).append('<div class="'+self.o.mobArrowClass+'"><span></span></div>');
		});

		self.bindMobileEventHandlers();
	};


	/**
	 * Binds the event handlers to the menu navigation.
	 */
	mn.bindMobileEventHandlers = function(){
		var self = this,
			m = self.mobile;

		//menu button click handler
		m.$menuBtn.on('click', function(){
			self.toggleMobileMenu();
		});

		//hide the mobile menu
		self.$win.on('resize', function(){
			if(!m.$menuBtn.is(':visible') && (m.$menu && m.opened)){
				m.$menu.hide();
				m.opened = false;
			}
		});

		m.$menu.find('li:has(ul) a[href="#"],'+'.'+self.o.mobArrowClass).on('click', function(e){
			var $submenu = $(this).siblings('ul:first'),
				$arrow = e.target.nodeName.toLowerCase()=='span' ?
					$(this) : $(this).siblings('.'+self.o.mobArrowClass);
			self.toggleMobileSubMenu($submenu, $(this));
		});
	};

	/**
	 * Toggles the mobile menu.
	 */
	mn.toggleMobileMenu = function(){
		var self = this,
			m = self.mobile;

		if(!m.inAnimation) {
			if(!m.opened) {
				//show the menu
				m.inAnimation = true;
				m.$menu.animate({
					height: 'show'
				}, function() {
					m.opened = true;
					m.inAnimation = false;
				});
			} else {
				//hide the menu
				m.inAnimation = true;
				m.$menu.animate({
					height: 'hide'
				}, function() {
					m.opened = false;
					m.inAnimation = false;
				});
			}
		}
	};

	/**
	 * Toggles a mobile submenu.
	 * @param  {object} $ul    the ul element to display - a jQuery object
	 * @param  {object} $arrow the arrow object that has been clicked - a jQuery
	 * object
	 */
	mn.toggleMobileSubMenu = function($ul, $arrow){
		var self = this,
			m = self.mobile;

		if(!$ul.length || m.inAnimation){
			return;
		}

		m.inAnimation = true;
		$arrow.toggleClass(self.o.mobSubOpenedClass);
		if($ul.is(':visible')){
			//hide the menu
			$ul.animate({height:'hide'}, function(){
				m.inAnimation = false;
			});
		}else{
			//show the menu
			$ul.animate({height:'show'}, function(){
				m.inAnimation = false;
			});
		}

	};

    $.fn.menuNav = function ($opt) {
        return  this.each(function () {
			new menuNav(this).init();
		});
    };

    $(document).ready(function(){
        $('.container .cs_mega_menu').menuNav();
        $(window).resize(function(){
            if($(window).width()>992){
                $('#cshero-header').bind('mousewheel', function(event) {
                    event.preventDefault();
                    var scrollTop = this.scrollTop;
                    this.scrollTop = (scrollTop + ((event.deltaY * event.deltaFactor) * -1));
                });
            }else{
                $('#cshero-header').unbind('mousewheel');
            }
        }).resize();
        
      //Woo button
        $('input.minus').click(function(){
        	$(this).parent().find('input[type="number"]').get(0).stepDown();
        });
        $('input.plus').click(function(){
        	$(this).parent().find('input[type="number"]').get(0).stepUp();
        });
    });
})(jQuery);

})(jQuery);
