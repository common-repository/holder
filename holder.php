<?php
/*
Plugin Name: Holder
Plugin URI: http://wordpress.org/extend/plugins/holder/
Description: Quick and flexible placeholders, created right in browser.
Author: Andrey "Rarst" Savchenko
Version: 1.1
Author URI: http://www.rarst.net/
License: MIT

Copyright (c) 2012 Andrey "Rarst" Savchenko

Permission is hereby granted, free of charge, to any person obtaining a copy of this
software and associated documentation files (the "Software"), to deal in the Software
without restriction, including without limitation the rights to use, copy, modify, merge,
publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons
to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies
or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.

Uses holder.js library by Ivan Malopinsky under Apache 2.0 License.
*/

require dirname( __FILE__ ) . '/php/class-r-holder.php';
require dirname( __FILE__ ) . '/php/functions.php';

R_Holder::on_load();