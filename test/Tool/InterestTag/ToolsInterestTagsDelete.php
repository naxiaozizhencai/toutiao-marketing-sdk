<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 17:30
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\InterestTag\V1\ToolsInterestTagsDelete();

$req->setAdvertiserId(ADVERTISER_ID);
$req->setId(1624253825408027);

print_r($client->excute($req));