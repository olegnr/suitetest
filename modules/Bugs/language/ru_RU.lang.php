<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Ошибки',
    'LBL_MODULE_TITLE' => 'Ошибки - главная',
    'LBL_MODULE_ID' => 'Ошибки',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск ошибок',
    'LBL_LIST_FORM_TITLE' => 'Список ошибок',
    'LBL_NEW_FORM_TITLE' => 'Новая ошибка',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_NUMBER' => 'Номер:',
    'LBL_STATUS' => 'Статус:',
    'LBL_PRIORITY' => 'Приоритет:',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_CONTACT_NAME' => 'Контактное лицо:',
    'LBL_CONTACT_ROLE' => 'Роль:',
    'LBL_LIST_NUMBER' => 'Номер',
    'LBL_LIST_SUBJECT' => 'Ошибка',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_PRIORITY' => 'Приоритет',
    'LBL_LIST_RESOLUTION' => 'Резолюция',
    'LBL_LIST_LAST_MODIFIED' => 'Последнее изменение',
    'LBL_INVITEE' => 'Контакты',
    'LBL_TYPE' => 'Тип:',
    'LBL_LIST_TYPE' => 'Тип',
    'LBL_RESOLUTION' => 'Резолюция:',
    'LBL_RELEASE' => 'Версия:',
    'LNK_NEW_BUG' => 'Новая ошибка',
    'LNK_BUG_LIST' => 'Ошибки',
    'ERR_DELETE_RECORD' => 'Вы должны указать номер записи для удаления ошибки.',
    'LBL_LIST_MY_BUGS' => 'Мои ошибки',
    'LNK_IMPORT_BUGS' => 'Импорт ошибок',
    'LBL_FOUND_IN_RELEASE' => 'Обнаружено в версии:',
    'LBL_FIXED_IN_RELEASE' => 'Исправлено в версии:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Исправлено в версии:',
    'LBL_WORK_LOG' => 'Журнал:',
    'LBL_SOURCE' => 'Источник:',
    'LBL_PRODUCT_CATEGORY' => 'Категория:',

    'LBL_CREATED_BY' => 'Кем создано:',
    'LBL_MODIFIED_BY' => 'Последнее изменение:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Адрес E-mail',
    'LBL_LIST_CONTACT_NAME' => 'Контактное лицо',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_PHONE' => 'Тел.',
    'NTC_DELETE_CONFIRMATION' => 'Вы уверены, что хотите удалить этот контакт из данной ошибки?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ошибки',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенты',
    'LBL_CASES_SUBPANEL_TITLE' => 'Обращения',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекты',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документы',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',

    'LBL_BUG_INFORMATION' => 'Основная информация', //Can be translated in all caps. This string will be used by SuiteP template menu actions

);