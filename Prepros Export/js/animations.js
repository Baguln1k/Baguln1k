var controllerParallax = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "130%"}});
var controllerTLNo = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "0.7", duration: "0" , reverse:false}});
var controllerTL = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "1", duration: "0" , reverse:true}});
var controllerTL50 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "0.7", duration: "0" , reverse:true}});
var controllerParallax2 = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "0.4", duration: "100%"}});









//Global  elements Animation
var objTitles = {};
$(".no-touch .jsTitleAnime").each(function (index, elem) {
	var title = $(this);
	objTitles[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitles[index].from(title, 1, {opacity:0, y:80, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});
//Global  elements Animation
var objTitles2 = {};
$(".no-touch .jsTitleAnime2").each(function (index, elem) {
	var title = $(this);
	objTitles2[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitles2[index].from(title, 2, {opacity:0, y:100, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});


var objTitlesFade = {};
$(".no-touch  .jsTitleAnimeFade").each(function (index, elem) {
	var title = $(this);
	objTitlesFade[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesFade[index].from(title, 0.6, {opacity:0,  ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});

var objTitlesFade = {};
$(".no-touch  .jsTitleAnimeFade2").each(function (index, elem) {
	var title = $(this);
	objTitlesFade[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesFade[index].from(title, 1, {opacity:0,  ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL50);
});

var objTitlesScale = {};
$(".no-touch .jsTitleAnimeScale").each(function (index, elem) {
	var title = $(this);
	objTitlesScale[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesScale[index].from(title, 1, {opacity:0, scale:2, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});
var objTitlesScaleFrom = {};
$(".no-touch .jsTitleAnimeScaleFrom").each(function (index, elem) {
	var title = $(this);
	objTitlesScaleFrom[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesScaleFrom[index].from(title, 1, { scale:0, opacity:0, ease: Back.easeOut.config(2.7)} ))
	.duration(1000)
	.addTo(controllerTL);
});
var objTitlesSwag = {};
$(".no-touch .jsTitleAnimeSwag").each(function (index, elem) {
	var title = $(this);
	objTitlesSwag[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesSwag[index].from(title, 1, {width:0,height:0} ))
	.duration(1000)
	.addTo(controllerTL);
});
var objTitlesScaleFrom2 = {};
$(".no-touch .jsTitleAnimeScaleFrom2").each(function (index, elem) {
	var title = $(this);
	objTitlesScaleFrom2[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesScaleFrom2[index].from(title, 1, { scale:0, opacity:0} ))
	.duration(1000)
	.addTo(controllerTL);
});
var objTitlesLeft1 = {};
$(".no-touch .jsTitleAnimeLeft").each(function (index, elem) {
	var title = $(this);
	objTitlesLeft1[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesLeft1[index].from(title, 1, {opacity:0, x:-50, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});

var objTitlesLeft2 = {};
$(".no-touch .jsTitleAnimeLeft2").each(function (index, elem) {
	var title = $(this);
	objTitlesLeft2[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesLeft2[index].from(title, 1, {opacity:0, x:-100, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});
var objTitlesTop = {};
$(".no-touch .jsTitleAnimeTop").each(function (index, elem) {
	var title = $(this);
	objTitlesTop[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesTop[index].from(title, 1, {opacity:0, y:-100, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});
var objTitlesRight = {};
$(".no-touch .jsTitleAnimeRight").each(function (index, elem) {
	var title = $(this);
	objTitlesRight[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objTitlesRight[index].from(title, 1, {opacity:0, x:50, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});

var objWidth = {};
$(".no-touch .jsAnimeWidth").each(function (index, elem) {
	var title = $(this);
	objWidth[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objWidth[index].from(title, 2, {width:0, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});

var objHeight = {};
$(".no-touch .jsAnimeHeight").each(function (index, elem) {
	var title = $(this);
	objHeight[index] = new TimelineLite();
	new ScrollMagic.Scene({triggerElement: elem})
	.setTween(objHeight[index].from(title, 2, {height:0, ease: Power1.easeInOut} ))
	.duration(1000)
	.addTo(controllerTL);
});




jQuery(document).ready(function($) {
	controllerParallax.update();
	controllerTL.update();
	controllerTL50.update();
	
});