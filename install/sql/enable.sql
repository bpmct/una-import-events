
-- SETTINGS

SET @iTypeOrder = (SELECT IFNULL(MAX(`order`), 0) + 1 FROM `sys_options_types` WHERE `group` = 'modules');
INSERT INTO `sys_options_types` (`group`, `name`, `caption`, `icon`, `order`) VALUES 
('modules', 'vnd_import_events', '_vnd_import_events_adm_stg_cpt_type', 'vnd_import_events@modules/vendor/import_events/|std-mi.png', @iTypeOrder);
SET @iTypeId = LAST_INSERT_ID();

INSERT INTO `sys_options_categories` (`type_id`, `name`, `caption`, `order` )  
VALUES (@iTypeId, 'vnd_import_events_general', '_vnd_import_events_adm_stg_cpt_category_general', 1);
SET @iCategoryId = LAST_INSERT_ID();

INSERT INTO `sys_options`(`category_id`, `name`, `caption`, `value`, `type`, `extra`, `check`, `check_error`, `order`) VALUES
(@iCategoryId, 'vnd_import_events_repeat_times', '_vnd_import_events_option_repeat_times', '3', 'digit', '', '', '', 1);

