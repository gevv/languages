<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Boards';
$txt['admin_users'] = 'Members';
$txt['admin_newsletters'] = 'Newsletters';
$txt['admin_edit_news'] = 'News';
$txt['admin_groups'] = 'Membergroups';
$txt['admin_members'] = 'Manage Members';
$txt['admin_members_list'] = 'Below is a listing of all the members currently registered with your forum.';
$txt['admin_next'] = 'Next';
$txt['admin_censored_words'] = 'Censored Words';
$txt['admin_censored_where'] = 'Put the word to be censored on the left, and what to change it to on the right.';
$txt['allow_no_censored'] = 'Allow users to turn off word censoring';
$txt['admin_censored_desc'] = 'Due to the public nature of forums there may be some words that you wish to prohibit being posted by users of your forum. You can enter any words below that you wish to be censored whenever used by a member.<br>Blank a box to remove that word.';
$txt['admin_reserved_names'] = 'Reserved Names';
$txt['admin_template_edit'] = 'Edit Your Forum Template';
$txt['admin_modifications'] = 'Add-on Settings';
$txt['admin_security_moderation'] = 'Security and Moderation';
$txt['admin_server_settings'] = 'Server Settings';
$txt['admin_reserved_set'] = 'Set Reserved Names';
$txt['admin_reserved_line'] = 'One reserved word per line.';
$txt['admin_basic_settings'] = 'This page allows you to change the basic settings for your forum. Be very careful with these settings, as they may render the forum dysfunctional.';
$txt['admin_maintain'] = 'Enable Maintenance Mode';
$txt['admin_title'] = 'Forum Title';
$txt['admin_url'] = 'Forum URL';
$txt['cookie_name'] = 'Cookie Name';
$txt['admin_webmaster_email'] = 'Webmaster Email Address';
$txt['admin_from_email'] = 'Email "From" Address';
$txt['boarddir'] = 'Wedge Directory';
$txt['sourcesdir'] = 'Sources Directory';
$txt['cachedir'] = 'Cache Directory';
$txt['admin_news'] = 'Enable News';
$txt['admin_guest_post'] = 'Enable Guest Posting';
$txt['admin_manage_members'] = 'Members';
$txt['admin_main'] = 'Main';
$txt['admin_config'] = 'Configuration';
$txt['admin_version_check'] = 'Detailed Version Check';
$txt['admin_smffile'] = 'Wedge File';
$txt['admin_smfpackage'] = 'Wedge Add-on';
$txt['admin_maintenance'] = 'Maintenance';
$txt['admin_image_text'] = 'Show buttons as images instead of text';
$txt['admin_credits'] = 'Credits';
$txt['admin_agreement'] = 'Show and require agreement letter when registering';
$txt['admin_agreement_default'] = 'Default';
$txt['admin_agreement_select_language'] = 'Language to edit';
$txt['admin_agreement_select_language_change'] = 'Change';
$txt['admin_delete_members'] = 'Delete Selected Members';
$txt['admin_repair'] = 'Repair All Boards and Topics';
$txt['admin_news_desc'] = 'Please place one news item per box. Some BBC tags, such as <span title="Are you bold?">[b]</span>, <span title="I tall icks!!">[i]</span> and <span title="Brackets are great, no?">[u]</span> are allowed in your news, as well as smileys. Clear a news item\'s text box to remove it.';
$txt['administrators'] = 'Forum Administrators';
$txt['admin_reserved_desc'] = 'Reserved names will keep members from registering certain usernames or using these words in their displayed names. Choose the options you wish to use from the bottom before submitting.';
$txt['admin_activation_email'] = 'Send activation email to new members upon registration';
$txt['admin_match_whole'] = 'Match whole name only. If unchecked, search within names.';
$txt['admin_match_case'] = 'Match case. If unchecked, search will be case insensitive.';
$txt['admin_check_user'] = 'Check username.';
$txt['admin_check_display'] = 'Check display name.';
$txt['admin_newsletter_send'] = 'You can email anyone from this page. The email addresses of the selected membergroups should appear below, but you may remove or add any email addresses you wish. Be sure that each address is separated in this fashion: \'address1; address2\'.';
$txt['admin_fader_delay'] = 'Fading delay between items for the news fader';
$txt['admin_bbc'] = 'Show BBC Buttons on Posting and PM Send Pages';

$txt['admin_backup_fail'] = 'Failed to make backup of Settings.php - make sure Settings_bak.php exists and is writable.';
$txt['modSettings_info'] = 'Change or set options that control how this forum operates.';
$txt['database_server'] = 'Database Server';
$txt['database_user'] = 'Database Username';
$txt['database_password'] = 'Database Password';
$txt['database_name'] = 'Database Name';
$txt['registration_agreement'] = 'Registration Agreement';
$txt['registration_agreement_desc'] = 'This agreement is shown when a user registers an account on this forum and has to be accepted before users can continue registration.';
$txt['database_prefix'] = 'Database Tables Prefix';
$txt['errors_list'] = 'Listing of forum errors';
$txt['errors_found'] = 'The following errors are fouling up your forum';
$txt['errors_fix'] = 'Would you like to attempt to fix these errors?';
$txt['errors_do_recount'] = 'All errors fixed - a salvage area has been created! Please click the button below to recount some key statistics.';
$txt['errors_recount_now'] = 'Recount Statistics';
$txt['errors_fixing'] = 'Fixing forum errors';
$txt['errors_fixed'] = 'All errors fixed! Please check on any categories, boards, or topics created to decide what to do with them.';
$txt['attachments_avatars'] = 'Attachments and Avatars';
$txt['attachments_desc'] = 'From here you can administer the attached files on your system. You can delete attachments by size and by date from your system. Statistics on attachments are also displayed below.';
$txt['attachment_stats'] = 'File Attachment Statistics';
$txt['attachment_integrity_check'] = 'Attachment Integrity Check';
$txt['attachment_integrity_check_desc'] = 'This function will check the integrity and sizes of attachments and filenames listed in the database and, if necessary, fix errors it encounters.';
$txt['attachment_check_now'] = 'Run check now';
$txt['attachment_pruning'] = 'Attachment Pruning';
$txt['attachment_pruning_message'] = 'Message to add to post';
$txt['attachment_pruning_warning'] = 'Are you sure you want to delete these attachments?\\nThis cannot be undone!';
$txt['attachment_total'] = 'Total Attachments';
$txt['attachmentdir_size'] = 'Total Size of Attachment Directory';
$txt['attachmentdir_size_current'] = 'Total Size of Current Attachment Directory';
$txt['attachment_space'] = 'Total Space Available in Attachment Directory';
$txt['attachment_space_current'] = 'Total Space Available in Current Attachment Directory';
$txt['attachment_options'] = 'File Attachment Options';
$txt['attachment_log'] = 'Attachment Log';
$txt['attachment_remove_old'] = 'Remove attachments older than';
$txt['attachment_remove_size'] = 'Remove attachments larger than';
$txt['attachment_name'] = 'Attachment Name';
$txt['attachment_file_size'] = 'File Size';
$txt['attachmentdir_size_not_set'] = 'No maximum directory size is currently set';
$txt['attachment_delete_admin'] = '[attachment deleted by admin]';
$txt['live'] = 'Live from Wedge...';
$txt['remove_all'] = 'Remove All';
$txt['approve_new_members'] = 'Admin must approve all new members';
$txt['agreement_not_writable'] = 'Warning - agreement.txt is not writable, any changes you make will NOT be saved.';

$txt['version_check_desc'] = 'This shows you the versions of your server, as well as comparing your installation\'s files to the latest version. If any of these files are out of date, you should download and upgrade to the latest version at <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a>.';
$txt['version_check_more'] = '(more detailed)';

$txt['lfyi'] = 'Unable to retrieve Wedge.org\'s latest news.';

$txt['manage_calendar'] = 'Calendar';
$txt['manage_search'] = 'Search';

$txt['smileys_manage'] = 'Smileys and Message Icons';
$txt['smileys_manage_info'] = 'Install new smiley sets, add smileys to existing ones, or manage your message icons.';
$txt['package_info'] = 'Install new features or modify existing ones with this interface.';
$txt['theme_admin'] = 'Themes and Layout';
$txt['theme_admin_info'] = 'Setup and manage your themes and set or reset theme options.';
$txt['registration_center'] = 'Registration';
$txt['member_center_info'] = 'View the member list, search for members and manage not-yet-approved members and members who haven\'t activated their account yet.';

$txt['viewmembers_name'] = 'Username (display name)';
$txt['viewmembers_online'] = 'Last Online';
$txt['viewmembers_today'] = 'Today';
$txt['viewmembers_day_ago'] = 'day ago';
$txt['viewmembers_days_ago'] = 'days ago';

$txt['display_name'] = 'Display name';
$txt['email_address'] = 'Email Address';
$txt['ip_address'] = 'IP address';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'unknown';
$txt['security_wrong'] = 'Administration login attempt!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Send in HTML format. (With this, you can put normal HTML in the email.)';
$txt['email_parsed_html'] = 'Add &lt;br /&gt;s and &amp;nbsp;s to this message.';
$txt['email_variables'] = 'In this message you can use a few &quot;variables&quot;. Click <a href="' . $scripturl . '?action=help;in=emailmembers" onclick="return reqWin(this);">here</a> for more information.';
$txt['email_force'] = 'Send this to members even if they have chosen not to receive announcements.';
$txt['email_as_pms'] = 'Send this to these groups using personal messages.';
$txt['email_continue'] = 'Continue';
$txt['email_done'] = 'done.';

$txt['ban_title'] = 'Ban List';
$txt['ban_ip'] = 'IP banning: (e.g. 192.168.12.213 or 128.0.*.*) - one entry per line';
$txt['ban_email'] = 'Email banning: (e.g. badguy@somewhere.com) - one entry per line';
$txt['ban_username'] = 'User name banning: (e.g. l33tuser) - one entry per line';

$txt['ban_description'] = 'Here you can ban troublesome people either by IP, hostname, username, or email.';
$txt['ban_add_new'] = 'Add New Ban';
$txt['ban_banned_entity'] = 'Banned entity';
$txt['ban_on_ip'] = 'Ban on IP (e.g. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Ban on Hostname (e.g. *.mil)';
$txt['ban_on_email'] = 'Ban on Email Address (e.g. *@badsite.com)';
$txt['ban_on_username'] = 'Ban on Username';
$txt['ban_notes'] = 'Notes';
$txt['ban_restriction'] = 'Restriction';
$txt['ban_full_ban'] = 'Full ban';
$txt['ban_partial_ban'] = 'Partial ban';
$txt['ban_cannot_post'] = 'Cannot post';
$txt['ban_cannot_register'] = 'Cannot register';
$txt['ban_cannot_login'] = 'Cannot login';
$txt['ban_add'] = 'Add';
$txt['ban_edit_list'] = 'Ban List';
$txt['ban_type'] = 'Ban Type';
$txt['ban_days'] = 'day(s)';
$txt['ban_will_expire_within'] = 'Ban will expire after';
$txt['ban_added'] = 'Added';
$txt['ban_expires'] = 'Expires';
$txt['ban_hits'] = 'Hits';
$txt['ban_actions'] = 'Actions';
$txt['ban_expiration'] = 'Expiration';
$txt['ban_reason_desc'] = 'Reason for ban, to be displayed to banned member.';
$txt['ban_notes_desc'] = 'Notes that may assist other staff members.';
$txt['ban_remove_selected'] = 'Remove selected';
$txt['ban_remove_selected_confirm'] = 'Are you sure you want to remove the selected bans?';
$txt['ban_modify'] = 'Modify';
$txt['ban_name'] = 'Ban name';
$txt['ban_edit'] = 'Edit ban';
$txt['ban_add_notes'] = '<strong>Note</strong>: after creating the above ban, you can add additional entries that trigger the ban, like IP addresses, hostnames and email addresses.';
$txt['ban_expired'] = 'Expired / disabled';
$txt['ban_restriction_empty'] = 'No restriction selected.';

$txt['ban_triggers'] = 'Triggers';
$txt['ban_add_trigger'] = 'Add ban trigger';
$txt['ban_add_trigger_submit'] = 'Add';
$txt['ban_edit_trigger'] = 'Modify';
$txt['ban_edit_trigger_title'] = 'Edit ban trigger';
$txt['ban_edit_trigger_submit'] = 'Modify';
$txt['ban_remove_selected_triggers'] = 'Remove selected ban triggers';
$txt['ban_no_entries'] = 'There are currently no bans in effect.';
$txt['ban_remove_selected_triggers_confirm'] = 'Are you sure you want to remove the selected ban triggers?';
$txt['ban_trigger_browse'] = 'Browse Ban Triggers';
$txt['ban_trigger_browse_description'] = 'This screen shows all banned entities grouped by IP address, hostname, email address and username.';

$txt['ban_log'] = 'Ban Log';
$txt['ban_log_description'] = 'The ban log shows all attempts to enter the forum by banned users (\'full ban\' and \'cannot register\' ban only).';
$txt['ban_log_no_entries'] = 'There are currently no ban log entries.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Email address';
$txt['ban_log_member'] = 'Member';
$txt['ban_log_date'] = 'Date';
$txt['ban_log_remove_all'] = 'Remove all';
$txt['ban_log_remove_all_confirm'] = 'Are you sure you want to delete all ban log entries?';
$txt['ban_log_remove_selected'] = 'Remove selected';
$txt['ban_log_remove_selected_confirm'] = 'Are you sure you want to delete all selected ban log entries?';
$txt['ban_no_triggers'] = 'There are currently no ban triggers.';

$txt['settings_not_writable'] = 'These settings cannot be changed because Settings.php is read only.';

$txt['maintain_title'] = 'Forum Maintenance';
$txt['maintain_info'] = 'Optimize tables, make backups, check for errors, and prune boards with these tools.';
$txt['maintain_sub_database'] = 'Database';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = 'Members';
$txt['maintain_sub_topics'] = 'Topics';
$txt['maintain_done'] = 'The maintenance task \'%1$s\' was executed successfully.';
$txt['maintain_no_errors'] = 'Congratulations, no errors found! Thanks for checking.';

$txt['maintain_tasks'] = 'Scheduled Tasks';
$txt['maintain_tasks_desc'] = 'Manage all the tasks scheduled by Wedge.';

$txt['scheduled_log'] = 'Task Log';
$txt['scheduled_log_desc'] = 'Lists logs of the tasks that have be ran.';
$txt['admin_log'] = 'Administration Log';
$txt['admin_log_desc'] = 'Lists administrative tasks that have been performed by admins of your forum.';
$txt['moderation_log'] = 'Moderation Log';
$txt['moderation_log_desc'] = 'Lists moderation activities that have been performed by moderators on your forum.';
$txt['spider_log_desc'] = 'Review the entries related to search engine spider activity on your forum.';
$txt['pruning_log_desc'] = 'Use these tools to prune older entries in the various logs.';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'Send emails on database connection error';
$txt['db_persist'] = 'Use a persistent connection';
$txt['ssi_db_user'] = 'Database username to use in SSI mode';
$txt['ssi_db_passwd'] = 'Database password to use in SSI mode';

$txt['default_language'] = 'Default Forum Language';

$txt['maintenance_subject'] = 'Subject for display';
$txt['maintenance_message'] = 'Message for display';

$txt['errlog_desc'] = 'The error log tracks every error encountered by your forum. To delete any errors from the database, mark the checkbox, and click the %1$s button at the bottom of the page.';
$txt['errlog_no_entries'] = 'There are currently no error log entries.';

$txt['theme_settings'] = 'Theme Settings';
$txt['theme_current_settings'] = 'Current Theme';

$txt['dvc_your'] = 'Your Version';
$txt['dvc_current'] = 'Current Version';
$txt['dvc_sources'] = 'Sources';
$txt['dvc_default'] = 'Default Templates';
$txt['dvc_templates'] = 'Current Templates';
$txt['dvc_languages'] = 'Language Files';

$txt['smileys_default_set_for_theme'] = 'Select default smiley set for this theme';
$txt['smileys_no_default'] = '(use global default smiley set)';

$txt['censor_test'] = 'Test Censored Words';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Ignore case when censoring';
$txt['censor_whole_words'] = 'Check only whole words';

$txt['admin_confirm_password'] = '(confirm)';
$txt['admin_incorrect_password'] = 'Incorrect Password';

$txt['date_format'] = '(YYYY-MM-DD)';
$txt['undefined_gender'] = 'Undefined';
$txt['age'] = 'User age';
$txt['activation_status'] = 'Activation Status';
$txt['activated'] = 'Activated';
$txt['not_activated'] = 'Not activated';
$txt['primary'] = 'Primary';
$txt['additional'] = 'Additional';
$txt['messenger_address'] = 'Messenger Address';
$txt['wild_cards_allowed'] = 'wildcard characters * and ? are allowed';
$txt['search_for'] = 'Search for';
$txt['member_part_of_these_membergroups'] = 'Member is part of these membergroups';
$txt['membergroups'] = 'Membergroups';
$txt['confirm_delete_members'] = 'Are you sure you want to delete the selected members?';

$txt['support_credits_title'] = 'Support and Credits';
$txt['support_credits_info'] = 'Get support on common issues and version information to give if you have problems.';
$txt['support_title'] = 'Support Information';
$txt['support_versions_current'] = 'Current Wedge version';
$txt['support_versions_forum'] = 'Forum version';
$txt['support_versions_php'] = 'PHP version';
$txt['support_versions_db'] = '%1$s version';
$txt['support_versions_server'] = 'Server version';
$txt['support_versions_gd'] = 'GD version';
$txt['support_versions'] = 'Version Information';

$txt['support_latest'] = 'Common Support &amp; Issues';
$txt['support_latest_fetch'] = 'Retrieving support information...';

$txt['edit_permissions_info'] = 'Change restrictions and available features globally or to specific boards.';
$txt['membergroups_members'] = 'Regular Members';
$txt['membergroups_guests'] = 'Guests';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = 'Add group';
$txt['membergroups_permissions'] = 'Permissions';

$txt['permitgroups_restrict'] = 'Restrictive';
$txt['permitgroups_standard'] = 'Standard';
$txt['permitgroups_moderator'] = 'Moderator';
$txt['permitgroups_maintenance'] = 'Maintenance';
$txt['permitgroups_inherit'] = 'Inherit';

$txt['confirm_delete_attachments_all'] = 'Are you sure you want to delete all attachments?';
$txt['confirm_delete_attachments'] = 'Are you sure you want to delete the selected attachments?';
$txt['attachment_manager_browse_files'] = 'Browse Files';
$txt['attachment_manager_repair'] = 'Maintain';
$txt['attachment_manager_avatars'] = 'Avatars';
$txt['attachment_manager_attachments'] = 'Attachments';
$txt['attachment_manager_thumbs'] = 'Thumbnails';
$txt['attachment_manager_last_active'] = 'Last Active';
$txt['attachment_manager_member'] = 'Member';
$txt['attachment_manager_avatars_older'] = 'Remove avatars from members not active for more than';
$txt['attachment_manager_total_avatars'] = 'Total Avatars';

$txt['attachment_manager_avatars_no_entries'] = 'There are currently no avatars.';
$txt['attachment_manager_attachments_no_entries'] = 'There are currently no attachments.';
$txt['attachment_manager_thumbs_no_entries'] = 'There are currently no thumbnails.';

$txt['attachment_manager_settings'] = 'Attachment Settings';
$txt['attachment_manager_avatar_settings'] = 'Avatar Settings';
$txt['attachment_manager_browse'] = 'Browse Files';
$txt['attachment_manager_maintenance'] = 'File Maintenance';
$txt['attachment_manager_save'] = 'Save';

$txt['attachmentEnable'] = 'Attachments mode';
$txt['attachmentEnable_deactivate'] = 'Disable attachments';
$txt['attachmentEnable_enable_all'] = 'Enable all attachments';
$txt['attachmentEnable_disable_new'] = 'Disable new attachments';
$txt['attachmentCheckExtensions'] = 'Check attachment\'s extension';
$txt['attachmentExtensions'] = 'Allowed attachment extensions';
$txt['attachmentRecodeLineEndings'] = 'Recode line endings in textual attachments';
$txt['attachmentShowImages'] = 'Display image attachments as pictures under post';
$txt['attachmentEncryptFilenames'] = 'Encrypt stored filenames';
$txt['attachmentUploadDir'] = 'Attachments directory<dfn><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Configure multiple attachment directories</a></dfn>';
$txt['attachmentUploadDir_multiple'] = 'Attachments directory';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configure multiple attachment directories]</a>';
$txt['attachmentDirSizeLimit'] = 'Max attachment folder space<dfn>(0 for no limit)</dfn>';
$txt['attachmentPostLimit'] = 'Max attachment size per post<dfn>(0 for no limit)</dfn>';
$txt['attachmentSizeLimit'] = 'Max size per attachment<dfn>(0 for no limit)</dfn>';
$txt['attachmentNumPerPostLimit'] = 'Max number of attachments per post<dfn>(0 for no limit)</dfn>';
$txt['attachment_image_reencode'] = 'Re-encode potentially dangerous image attachments';
$txt['attachment_image_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected attachments.';
$txt['attachment_image_paranoid'] = 'Perform extensive security checks on uploaded image attachments';
$txt['attachmentThumbnails'] = 'Resize images when showing under posts';
$txt['attachment_thumb_png'] = 'Save thumbnails as PNG';
$txt['attachmentThumbWidth'] = 'Maximum width of thumbnails';
$txt['attachmentThumbHeight'] = 'Maximum height of thumbnails';

$txt['attach_dir_does_not_exist'] = 'Does Not Exist';
$txt['attach_dir_not_writable'] = 'Not Writable';
$txt['attach_dir_files_missing'] = 'Files Missing (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repair</a>)';
$txt['attach_dir_unused'] = 'Unused';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Manage Attachment Paths';
$txt['attach_paths'] = 'Attachment Paths';
$txt['attach_current_dir'] = 'Current Directory';
$txt['attach_path'] = 'Path';
$txt['attach_current_size'] = 'Current Size (KB)';
$txt['attach_num_files'] = 'Files';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Add Path';
$txt['attach_path_current_bad'] = 'Invalid current attachment path.';

$txt['mods_cat_avatars'] = 'Avatars';
$txt['avatar_directory'] = 'Avatars directory';
$txt['avatar_url'] = 'Avatars URL';
$txt['avatar_dimension_note'] = '(0 = no limit)';
$txt['avatar_max_width_external'] = 'Maximum width of external avatar<dfn>(0 for no limit)</dfn>';
$txt['avatar_max_height_external'] = 'Maximum height of external avatar<dfn>(0 for no limit)</dfn>';
$txt['avatar_action_too_large'] = 'If the avatar is too large...';
$txt['option_refuse'] = 'Refuse it';
$txt['option_html_resize'] = 'Let the HTML resize it';
$txt['option_js_resize'] = 'Resize it with JavaScript';
$txt['option_download_and_resize'] = 'Download and resize it';
$txt['avatar_max_width_upload'] = 'Maximum width of uploaded avatar<dfn>(0 for no limit)</dfn>';
$txt['avatar_max_height_upload'] = 'Maximum height of uploaded avatar<dfn>(0 for no limit)</dfn>';
$txt['avatar_resize_upload'] = 'Resize oversized large avatars';
$txt['avatar_download_png'] = 'Use PNG for resized avatars';
$txt['avatar_external'] = 'External avatars';
$txt['avatar_upload'] = 'Uploadable avatars';
$txt['avatar_server_stored'] = 'Server-stored avatars';
$txt['avatar_server_stored_groups'] = 'Membergroups allowed to select a server stored avatar';
$txt['avatar_upload_groups'] = 'Membergroups allowed to upload an avatar to the server';
$txt['avatar_external_url_groups'] = 'Membergroups allowed to select an external URL';
$txt['gravatar_settings'] = 'Gravatars (Globally Recognised Avatars)';
$txt['gravatarEnabled'] = 'Enable Gravatars for forum users?';
$txt['gravatarOverride'] = 'Force Gravatars to be used instead of normal avatars?';
$txt['gravatarAllowExtraEmail'] = 'Allow storing an extra email address for Gravatars?';
$txt['gravatarMaxRating'] = 'Maximum allowed rating?';
$txt['gravatar_maxG'] = 'G rated (Generally acceptable)';
$txt['gravatar_maxPG'] = 'PG rated (Parental Guidance)';
$txt['gravatar_maxR'] = 'R rated (Restricted)';
$txt['gravatar_maxX'] = 'X rated (Explicit)';
$txt['avatar_defaults'] = 'Default avatars';
$txt['avatar_select_permission'] = 'Select permissions for each group';
$txt['avatar_download_external'] = 'Download avatar at given URL';
$txt['custom_avatar_enabled'] = 'Upload avatars to...';
$txt['option_attachment_dir'] = 'Attachment directory';
$txt['option_specified_dir'] = 'Specific directory...';
$txt['custom_avatar_dir'] = 'Upload directory';
$txt['custom_avatar_dir_desc'] = 'This should not be the same as the server-stored directory.';
$txt['custom_avatar_url'] = 'Upload URL';
$txt['custom_avatar_check_empty'] = 'The custom avatar directory you have specified may be empty or invalid. Please ensure these settings are correct.';
$txt['avatar_reencode'] = 'Re-encode potentially dangerous avatars';
$txt['avatar_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected avatars.';
$txt['avatar_paranoid'] = 'Perform extensive security checks on uploaded avatars';
$txt['avatar_banned_hide'] = 'Hide the avatar of banned users';

$txt['repair_attachments'] = 'Maintain Attachments';
$txt['repair_attachments_complete'] = 'Maintenance Complete';
$txt['repair_attachments_complete_desc'] = 'All selected errors have now been corrected';
$txt['repair_attachments_no_errors'] = 'No errors were found!';
$txt['repair_attachments_error_desc'] = 'The follow errors were found during maintenance. Check the box next to the errors you wish to fix and hit continue.';
$txt['repair_attachments_continue'] = 'Continue';
$txt['repair_attachments_cancel'] = 'Cancel';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d thumbnails are missing a parent attachment';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d parents are flagged as having thumbnails but don\'t';
$txt['attach_repair_file_missing_on_disk'] = '%1$d attachments/avatars have an entry but no longer exist on disk';
$txt['attach_repair_file_wrong_size'] = '%1$d attachments/avatars are being reported as the wrong filesize';
$txt['attach_repair_file_size_of_zero'] = '%1$d attachments/avatars have a size of zero on disk. (These will be deleted)';
$txt['attach_repair_attachment_no_msg'] = '%1$d attachments no longer have a message associated with them';
$txt['attach_repair_avatar_no_member'] = '%1$d avatars no longer have a member associated with them';
$txt['attach_repair_wrong_folder'] = '%1$d attachments are in the wrong folder';

$txt['news_title'] = 'News and Newsletters';
$txt['news_settings_desc'] = 'Here you can change the settings and permissions related to news and newsletters.';
$txt['news_settings_submit'] = 'Save';
$txt['news_mailing_desc'] = 'From this menu you can send messages to all members who\'ve registered and entered their email addresses. You may edit the distribution list, or send messages to all. Useful for important update/news information.';
$txt['groups_edit_news'] = 'Groups allowed to edit news items';
$txt['groups_send_mail'] = 'Groups allowed to send out forum newsletters';
$txt['xmlnews_enable'] = 'Enable Atom feeds';
$txt['xmlnews_maxlen'] = 'Maximum message length:<dfn>(0 to disable, bad idea.)</dfn>';
$txt['editnews_clickadd'] = 'Click here to add another item.';
$txt['editnews_remove_selected'] = 'Remove selected';
$txt['editnews_remove_confirm'] = 'Are you sure you want to delete the selected news items?';
$txt['censor_clickadd'] = 'Click here to add another word.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Logs';
$txt['generate_reports'] = 'Reports';

$txt['update_available'] = 'Update Available!';
$txt['update_message'] = 'You\'re using an outdated version of Wedge, which contains some bugs which have since been fixed.
	It is recommended that you <a href="#" id="update-link">update your forum</a> to the latest version as soon as possible. It only takes a minute!';

$txt['manageposts'] = 'Posts and Topics';
$txt['manageposts_title'] = 'Manage Posts and Topics';
$txt['manageposts_description'] = 'Here you can manage all settings related to topics and posts.';

$txt['manageposts_seconds'] = 'seconds';
$txt['manageposts_minutes'] = 'minutes';
$txt['manageposts_characters'] = 'characters';
$txt['manageposts_days'] = 'days';
$txt['manageposts_posts'] = 'posts';
$txt['manageposts_topics'] = 'topics';

$txt['manageposts_settings'] = 'Post Settings';
$txt['manageposts_settings_description'] = 'Here you can set everything related to posts and posting.';
$txt['manageposts_settings_submit'] = 'Save';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Bulletin board code can be used to add markup to forum messages. For example, to highlight the word \'house\' you can type [b]house[/b]. All Bulletin board code tags are surrounded by square brackets (\'[\' and \']\').';
$txt['manageposts_bbc_settings_title'] = 'Bulletin Board Code Settings';
$txt['manageposts_bbc_settings_submit'] = 'Save';

$txt['manageposts_topic_settings'] = 'Topic Settings';
$txt['manageposts_topic_settings_description'] = 'Here you can set all settings involving topics.';
$txt['manageposts_topic_settings_submit'] = 'Save';

$txt['manageposts_draft_settings'] = 'Draft Settings';
$txt['manageposts_draft_settings_description'] = 'Here you can set all settings involving draft posts.';
$txt['manageposts_draft_settings_submit'] = 'Save';

$txt['manageposts_merge'] = 'Merging';

$txt['removeNestedQuotes'] = 'Remove nested quotes when quoting';
$txt['enableEmbeddedFlash'] = 'Embed flash into posts';
$txt['enableEmbeddedFlash_warning'] = 'May be a security risk!';
$txt['enableSpellChecking'] = 'Enable spell checking';
$txt['enableSpellChecking_warning'] = 'This does not work on all servers!';
$txt['disable_wysiwyg'] = 'Disable WYSIWYG editor';
$txt['max_messageLength'] = 'Maximum allowed post size';
$txt['max_messageLength_zero'] = '0 for no max.';
$txt['fixLongWords'] = 'Break up words with more letters than';
$txt['fixLongWords_zero'] = '0 to disable.';
$txt['fixLongWords_warning'] = 'This does not work on all servers!';
$txt['topicSummaryPosts'] = 'Posts to show on topic summary';
$txt['spamWaitTime'] = 'Time required between posts from the same IP';
$txt['edit_wait_time'] = 'Courtesy edit wait time';
$txt['edit_disable_time'] = 'Maximum time after posting to allow edit';
$txt['edit_disable_time_zero'] = '0 to disable';
$txt['max_image_width'] = 'Max width of posted pictures (0 = disable)';
$txt['max_image_height'] = 'Max height of posted pictures (0 = disable)';

$txt['enableBBC'] = 'Enable bulletin board code (BBC)';
$txt['enablePostHTML'] = 'Enable <em>basic</em> HTML in posts';
$txt['autoLinkUrls'] = 'Automatically link posted URLs';
$txt['disabledBBC'] = 'Enabled BBC tags';
$txt['bbcTagsToUse'] = 'Enabled BBC tags';
$txt['bbcTagsToUse_select'] = 'Select the tags allowed to be used';
$txt['bbcTagsToUse_select_all'] = 'Select all tags';

$txt['enableParticipation'] = 'Enable participation icons';
$txt['oldTopicDays'] = 'Time before topic is warned as old on reply';
$txt['oldTopicDays_zero'] = '0 to disable';
$txt['defaultMaxTopics'] = 'Number of topics per page in the message index';
$txt['defaultMaxMessages'] = 'Number of posts per page in a topic page';
$txt['enableAllMessages'] = 'Max topic size to show &quot;All&quot; posts';
$txt['enableAllMessages_zero'] = '0 to never show &quot;All&quot;';
$txt['disableCustomPerPage'] = 'Disable user-defined topic/message count per page';
$txt['enablePreviousNext'] = 'Enable previous/next topic links';

$txt['ignoreMoveVsNew'] = 'When moving topics, allow moving to any board by default';

$txt['masterSavePostDrafts'] = 'Enable saving of post drafts';
$txt['masterAutoSavePostDrafts'] = 'Enable automatic saving of post drafts';
$txt['masterSavePmDrafts'] = 'Enable saving of personal message drafts';
$txt['masterAutoSavePmDrafts'] = 'Enable automatic saving of personal message drafts';
$txt['draftsave_subnote'] = 'Note that the user must still have permission in the Permissions area.';
$txt['draftautosave_subnote'] = 'This does not override the above option, merely extending it. Also, user must have permission.';
$txt['masterAutoSaveDraftsDelay'] = 'How often should posts be autosaved?';
$txt['pruneSaveDrafts'] = 'Prune drafts after how many days?';

$txt['not_done_title'] = 'Not done yet!';
$txt['not_done_reason'] = 'To avoid overloading your server, the process has been temporarily paused. It should automatically continue in a few seconds. If it doesn\'t, please click continue below.';
$txt['not_done_continue'] = 'Continue';

$txt['general_settings'] = 'General';
$txt['database_paths_settings'] = 'Database and Paths';
$txt['cookies_sessions_settings'] = 'Cookies and Sessions';
$txt['caching_settings'] = 'Caching';
$txt['load_balancing_settings'] = 'Load Balancing';
$txt['proxy_settings'] = 'Proxy Settings';

$txt['language_configuration'] = 'Languages';
$txt['language_description'] = 'This section allows you to edit languages installed on your forum, download new ones from the Simple Machines website. You may also edit language-related settings here.';
$txt['language_edit'] = 'Edit Languages';
$txt['language_add'] = 'Add Language';
$txt['language_settings'] = 'Settings';

$txt['advanced'] = 'Advanced';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Please select who should receive a copy of the newsletter';
$txt['admin_news_select_group'] = 'Membergroups';
$txt['admin_news_select_group_desc'] = 'Select the groups to receive this newsletter.';
$txt['admin_news_select_members'] = 'Members';
$txt['admin_news_select_members_desc'] = 'Additional members to receive newsletter.';
$txt['admin_news_select_excluded_members'] = 'Excluded Members';
$txt['admin_news_select_excluded_members_desc'] = 'Members who should not receive newsletter.';
$txt['admin_news_select_excluded_groups'] = 'Excluded Groups';
$txt['admin_news_select_excluded_groups_desc'] = 'Select groups who should definitely not receive the newsletter.';
$txt['admin_news_select_email'] = 'Email Addresses';
$txt['admin_news_select_email_desc'] = 'A semi-colon separated list of email addresses which should be sent newsletter. (i.e. address1; address2)';
$txt['admin_news_select_override_notify'] = 'Override Notification Settings';
$txt['admin_news_cannot_pm_emails_js'] = 'You cannot send a personal message to an email address. If you continue all entered email addresses will be ignored.\\n\\nAre you sure you wish to do this?';

$txt['mailqueue_browse'] = 'Browse Queue';
$txt['mailqueue_settings'] = 'Settings';

$txt['admin_search'] = 'Quick Search';
$txt['admin_search_type_internal'] = 'Task/Setting';
$txt['admin_search_type_member'] = 'Member';
$txt['admin_search_go'] = 'Go';
$txt['admin_search_results'] = 'Search Results';
$txt['admin_search_results_desc'] = 'Results for search: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Search again';
$txt['admin_search_results_none'] = 'No results found!';
$txt['admin_search_welcome'] = 'Welcome to the Wedge admin panel. You can access the many features through the menu, or by using the shortcut icons below. If you\'re lost, try typing a word or two of the feature name into the search box on the right.';

$txt['admin_search_section_sections'] = 'Section';
$txt['admin_search_section_settings'] = 'Setting';

$txt['core_settings_title'] = 'Core Features';
$txt['mods_cat_features'] = 'General';
$txt['mods_cat_security_general'] = 'General';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Miscellaneous';
$txt['mods_cat_layout'] = 'Layout';
$txt['moderation_settings_short'] = 'Moderation';
$txt['signature_settings_short'] = 'Signatures';
$txt['custom_profile_shorttitle'] = 'Profile Fields';
$txt['pruning_title'] = 'Log Pruning';

$txt['boardsEdit'] = 'Modify Boards';
$txt['mboards_new_cat'] = 'Create New Category';
$txt['manage_holidays'] = 'Manage Holidays';
$txt['calendar_settings'] = 'Calendar Settings';
$txt['search_weights'] = 'Weights';
$txt['search_method'] = 'Search Method';

$txt['smiley_sets'] = 'Smiley Sets';
$txt['smileys_add'] = 'Add Smiley';
$txt['smileys_edit'] = 'Edit Smileys';
$txt['smileys_set_order'] = 'Set Smiley Order';
$txt['icons_edit_message_icons'] = 'Edit Message Icons';

$txt['membergroups_new_group'] = 'Add Membergroup';
$txt['membergroups_edit_groups'] = 'Edit Membergroups';
$txt['permissions_groups'] = 'General Permissions';
$txt['permissions_boards'] = 'Board Permissions';
$txt['permissions_profiles'] = 'Edit Profiles';
$txt['permissions_post_moderation'] = 'Post Moderation';

$txt['browse_packages'] = 'Browse Add-ons';
$txt['download_packages'] = 'Download Add-ons';
$txt['package_file_perms'] = 'File Permissions';
$txt['package_settings'] = 'Options';
$txt['themeadmin_admin_title'] = 'Manage and Install';
$txt['themeadmin_list_title'] = 'Theme Settings';
$txt['themeadmin_reset_title'] = 'Member Options';
$txt['themeadmin_edit_title'] = 'Modify Themes';
$txt['admin_browse_register_new'] = 'Register New Member';

$txt['search_engines'] = 'Search Engines';
$txt['spiders'] = 'Spiders';
$txt['spider_logs'] = 'Spider Log';
$txt['spider_stats'] = 'Stats';

$txt['paid_subscriptions'] = 'Paid Subscriptions';
$txt['paid_subs_view'] = 'View Subscriptions';

$txt['max_urlLength'] = 'In posts, shorten URLs longer than...<dfn>Default is 50 characters. Set to 0 to disable.</dfn>';

$txt['allow_ignore_topics'] = 'Enable members to ignore topics';

// Merge double posts
$txt['merge_post_header'] = 'Merging double posts';
$txt['merge_post_auto'] = 'Merge double posts automatically';
$txt['merge_post_auto_time'] = 'Delay after which posts are no longer merged automatically.<dfn>(Set to 0 to always merge)</dfn>';
$txt['merge_post_admin_double_post'] = 'Merge double posts sent by administrators';
$txt['merge_post_no_time'] = 'Don\'t show the older post\'s date before the separator';
$txt['merge_post_no_sep'] = 'Show neither the separator, nor the older post\'s date.';
$txt['merge_post_ignore_length'] = 'Ignore posts\' maximum length';
$txt['merge_post_separator'] = 'Separator between merged posts (enable the setting above.)<dfn>You may use BBCode. You can get the older post\'s date by using the <strong>$date</strong> variable in the text field.<br>Default is [size=1]$date[/size][hr][br]</dfn>';
$txt['merge_post_custom_separator'] = 'Use a custom separator between merged posts.<dfn>The settings above will be disabled.</dfn>';

// Pretty URLs
$txt['pretty_urls'] = 'Pretty URLs';
$txt['pretty_urls_desc'] = 'Pretty URLs allows you to enable better-looking URLs in the address bar. Search engines like this, too. Here, you can enable Pretty URLs, filter by filter, as well as repopulate topic data.';

$txt['pretty'] = array(
	'url' => 'Pretty URL',
	'url_desc' => 'A URL fragment used for boards and topics.<br>Note: this will be processed as only a limited set of characters are allowed - other characters will be converted. Leave blank to use the board name. <strong>Once a URL is chosen, try not to change it again!</strong>',
);

$txt['pretty_settings'] = 'Core settings';
$txt['pretty_maintenance'] = 'Maintenance';

$txt['admin_pretty_urls'] = 'Pretty URLs Administration';
$txt['pretty_refill'] = 'Refill topic subjects';
$txt['pretty_cache'] = 'Enable URL cache';
$txt['pretty_filters'] = 'URL rewriting filters';
$txt['pretty_save'] = 'Save changes';
$txt['pretty_converted'] = 'All topic titles are now converted!';
$txt['pretty_duplicateboard'] = 'This address is already in use. Please go back and change it.';
$txt['pretty_filter_boards'] = 'Wedge URLs<br>&nbsp;&nbsp;<div class="pretty_filter">http://yoursite.com/index.php?board=1 &rarr; http://yoursite.com/wedge-name/</div>';
$txt['pretty_filter_topics'] = 'Topic URLs<br>&nbsp;&nbsp;<div class="pretty_filter">http://yoursite.com/index.php?topic=1.0 &rarr; http://yoursite.com/wedge-name/topic-name/</div>';
$txt['pretty_filter_actions'] = 'Action URLs<br>&nbsp;&nbsp;<div class="pretty_filter">http://yoursite.com/index.php?action=hello &rarr; http://yoursite.com/hello/</div>';
$txt['pretty_filter_profiles'] = 'Profile URLs<br>&nbsp;&nbsp;<div class="pretty_filter">http://yoursite.com/index.php?action=profile;u=1 &rarr; http://yoursite.com/~user-name/<br>As this uses the login name (user name) of an account rather than its display name, it may not be desirable to your users.</div>';

// Media Gallery
$txt['media_title'] = 'Media';
$txt['media_admin_labels_index'] = 'Index';
$txt['media_admin_labels_settings'] = 'Settings';
$txt['media_admin_labels_embed'] = 'Auto-Embedding';
$txt['media_admin_labels_reports'] = 'Reports';
$txt['media_admin_labels_submissions'] = 'Submissions';
$txt['media_admin_labels_bans'] = 'Bans';
$txt['media_admin_labels_albums'] = 'Albums';
$txt['media_admin_labels_maintenance'] = 'Maintenance';
$txt['media_admin_labels_about'] = 'About';
$txt['media_admin_labels_ftp'] = 'FTP Import';
$txt['media_admin_labels_perms'] = 'Permission Profiles';
$txt['media_admin_labels_quotas'] = 'Quota Profiles';
$txt['media_admin_settings_config'] = 'Configuration';
$txt['media_admin_settings_sites'] = 'Sitelist';
$txt['media_admin_readme'] = 'Read Me';
$txt['media_admin_changelog'] = 'Changelog';
$txt['media_admin_settings_meta'] = 'Metadata';
$txt['media_admin_settings_layout'] = 'Layout';
$txt['media_admin_add_album'] = 'New Album';
$txt['media_admin_filter_normal_albums'] = 'Filter regular albums';
$txt['media_admin_filter_featured_albums'] = 'Filter featured albums';
$txt['media_admin_maintenance_all_tasks'] = 'All tasks';
$txt['media_admin_maintenance_tasks'] = 'Maintenance Tasks';
$txt['media_admin_maintenance_utils'] = 'Maintenance Utilities';
$txt['media_admin_maintenance_regen'] = 'Regenerating thumbnails and previews';
$txt['media_admin_maintenance_recount'] = 'Recount totals';
$txt['media_admin_maintenance_finderrors'] = 'Find errors';
$txt['media_admin_maintenance_prune'] = 'Prune';
$txt['media_admin_maintenance_browse'] = 'Browse Files';
$txt['media_admin_maintenance_checkfiles'] = 'Check for extra files';
$txt['media_admin_banning'] = 'User Banning';
$txt['media_admin_bans_add'] = 'Add ban';
$txt['media_cf'] = 'Custom fields';
$txt['media_cf_add'] = 'Create a new field';

?>