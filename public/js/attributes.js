!function(t){function e(r){if(n[r])return n[r].exports;var i=n[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,e),i.l=!0,i.exports}var n={};e.m=t,e.c=n,e.d=function(t,n,r){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:r})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=7)}({7:function(t,e,n){t.exports=n("lOxd")},lOxd:function(t,e){function n(){var t=$("#add_attribute_target");r(),$("#attribute_add").on("click",function(e){return e.preventDefault(),$("#attribute_template").clone().removeClass("hidden").removeAttr("id").insertBefore(t),r(),!1}),$("#block_add").click(function(e){return e.preventDefault(),$("#block_template").clone().removeClass("hidden").removeAttr("id").insertBefore(t),r(),!1}),$("#text_add").click(function(e){return e.preventDefault(),$("#text_template").clone().removeClass("hidden").removeAttr("id").insertBefore(t),r(),!1}),$("#checkbox_add").click(function(e){return e.preventDefault(),$("#checkbox_template").clone().removeClass("hidden").removeAttr("id").insertBefore(t),r(),!1}),$.each($('[data-toggle="private"]'),function(){$(this).hasClass("fa-lock")?$(this).prop("title",$(this).data("private")):$(this).prop("title",$(this).data("public"))})}function r(){$(".entity-attributes").sortable(),$.each($(".attribute_delete"),function(){$(this).unbind("click"),$(this).on("click",function(){$(this).parent().parent().parent().remove()})}),$.each($('[data-toggle="private"]'),function(){$(this).click(function(t){$(this).hasClass("fa-lock")?($(this).removeClass("fa-lock").addClass("fa-unlock-alt").prop("title",$(this).data("public")),$(this).parent().find("input:hidden").val("0")):($(this).removeClass("fa-unlock-alt").addClass("fa-lock").prop("title",$(this).data("private")),$(this).parent().find("input:hidden").val("1"))})})}$(document).ready(function(){$("#add_attribute_target").length>0&&n()})}});