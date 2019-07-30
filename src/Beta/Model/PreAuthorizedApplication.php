<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PreAuthorizedApplication File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* PreAuthorizedApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PreAuthorizedApplication extends Entity
{
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param string $val The value of the appId
    *
    * @return PreAuthorizedApplication
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the permissionIds
    *
    * @return string The permissionIds
    */
    public function getPermissionIds()
    {
        if (array_key_exists("permissionIds", $this->_propDict)) {
            return $this->_propDict["permissionIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionIds
    *
    * @param string $val The value of the permissionIds
    *
    * @return PreAuthorizedApplication
    */
    public function setPermissionIds($val)
    {
        $this->_propDict["permissionIds"] = $val;
        return $this;
    }
}