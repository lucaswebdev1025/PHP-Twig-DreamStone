<?php

namespace DS\Controller\Api\References;

use DS\Core\Controller\ApiController;

/**
 * Class Fancy Color
 * @package DS\Controller\Api
 */
final class Fancycolor extends ApiController
{
  /**
   * Default controller construct
   * @param \Slim\Container $c Slim App Container
   *
   * @throws \Interop\Container\Exception\ContainerException
   */
  public function __construct(\Slim\Container $c)
  {
    parent::__construct($c);
    $this->model = new \DS\Model\Fancycolor ($c->mongodb);
  }
}