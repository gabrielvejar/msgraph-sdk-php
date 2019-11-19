<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessDevicePlatform File
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

use Microsoft\Graph\Core\Enum;

/**
* ConditionalAccessDevicePlatform class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessDevicePlatform extends Enum
{
    /**
    * The Enum ConditionalAccessDevicePlatform
    */
    const ANDROID = "android";
    const I_OS = "iOS";
    const WINDOWS = "windows";
    const WINDOWS_PHONE = "windowsPhone";
    const MAC_OS = "macOS";
    const ALL = "all";
}