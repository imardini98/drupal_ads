<?php
/**
 * @file
 * Class Control.
 */

namespace Drupal\openlayers\Types;
use Drupal\openlayers\Types\Base;
/**
 * Class Control.
 */
abstract class Control extends Base implements ControlInterface {
  /**
   * The array containing the options.
   *
   * @var array
   */
  protected $options;

}
