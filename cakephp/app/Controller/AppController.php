<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    function isLoggedIn() {
        if($this->Session->read('Agent.loginId') == md5($this->Session->id())) {
            return true;
        } else {
            return false;
        }
    }
    
    function hasAvailableAgentLicenses($clientId)
    {
        $return = array();
        
        // Get Licenses Count
        $licenseCountConditions = array(
            'conditions' => array(
                'Client.id' => $clientId,
                'Client.active' => 1 // must be active
            ),
            'recursive' => -1,
            'fields' => array('Client.license_count'),
            'limit' => 1
        );
        $licenseCount = $this->Agent->Client->find('all',$licenseCountConditions);
        $licenseCount = $licenseCount[0]['Client']['license_count'];
        
        // Get Active Agents
        $activeAgentsConditions = array(
            'conditions' => array(
                'Agent.client_id' => $clientId,
                'Agent.is_active' => 1
            ),
            'recursive' => -1
        );
        $usedLicenseCount = $this->Agent->find('count',$activeAgentsConditions);
        
        // Compare Total to Active
        if($usedLicenseCount >= $licenseCount) {
            $return['hasActiveLicenses'] = false;
        } else {
            $return['hasActiveLicenses'] = true;
        }
        $return['usedLicenseCount'] = $usedLicenseCount;
        $return['totalLicenseCount'] = $licenseCount;
        return $return;
    }
}
