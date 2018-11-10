<?php
/**
 * @file orderform.php
 * @date 2018-09-03
 * @author Go Namhyeon <gnh1201@gmail.com>
 * @brief order form
 */

if(!defined("_DEF_RSF_")) set_error_exit("do not allow access");

set_session_token();

loadHelper("webpagetool"); // load webpage tools
loadHelper("JSLoader.class"); // load javascript loader

$pay_method_alias = get_requested_value("pay_method_alias");

$data = array(
	"_token" => get_session_token(),
	"_next_route" => "orderpay.pgkcp",
	"redirect_url" => get_requested_value("redirect_url"),
	"pay_method_alias" => (!empty($pay_method_alias) ? $pay_method_alias : "CRE"),
	"good_name" => get_requested_value("good_name"),
	"good_mny" => get_requested_value("good_mny"),
	"buyr_name" => get_requested_value("buyr_name"),
	"buyr_mail" => get_requested_value("buyr_mail"),
	"buyr_tel1" => get_requested_value("buyr_tel1"),
	"pay_data" => get_requested_value("pay_data"),
);

// set javascript files
$jsloader = new JSLoader();
$jsloader->add_scripts(get_webproxy_url("https://code.jquery.com/jquery-3.3.1.min.js"));
$jsloader->add_scripts(base_url() . "view/public/js/route/orderform.js");
$jsoutput = $jsloader->get_output();
$data['jsoutput'] = $jsoutput;

renderView("view_orderform", $data);
