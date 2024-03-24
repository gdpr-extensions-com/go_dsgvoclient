<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GoDsgvoclient',
        'CookieConsentModal',
        [
            \GdprExtensionsCom\GoDsgvoclient\Controller\CookieConsentModalController::class => 'index'
        ],
        [
            \GdprExtensionsCom\GoDsgvoclient\Controller\CookieConsentModalController::class => 'index'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GoDsgvoclient',
        'Report',
        [
            \GdprExtensionsCom\GoDsgvoclient\Controller\ReportController::class => 'index'
        ],
        [
            \GdprExtensionsCom\GoDsgvoclient\Controller\ReportController::class => 'index'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\GdprExtensionsCom\GoDsgvoclient\Commands\SyncCookiesAndExternalResCommand::class] = [
        'extension' => 'go_dsgvoclient',
        'title' => 'Fetch cookie and resources',
        'description' => 'Fetch cookie and resources',
        'additionalFields' => \GdprExtensionsCom\GoDsgvoclient\Commands\SyncCookiesAndExternalResCommand::class,
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.common {
                elements {
                    cookieconsentmodal {
                        iconIdentifier = go_dsgvoclient-plugin-cookieconsentmodal
                        title = LLL:EXT:go_dsgvoclient/Resources/Private/Language/locallang_db.xlf:tx_go_dsgvoclient_cookieconsentmodal.name
                        description = LLL:EXT:go_dsgvoclient/Resources/Private/Language/locallang_db.xlf:tx_go_dsgvoclient_cookieconsentmodal.description
                        tt_content_defValues {
                            CType = godsgvoclient_cookieconsentmodal
                        }
                    }
                    report {
                        iconIdentifier = go_dsgvoclient-plugin-report
                        title = LLL:EXT:go_dsgvoclient/Resources/Private/Language/locallang_db.xlf:tx_go_dsgvoclient_report.name
                        description = LLL:EXT:go_dsgvoclient/Resources/Private/Language/locallang_db.xlf:tx_go_dsgvoclient_report.description
                        tt_content_defValues {
                            CType = godsgvoclient_report
                        }
                    }
                }
                show = *
            }
        }'
    );


})();
