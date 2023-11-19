<?php
/*
Plugin Name: Sales Tax Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/sales-tax-calculator/
Description: You can use our free sales tax calculator to determine the total cost of a product, including all fees and taxes. Also, be sure to check out the sales tax rates in various U.S. states.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_sales_tax_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Sales Tax Calculator by Calculator.iO";

function display_ci_sales_tax_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Sales Tax Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_sales_tax_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_sales_tax_calculator', 'display_ci_sales_tax_calculator' );