/* 
 * 程序入口 require 异步加载需要的模块到程序中 AMD规范 
 */
require(['jquery'], function ($){

});

require.config({
	baseUrl: "./resource/js",
　　paths: {
		"main": "main",
		"jquery": "jquery-3.2.1.min"
　　},
   // 不兼容AMD的模块
   shim: {
   		'jquery.scroll': {
   		   //该模块依赖的模块
　　　　　　deps: ['jquery'],
		   //该模块中的一个全局变量
　　　　　　exports: 'jQuery.fn.scroll'
		   //引入多个全局变量
		   //init: function() {
		   //	a: a,
		   //	b: b
		   //}
　　　　}
   }
});