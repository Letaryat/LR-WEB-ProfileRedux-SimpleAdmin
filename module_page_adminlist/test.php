<div class="col-md-12 back">
        <div class="adminlist_title"><?= $Translate->get_translate_module_phrase('module_page_adminlist', '_Bosses') ?>: <?= sizeof($res_2) ?></div>
        <div class="adminlist_blocks">
            <?php for ($i = 0, $sz = sizeof($res_2); $i < $sz; $i++) : $General->get_js_relevance_avatar($General->arr_general['only_steam_64'] === 1 ? con_steam32to64($res_2[$i]['player_steamid']) : $res_2[$i]['player_steamid']);
                $steam_short_1 = explode(":", $res_2[$i]['player_steamid']); ?>
                <?php $online_1 = !empty($this->Db->query('Core', 0, 0, 'SELECT * FROM lr_web_online WHERE user LIKE "%' . end($steam_short_1) . '%"')) ? 1 : 0; ?>
                <div class="admin_card">
                    <span onClick="window.open('<?= $General->arr_general['site'] ?>profiles/<?= con_steam32to64($res_2[$i]['player_steamid']) ?>/?search=1/');" class="admin_nickname">
                        <svg viewBox="0 0 640 512">
                            <path d="M562.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L405.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C189.5 251.2 196 330 246 380c56.5 56.5 148 56.5 204.5 0L562.8 267.7zM43.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C57 372 57 321 88.5 289.5L200.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C416.5 260.8 410 182 360 132c-56.5-56.5-148-56.5-204.5 0L43.2 244.3z" />
                        </svg>
                        <?= htmlentities(action_text_clear(action_text_trim($General->checkName(con_steam32to64($res_2[$i]['player_steamid'])), 13))) ?>
                    </span>
                    <div class="adminlist_info">
                        <div class="online_status">
                            <div class="online_text"><?php ($online_1 == 0) ? print $Translate->get_translate_module_phrase('module_page_adminlist', '_Offline') : print $Translate->get_translate_module_phrase('module_page_adminlist', '_Online'); ?></div>
                            <div class="<?php ($online_1 == 0) ? print 'offline_admin' : print 'online_admin'; ?>"></div>
                        </div>
                        <?php if ($General->arr_general['avatars'] != 0) { ?>
                            <div class="avatar_block">
                                <img class="admins_avatar" data-src="<?= $General->getAvatar(con_steam32to64($res_2[$i]['player_steamid']), 1) ?>" alt="">
                            </div>
                        <?php } ?>
                        <div class="adminlist_buttons">
                            <div onClick="window.open('//steamcommunity.com/profiles/<?= con_steam32to64($res_2[$i]['player_steamid']) ?>');" class="adminlist_button steam_button">
                                <svg viewBox="0 0 496 512">
                                    <path d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z" />
                                </svg>
                                Steam
                            </div>
                        </div>
                    </div>
                    <div class="admin_status">
                        <span class="admin_status_icon">
                            <svg viewBox="0 0 512 512">
                                <path d="M447.1 .0041h-384c-35.25 0-64 28.75-64 63.1v287.1c0 35.25 28.75 63.1 64 63.1h96v83.99c0 9.75 11.25 15.45 19.12 9.7l124.9-93.69h144c35.25 0 64-28.75 64-63.1V63.1C511.1 28.75 483.2 .0041 447.1 .0041zM320 112c17.75 0 31.1 14.25 31.1 32s-14.25 31.1-32 31.1S288 161.8 288 144S302.3 112 320 112zM192 112c17.75 0 31.1 14.25 31.1 32S209.8 175.1 192 175.1S160 161.8 160 144S174.3 112 192 112zM362.3 271.3c-26.5 31-65.14 48.74-106.3 48.74c-41.12 0-79.72-17.74-106.2-48.74c-8.5-10-7.5-25.12 2.625-33.75c9.998-8.5 25.25-7.375 33.87 2.75C203.5 260.4 228.9 272 256 272c27.12 0 52.49-11.62 69.74-31.75c8.623-10.12 23.75-11.38 33.74-2.75C369.6 246.1 370.8 261.3 362.3 271.3z" />
                            </svg>
                        </span>
                        <span class="admin_status_text"><?= ($res_2[$i]['server_name']) ?></span>
                        <span class="admin_status_desc hide_text">Server</span>
                    </div>
                    <div class="admin_group">
                        <span class="admin_group_icon">
                            <svg viewBox="0 0 448 512">
                                <path d="M78.54 102.4v28.04C119.1 148.9 169.4 160 224 160s104.9-11.08 145.5-29.55V102.4l21.96-22.3c4.564-4.635 7.129-10.93 7.129-17.48c0-11.35-7.602-21.24-18.44-23.99l-148.3-37.67c-5.096-1.295-10.43-1.295-15.52 0l-148.3 37.67C57.06 41.39 49.46 51.28 49.46 62.62c0 6.555 2.564 12.85 7.129 17.48L78.54 102.4zM191.1 61.08l30-12.5C221.9 48.26 223.2 48 224 48c.8281 0 2.122 .2559 2.884 .5723l30 12.5c2.779 1.152 4.609 3.889 4.609 6.92C261.5 107.1 232.1 128 223.1 128C216.1 128 186.5 108.2 186.5 67.1C186.5 64.96 188.3 62.23 191.1 61.08zM97.97 172.4C96.98 178.9 96 185.3 96 192c0 70.69 57.3 128 127.1 128s127.1-57.31 127.1-128c0-6.705-.9399-13.15-1.934-19.57C311.2 185.2 268.4 192 224 192C179.6 192 136.8 185.2 97.97 172.4zM320 352h-32l-64 64l-64-64H128c-70.69 0-128 57.31-128 128c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 409.3 390.7 352 320 352zM358.5 437.3l-15.81 15.37l3.736 21.71c.6719 3.926-3.469 6.852-6.939 5.029L320 469.2l-19.54 10.25c-3.471 1.836-7.611-1.104-6.939-5.029l3.736-21.71l-15.81-15.37c-2.844-2.76-1.27-7.58 2.648-8.146L305.9 426l9.764-19.76c1.766-3.566 6.834-3.521 8.582 0L334.1 426l21.85 3.18C359.8 429.7 361.4 434.6 358.5 437.3z" />
                            </svg>
                        </span>
                        <span class="admin_group_text"><?= flagtoname($res_2[$i]['flags']) ?></span>
                        <span class="admin_group_desc hide_text"><?= $Translate->get_translate_module_phrase('module_page_adminlist', '_Group') ?></span>
                    </div>
                    <div class="admin_term">
                        <span class="admin_term_icon">
                            <svg viewBox="0 0 512 512">
                                <path d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 184.4 29.46 119.6 76.84 73.14C89.46 60.78 109.7 60.98 122.1 73.6C134.5 86.23 134.3 106.5 121.6 118.9C86.03 153.7 64 202.3 64 256C64 362 149.1 448 256 448C362 448 448 362 448 256C448 160.9 378.8 81.89 288 66.65V96C288 113.7 273.7 128 256 128C238.3 128 224 113.7 224 96V32C224 14.33 238.3 0 256 0C397.4 0 512 114.6 512 256zM272.1 239C282.3 248.4 282.3 263.6 272.1 272.1C263.6 282.3 248.4 282.3 239 272.1L159 192.1C149.7 183.6 149.7 168.4 159 159C168.4 149.7 183.6 149.7 192.1 159L272.1 239z" />
                            </svg>
                        </span>
                        <span class="admin_term_text"><?= (empty($res_2[$i]['ends'])) ? $Translate->get_translate_phrase('_Forever') : $res_2[$i]['ends'];?></span>
                        <span class="admin_term_desc hide_text"><?= $Translate->get_translate_module_phrase('module_page_adminlist', '_Term') ?></span>
                    </div>
                    <div class="admins_work">
                        <div class="admins_bans" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_adminlist', '_Bans') ?>" data-tippy-placement="bottom">
                            <div class="admins_bans_count hide_info"><?= $res_2[$i]['bans_count'] ?></div>
                            <div class="admins_bans_desc">
                                <svg viewBox="0 0 512 512">
                                    <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" />
                                </svg>
                            </div>
                        </div>
                        <div class="admins_comms" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_adminlist', '_Mutes') ?>" data-tippy-placement="bottom">
                            <div class="admins_comms_count hide_info"><?= $res_2[$i]['comms_count'] ?></div>
                            <div class="admins_comms_desc">
                                <svg viewBox="0 0 640 512">
                                    <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c15.2-26 23.9-56.3 23.9-88.7V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 21.2-5.1 41.1-14.2 58.7L416 300.8V96c0-53-43-96-96-96s-96 43-96 96v54.3L38.8 5.1zM344 430.4c20.4-2.8 39.7-9.1 57.3-18.2l-43.1-33.9C346.1 382 333.3 384 320 384c-70.7 0-128-57.3-128-128v-8.7L144.7 210c-.5 1.9-.7 3.9-.7 6v40c0 89.1 66.2 162.7 152 174.4V464H248c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>