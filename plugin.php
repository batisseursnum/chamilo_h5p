<?php
/* For license terms, see /license.txt */

require_once(__DIR__.'/chamilo_h5p.php');

$plugin_info = chamilo_h5p::create()->get_info();

// The plugin title.
$plugin_info['title'] = 'chamilo_h5p';
$plugin_info['name'] = 'chamilo_h5p';
// The comments that go with the plugin.
$plugin_info['comment'] = "chamilo h5p Node page (region pre_footer)";
// The plugin version.
$plugin_info['version'] = '1.5';
// The plugin author.
$plugin_info['author'] = 'Batisseurs Numériques Lyon';

// The plugin configuration.
$form = new FormValidator('form');

$defaults = array();

$url_id = api_get_current_access_url_id();

$defaults['active'] = api_get_plugin_setting('chamilo_h5p','active-'.$url_id);

$stringTitle = $form->addElement('checkbox','active-'.$url_id,'Activation','');
if($defaults['active']==''){
	$defaults['active'] = false;
}
$stringTitle->setValue($defaults['active']);

//Sauvegarde
//$form->addElement('button', 'submit_button', get_lang('Save'));
$form->addButtonSave(get_lang('Save'));

// Get default value for form

$plugin_info['settings_form'] = $form;

//set the templates that are going to be used
$plugin_info['templates'] = array('template.tpl');
