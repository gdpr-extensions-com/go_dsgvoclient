<?php

namespace GdprExtensionsCom\GoDsgvoclient\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GdprExtensionsCom\GoDsgvoclient\Utility\SyncCookies;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Http\RequestFactory;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class SyncCookiesAndExternalResCommand extends \TYPO3\CMS\Scheduler\Task\AbstractTask
{
    protected $syncCookies;
    protected $connectionPool;
    protected $siteFinder;
    protected $requestFactory;

    protected function configure()
    {

    }

    // The execute() method contains the command’s logic.
    public function execute()
    {
        $this->syncCookies = GeneralUtility::makeInstance(SyncCookies::class);
        $this->connectionPool = GeneralUtility::makeInstance(ConnectionPool::class);
        $this->requestFactory = GeneralUtility::makeInstance(RequestFactory::class);
        $this->syncCookies->run($this->connectionPool, $this->requestFactory);
        return true;
    }
}
