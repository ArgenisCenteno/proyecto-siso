<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>{{ config('app.name', 'Delivery') }}</title>

    <!-- Fonts -->
    <style>
       /**
* Template Name: Arsha
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# Font & Color Variables
# Help: https://bootstrapmade.com/color-system/
--------------------------------------------------------------*/
/* Fonts */
:root {
  --default-font: "Open Sans",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --heading-font: "Jost",  sans-serif;
  --nav-font: "Poppins",  sans-serif;
}

/* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
:root { 
  --background-color: #ffffff; /* Background color for the entire website, including individual sections */
  --default-color: #444444; /* Default color used for the majority of the text content across the entire website */
  --heading-color: #37517e; /* Color for headings, subheadings and title throughout the website */
  --accent-color: #800b3c; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
  --surface-color: #ffffff; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
  --contrast-color: #ffffff; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
}

/* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
:root {
  --nav-color: #ffffff;  /* The default color of the main navmenu links */
  --nav-hover-color: #47b2e4; /* Applied to main navmenu links when they are hovered over or active */
  --nav-mobile-background-color: #ffffff; /* Used as the background color for mobile navigation menu */
  --nav-dropdown-background-color: #ffffff; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
  --nav-dropdown-color: #444444; /* Used for navigation links of the dropdown items in the navigation menu. */
  --nav-dropdown-hover-color: #47b2e4; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
}

/* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

.light-background {
  --background-color: #f5f6f8;
  --surface-color: #ffffff;
}

.dark-background {
  --background-color: #800b3c;
  --default-color: #ffffff;
  --heading-color: #ffffff;
  --surface-color: #4668a2;
  --contrast-color: #ffffff;
}

/* Smooth scroll */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# General Styling & Shared Classes
--------------------------------------------------------------*/
body {
  color: var(--default-color);
  background-color: var(--background-color);
  font-family: var(--default-font);
}

a {
  color: var(--accent-color);
  text-decoration: none;
  transition: 0.3s;
}

a:hover {
  color: color-mix(in srgb, var(--accent-color), transparent 25%);
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--heading-color);
  font-family: var(--heading-font);
}

/* PHP Email Form Messages
------------------------------*/
.php-email-form .error-message {
  display: none;
  background: #df1529;
  color: #ffffff;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.php-email-form .sent-message {
  display: none;
  color: #ffffff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.php-email-form .loading {
  display: none;
  background: var(--surface-color);
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid var(--accent-color);
  border-top-color: var(--surface-color);
  animation: php-email-form-loading 1s linear infinite;
}

@keyframes php-email-form-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
.header {
  --background-color: ;
  --heading-color: #ffffff;
  color: var(--default-color);
  background-color: #800b3c;
  padding: 15px 0;
  transition: all 0.5s;
  z-index: 997;
}

.header .logo {
  line-height: 1;
}

.header .logo img {
  max-height: 36px;
  margin-right: 8px;
}

.header .logo h1 {
  font-size: 30px;
  margin: 0;
  font-weight: 500;
  color: var(--heading-color);
  letter-spacing: 2px;
  text-transform: uppercase;
}

.header .btn-getstarted,
.header .btn-getstarted:focus {
  color: #800b3c;
  background: #ffff;
  font-size: 14px;
  padding: 8px 25px;
  margin: 0 0 0 30px;
  border-radius: 50px;
  transition: 0.3s;
}

.header .btn-getstarted:hover,
.header .btn-getstarted:focus:hover {
  color: var(--contrast-color);
  background: color-mix(in srgb, #800b3c, transparent 15%);
}

@media (max-width: 1200px) {
  .header .logo {
    order: 1;
  }

  .header .btn-getstarted {
    order: 2;
    margin: 0 15px 0 0;
    padding: 6px 15px;
  }

  .header .navmenu {
    order: 3;
  }
}

/* Index Page Header
------------------------------*/
.index-page .header {
  --background-color: rgba(255, 255, 255, 0);
  --heading-color: #ffffff;
  --nav-color: #ffffff;
}

/* Index Page Header on Scroll
------------------------------*/
.index-page.scrolled .header {
  --background-color: rgba(40, 58, 90, 0.9);
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
@media (min-width: 1200px) {
  .navmenu {
    padding: 0;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-color);
    padding: 18px 15px;
    font-size: 15px;
    font-family: var(--nav-font);
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    transition: 0.3s;
  }

  .navmenu li:last-child a {
    padding-right: 0;
  }

  .navmenu li:hover>a,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-hover-color);
  }

  .navmenu .dropdown ul {
    margin: 0;
    padding: 10px 0;
    background: var(--nav-dropdown-background-color);
    display: block;
    position: absolute;
    visibility: hidden;
    left: 14px;
    top: 130%;
    opacity: 0;
    transition: 0.3s;
    border-radius: 4px;
    z-index: 99;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }

  .navmenu .dropdown ul li {
    min-width: 200px;
  }

  .navmenu .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    color: var(--nav-dropdown-color);
  }

  .navmenu .dropdown ul a i {
    font-size: 12px;
  }

  .navmenu .dropdown ul a:hover,
  .navmenu .dropdown ul .active:hover,
  .navmenu .dropdown ul li:hover>a {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dropdown .dropdown ul {
    top: 0;
    left: -90%;
    visibility: hidden;
  }

  .navmenu .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: -100%;
    visibility: visible;
  }

  .navmenu .megamenu {
    position: static;
  }

  .navmenu .megamenu ul {
    margin: 0;
    padding: 10px;
    background: var(--nav-dropdown-background-color);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 130%;
    left: 0;
    right: 0;
    visibility: hidden;
    opacity: 0;
    display: flex;
    transition: 0.3s;
    border-radius: 4px;
    z-index: 99;
  }

  .navmenu .megamenu ul li {
    flex: 1;
  }

  .navmenu .megamenu ul li a,
  .navmenu .megamenu ul li:hover>a {
    padding: 10px 20px;
    font-size: 15px;
    color: var(--nav-dropdown-color);
  }

  .navmenu .megamenu ul li a:hover,
  .navmenu .megamenu ul li .active,
  .navmenu .megamenu ul li .active:hover {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .megamenu:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dd-box-shadow {
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }
}

/* Mobile Navigation */
@media (max-width: 1199px) {
  .mobile-nav-toggle {
    color: var(--nav-color);
    font-size: 28px;
    line-height: 0;
    margin-right: 10px;
    cursor: pointer;
    transition: color 0.3s;
  }

  .navmenu {
    padding: 0;
    z-index: 9997;
  }

  .navmenu ul {
    display: none;
    list-style: none;
    position: absolute;
    inset: 60px 20px 20px 20px;
    padding: 10px 0;
    margin: 0;
    border-radius: 6px;
    background-color: var(--nav-mobile-background-color);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-dropdown-color);
    padding: 10px 20px;
    font-family: var(--nav-font);
    font-size: 17px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: 0.3s;
    background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
  }

  .navmenu a i:hover,
  .navmenu a:focus i:hover {
    background-color: var(--accent-color);
    color: var(--contrast-color);
  }

  .navmenu a:hover,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .active i,
  .navmenu .active:focus i {
    background-color: var(--accent-color);
    color: var(--contrast-color);
    transform: rotate(180deg);
  }

  .navmenu .dropdown ul {
    position: static;
    display: none;
    z-index: 99;
    padding: 10px 0;
    margin: 10px 20px;
    background-color: var(--nav-dropdown-background-color);
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    box-shadow: none;
    transition: all 0.5s ease-in-out;
  }

  .navmenu .dropdown ul ul {
    background-color: rgba(33, 37, 41, 0.1);
  }

  .navmenu .dropdown>.dropdown-active {
    display: block;
    background-color: rgba(33, 37, 41, 0.03);
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .mobile-nav-toggle {
    color: #fff;
    position: absolute;
    font-size: 32px;
    top: 15px;
    right: 15px;
    margin-right: 0;
    z-index: 9999;
  }

  .mobile-nav-active .navmenu {
    position: fixed;
    overflow: hidden;
    inset: 0;
    background: rgba(33, 37, 41, 0.8);
    transition: 0.3s;
  }

  .mobile-nav-active .navmenu>ul {
    display: block;
  }
}

/*--------------------------------------------------------------
# Global Footer
--------------------------------------------------------------*/
.footer {
  color: var(--default-color);
  background-color: var(--background-color);
  font-size: 14px;
  padding-bottom: 50px;
  position: relative;
}

.footer .footer-newsletter {
  background-color: color-mix(in srgb, var(--heading-color), transparent 95%);
  padding: 50px 0;
}

.footer .footer-newsletter h4 {
  font-size: 24px;
}

.footer .footer-newsletter .newsletter-form {
  margin-top: 30px;
  margin-bottom: 15px;
  padding: 6px 8px;
  position: relative;
  background-color: color-mix(in srgb, var(--background-color), transparent 50%);
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
  display: flex;
  transition: 0.3s;
  border-radius: 50px;
}

.footer .footer-newsletter .newsletter-form:focus-within {
  border-color: var(--accent-color);
}

.footer .footer-newsletter .newsletter-form input[type=email] {
  border: 0;
  padding: 4px;
  width: 100%;
  background-color: color-mix(in srgb, var(--background-color), transparent 50%);
  color: var(--default-color);
}

.footer .footer-newsletter .newsletter-form input[type=email]:focus-visible {
  outline: none;
}

.footer .footer-newsletter .newsletter-form input[type=submit] {
  border: 0;
  font-size: 16px;
  padding: 0 20px;
  margin: -7px -8px -7px 0;
  background: var(--accent-color);
  color: var(--contrast-color);
  transition: 0.3s;
  border-radius: 50px;
}

.footer .footer-newsletter .newsletter-form input[type=submit]:hover {
  background: color-mix(in srgb, var(--accent-color), transparent 20%);
}

.footer .footer-top {
  padding-top: 50px;
}

.footer .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
  font-size: 16px;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  margin-right: 10px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: var(--accent-color);
  border-color: var(--accent-color);
}

.footer h4 {
  font-size: 16px;
  font-weight: bold;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-links {
  margin-bottom: 30px;
}

.footer .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-links ul i {
  margin-right: 3px;
  font-size: 12px;
  line-height: 0;
  color: var(--accent-color);
}

.footer .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-links ul a {
  display: inline-block;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  line-height: 1;
}

.footer .footer-links ul a:hover {
  color: var(--accent-color);
}

.footer .footer-about a {
  color: var(--heading-color);
  font-size: 28px;
  font-weight: 600;
  text-transform: uppercase;
  font-family: var(--heading-font);
}

.footer .footer-contact p {
  margin-bottom: 5px;
}

.footer .copyright {
  padding-top: 25px;
  padding-bottom: 25px;
  border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.footer .copyright p {
  margin-bottom: 0;
}

.footer .credits {
  margin-top: 6px;
  font-size: 13px;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  inset: 0;
  z-index: 999999;
  overflow: hidden;
  background: var(--background-color);
  transition: all 0.6s ease-out;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #ffffff;
  border-color: var(--accent-color) transparent var(--accent-color) transparent;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: animate-preloader 1.5s linear infinite;
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Scroll Top Button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: -15px;
  z-index: 99999;
  background-color: var(--accent-color);
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: var(--contrast-color);
  line-height: 0;
}

.scroll-top:hover {
  background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
  color: var(--contrast-color);
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
  bottom: 15px;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Global Page Titles & Breadcrumbs
--------------------------------------------------------------*/
.page-title {
  --background-color: color-mix(in srgb, var(--default-color), transparent 96%);
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 20px 0;
  position: relative;
}

.page-title h1 {
  font-size: 28px;
  font-weight: 700;
  margin: 0;
}

.page-title .breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 14px;
}

.page-title .breadcrumbs ol li+li {
  padding-left: 10px;
}

.page-title .breadcrumbs ol li+li::before {
  content: "/";
  display: inline-block;
  padding-right: 10px;
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}

/*--------------------------------------------------------------
# Global Sections
--------------------------------------------------------------*/
section,
.section {
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 60px 0;
  scroll-margin-top: 88px;
  overflow: clip;
}

@media (max-width: 1199px) {

  section,
  .section {
    scroll-margin-top: 66px;
  }
}

/*--------------------------------------------------------------
# Global Section Titles
--------------------------------------------------------------*/
.section-title {
  text-align: center;
  padding-bottom: 60px;
  position: relative;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  text-transform: uppercase;
  position: relative;
}

.section-title h2:before {
  content: "";
  position: absolute;
  display: block;
  width: 160px;
  height: 1px;
  background: color-mix(in srgb, var(--default-color), transparent 60%);
  left: 0;
  right: 0;
  bottom: 1px;
  margin: auto;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 3px;
  background: var(--accent-color);
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  width: 100%;
  min-height: 100vh;
  position: relative;
  padding: 120px 0 60px 0;
  display: flex;
  align-items: center;
}

.hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
}

.hero p {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  margin: 5px 0 30px 0;
  font-size: 22px;
  line-height: 1.3;
  font-weight: 600;
}

.hero .btn-get-started {
  color: #800b3c;
  background: #ffff;
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px 12px 28px;
  border-radius: 50px;
  transition: 0.5s;
}

.hero .btn-get-started:hover {
  color: var(--contrast-color);
  background: color-mix(in srgb, #800b3c, transparent 15%);
}


.hero .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

@media (max-width: 640px) {
  .hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  .hero p {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }

  .hero .btn-get-started,
  .hero .btn-watch-video {
    font-size: 13px;
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}

/*--------------------------------------------------------------
# Clients Section
--------------------------------------------------------------*/
.clients {
  padding: 12px 0;
}

.clients .swiper {
  padding: 10px 0;
}

.clients .swiper-wrapper {
  height: auto;
}

.clients .swiper-slide img {
  transition: 0.3s;
  padding: 0 10px;
}

.clients .swiper-slide img:hover {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
.about ul {
  list-style: none;
  padding: 0;
}

.about ul li {
  padding-bottom: 5px;
  display: flex;
  align-items: center;
}

.about ul i {
  font-size: 20px;
  padding-right: 4px;
  color: var(--accent-color);
}

.about .read-more {
  color: var(--accent-color);
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  padding: 8px 28px;
  border-radius: 5px;
  transition: 0.3s;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border: 2px solid var(--accent-color);
}

.about .read-more i {
  font-size: 18px;
  margin-left: 5px;
  line-height: 0;
  transition: 0.3s;
}

.about .read-more:hover {
  background: var(--accent-color);
  color: var(--contrast-color);
}

.about .read-more:hover i {
  transform: translate(5px, 0);
}

/*--------------------------------------------------------------
# Why Us Section
--------------------------------------------------------------*/
.why-us {
  padding: 30px 0;
}

.why-us .content h3 {
  font-weight: 400;
  font-size: 34px;
}

.why-us .content p {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

.why-us .faq-container .faq-item {
  background-color: var(--surface-color);
  position: relative;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.why-us .faq-container .faq-item:last-child {
  margin-bottom: 0;
}

.why-us .faq-container .faq-item h3 {
  font-weight: 500;
  font-size: 17px;
  line-height: 24px;
  margin: 0 30px 0 0;
  transition: 0.3s;
  cursor: pointer;
}

.why-us .faq-container .faq-item h3 span {
  color: var(--accent-color);
  padding-right: 5px;
  font-weight: 600;
}

.why-us .faq-container .faq-item h3:hover {
  color: var(--accent-color);
}

.why-us .faq-container .faq-item .faq-content {
  display: grid;
  grid-template-rows: 0fr;
  transition: 0.3s ease-in-out;
  visibility: hidden;
  opacity: 0;
}

.why-us .faq-container .faq-item .faq-content p {
  margin-bottom: 0;
  overflow: hidden;
}

.why-us .faq-container .faq-item .faq-icon {
  position: absolute;
  top: 22px;
  left: 20px;
  font-size: 22px;
  line-height: 0;
  transition: 0.3s;
  color: var(--accent-color);
}

.why-us .faq-container .faq-item .faq-toggle {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 16px;
  line-height: 0;
  transition: 0.3s;
  cursor: pointer;
}

.why-us .faq-container .faq-item .faq-toggle:hover {
  color: var(--accent-color);
}

.why-us .faq-container .faq-active h3 {
  color: var(--accent-color);
}

.why-us .faq-container .faq-active .faq-content {
  grid-template-rows: 1fr;
  visibility: visible;
  opacity: 1;
  padding-top: 10px;
}

.why-us .faq-container .faq-active .faq-toggle {
  transform: rotate(90deg);
  color: var(--accent-color);
}

.why-us .why-us-img {
  display: flex;
  align-items: center;
  justify-content: center;
}

.why-us .why-us-img img {
  max-height: 70%;
}

/*--------------------------------------------------------------
# Skills Section
--------------------------------------------------------------*/
.skills .content h3 {
  font-size: 2rem;
  font-weight: 700;
}

.skills .content p {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

.skills .content p:last-child {
  margin-bottom: 0;
}

.skills .content ul {
  list-style: none;
  padding: 0;
}

.skills .content ul li {
  padding-bottom: 10px;
}

.skills .progress {
  height: 60px;
  display: block;
  background: none;
  border-radius: 0;
}

.skills .progress .skill {
  color: var(--default-color);
  padding: 0;
  margin: 0 0 6px 0;
  text-transform: uppercase;
  display: block;
  font-weight: 600;
  font-family: var(--heading-font);
}

.skills .progress .skill .val {
  float: right;
  font-style: normal;
}

.skills .progress-bar-wrap {
  background: color-mix(in srgb, var(--heading-color), transparent 90%);
  height: 10px;
}

.skills .progress-bar {
  width: 1px;
  height: 10px;
  transition: 0.9s;
  background-color: var(--heading-color);
}

/*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/
.services .service-item {
  background-color: var(--surface-color);
  box-shadow: 0px 5px 90px 0px rgba(0, 0, 0, 0.1);
  padding: 50px 30px;
  transition: all ease-in-out 0.4s;
  height: 100%;
}

.services .service-item .icon {
  margin-bottom: 10px;
}

.services .service-item .icon i {
  color: #800b3c;
  font-size: 36px;
  transition: 0.3s;
}

.services .service-item h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 20px;
}

.services .service-item h4 a {
  color: #800b3c;
  transition: ease-in-out 0.3s;
}

.services .service-item p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .service-item:hover {
  transform: translateY(-10px);
}

.services .service-item:hover h4 a {
  color: var(--accent-color);
}

/*--------------------------------------------------------------
# Call To Action Section
--------------------------------------------------------------*/
.call-to-action {
  padding: 120px 0;
  position: relative;
  clip-path: inset(0);
}

.call-to-action img {
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}

.call-to-action:before {
  content: "";
  background: color-mix(in srgb, var(--background-color), transparent 35%);
  position: absolute;
  inset: 0;
  z-index: 2;
}

.call-to-action .container {
  position: relative;
  z-index: 3;
}

.call-to-action h3 {
  color: var(--default-color);
  font-size: 28px;
  font-weight: 700;
}

.call-to-action p {
  color: var(--default-color);
}

.call-to-action .cta-btn {
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid var(--contrast-color);
  color: var(--contrast-color);
}

.call-to-action .cta-btn:hover {
  background: var(--accent-color);
  border: 2px solid var(--accent-color);
}

/*--------------------------------------------------------------
# Portfolio Section
--------------------------------------------------------------*/
.portfolio .portfolio-filters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}

.portfolio .portfolio-filters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 20px 10px 20px;
  margin: 0;
  font-size: 15px;
  font-weight: 500;
  line-height: 1;
  margin-bottom: 5px;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  font-family: var(--heading-font);
}

.portfolio .portfolio-filters li:hover,
.portfolio .portfolio-filters li.filter-active {
  color: var(--contrast-color);
  background-color: var(--accent-color);
}

.portfolio .portfolio-filters li:first-child {
  margin-left: 0;
}

.portfolio .portfolio-filters li:last-child {
  margin-right: 0;
}

@media (max-width: 575px) {
  .portfolio .portfolio-filters li {
    font-size: 14px;
    margin: 0 0 10px 0;
  }
}

.portfolio .portfolio-item {
  position: relative;
  overflow: hidden;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 12px;
  right: 12px;
  bottom: -100%;
  z-index: 3;
  transition: all ease-in-out 0.5s;
  background: color-mix(in srgb, var(--background-color), transparent 10%);
  padding: 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  font-weight: 600;
  padding-right: 50px;
}

.portfolio .portfolio-item .portfolio-info p {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  font-size: 14px;
  margin-bottom: 0;
  padding-right: 50px;
}

.portfolio .portfolio-item .portfolio-info .preview-link,
.portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 50px;
  font-size: 24px;
  top: calc(50% - 14px);
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  transition: 0.3s;
  line-height: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover,
.portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: var(--accent-color);
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 14px;
  font-size: 28px;
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
  bottom: 0;
}

/*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
.team .team-member {
  background-color: var(--surface-color);
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  position: relative;
  border-radius: 5px;
  transition: 0.5s;
  padding: 30px;
  height: 100%;
}

@media (max-width: 468px) {
  .team .team-member {
    flex-direction: column;
    justify-content: center !important;
    align-items: center !important;
  }
}

.team .team-member .pic {
  overflow: hidden;
  width: 150px;
  border-radius: 50%;
  flex-shrink: 0;
}

.team .team-member .pic img {
  transition: ease-in-out 0.3s;
}

.team .team-member:hover {
  transform: translateY(-10px);
}

.team .team-member .member-info {
  padding-left: 30px;
}

@media (max-width: 468px) {
  .team .team-member .member-info {
    padding: 30px 0 0 0;
    text-align: center;
  }
}

.team .team-member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
}

.team .team-member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.team .team-member span::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: color-mix(in srgb, var(--default-color), transparent 85%);
  bottom: 0;
  left: 0;
}

@media (max-width: 468px) {
  .team .team-member span::after {
    left: calc(50% - 25px);
  }
}

.team .team-member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.team .team-member .social {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: start;
  width: 100%;
}

@media (max-width: 468px) {
  .team .team-member .social {
    justify-content: center;
  }
}

.team .team-member .social a {
  background: color-mix(in srgb, var(--default-color), transparent 94%);
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 36px;
  height: 36px;
}

.team .team-member .social a i {
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  font-size: 16px;
  margin: 0 2px;
}

.team .team-member .social a:hover {
  background: var(--accent-color);
}

.team .team-member .social a:hover i {
  color: var(--contrast-color);
}

.team .team-member .social a+a {
  margin-left: 8px;
}

/*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/
.pricing .pricing-item {
  background-color: var(--surface-color);
  box-shadow: 0 3px 20px -2px rgba(0, 0, 0, 0.1);
  border-top: 4px solid var(--background-color);
  padding: 60px 40px;
  height: 100%;
  border-radius: 5px;
}

.pricing h3 {
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 20px;
}

.pricing h4 {
  color: #800b3c;
  font-size: 48px;
  font-weight: 400;
  font-family: var(--heading-font);
  margin-bottom: 0;
}

.pricing h4 sup {
  font-size: 28px;
}

.pricing h4 span {
  color: color-mix(in srgb, #800b3c, transparent 50%);
  font-size: 18px;
}

.pricing ul {
  padding: 20px 0;
  list-style: none;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.pricing ul i {
  color: #059652;
  font-size: 24px;
  padding-right: 3px;
}

.pricing ul .na {
  color: color-mix(in srgb, var(--default-color), transparent 60%);
}

.pricing ul .na i {
  color: color-mix(in srgb, var(--default-color), transparent 60%);
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .buy-btn {
  color: var(--accent-color);
  display: inline-block;
  padding: 8px 35px 10px 35px;
  border-radius: 50px;
  transition: none;
  font-size: 16px;
  font-weight: 500;
  font-family: var(--heading-font);
  transition: 0.3s;
  border: 1px solid var(--accent-color);
}

.pricing .buy-btn:hover {
  background: var(--accent-color);
  color: var(--contrast-color);
}

.pricing .featured {
  border-top-color: var(--accent-color);
}

.pricing .featured .buy-btn {
  background: var(--accent-color);
  color: var(--contrast-color);
}

@media (max-width: 992px) {
  .pricing .box {
    max-width: 60%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 767px) {
  .pricing .box {
    max-width: 80%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 420px) {
  .pricing .box {
    max-width: 100%;
    margin: 0 auto 30px auto;
  }
}

/*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
.testimonials .section-header {
  margin-bottom: 40px;
}

.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item {
  text-align: center;
}

.testimonials .testimonial-item .testimonial-img {
  width: 120px;
  border-radius: 50%;
  border: 4px solid var(--background-color);
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  margin: 0 0 15px 0;
}

.testimonials .testimonial-item .stars {
  margin-bottom: 15px;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: color-mix(in srgb, var(--accent-color), transparent 50%);
  font-size: 26px;
  line-height: 0;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
}

.testimonials .swiper-wrapper {
  height: auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  opacity: 1;
  background-color: color-mix(in srgb, var(--default-color), transparent 85%);
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--accent-color);
}

@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}

/*--------------------------------------------------------------
# Faq 2 Section
--------------------------------------------------------------*/
.faq-2 .faq-container {
  margin-top: 15px;
}

.faq-2 .faq-container .faq-item {
  background-color: var(--surface-color);
  position: relative;
  padding: 20px;
  margin-bottom: 20px;
  overflow: hidden;
}

.faq-2 .faq-container .faq-item:last-child {
  margin-bottom: 0;
}

.faq-2 .faq-container .faq-item h3 {
  font-weight: 600;
  font-size: 18px;
  line-height: 24px;
  margin: 0 30px 0 32px;
  transition: 0.3s;
  cursor: pointer;
}

.faq-2 .faq-container .faq-item h3 span {
  color: var(--accent-color);
  padding-right: 5px;
}

.faq-2 .faq-container .faq-item h3:hover {
  color: var(--accent-color);
}

.faq-2 .faq-container .faq-item .faq-content {
  display: grid;
  grid-template-rows: 0fr;
  transition: 0.3s ease-in-out;
  visibility: hidden;
  opacity: 0;
}

.faq-2 .faq-container .faq-item .faq-content p {
  margin-bottom: 0;
  overflow: hidden;
}

.faq-2 .faq-container .faq-item .faq-icon {
  position: absolute;
  top: 22px;
  left: 20px;
  font-size: 20px;
  line-height: 0;
  transition: 0.3s;
  color: var(--accent-color);
}

.faq-2 .faq-container .faq-item .faq-toggle {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 16px;
  line-height: 0;
  transition: 0.3s;
  cursor: pointer;
}

.faq-2 .faq-container .faq-item .faq-toggle:hover {
  color: var(--accent-color);
}

.faq-2 .faq-container .faq-active h3 {
  color: var(--accent-color);
}

.faq-2 .faq-container .faq-active .faq-content {
  grid-template-rows: 1fr;
  visibility: visible;
  opacity: 1;
  padding-top: 10px;
}

.faq-2 .faq-container .faq-active .faq-toggle {
  transform: rotate(90deg);
  color: var(--accent-color);
}

/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
.contact .info-wrap {
  background-color: var(--surface-color);
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  border-top: 3px solid var(--accent-color);
  border-bottom: 3px solid var(--accent-color);
  padding: 30px;
  height: 100%;
}

@media (max-width: 575px) {
  .contact .info-wrap {
    padding: 20px;
  }
}

.contact .info-item {
  margin-bottom: 40px;
}

.contact .info-item i {
  font-size: 20px;
  color: var(--accent-color);
  background: color-mix(in srgb, var(--accent-color), transparent 92%);
  width: 44px;
  height: 44px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  margin-right: 15px;
}

.contact .info-item h3 {
  padding: 0;
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 5px;
}

.contact .info-item p {
  padding: 0;
  margin-bottom: 0;
  font-size: 14px;
}

.contact .info-item:hover i {
  background: var(--accent-color);
  color: var(--contrast-color);
}

.contact .php-email-form {
  background-color: var(--surface-color);
  height: 100%;
  padding: 30px;
  border-top: 3px solid var(--accent-color);
  border-bottom: 3px solid var(--accent-color);
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

@media (max-width: 575px) {
  .contact .php-email-form {
    padding: 20px;
  }
}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email],
.contact .php-email-form textarea {
  font-size: 14px;
  padding: 10px 15px;
  box-shadow: none;
  border-radius: 0;
  color: var(--default-color);
  background-color: color-mix(in srgb, var(--background-color), transparent 50%);
  border-color: color-mix(in srgb, var(--default-color), transparent 80%);
}

.contact .php-email-form input[type=text]:focus,
.contact .php-email-form input[type=email]:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--accent-color);
}

.contact .php-email-form input[type=text]::placeholder,
.contact .php-email-form input[type=email]::placeholder,
.contact .php-email-form textarea::placeholder {
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}

.contact .php-email-form button[type=submit] {
  color: var(--contrast-color);
  background: var(--accent-color);
  border: 0;
  padding: 10px 30px;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: color-mix(in srgb, var(--accent-color), transparent 25%);
}

/*--------------------------------------------------------------
# Portfolio Details Section
--------------------------------------------------------------*/
.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: color-mix(in srgb, var(--default-color), transparent 85%);
  opacity: 1;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--accent-color);
}

.portfolio-details .portfolio-info {
  background-color: var(--surface-color);
  padding: 30px;
  box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

/*--------------------------------------------------------------
# Service Details Section
--------------------------------------------------------------*/
.service-details .services-list {
  background-color: var(--surface-color);
  padding: 10px 30px;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  margin-bottom: 20px;
}

.service-details .services-list a {
  display: block;
  line-height: 1;
  padding: 8px 0 8px 15px;
  border-left: 3px solid color-mix(in srgb, var(--default-color), transparent 70%);
  margin: 20px 0;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  transition: 0.3s;
}

.service-details .services-list a.active {
  color: var(--heading-color);
  font-weight: 700;
  border-color: var(--accent-color);
}

.service-details .services-list a:hover {
  border-color: var(--accent-color);
}

.service-details .services-img {
  margin-bottom: 20px;
}

.service-details h3 {
  font-size: 26px;
  font-weight: 700;
}

.service-details h4 {
  font-size: 20px;
  font-weight: 700;
}

.service-details p {
  font-size: 15px;
}

.service-details ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.service-details ul li {
  padding: 5px 0;
  display: flex;
  align-items: center;
}

.service-details ul i {
  font-size: 20px;
  margin-right: 8px;
  color: var(--accent-color);
}

/*--------------------------------------------------------------
# Starter Section Section
--------------------------------------------------------------*/
.starter-section {
  /* Add your styles here */
}
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('layout.head')
        <!-- Navbar -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center">

                <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">Delivery</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Inicio</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Servicios</a></li>
                        
                        <li><a href="#pricing">Precios</a></li>
                       
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="btn-getstarted" href="{{route('login')}}">Ingresar</a>

            </div>
        </header>

        <main id="main" class="main">
            @yield('content')
        </main>
    </div>
   <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Tecnología venezolana:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="#">Delivery</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
@yield('js')
@include('layout.script')
@include('sweetalert::alert')
@include('layout.datatables_css')
@include('layout.datatables_js')

</html>

<script>
    /**
* Template Name: Arsha
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Animate the skills items on reveal
   */
  let skillsAnimation = document.querySelectorAll('.skills-animation');
  skillsAnimation.forEach((item) => {
    new Waypoint({
      element: item,
      offset: '80%',
      handler: function(direction) {
        let progress = item.querySelectorAll('.progress .progress-bar');
        progress.forEach(el => {
          el.style.width = el.getAttribute('aria-valuenow') + '%';
        });
      }
    });
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();
</script>