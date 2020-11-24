<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Firestore_GoogleFirestoreAdminV1Field extends Google_Model
{
  protected $indexConfigType = 'Google_Service_Firestore_GoogleFirestoreAdminV1IndexConfig';
  protected $indexConfigDataType = '';
  public $name;

  /**
   * @param Google_Service_Firestore_GoogleFirestoreAdminV1IndexConfig
   */
  public function setIndexConfig(Google_Service_Firestore_GoogleFirestoreAdminV1IndexConfig $indexConfig)
  {
    $this->indexConfig = $indexConfig;
  }
  /**
   * @return Google_Service_Firestore_GoogleFirestoreAdminV1IndexConfig
   */
  public function getIndexConfig()
  {
    return $this->indexConfig;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}
