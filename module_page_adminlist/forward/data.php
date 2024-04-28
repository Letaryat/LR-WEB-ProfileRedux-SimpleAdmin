<?php
empty( $Db->db_data['SourceBans'] ) && get_iframe( '012','Не найден мод - SourceBans  : /storage/cache/sessions/db.php' );

function flagtoname($name){
    if($name == "#css/admin"){ return "Admin";}
    elseif($name == "#css/owner") {return "Owner";}
    elseif($name == "#css/wsparcie"){return "Wsparcie";}
}


// Запрос на получение информации о админах
/*
$res_1 = $Db->queryAll('SourceBans', 0, 0, "SELECT 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_name, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.server_id,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.created,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.ends,
                                            ( SELECT `hostname` FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}servers WHERE id={$Db->db_data['SourceBans'][0]['Table']}admins.server_id ) AS server_name,
                                            ( SELECT `flag` FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}admins_flags WHERE admin_id={$Db->db_data['SourceBans'][0]['Table']}admins.id ) AS flags,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}bans WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS bans_count,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}mutes WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS comms_count
                                            FROM 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins
                                            WHERE {$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid > 0");
*/

$res_1 = $Db->queryAll('SourceBans', 0, 0, "SELECT 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_name, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.server_id,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.created,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.ends,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins_flags.flag,
                                            ( SELECT `hostname` FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}servers WHERE id={$Db->db_data['SourceBans'][0]['Table']}admins.server_id ) AS server_name,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}bans WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS bans_count,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}mutes WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS comms_count
                                            FROM 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins_flags RIGHT JOIN {$Db->db_data['SourceBans'][ 0 ]['Table']}admins ON 
                                            {$Db->db_data['SourceBans'][ 0 ]['Table']}admins.id = {$Db->db_data['SourceBans'][ 0 ]['Table']}admins_flags.admin_id WHERE {$Db->db_data['SourceBans'][ 0 ]['Table']}admins_flags.flag = '#css/admin'");

$res_2 = $Db->queryAll('SourceBans', 0, 0, "SELECT 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_name, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.server_id,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.created,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.ends,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins_flags.flag,
                                            ( SELECT `hostname` FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}servers WHERE id={$Db->db_data['SourceBans'][0]['Table']}admins.server_id ) AS server_name,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}bans WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS bans_count,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}mutes WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS comms_count
                                            FROM 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins_flags RIGHT JOIN {$Db->db_data['SourceBans'][ 0 ]['Table']}admins ON 
                                            {$Db->db_data['SourceBans'][ 0 ]['Table']}admins.id = {$Db->db_data['SourceBans'][ 0 ]['Table']}admins_flags.admin_id WHERE {$Db->db_data['SourceBans'][ 0 ]['Table']}admins_flags.flag = '#css/owner'");

$res_3 = $Db->queryAll('SourceBans', 0, 0, "SELECT 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_name, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid, 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.server_id,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.created,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins.ends,
                                            {$Db->db_data['SourceBans'][0]['Table']}admins_flags.flag,
                                            ( SELECT `hostname` FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}servers WHERE id={$Db->db_data['SourceBans'][0]['Table']}admins.server_id ) AS server_name,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}bans WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS bans_count,
                                            ( SELECT COUNT(1) FROM {$Db->db_data['SourceBans'][ 0 ]['Table']}mutes WHERE admin_steamid={$Db->db_data['SourceBans'][0]['Table']}admins.player_steamid ) AS comms_count
                                            FROM 
                                            {$Db->db_data['SourceBans'][0]['Table']}admins_flags RIGHT JOIN {$Db->db_data['SourceBans'][ 0 ]['Table']}admins ON 
                                            {$Db->db_data['SourceBans'][ 0 ]['Table']}admins.id = {$Db->db_data['SourceBans'][ 0 ]['Table']}admins_flags.admin_id WHERE {$Db->db_data['SourceBans'][ 0 ]['Table']}admins_flags.flag = '#css/wsparcie'");


$Modules->set_page_title( $General->arr_general['short_name'] . ' : ' . $Translate->get_translate_phrase('_Admins_sb') );
$Modules->set_page_description( $General->arr_general['short_name'] . ' : ' . $Translate->get_translate_phrase('_Admins_sb') );