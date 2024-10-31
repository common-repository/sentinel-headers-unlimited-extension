<?php
/**
 * Plugin Name: Sentinel Headers Unlimited Extension
 * Plugin URI: https://www.tentacleplugins.com/
 * Description:  Sentinel Headers Unlimited Extension makes your site more secure by implementing enhanced security rules that provide huge levels of protection. It is important that your site uses this plugin. This step is important to submit your site and/or domain to an approved HSTS preload list. Google maintains an official list that is used by Chrome, Firefox, Opera, Safari, IE11, and Edge. You can submit your site to the official HSTS preload list. Cross Site Request Forgery (CSRF) is a common attack and installing Sentinel Headers Unlimited Extension will help mitigate CSRF on your WordPress site. Security has never been so simple and free!
 * Text Domain: sentinel-headers-unlimited-extension
 * Author: 🐙  Andrea Ferro
 * Author URI: https://www.linkedin.com/in/andrea-ferro-55046186/      
 * Version: 0.0.03           
 * Domain Path: /languages                                                               
 *          __
 *      ___( o)>
 *      \ <_. )
 *       `---'   iron3     
 *        
 * -------------------------------------------------------------------------
 * Sentinel Headers Unlimited Extension plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Sentinel Headers Unlimited Extension.
 *
 * Sentinel Headers Unlimited Extension is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * Sentinel Headers Unlimited Extension is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Sentinel Headers Unlimited Extension. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2014-2022 by Sentinel Headers Unlimited Extension plugin by Andrea Ferro.
 * @license   AGPLv3 https://www.gnu.org/licenses/agpl-3.0.html
 * -------------------------------------------------------------------------
*/

function SentinelHeadersUnlimitedExtensionSHUEregisterSettings() {
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUErun');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEruch');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEec');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEacao');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEacam');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEacah');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUExcsp');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUExcto');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUErp');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEcsp');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEcspch');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEcoop');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUExfo');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEcorp');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUExpcdp');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUExxp');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEfp');
	register_setting('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup', 'SentinelHeadersUnlimitedExtensionSHUEpp');
}
add_action('admin_init', 'SentinelHeadersUnlimitedExtensionSHUEregisterSettings');

function SentinelHeadersUnlimitedExtensionSHUEcustomSettingPage() {
   add_options_page('Custom Plugin', 'Sentinel Headers Unlimited Extension', 'manage_options', 'enhanced-csp-and-hsts-security-headers-sentinel-setting-url', 'SentinelHeadersUnlimitedExtensionSHUEpageForm');
}
add_action('admin_menu', 'SentinelHeadersUnlimitedExtensionSHUEcustomSettingPage');

function SentinelHeadersUnlimitedExtensionSHUEsettingMenuPage() {
	add_menu_page('Custom Plugin', 'Sentinel', 'manage_options', 'enhanced-csp-and-hsts-security-headers-sentinel-setting-url', 'SentinelHeadersUnlimitedExtensionSHUEpageForm', 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8Y2xpcFBhdGggaWQ9ImNsaXAtaWNvbjQiPgogICAgICA8cmVjdCB3aWR0aD0iMjAiIGhlaWdodD0iMjAiLz4KICAgIDwvY2xpcFBhdGg+CiAgPC9kZWZzPgogIDxnIGlkPSJpY29uNCIgY2xpcC1wYXRoPSJ1cmwoI2NsaXAtaWNvbjQpIj4KICAgIDxnIGlkPSJSYWdncnVwcGFfMiIgZGF0YS1uYW1lPSJSYWdncnVwcGEgMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTM5IDE1NS4xOTIpIj4KICAgICAgPGcgaWQ9IlJhZ2dydXBwYV8xIiBkYXRhLW5hbWU9IlJhZ2dydXBwYSAxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTM4IC0xNTUpIj4KICAgICAgICA8cGF0aCBpZD0iVHJhY2NpYXRvXzEiIGRhdGEtbmFtZT0iVHJhY2NpYXRvIDEiIGQ9Ik05NzAuMjczLDg0MC43YTcuMTg3LDcuMTg3LDAsMCwwLDEuMi0yLjkyNHEuMDg3LS41MTUuMjEzLTEuMDE5LS40ODQuMTkzLS45NTguNDE2LS4xNy42MjQtLjI4NiwxLjI2NWEuNDgzLjQ4MywwLDAsMS0uNDc2LjQuNDIxLjQyMSwwLDAsMS0uMDgyLDBoMGEuNDguNDgsMCwwLDEtLjM5My0uNTUzYy4wMzItLjE3My4wNjctLjM0Ni4xLS41MTdhMS4wMzEsMS4wMzEsMCwwLDAtLjQ0LjljLS4wMDYuMDM0LS4wMDYuMjYtLjAwNi42NTcsMCwwLDAsLjIsMCwuMiwwLC4wNjcuMDA3LjEzNC4wMTEuMmEuNDI2LjQyNiwwLDAsMSwuMzY4LjFsMCwwYS40MjkuNDI5LDAsMCwxLC4wMzcuNjA2cS0uMTY3LjE5Mi0uMzQ4LjM2OGMuMDEzLjIxMi4wMjcuNDI1LjA0Ni42MzdxLjAxNi4yMTIuMDM2LjQyNEE3Ljg2Nyw3Ljg2NywwLDAsMCw5NzAuMjczLDg0MC43WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTk2OS4xNDcgLTgzNS41NTUpIiBmaWxsPSIjZmZmIi8+CiAgICAgICAgPHBhdGggaWQ9IlRyYWNjaWF0b18yIiBkYXRhLW5hbWU9IlRyYWNjaWF0byAyIiBkPSJNMTAwOS40NTMsODIyLjEyOGEzLjgzLDMuODMsMCwwLDEsMy4zODktMi44NSwxLjAzMSwxLjAzMSwwLDAsMC0uNTczLS43MzNxLS43NTItLjQxNi0xLjUzNC0uNzVhMy4zMzQsMy4zMzQsMCwwLDAtMi41MjQsMi42NDEsMTguMzM2LDE4LjMzNiwwLDAsMS00LjMxNCw4LjkyMi40OS40OSwwLDAsMS0uNjg0LjA0NWwwLDBhLjQ3OC40NzgsMCwwLDEtLjA0NC0uNjc0LDE3LjMzOSwxNy4zMzksMCwwLDAsNC4wOTEtOC40NTcsNC4yOTIsNC4yOTIsMCwwLDEsMi4xNDUtMi45ODEsMTcuMDY1LDE3LjA2NSwwLDAsMC0xLjk3My0uNTI5LDUuNzU4LDUuNzU4LDAsMCwwLTEuNzI5LDMuMjEzLDE1LjM1LDE1LjM1LDAsMCwxLS40NzQsMnYwYS40ODUuNDg1LDAsMCwxLS42LjMyOGgwYS40NzguNDc4LDAsMCwxLS4zMTctLjYsMTQuNDM2LDE0LjQzNiwwLDAsMCwuNDQ1LTEuODc5LDYuNzEyLDYuNzEyLDAsMCwxLDEuNTQxLTMuMjYxcS0uODUxLS4xMTUtMS43MDgtLjE0NWE4LjE1NCw4LjE1NCwwLDAsMC0xLjI2NiwzLjE2NiwxMi44MTMsMTIuODEzLDAsMCwxLTIuMTIxLDUuMiwxMy43NjMsMTMuNzYzLDAsMCwxLTQuMyw0LjAxNWMuMDE5LjA0OC4wMzguMS4wNTguMTQzYTEyLjYsMTIuNiwwLDAsMCwuNTMyLDEuMTc4LDE1LjEyMywxNS4xMjMsMCwwLDAsNC45MDYtNC41MywxNi4xMzcsMTYuMTM3LDAsMCwwLC44OTUtMS40NzEuNDg1LjQ4NSwwLDAsMSwuNjUzLS4ybC4wMDcsMGEuNDc4LjQ3OCwwLDAsMSwuMi42NDQsMTYuODQzLDE2Ljg0MywwLDAsMS0uOTU0LDEuNTU5LDE2LjAxNSwxNi4wMTUsMCwwLDEtNS4yNDUsNC44MjMsMTIuNTkxLDEyLjU5MSwwLDAsMCwuOTIxLDEuMzA2LDE3LjQ1LDE3LjQ1LDAsMCwwLDEuOTktMS4zNTEuNDg1LjQ4NSwwLDAsMSwuNjguMDczbC4wMDcuMDA5YS40NzguNDc4LDAsMCwxLS4wNzcuNjcxQTE4LjQxNywxOC40MTcsMCwwLDEsOTk5LjUxOSw4MzNhMTIuNTgyLDEyLjU4MiwwLDAsMCwxLjE2MSwxLjA4NkEyMC4xOCwyMC4xOCwwLDAsMCwxMDA5LjQ1Myw4MjIuMTI4WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTk5NS4yNTUgLTgxNi40MjEpIiBmaWxsPSIjZmZmIi8+CiAgICAgICAgPHBhdGggaWQ9IlRyYWNjaWF0b18zIiBkYXRhLW5hbWU9IlRyYWNjaWF0byAzIiBkPSJNMTExNC42OCw5NDQuNzc0Yy4wMjIsMCwuMDQ1LDAsLjA2Nywwdi0uMDEyYS44NTEuODUxLDAsMCwwLC4yMjYtLjA2OCwxMi42LDEyLjYsMCwwLDAsNi44MTMtNy4wMTMsMjEuNTYxLDIxLjU2MSwwLDAsMCwxLjQ4OC01LjY4LDIzLjQsMjMuNCwwLDAsMS04LjgsMTIuNzI4Ljg5My44OTMsMCwwLDAsLjEzNC4wMzN2LjAxMkMxMTE0LjYzNSw5NDQuNzc4LDExMTQuNjU3LDk0NC43NzYsMTExNC42OCw5NDQuNzc0WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTExMDUuODczIC05MjUuMTYxKSIgZmlsbD0iI2ZmZiIvPgogICAgICAgIDxwYXRoIGlkPSJUcmFjY2lhdG9fNCIgZGF0YS1uYW1lPSJUcmFjY2lhdG8gNCIgZD0iTTk4Ny43MzUsODI0LjMxNGExMS45MTYsMTEuOTE2LDAsMCwwLDEuOTY5LTQuODIxLDkuMTIyLDkuMTIyLDAsMCwxLDEuMDgyLTMsMTcuMTE0LDE3LjExNCwwLDAsMC0xLjcwOS4xNTQsMTAuNTIyLDEwLjUyMiwwLDAsMC0uODA1LDIuNjE2LDEwLjQ1MywxMC40NTMsMCwwLDEtMS43NDMsNC4yNSwxMS4yNTksMTEuMjU5LDAsMCwxLTMuMDg3LDMuMDIycS4yLjcyLjQ1MSwxLjQyNUExMi43OTQsMTIuNzk0LDAsMCwwLDk4Ny43MzUsODI0LjMxNFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05ODIuNTk2IC04MTYuNDg0KSIgZmlsbD0iI2ZmZiIvPgogICAgICAgIDxwYXRoIGlkPSJUcmFjY2lhdG9fNSIgZGF0YS1uYW1lPSJUcmFjY2lhdG8gNSIgZD0iTTEwODQuNTY2LDg4My4zODNhMS40MTcsMS40MTcsMCwwLDEsMS0xYy4wMjgtLjQ0MS4wNDctLjg4My4wNzQtMS4zMjQsMCwwLDAtLjA4NywwLS4xNDZhMi44NjMsMi44NjMsMCwwLDAtMi40NzYsMi4xMjEsMjEuMTE2LDIxLjExNiwwLDAsMS04LjkxNCwxMi4zMjgsMTIuNTU5LDEyLjU1OSwwLDAsMCwxLjM2NC44MjlBMjIuNDIyLDIyLjQyMiwwLDAsMCwxMDg0LjU2Niw4ODMuMzgzWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEwNjguMDIyIC04NzcuMDk0KSIgZmlsbD0iI2ZmZiIvPgogICAgICAgIDxwYXRoIGlkPSJUcmFjY2lhdG9fNiIgZGF0YS1uYW1lPSJUcmFjY2lhdG8gNiIgZD0iTTk3Ni45ODMsODI4LjZhOS41MjksOS41MjksMCwwLDAsMS41ODYtMy44NzEsMTEuNDY5LDExLjQ2OSwwLDAsMSwuNjI1LTIuMjU5LDE3LjAzMSwxNy4wMzEsMCwwLDAtMS42ODUuNDQ2LDEyLjc3LDEyLjc3LDAsMCwwLS4zNzIsMS41NzYsOC4xNDQsOC4xNDQsMCwwLDEtMS4zNTYsMy4zLDguODMyLDguODMyLDAsMCwxLTEuNjMzLDEuNzhxLjEyLjguMywxLjU5MUExMC4zLDEwLjMsMCwwLDAsOTc2Ljk4Myw4MjguNloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05NzMuODUxIC04MjIuMTExKSIgZmlsbD0iI2ZmZiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4K', 3);
}
add_action('admin_menu', 'SentinelHeadersUnlimitedExtensionSHUEsettingMenuPage');

function SentinelHeadersUnlimitedExtensionSHUEheartStyle() {
	wp_register_style('SentinelHeadersUnlimitedExtensionSHUEheartStyle', plugins_url('/assets/css/style-dist.css',__FILE__ ));
	wp_enqueue_style('SentinelHeadersUnlimitedExtensionSHUEheartStyle');
}
add_action( 'admin_init','SentinelHeadersUnlimitedExtensionSHUEheartStyle');

function SentinelHeadersUnlimitedExtensionSHUEpageForm() { 
	$SentinelHeadersUnlimitedExtensionSHUEserverCheck = strtolower($_SERVER['SERVER_NAME']);
	$SentinelHeadersUnlimitedExtensionSHUEserverRepCheck = str_replace('www.','',$SentinelHeadersUnlimitedExtensionSHUEserverCheck);
	$SentinelHeadersUnlimitedExtensionSHUEserverCheckSuccess = str_replace('.it','',$SentinelHeadersUnlimitedExtensionSHUEserverRepCheck); 
?>

<div class="wrap SentinelHeadersUnlimitedExtensionSHUEbkgsuccess"><strong>Your website is finally safe! 🚀🚀 &nbsp</strong>Implement enhanced security headers, HSTS preload and custom CSP (Content Security Policy) for optimum website protection.</div>

<div class="wrap SentinelHeadersUnlimitedExtensionSHUEbkgpadw">
	<div class="SentinelHeadersUnlimitedExtensionSHUEbub1459bk">
		<div class="SentinelHeadersUnlimitedExtensionSHUEbub14591"></div>
		<div class="SentinelHeadersUnlimitedExtensionSHUEbub14592"></div>
	</div>

	<img class="SentinelHeadersUnlimitedExtensionSHUE_svgsize" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iODAiIGhlaWdodD0iODAiIHZpZXdCb3g9IjAgMCA4MCA4MCI+CiAgPGRlZnM+CiAgICA8bGluZWFyR3JhZGllbnQgaWQ9ImxpbmVhci1ncmFkaWVudCIgeDE9Ii0wLjM1OSIgeTE9IjAuNjc3IiB4Mj0iMS40NDgiIHkyPSIwLjMwNSIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giPgogICAgICA8c3RvcCBvZmZzZXQ9IjAuMDAyIiBzdG9wLWNvbG9yPSIjMDAxNGNlIi8+CiAgICAgIDxzdG9wIG9mZnNldD0iMC4yMTIiIHN0b3AtY29sb3I9IiMzNDI1Y2QiLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIwLjQ0OCIgc3RvcC1jb2xvcj0iIzY5MzZjZCIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjAuNjU0IiBzdG9wLWNvbG9yPSIjOGY0M2NkIi8+CiAgICAgIDxzdG9wIG9mZnNldD0iMC44MTgiIHN0b3AtY29sb3I9IiNhNjRiY2QiLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIwLjkyIiBzdG9wLWNvbG9yPSIjYWY0ZWNkIi8+CiAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPGNsaXBQYXRoIGlkPSJjbGlwLWljb24xIj4KICAgICAgPHJlY3Qgd2lkdGg9IjgwIiBoZWlnaHQ9IjgwIi8+CiAgICA8L2NsaXBQYXRoPgogIDwvZGVmcz4KICA8ZyBpZD0iaWNvbjEiIGNsaXAtcGF0aD0idXJsKCNjbGlwLWljb24xKSI+CiAgICA8ZyBpZD0iUmFnZ3J1cHBhXzMiIGRhdGEtbmFtZT0iUmFnZ3J1cHBhIDMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0wLjA5NCAtMC4xMTcpIj4KICAgICAgPGcgaWQ9IlJhZ2dydXBwYV8xIiBkYXRhLW5hbWU9IlJhZ2dydXBwYSAxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjU2NSAwLjU2NSkiPgogICAgICAgIDxyZWN0IGlkPSJSZXR0YW5nb2xvXzEiIGRhdGEtbmFtZT0iUmV0dGFuZ29sbyAxIiB3aWR0aD0iNzkuMDE1IiBoZWlnaHQ9Ijc5LjAxNSIgcng9IjEwLjE5MyIgZmlsbD0idXJsKCNsaW5lYXItZ3JhZGllbnQpIi8+CiAgICAgIDwvZz4KICAgICAgPGcgaWQ9IlJhZ2dydXBwYV8yIiBkYXRhLW5hbWU9IlJhZ2dydXBwYSAyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNC4yMTEgMTEuMjcpIj4KICAgICAgICA8cGF0aCBpZD0iVHJhY2NpYXRvXzEiIGRhdGEtbmFtZT0iVHJhY2NpYXRvIDEiIGQ9Ik0xMi4zMSwyMC45NTFhMjEuMSwyMS4xLDAsMCwwLDMuNTM2LTguNTg1cS4yNTctMS41MTMuNjI2LTIuOTkzLTEuNDIxLjU2OC0yLjgxNSwxLjIyMi0uNSwxLjgzMy0uODQxLDMuNzE0YTEuNDE2LDEuNDE2LDAsMCwxLTEuNCwxLjE2NiwxLjIxNiwxLjIxNiwwLDAsMS0uMjQzLDBIMTEuMTdhMS40MDksMS40MDksMCwwLDEtMS4xNTQtMS42MjNjLjA5Mi0uNTA5LjItMS4wMTUuMzA2LTEuNTJhMy4wMywzLjAzLDAsMCwwLTEuMjkzLDIuNjMyYy0uMDE4LjEtLjAxOC43NjUtLjAxOCwxLjkzLS4wMTEsMCwuMDEuNTg5LDAsLjU4NS4wMTEuMi4wMjEuMzkzLjAzMi41ODlhMS4yNTgsMS4yNTgsMCwwLDEsMS4wODIuMjgxbC4wMDYuMDA2YTEuMjYsMS4yNiwwLDAsMSwuMTA4LDEuNzhjLS4zMjUuMzc4LS42NjguNzM3LTEuMDIyLDEuMDguMDM5LjYyNC4wODEsMS4yNDguMTM2LDEuODcxLjAzMS40MTQuMDY2LjgyOS4xMDUsMS4yNDNBMjIuOTU0LDIyLjk1NCwwLDAsMCwxMi4zMSwyMC45NTFaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtOS4wMDUgLTUuODM3KSIgZmlsbD0iI2ZmZiIvPgogICAgICAgIDxwYXRoIGlkPSJUcmFjY2lhdG9fMiIgZGF0YS1uYW1lPSJUcmFjY2lhdG8gMiIgZD0iTTQ4Ljg1NiwyMy45NDZhMTEuMjQ2LDExLjI0NiwwLDAsMSw5Ljk1Mi04LjM3LDMuMDI2LDMuMDI2LDAsMCwwLTEuNjgxLTIuMTUyLDQ5Ljk0NCw0OS45NDQsMCwwLDAtNC41LTIuMiw5Ljc5MSw5Ljc5MSwwLDAsMC03LjQxMyw3Ljc1NCw1My44NDgsNTMuODQ4LDAsMCwxLTEyLjY2OSwyNi4yLDEuNDM5LDEuNDM5LDAsMCwxLTIuMDA2LjEzMWwtLjAwOC0uMDA2YTEuNCwxLjQsMCwwLDEtLjEyOS0xLjk3OUE1MC45MTksNTAuOTE5LDAsMCwwLDQyLjQwOCwxOC40ODZhMTIuNjA3LDEyLjYwNywwLDAsMSw2LjMtOC43NTUsNTAuMjA5LDUwLjIwOSwwLDAsMC01Ljc5My0xLjU1MiwxNi45MTEsMTYuOTExLDAsMCwwLTUuMDc4LDkuNDM0LDQ1LjAzMiw0NS4wMzIsMCwwLDEtMS4zOTIsNS44OGwwLDBhMS40MjMsMS40MjMsMCwwLDEtMS43NjkuOTYybC0uMDEsMGExLjQsMS40LDAsMCwxLS45MzEtMS43NTMsNDIuMjEsNDIuMjEsMCwwLDAsMS4zMDgtNS41MTcsMTkuNywxOS43LDAsMCwxLDQuNTI1LTkuNTc2LDQ5Ljc1NCw0OS43NTQsMCwwLDAtNS4wMTUtLjQyNSwyMy45MTksMjMuOTE5LDAsMCwwLTMuNzE5LDkuMywzNy42MTksMzcuNjE5LDAsMCwxLTYuMjI2LDE1LjI3MSw0MC40MzEsNDAuNDMxLDAsMCwxLTEyLjYxNiwxMS43OWMuMDU3LjEzOS4xMTIuMjguMTcuNDE5YTM2LjgxNCwzNi44MTQsMCwwLDAsMS41NjIsMy40Niw0NC40NDEsNDQuNDQxLDAsMCwwLDE0LjQtMTMuMyw0Ny4zODksNDcuMzg5LDAsMCwwLDIuNjI3LTQuMzIsMS40MjYsMS40MjYsMCwwLDEsMS45MTktLjU4OWwuMDIxLjAxMWExLjQsMS40LDAsMCwxLC42LDEuODkyLDQ5LjUyNiw0OS41MjYsMCwwLDEtMi44LDQuNTc2LDQ3LjA0Nyw0Ny4wNDcsMCwwLDEtMTUuNCwxNC4xNjIsMzcuMDMzLDM3LjAzMywwLDAsMCwyLjcsMy44MzUsNTEuNDQxLDUxLjQ0MSwwLDAsMCw1Ljg0NS0zLjk2NiwxLjQyNSwxLjQyNSwwLDAsMSwyLC4yMTVsLjAyMS4wMjZhMS40LDEuNCwwLDAsMS0uMjI2LDEuOTcxLDUzLjg2LDUzLjg2LDAsMCwxLTUuNzQzLDMuOTI3LDM2Ljk3LDM2Ljk3LDAsMCwwLDMuNDA4LDMuMTlBNTkuMjYyLDU5LjI2MiwwLDAsMCw0OC44NTYsMjMuOTQ2WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTcuMTY0IC03LjE4NikiIGZpbGw9IiNmZmYiLz4KICAgICAgICA8cGF0aCBpZD0iVHJhY2NpYXRvXzMiIGRhdGEtbmFtZT0iVHJhY2NpYXRvIDMiIGQ9Ik0yNS4yMjYsNTcuMTEyYy4wNjYuMDA2LjEzMS4wMTEuMi4wMTF2LS4wMzZhMi40ODQsMi40ODQsMCwwLDAsLjY2My0uMkEzNy4wMDUsMzcuMDA1LDAsMCwwLDQ2LjA5MiwzNi4zYTYzLjMzNCw2My4zMzQsMCwwLDAsNC4zNzItMTYuNjc5LDY4LjcyNyw2OC43MjcsMCwwLDEtMjUuODMsMzcuMzc2LDIuNiwyLjYsMCwwLDAsLjM5NS4xdi4wMzZDMjUuMDk1LDU3LjEyMywyNS4xNTksNTcuMTE4LDI1LjIyNiw1Ny4xMTJaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjYzNSAwLjQ4MSkiIGZpbGw9IiNmZmYiLz4KICAgICAgICA8cGF0aCBpZD0iVHJhY2NpYXRvXzQiIGRhdGEtbmFtZT0iVHJhY2NpYXRvIDQiIGQ9Ik0yMy4xNDgsMzAuMTczYTM0Ljk4NSwzNC45ODUsMCwwLDAsNS43OC0xNC4xNTcsMjYuOCwyNi44LDAsMCwxLDMuMTc5LTguODIzcS0yLjUxNy4xLTUuMDE5LjQ1M2EzMC44OSwzMC44OSwwLDAsMC0yLjM2NCw3LjY4MywzMC43LDMwLjcsMCwwLDEtNS4xMTksMTIuNDgsMzMuMDQ1LDMzLjA0NSwwLDAsMS05LjA2NCw4Ljg3M3EuNTg5LDIuMTE1LDEuMzI0LDQuMTg2QTM3LjU3NCwzNy41NzQsMCwwLDAsMjMuMTQ4LDMwLjE3M1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjA1NyAtNy4xODIpIiBmaWxsPSIjZmZmIi8+CiAgICAgICAgPHBhdGggaWQ9IlRyYWNjaWF0b181IiBkYXRhLW5hbWU9IlRyYWNjaWF0byA1IiBkPSJNNTAuNjE0LDIxLjM3NWE0LjE1OCw0LjE1OCwwLDAsMSwyLjkyNS0yLjkzNmMuMDgyLTEuMy4xMzktMi41OTIuMjE3LTMuODg4LS4wMSwwLDAtLjI1NSwwLS40MjhhOC40MDcsOC40MDcsMCwwLDAtNy4yNzEsNi4yMjgsNjIuMDA5LDYyLjAwOSwwLDAsMS0yNi4xNzYsMzYuMiwzNi45NTksMzYuOTU5LDAsMCwwLDQsMi40MzVBNjUuODQ3LDY1Ljg0NywwLDAsMCw1MC42MTQsMjEuMzc1WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTIuMDM0IC0yLjkwOCkiIGZpbGw9IiNmZmYiLz4KICAgICAgICA8cGF0aCBpZD0iVHJhY2NpYXRvXzYiIGRhdGEtbmFtZT0iVHJhY2NpYXRvIDYiIGQ9Ik0xNy44NjgsMjUuODM2QTI3Ljk4MiwyNy45ODIsMCwwLDAsMjIuNTI0LDE0LjQ3YTMzLjc1OSwzMy43NTksMCwwLDEsMS44MzctNi42MzQsNDkuOTY1LDQ5Ljk2NSwwLDAsMC00Ljk0NiwxLjMxMSwzNy4xMzEsMzcuMTMxLDAsMCwwLTEuMDk1LDQuNjI5LDIzLjkxLDIzLjkxLDAsMCwxLTMuOTg0LDkuN0EyNS45NDQsMjUuOTQ0LDAsMCwxLDkuNTQzLDI4LjdxLjM1MiwyLjM1Mi44ODEsNC42NzFBMzAuMjM0LDMwLjIzNCwwLDAsMCwxNy44NjgsMjUuODM2WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTguNjczIC02Ljc4NSkiIGZpbGw9IiNmZmYiLz4KICAgICAgPC9nPgogICAgPC9nPgogIDwvZz4KPC9zdmc+Cg==" />
	<h2 class="SentinelHeadersUnlimitedExtensionSHUEhero2112">Sentinel Headers Unlimited Extension: The security of your website is our priority! &nbsp🛸</h2>
		
	<div class="SentinelHeadersUnlimitedExtensionSHUEgridgap1546">
		<div class="SentinelHeadersUnlimitedExtensionSHUEtxgrh1">The Sentinel Headers Unlimited Extension security plugin for WordPress is an essential and completely free plugin for protecting your WordPress site. Sentinel Headers Unlimited Extension adds custom security headers to your site to protect it from threats like phishing attacks, data theft, and more. Sentinel Headers Unlimited Extension is easy to use and lets you customize security headers to fit your needs. The plugin is compatible with all major browsers and operating systems and can be installed on any WordPress site.</div>
		<div class="SentinelHeadersUnlimitedExtensionSHUEtxgrh1">Please consider buying me a coffee to support my work on this plugin Sentinel Headers Unlimited Extension.<br /><br /><script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="tentacleplugins" data-color="#FFDD00" data-emoji=""  data-font="Inter" data-text="Buy me a coffee" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff" ></script>I create projects available to everyone for free and I like to create simple but functional projects.</div>
		<a href="https://wordpress.org/support/plugin/sentinel-headers-unlimited-extension/" class="SentinelHeadersUnlimitedExtensionSHUEbkg"><div class="SentinelHeadersUnlimitedExtensionSHUErw1"><strong>You need help with the plugin <br />Enhanced CSP and HSTS security Headers?</strong><br />  Don't worry, we'll take care of it!</div></a>
		<a href="https://it.wordpress.org/plugins/headers-security-advanced-hsts-wp/" class="SentinelHeadersUnlimitedExtensionSHUEbkg"><div class="SentinelHeadersUnlimitedExtensionSHUErw1"><strong>Don't want to customize the settings?</strong><br />  Install Headers Security Enhanced & HSTS CSP WP</div></a>
	</div>

<div class="SentinelHeadersUnlimitedExtensionSHUEgrid_settings SentinelHeadersUnlimitedExtensionSHUEselspace1128t">
<h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1440">Quick selection:<h4>
	<div class="SentinelHeadersUnlimitedExtensionSHUEselspeed1127 SentinelHeadersUnlimitedExtensionSHUEselspace1128">
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge1950"><a href="#RU">Report URI</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge1950"><a href="#RUCR">Report URI (CSP Reports)</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge1950"><a href="#RUCSPR">Content-Security-Policy (CSP Setting)</a></span></div>
	</div>
	<div class="SentinelHeadersUnlimitedExtensionSHUEselspeed1127 SentinelHeadersUnlimitedExtensionSHUEselspace1128">
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#XXP">X-XSS-Protection</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#ACAO">Access-Control-Allow-Origin</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#ACAM">Access-Control-Allow-Methods</a></span></div>
	</div>
	<div class="SentinelHeadersUnlimitedExtensionSHUEselspeed1127 SentinelHeadersUnlimitedExtensionSHUEselspace1128">
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#ACAH">Access-Control-Allow-Headers</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#ACAM">Access-Control-Allow-Methods</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#XCSP">X-Content-Security-Policy</a></span></div>
	</div>
	<div class="SentinelHeadersUnlimitedExtensionSHUEselspeed1127 SentinelHeadersUnlimitedExtensionSHUEselspace1128">
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#XCTO">X-Content-Type-Options</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#RP">Referrer-Policy</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#ET">Expect-CT</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#CSP">Content-Security-Policy</a></span></div>
	</div>
	<div class="SentinelHeadersUnlimitedExtensionSHUEselspeed1127 SentinelHeadersUnlimitedExtensionSHUEselspace1128">
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#COOP">Cross-Origin-Opener-Policy</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#FP">Feature-Policy</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#XFO">X-Frame-Options</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#PP">Permissions-Policy</a></span></div>
	</div>
	<div class="SentinelHeadersUnlimitedExtensionSHUEselspeed1127 SentinelHeadersUnlimitedExtensionSHUEselspace1128 SentinelHeadersUnlimitedExtensionSHUEbtmas1">
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#CORP">Cross-Origin-Resource-Policy</a></span></div>
		<div> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2049"><a href="#XPCDP">X-Permitted-Cross-Domain-Policies</a></span></div>
	</div>
	<form method="post" action="options.php">
		<?php settings_fields('SentinelHeadersUnlimitedExtensionSHUEoptionsGroup'); ?>
			<table class="form-table">
				<tr id="RU">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUErunFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1348">Report URI:</h4> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge1353">Beta</span></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">Report URI was created to address the lack of monitoring for security policies like CSP and other modern security features. With Report URI you can easily monitor what is happening on your site in real-time, responding more quickly and efficiently, without having to rely on user feedback. </span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUErunFieldId" name="SentinelHeadersUnlimitedExtensionSHUErun" value="<?php 
							$SentinelHeadersUnlimitedExtensionSHUErunEscSTLR = strtolower(trim(get_option('SentinelHeadersUnlimitedExtensionSHUErun')));
							$SentinelHeadersUnlimitedExtensionSHUErunSTRrpc = str_replace(' ','',$SentinelHeadersUnlimitedExtensionSHUErunEscSTLR);
							echo esc_html($SentinelHeadersUnlimitedExtensionSHUErunSTRrpc); ?>" maxlength="29" placeholder="<?php echo esc_html($SentinelHeadersUnlimitedExtensionSHUEserverCheckSuccess); ?>.report-uri.com">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox333">
						<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">Instead of using the random subdomain assigned to you, you can choose a custom subdomain to use. The subdomain must be 4-30 alphanumeric characters. Example values: "mycompany" - this would give you the address mycompany.report-uri.com or "andrea" - this would give you the address andrea.report-uri.com. <br /><b>Your current subdomain is:</b> <b class="SentinelHeadersUnlimitedExtensionSHUEttxred">
							<?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))) { echo esc_html(strtolower("$SentinelHeadersUnlimitedExtensionSHUEserverCheckSuccess")); } else { $SentinelHeadersUnlimitedExtensionSHUErunEscSTRlower = strtolower(trim(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))); $SentinelHeadersUnlimitedExtensionSHUErunREPtrimSTR = str_replace(' ','',$SentinelHeadersUnlimitedExtensionSHUErunEscSTRlower); echo esc_html($SentinelHeadersUnlimitedExtensionSHUErunREPtrimSTR); }?></b>.report-uri.com</span></p>
						</div>
					</td>
				</tr>
				<tr id="RUCR">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEruchFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1348">Report URI (CSP Reports):<h4> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge1353">Beta</span></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">By default, violation reports are not sent. To enable violation reporting, it is necessary to Enable the Report URI (CSP Reports).</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEruchFieldId" name="SentinelHeadersUnlimitedExtensionSHUEruch" value="1" <?php checked("1", get_option('SentinelHeadersUnlimitedExtensionSHUEruch'), true ); ?>> Activated<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEruchFieldId" name="SentinelHeadersUnlimitedExtensionSHUEruch" value="0" <?php checked("0", get_option('SentinelHeadersUnlimitedExtensionSHUEruch'), true ); ?> <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUEruch'))) { echo esc_html("checked");} else { }?> > Disabled
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox333">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">When you enable the CSP Reports function, one of the following messages appears in the browser's devtools DOM (Document Object Model) console, indicating that a CSP-related problem has occurred. <b>For example:</b> The page settings have blocked the loading of a resource in %2$S ("%1$S"), Attempting to send report to an invalid URI: "%1$S". When you disable CSP Reports, no message appears in the browser's devtools DOM (Document Object Model) console. <b class="SentinelHeadersUnlimitedExtensionSHUEttxred">By default, the function is disabled to save important resources (it is recommended to enable it only for testing and developing your own CSP directive).</b></span></p>
						</div>
					</td>
				</tr>
				<tr id="XXP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUExxpFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">X-XSS-Protection:<h4> </label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The HTTP X-XSS-Protection response header is a feature of Internet Explorer, Chrome, and Safari that halts the loading of pages when they detect an XSS attack.</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExxpFieldId" name="SentinelHeadersUnlimitedExtensionSHUExxp" value="0" <?php checked("0", get_option('SentinelHeadersUnlimitedExtensionSHUExxp'), true ); ?>> 0<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExxpFieldId" name="SentinelHeadersUnlimitedExtensionSHUExxp" value="1" <?php checked("1", get_option('SentinelHeadersUnlimitedExtensionSHUExxp'), true ); ?>> 1<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExxpFieldId" name="SentinelHeadersUnlimitedExtensionSHUExxp" value="1; mode=block" <?php checked("1; mode=block", get_option('SentinelHeadersUnlimitedExtensionSHUExxp'), true ); ?> <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUExxp'))) { echo esc_html("checked");} else { }?> > 1; mode=block
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">If you specify none, no policy files are allowed on the target server, including any master policy. If you use master-only, only this master policy file is allowed. If you instead specify all, all policy files on this target domain are allowed.</span></p>
						</div>
					</td>
				</tr>
				<tr id="ACAO">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEacaoFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Access-Control-Allow-Origin:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The Access-Control-Allow-Origin response header indicates whether the response can be shared with requesting code from the given origin.</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEacaoFieldId" name="SentinelHeadersUnlimitedExtensionSHUEacao" value="null" <?php checked("*", get_option('SentinelHeadersUnlimitedExtensionSHUEacao'), true ); ?>> *<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEacaoFieldId" name="SentinelHeadersUnlimitedExtensionSHUEacao" value="null" <?php checked("null", get_option('SentinelHeadersUnlimitedExtensionSHUEacao'), true ); ?> <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUEacao'))) { echo esc_html("checked");} else { }?> > null
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">If no credentials are specified, the literal "*" can be used as a wildcard; this value indicates to browsers that they should allow any requesting code from any origin to access the resource. Using the wildcard with credentials results in an error. Specify the "null" origin.</span></p>
						</div>
					</td>
				</tr>
				<tr id="ACAM">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEacamFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Access-Control-Allow-Methods:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The Access-Control-Allow-Methods response header specifies one or more methods allowed when accessing a resource in response to a preflight request.</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEacamFieldId" name="SentinelHeadersUnlimitedExtensionSHUEacam" value="*" <?php checked("*", get_option('SentinelHeadersUnlimitedExtensionSHUEacam'), true ); ?>> *<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEacamFieldId" name="SentinelHeadersUnlimitedExtensionSHUEacam" value="GET,PUT,POST,DELETE" <?php checked("GET,PUT,POST,DELETE", get_option('SentinelHeadersUnlimitedExtensionSHUEacam'), true ); ?> <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUEacam'))) { echo esc_html("checked");} else { }?> > GET,PUT,POST,DELETE
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">The "*" value is used as a special wildcard value for requests without credentials (requests without HTTP cookies or HTTP authentication information). In methods with credentials, it is treated as the literal request method name "*" with no special semantics.</span></p>
						</div>
					</td>
				</tr>
				<tr id="ACAH">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEacahFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Access-Control-Allow-Headers:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The Access-Control-Allow-Headers response header is used in response to a preflight request which includes the Access-Control-Request-Headers to indicate which HTTP headers can be used during the actual request.</span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEacahFieldId" name="SentinelHeadersUnlimitedExtensionSHUEacah" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUEacah')); ?>" placeholder="Content-Type, Authorization">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
						<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">header-name, The name of a supported request header. The header may list any number of headers, separated by commas. The value "*" only counts as a special wildcard value for requests without credentials (requests without HTTP cookies or HTTP authentication information). In requests with credentials, it is treated as the literal header name "*" without special semantics. Note that the Authorization header cannot be wildcarded and always needs to be listed explicitly.</span></p>
						</div>
					</td>
				</tr>
				<tr id="XCSP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUExcspFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">X-Content-Security-Policy:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The content security policy is a computer security standard introduced to prevent cross-site scripts, clickjacking and other code injection attacks resulting from the execution of malicious content in the context of Web pages.</span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExcspFieldId" name="SentinelHeadersUnlimitedExtensionSHUExcsp" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUExcsp')); ?>" placeholder="default-src \'self\'; img-src *; media-src * data:;">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
						<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">A policy is described using a series of policy directives, each of which describes the policy for a certain resource type or policy area. Your policy should include a default-src policy directive, which is a fallback for other resource types when they don't have policies of their own. A policy needs to include a default-src or script-src directive to prevent inline scripts from running, as well as blocking the use of eval(). A policy needs to include a default-src or style-src directive to restrict inline styles from being applied from a style element or a style attribute. There are specific directives for a wide variety of types of items, so that each type can have its own policy, including fonts, frames, images, audio and video media, scripts, and workers. <b class="SentinelHeadersUnlimitedExtensionSHUEttxred">After customizing the CSP directive update the permalinks to make sure the change is triggered.</b></span></p>
						</div>
					</td>
				</tr>
				<tr id="XCTO">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUExctoFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">X-Content-Type-Options:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The X-Content-Type-Options response HTTP header is a marker used by the server to indicate that the MIME types advertised in the Content-Type headers should be followed and not be changed. The header allows you to avoid MIME type sniffing by saying that the MIME types are deliberately configured. </span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExctoFieldId" name="SentinelHeadersUnlimitedExtensionSHUExcto" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUExcto')); ?>" placeholder="nosniff">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
						<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">Blocks a request if the request destination is of type style and the MIME type is not text/css, or of type script and the MIME type is not a JavaScript MIME type.</span></p>
						</div>
					</td>
				</tr>
				<tr id="RP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUErpFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Referrer-Policy:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The Referrer-Policy HTTP header controls how much referrer information (sent with the Referer header) should be included with requests. Aside from the HTTP header.</span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUErpFieldId" name="SentinelHeadersUnlimitedExtensionSHUErp" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUErp')); ?>" placeholder="no-referrer, strict-origin-when-cross-origin">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
						<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">The following text describes the different levels of protection for the referrer when making HTTP requests. no-referrer means that no referrer will be sent, while no-referrer-when-downgrade means that the referrer will be sent when the security level remains the same or improves. If a request is made to a less secure destination, such as HTTPS→HTTP or HTTPS→file, no referrer will be sent. origin only sends the origin in the referrer, while origin-when-cross-origin sends the origin, path, and query string when making a request to the same security level (HTTP→HTTP or HTTPS→HTTPS). For cross-origin requests and requests to less secure destinations, such as HTTPS→HTTP, only the origin is sent. same-origin sends the origin, path, and query string for requests to the same domain, while strict-origin only sends the origin when the security level remains the same (HTTPS→HTTPS). If a request is made to a less secure destination, such as HTTPS→HTTP, no referrer will be sent. strict-origin-when-cross-origin is the default value and sends the origin, path, and query string when making a request to the same domain. For cross-origin requests, only the origin is sent when the security level remains the same (HTTPS→HTTPS). If a request is made to a less secure destination, such as HTTPS→HTTP, no referrer will be sent.</span></p>
						</div>
					</td>
				</tr>
				<tr id="ET">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEecFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Expect-CT:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The HTTP Expect-CT header is a response header that prevents the use of improperly issued certificates for a site and ensures that they are not missed and also allows sites to decide on the reporting or enforcement of certificate transparency requirements.</span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEecFieldId" name="SentinelHeadersUnlimitedExtensionSHUEec" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUEec')); ?>" placeholder="max-age=7776000, enforce">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
						<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">The max-age directive tells the browser how long to consider the site compliant with the Certificate Transparency (CT) policy. After this period of time expires, the browser will check compliance again. The enforce directive is optional, but if present, tells the browser to refuse connections that do not satisfy the CT policy. The report-uri directive is also optional, but if present, tells the browser where to send CT policy error reports.</span></p>
						</div>
					</td>
				</tr>
				<tr id="CSP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEcspFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Content-Security-Policy:</h4> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge2113">Beta</span></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">Content Security Policy (CSP) is an added layer of security that helps to detect and mitigate certain types of attacks, including Cross-Site Scripting (XSS) and data injection attacks. These attacks are used for everything from data theft, to site defacement, to malware distribution. </span></p></th>
					<td>
						<input type="text" class="regular-text" rows='7' cols='50' id="SentinelHeadersUnlimitedExtensionSHUEcspFieldId" name="SentinelHeadersUnlimitedExtensionSHUEcsp" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUEcsp')); ?>" placeholder="default-src https: 'self'; frame-ancestors 'self' t.co twitter.com; block-all-mixed-content;"></input>
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">A policy is described using a series of policy directives, each of which describes the policy for a certain resource type or policy area. Your policy should include a default-src policy directive, which is a fallback for other resource types when they don't have policies of their own. A policy needs to include a default-src or script-src directive to prevent inline scripts from running, as well as blocking the use of eval(). A policy needs to include a default-src or style-src directive to restrict inline styles from being applied from a style element or a style attribute. There are specific directives for a wide variety of types of items, so that each type can have its own policy, including fonts, frames, images, audio and video media, scripts, and workers. <b class="SentinelHeadersUnlimitedExtensionSHUEttxred">After customizing the CSP directive update the permalinks to make sure the change is triggered.</b></span></p>
						</div>  
					</td>
				</tr>
				<tr id="RUCSPR">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEcspchFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1348">Content-Security-Policy (CSP Setting):<h4> <span class="SentinelHeadersUnlimitedExtensionSHUEbadge1353">Beta</span></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The HTTP X-XSS-Protection response header is a feature of Internet Explorer, Chrome, and Safari that halts the loading of pages when they detect an XSS attack.</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEcspchFieldId" name="SentinelHeadersUnlimitedExtensionSHUEcspch" value="1" <?php checked("1", get_option('SentinelHeadersUnlimitedExtensionSHUEcspch'), true ); ?>> Restrictive CSP<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEcspchFieldId" name="SentinelHeadersUnlimitedExtensionSHUEcspch" value="0" <?php checked("0", get_option('SentinelHeadersUnlimitedExtensionSHUEcspch'), true ); ?> <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUEcspch'))) { echo esc_html("checked");} else { }?> > Sentinel CSP
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox333">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize"><b class="SentinelHeadersUnlimitedExtensionSHUEttxred">Get a grade A</b> with the use of <b>Restrictive CSP</b> (includes custom CSP and plugin-configured CSP). <b class="SentinelHeadersUnlimitedExtensionSHUEttxred">Get a maximum grade of A+</b> with the use of <b>CSP Sentinel</b> (includes CSP configured by the plugin but is not restrictive).<br /><b class="SentinelHeadersUnlimitedExtensionSHUEttxred">TIP for Plesk configurations running a mix of Nginx and Apache.</b> If after enabling CSP restrictive mode you encounter the following error (upstream sent too big header while reading response header from upstream) you can resolve it as follows:<br /> 1) Login to Plesk and select your domain;<br /> 2) Under Apache and nginx settings, add the following to the Additional nginx directives:<b class="SentinelHeadersUnlimitedExtensionSHUEttxred"> proxy_buffers 8 16k; proxy_buffer_size 32k;</b><br /> 3) Click OK to apply.</span></p>
						</div>
					</td>
				</tr>
				<tr id="COOP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEcoopFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Cross-Origin-Opener-Policy:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The HTTP Cross-Origin-Opener-Policy (COOP) is a response header that allows you to ensure that a top-level document does not share a navigation context group with cross-origin documents. COOP will isolate your document and potential attackers will not be able to access your global object if they were to open it in a popup, preventing a series of attacks across origins dubbed XS-Leaks.</span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEcoopFieldId" name="SentinelHeadersUnlimitedExtensionSHUEcoop" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUEcoop')); ?>" placeholder='same-origin-allow-popups; report-to="default"'>
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">The default value for COOP is unsafe-none, which allows the document to be added to its opener's browsing context group unless the opener itself has a COOP of same-origin or same-origin-allow-popups. same-origin-allow-popups retains references to newly opened windows or tabs that either don't set COOP or that opt out of isolation by setting a COOP of unsafe-none. same-origin isolates the browsing context exclusively to same-origin documents. Cross-origin documents are not loaded in the same browsing context.</span></p>
						</div>  
					</td>
				</tr>
				<tr id="FP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEfpFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Feature-Policy:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">Feature Policy allows web developers to selectively enable, disable, and modify the behavior of certain features and APIs in the browser. It is similar to Content Security Policy but controls features instead of security behavior.</span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEfpFieldId" name="SentinelHeadersUnlimitedExtensionSHUEfp" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUEfp')); ?>" placeholder="payment 'self'; display-capture 'self'">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">The web provides a variety of functions and APIs that could pose privacy or security risks if abused. In some cases, it may be desirable to limit how such functionality is used on a website. There are policy-controlled features that allow functionality to be enabled or disabled for specific origins or frames within a website. Where available, the feature integrates with the Permissions API, or feature-specific mechanisms to check if the feature is available. Example: Gamepad, Geolocation, Gyroscope, Magnetometer, Microphone.</span></p>
						</div>  
					</td>
				</tr>
				<tr id="XFO">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUExfoFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">X-Frame-Options:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The X-Frame-Options HTTP header can be used to indicate whether or not a browser should be allowed to render a page in a frame, iframe, embed, or object. The header protects users from click-jacking attacks, by ensuring that their content is not embedded in other sites.</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExfoFieldId" name="SentinelHeadersUnlimitedExtensionSHUExfo" value="DENY" <?php checked("DENY", get_option('SentinelHeadersUnlimitedExtensionSHUExfo'), true ); ?>> DENY<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExfoFieldId" name="SentinelHeadersUnlimitedExtensionSHUExfo" value="SAMEORIGIN" <?php checked("SAMEORIGIN", get_option('SentinelHeadersUnlimitedExtensionSHUExfo'), true ); ?> <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUExfo'))) { echo esc_html("checked");} else { }?> > SAMEORIGIN <br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExfoFieldId" name="SentinelHeadersUnlimitedExtensionSHUExfo" value="ALLOWALL" <?php checked("ALLOWALL", get_option('SentinelHeadersUnlimitedExtensionSHUExfo'), true ); ?>> ALLOWALL
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">If you specify DENY, not only will the browser's attempt to load the page in a frame fail when it is loaded from other sites, but attempts to do so will fail when it is loaded from the same site. If you instead specify SAMEORIGIN, you can still use the page in a frame as long as the site that includes the page in a frame is the same as the one that serves the page.</span></p>
						</div>  
					</td>
				</tr>
				<tr id="PP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEppFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Permissions-Policy:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The Feature-Policy header gives you control over which features your browser can use. You can allow or deny features in your own frame, and in any iframe elements in the document. This is useful for security, performance, and privacy.</span></p></th>
					<td>
						<input type="text" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEppFieldId" name="SentinelHeadersUnlimitedExtensionSHUEpp" value="<?php echo esc_html(get_option('SentinelHeadersUnlimitedExtensionSHUEpp')); ?>" placeholder="accelerometer=(), autoplay=(), camera=(), cross-origin-isolated=(), document-domain=(), encrypted-media=(), fullscreen=*, geolocation=(self), gyroscope=(), keyboard-map=(), magnetometer=(), microphone=(), midi=(), payment=*, picture-in-picture=(), publickey-credentials-get=(), screen-wake-lock=(), sync-xhr=(), usb=(), xr-spatial-tracking=(), gamepad=(), serial=(), window-placement=()">
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">The speaker-selection policy controls whether the current document is allowed to use the Audio Output Devices API to list and select speakers. The sync-xhr policy controls whether the current document is allowed to make synchronous XMLHttpRequest requests. The unoptimized-images policy (Experimental Non-Standard) controls whether the current document is allowed to download and display unoptimized images. The unsized-media policy (Experimental Non-Standard) controls whether the current document is allowed to change the size of media elements after the initial layout is complete. The usb policy controls whether the current document is allowed to use the WebUSB API. The screen-wake-lock policy controls whether the current document is allowed to use Screen Wake Lock API to indicate that device should not turn off or dim the screen. The web-share policy controls whether or not the current document is allowed to use the Navigator.share() of Web Share API to share text, links, images, and other content to arbitrary destinations of user's choice, e.g. mobile apps.</span></p>
						</div>  
					</td>
				</tr>
				<tr id="CORP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUEcorpFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">Cross-Origin-Resource-Policy:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">The Cross-Origin Resource Policy is a policy set by the Cross-Origin-Resource-Policy HTTP header that allows websites and applications to opt-in to protection against certain cross-origin requests (such as those issued with elements like script and img), to mitigate speculative side-channel attacks like Spectre, as well as cross-site scripting attacks.</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEcorpFieldId" name="SentinelHeadersUnlimitedExtensionSHUEcorp" value="same-site" <?php checked("same-site", get_option('SentinelHeadersUnlimitedExtensionSHUEcorp'), true ); ?>> same-site<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEcorpFieldId" name="SentinelHeadersUnlimitedExtensionSHUEcorp" value="same-origin" <?php checked("same-origin", get_option('SentinelHeadersUnlimitedExtensionSHUEcorp'), true ); ?>> same-origin<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUEcorpFieldId" name="SentinelHeadersUnlimitedExtensionSHUEcorp" value="cross-origin" <?php checked("cross-origin", get_option('SentinelHeadersUnlimitedExtensionSHUEcorp'), true ); ?>  <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUEcorp'))) { echo esc_html("checked");} else { }?> > cross-origin
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
						 <p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">If you specify same-site, this directive allowed users to read resources only when the browser recognizes their requests from the same site (registered domain). If you use cross-site, this directive allowed users that requests from different sites can also read resources. If instead you specify same-origin, this directive allowed users to read resources only when the browser recognizes their requests from the same origin ([schema, host, port]).</span></p>
						</div>
					</td>
				</tr>
				<tr id="XPCDP">
					<th class="SentinelHeadersUnlimitedExtensionSHUEcltab1636"><label for="SentinelHeadersUnlimitedExtensionSHUExpcdpFieldId"><h4 class="SentinelHeadersUnlimitedExtensionSHUEtboxy1314">X-Permitted-Cross-Domain-Policies:</h4></label>
					<p><span class="SentinelHeadersUnlimitedExtensionSHUEctd3">A cross-domain policy file is an XML document that authorizes a Web client, such as Adobe Acrobat, to access and manage data across domains. When clients request content hosted on a source domain and that content makes direct requests to a different domain, the remote domain must host a cross-domain policy file that grants access to the source domain, allowing the client to continue the transaction.</span></p></th>
					<td class="SentinelHeadersUnlimitedExtensionSHUEts03">
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExpcdpFieldId" name="SentinelHeadersUnlimitedExtensionSHUExpcdp" value="none" <?php checked("none", get_option('SentinelHeadersUnlimitedExtensionSHUExpcdp'), true ); ?> <?php if (empty(get_option('SentinelHeadersUnlimitedExtensionSHUExpcdp'))) { echo esc_html("checked");} else { }?> > none<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExpcdpFieldId" name="SentinelHeadersUnlimitedExtensionSHUExpcdp" value="master-only" <?php checked("master-only", get_option('SentinelHeadersUnlimitedExtensionSHUExpcdp'), true ); ?>> master-only<br />
						<input type="radio" class="regular-text" id="SentinelHeadersUnlimitedExtensionSHUExpcdpFieldId" name="SentinelHeadersUnlimitedExtensionSHUExpcdp" value="all" <?php checked("all", get_option('SentinelHeadersUnlimitedExtensionSHUExpcdp'), true ); ?>> all
						<div class="SentinelHeadersUnlimitedExtensionSHUEbox103">
							<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxexttextSize">If you specify none, no policy files are allowed on the destination server, including any master policy files. If you use master-only, only this master policy file is allowed. If you specify all, all policy files on this destination domain are allowed.</span></p>
						</div>
					</td>
				</tr>
			</table>
			<?php submit_button(); ?>
	</form>
</div>
</div>

<?php } 

function SentinelHeadersUnlimitedExtensionSHUEenableFlush() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}
register_activation_hook( __FILE__, 'SentinelHeadersUnlimitedExtensionSHUEenableFlush' );

function SentinelHeadersUnlimitedExtensionSHUEdeactive() {
remove_filter('mod_rewrite_rules', 'SentinelHeadersUnlimitedExtensionSHUEaddHtaccess');
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}
register_deactivation_hook( __FILE__, 'SentinelHeadersUnlimitedExtensionSHUEdeactive' );

function SentinelHeadersUnlimitedExtensionSHUEwidgets() {
	wp_add_dashboard_widget(
		'wpexplorer_dashboard_widget',
		'<img class="SentinelHeadersUnlimitedExtensionSHUE_ic002" src="data:image/png;base64,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" />Sentinel Headers Unlimited Extension',
		'SentinelHeadersUnlimitedExtensionSHUEwidgetFunction'
	);
}
add_action( 'wp_dashboard_setup', 'SentinelHeadersUnlimitedExtensionSHUEwidgets' );

function SentinelHeadersUnlimitedExtensionSHUEwidgetFunction() {
	$SentinelHeadersUnlimitedExtensionSHUEserverResponseCheck = strtolower($_SERVER['SERVER_NAME']);
	$SentinelHeadersUnlimitedExtensionSHUEresponseCheck = str_replace('www.','',$SentinelHeadersUnlimitedExtensionSHUEserverResponseCheck);
	$SentinelHeadersUnlimitedExtensionSHUEresponseCheckSuccess = str_replace('.it','',$SentinelHeadersUnlimitedExtensionSHUEresponseCheck);
	echo '<h2><span class="SentinelHeadersUnlimitedExtensionSHUEtxtxe">🚀 <b>Congratulations</b> you are safe!</span></h2><br><b>The Sentinel Headers Unlimited Extension</b> The Sentinel Headers Unlimited Extension project implements HTTP response headers that your site can use to increase the security of your Web site. The Sentinel Headers Unlimited Extension automatically sets all Best Practices. You will also be able to change the headers simply in the plugin settings.<br /><br /><span style="color:#0ca533;"></span>'; 
	echo '<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxtxe"><b>Your current subdomain is: </b></span>'.esc_url($SentinelHeadersUnlimitedExtensionSHUEresponseCheckSuccess).'.report-uri.com</p><br />';
	echo '<script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="tentacleplugins" data-color="#FFDD00" data-emoji=""  data-font="Inter" data-text="Buy me a coffee" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff" ></script>';  
	echo '<p><span class="SentinelHeadersUnlimitedExtensionSHUEtxextSizeCenter">Security is a right, not a privilege. Plugin version 1.0.03</span></p><br />'; 
}

function SentinelHeadersUnlimitedExtensionSHUEsendHeader() {
	header( 'Strict-Transport-Security: max-age=63072000; includeSubDomains; preload' );
}
add_action( 'send_headers', 'SentinelHeadersUnlimitedExtensionSHUEsendHeader' );

function SentinelHeadersUnlimitedExtensionSHUEheaders( $headers ) {
	$SentinelHeadersUnlimitedExtensionSHUEserverRequest = strtolower($_SERVER['SERVER_NAME']);
	$SentinelHeadersUnlimitedExtensionSHUEserverRequestCheck = str_replace('www.','',$SentinelHeadersUnlimitedExtensionSHUEserverRequest);
	$SentinelHeadersUnlimitedExtensionSHUEserverControllCheck = strtolower($_SERVER['SERVER_NAME']);
	$SentinelHeadersUnlimitedExtensionSHUEserverReportCheck = str_replace('.it','',$SentinelHeadersUnlimitedExtensionSHUEserverRequestCheck);
	$SentinelHeadersUnlimitedExtensionSHUEserverCheckReplace = str_replace('.','',$SentinelHeadersUnlimitedExtensionSHUEserverRequestCheck);
	
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEruch'))) { if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))) { $SentinelHeadersUnlimitedExtensionSHUErunSTR = strtolower(trim(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))); $SentinelHeadersUnlimitedExtensionSHUErunRPE = str_replace(' ','',$SentinelHeadersUnlimitedExtensionSHUErunSTR); } else { $SentinelHeadersUnlimitedExtensionSHUErunRPE = strtolower("$SentinelHeadersUnlimitedExtensionSHUEserverReportCheck");} $SentinelHeadersUnlimitedExtensionSHUEruchVerificationCheck = sanitize_text_field("default-src https:; report-uri https://".esc_html($SentinelHeadersUnlimitedExtensionSHUErunRPE).".report-uri.com/r/d/csp/reportOnly"); } else { $SentinelHeadersUnlimitedExtensionSHUEruchVerificationCheck = " Disabled "; }
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))) { $SentinelHeadersUnlimitedExtensionSHUErunSTLR = strtolower(trim(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))); $SentinelHeadersUnlimitedExtensionSHUErunSTRLW = str_replace(' ','',$SentinelHeadersUnlimitedExtensionSHUErunSTLR);} else { $SentinelHeadersUnlimitedExtensionSHUErunSTRLW = strtolower("$SentinelHeadersUnlimitedExtensionSHUEserverReportCheck");} if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEcoop'))) { $SentinelHeadersUnlimitedExtensionSHUEcoopVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEcoop')); } else { $SentinelHeadersUnlimitedExtensionSHUEcoopVerificationCheck = sanitize_text_field('same-origin-allow-popups; report-to="default"');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEcsp'))) { if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEcspch'))) { $SentinelHeadersUnlimitedExtensionSHUEcspVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEcsp')); 
	} else { if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))) { $SentinelHeadersUnlimitedExtensionSHUErunTRIMhtmlSTR = strtolower(trim(get_option('SentinelHeadersUnlimitedExtensionSHUErun')));  $SentinelHeadersUnlimitedExtensionSHUEcspRPErun = str_replace(' ','',$SentinelHeadersUnlimitedExtensionSHUErunTRIMhtmlSTR); $SentinelHeadersUnlimitedExtensionSHUEcspVerificationCheck = "report-uri https://".esc_html($SentinelHeadersUnlimitedExtensionSHUEcspRPErun).".areport-uri.com/r/d/csp/reportOnly"; } else { $SentinelHeadersUnlimitedExtensionSHUEcspRPErun = strtolower("$SentinelHeadersUnlimitedExtensionSHUEserverReportCheck"); $SentinelHeadersUnlimitedExtensionSHUEcspVerificationCheck = "report-uri https://".esc_html($SentinelHeadersUnlimitedExtensionSHUEcspRPErun).".breport-uri.com/r/d/csp/reportOnly";}}
	} else { if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEcspch'))) { $SentinelHeadersUnlimitedExtensionSHUEcspVerificationCheck = sanitize_text_field("default-src https: 'self'; frame-ancestors 'self' t.co twitter.com; block-all-mixed-content; report-uri https://".esc_html($SentinelHeadersUnlimitedExtensionSHUErunSTRLW).".report-uri.com/r/d/csp/reportOnly; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.trustindex.io cdn.report-uri.com api.stripe.com static.cloudflareinsights.com https://apis.google.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://ajax.cloudflare.com https://c0.wp.com https://*.wp.com https://*.go-mpulse.net https://js.hs-scripts.com https://js.hsleadflows.net https://js.hs-banner.com https://js.hsadspixel.net https://js.hubspotfeedback.com https://js.usemessages.com https://cdnjs.buymeacoffee.com https://js.hs-analytics.net https://js.hscollectedforms.net https://js.hsforms.net https://js-na1.hs-scripts.com https://forms.hsforms.com https://static.hotjar.com https://script.hotjar.com https://maxcdn.bootstrapcdn.com https://stackpath.bootstrapcdn.com https://netdna.bootstrapcdn.com https://cdn.mxpnl.com https://cdn4.mxpnl.com https://use.fontawesome.com https://kit.fontawesome.com https://www.recaptcha.net https://recaptcha.net https://www.gstatic.com/recaptcha/ https://www.gstatic.cn/recaptcha/ https://www.google.com/recaptcha/ https://consent.cookiebot.com https://consentcdn.cookiebot.com https://www.paypal.com https://www.paypalobjects.com https://code.jquery.com https://maps.googleapis.com https://maps.google.com https://assets.quantcount.com https://rules.quantcount.com https://pixel.quantserve.com https://secure.quantserve.com https://*.ep-mimecast.ads-twitter.com https://platform.twitter.com https://en.twitter.com https://cdn.syndication.twimg.com https://analytics.twitter.com https://static.ads-twitter.com https://t.co https://eu-library.klarnaservices.com https://secure.gravatar.com https://geolocation.onetrust.com https://cdn-ukwest.onetrust.com https://*.moatads.com https://js-agent.newrelic.com https://*.nr-data.net https://js.stripe.com https://x.klarnacdn.net https://checkout.stripe.com https://www.youtube.com https://m.youtube.com https://connect.facebook.net https://graph.facebook.com https://js.facebook.com snap.licdn.com https://static-exp1.licdn.com https://content.linkedin.com https://platform.linkedin.com https://www.googletagmanager.com https://googletagmanager.com https://www.google-analytics.com https://ssl.google-analytics.com https://google-analytics.com https://cdn.cookielaw.org https://*.list-manage.com https://downloads.mailchimp.com https://chimpstatic.com https://js.driftt.com https://widget.drift.com https://player.vimeo.com https://www.vimeo.com https://f.vimeocdn.com; style-src 'self' 'unsafe-inline' 'report-sample' *.wp.com *.bootstrapcdn.com api.mapbox.com *.fontawesome.com *.licdn.com cdn.jsdelivr.net code.jquery.com content.quantcount.com ton.twimg.com platform.twitter.com secure.gravatar.com privacyportal-cdn.onetrust.com cdnjs.cloudflare.com fonts.googleapis.com checkout.stripe.com downloads.mailchimp.com; object-src 'none'; frame-src 'self' https://accounts.google.com *.hubspot.com forms.hsforms.com js.hsadspixel.net js.hscollectedforms.net js.usemessages.com *.recaptcha.net recaptcha.net https://www.google.com/recaptcha/ https://recaptcha.google.com *.vimeo.com vimeo.com *.paypal.com https://www.paypal.com *.moatads.com *.twitter.com twitter.com *.stripe.com *.stripe.network *.youtube.com www.youtube-nocookie.com *.facebook.com connect.facebook.net widgets.wp.com https://www.google.com/ www.googletagmanager.com vars.hotjar.com assets.quantcount.com https://consent.cookiebot.com maps.google.com maps.googleapis.com js.driftt.com widget.drift.com; child-src 'self' *.vimeo.com vimeo.com www.paypalobjects.com *.paypal.com platform.twitter.com www.youtube.com *.facebook.com connect.facebook.net app.hubspot.com forms.hsforms.com js.hsadspixel.net js.hscollectedforms.net js.usemessages.com www.googletagmanager.com; img-src * *.".esc_html($SentinelHeadersUnlimitedExtensionSHUEserverControllCheck)." https://".esc_html($SentinelHeadersUnlimitedExtensionSHUEserverControllCheck)." *.akstat.io *.hubspot.com cdn2.hubspot.net forms.hsforms.com www.gstatic.com/recaptcha *.vimeocdn.com *.vimeo.com *.quantserve.com *.quantcount.com cdn.jsdelivr.net files.rapidsec.com code.jquery.com data: *.wp.com *.paypal.com www.paypalobject.com cdnjs.cloudflare.com t.co *.twitter.com twitter.com script.hotjar.com blob: *.w.org *.gravatar.com *.moatpixel.com *.moatads.com *.nr-data.net *.stripe.com *.ytimg.com *.youtube.com *.googleapis.com maps.google.com maps.gstatic.com www.gstatic.com *.ggpht.com fonts.gstatic.com *.facebook.com *.facebook.net *.fbcdn.net *.linkedin.com *.licdn.com p.adsymptotic.com *.mailchimp.com *.list-manage.com about: www.googletagmanger.com www.google-analytics.com ssl.google-analytics.com www.google.com analytics.google.com; font-src 'self' cdn.jsdelivr.net cdnjs.cloudflare.com data: *.wp.com *.bootstrapcdn.com *.fontawesome.com fonts.gstatic.com fonts.googleapis.com script.hotjar.com privacyportal-cdn.onetrust.com; connect-src 'self' *.wp.com *.go-mpulse.net *.akstat.io *.hubspot.com api.hubapi.com js.usemessages.com js.hsleadflows.net js.hs-banner.com js.hubspotfeedback.com js.hsadspixel.net js.hs-analytics.net js.hs-scripts.com forms.hsforms.com *.hotjar.com wss://*.hotjar.com *.hotjar.io *.mixpanel.com cdn.mxpnl.com *.fontawesome.com *.drift.com wss://*.drift.com *.paypal.com www.paypalobjects.com *.twitter.com *.gravatar.com *.onetrust.com *.moatads.com *.moatpixel.com *.nr-data.net *.linkedin.com *.licdn.com cdn.jsdelivr.net consentcdn.cookiebot.com cdnjs.cloudflare.com vimeo.com maps.googleapis.com maps.google.com vast.quantserve.com code.jquery.com t.co twitter.com fonts.googleapis.com fonts.gstatic.com *.facebook.com connect.facebook.net www.googletagmanger.com www.google-analytics.com stats.g.doubleclick.net ampcid.google.com analytics.google.com about: cdn.cookielaw.org; manifest-src 'self'; base-uri 'self' *.moatads.com vast.quantserve.com; form-action 'self' *.facebook.com connect.facebook.net forms.hsforms.com forms.hubspot.com *.twitter.com; media-src 'self' *.w.org *.vimeo.com vimeo.com media.licdn.com *.twimg.com js.drift.com widget.driftt.com; worker-src 'self' www.recaptcha.net; upgrade-insecure-requests;"); 
	} else { if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))) { $SentinelHeadersUnlimitedExtensionSHUErunTRIMstr = strtolower(trim(get_option('SentinelHeadersUnlimitedExtensionSHUErun'))); $SentinelHeadersUnlimitedExtensionSHUEcspRPErun = str_replace(' ','',$SentinelHeadersUnlimitedExtensionSHUErunTRIMstr); $SentinelHeadersUnlimitedExtensionSHUEcspVerificationCheck = "report-uri https://".esc_html($SentinelHeadersUnlimitedExtensionSHUEcspRPErun).".report-uri.com/r/d/csp/reportOnly"; } else { $SentinelHeadersUnlimitedExtensionSHUEcspRPErun = strtolower("$SentinelHeadersUnlimitedExtensionSHUEserverReportCheck"); $SentinelHeadersUnlimitedExtensionSHUEcspVerificationCheck = "report-uri https://".esc_html($SentinelHeadersUnlimitedExtensionSHUEcspRPErun).".report-uri.com/r/d/csp/reportOnly";}}}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUExfo'))) { $SentinelHeadersUnlimitedExtensionSHUExfoVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUExfo')); } else { $SentinelHeadersUnlimitedExtensionSHUExfoVerificationCheck = sanitize_text_field('SAMEORIGIN');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEcorp'))) { $SentinelHeadersUnlimitedExtensionSHUEcorpVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEcorp')); } else { $SentinelHeadersUnlimitedExtensionSHUEcorpVerificationCheck = sanitize_text_field('cross-origin');} 
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUExpcdp'))) { $SentinelHeadersUnlimitedExtensionSHUExpxdpVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUExpcdp')); } else { $SentinelHeadersUnlimitedExtensionSHUExpxdpVerificationCheck = sanitize_text_field('none');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUExxp'))) { $SentinelHeadersUnlimitedExtensionSHUExxpVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUExxp')); } else { $SentinelHeadersUnlimitedExtensionSHUExxpVerificationCheck = sanitize_text_field('1; mode=block');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEec'))) { $SentinelHeadersUnlimitedExtensionSHUEecVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEec')); } else { $SentinelHeadersUnlimitedExtensionSHUEecVerificationCheck = sanitize_text_field('max-age=7776000, enforce');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEacao'))) { $SentinelHeadersUnlimitedExtensionSHUEacaoVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEacao')); } else { $SentinelHeadersUnlimitedExtensionSHUEacaoVerificationCheck = sanitize_text_field('null');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEacam'))) { $SentinelHeadersUnlimitedExtensionSHUEacamVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEacam')); } else { $SentinelHeadersUnlimitedExtensionSHUEacamVerificationCheck = sanitize_text_field('GET,PUT,POST,DELETE');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEacah'))) { $SentinelHeadersUnlimitedExtensionSHUEacahVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEacah')); } else { $SentinelHeadersUnlimitedExtensionSHUEacahVerificationCheck = sanitize_text_field('Content-Type, Authorization');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUExcsp'))) { $SentinelHeadersUnlimitedExtensionSHUExcspVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUExcsp')); } else { $SentinelHeadersUnlimitedExtensionSHUExcspVerificationCheck = sanitize_text_field('default-src \'self\'; img-src *; media-src * data:;');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUExcto'))) { $SentinelHeadersUnlimitedExtensionSHUExctoVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUExcto')); } else { $SentinelHeadersUnlimitedExtensionSHUExctoVerificationCheck = sanitize_text_field('nosniff');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUErp'))) { $SentinelHeadersUnlimitedExtensionSHUErpVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUErp')); } else { $SentinelHeadersUnlimitedExtensionSHUErpVerificationCheck = sanitize_text_field('no-referrer, strict-origin-when-cross-origin');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEfp'))) { $SentinelHeadersUnlimitedExtensionSHUEfpVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEfp')); } else { $SentinelHeadersUnlimitedExtensionSHUEfpVerificationCheck = sanitize_text_field('payment \'self\'; display-capture \'self\'');}
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEpp'))) { $SentinelHeadersUnlimitedExtensionSHUEppVerificationCheck = sanitize_text_field(get_option('SentinelHeadersUnlimitedExtensionSHUEpp')); } else { $SentinelHeadersUnlimitedExtensionSHUEppVerificationCheck = sanitize_text_field("accelerometer=(), ambient-light-sensor=(), autoplay=(), battery=(), camera=(), cross-origin-isolated=(), display-capture=(), document-domain=(), encrypted-media=(), execution-while-not-rendered=(), execution-while-out-of-viewport=(), fullscreen=*, geolocation=(self), gyroscope=(), keyboard-map=(), magnetometer=(), microphone=(), midi=(), navigation-override=(), payment=*, picture-in-picture=(), publickey-credentials-get=(), screen-wake-lock=(), sync-xhr=(), usb=(), web-share=(), xr-spatial-tracking=(), gamepad=(), conversion-measurement=(), focus-without-user-activation=(), serial=(), window-placement=(), vertical-scroll=()");}

	$headers['X-XSS-Protection'] = "$SentinelHeadersUnlimitedExtensionSHUExxpVerificationCheck";
	$headers['Expect-CT'] = "$SentinelHeadersUnlimitedExtensionSHUEecVerificationCheck";
	$headers['Access-Control-Allow-Origin'] = "$SentinelHeadersUnlimitedExtensionSHUEacaoVerificationCheck";
	$headers['Access-Control-Allow-Methods'] = "$SentinelHeadersUnlimitedExtensionSHUEacamVerificationCheck";
	$headers['Access-Control-Allow-Headers'] = "$SentinelHeadersUnlimitedExtensionSHUEacahVerificationCheck";
	$headers['X-Content-Security-Policy'] = "$SentinelHeadersUnlimitedExtensionSHUExcspVerificationCheck";
	$headers['X-Content-Type-Options'] = "$SentinelHeadersUnlimitedExtensionSHUExctoVerificationCheck";
	$headers['X-Permitted-Cross-Domain-Policies'] = "$SentinelHeadersUnlimitedExtensionSHUExpxdpVerificationCheck";
	$headers['Content-Security-Policy'] = "$SentinelHeadersUnlimitedExtensionSHUEcspVerificationCheck";
	$headers['Referrer-Policy'] = "$SentinelHeadersUnlimitedExtensionSHUErpVerificationCheck";
	$headers['Cross-Origin-Embedder-Policy-Report-Only'] = 'require-corp; report-to="default"';
	$headers['Cross-Origin-Embedder-Policy'] = 'unsafe-none; report-to="default"';
	$headers['Cross-Origin-Opener-Policy-Report-Only'] = 'same-origin; report-to="default"';
	$headers['Cross-Origin-Opener-Policy'] = "$SentinelHeadersUnlimitedExtensionSHUEcoopVerificationCheck";
	$headers['Cross-Origin-Resource-Policy'] = "$SentinelHeadersUnlimitedExtensionSHUEcorpVerificationCheck";
	if (!empty(get_option('SentinelHeadersUnlimitedExtensionSHUEruch'))) { $headers['Content-Security-Policy-Report-Only'] = "$SentinelHeadersUnlimitedExtensionSHUEruchVerificationCheck"; } else { }
	$headers['strict-dynamic'] = "https: 'self'; default-src 'self'";
	$headers['X-Frame-Options'] = "$SentinelHeadersUnlimitedExtensionSHUExfoVerificationCheck";
	$headers['Permissions-Policy'] = "$SentinelHeadersUnlimitedExtensionSHUEppVerificationCheck";
	$headers['Feature-Policy'] = "$SentinelHeadersUnlimitedExtensionSHUEfpVerificationCheck";
	return $headers;
}
add_filter( 'wp_headers', 'SentinelHeadersUnlimitedExtensionSHUEheaders' );

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Sentinel Headers Unlimited Extension - VERSION
if( ! defined( 'sentinel-headers-unlimited-extension-shue-lv' ) ) {
	define( 'sentinel-headers-unlimited-extension-shue-lv', '1.0.03' );
}

// Sentinel Headers Unlimited Extension
if( ! defined( 'sentinel-headers-unlimited-extension-shue-ln' ) ) {
	define( 'sentinel-headers-unlimited-extension-shue-ln', 'Sentinel Headers Unlimited Extension' );
}

// Sentinel Headers Unlimited Extension - DIR
if ( ! defined( 'sentinel-headers-unlimited-extension-shue-ph' ) ) {
	define( 'sentinel-headers-unlimited-extension-shue-ph', plugin_dir_path( __FILE__ ) );
}

// Sentinel Headers Unlimited Extension - URI
if ( ! defined( 'sentinel-headers-unlimited-extension-shue-bi' ) ) {
	define( 'sentinel-headers-unlimited-extension-shue-bi', plugin_dir_url( __FILE__ ) );
}
 

add_filter('plugin_action_links', 'SentinelHeadersUnlimitedExtensionSHUEhsLinks', 10, 2);

function SentinelHeadersUnlimitedExtensionSHUEhsLinks($links, $file) {
	static $this_plugin;

	if (!$this_plugin) {
		$this_plugin = plugin_basename(__FILE__);
	}

	if ($file == $this_plugin) {
		$settings_link = '<a href="https://www.buymeacoffee.com/tentacleplugins">Donate a coffee</a>';
		array_unshift($links, $settings_link);
	}
	return $links;
}