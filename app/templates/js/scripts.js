!function(){for(var method,noop=function(){},methods=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"],length=methods.length,console=window.console=window.console||{};length--;)method=methods[length],console[method]||(console[method]=noop)}(),function($){var $window=$(window),$winWidth=$window.width(),$header=($(".posts-wrap").find("article"),$(".header")),$buttonsWrap=$header.find(".buttons-wrap"),$menuWrap=$header.find(".menu-wrap"),$searchWrap=$header.find(".search-wrap"),$headerBtn=$buttonsWrap.find(".toggle");$(document).ready(function(){$headerBtn.on("click",function(){var $index=$(this).data("show");"menu-wrap"===$index?$searchWrap.slideUp(function(){$menuWrap.slideToggle()}):$menuWrap.slideUp(function(){$searchWrap.slideToggle()})}),$('[class*="col-"]').fitVids()}),$window.load(function(){}),$window.resize(function(){$winWidth=$window.width(),$winWidth>=992?($menuWrap.show(),$searchWrap.show()):($menuWrap.hide(),$searchWrap.hide())})}(jQuery);