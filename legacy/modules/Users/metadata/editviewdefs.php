<?php

/* * *******************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 * ****************************************************************************** */

$viewdefs['Users']['EditView'] = array(
    'templateMeta' => array('maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30'),
        ),
        'form' => array(
            'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
            'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
        ),
        'includes' => array(
            array('file' => 'modules/Users/js/view.edit.js'),
        ),
    ),
    'panels' => array(
        'LBL_USER_INFORMATION' => array(
            array(
                array(
                    'name' => 'user_name',
                    'displayParams' => array('required' => true),
                ),
                'first_name',
            ),
            array(array(
                'name' => 'status',
                'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
                'displayParams' => array('required' => true),
            ),
                'last_name'),
            array(array(
                'name' => 'UserType',
                'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
            ),
            ),
            array('photo'),
            array('business_role'),
            array(array('name' => 'factor_auth', 'label' => 'LBL_FACTOR_AUTH')),
        ),
        'LBL_EMPLOYEE_INFORMATION' => array(
            array(
                array(
                    'name' => 'employee_status',
                    'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$EMPLOYEE_STATUS_READONLY}{/if}',
                ),
                'show_on_employees',
            ),
            array(
                array(
                    'name' => 'position_name',
                    'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$POSITION_NAME_READONLY}{/if}',
                ),
                'birthdate',
            ),
            array(
                array(
                    'name' => 'securitygroup_name',
                    'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$SG_NAME_READONLY}{/if}',
                ),
                array(
                    'name' => 'reports_to_name',
                    'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$REPORTS_TO_READONLY}{/if}',
                ),
            ),
            array(
                'phone_work',
                'phone_mobile',
            ),
            array('phone_other', 'phone_home'),
            array('phonphone_faxe_home'),
            array('messenger_type', 'messenger_id'),
            array('primary_address_street', 'primary_address_city'),
            array('primary_address_state', 'primary_address_postalcode'),
            array('primary_address_country'),
            array('description'),
        ),
    ),
);
