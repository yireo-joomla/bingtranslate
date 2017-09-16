<?php
/**
 * @package     Yireo Translation Library
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

namespace Yireo\Translate\Api;

use Yireo\Translate\Session;

/**
 * Handler interface
 */
interface HandlerInterface
{
    /**
     * HandlerInterface constructor.
     *
     * @param string $text
     * @param string $toLanguage
     * @param string $fromLanguage
     * @param array $params
     * @param Session $session
     */
    public function __construct($text, $toLanguage, $fromLanguage = '', $params = [], Session $session);

    /**
     * @return string
     */
    public function translate();
}