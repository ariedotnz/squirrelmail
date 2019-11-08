<?php
/**
 * SquirrelMail Configuration File
 * Created using the Administrator Plugin
 */

$config_version = '1.5.0';
$org_name = "RealityRipple Software Webmail";
$org_logo = SM_PATH . 'images/sm_logo.png';
$org_logo_width = "308";
$org_logo_height = "111";
$org_title = "RealityRipple Software Webmail";
$signout_page = 'https://mail.realityripple.com';
$provider_uri = "https://realityripple.com";
$provider_name = "RealityRipple Software";
$frame_top = "_top";
$domain = "";
$imapServerAddress = "imap.ionos.com";
$imapPort = 143;
$imap_server_type = "other";
$optional_delimiter = "detect";
$use_imap_tls = 0;
$imap_auth_mech = "login";
$useSendmail = FALSE;
$sendmail_path = "/usr/sbin/sendmail";
$sendmail_args = "-i -t";
$smtpServerAddress = "smtp.ionos.com";
$smtpPort = 25;
$use_smtp_tls = 0;
$smtp_auth_mech = "login";
$smtp_sitewide_user = "";
$smtp_sitewide_pass = "";
$pop_before_smtp = FALSE;
$encode_header_key = "";
$invert_time = FALSE;
$default_folder_prefix = "";
$show_prefix_option = FALSE;
$trash_folder = "Trash";
$sent_folder = "Sent Items";
$draft_folder = "Drafts";
$default_move_to_trash = TRUE;
$default_move_to_sent = TRUE;
$default_save_as_draft = TRUE;
$list_special_folders_first = TRUE;
$use_special_folder_color = TRUE;
$auto_expunge = TRUE;
$default_sub_of_inbox = TRUE;
$show_contain_subfolders_option = FALSE;
$default_unseen_notify = 2;
$default_unseen_type = 1;
$auto_create_special = FALSE;
$delete_folder = FALSE;
$noselect_fix_enable = FALSE;
$data_dir = $GLOBALS['siteRoot'].'/rrs/.maildata/data/';
$attachment_dir = $GLOBALS['siteRoot'].'/rrs/.maildata/attach/';
$dir_hash_level = 0;
$default_left_size = 100;
$force_username_lowercase = TRUE;
$default_use_priority = TRUE;
$hide_sm_attributions = TRUE;
$default_use_mdn = TRUE;
$edit_identity = TRUE;
$edit_name = TRUE;
$edit_reply_to = TRUE;
$hide_auth_header = FALSE;
$disable_server_sort = TRUE;
$disable_thread_sort = TRUE;
$allow_charset_search = TRUE;
$allow_advanced_search = 0;
$session_name = 'SQMSESSID';
$time_zone_type = 0;
$config_location_base = '';
$use_transparent_security_image = TRUE;
$display_imap_login_error = TRUE;
$motd = "";
$addrbook_dsn = '';
$addrbook_table = 'address';
$prefs_dsn = '';
$prefs_table = 'userprefs';
$prefs_user_field = 'user';
$prefs_user_size = 128;
$prefs_key_field = 'prefkey';
$prefs_key_size = 64;
$prefs_val_field = 'prefval';
$prefs_val_size = 65536;
$addrbook_global_dsn = '';
$addrbook_global_table = 'global_abook';
$addrbook_global_writeable = FALSE;
$addrbook_global_listing = FALSE;
$squirrelmail_default_language = "en_US";
$default_charset = "iso-8859-1";
$show_alternative_names = FALSE;
$aggressive_decoding = FALSE;
$lossy_encoding = FALSE;
$use_icons = TRUE;
$use_iframe = TRUE;
$use_php_recode = FALSE;
$use_php_iconv = TRUE;
$allow_remote_configtest = FALSE;
$default_use_javascript_addr_book = FALSE;
$abook_global_file = '';
$abook_global_file_writeable = FALSE;
$abook_global_file_listing = TRUE;
$abook_file_line_length = 2048;
$theme_css = '';
$default_fontsize = '';
$default_fontset = "serif";
$templateset_default = "default";
$templateset_fallback = "default";
$theme_default = 0;
$config_use_color = 2;
$no_list_for_subscribe = FALSE;
$pop_before_smtp_host = "";
$only_secure_cookies = TRUE;
$disable_security_tokens = FALSE;
$check_referrer = "";
$user_theme_default = 0;
$user_themes[0]['PATH'] = "none";
$user_themes[0]['NAME'] = "Default";
$user_themes[1]['PATH'] = SM_PATH . 'css/blue_gradient/';
$user_themes[1]['NAME'] = "Blue Options";
$icon_theme_def = 1;
$icon_theme_fallback = 3;
$icon_themes[0]['PATH'] = "none";
$icon_themes[0]['NAME'] = "No Icons";
$icon_themes[1]['PATH'] = "template";
$icon_themes[1]['NAME'] = "Template Default Icons";
$icon_themes[2]['PATH'] = SM_PATH . 'images/themes/default/';
$icon_themes[2]['NAME'] = "Default Icon Set";
$icon_themes[3]['PATH'] = SM_PATH . 'images/themes/xp/';
$icon_themes[3]['NAME'] = "XP Style Icons";
$rpc_templateset = "default_rpc";
$aTemplateSet[0]['ID'] = 'default';
$aTemplateSet[0]['NAME'] = 'Default';
$aTemplateSet[1]['ID'] = 'default_advanced';
$aTemplateSet[1]['NAME'] = 'Advanced';
$fontsets = array();
$fontsets['serif'] = 'serif';
$fontsets['sans'] = 'helvetica,arial,sans-serif';
$fontsets['comicsans'] = 'comic sans ms,sans-serif';
$fontsets['verasans'] = 'bitstream vera sans,verdana,sans-serif';
$fontsets['tahoma'] = 'tahoma,sans-serif';
$disable_plugins = FALSE;
$disable_plugins_user = "";
$buffer_output = FALSE;
$buffered_output_handler = "";
$sm_debug_mode = SM_DEBUG_MODE_STRICT;
$secured_config = TRUE;
$sq_https_port = 443;
$sq_ignore_http_x_forwarded_headers = TRUE;
$ask_user_info = TRUE;
$plugins[0] = 'administrator';
$plugins[1] = 'filters';
$plugins[2] = 'newmail';
$plugins[3] = 'secure_login';
$plugins[4] = 'smime';
$plugins[5] = 'spamcop';
$user_themes[2]['PATH'] = SM_PATH . 'css/alien_glow/';
$user_themes[2]['NAME'] = "Alien Glow";
$user_themes[3]['PATH'] = SM_PATH . 'css/autumn/';
$user_themes[3]['NAME'] = "Autumn";
$user_themes[4]['PATH'] = SM_PATH . 'css/autumn2/';
$user_themes[4]['NAME'] = "Autumn2";
$user_themes[5]['PATH'] = SM_PATH . 'css/black_bean_burrito/';
$user_themes[5]['NAME'] = "Black Bean Burrito Theme";
$user_themes[6]['PATH'] = SM_PATH . 'css/blue_grey/';
$user_themes[6]['NAME'] = "Blue Grey Theme";
$user_themes[7]['PATH'] = SM_PATH . 'css/blue_on_blue/';
$user_themes[7]['NAME'] = "Blue on Blue";
$user_themes[8]['PATH'] = SM_PATH . 'css/bluesteel/';
$user_themes[8]['NAME'] = "BlueSteel Theme";
$user_themes[9]['PATH'] = SM_PATH . 'css/bluesome/';
$user_themes[9]['NAME'] = "Bluesome";
?>