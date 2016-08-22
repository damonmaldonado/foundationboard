/*
Theme Name: Community Foundation Board
Theme URI: http://components.underscores.me/
Author: dmm
Author URI: http://mpwmarketing.com
Description: Description
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: foundationboard
Tags:

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.

Community Foundation Board is created by the theme generator at http://components.underscores.me/, (C) 2015-2016 Automattic, Inc.
Components is distributed under the terms of the GNU GPL v2 or later.

Normalizing styles have been helped along thanks to the fine work of
Nicolas Gallagher and Jonathan Neal http://necolas.github.com/normalize.css/
*/
/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# Normalize
# Accessibility
# Alignments
# Clearings
# Typography
# Forms
# Buttons
# Formatting
# Lists
# Tables
# Navigation
# Links
# Layout
	## Posts
	## Pages
# Comments
# Widgets
# Infinite scroll
# Media
	## Galleries
--------------------------------------------------------------*/
/*--------------------------------------------------------------
# Normalize
--------------------------------------------------------------*/
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}

body {
  margin: 0;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
  display: block;
}

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}

audio:not([controls]) {
  display: none;
  height: 0;
}

[hidden],
template {
  display: none;
}

a {
  background-color: transparent;
}

a:active,
a:hover {
  outline: 0;
}

abbr[title] {
  border-bottom: 1px dotted;
}

b,
strong {
  font-weight: bold;
}

dfn {
  font-style: italic;
}

h1 {
    border-bottom:1px solid #222222;
    font-family: "Open Sans", sans-serif;
    font-size: 1.4em;
    font-weight:700;
    margin: 2.2rem 2.75rem 1rem;
    text-transform:uppercase;
}

mark {
  background: #ff0;
  color: #000;
}

small {
  font-size: 80%;
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

img {
  border: 0;
}

svg:not(:root) {
  overflow: hidden;
}

figure {
  margin: 1em 40px;
}

hr {
  box-sizing: content-box;
  height: 0;
}

pre {
  overflow: auto;
}

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}

button {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}

button[disabled],
html input[disabled] {
  cursor: default;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

input {
  line-height: normal;
}

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

legend {
  border: 0;
  padding: 0;
}

textarea {
  overflow: auto;
}

optgroup {
  font-weight: bold;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td,
th {
  padding: 0;
}

/*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers. */
.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
.screen-reader-text:focus {
  background-color: #f1f1f1;
  border-radius: 3px;
  box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
  clip: auto !important;
  color: #21759b;
  display: block;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000;
  /* Above WP toolbar. */
}

/* Do not show the outline on the skip link target. */
#content[tabindex="-1"]:focus {
  outline: 0;
}

/*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/
.alignleft {
  display: inline;
  float: left;
  margin-right: 1.5em;
}

.alignright {
  display: inline;
  float: right;
  margin-left: 1.5em;
}

.aligncenter {
  clear: both;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
  content: "";
  display: table;
  table-layout: fixed;
}

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
  clear: both;
}

/*--------------------------------------------------------------
# Typography
--------------------------------------------------------------*/
body,
button,
input,
select,
textarea {
  color: #404040;
  font-family: sans-serif;
  font-size: 16px;
  font-size: 1rem;
  line-height: 1.5;
}

h1, h2, h3, h4, h5, h6 {
  clear: both;
}

p {
  margin-bottom: 1.5em;
}

dfn, cite, em, i {
  font-style: italic;
}

blockquote {
  margin: 0 1.5em;
}

address {
  margin: 0 0 1.5em;
}

pre {
  background: #eee;
  font-family: "Courier 10 Pitch", Courier, monospace;
  font-size: 15px;
  font-size: 0.9375rem;
  line-height: 1.6;
  margin-bottom: 1.6em;
  max-width: 100%;
  overflow: auto;
  padding: 1.6em;
}

code, kbd, tt, var {
  font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
  font-size: 15px;
  font-size: 0.9375rem;
}

abbr, acronym {
  border-bottom: 1px dotted #666;
  cursor: help;
}

mark, ins {
  background: #fff9c0;
  text-decoration: none;
}

big {
  font-size: 125%;
}

blockquote, q {
  quotes: "" "";
}
blockquote:before, blockquote:after, q:before, q:after {
  content: "";
}

/*--------------------------------------------------------------
# Forms
--------------------------------------------------------------*/
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
  color: #666;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
  color: #111;
}

select {
  border: 1px solid #ccc;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"] {
  padding: 3px;
}

textarea {
  padding-left: 3px;
  width: 100%;
}

/*--------------------------------------------------------------
# Forms
--------------------------------------------------------------*/
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  border: 1px solid;
  border-color: #ccc #ccc #bbb;
  border-radius: 3px;
  background: #e6e6e6;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.5), inset 0 15px 17px rgba(255, 255, 255, 0.5), inset 0 -5px 12px rgba(0, 0, 0, 0.05);
  color: rgba(0, 0, 0, 0.8);
  font-size: 12px;
  font-size: 0.75rem;
  line-height: 1;
  padding: .6em 1em .4em;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
}
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
  border-color: #ccc #bbb #aaa;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8), inset 0 15px 17px rgba(255, 255, 255, 0.8), inset 0 -5px 12px rgba(0, 0, 0, 0.02);
}
button:active, button:focus,
input[type="button"]:active,
input[type="button"]:focus,
input[type="reset"]:active,
input[type="reset"]:focus,
input[type="submit"]:active,
input[type="submit"]:focus {
  border-color: #aaa #bbb #bbb;
  box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.5), inset 0 2px 5px rgba(0, 0, 0, 0.15);
}

/*--------------------------------------------------------------
# Formattings
--------------------------------------------------------------*/
hr {
  background-color: #ccc;
  border: 0;
  height: 1px;
  margin-bottom: 1.5em;
}

/*--------------------------------------------------------------
# Lists
--------------------------------------------------------------*/
ul, ol {
  margin: 0 0 1.5em 3em;
}

ul {
  list-style: disc;
}

ol {
  list-style: decimal;
}

li > ul,
li > ol {
  margin-bottom: 0;
  margin-left: 1.5em;
}

dt {
  font-weight: bold;
}

dd {
  margin: 0 1.5em 1.5em;
}

/*--------------------------------------------------------------
# Tables
--------------------------------------------------------------*/
table {
  margin: 0 0 1.5em;
  width: 100%;
}

/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/

.main-navigation {
  clear: both;
  display: block;
  float: left;
  width: 100%;
}
.left-nav {
    width: 326px;
}
.main-navigation ul {
  display: none;
  list-style: none;
  margin: 0;
  padding-left: 0;
}
.main-navigation ul ul {
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
  float: left;
  position: absolute;
  top: 1.5em;
  left: -999em;
  z-index: 99999;
}
.main-navigation ul ul ul {
  left: -999em;
  top: 0;
}
.main-navigation ul ul li:hover > ul, .main-navigation ul ul li.focus > ul {
  left: 100%;
}
.main-navigation ul ul a {
  width: 200px;
}
.main-navigation ul li:hover > ul,
.main-navigation ul li.focus > ul {
  left: auto;
    color:#ffffff;
}
.main-navigation li {
  float: left;
  position: relative;
  width: 100%;
  height: 84px;
}
.main-navigation a {
  display: block;
  text-decoration: none;
    height: 100%;
    color: #ffffff;
}
.main-navigation a:visited, .main-navigation a:active  {
    color: #ffffff;
}
.menu-block {
    float: left;
    height: 100%;
    width:  100%;
}
.menu-image-title {
    width: 235px;
    margin-right: 7px;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: 600;
    display: block;
    float: left;
    height: 100%;
    line-height: 84px;
    padding-right: 27px;
    text-transform: uppercase;
    text-align: right;
    letter-spacing: 3px;
}
.menu-image-title:before {
    content: " ";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 9600px;
    right: 100%;
}
.main-navigation .nav-menu > .menu-item:nth-of-type(1) .menu-image-title, .main-navigation .nav-menu > .menu-item:nth-of-type(1) .menu-image-title:before {
background: #017bac; /* Old browsers */
background: -moz-linear-gradient(top,  #017bac 0%, #017bac 50%, #006892 51%, #006892 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #017bac 0%,#017bac 50%,#006892 51%,#006892 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #017bac 0%,#017bac 50%,#006892 51%,#006892 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#017bac', endColorstr='#006892',GradientType=0 ); /* IE6-9 */
}
.main-navigation .nav-menu > .menu-item:nth-of-type(2) .menu-image-title, .main-navigation .nav-menu > .menu-item:nth-of-type(2) .menu-image-title:before {
    background: #b0bc22; /* Old browsers */
background: -moz-linear-gradient(top,  #b0bc22 0%, #b0bc22 50%, #99a322 51%, #99a322 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #b0bc22 0%,#b0bc22 50%,#99a322 51%,#99a322 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #b0bc22 0%,#b0bc22 50%,#99a322 51%,#99a322 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b0bc22', endColorstr='#99a322',GradientType=0 ); /* IE6-9 */
}
.main-navigation .nav-menu > .menu-item:nth-of-type(3) .menu-image-title, .main-navigation .nav-menu > .menu-item:nth-of-type(3) .menu-image-title:before {
        background: #e15554; /* Old browsers */
background: -moz-linear-gradient(top,  #e15554 0%, #e15554 50%, #cb4d4c 51%, #cb4d4c 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #e15554 0%,#e15554 50%,#cb4d4c 51%,#cb4d4c 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #e15554 0%,#e15554 50%,#cb4d4c 51%,#cb4d4c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e15554', endColorstr='#cb4d4c',GradientType=0 ); /* IE6-9 */
}
.main-navigation .nav-menu > .menu-item:nth-of-type(4) .menu-image-title, .main-navigation .nav-menu > .menu-item:nth-of-type(4) .menu-image-title:before {
        background: #efa504; /* Old browsers */
background: -moz-linear-gradient(top,  #efa504 0%, #efa504 50%, #dc9803 51%, #dc9803 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #efa504 0%,#efa504 50%,#dc9803 51%,#dc9803 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #efa504 0%,#efa504 50%,#dc9803 51%,#dc9803 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efa504', endColorstr='#dc9803',GradientType=0 ); /* IE6-9 */
}
/*icon section backgrounds*/
.main-navigation .nav-menu > .menu-item.current-menu-item:nth-of-type(1) .menu-image-container {
background: #017bac; /* Old browsers */
background: -moz-linear-gradient(top,  #017bac 0%, #017bac 50%, #006892 51%, #006892 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #017bac 0%,#017bac 50%,#006892 51%,#006892 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #017bac 0%,#017bac 50%,#006892 51%,#006892 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#017bac', endColorstr='#006892',GradientType=0 ); /* IE6-9 */
}
.main-navigation .nav-menu > .menu-item.current-menu-item:nth-of-type(2) .menu-image-container {
    background: #b0bc22; /* Old browsers */
background: -moz-linear-gradient(top,  #b0bc22 0%, #b0bc22 50%, #99a322 51%, #99a322 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #b0bc22 0%,#b0bc22 50%,#99a322 51%,#99a322 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #b0bc22 0%,#b0bc22 50%,#99a322 51%,#99a322 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b0bc22', endColorstr='#99a322',GradientType=0 ); /* IE6-9 */
}
.main-navigation .nav-menu > .menu-item.current-menu-item:nth-of-type(3) .menu-image-container {
        background: #e15554; /* Old browsers */
background: -moz-linear-gradient(top,  #e15554 0%, #e15554 50%, #cb4d4c 51%, #cb4d4c 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #e15554 0%,#e15554 50%,#cb4d4c 51%,#cb4d4c 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #e15554 0%,#e15554 50%,#cb4d4c 51%,#cb4d4c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e15554', endColorstr='#cb4d4c',GradientType=0 ); /* IE6-9 */
}
.main-navigation .nav-menu > .menu-item.current-menu-item:nth-of-type(4) .menu-image-container {
        background: #efa504; /* Old browsers */
background: -moz-linear-gradient(top,  #efa504 0%, #efa504 50%, #dc9803 51%, #dc9803 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #efa504 0%,#efa504 50%,#dc9803 51%,#dc9803 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #efa504 0%,#efa504 50%,#dc9803 51%,#dc9803 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efa504', endColorstr='#dc9803',GradientType=0 ); /* IE6-9 */
}
.main-navigation .nav-menu > .menu-item:nth-of-type(1) a:hover .menu-image-container {

    box-shadow: inset 0px 42px 0 0 #017bac, inset 0px 84px 0 0 #006892;
}
.main-navigation .nav-menu > .menu-item:nth-of-type(2) a:hover .menu-image-container {

    box-shadow: inset 0px 42px 0 0 #b0bc22, inset 0px 84px 0 0 #99a322;
}
.main-navigation .nav-menu > .menu-item:nth-of-type(3) a:hover .menu-image-container {

    box-shadow: inset 0px 42px 0 0 #e15554, inset 0px 84px 0 0 #cb4d4c;
}
.main-navigation .nav-menu > .menu-item:nth-of-type(4) a:hover .menu-image-container {

    box-shadow: inset 0px 42px 0 0 #efa504, inset 0px 84px 0 0 #dc9803;
}



span.menu-image-container{
transition: all ease 0.3s;
}
		/*span.menu-image-container:hover {
box-shadow: inset 0px 42px 0 0 #efa504, inset 0px 84px 0 0 #dc9803;
		}*/


.menu-image-container {
    width: 84px;
    display: block;
    float: right;
    height: 100%;
    line-height: 84px;
    text-align: center;
}
.main-navigation .menu-item {margin-bottom: 7px;}


/* Small menu. */
.menu-toggle,
.main-navigation.toggled ul {
  display: block;
}

.menu-toggle:before {
  content: "\2630";
  display: inline-block;
  margin-right: 5px;
}

@media screen and (min-width: 37.5em) {
  .menu-toggle {
    display: none;
  }

  .main-navigation ul {
    display: block;
  }
}
.site-main .comment-navigation, .site-main
.posts-navigation, .site-main
.post-navigation {
  margin: 0 0 1.5em;
  overflow: hidden;
}
.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
  float: left;
  width: 50%;
}
.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
  float: right;
  text-align: right;
  width: 50%;
}

/*--------------------------------------------------------------
# Links
--------------------------------------------------------------*/
a {
  color: royalblue;
}
a:visited {
  color: #ffffff;
}
a:hover, a:focus, a:active {
  color: #ffffff;
}
a:focus {
  outline: thin dotted;
}
a:hover, a:active {
  outline: 0;
}

/*--------------------------------------------------------------
# Links
--------------------------------------------------------------*/
a {
  color: royalblue;
}
a:visited {
  color: purple;
}
a:hover, a:focus, a:active {
  color: midnightblue;
}
a:focus {
  outline: thin dotted;
}
a:hover, a:active {
  outline: 0;
}

/*--------------------------------------------------------------
# Layout
--------------------------------------------------------------*/
html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
  box-sizing: inherit;
}

body {
  background: #fff;
  /* Fallback for when there is no custom background color defined. */
}
.site-header {
    height: 167px;
}
.site-branding.content-width {
    margin-top: 3rem;
}
.content-area {
  float: left;
  margin: 0 -25% 0 0;
  width: 100%;
  background-color: #ffffff;
}
.content-width {
    max-width: 1250px;
    margin: 0 auto;
}

.site-main {
  margin: 0 25% 0 0;
}

.site-content .widget-area {
  float: right;
  overflow: hidden;
  width: 25%;
}

.site-footer {
  clear: both;
  width: 100%;
}

.header-right-widget {
   float: right;
}

/*--------------------------------------------------------------
## Single Column / No Active Sidebar
--------------------------------------------------------------*/
.no-sidebar .site-main {
  margin: 0;
}

.content-area.no-sidebar {
  float: left;
  margin-left: auto;
  margin-right: auto;
  width: 924px;
}

/*--------------------------------------------------------------
## Posts
--------------------------------------------------------------*/
.sticky {
  display: block;
}

.hentry {
  margin: 0 0 1.5em;
}

.byline,
.updated:not(.published) {
  display: none;
}

.single .byline,
.group-blog .byline {
  display: inline;
}

.page-content,
.entry-content,
.entry-summary {
  margin: 1.5em 0 0;
}
.entry-content {
    margin: 1.5rem 2.75rem;
}
a.custom-logo-link {
    margin-left: 3.625rem;
}

/*--------------------------------------------------------------
## Pages
--------------------------------------------------------------*/
.page-links {
  clear: both;
  margin: 0 0 1.5em;
}

/*--------------------------------------------------------------
# Comments
--------------------------------------------------------------*/
.comment-content a {
  word-wrap: break-word;
}

.bypostauthor {
  display: block;
}

/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
.widget {
  margin: 0 0 1.5em;
  /* Make sure select elements fit in widgets. */
}
.widget select {
  max-width: 100%;
}

/*--------------------------------------------------------------
# Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation,
.infinite-scroll.neverending .site-footer {
  /* Theme Footer (when set to scrolling) */
  display: none;
}

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
.infinity-end.neverending .site-footer {
  display: block;
}

/*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/
img {
  height: auto;
  /* Make sure images are scaled correctly. */
  max-width: 100%;
  /* Adhere to container width. */
}

.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0;
}

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
  max-width: 100%;
}

.wp-caption {
  margin-bottom: 1.5em;
  max-width: 100%;
}
.wp-caption img[class*="wp-image-"] {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.wp-caption .wp-caption-text {
  margin: 0.8075em 0;
}

.wp-caption-text {
  text-align: center;
}

/*--------------------------------------------------------------
## Galleries
--------------------------------------------------------------*/
.gallery {
  margin-bottom: 1.5em;
}

.gallery-item {
  display: inline-block;
  text-align: center;
  vertical-align: top;
  width: 100%;
}
.gallery-columns-2 .gallery-item {
  max-width: 50%;
}
.gallery-columns-3 .gallery-item {
  max-width: 33.33%;
}
.gallery-columns-4 .gallery-item {
  max-width: 25%;
}
.gallery-columns-5 .gallery-item {
  max-width: 20%;
}
.gallery-columns-6 .gallery-item {
  max-width: 16.66%;
}
.gallery-columns-7 .gallery-item {
  max-width: 14.28%;
}
.gallery-columns-8 .gallery-item {
  max-width: 12.5%;
}
.gallery-columns-9 .gallery-item {
  max-width: 11.11%;
}

.gallery-caption {
  display: block;
}

/*pure grids/*
/*!
Pure v0.6.0
Copyright 2014 Yahoo! Inc. All rights reserved.
Licensed under the BSD License.
https://github.com/yahoo/pure/blob/master/LICENSE.md
*/
/*csslint regex-selectors:false, known-properties:false, duplicate-properties:false*/

.pure-g {
    letter-spacing: -0.31em; /* Webkit: collapse white-space between units */
    *letter-spacing: normal; /* reset IE < 8 */
    *word-spacing: -0.43em; /* IE < 8: collapse white-space between units */
    text-rendering: optimizespeed; /* Webkit: fixes text-rendering: optimizeLegibility */

    /*
    Sets the font stack to fonts known to work properly with the above letter
    and word spacings. See: https://github.com/yahoo/pure/issues/41/

    The following font stack makes Pure Grids work on all known environments.

    * FreeSans: Ships with many Linux distros, including Ubuntu

    * Arimo: Ships with Chrome OS. Arimo has to be defined before Helvetica and
      Arial to get picked up by the browser, even though neither is available
      in Chrome OS.

    * Droid Sans: Ships with all versions of Android.

    * Helvetica, Arial, sans-serif: Common font stack on OS X and Windows.
    */
    font-family: FreeSans, Arimo, "Droid Sans", Helvetica, Arial, sans-serif;

    /*
    Use flexbox when possible to avoid `letter-spacing` side-effects.

    NOTE: Firefox (as of 25) does not currently support flex-wrap, so the
    `-moz-` prefix version is omitted.
    */

    display: -webkit-flex;
    -webkit-flex-flow: row wrap;

    /* IE10 uses display: flexbox */
    display: -ms-flexbox;
    -ms-flex-flow: row wrap;
    
    /* Prevents distributing space between rows */
    -ms-align-content: flex-start;
	-webkit-align-content: flex-start;
	align-content: flex-start;
}

/* Opera as of 12 on Windows needs word-spacing.
   The ".opera-only" selector is used to prevent actual prefocus styling
   and is not required in markup.
*/
.opera-only :-o-prefocus,
.pure-g {
    word-spacing: -0.43em;
}

.pure-u {
    display: inline-block;
    *display: inline; /* IE < 8: fake inline-block */
    zoom: 1;
    letter-spacing: normal;
    word-spacing: normal;
    vertical-align: top;
    text-rendering: auto;
}

/*
Resets the font family back to the OS/browser's default sans-serif font,
this the same font stack that Normalize.css sets for the `body`.
*/
.pure-g [class *= "pure-u"] {
    font-family: sans-serif;
}

.pure-u-1,
.pure-u-1-1,
.pure-u-1-2,
.pure-u-1-3,
.pure-u-2-3,
.pure-u-1-4,
.pure-u-3-4,
.pure-u-1-5,
.pure-u-2-5,
.pure-u-3-5,
.pure-u-4-5,
.pure-u-5-5,
.pure-u-1-6,
.pure-u-5-6,
.pure-u-1-8,
.pure-u-3-8,
.pure-u-5-8,
.pure-u-7-8,
.pure-u-1-12,
.pure-u-5-12,
.pure-u-7-12,
.pure-u-11-12,
.pure-u-1-24,
.pure-u-2-24,
.pure-u-3-24,
.pure-u-4-24,
.pure-u-5-24,
.pure-u-6-24,
.pure-u-7-24,
.pure-u-8-24,
.pure-u-9-24,
.pure-u-10-24,
.pure-u-11-24,
.pure-u-12-24,
.pure-u-13-24,
.pure-u-14-24,
.pure-u-15-24,
.pure-u-16-24,
.pure-u-17-24,
.pure-u-18-24,
.pure-u-19-24,
.pure-u-20-24,
.pure-u-21-24,
.pure-u-22-24,
.pure-u-23-24,
.pure-u-24-24 {
    display: inline-block;
    *display: inline;
    zoom: 1;
    letter-spacing: normal;
    word-spacing: normal;
    vertical-align: top;
    text-rendering: auto;
}

.pure-u-1-24 {
    width: 4.1667%;
    *width: 4.1357%;
}

.pure-u-1-12,
.pure-u-2-24 {
    width: 8.3333%;
    *width: 8.3023%;
}

.pure-u-1-8,
.pure-u-3-24 {
    width: 12.5000%;
    *width: 12.4690%;
}

.pure-u-1-6,
.pure-u-4-24 {
    width: 16.6667%;
    *width: 16.6357%;
}

.pure-u-1-5 {
    width: 20%;
    *width: 19.9690%;
}

.pure-u-5-24 {
    width: 20.8333%;
    *width: 20.8023%;
}

.pure-u-1-4,
.pure-u-6-24 {
    width: 25%;
    *width: 24.9690%;
}

.pure-u-7-24 {
    width: 29.1667%;
    *width: 29.1357%;
}

.pure-u-1-3,
.pure-u-8-24 {
    width: 33.3333%;
    *width: 33.3023%;
}

.pure-u-3-8,
.pure-u-9-24 {
    width: 37.5000%;
    *width: 37.4690%;
}

.pure-u-2-5 {
    width: 40%;
    *width: 39.9690%;
}

.pure-u-5-12,
.pure-u-10-24 {
    width: 41.6667%;
    *width: 41.6357%;
}

.pure-u-11-24 {
    width: 45.8333%;
    *width: 45.8023%;
}

.pure-u-1-2,
.pure-u-12-24 {
    width: 50%;
    *width: 49.9690%;
}

.pure-u-13-24 {
    width: 54.1667%;
    *width: 54.1357%;
}

.pure-u-7-12,
.pure-u-14-24 {
    width: 58.3333%;
    *width: 58.3023%;
}

.pure-u-3-5 {
    width: 60%;
    *width: 59.9690%;
}

.pure-u-5-8,
.pure-u-15-24 {
    width: 62.5000%;
    *width: 62.4690%;
}

.pure-u-2-3,
.pure-u-16-24 {
    width: 66.6667%;
    *width: 66.6357%;
}

.pure-u-17-24 {
    width: 70.8333%;
    *
    width: 70.8023%;
}

.pure-u-3-4,
.pure-u-18-24 {
    width: 75%;
    *width: 74.9690%;
}

.pure-u-19-24 {
    width: 79.1667%;
    *width: 79.1357%;
}

.pure-u-4-5 {
    width: 80%;
    *width: 79.9690%;
}

.pure-u-5-6,
.pure-u-20-24 {
    width: 83.3333%;
    *width: 83.3023%;
}

.pure-u-7-8,
.pure-u-21-24 {
    width: 87.5000%;
    *width: 87.4690%;
}

.pure-u-11-12,
.pure-u-22-24 {
    width: 91.6667%;
    *width: 91.6357%;
}

.pure-u-23-24 {
    width: 95.8333%;
    *width: 95.8023%;
}

.pure-u-1,
.pure-u-1-1,
.pure-u-5-5,
.pure-u-24-24 {
    width: 100%;
}
/*!
Pure v0.6.0
Copyright 2014 Yahoo! Inc. All rights reserved.
Licensed under the BSD License.
https://github.com/yahoo/pure/blob/master/LICENSE.md
*/
@media screen and (min-width: 35.5em) {
    .pure-u-sm-1,
    .pure-u-sm-1-1,
    .pure-u-sm-1-2,
    .pure-u-sm-1-3,
    .pure-u-sm-2-3,
    .pure-u-sm-1-4,
    .pure-u-sm-3-4,
    .pure-u-sm-1-5,
    .pure-u-sm-2-5,
    .pure-u-sm-3-5,
    .pure-u-sm-4-5,
    .pure-u-sm-5-5,
    .pure-u-sm-1-6,
    .pure-u-sm-5-6,
    .pure-u-sm-1-8,
    .pure-u-sm-3-8,
    .pure-u-sm-5-8,
    .pure-u-sm-7-8,
    .pure-u-sm-1-12,
    .pure-u-sm-5-12,
    .pure-u-sm-7-12,
    .pure-u-sm-11-12,
    .pure-u-sm-1-24,
    .pure-u-sm-2-24,
    .pure-u-sm-3-24,
    .pure-u-sm-4-24,
    .pure-u-sm-5-24,
    .pure-u-sm-6-24,
    .pure-u-sm-7-24,
    .pure-u-sm-8-24,
    .pure-u-sm-9-24,
    .pure-u-sm-10-24,
    .pure-u-sm-11-24,
    .pure-u-sm-12-24,
    .pure-u-sm-13-24,
    .pure-u-sm-14-24,
    .pure-u-sm-15-24,
    .pure-u-sm-16-24,
    .pure-u-sm-17-24,
    .pure-u-sm-18-24,
    .pure-u-sm-19-24,
    .pure-u-sm-20-24,
    .pure-u-sm-21-24,
    .pure-u-sm-22-24,
    .pure-u-sm-23-24,
    .pure-u-sm-24-24 {
        display: inline-block;
        *display: inline;
        zoom: 1;
        letter-spacing: normal;
        word-spacing: normal;
        vertical-align: top;
        text-rendering: auto;
    }

    .pure-u-sm-1-24 {
        width: 4.1667%;
        *width: 4.1357%;
    }

    .pure-u-sm-1-12,
    .pure-u-sm-2-24 {
        width: 8.3333%;
        *width: 8.3023%;
    }

    .pure-u-sm-1-8,
    .pure-u-sm-3-24 {
        width: 12.5000%;
        *width: 12.4690%;
    }

    .pure-u-sm-1-6,
    .pure-u-sm-4-24 {
        width: 16.6667%;
        *width: 16.6357%;
    }

    .pure-u-sm-1-5 {
        width: 20%;
        *width: 19.9690%;
    }

    .pure-u-sm-5-24 {
        width: 20.8333%;
        *width: 20.8023%;
    }

    .pure-u-sm-1-4,
    .pure-u-sm-6-24 {
        width: 25%;
        *width: 24.9690%;
    }

    .pure-u-sm-7-24 {
        width: 29.1667%;
        *width: 29.1357%;
    }

    .pure-u-sm-1-3,
    .pure-u-sm-8-24 {
        width: 33.3333%;
        *width: 33.3023%;
    }

    .pure-u-sm-3-8,
    .pure-u-sm-9-24 {
        width: 37.5000%;
        *width: 37.4690%;
    }

    .pure-u-sm-2-5 {
        width: 40%;
        *width: 39.9690%;
    }

    .pure-u-sm-5-12,
    .pure-u-sm-10-24 {
        width: 41.6667%;
        *width: 41.6357%;
    }

    .pure-u-sm-11-24 {
        width: 45.8333%;
        *width: 45.8023%;
    }

    .pure-u-sm-1-2,
    .pure-u-sm-12-24 {
        width: 50%;
        *width: 49.9690%;
    }

    .pure-u-sm-13-24 {
        width: 54.1667%;
        *width: 54.1357%;
    }

    .pure-u-sm-7-12,
    .pure-u-sm-14-24 {
        width: 58.3333%;
        *width: 58.3023%;
    }

    .pure-u-sm-3-5 {
        width: 60%;
        *width: 59.9690%;
    }

    .pure-u-sm-5-8,
    .pure-u-sm-15-24 {
        width: 62.5000%;
        *width: 62.4690%;
    }

    .pure-u-sm-2-3,
    .pure-u-sm-16-24 {
        width: 66.6667%;
        *width: 66.6357%;
    }

    .pure-u-sm-17-24 {
        width: 70.8333%;
        *width: 70.8023%;
    }

    .pure-u-sm-3-4,
    .pure-u-sm-18-24 {
        width: 75%;
        *width: 74.9690%;
    }

    .pure-u-sm-19-24 {
        width: 79.1667%;
        *width: 79.1357%;
    }

    .pure-u-sm-4-5 {
        width: 80%;
        *width: 79.9690%;
    }

    .pure-u-sm-5-6,
    .pure-u-sm-20-24 {
        width: 83.3333%;
        *width: 83.3023%;
    }

    .pure-u-sm-7-8,
    .pure-u-sm-21-24 {
        width: 87.5000%;
        *width: 87.4690%;
    }

    .pure-u-sm-11-12,
    .pure-u-sm-22-24 {
        width: 91.6667%;
        *width: 91.6357%;
    }

    .pure-u-sm-23-24 {
        width: 95.8333%;
        *width: 95.8023%;
    }

    .pure-u-sm-1,
    .pure-u-sm-1-1,
    .pure-u-sm-5-5,
    .pure-u-sm-24-24 {
        width: 100%;
    }
}

@media screen and (min-width: 48em) {
    .pure-u-md-1,
    .pure-u-md-1-1,
    .pure-u-md-1-2,
    .pure-u-md-1-3,
    .pure-u-md-2-3,
    .pure-u-md-1-4,
    .pure-u-md-3-4,
    .pure-u-md-1-5,
    .pure-u-md-2-5,
    .pure-u-md-3-5,
    .pure-u-md-4-5,
    .pure-u-md-5-5,
    .pure-u-md-1-6,
    .pure-u-md-5-6,
    .pure-u-md-1-8,
    .pure-u-md-3-8,
    .pure-u-md-5-8,
    .pure-u-md-7-8,
    .pure-u-md-1-12,
    .pure-u-md-5-12,
    .pure-u-md-7-12,
    .pure-u-md-11-12,
    .pure-u-md-1-24,
    .pure-u-md-2-24,
    .pure-u-md-3-24,
    .pure-u-md-4-24,
    .pure-u-md-5-24,
    .pure-u-md-6-24,
    .pure-u-md-7-24,
    .pure-u-md-8-24,
    .pure-u-md-9-24,
    .pure-u-md-10-24,
    .pure-u-md-11-24,
    .pure-u-md-12-24,
    .pure-u-md-13-24,
    .pure-u-md-14-24,
    .pure-u-md-15-24,
    .pure-u-md-16-24,
    .pure-u-md-17-24,
    .pure-u-md-18-24,
    .pure-u-md-19-24,
    .pure-u-md-20-24,
    .pure-u-md-21-24,
    .pure-u-md-22-24,
    .pure-u-md-23-24,
    .pure-u-md-24-24 {
        display: inline-block;
        *display: inline;
        zoom: 1;
        letter-spacing: normal;
        word-spacing: normal;
        vertical-align: top;
        text-rendering: auto;
    }

    .pure-u-md-1-24 {
        width: 4.1667%;
        *width: 4.1357%;
    }

    .pure-u-md-1-12,
    .pure-u-md-2-24 {
        width: 8.3333%;
        *width: 8.3023%;
    }

    .pure-u-md-1-8,
    .pure-u-md-3-24 {
        width: 12.5000%;
        *width: 12.4690%;
    }

    .pure-u-md-1-6,
    .pure-u-md-4-24 {
        width: 16.6667%;
        *width: 16.6357%;
    }

    .pure-u-md-1-5 {
        width: 20%;
        *width: 19.9690%;
    }

    .pure-u-md-5-24 {
        width: 20.8333%;
        *width: 20.8023%;
    }

    .pure-u-md-1-4,
    .pure-u-md-6-24 {
        width: 25%;
        *width: 24.9690%;
    }

    .pure-u-md-7-24 {
        width: 29.1667%;
        *width: 29.1357%;
    }

    .pure-u-md-1-3,
    .pure-u-md-8-24 {
        width: 33.3333%;
        *width: 33.3023%;
    }

    .pure-u-md-3-8,
    .pure-u-md-9-24 {
        width: 37.5000%;
        *width: 37.4690%;
    }

    .pure-u-md-2-5 {
        width: 40%;
        *width: 39.9690%;
    }

    .pure-u-md-5-12,
    .pure-u-md-10-24 {
        width: 41.6667%;
        *width: 41.6357%;
    }

    .pure-u-md-11-24 {
        width: 45.8333%;
        *width: 45.8023%;
    }

    .pure-u-md-1-2,
    .pure-u-md-12-24 {
        width: 50%;
        *width: 49.9690%;
    }

    .pure-u-md-13-24 {
        width: 54.1667%;
        *width: 54.1357%;
    }

    .pure-u-md-7-12,
    .pure-u-md-14-24 {
        width: 58.3333%;
        *width: 58.3023%;
    }

    .pure-u-md-3-5 {
        width: 60%;
        *width: 59.9690%;
    }

    .pure-u-md-5-8,
    .pure-u-md-15-24 {
        width: 62.5000%;
        *width: 62.4690%;
    }

    .pure-u-md-2-3,
    .pure-u-md-16-24 {
        width: 66.6667%;
        *width: 66.6357%;
    }

    .pure-u-md-17-24 {
        width: 70.8333%;
        *width: 70.8023%;
    }

    .pure-u-md-3-4,
    .pure-u-md-18-24 {
        width: 75%;
        *width: 74.9690%;
    }

    .pure-u-md-19-24 {
        width: 79.1667%;
        *width: 79.1357%;
    }

    .pure-u-md-4-5 {
        width: 80%;
        *width: 79.9690%;
    }

    .pure-u-md-5-6,
    .pure-u-md-20-24 {
        width: 83.3333%;
        *width: 83.3023%;
    }

    .pure-u-md-7-8,
    .pure-u-md-21-24 {
        width: 87.5000%;
        *width: 87.4690%;
    }

    .pure-u-md-11-12,
    .pure-u-md-22-24 {
        width: 91.6667%;
        *width: 91.6357%;
    }

    .pure-u-md-23-24 {
        width: 95.8333%;
        *width: 95.8023%;
    }

    .pure-u-md-1,
    .pure-u-md-1-1,
    .pure-u-md-5-5,
    .pure-u-md-24-24 {
        width: 100%;
    }
}

@media screen and (min-width: 64em) {
    .pure-u-lg-1,
    .pure-u-lg-1-1,
    .pure-u-lg-1-2,
    .pure-u-lg-1-3,
    .pure-u-lg-2-3,
    .pure-u-lg-1-4,
    .pure-u-lg-3-4,
    .pure-u-lg-1-5,
    .pure-u-lg-2-5,
    .pure-u-lg-3-5,
    .pure-u-lg-4-5,
    .pure-u-lg-5-5,
    .pure-u-lg-1-6,
    .pure-u-lg-5-6,
    .pure-u-lg-1-8,
    .pure-u-lg-3-8,
    .pure-u-lg-5-8,
    .pure-u-lg-7-8,
    .pure-u-lg-1-12,
    .pure-u-lg-5-12,
    .pure-u-lg-7-12,
    .pure-u-lg-11-12,
    .pure-u-lg-1-24,
    .pure-u-lg-2-24,
    .pure-u-lg-3-24,
    .pure-u-lg-4-24,
    .pure-u-lg-5-24,
    .pure-u-lg-6-24,
    .pure-u-lg-7-24,
    .pure-u-lg-8-24,
    .pure-u-lg-9-24,
    .pure-u-lg-10-24,
    .pure-u-lg-11-24,
    .pure-u-lg-12-24,
    .pure-u-lg-13-24,
    .pure-u-lg-14-24,
    .pure-u-lg-15-24,
    .pure-u-lg-16-24,
    .pure-u-lg-17-24,
    .pure-u-lg-18-24,
    .pure-u-lg-19-24,
    .pure-u-lg-20-24,
    .pure-u-lg-21-24,
    .pure-u-lg-22-24,
    .pure-u-lg-23-24,
    .pure-u-lg-24-24 {
        display: inline-block;
        *display: inline;
        zoom: 1;
        letter-spacing: normal;
        word-spacing: normal;
        vertical-align: top;
        text-rendering: auto;
    }

    .pure-u-lg-1-24 {
        width: 4.1667%;
        *width: 4.1357%;
    }

    .pure-u-lg-1-12,
    .pure-u-lg-2-24 {
        width: 8.3333%;
        *width: 8.3023%;
    }

    .pure-u-lg-1-8,
    .pure-u-lg-3-24 {
        width: 12.5000%;
        *width: 12.4690%;
    }

    .pure-u-lg-1-6,
    .pure-u-lg-4-24 {
        width: 16.6667%;
        *width: 16.6357%;
    }

    .pure-u-lg-1-5 {
        width: 20%;
        *width: 19.9690%;
    }

    .pure-u-lg-5-24 {
        width: 20.8333%;
        *width: 20.8023%;
    }

    .pure-u-lg-1-4,
    .pure-u-lg-6-24 {
        width: 25%;
        *width: 24.9690%;
    }

    .pure-u-lg-7-24 {
        width: 29.1667%;
        *width: 29.1357%;
    }

    .pure-u-lg-1-3,
    .pure-u-lg-8-24 {
        width: 33.3333%;
        *width: 33.3023%;
    }

    .pure-u-lg-3-8,
    .pure-u-lg-9-24 {
        width: 37.5000%;
        *width: 37.4690%;
    }

    .pure-u-lg-2-5 {
        width: 40%;
        *width: 39.9690%;
    }

    .pure-u-lg-5-12,
    .pure-u-lg-10-24 {
        width: 41.6667%;
        *width: 41.6357%;
    }

    .pure-u-lg-11-24 {
        width: 45.8333%;
        *width: 45.8023%;
    }

    .pure-u-lg-1-2,
    .pure-u-lg-12-24 {
        width: 50%;
        *width: 49.9690%;
    }

    .pure-u-lg-13-24 {
        width: 54.1667%;
        *width: 54.1357%;
    }

    .pure-u-lg-7-12,
    .pure-u-lg-14-24 {
        width: 58.3333%;
        *width: 58.3023%;
    }

    .pure-u-lg-3-5 {
        width: 60%;
        *width: 59.9690%;
    }

    .pure-u-lg-5-8,
    .pure-u-lg-15-24 {
        width: 62.5000%;
        *width: 62.4690%;
    }

    .pure-u-lg-2-3,
    .pure-u-lg-16-24 {
        width: 66.6667%;
        *width: 66.6357%;
    }

    .pure-u-lg-17-24 {
        width: 70.8333%;
        *width: 70.8023%;
    }

    .pure-u-lg-3-4,
    .pure-u-lg-18-24 {
        width: 75%;
        *width: 74.9690%;
    }

    .pure-u-lg-19-24 {
        width: 79.1667%;
        *width: 79.1357%;
    }

    .pure-u-lg-4-5 {
        width: 80%;
        *width: 79.9690%;
    }

    .pure-u-lg-5-6,
    .pure-u-lg-20-24 {
        width: 83.3333%;
        *width: 83.3023%;
    }

    .pure-u-lg-7-8,
    .pure-u-lg-21-24 {
        width: 87.5000%;
        *width: 87.4690%;
    }

    .pure-u-lg-11-12,
    .pure-u-lg-22-24 {
        width: 91.6667%;
        *width: 91.6357%;
    }

    .pure-u-lg-23-24 {
        width: 95.8333%;
        *width: 95.8023%;
    }

    .pure-u-lg-1,
    .pure-u-lg-1-1,
    .pure-u-lg-5-5,
    .pure-u-lg-24-24 {
        width: 100%;
    }
}

@media screen and (min-width: 80em) {
    .pure-u-xl-1,
    .pure-u-xl-1-1,
    .pure-u-xl-1-2,
    .pure-u-xl-1-3,
    .pure-u-xl-2-3,
    .pure-u-xl-1-4,
    .pure-u-xl-3-4,
    .pure-u-xl-1-5,
    .pure-u-xl-2-5,
    .pure-u-xl-3-5,
    .pure-u-xl-4-5,
    .pure-u-xl-5-5,
    .pure-u-xl-1-6,
    .pure-u-xl-5-6,
    .pure-u-xl-1-8,
    .pure-u-xl-3-8,
    .pure-u-xl-5-8,
    .pure-u-xl-7-8,
    .pure-u-xl-1-12,
    .pure-u-xl-5-12,
    .pure-u-xl-7-12,
    .pure-u-xl-11-12,
    .pure-u-xl-1-24,
    .pure-u-xl-2-24,
    .pure-u-xl-3-24,
    .pure-u-xl-4-24,
    .pure-u-xl-5-24,
    .pure-u-xl-6-24,
    .pure-u-xl-7-24,
    .pure-u-xl-8-24,
    .pure-u-xl-9-24,
    .pure-u-xl-10-24,
    .pure-u-xl-11-24,
    .pure-u-xl-12-24,
    .pure-u-xl-13-24,
    .pure-u-xl-14-24,
    .pure-u-xl-15-24,
    .pure-u-xl-16-24,
    .pure-u-xl-17-24,
    .pure-u-xl-18-24,
    .pure-u-xl-19-24,
    .pure-u-xl-20-24,
    .pure-u-xl-21-24,
    .pure-u-xl-22-24,
    .pure-u-xl-23-24,
    .pure-u-xl-24-24 {
        display: inline-block;
        *display: inline;
        zoom: 1;
        letter-spacing: normal;
        word-spacing: normal;
        vertical-align: top;
        text-rendering: auto;
    }

    .pure-u-xl-1-24 {
        width: 4.1667%;
        *width: 4.1357%;
    }

    .pure-u-xl-1-12,
    .pure-u-xl-2-24 {
        width: 8.3333%;
        *width: 8.3023%;
    }

    .pure-u-xl-1-8,
    .pure-u-xl-3-24 {
        width: 12.5000%;
        *width: 12.4690%;
    }

    .pure-u-xl-1-6,
    .pure-u-xl-4-24 {
        width: 16.6667%;
        *width: 16.6357%;
    }

    .pure-u-xl-1-5 {
        width: 20%;
        *width: 19.9690%;
    }

    .pure-u-xl-5-24 {
        width: 20.8333%;
        *width: 20.8023%;
    }

    .pure-u-xl-1-4,
    .pure-u-xl-6-24 {
        width: 25%;
        *width: 24.9690%;
    }

    .pure-u-xl-7-24 {
        width: 29.1667%;
        *width: 29.1357%;
    }

    .pure-u-xl-1-3,
    .pure-u-xl-8-24 {
        width: 33.3333%;
        *width: 33.3023%;
    }

    .pure-u-xl-3-8,
    .pure-u-xl-9-24 {
        width: 37.5000%;
        *width: 37.4690%;
    }

    .pure-u-xl-2-5 {
        width: 40%;
        *width: 39.9690%;
    }

    .pure-u-xl-5-12,
    .pure-u-xl-10-24 {
        width: 41.6667%;
        *width: 41.6357%;
    }

    .pure-u-xl-11-24 {
        width: 45.8333%;
        *width: 45.8023%;
    }

    .pure-u-xl-1-2,
    .pure-u-xl-12-24 {
        width: 50%;
        *width: 49.9690%;
    }

    .pure-u-xl-13-24 {
        width: 54.1667%;
        *width: 54.1357%;
    }

    .pure-u-xl-7-12,
    .pure-u-xl-14-24 {
        width: 58.3333%;
        *width: 58.3023%;
    }

    .pure-u-xl-3-5 {
        width: 60%;
        *width: 59.9690%;
    }

    .pure-u-xl-5-8,
    .pure-u-xl-15-24 {
        width: 62.5000%;
        *width: 62.4690%;
    }

    .pure-u-xl-2-3,
    .pure-u-xl-16-24 {
        width: 66.6667%;
        *width: 66.6357%;
    }

    .pure-u-xl-17-24 {
        width: 70.8333%;
        *width: 70.8023%;
    }

    .pure-u-xl-3-4,
    .pure-u-xl-18-24 {
        width: 75%;
        *width: 74.9690%;
    }

    .pure-u-xl-19-24 {
        width: 79.1667%;
        *width: 79.1357%;
    }

    .pure-u-xl-4-5 {
        width: 80%;
        *width: 79.9690%;
    }

    .pure-u-xl-5-6,
    .pure-u-xl-20-24 {
        width: 83.3333%;
        *width: 83.3023%;
    }

    .pure-u-xl-7-8,
    .pure-u-xl-21-24 {
        width: 87.5000%;
        *width: 87.4690%;
    }

    .pure-u-xl-11-12,
    .pure-u-xl-22-24 {
        width: 91.6667%;
        *width: 91.6357%;
    }

    .pure-u-xl-23-24 {
        width: 95.8333%;
        *width: 95.8023%;
    }

    .pure-u-xl-1,
    .pure-u-xl-1-1,
    .pure-u-xl-5-5,
    .pure-u-xl-24-24 {
        width: 100%;
    }
}