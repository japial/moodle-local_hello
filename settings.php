<?php
 

defined('MOODLE_INTERNAL') || die();
 
if ($hassiteconfig) {

    $ADMIN->add('localplugins', new admin_category('local_hello_settings', new lang_string('pluginname', 'local_hello')));

    $settingspage = new admin_settingpage('managelocalhello', new lang_string('manage', 'local_hello'));

    if ($ADMIN->fulltree) {
        $settingspage->add(new admin_setting_configcheckbox(
            'local_hello/showinnavigation',
            new lang_string('showinnavigation', 'local_hello'),
            new lang_string('showinnavigation_desc', 'local_hello'),
            1
        ));
    }
 
    $ADMIN->add('localplugins', $settingspage);
}