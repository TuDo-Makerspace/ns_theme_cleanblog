<?php

// Add default include static TypoScript (for root page)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ns_theme_cleanblog', 'Configuration/TypoScript', "TU-DO's NITSAN Clean Blog fork");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("@import 'EXT:ns_theme_cleanblog/Configuration/PageTSconfig/setup.typoscript'");