<?php
/**
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Samples\Asset;

# [START asset_quickstart_create_feed]
use Google\Cloud\Asset\V1\AssetServiceClient;

/**
 * Get real time feed given its name.
 */
function get_feed($feedName)
{
    $client = new AssetServiceClient();

    $feed = $client->GetFeed($feedName);

    echo 'Feed ' . $feed->getName() . ' got.';
}
# [END asset_quickstart_get_feed]
