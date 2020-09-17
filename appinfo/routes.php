<?php
/**
 * Nextcloud - google
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Julien Veyssier <eneiluj@posteo.net>
 * @copyright Julien Veyssier 2020
 */

return [
    'routes' => [
        ['name' => 'config#oauthRedirect', 'url' => '/oauth-redirect', 'verb' => 'GET'],
        ['name' => 'config#setConfig', 'url' => '/config', 'verb' => 'PUT'],
        ['name' => 'config#setAdminConfig', 'url' => '/admin-config', 'verb' => 'PUT'],
        ['name' => 'config#getLocalAddressBooks', 'url' => '/local-addressbooks', 'verb' => 'GET'],
        ['name' => 'googleAPI#getCalendarList', 'url' => '/calendars', 'verb' => 'GET'],
        ['name' => 'googleAPI#getContactNumber', 'url' => '/contact-number', 'verb' => 'GET'],
        ['name' => 'googleAPI#importCalendar', 'url' => '/import-calendar', 'verb' => 'GET'],
        ['name' => 'googleAPI#importContacts', 'url' => '/import-contacts', 'verb' => 'GET'],
        ['name' => 'googleAPI#importPhotos', 'url' => '/import-photos', 'verb' => 'GET'],
    ]
];
