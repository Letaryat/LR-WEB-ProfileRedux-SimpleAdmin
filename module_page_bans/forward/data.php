<?php
/**
 * @author Anastasia Sidak <m0st1ce.nastya@gmail.com>
 *
 * @link https://steamcommunity.com/profiles/76561198038416053
 * @link https://github.com/M0st1ce
 *
 * @license GNU General Public License Version 3
 */

empty( $Db->db_data['SourceBans'] ) && get_iframe( '012','Mod not found' );

// ?????????? ????? ?? ????????.
define('PLAYERS_ON_PAGE', '20');

$USER_ID = $Db->db_data['SourceBans'][0]['USER_ID'];
$Table = $Db->db_data['SourceBans'][0]['Table'];
$DB_num = $Db->db_data['SourceBans'][0]['DB_num'];

// ????? ????????.
$page_num = (int) intval ( get_section( 'num', '1' ) );

// Per player active ban listing
$player_ban = [];
if(!empty($_SESSION['steamid64'])){
    $db_result = $Db->queryAll('SourceBans', $USER_ID, $DB_num, "SELECT * FROM `sa_bans` WHERE `player_steamid` = {$_SESSION['steamid64']} ORDER BY `created` DESC LIMIT 1");
    $db_result = $db_result[0];
    if ($db_result['ends'] - time()){
        $player_ban = [];
    } else {
        $player_ban = $db_result; 
    }
    $player_ban = $db_result;
};

// ??????? ???-?? ???????
$page_max = ceil($Db->queryNum('SourceBans', $USER_ID , $DB_num, "SELECT COUNT(*) FROM {$Table}bans ")[0]/PLAYERS_ON_PAGE);

$page_num_min = ($page_num - 1) * PLAYERS_ON_PAGE;

( $page_num > $page_max || $page_num <= '0' ) && header('Location: ' . $General->arr_general['site']);

// ?????? ?? ????????? ?????????? ? ?????
$res = $Db->queryAll('SourceBans', $USER_ID, $DB_num, "SELECT `player_name`, `player_steamid`, `admin_steamid`, `admin_name`, `reason`, `duration`, `created`, `ends`, `status` FROM `{$Table}bans` ORDER BY `created` DESC LIMIT {$page_num_min}," . PLAYERS_ON_PAGE . "");
// ?????? ????????? ????????.
$Modules->set_page_title( $General->arr_general['short_name'] . ' :: ' . $Translate->get_translate_phrase('_Bans') . ' :: ' . $Translate->get_translate_phrase('_Page') . ' ' . $page_num );

// ?????? ???????? ????????.
$Modules->set_page_description( $General->arr_general['short_name'] . ' :: ' . $Translate->get_translate_phrase('_Bans') . ' :: ' . $Translate->get_translate_phrase('_Page') . ' ' . $page_num );
