<?php
/**
 * @file
 * Class Component.
 */

namespace Drupal\openlayers\Types;
use Drupal\openlayers\Types\Base;
/**
 * Class Component.
 */
abstract class Component extends Base implements ComponentInterface {
  /**
   * The array containing the options.
   *
   * @var array
   */
  protected $options;

}
