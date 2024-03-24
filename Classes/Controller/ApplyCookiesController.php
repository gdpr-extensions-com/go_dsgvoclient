<?php

declare(strict_types=1);

namespace GdprExtensionsCom\GoDsgvoclient\Controller;

/**
 * This file is part of the "go_dsgvoclient" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023
 */

/**
 * ApplyCookiesController
 */
class ApplyCookiesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
