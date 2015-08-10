<?php
/**
 * Factory for Bootstrap view helpers.
 *
 * PHP version 5
 *
 * Copyright (C) Villanova University 2014.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category VuFind2
 * @package  View_Helpers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:developer_manual Wiki
 */
namespace CPK\View\Helper\CPK;
use Zend\ServiceManager\ServiceManager;

/**
 * Factory for Bootstrap view helpers.
 *
 * @category VuFind2
 * @package  View_Helpers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:developer_manual Wiki
 * @codeCoverageIgnore
 */
class Factory
{

    public static function getRecord(ServiceManager $sm)
    {
        $config = $sm->getServiceLocator()->get('VuFind\Config')->get('config');
        return new Record($config);
    }
    /**
     * Construct the Flashmessages helper.
     *
     * @param ServiceManager $sm Service manager.
     *
     * @return Flashmessages
     */
    public static function getFlashmessages(ServiceManager $sm)
    {
        $messenger = $sm->getServiceLocator()->get('ControllerPluginManager')
            ->get('FlashMessenger');
        return new Flashmessages($messenger);
    }


}
