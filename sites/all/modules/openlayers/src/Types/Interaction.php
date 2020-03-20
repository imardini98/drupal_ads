<?php
/**
 * @file
 * Class Interaction.
 */

namespace Drupal\openlayers\Types;
use Drupal\openlayers\Types\Base;
/**
 * Class Interaction.
 */
abstract class Interaction extends Base implements InteractionInterface {
  /**
   * The array containing the options.
   *
   * @var array
   */
  protected $options;

}
