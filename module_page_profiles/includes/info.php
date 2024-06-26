<div class="row">
	<div class="col-md-12 profile_gap">
		<div class="profile_block_titles">
			<div class="profile_block_content_title">
				<svg viewBox="0 0 448 512">
					<path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM224 128c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S192 177.7 192 160C192 142.3 206.3 128 224 128zM264 384h-80C170.8 384 160 373.3 160 360s10.75-24 24-24h16v-64H192c-13.25 0-24-10.75-24-24S178.8 224 192 224h32c13.25 0 24 10.75 24 24v88h16c13.25 0 24 10.75 24 24S277.3 384 264 384z" />
				</svg>
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Information_player'); ?>
			</div>
		</div>
		<div class="profile_block_content">
			<div class="profile_block_about_player">
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg height="1520" viewBox="29.3 101.1 451.7 357.9" width="2500" xmlns="http://www.w3.org/2000/svg">
							<path d="m481 104.8c0-1.8-1.9-3.7-1.9-3.7-1.8 0-1.8 0-3.7 1.9-37.5 58.1-76.8 116.2-114.3 176.2h-326.2c-3.7 0-5.6 5.6-1.8 7.5 134.9 50.5 331.7 127.3 440.4 170.4 3.7 1.9 7.5-1.9 7.5-3.7z" fill="#fd5a00" />
							<path d="m481 104.8c0-1.8-1.9-3.7-1.9-3.7-1.8 0-1.8 0-3.7 1.9-37.5 58.1-76.8 116.2-114.3 176.2l119.9 1.23z" fill="#ff690a" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_NickName'); ?>
					</div>
					<div class="profile_block_value" id="faceit_nickname">
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_No_Account') ?>
					</div>
				</div>
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg height="1520" viewBox="29.3 101.1 451.7 357.9" width="2500" xmlns="http://www.w3.org/2000/svg">
							<path d="m481 104.8c0-1.8-1.9-3.7-1.9-3.7-1.8 0-1.8 0-3.7 1.9-37.5 58.1-76.8 116.2-114.3 176.2h-326.2c-3.7 0-5.6 5.6-1.8 7.5 134.9 50.5 331.7 127.3 440.4 170.4 3.7 1.9 7.5-1.9 7.5-3.7z" fill="#fd5a00" />
							<path d="m481 104.8c0-1.8-1.9-3.7-1.9-3.7-1.8 0-1.8 0-3.7 1.9-37.5 58.1-76.8 116.2-114.3 176.2l119.9 1.23z" fill="#ff690a" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Indicators'); ?>
					</div>
					<div class="profile_block_value" id="faceit_elo">
						0 ELO
					</div>
				</div>
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg height="1520" viewBox="29.3 101.1 451.7 357.9" width="2500" xmlns="http://www.w3.org/2000/svg">
							<path d="m481 104.8c0-1.8-1.9-3.7-1.9-3.7-1.8 0-1.8 0-3.7 1.9-37.5 58.1-76.8 116.2-114.3 176.2h-326.2c-3.7 0-5.6 5.6-1.8 7.5 134.9 50.5 331.7 127.3 440.4 170.4 3.7 1.9 7.5-1.9 7.5-3.7z" fill="#fd5a00" />
							<path d="m481 104.8c0-1.8-1.9-3.7-1.9-3.7-1.8 0-1.8 0-3.7 1.9-37.5 58.1-76.8 116.2-114.3 176.2l119.9 1.23z" fill="#ff690a" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_FaceitLevel'); ?>
					</div>
					<div class="profile_block_value">
						<img class="size_image" id="skill_level" src="<?= $General->arr_general['site'] ?>/app/modules/module_page_profiles/assets/img/faceit/none.svg" alt="" title="">
					</div>
				</div>
			</div>
			<div class="profile_block_about_player">
			<div class="profile_block_info">
					<div class="profile_block_title">
						<svg viewBox="0 0 512 512">
							<path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 21 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Country'); ?>
					</div>
					<div class="profile_block_value">
						<?php empty($Player->get_db_plugin_module_geoip()) ? print $Translate->get_translate_module_phrase('module_page_profiles', '_Unknown') : print $Player->get_db_plugin_module_geoip()['country'] ?><img class="size_image" src="<?= $General->arr_general['site'] ?>app/modules/module_page_profiles/assets/img/flags/<?= ($Player->get_db_plugin_module_geoip()['country']) ?>@2x.svg" onerror="this.src='<?= $General->arr_general['site'] ?>app/modules/module_page_profiles/assets/img/flags/World@2x.svg'" alt="" title="">
					</div>
				</div>
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg viewBox="0 0 640 512">
							<path d="M592 0C618.5 0 640 21.49 640 48V464C640 490.5 618.5 512 592 512H400C410 498.6 416 482 416 464V352H432C440.8 352 448 344.8 448 336V304C448 295.2 440.8 288 432 288H416V277.1C416 269.9 415 262.8 413.2 256H432C440.8 256 448 248.8 448 240V208C448 199.2 440.8 192 432 192H400C391.2 192 384 199.2 384 208V212.6L320 153.9V48C320 21.49 341.5 0 368 0L592 0zM512 240C512 248.8 519.2 256 528 256H560C568.8 256 576 248.8 576 240V208C576 199.2 568.8 192 560 192H528C519.2 192 512 199.2 512 208V240zM528 288C519.2 288 512 295.2 512 304V336C512 344.8 519.2 352 528 352H560C568.8 352 576 344.8 576 336V304C576 295.2 568.8 288 560 288H528zM400 96C391.2 96 384 103.2 384 112V144C384 152.8 391.2 160 400 160H432C440.8 160 448 152.8 448 144V112C448 103.2 440.8 96 432 96H400zM512 144C512 152.8 519.2 160 528 160H560C568.8 160 576 152.8 576 144V112C576 103.2 568.8 96 560 96H528C519.2 96 512 103.2 512 112V144zM15.57 241.7L159.6 109.7C177.9 92.91 206.1 92.91 224.4 109.7L368.4 241.7C378.4 250.8 384 263.7 384 277.1V464C384 490.5 362.5 512 336 512H48C21.49 512 0 490.5 0 464V277.1C0 263.7 5.647 250.8 15.57 241.7H15.57zM144 344C144 357.3 154.7 368 168 368H216C229.3 368 240 357.3 240 344V296C240 282.7 229.3 272 216 272H168C154.7 272 144 282.7 144 296V344z" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_City'); ?>
					</div>
					<div class="profile_block_value">
					<?php if (isset($_SESSION['user_admin'])) : ?>
						<div class="profile_block_value hideinfo">
							<?php empty($Player->get_db_plugin_module_geoip()['city']) ? print $Translate->get_translate_module_phrase('module_page_profiles', '_Unknown') : print $Player->get_db_plugin_module_geoip()['city'] ?>
						</div>
					<?php else : ?>
						<div class="profile_block_value stopblur">
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_hidden'); ?>
						</div>
					<?php endif; ?>
					</div>
				</div>
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg viewBox="0 0 384 512">
							<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_IP_address'); ?>
					</div>
					<?php if (isset($_SESSION['user_admin'])) : ?>
						<div class="profile_block_value hideinfo">
							<?php empty($Player->get_db_plugin_module_geoip()['clientip']) ? print $Translate->get_translate_module_phrase('module_page_profiles', '_Unknown') : print $Player->get_db_plugin_module_geoip()['clientip'] ?>
						</div>
					<?php else : ?>
						<div class="profile_block_value stopblur">
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_hidden'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="profile_block_about_player">
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg viewBox="0 0 496 512">
							<path d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_steamID32'); ?>
					</div>
					<div class="profile_block_value">
						<?= $Player->get_steam_32() ?>
						<svg class="size_image_copy copybtn2" data-clipboard-text="<?= $Player->get_steam_32() ?>" viewBox="0 0 512 512">
							<path d="M224 0c-35.3 0-64 28.7-64 64V288c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224zM64 160c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H288c35.3 0 64-28.7 64-64V384H288v64H64V224h64V160H64z" />
						</svg>
					</div>
				</div>
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg viewBox="0 0 496 512">
							<path d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_steamID64'); ?>
					</div>
					<div class="profile_block_value">
						<?= $Player->get_steam_64() ?>
						<svg class="size_image_copy copybtn2" data-clipboard-text="<?= $Player->get_steam_64() ?>" viewBox="0 0 512 512">
							<path d="M224 0c-35.3 0-64 28.7-64 64V288c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224zM64 160c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H288c35.3 0 64-28.7 64-64V384H288v64H64V224h64V160H64z" />
						</svg>
					</div>
				</div>
				<div class="profile_block_info">
					<div class="profile_block_title">
						<svg viewBox="0 0 496 512">
							<path d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_steamID3'); ?>
					</div>
					<div class="profile_block_value">
						[U:1:<?= con_steam32to3_int($Player->get_steam_32()) ?>]
						<svg class="size_image_copy copybtn2" data-clipboard-text="[U:1:<?= con_steam32to3_int($Player->get_steam_32()) ?>]" viewBox="0 0 512 512">
							<path d="M224 0c-35.3 0-64 28.7-64 64V288c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224zM64 160c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H288c35.3 0 64-28.7 64-64V384H288v64H64V224h64V160H64z" />
						</svg>
					</div>
				</div>
			</div>
			<?php if (!empty($lcrs)) : ?>
				<div class="profile_block_about_player">
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 25.3-19.5 46-44.3 47.9c7.7 8.5 12.3 19.8 12.3 32.1c0 23.4-16.8 42.9-38.9 47.1c4.4 7.2 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_LcrsCommends'); ?>
						</div>
						<div class="profile_block_value">
							<?php empty($lcrs['commends']) ? print '0' : print $lcrs['commends'] . $Translate->get_translate_module_phrase('module_page_profiles', '_pcs'); ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M313.4 479.1c26-5.2 42.9-30.5 37.7-56.5l-2.3-11.4c-5.3-26.7-15.1-52.1-28.8-75.2H464c26.5 0 48-21.5 48-48c0-25.3-19.5-46-44.3-47.9c7.7-8.5 12.3-19.8 12.3-32.1c0-23.4-16.8-42.9-38.9-47.1c4.4-7.3 6.9-15.8 6.9-24.9c0-21.3-13.9-39.4-33.1-45.6c.7-3.3 1.1-6.8 1.1-10.4c0-26.5-21.5-48-48-48H294.5c-19 0-37.5 5.6-53.3 16.1L202.7 73.8C176 91.6 160 121.6 160 153.7V192v48 24.9c0 29.2 13.3 56.7 36 75l7.4 5.9c26.5 21.2 44.6 51 51.2 84.2l2.3 11.4c5.2 26 30.5 42.9 56.5 37.7zM32 320H96c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64V288c0 17.7 14.3 32 32 32z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_LcrsReports'); ?>
						</div>
						<div class="profile_block_value">
							<?php empty($lcrs['reports']) ? print '0' : print $lcrs['reports'] . $Translate->get_translate_module_phrase('module_page_profiles', '_pcs'); ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.7 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_LcrsFactor'); ?>
						</div>
						<div class="profile_block_value">
							<?php empty($lcrs['points']) ? print '0' : print $lcrs['points'] ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php if (!empty($Shop)) : ?>
				<div class="profile_block_about_player">
					<div class="profile_block_info">
						<div class="profile_block_title span_color">
							<svg class="span_color" viewBox="0 0 512 512">
								<path d="M512 80C512 98.01 497.7 114.6 473.6 128C444.5 144.1 401.2 155.5 351.3 158.9C347.7 157.2 343.9 155.5 340.1 153.9C300.6 137.4 248.2 128 192 128C183.7 128 175.6 128.2 167.5 128.6L166.4 128C142.3 114.6 128 98.01 128 80C128 35.82 213.1 0 320 0C426 0 512 35.82 512 80V80zM160.7 161.1C170.9 160.4 181.3 160 192 160C254.2 160 309.4 172.3 344.5 191.4C369.3 204.9 384 221.7 384 240C384 243.1 383.3 247.9 381.9 251.7C377.3 264.9 364.1 277 346.9 287.3C346.9 287.3 346.9 287.3 346.9 287.3C346.8 287.3 346.6 287.4 346.5 287.5L346.5 287.5C346.2 287.7 345.9 287.8 345.6 288C310.6 307.4 254.8 320 192 320C132.4 320 79.06 308.7 43.84 290.9C41.97 289.9 40.15 288.1 38.39 288C14.28 274.6 0 258 0 240C0 205.2 53.43 175.5 128 164.6C138.5 163 149.4 161.8 160.7 161.1L160.7 161.1zM391.9 186.6C420.2 182.2 446.1 175.2 468.1 166.1C484.4 159.3 499.5 150.9 512 140.6V176C512 195.3 495.5 213.1 468.2 226.9C453.5 234.3 435.8 240.5 415.8 245.3C415.9 243.6 416 241.8 416 240C416 218.1 405.4 200.1 391.9 186.6V186.6zM384 336C384 354 369.7 370.6 345.6 384C343.8 384.1 342 385.9 340.2 386.9C304.9 404.7 251.6 416 192 416C129.2 416 73.42 403.4 38.39 384C14.28 370.6 .0003 354 .0003 336V300.6C12.45 310.9 27.62 319.3 43.93 326.1C83.44 342.6 135.8 352 192 352C248.2 352 300.6 342.6 340.1 326.1C347.9 322.9 355.4 319.2 362.5 315.2C368.6 311.8 374.3 308 379.7 304C381.2 302.9 382.6 301.7 384 300.6L384 336zM416 278.1C434.1 273.1 452.5 268.6 468.1 262.1C484.4 255.3 499.5 246.9 512 236.6V272C512 282.5 507 293 497.1 302.9C480.8 319.2 452.1 332.6 415.8 341.3C415.9 339.6 416 337.8 416 336V278.1zM192 448C248.2 448 300.6 438.6 340.1 422.1C356.4 415.3 371.5 406.9 384 396.6V432C384 476.2 298 512 192 512C85.96 512 .0003 476.2 .0003 432V396.6C12.45 406.9 27.62 415.3 43.93 422.1C83.44 438.6 135.8 448 192 448z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Shop_credits'); ?>
						</div>
						<div class="profile_block_value">
							<?php empty($Shop['Credits']) ? print '0' : print $Shop['Credits'] ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title span_color">
							<svg class="span_color" viewBox="0 0 512 512">
								<path d="M192 104.8c0-9.2-5.8-17.3-13.2-22.8C167.2 73.3 160 61.3 160 48c0-26.5 28.7-48 64-48s64 21.5 64 48c0 13.3-7.2 25.3-18.8 34c-7.4 5.5-13.2 13.6-13.2 22.8c0 12.8 10.4 23.2 23.2 23.2H336c26.5 0 48 21.5 48 48v56.8c0 12.8 10.4 23.2 23.2 23.2c9.2 0 17.3-5.8 22.8-13.2c8.7-11.6 20.7-18.8 34-18.8c26.5 0 48 28.7 48 64s-21.5 64-48 64c-13.3 0-25.3-7.2-34-18.8c-5.5-7.4-13.6-13.2-22.8-13.2c-12.8 0-23.2 10.4-23.2 23.2V464c0 26.5-21.5 48-48 48H279.2c-12.8 0-23.2-10.4-23.2-23.2c0-9.2 5.8-17.3 13.2-22.8c11.6-8.7 18.8-20.7 18.8-34c0-26.5-28.7-48-64-48s-64 21.5-64 48c0 13.3 7.2 25.3 18.8 34c7.4 5.5 13.2 13.6 13.2 22.8c0 12.8-10.4 23.2-23.2 23.2H48c-26.5 0-48-21.5-48-48V343.2C0 330.4 10.4 320 23.2 320c9.2 0 17.3 5.8 22.8 13.2C54.7 344.8 66.7 352 80 352c26.5 0 48-28.7 48-64s-21.5-64-48-64c-13.3 0-25.3 7.2-34 18.8C40.5 250.2 32.4 256 23.2 256C10.4 256 0 245.6 0 232.8V176c0-26.5 21.5-48 48-48H168.8c12.8 0 23.2-10.4 23.2-23.2z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Shop_items'); ?>
						</div>
						<div class="profile_block_value">
							<?php empty($Shop['Items']) ? print '0' : print $Shop['Items'] . $Translate->get_translate_module_phrase('module_page_profiles', '_pcs'); ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title span_color">
							<svg class="span_color" viewBox="0 0 512 512">
								<path d="M24 32C10.7 32 0 42.7 0 56V456c0 13.3 10.7 24 24 24H40c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H24zm88 0c-8.8 0-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16zm72 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H184zm96 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H280zM448 56V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H472c-13.3 0-24 10.7-24 24zm-64-8V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16s-16 7.2-16 16z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Shop_allprice'); ?>
						</div>
						<div class="profile_block_value">
							<?php empty($Shop['Items_price']) ? print '0' : print $Shop['Items_price'] ?>
							<svg class="size_image_svg span_color" viewBox="0 0 512 512">
								<path d="M512 80C512 98.01 497.7 114.6 473.6 128C444.5 144.1 401.2 155.5 351.3 158.9C347.7 157.2 343.9 155.5 340.1 153.9C300.6 137.4 248.2 128 192 128C183.7 128 175.6 128.2 167.5 128.6L166.4 128C142.3 114.6 128 98.01 128 80C128 35.82 213.1 0 320 0C426 0 512 35.82 512 80V80zM160.7 161.1C170.9 160.4 181.3 160 192 160C254.2 160 309.4 172.3 344.5 191.4C369.3 204.9 384 221.7 384 240C384 243.1 383.3 247.9 381.9 251.7C377.3 264.9 364.1 277 346.9 287.3C346.9 287.3 346.9 287.3 346.9 287.3C346.8 287.3 346.6 287.4 346.5 287.5L346.5 287.5C346.2 287.7 345.9 287.8 345.6 288C310.6 307.4 254.8 320 192 320C132.4 320 79.06 308.7 43.84 290.9C41.97 289.9 40.15 288.1 38.39 288C14.28 274.6 0 258 0 240C0 205.2 53.43 175.5 128 164.6C138.5 163 149.4 161.8 160.7 161.1L160.7 161.1zM391.9 186.6C420.2 182.2 446.1 175.2 468.1 166.1C484.4 159.3 499.5 150.9 512 140.6V176C512 195.3 495.5 213.1 468.2 226.9C453.5 234.3 435.8 240.5 415.8 245.3C415.9 243.6 416 241.8 416 240C416 218.1 405.4 200.1 391.9 186.6V186.6zM384 336C384 354 369.7 370.6 345.6 384C343.8 384.1 342 385.9 340.2 386.9C304.9 404.7 251.6 416 192 416C129.2 416 73.42 403.4 38.39 384C14.28 370.6 .0003 354 .0003 336V300.6C12.45 310.9 27.62 319.3 43.93 326.1C83.44 342.6 135.8 352 192 352C248.2 352 300.6 342.6 340.1 326.1C347.9 322.9 355.4 319.2 362.5 315.2C368.6 311.8 374.3 308 379.7 304C381.2 302.9 382.6 301.7 384 300.6L384 336zM416 278.1C434.1 273.1 452.5 268.6 468.1 262.1C484.4 255.3 499.5 246.9 512 236.6V272C512 282.5 507 293 497.1 302.9C480.8 319.2 452.1 332.6 415.8 341.3C415.9 339.6 416 337.8 416 336V278.1zM192 448C248.2 448 300.6 438.6 340.1 422.1C356.4 415.3 371.5 406.9 384 396.6V432C384 476.2 298 512 192 512C85.96 512 .0003 476.2 .0003 432V396.6C12.45 406.9 27.62 415.3 43.93 422.1C83.44 438.6 135.8 448 192 448z"></path>
							</svg>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>