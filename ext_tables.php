<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_godsgvoclient_domain_model_cookie', 'EXT:go_dsgvoclient/Resources/Private/Language/locallang_csh_tx_godsgvoclient_domain_model_cookie.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_godsgvoclient_domain_model_cookie');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_godsgvoclient_domain_model_externalresource', 'EXT:go_dsgvoclient/Resources/Private/Language/locallang_csh_tx_godsgvoclient_domain_model_externalresource.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_godsgvoclient_domain_model_externalresource');
})();
