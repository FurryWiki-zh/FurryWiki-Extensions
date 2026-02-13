<?php

// 防止在非 MediaWiki 环境（如 IDE 语法检查）下因函数未定义而报错
if (!function_exists('wfLoadExtension')) {
    function wfLoadExtension($name, $path = null) {
    }
}

$furwikiExtensionsPath = "/www/wwwroot/mw-utils/FurryWiki-Extensions";
$furwikiSettingsPath = "/www/wwwroot/mw-utils/FurryWiki-Settings";

// A
wfLoadExtension( 'AccountInfo', "$furwikiExtensionsPath/AccountInfo/extension.json" );

wfLoadExtension( 'AbuseFilter', "$furwikiExtensionsPath/AbuseFilter/extension.json" );
$wgAbuseFilterEnableBlockedExternalDomain = true;

wfLoadExtension( 'AntiSpoof', "$furwikiExtensionsPath/AntiSpoof/extension.json" );

wfLoadExtension( 'AWS', "$furwikiExtensionsPath/AWS/extension.json" );
require_once "$furwikiSettingsPath/AWSSettings.php";

// C
wfLoadExtension( 'CategoryTree', "$furwikiExtensionsPath/CategoryTree/extension.json" );

wfLoadExtension( 'Cite', "$furwikiExtensionsPath/Cite/extension.json" );

wfLoadExtension( 'CiteThisPage', "$furwikiExtensionsPath/CiteThisPage/extension.json" );

wfLoadExtension( 'CodeEditor', "$furwikiExtensionsPath/CodeEditor/extension.json" );

wfLoadExtension( 'ConfirmEdit', "$furwikiExtensionsPath/ConfirmEdit/extension.json" );

wfLoadExtension( 'CirrusSearch', "$furwikiExtensionsPath/CirrusSearch/extension.json" );
$wgCirrusSearchUseCompletionSuggester = 'yes';
$wgCirrusSearchPhraseSuggestUseText = true;
$wgCirrusSearchPhraseSuggestUseOpeningText = true;
$wgCirrusSearchPrefixSearchStartsWithAnyWord = true;
$wgCirrusSearchMoreLikeThisAllowedFields = [
        'title',
        'text',
        'auxiliary_text',
        'opening_text',
        'headings',
        'all'
    ];

// D
wfLoadExtension( 'DiscussionTools', "$furwikiExtensionsPath/DiscussionTools/extension.json" );

// E
wfLoadExtension( 'Echo', "$furwikiExtensionsPath/Echo/extension.json" );

// G
wfLoadExtension( 'Gadgets', "$furwikiExtensionsPath/Gadgets/extension.json" );

// I
wfLoadExtension( 'ImageMap', "$furwikiExtensionsPath/ImageMap/extension.json" );
wfLoadExtension( 'InputBox', "$furwikiExtensionsPath/InputBox/extension.json" );

// L
wfLoadExtension( 'Linter', "$furwikiExtensionsPath/Linter/extension.json" );
wfLoadExtension( 'LoginNotify', "$furwikiExtensionsPath/LoginNotify/extension.json" );

// M
wfLoadExtension( 'Math', "$furwikiExtensionsPath/Math/extension.json" );
wfLoadExtension( 'MultimediaViewer', "$furwikiExtensionsPath/MultimediaViewer/extension.json" );

// N
wfLoadExtension( 'Nuke', "$furwikiExtensionsPath/Nuke/extension.json" );

// O
wfLoadExtension( 'OATHAuth', "$furwikiExtensionsPath/OATHAuth/extension.json" );

// P
wfLoadExtension( 'PageImages', "$furwikiExtensionsPath/PageImages/extension.json" );
wfLoadExtension( 'ParserFunctions', "$furwikiExtensionsPath/ParserFunctions/extension.json" );
wfLoadExtension( 'PdfHandler', "$furwikiExtensionsPath/PdfHandler/extension.json" );
wfLoadExtension( 'Poem', "$furwikiExtensionsPath/Poem/extension.json" );

// R
wfLoadExtension( 'ReplaceText', "$furwikiExtensionsPath/ReplaceText/extension.json" );

// S
wfLoadExtension( 'Scribunto', "$furwikiExtensionsPath/Scribunto/extension.json" );
wfLoadExtension( 'SecureLinkFixer', "$furwikiExtensionsPath/SecureLinkFixer/extension.json" );
wfLoadExtension( 'SpamBlacklist', "$furwikiExtensionsPath/SpamBlacklist/extension.json" );
wfLoadExtension( 'SyntaxHighlight_GeSHi', "$furwikiExtensionsPath/SyntaxHighlight_GeSHi/extension.json" );

// T
wfLoadExtension( 'TemplateData', "$furwikiExtensionsPath/TemplateData/extension.json" );
wfLoadExtension( 'TextExtracts', "$furwikiExtensionsPath/TextExtracts/extension.json" );
wfLoadExtension( 'Thanks', "$furwikiExtensionsPath/Thanks/extension.json" );
wfLoadExtension( 'TitleBlacklist', "$furwikiExtensionsPath/TitleBlacklist/extension.json" );

// V
wfLoadExtension( 'VisualEditor', "$furwikiExtensionsPath/VisualEditor/extension.json" );

// W
wfLoadExtension( 'WikiEditor', "$furwikiExtensionsPath/WikiEditor/extension.json" );
