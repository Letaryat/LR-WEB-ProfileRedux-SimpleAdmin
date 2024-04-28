<?php ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="row">
    <div class="col-md-12">
        <div class="note_container">
            <?php if(!empty($_SESSION['steamid64'])): ?>
                <?php if(empty($player_ban)): ?>
                    <span class="check_ban">
                        <div class="check_ban_icon">
                        <svg viewBox="0 0 512 512"><path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z"></path></svg>
                        </div>
                        <div class="check_ban_text">
                        <h4>Ban list</h4>
                        <p>No active ban for <a class="link" target="_blank" href="<?= $General->arr_general['site'] ?>profiles/<?= $_SESSION['steamid64'] ?>/?search=1">your account</a> was found....</p>
                        </div>
                </span>
                <?php elseif($player_ban['status'] === "ACTIVE"): ?>

                    <span class="check_ban">
                        <div class="check_ban_icon">
                        <svg viewBox="0 0 512 512"><path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z"></path></svg>
                        </div>
                        <div class="check_ban_text">
                        <h4 style="color:#ff5353;">You are banned!</h4>
                        <p>You are <a class="special-red">banned </a> by <?= $player_ban["admin_steamid"] == "Console" ? '<a class="special-orange">Console</a>' : '<a class="link" href="'. $General->arr_general['site'] .'profiles/'. con_steam32to64($res[$i]['admin_steamid']) .'/?search=1">'. $player_ban["admin_name"] .'</a> with the reason of <a class="special-bold">'. $player_ban["reason"] .'</a>' ?>
                    <?php 
                        if ($player_ban['duration'] == 0 && $player_ban['status'] == 'ACTIVE'){ 
                            echo '<a class="special-red">EXPIRES: NEVER</a>'; 
                            } elseif($player_ban['duration'] != 0 && $player_ban['status'] == "ACTIVE") { 
                            echo '<a class="special-orange"> EXPIRES: '. $player_ban['ends'] .'</a>';
                            }
                    
                    ?>
                       </p>
                        <p>You may appeal your ban at our <a href="https://discord.gg/gk66ur79" class="discord_link" target="_blank">Discord</a></p>
                        </div>
                        </span>
                <?php 
                    elseif($player_ban['status'] === "EXPIRED" || $player_ban['status'] === "UNBANNED"):
                        ?>
                    <span class="check_ban">
                        <div class="check_ban_icon">
                        <svg style="fill:#53ff6e;"fill="#53ff6e" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="0 0 335.765 335.765" xml:space="preserve">
<g>
	<g>
		<polygon points="311.757,41.803 107.573,245.96 23.986,162.364 0,186.393 107.573,293.962 335.765,65.795   "/>
	</g>
</g>
</svg>

                    </div>
                        <div class="check_ban_text">
                        <h4 style="color:#53ff6e;">Your ban has expired!</h4>
                        <p>You can now play on our servers!</p>
                        </div>
                        </span>
            <?php endif; else: ?>
                <span class="check_ban">
                        <div class="check_ban_icon">
                        <svg viewBox="0 0 512 512"><path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z"></path></svg>
                        </div>
                        <div class="check_ban_text">
                        <h4>Ban list</h4>
                        <p>Log in to check if you are banned.</p>
                        </div>
                </span>
            <?php endif; ?>
            <div class="block_buttons">
            <?php if (file_exists(MODULES . 'module_page_bans/description.json')) : ?>
                <div class="block_bans_button<?php if (in_array($Modules->route, array("bans"))) echo ' block_active' ?>" onclick="location.href='<?= $General->arr_general['site'] ?>/bans';"><?= $Translate->get_translate_module_phrase('module_page_bans', '_Bans_GameBlock') ?></div>
            <?php endif; ?>
            <?php if (file_exists(MODULES . 'module_page_comms/description.json')) : ?>
                <div class="block_comms_button<?php if (in_array($Modules->route, array("comms"))) echo ' block_active' ?>" onclick="location.href='<?= $General->arr_general['site'] ?>/comms';"><?= $Translate->get_translate_module_phrase('module_page_bans', '_Comms_GameBlock') ?></div>
            <?php endif; ?>
        </div>
        </div>
        <div class="card">
            <div class="bans_head">
                <span class="bans_1"><?= $Translate->get_translate_module_phrase('module_page_bans', '_Bans_Date') ?></span>
                <span><?= $Translate->get_translate_module_phrase('module_page_bans', '_Banned_User') ?></span>
                <span class="bans_1"><?= $Translate->get_translate_module_phrase('module_page_bans', '_Bans_Admin') ?></span>
                <span><?= $Translate->get_translate_module_phrase('module_page_bans', '_Bans_Reason') ?></span>
                <span><?= $Translate->get_translate_module_phrase('module_page_bans', '_Bans_Term') ?></span>
				<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Expiration'); ?></span>
            </div>
            <ul class="bans_list_body">
                <?php for ($i = 0, $sz = sizeof($res); $i < $sz; $i++) :
                    $General->get_js_relevance_avatar($General->arr_general['only_steam_64'] === 1 ? con_steam32to64($res[$i]['admin_steamid']) : $res[$i]['admin_steamid']);
                    $res[$i]['aid'] != '0' && $General->get_js_relevance_avatar($res[$i]['admin_steamid']) ?>
                    <li class="pointer">
                        <span class="bans_date"><?php echo $res[$i]['created'] ?></span>
                        <span class="bans_banned_user" onclick="location.href= '<?= $General->arr_general['site'] ?>profiles/<?= $res[$i]['player_steamid'] ?>/?search=1'"><?php if(empty($res[$i]['player_name'])){echo "??????"; } else{ echo action_text_clear(action_text_trim($res[$i]['player_name'], 13));} ?></span>
                        <span class="bans_admin" onclick="location.href= '<?php if($res[$i]['admin_steamid'] != 'Console'): echo $General->arr_general['site'] ?>profiles/<?php print $General->arr_general['only_steam_64'] === 1 ? con_steam32to64($res[$i]['admin_steamid']) : $res[$i]['admin_steamid'] ?>/?search=1'<?php endif; ?>">
                            <?php 
                                if($res[$i]["admin_name"] != "Console"){
                                    echo '<svg viewBox="0 0 576 512"><path d="M489.7 82.79C511.7 92.12 528.2 113.8 528 139.1C527.5 239.2 486.7 420.7 314.4 503.2C297.7 511.1 278.3 511.1 261.6 503.2C89.25 420.7 48.49 239.2 47.1 139.1C47.87 113.8 64.32 92.12 86.3 82.79L274.7 2.913C278.8 1.008 283.4-.0081 288-.0078C292.7-.0081 297.2 1.008 301.4 2.913L489.7 82.79zM122.1 224H288V66.77L112 141.4C112.3 165.5 115.2 193.1 122.1 224zM453.1 224H288V444.8C388.5 396.2 435.5 304.5 453.1 224V224z" /></svg>'. $res[$i]["admin_name"];
                                } else {
                                    echo '<i class="fa-solid fa-terminal"></i>';
                                }
                            ?>
                            
                            <?php echo action_text_clear(action_text_trim($res[$i]['admin_username'], 13)) ?>
                        </span>
                        <span class="bans_reason"><?php echo $res[$i]['reason'] ?></span>
                        <span>
                            <?php
                                if ($res[$i]['duration'] == 0){ 
                                    echo '<div id="act" class="color-red">' . $Translate->get_translate_phrase('_Forever') . '</div>'; 
                                } elseif ($res[$i]['duration'] != 0 && $res[$i]['status'] == "ACTIVE") { 
                                    echo '<div id="act" class="color-gray">'. $res[$i]['duration'] ." MINUTES</div>";
                                } elseif($res[$i]['duration'] != 0 && $res[$i]['status'] == "EXPIRED"){
                                    echo '<div id="exp" class="color-green"><strike>EXPIRED</strike></div>';
                                } elseif($res[$i]['duration'] != 0 && $res[$i]['status'] == "UNBANNED"){
                                    echo '<div id="ub" class="color-green"><strike>UNBANNED</strike></div>';
                                }
                            ?>
                        </span>
                        <span>
                            <?php
                                if ($res[$i]['duration'] == 0 && $res[$i]['status'] == "ACTIVE"){ 
							    	echo '<div id="act" class="color-red">NEVER</div>';
							    } elseif ($res[$i]['status'] == 'ACTIVE' && $res[$i]['duration'] != 0){ 
                                    echo '<div id="act" class="color-red">'.$res[$i]['ends'].'</div>';
							    }elseif($res[$i]['status'] == 'EXPIRED' && $res[$i]['duration'] != 0){
                                    echo '<div id="exp" class="color-green"><strike>EXPIRED</strike></div>';
                                }elseif($res[$i]['status'] == 'UNBANNED'){
                                    echo '<div id="ub" class="color-green"><strike>UNBANNED</strike></div>';
                                }

							?>
                            </span>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <?php if ($page_max != 1) : ?>
            <div class="pagination">
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num != 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_TotheBegin') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M77.25 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L77.25 256zM269.3 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C399.6 476.9 407.8 480 416 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L269.3 256z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num - 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Back') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <a href="<?= set_url_section(get_url(2), 'num', $page_num) ?>" class="button_pagination current active"><?= $page_num ?></a>
                <?php for ($v = $page_num; $v < min($page_num + 3, $page_max); $v++) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $v + 1) ?>" class="button_pagination current "><?= $v + 1 ?></a>
                <?php } ?>
                <?php if ($page_num != $page_max) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num + 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Forward') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num = $page_max) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_max) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_IntheEnd') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M246.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C15.63 476.9 23.81 480 32 480s16.38-3.125 22.62-9.375l192-192C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375l192-192C451.1 266.1 451.1 245.9 438.6 233.4z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</div>