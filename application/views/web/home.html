<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>homey</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="styley.css"/>
<script style="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set

var Application = function() {
	// event constants
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.SIZE_STATE_NAME = "data-is-view-scaled";

	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.prefix = "--web-";
	this.applicationStylesheet = null;
	this.mediaQueryDictionary = {};
	this.statesDictionary = {};
	this.states = [];
	this.views = {};
	this.viewIds = [];
	this.viewQueries = {};
	this.viewScale = 1;
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250; // 2000;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		self.collectViews();
		self.collectMediaQueries();
		self.setViewOptions(view);

		
		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.showNavigationControls || self.singlePageApplication) {
				self.syncronizeViewToURL();
			}
	
			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}
	
			self.initialized = true;
		}
		
		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);
			
			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}
	
		if (self.showUpdateNotification) {
			self.showNotification();
		}
	
		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH 
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers 
	 * or the last modified property from the byte array 
	 * (BETA)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;
		
		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send: 
					// 
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
					// has been blocked by CORS policy: 
					// Cross origin requests are only supported for protocol schemes: 
					// http, data, chrome, chrome-extension, https.
					// 
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					// 
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
					// 
					// DOM7011: The code on this page disabled back and forward caching.

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						console.log("Couldn't find page to check for updates");
					}
					
					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			console.log("Refresh failed for the following reason:")
			console.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
				
				if (self.refreshRequest.status === 2 || 
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;
						
						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							pageChanged = true;
						}

					}

					
					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					console.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				console.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1))";
		notification.setAttribute("style", styleRule);

		notification.className= "PageRefreshedClass";
		
		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				notification.parentNode.removeChild(notification);
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header 
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}
		
		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";
		
		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}
			
			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 3;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
	
			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// Errors happen when script loads before stylesheet or loading an external css locally
			// SecurityError: The operation is insecure.
			// Firefox: InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet
			console.log(error);
		}
	}

	/**
	 * If single page application hide all of the views except first
	 **/
	self.hideViews = function(selectIndex) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==selectIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					self.disableMediaQuery(rule);
				}
				
				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectIndex ? view : null;
	}

	self.showView = function(view) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" ||  display=="none") {
				view.style.display = "block";
			}
		}
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);
				
				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}
		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE 
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = event.currentTarget.value/100;
		var view = self.getVisibleView();
		self.setViewScaleValue(view, value, false, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById("ViewZoomSliderInput");
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		
		if (slider) {
			slider["value"] = scale * 100;
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;
		
		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);
			
			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;
			
			// scale large view to fit if scale to fit is enabled
			//if (isViewLargerThanViewport && scaleViewsToFit) {
			if (self.scaleViewsToFit) {
				//setViewScaleValue(view, scale, true);
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	self.getViewTranslateYValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var translateY = parseFloat(matrixArray[5]);
		}

		return translateY;
	}

	self.getViewTop = function(view) {
		var top = getComputedStyle(view).top;

		return top;
	}

	self.setViewScaleValue = function(view, desiredScale, scaleToFit, centerVertically) {
		var transform = getComputedStyle(view).transform;
		var scaleNeededToFit = self.getViewFitToViewportScale(view, self.enableScaleUp);
		var isViewLargerThanViewport = scaleNeededToFit<1;
		var shrunkToFit = false;
		
		if (scaleToFit && (isViewLargerThanViewport || self.enableScaleUp)) {
			desiredScale = scaleNeededToFit;
			shrunkToFit = true;
		}

		if (isNaN(desiredScale)) {
			desiredScale = 1;
		}

		desiredScale = self.getShortNumber(desiredScale);

		self.updateSliderValue(desiredScale);

		transform = self.getCSSPropertyValueForElement(view.id, "transform");

		if (transform!=null) {
			var horizontalCenter = transform.indexOf("translateX")!=-1;
			var verticalCenter = transform.indexOf("translateY")!=-1;
			var horizontalAndVerticalCenter = (horizontalCenter && verticalCenter) || (transform.indexOf("translate(")!=-1);
			var topPosition = null;
			var leftPosition = null;
			var translateY = null;
			var translateX = "-50%";
			var centerForNavigation = self.showNavigationControls!=null && self.scaleViewsToFit;

			//if (horizontalAndVerticalCenter || horizontalCenter || verticalCenter) {
			if (horizontalAndVerticalCenter || centerForNavigation) {
				translateX = "-50%";

				// if view is smaller than viewport or center vertically is true then center vertically
				if (shrunkToFit || centerVertically) {
					translateX = "-50%";
					translateY = "-50%";
					topPosition = "50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					translateY = "0";
					topPosition = "0";
					leftPosition = "0";
				}
				
				view.style.transform = "translateX(" + translateX + ") translateY(" + translateY + ") scale(" + desiredScale + ")";

				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}
				//view.style.transform = "translate(-50%,-50%) scale(" + desiredScale + ")";
			}
			else if (horizontalCenter) {
				translateY = shrunkToFit ? "-50%" : "0%";
				view.style.transform = "translateY(" + translateY + ") translateX(-50%) scale(" + desiredScale + ")";

				// this next function needs work
				//topPosition = getVerticallyCenteredTopValue(view);

				if (shrunkToFit) {
					view.style.top = "50%";
				}
				else {
					view.style.top = "0";
				}
			}
			else if (verticalCenter) {
				view.style.transform = "translateY(-50%) scale(" + desiredScale + ")";
			}
			else {
				view.style.transform = "scale(" + desiredScale + ")";
			}

			if (desiredScale!=1) {
				// attempt to anchor to the top as scaled up
				//view.style.top = null;
			}
		}

		if (shrunkToFit) {
			return scaleNeededToFit;
		}

		return desiredScale;
	}

	self.getVerticallyCenteredTopValue = function(view) {
		var originalTransform = view.style.transform;
		var originalTop = view.style.top;
		var transform = null;

		view.style.transform = "translateY(-50%)" + originalTransform;
		view.style.top = "50%";
		var translateY = self.getViewTranslateYValue(view);
		view.style.transform = originalTransform;
		view.style.top = originalTop;
		return translateY;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		
		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;
		
		// listen for both events 
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}
		
		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && document.getElementById(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getViewQueries = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		var viewIds = self.getViewIds();
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();

		try {
			//var rules = self.getStylesheetRules();
			//var styleSheet = self.getApplicationStylesheet();

			/*
			viewIds = rules[1].selectorText.split(/\,?\s+?#/);
			if (viewIds[0]=="*") {
				viewIds = rules[2].selectorText.split(/\,?\s+?#/);
			}
			*/
		}
		catch(error) {
			console.log("For the page functionality to work the first two style declarations must be the generated ones.");
			return;
		}
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = document.getElementById(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = document.getElementById(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = window.getComputedStyle(view).display;
		
				if (display=="block") {
					return view;
				}
			}
		}

		return null;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = window.location.hash;
		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}
		return view;
	}

	self.getViewPreferenceBoolean = function(view, property) {
		var value = window.getComputedStyle(view).getPropertyValue(property);
		var type = typeof value;
		
		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return null;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;
			
			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];
				
				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;
					
					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];
						
						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
							
							if (mediaRule.style && property in mediaRule.style) {
								value = mediaRule.style.getPropertyValue(property);
								//console.log(property+":" + value);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && property in cssRule.style) {
							value = cssRule.style.getPropertyValue(property);
							//console.log(property+":" + value);
							values.push(value);
						}
					}
				}
			}
		}
		
		return values.pop();
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			self.views[id] = view;
		}
		
		self.viewIds = viewIds;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = null;
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		
		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];
			
			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				
				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];
					var mediaId = null;

					if (k<2) {
						mediaId = mediaRule.selectorText.replace(/[#|\s|*]?/g, "");
						
						if (viewIds.indexOf(mediaId)!=-1) {
							self.mediaQueryDictionary[mediaId] = cssRule;
							self.addState(mediaId, cssRule);
							break;
						}
					}
					else {
						break;
					}
				}
			}
			else {

				if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
					continue;
				}
			}
		}
	}

	self.addState = function(name, cssRule) {
		var state = {name:name, rule:cssRule};
		self.states.push(name);
		self.statesDictionary[name] = state;
	}

	self.hasState = function(name) {
		
		if (self.states.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	self.goToState = function(name, maintainPreviousState) {
		var state = self.statesDictionary[name];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(event);
		}
	}

	self.resizeHandler = function(event) {
		if (self.scaleViewsOnResize) {
			var view = self.getVisibleView();
			self.scaleViewToFit(view);
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.hashChangeHandler = function(event) {
		var fragment = window.location.hash ? window.location.hash.replace("#", "") : "";
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;
			
			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport 
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}
			
			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, 1, true, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.getStackArray = function(error) {
		var value = "";
		
		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {
			 
		  }
		}
		
		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.match(/\\n/gm);
	 
		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace("at ","");
			 return value;
		  }) : null;
	 
		  if (newArray && newArray[0]=="getStackTrace") {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="getStackArray") {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="getFunctionName") {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="object") {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="log") {
			 newArray.shift();
		  }
	 
			return newArray;
		}
		
		return null;
	}

	this.log = function(value) {
		console.log.apply(this, [value]);
	}
	
	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

var application = new Application();
window.application = application;
</script>
</head>
<body>
<div id="Web___2">
	<div id="User_Guide">
		<span>User Guide</span>
	</div>
	<div id="Kelola_Pengetahuan">
		<div id="Tab_ini_membuat_pengguna_dapat">
			<span>Tab ini membuat pengguna dapat mengelola data pengetahuan yang akan dijadikan sebagai data respon chatbot.</span>
		</div>
		<div id="Kelola_Pengetahuan_A7_Text_242">
			<span>Kelola Pengetahuan</span>
		</div>
		<svg class="Path_363" viewBox="0 0 16 16">
			<path id="Path_363" d="M 13.30000019073486 5.199999809265137 L 14.40000057220459 3.099999904632568 L 13.00000095367432 1.699999928474426 L 10.90000152587891 2.799999952316284 C 10.60000133514404 2.599999904632568 10.20000171661377 2.5 9.80000114440918 2.399999856948853 L 9 0 L 7 0 L 6.199999809265137 2.299999952316284 C 5.900000095367432 2.400000095367432 5.5 2.5 5.199999809265137 2.700000047683716 L 3.099999904632568 1.600000023841858 L 1.600000023841858 3.099999904632568 L 2.700000047683716 5.199999809265137 C 2.5 5.5 2.400000095367432 5.900000095367432 2.299999952316284 6.199999809265137 L 0 7 L 0 9 L 2.299999952316284 9.800000190734863 C 2.399999856948853 10.19999980926514 2.599999904632568 10.5 2.700000047683716 10.90000057220459 L 1.600000023841858 13 L 3 14.39999961853027 L 5.099999904632568 13.29999923706055 C 5.400000095367432 13.49999904632568 5.799999713897705 13.59999942779541 6.199999809265137 13.69999885559082 L 7 16 L 9 16 L 9.800000190734863 13.69999980926514 C 10.19999980926514 13.59999942779541 10.5 13.39999961853027 10.90000057220459 13.30000019073486 L 13 14.40000057220459 L 14.39999961853027 13.00000095367432 L 13.29999923706055 10.90000152587891 C 13.49999904632568 10.60000133514404 13.59999942779541 10.20000171661377 13.69999885559082 9.80000114440918 L 16 9 L 16 7 L 13.69999980926514 6.199999809265137 C 13.60000038146973 5.900000095367432 13.5 5.5 13.30000019073486 5.199999809265137 Z M 8 11 C 6.300000190734863 11 5 9.699999809265137 5 8 C 5 6.300000190734863 6.300000190734863 5 8 5 C 9.699999809265137 5 11 6.300000190734863 11 8 C 11 9.699999809265137 9.699999809265137 11 8 11 Z">
			</path>
		</svg>
	</div>
	<div id="Riwayat">
		<div id="Tab_ini_berisikan_riwayat_perc">
			<span>Tab ini berisikan riwayat percakapan yang telah dilakukan oleh user.</span>
		</div>
		<div id="Riwayat_A7_Text_244">
			<span>Riwayat</span>
		</div>
		<div id="icon_Invoices">
			<svg class="Path_102" viewBox="1 0 14 16">
				<path id="Path_102" d="M 14 0 L 2 0 C 1.399999976158142 0 1 0.4000000059604645 1 1 L 1 16 L 4 14 L 6 16 L 8 14 L 10 16 L 12 14 L 15 16 L 15 1 C 15 0.4000000059604645 14.60000038146973 0 14 0 Z M 12 10 L 4 10 L 4 8 L 12 8 L 12 10 Z M 12 6 L 4 6 L 4 4 L 12 4 L 12 6 Z">
				</path>
			</svg>
		</div>
	</div>
	<div id="Home">
		<div id="Tab_ini_berisikan_halaman_awal">
			<span>Tab ini berisikan halaman awal dan tata cara penggunaan web ini.</span>
		</div>
		<div id="Home_A7_Text_246">
			<span>Home</span>
		</div>
		<div id="icon_home">
			<svg class="Path_357" viewBox="0 0 16 16">
				<path id="Path_357" d="M 15.58104991912842 5.186039924621582 L 8.581049919128418 0.186039924621582 C 8.233389854431152 -0.06201007962226868 7.766599655151367 -0.06201007962226868 7.41894006729126 0.186039924621582 L 0.4189400672912598 5.186039924621582 C -0.03027993440628052 5.507329940795898 -0.1347699165344238 6.131839752197266 0.1865200698375702 6.58105993270874 C 0.506830096244812 7.031260013580322 1.132810115814209 7.133790016174316 1.581050157546997 6.81397008895874 L 2 6.514709949493408 L 2 15 C 2 15.55224990844727 2.447269916534424 16 3 16 L 13 16 C 13.55272960662842 16 14 15.55224990844727 14 15 L 14 6.514709949493408 C 14.34891033172607 6.76393985748291 14.59648036956787 7 14.99901962280273 7 C 15.31151962280273 7 15.61815929412842 6.854489803314209 15.81346988677979 6.581049919128418 C 16.13476943969727 6.131840229034424 16.03026962280273 5.507319927215576 15.58104991912842 5.186039924621582 Z M 12 14 L 10 14 L 10 11 C 10 9.895389556884766 9.104550361633301 9 8 9 C 6.895449638366699 9 6 9.895389556884766 6 11 L 6 14 L 4 14 L 4 5.086120128631592 L 8 2.229000091552734 L 12 5.086120128631592 L 12 14 Z">
				</path>
			</svg>
		</div>
	</div>
	<div id="Navbar">
		<div id="Notification">
			<svg class="Notification_Icon" viewBox="0 0 16 16">
				<path id="Notification_Icon" d="M 6.000244140625 14.00039672851562 L 9.9998779296875 14.00039672851562 C 9.9998779296875 15.10019683837891 9.099853515625 16.00019836425781 8.0001220703125 16.00019836425781 C 6.9002685546875 16.00019836425781 6.000244140625 15.10019683837891 6.000244140625 14.00039672851562 Z M 0.9998779296875 13.00049591064453 C 0.4005126953125 13.00049591064453 0 12.59999847412109 0 12.00059509277344 C 0 11.40029907226562 0.4005126953125 11.00070190429688 0.9998779296875 11.00070190429688 L 1.500244140625 11.00070190429688 C 2.1995849609375 10.30049896240234 2.9996337890625 9.30059814453125 2.9996337890625 8.000099182128906 L 2.9996337890625 5.000396728515625 C 2.9996337890625 2.20050048828125 5.2001953125 0 8.0001220703125 0 C 10.7999267578125 0 12.99951171875 2.20050048828125 12.99951171875 5.000396728515625 L 12.99951171875 8.000099182128906 C 12.99951171875 9.30059814453125 13.7996826171875 10.30049896240234 14.4998779296875 11.00070190429688 L 15.000244140625 11.00070190429688 C 15.599609375 11.00070190429688 16.0001220703125 11.40029907226562 16.0001220703125 12.00059509277344 C 16.0001220703125 12.59999847412109 15.599609375 13.00049591064453 15.000244140625 13.00049591064453 L 0.9998779296875 13.00049591064453 Z">
				</path>
			</svg>
			<svg class="Notification_Badge">
				<ellipse id="Notification_Badge" rx="4" ry="4" cx="4" cy="4">
				</ellipse>
			</svg>
		</div>
		<svg class="Chat_Icon" viewBox="0 0 15.999 15.999">
			<path id="Chat_Icon" d="M 11.3067626953125 13.88969993591309 C 10.885498046875 13.95990085601807 10.448974609375 13.9995002746582 9.9998779296875 13.9995002746582 C 8.555419921875 13.9995002746582 7.2305908203125 13.61700057983398 6.1947021484375 12.97889995574951 C 6.29736328125 12.98160076141357 6.3963623046875 12.99960041046143 6.499755859375 12.99960041046143 C 10.6595458984375 12.99960041046143 14.1236572265625 10.34730052947998 14.8526611328125 6.860700130462646 C 15.5709228515625 7.60230016708374 15.999267578125 8.512200355529785 15.999267578125 9.499500274658203 C 15.999267578125 10.4246997833252 15.626708984375 11.28420066833496 14.9876708984375 11.99970054626465 L 14.9993896484375 11.99970054626465 L 14.9993896484375 15.99930000305176 L 11.3067626953125 13.88969993591309 Z M 0.9998779296875 8.421300888061523 C 0.369873046875 7.573500156402588 0 6.57450008392334 0 5.499900341033936 C 0 2.46150016784668 2.90966796875 0 6.499755859375 0 C 10.08984375 0 12.9996337890625 2.46150016784668 12.9996337890625 5.499900341033936 C 12.9996337890625 8.537400245666504 10.08984375 10.99980068206787 6.499755859375 10.99980068206787 C 5.495361328125 10.99980068206787 4.5477294921875 10.80179977416992 3.698974609375 10.45800018310547 L 0.9998779296875 11.99970054626465 L 0.9998779296875 8.421300888061523 Z">
			</path>
		</svg>
		<svg class="Support_Iocn" viewBox="0 0 16 16">
			<path id="Support_Iocn" d="M 8 0 C 3.599999904632568 0 0 3.599999904632568 0 8 C 0 12.39999961853027 3.599999904632568 16 8 16 C 12.39999961853027 16 16 12.39999961853027 16 8 C 16 3.599999904632568 12.39999961853027 0 8 0 Z M 8 10 C 6.900000095367432 10 6 9.100000381469727 6 8 C 6 6.900000095367432 6.900000095367432 6 8 6 C 9.100000381469727 6 10 6.900000095367432 10 8 C 10 9.100000381469727 9.100000381469727 10 8 10 Z M 8 2 C 8.899999618530273 2 9.800000190734863 2.200000047683716 10.60000038146973 2.599999904632568 L 9.043999671936035 4.156000137329102 C 8.282999992370605 3.949000120162964 7.716999530792236 3.949000120162964 6.954999923706055 4.156000137329102 L 5.400000095367432 2.599999904632568 C 6.199999809265137 2.200000047683716 7.099999904632568 2 8 2 Z M 2 8 C 2 7.099999904632568 2.200000047683716 6.199999809265137 2.599999904632568 5.400000095367432 L 4.156000137329102 6.956000328063965 C 3.949000120162964 7.717000484466553 3.949000120162964 8.282999992370605 4.156000137329102 9.045000076293945 L 2.599999904632568 10.60000038146973 C 2.200000047683716 9.800000190734863 2 8.899999618530273 2 8 Z M 8 14 C 7.099999904632568 14 6.199999809265137 13.80000019073486 5.400000095367432 13.39999961853027 L 6.956000328063965 11.8439998626709 C 7.717000484466553 12.05099964141846 8.282999992370605 12.05099964141846 9.045000076293945 11.8439998626709 L 10.60000038146973 13.39999961853027 C 9.800000190734863 13.80000019073486 8.899999618530273 14 8 14 Z M 13.39999961853027 10.60000038146973 L 11.8439998626709 9.044000625610352 C 12.05099964141846 8.283000946044922 12.05099964141846 7.717000484466553 11.8439998626709 6.955000877380371 L 13.39999961853027 5.400000095367432 C 13.80000019073486 6.199999809265137 14 7.099999904632568 14 8 C 14 8.899999618530273 13.80000019073486 9.800000190734863 13.39999961853027 10.60000038146973 Z">
			</path>
		</svg>
		<div id="Search_Input">
			<div id="Search_transactions__invoices_">
				<span>Search transactions, invoices or help</span>
			</div>
			<div id="icon_search">
				<svg class="icon_search_A7_Path_142" viewBox="0 0 16 16">
					<path id="icon_search_A7_Path_142" d="M 12.69999980926514 11.22981357574463 C 13.59999942779541 10.03726673126221 14.09999942779541 8.645962715148926 14.09999942779541 7.055900573730469 C 14.10000038146973 3.180124044418335 11 0 7.099999904632568 0 C 3.199999809265137 0 0 3.180124044418335 0 7.055900096893311 C 0 10.93167686462402 3.200000047683716 14.11180019378662 7.099999904632568 14.11180019378662 C 8.699999809265137 14.11180019378662 10.19999980926514 13.61490631103516 11.29999923706055 12.72049617767334 L 14.29999923706055 15.70186328887939 C 14.49999904632568 15.90062046051025 14.79999923706055 16 14.99999904632568 16 C 15.19999885559082 16 15.49999904632568 15.90062046051025 15.69999885559082 15.70186328887939 C 16.09999847412109 15.30434799194336 16.09999847412109 14.70807456970215 15.69999885559082 14.31055927276611 L 12.69999980926514 11.22981357574463 Z M 7.099999904632568 12.0248441696167 C 4.300000190734863 12.0248441696167 2 9.838508605957031 2 7.055900096893311 C 2 4.273292064666748 4.300000190734863 1.987577557563782 7.099999904632568 1.987577557563782 C 9.899999618530273 1.987577557563782 12.19999980926514 4.273292064666748 12.19999980926514 7.055900096893311 C 12.19999980926514 9.838508605957031 9.899999618530273 12.0248441696167 7.099999904632568 12.0248441696167 Z">
					</path>
				</svg>
			</div>
		</div>
		<svg class="Divider">
			<rect id="Divider" rx="0" ry="0" x="0" y="0" width="1" height="28">
			</rect>
		</svg>
		<svg class="Navbar_BG">
			<rect id="Navbar_BG" rx="0" ry="0" x="0" y="0" width="1639" height="70">
			</rect>
		</svg>
		<div id="Sign_Out">
			<span>Sign Out</span>
		</div>
		<div id="User_Menu">
			<div id="Username">
				<span>Setting</span>
			</div>
			<div id="small_down">
				<svg class="Path_26" viewBox="2.6 4.6 11 7">
					<path id="Path_26" d="M 8.09999942779541 11.60000038146973 L 2.599999666213989 6.041176319122314 L 4.02592658996582 4.599999904632568 L 8.09999942779541 8.717647552490234 L 12.17407512664795 4.599999904632568 L 13.59999942779541 6.041176319122314 L 8.09999942779541 11.60000038146973 Z">
					</path>
				</svg>
			</div>
			<div id="Username_A7_Text_250">
				<span>Wira</span>
			</div>
		</div>
	</div>
	<div id="Side_Menu">
		<svg class="Sidebar_BG">
			<rect id="Sidebar_BG" rx="0" ry="0" x="0" y="0" width="281" height="1080">
			</rect>
		</svg>
		<div id="Main_Menu">
			<div id="Kelola_Pengetahuan_A7_Group_222">
				<svg class="BG">
					<rect id="BG" rx="0" ry="0" x="0" y="0" width="281" height="53">
					</rect>
				</svg>
				<div id="Kelola">
					<span>Kelola Pengetahuan</span>
				</div>
				<div id="icon_setting">
					<svg class="Path_108" viewBox="0 0 16 16">
						<path id="Path_108" d="M 13.30000019073486 5.199999809265137 L 14.40000057220459 3.099999904632568 L 13.00000095367432 1.699999928474426 L 10.90000152587891 2.799999952316284 C 10.60000133514404 2.599999904632568 10.20000171661377 2.5 9.80000114440918 2.399999856948853 L 9 0 L 7 0 L 6.199999809265137 2.299999952316284 C 5.900000095367432 2.400000095367432 5.5 2.5 5.199999809265137 2.700000047683716 L 3.099999904632568 1.600000023841858 L 1.600000023841858 3.099999904632568 L 2.700000047683716 5.199999809265137 C 2.5 5.5 2.400000095367432 5.900000095367432 2.299999952316284 6.199999809265137 L 0 7 L 0 9 L 2.299999952316284 9.800000190734863 C 2.399999856948853 10.19999980926514 2.599999904632568 10.5 2.700000047683716 10.90000057220459 L 1.600000023841858 13 L 3 14.39999961853027 L 5.099999904632568 13.29999923706055 C 5.400000095367432 13.49999904632568 5.799999713897705 13.59999942779541 6.199999809265137 13.69999885559082 L 7 16 L 9 16 L 9.800000190734863 13.69999980926514 C 10.19999980926514 13.59999942779541 10.5 13.39999961853027 10.90000057220459 13.30000019073486 L 13 14.40000057220459 L 14.39999961853027 13.00000095367432 L 13.29999923706055 10.90000152587891 C 13.49999904632568 10.60000133514404 13.59999942779541 10.20000171661377 13.69999885559082 9.80000114440918 L 16 9 L 16 7 L 13.69999980926514 6.199999809265137 C 13.60000038146973 5.900000095367432 13.5 5.5 13.30000019073486 5.199999809265137 Z M 8 11 C 6.300000190734863 11 5 9.699999809265137 5 8 C 5 6.300000190734863 6.300000190734863 5 8 5 C 9.699999809265137 5 11 6.300000190734863 11 8 C 11 9.699999809265137 9.699999809265137 11 8 11 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Riwayat_A7_Group_224">
				<svg class="BG_A7_Rectangle_141">
					<rect id="BG_A7_Rectangle_141" rx="0" ry="0" x="0" y="0" width="281" height="53">
					</rect>
				</svg>
				<div id="Riwayat_A7_Text_252">
					<span>Riwayat</span>
				</div>
				<div id="icon_Invoices_A7_Group_225">
					<svg class="Path_102_A7_Path_145" viewBox="1 0 14 16">
						<path id="Path_102_A7_Path_145" d="M 14 0 L 2 0 C 1.399999976158142 0 1 0.4000000059604645 1 1 L 1 16 L 4 14 L 6 16 L 8 14 L 10 16 L 12 14 L 15 16 L 15 1 C 15 0.4000000059604645 14.60000038146973 0 14 0 Z M 12 10 L 4 10 L 4 8 L 12 8 L 12 10 Z M 12 6 L 4 6 L 4 4 L 12 4 L 12 6 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Home_A7_Group_226">
				<svg class="BG_A7_Rectangle_142">
					<rect id="BG_A7_Rectangle_142" rx="0" ry="0" x="0" y="0" width="281" height="53">
					</rect>
				</svg>
				<div id="Home_A7_Text_253">
					<span>Home</span>
				</div>
				<div id="icon_home_A7_Group_227">
					<svg class="Path_357_A7_Path_146" viewBox="0 0 16 16">
						<path id="Path_357_A7_Path_146" d="M 15.58104991912842 5.186039924621582 L 8.581049919128418 0.186039924621582 C 8.233389854431152 -0.06201007962226868 7.766599655151367 -0.06201007962226868 7.41894006729126 0.186039924621582 L 0.4189400672912598 5.186039924621582 C -0.03027993440628052 5.507329940795898 -0.1347699165344238 6.131839752197266 0.1865200698375702 6.58105993270874 C 0.506830096244812 7.031260013580322 1.132810115814209 7.133790016174316 1.581050157546997 6.81397008895874 L 2 6.514709949493408 L 2 15 C 2 15.55224990844727 2.447269916534424 16 3 16 L 13 16 C 13.55272960662842 16 14 15.55224990844727 14 15 L 14 6.514709949493408 C 14.34891033172607 6.76393985748291 14.59648036956787 7 14.99901962280273 7 C 15.31151962280273 7 15.61815929412842 6.854489803314209 15.81346988677979 6.581049919128418 C 16.13476943969727 6.131840229034424 16.03026962280273 5.507319927215576 15.58104991912842 5.186039924621582 Z M 12 14 L 10 14 L 10 11 C 10 9.895389556884766 9.104550361633301 9 8 9 C 6.895449638366699 9 6 9.895389556884766 6 11 L 6 14 L 4 14 L 4 5.086120128631592 L 8 2.229000091552734 L 12 5.086120128631592 L 12 14 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Kirim_Pesan">
				<svg class="BG_A7_Rectangle_143">
					<rect id="BG_A7_Rectangle_143" rx="0" ry="0" x="0" y="0" width="281" height="53">
					</rect>
				</svg>
				<div id="Pesan">
					<span>Pesan</span>
				</div>
				<div id="icon_chat_notification">
					<svg class="Chat_Icon_A7_BooleanGroup_24" viewBox="0 0 16 16">
						<path id="Chat_Icon_A7_BooleanGroup_24" d="M 11.3073148727417 13.89031505584717 C 10.88601493835449 13.96051788330078 10.4494514465332 14.00012016296387 10.00038146972656 14.00012016296387 C 8.555871963500977 14.00012016296387 7.230917930603027 13.61760330200195 6.195002555847168 12.9794750213623 C 6.297619342803955 12.98217296600342 6.396690368652344 13.00017642974854 6.500094890594482 13.00017642974854 C 10.66000270843506 13.00017642974854 14.12434387207031 10.34775829315186 14.85339260101318 6.861003875732422 C 15.57160949707031 7.602636337280273 16 8.512578010559082 16 9.499921798706055 C 16 10.42516136169434 15.62744903564453 11.28469944000244 14.98840999603271 12.00023174285889 L 15.00012874603271 12.00023174285889 L 15.00012874603271 16.00000762939453 L 11.3073148727417 13.89031505584717 Z M 0.9999692440032959 8.421672821044922 C 0.3698921203613281 7.573835372924805 0 6.57479190826416 0 5.500144004821777 C 0 2.461609363555908 2.909798145294189 0 6.500094890594482 0 C 10.09029483795166 0 13.00028896331787 2.461609363555908 13.00028896331787 5.500144004821777 C 13.00028896331787 8.537777900695801 10.09029483795166 11.00028705596924 6.500094890594482 11.00028705596924 C 5.495596408843994 11.00028705596924 4.547919750213623 10.80227756500244 3.699118137359619 10.45846176147461 L 0.9999692440032959 12.00023174285889 L 0.9999692440032959 8.421672821044922 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Hover">
				<svg class="BG_A7_Path_147" viewBox="0 0 281 53">
					<path id="BG_A7_Path_147" d="M 0 0 L 281 0 L 281 53 L 0 53 L 0 0 Z">
					</path>
				</svg>
				<svg class="Vertical_Line">
					<rect id="Vertical_Line" rx="0" ry="0" x="0" y="0" width="5" height="53">
					</rect>
				</svg>
			</div>
		</div>
		<div id="Logo">
			<svg class="BG_A7_Path_148" viewBox="0 0 281 79">
				<path id="BG_A7_Path_148" d="M 0 0 L 281 0 L 281 79 L 0 79 L 0 0 Z">
				</path>
			</svg>
			<div id="Logo_A7_Text_255">
				<span>Chatbot Informasi Kampus <br/>POLBAN</span>
			</div>
		</div>
	</div>
</div>
</body>
</html>