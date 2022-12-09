<?php

namespace DS\Controller\Api\References;

use DS\Core\Controller\ApiController;

/**
 * Class Girdle
 * @package DS\Controller\Api
 */
final class Girdle extends ApiController
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
    $this->model = new \DS\Model\Girdle ($c->mongodb);
  }
}