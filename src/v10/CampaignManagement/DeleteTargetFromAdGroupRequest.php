<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Removes the specified target association for the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.100).aspx DeleteTargetFromAdGroup Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteTargetFromAdGroup
 */
final class DeleteTargetFromAdGroupRequest
{
    public $AdGroupId;
}
