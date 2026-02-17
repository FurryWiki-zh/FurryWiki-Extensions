<?php

// 防止在非 MediaWiki 环境（如 IDE 语法检查）下因函数未定义而报错
if (!function_exists('wfLoadExtension')) {
    function wfLoadExtension($n, $p = null) {
    }
}

$furwikiExtensionsPath = "/www/wwwroot/mw-utils/FurryWiki-Extensions";
$furwikiSettingsPath = "/www/wwwroot/mw-utils/FurryWiki-Settings";

// A
wfLoadExtension( 'AccountInfo', "$furwikiExtensionsPath/AccountInfo/extension.json" );

wfLoadExtension( 'AbuseFilter', "$furwikiExtensionsPath/AbuseFilter/extension.json" );
$wgAbuseFilterEnableBlockedExternalDomain = true;

wfLoadExtension( 'AdvancedSearch', "$furwikiExtensionsPath/AdvancedSearch/extension.json" );

wfLoadExtension( 'AntiSpoof', "$furwikiExtensionsPath/AntiSpoof/extension.json" );

wfLoadExtension( 'AWS', "$furwikiExtensionsPath/AWS/extension.json" );
require_once "$furwikiSettingsPath/AWSSettings.php";

// B
wfLoadExtension( 'BetaFeatures', "$furwikiExtensionsPath/BetaFeatures/extension.json" );

// C
wfLoadExtension( 'CategoryTree', "$furwikiExtensionsPath/CategoryTree/extension.json" );

wfLoadExtension( 'CheckUser', "$furwikiExtensionsPath/CheckUser/extension.json" );
$wgCheckUserEnableSpecialInvestigate = true;

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

wfLoadExtension( 'Cite', "$furwikiExtensionsPath/Cite/extension.json" );

wfLoadExtension( 'CiteThisPage', "$furwikiExtensionsPath/CiteThisPage/extension.json" );

wfLoadExtension( 'Citoid', "$furwikiExtensionsPath/Citoid/extension.json" );

wfLoadExtension( 'cldr', "$furwikiExtensionsPath/cldr/extension.json" );

wfLoadExtension( 'CodeEditor', "$furwikiExtensionsPath/CodeEditor/extension.json" );

wfLoadExtension( 'CodeMirror', "$furwikiExtensionsPath/CodeMirror/extension.json" );

wfLoadExtension( 'ConfirmEdit', "$furwikiExtensionsPath/ConfirmEdit/extension.json" );

#wfLoadExtension( 'ConfirmEdit/QuestyCaptcha', "$furwikiExtensionsPath/ConfirmEdit/QuestyCaptcha/extension.json" );
wfLoadExtension( 'ConfirmEdit/Turnstile', "$furwikiExtensionsPath/ConfirmEdit/Turnstile/extension.json" );
require_once "$furwikiSettingsPath/CaptchaKeys.php";
$wgCaptchaTriggers['edit'] = true;
$wgCaptchaTriggers['create'] = true;
$wgCaptchaTriggers['createtalk'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

wfLoadExtension( 'ContributionScores', "$furwikiExtensionsPath/ContributionScores/extension.json" );
$wgContribScoreIgnoreBots = true;
$wgContribScoreIgnoreBlockedUsers = true;
$wgContribScoreIgnoreUsernames = [];
$wgContribScoresUseRealName = false;

wfLoadExtension( 'CookieWarning', "$furwikiExtensionsPath/CookieWarning/extension.json" );
$wgCookieWarningEnabled = true;
$wgCookieWarningGeoIPLookup = 'js';

wfLoadExtension( 'CountDownClock', "$furwikiExtensionsPath/CountDownClock/extension.json" );

wfLoadExtension( 'CreatedPagesList', "$furwikiExtensionsPath/CreatedPagesList/extension.json" );

// D
wfLoadExtension( 'DisableAccount', "$furwikiExtensionsPath/DisableAccount/extension.json" );

wfLoadExtension( 'DiscussionTools', "$furwikiExtensionsPath/DiscussionTools/extension.json" );
$wgDiscussionToolsEnable = true;
$wgDiscussionToolsEnablePermalinksBackend = true;

wfLoadExtension( 'Disambiguator', "$furwikiExtensionsPath/Disambiguator/extension.json" );

wfLoadExtension( 'DynamicPageList4', "$furwikiExtensionsPath/DynamicPageList4/extension.json" );

// E
wfLoadExtension( 'Echo', "$furwikiExtensionsPath/Echo/extension.json" );
/// Echo增强设置
#$wgEchoEmailFooterAddress = '福瑞百科，Furry亚文化共建信息库';

wfLoadExtension( 'Elastica', "$furwikiExtensionsPath/Elastica/extension.json" );

wfLoadExtension( 'EmailAuth', "$furwikiExtensionsPath/EmailAuth/extension.json" );

wfLoadExtension( 'EventLogging', "$furwikiExtensionsPath/EventLogging/extension.json" );
$wgEventLoggingBaseUri = '/beacon/event';
#$wgEventLoggingServiceUri = '/beacon/intake-analytics';
$wgEventLoggingStreamNames = true;

// F
wfLoadExtension( 'FileImporter', "$furwikiExtensionsPath/FileImporter/extension.json" );
/// FileImporter
$wgFileImporterShowInputScreen = true;
$wgFileImporterRequiredRight = 'import';

// G
wfLoadExtension( 'Gadgets', "$furwikiExtensionsPath/Gadgets/extension.json" );

// H
wfLoadExtension( 'HeaderTabs', "$furwikiExtensionsPath/HeaderTabs/extension.json" );

// I
wfLoadExtension( 'ImageMap', "$furwikiExtensionsPath/ImageMap/extension.json" );

wfLoadExtension( 'InputBox', "$furwikiExtensionsPath/InputBox/extension.json" );

wfLoadExtension( 'Interwiki', "$furwikiExtensionsPath/Interwiki/extension.json" );

wfLoadExtension( 'InterwikiExtracts', "$furwikiExtensionsPath/InterwikiExtracts/extension.json" );

// J
wfLoadExtension( 'JsonConfig', "$furwikiExtensionsPath/JsonConfig/extension.json" );

// L
wfLoadExtension( 'LabeledSectionTransclusion', "$furwikiExtensionsPath/LabeledSectionTransclusion/extension.json" );

wfLoadExtension( 'Linter', "$furwikiExtensionsPath/Linter/extension.json" );

wfLoadExtension( 'Lockdown', "$furwikiExtensionsPath/Lockdown/extension.json" );
require_once "$furwikiSettingsPath/Lockdowns.php";

wfLoadExtension( 'LoginNotify', "$furwikiExtensionsPath/LoginNotify/extension.json" );
/// 登录告警
$wgLoginNotifyAttemptsKnownIP = 5;
$wgLoginNotifyAttemptsNewIP = 3;

// M
wfLoadExtension( 'MassEditRegex', "$furwikiExtensionsPath/MassEditRegex/extension.json" );

wfLoadExtension( 'MassMessage', "$furwikiExtensionsPath/MassMessage/extension.json" );

wfLoadExtension( 'Math', "$furwikiExtensionsPath/Math/extension.json" );
// Math
$wgDefaultUserOptions['math'] = 'mathjax';
$wgMathValidModes = ['mathjax'];

wfLoadExtension( 'MediaSearch', "$furwikiExtensionsPath/MediaSearch/extension.json" );

wfLoadExtension( 'MultiBoilerplate', "$furwikiExtensionsPath/MultiBoilerplate/extension.json" );

wfLoadExtension( 'MultimediaViewer', "$furwikiExtensionsPath/MultimediaViewer/extension.json" );

// N
wfLoadExtension( 'NewSignupPage', "$furwikiExtensionsPath/NewSignupPage/extension.json" );

wfLoadExtension( 'Nuke', "$furwikiExtensionsPath/Nuke/extension.json" );

// O
wfLoadExtension( 'OATHAuth', "$furwikiExtensionsPath/OATHAuth/extension.json" );

wfLoadExtension( 'OAuth', "$furwikiExtensionsPath/OAuth/extension.json" );
/// Oauth 秘钥
$wgMWOAuthSecureTokenTransfer = true;
$wgOAuth2PrivateKey = "/www/wwwroot/mw-utils/FurryWiki-OauthKeys/private.key";
$wgOAuth2PublicKey = "/www/wwwroot/mw-utils/FurryWiki-OauthKeys/public.key";

wfLoadExtension( 'OrphanedTalkPages', "$furwikiExtensionsPath/OrphanedTalkPages/extension.json" );

// P
wfLoadExtension( 'PageImages', "$furwikiExtensionsPath/PageImages/extension.json" );
$wgPageImagesExpandOpenSearchXml = true;
$wgPageImagesAPIDefaultLicense = 'any';

wfLoadExtension( 'ParserFunctions', "$furwikiExtensionsPath/ParserFunctions/extension.json" );

/// 为了使linter工作，使Parsoid作为扩展加载，添加接入点
wfLoadExtension( 'Parsoid', "$IP/vendor/wikimedia/parsoid/extension.json" );
$wgParsoidSettings = [
    'useSelser' => true,
    'linting' => true,
];
$wgVisualEditorParsoidAutoConfig = false; #(for Linter, to make work)
$wgVirtualRestConfig = [
	'paths' => [],
	'modules' => [
		'parsoid' => [
			'url' => 'https://youshou.wiki/rest.php',
			'domain' => 'youshou.wiki',
			'forwardCookies' => true,
			'restbaseCompat' => false,
			'timeout' => 30,
		],
	],
	'global' => [
		'timeout' => 360,
		'forwardCookies' => false,
		'HTTPProxy' => null,
	],
];

wfLoadExtension( 'PdfHandler', "$furwikiExtensionsPath/PdfHandler/extension.json" );

wfLoadExtension( 'PinyinSort', "$furwikiExtensionsPath/PinyinSort/extension.json" );
/// 拼音分类
$wgCategoryCollation = 'pinyin-noprefix';

wfLoadExtension( 'Poem', "$furwikiExtensionsPath/Poem/extension.json" );

wfLoadExtension( 'Popups', "$furwikiExtensionsPath/Popups/extension.json" );
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;

// R
wfLoadExtension( 'Renameuser', "$furwikiExtensionsPath/Renameuser/extension.json" );

wfLoadExtension( 'RegexFunctions', "$furwikiExtensionsPath/RegexFunctions/extension.json" );

wfLoadExtension( 'ReplaceText', "$furwikiExtensionsPath/ReplaceText/extension.json" );

wfLoadExtension( 'RevisionSlider', "$furwikiExtensionsPath/RevisionSlider/extension.json" );

// S
wfLoadExtension( 'SandboxLink', "$furwikiExtensionsPath/SandboxLink/extension.json" );

wfLoadExtension( 'Scribunto', "$furwikiExtensionsPath/Scribunto/extension.json" );
$wgScribuntoDefaultEngine = 'luasandbox';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

wfLoadExtension( 'SecureLinkFixer', "$furwikiExtensionsPath/SecureLinkFixer/extension.json" );

wfLoadExtension( 'ShortDescription', "$furwikiExtensionsPath/ShortDescription/extension.json" );

wfLoadExtension( 'SimpleTooltip', "$furwikiExtensionsPath/SimpleTooltip/extension.json" );

wfLoadExtension( 'SpamBlacklist', "$furwikiExtensionsPath/SpamBlacklist/extension.json" );

wfLoadExtension( 'SyntaxHighlight_GeSHi', "$furwikiExtensionsPath/SyntaxHighlight_GeSHi/extension.json" );

// T
wfLoadExtension( 'TabberNeue', "$furwikiExtensionsPath/TabberNeue/extension.json" );
$wgTabberNeueEnableAnimation = true;
$wgTabberNeueUpdateLocationOnTabChange = true;

wfLoadExtension( 'TemplateData', "$furwikiExtensionsPath/TemplateData/extension.json" );

wfLoadExtension( 'TemplateSandbox', "$furwikiExtensionsPath/TemplateSandbox/extension.json" );

wfLoadExtension( 'TemplateStyles', "$furwikiExtensionsPath/TemplateStyles/extension.json" );

wfLoadExtension( 'TemplateStylesExtender', "$furwikiExtensionsPath/TemplateStylesExtender/extension.json" );

wfLoadExtension( 'TextExtracts', "$furwikiExtensionsPath/TextExtracts/extension.json" );
$wgExtractsRemoveClasses = [
    'table',
    'div',
    'figure',
    'script',
    'input',
    'style',
    'ul.gallery',
    '.mw-editsection',
    'sup.reference',
    'ol.references',
    '.error',
    '.nomobile',
    '.noprint',
    '.noexcerpt',
    '.sortkey',
    '.metadata',
    'span.coordinates',
    'span.geo-multi-punct',
    'span.geo-nondefault',
    '#coordinates',
];

wfLoadExtension( 'Thanks', "$furwikiExtensionsPath/Thanks/extension.json" );

wfLoadExtension( 'TitleBlacklist', "$furwikiExtensionsPath/TitleBlacklist/extension.json" );

// V
wfLoadExtension( 'VisualEditor', "$furwikiExtensionsPath/VisualEditor/extension.json" );

// W
wfLoadExtension( 'WikiEditor', "$furwikiExtensionsPath/WikiEditor/extension.json" );
