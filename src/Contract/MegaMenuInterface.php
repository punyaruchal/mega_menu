<?php

namespace Drupal\mega_menu\Contract;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

interface MegaMenuInterface extends ConfigEntityInterface {

  /**
   * Represents a mega menu link item that does not use a layout.
   */
  const NO_LAYOUT = 'mega_menu.no_layout';

  /**
   * Get the machine name of the target menu.
   *
   * @return string
   */
  public function getTargetMenu();

  /**
   * Get the label of the target menu entity.
   *
   * @return null|string
   */
  public function getTargetMenuLabel();
}