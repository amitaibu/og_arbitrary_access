<?php

/**
 * @file
 * Contains \OgArbitraryAccess.
 */


class PluggableNodeAccess extends Entity {

  public function __construct($values = array()) {
    parent::__construct($values, 'pluggable_node_access');
    if (!isset($this->timestamp)) {
      $this->timestamp = time();
    }
  }
}