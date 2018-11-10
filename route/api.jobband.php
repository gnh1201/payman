<?php


	$sql = " insert into $g4[ezpay_point_charge]
				set mb_id = '$member[mb_id]',
					mb_name = '$member[mb_name]',
					ch_settle = '$ch_settle',
					ch_amount = '$good_mny',
					ch_point = '0',
					ch_ordr_idxx = '$ordr_idxx',
					ch_app_no = '$app_no',
					ch_res_cd = '$res_cd',
					ch_res_msg = '$res_msg',
					ch_tno = '$tno',
					ch_datetime = '{$g4['time_ymdhis']}',
					ch_ip = '{$_SERVER['REMOTE_ADDR']}',
					ch_agent = '{$_SERVER['HTTP_USER_AGENT']}'
					";
