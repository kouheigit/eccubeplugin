<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'ec-cube/ec-cube';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/ca-bundle' => '1.3.1@4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b',
  'composer/composer' => '2.2.4@8a5ad75194f901e3b39ece4bbd22cbdabc79ae8f',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'composer/pcre' => '1.0.0@3d322d715c43a1ac36c7fe215fa59336265500f2',
  'composer/semver' => '3.2.7@deac27056b57e46faf136fae7b449eeaa71661ee',
  'composer/spdx-licenses' => '1.5.6@a30d487169d799745ca7280bc90fdfa693536901',
  'composer/xdebug-handler' => '2.0.4@0c1a3925ec58a4ec98e992b9c7d171e9e184be0a',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/data-fixtures' => '1.5.1@f18adf13f6c81c67a88360dca359ad474523f8e3',
  'doctrine/dbal' => '2.13.7@6e22f6012b42d7932674857989fcf184e9e9b1c3',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '1.12.13@85460b85edd8f61a16ad311e7ffc5d255d3c937c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'doctrine/doctrine-migrations-bundle' => 'v1.3.2@49fa399181db4bf4f9f725126bd1cb65c4398dce',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.2@9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c',
  'doctrine/migrations' => 'v1.8.1@215438c0eef3e5f9b7da7d09c6b90756071b43e6',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'easycorp/easy-log-handler' => 'v1.0.9@224e1dfcf9455aceee89cd0af306ac097167fac1',
  'ec-cube/plugin-installer' => '2.0.1@2cb574d0fda477af98b6199ddcb99e1a2c7e228a',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'exercise/htmlpurifier-bundle' => 'v3.1.0@32f4709006e810efd8a72466a8e9d0672df4bc24',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'friendsofphp/php-cs-fixer' => 'v2.19.3@75ac86f33fab4714ea5a39a396784d83ae3b5ed8',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '1.8.5@337e3ad8e5716c15f9657bd214d16cc5e69df268',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'justinrainbow/json-schema' => '5.2.11@2ab6744b7296ded80f8cc4f9509abbff393399aa',
  'knplabs/knp-components' => 'v1.3.10@fc1755ba2b77f83a3d3c99e21f3026ba2a1429be',
  'knplabs/knp-paginator-bundle' => 'v2.8.0@f4ece5b347121b9fe13166264f197f90252d4bd2',
  'kylekatarnls/update-helper' => '1.2.1@429be50660ed8a196e0798e5939760f168ec8ce9',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.4.0@a93fd278c97b2d41ebbce5ba048a24e3e6f580ba',
  'laminas/laminas-zendframework-bridge' => '1.4.1@88bf037259869891afce6504cacc4f8a07b24d0f',
  'mobiledetect/mobiledetectlib' => '2.8.37@9841e3c46f5bd0739b53aed8ac677fa712943df7',
  'monolog/monolog' => '1.26.1@c6b00f05152ae2c9b04a448f99c7590beb6042f5',
  'nesbot/carbon' => '1.39.1@4be0c005164249208ce1b5ca633cd57bdd42ff33',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'php-cs-fixer/diff' => 'v1.3.1@dbd31aeb251639ac0b9e7e29405c1441907f5759',
  'pimple/pimple' => 'v1.1.1@2019c145fe393923f3441b23f29bbdfaa5c58c4d',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'robthree/twofactorauth' => '1.8.1@5afcb45282f1c75562a48d479ecd1732c9bdb11b',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.2.0@9f3452c93ff423469c0d56450431562ca423dcee',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'setasign/fpdi-tcpdf' => 'v2.3.0@f6711a95cba64db16e1a63e1b6195827a2150c93',
  'skorp/detect-incompatible-samesite-useragents' => '1.0.1@e3277efe3c12ac618af4536ba1bdb55c33c1ef80',
  'suncat/mobile-detect-bundle' => 'v1.1.1@06007fec624587fd90e8963b796fc84fff64d4d8',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/asset' => 'v4.4.27@1910a978dbe03503d9ee72408e2fef7c4041d97d',
  'symfony/cache' => 'v4.4.36@1caa6c63f0ebf3022b88263a2b90260cff33f6dc',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v4.4.36@03218ffbd5faeda5e6a97f9109acebf7973ff385',
  'symfony/console' => 'v4.4.36@621379b62bb19af213b569b60013200b11dd576f',
  'symfony/css-selector' => 'v4.4.27@5194f18bd80d106f11efa8f7cd0fbdcc3af96ce6',
  'symfony/debug' => 'v4.4.36@346e1507eeb3f566dcc7a116fefaa407ee84691b',
  'symfony/debug-bundle' => 'v4.4.36@94d96888b6b572cbdb10b4fde9dc0d15c259b88f',
  'symfony/dependency-injection' => 'v4.4.36@24e802b4973d3a60c01fd77bdaac8a66944202e1',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v4.4.36@5fa7d1d10879f0028aec98a24a9a649377fe0a5b',
  'symfony/dom-crawler' => 'v4.4.36@42de12bee3b5e594977209bcdf58ec4fef8dde39',
  'symfony/dotenv' => 'v4.4.36@15a389dd8d1764565543ca063db2857940d3f00d',
  'symfony/error-handler' => 'v4.4.36@1fa841189eae3d59c7a29c3751fd9ed8ab65ca5c',
  'symfony/event-dispatcher' => 'v4.4.34@1a024b45369c9d55d76b6b8a241bd20c9ea1cbd8',
  'symfony/event-dispatcher-contracts' => 'v1.1.11@01e9a4efac0ee33a05dfdf93b346f62e7d0e998c',
  'symfony/expression-language' => 'v4.4.34@6331d834d364cce857e5a83368ce19141d5147bd',
  'symfony/filesystem' => 'v4.4.27@517fb795794faf29086a77d99eb8f35e457837a7',
  'symfony/finder' => 'v4.4.36@1fef05633cd61b629e963e5d8200fb6b67ecf42c',
  'symfony/flex' => 'v1.17.6@7a79135e1dc66b30042b4d968ecba0908f9374bc',
  'symfony/form' => 'v4.4.36@384c0be0f33d2b166b2188194aaf57b0f1c54f77',
  'symfony/framework-bundle' => 'v4.4.36@c2d12e37719fc066739e579c09dd1772e7db6d5a',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v4.4.36@0948e99457615ddb05380adde3584484ffd951d4',
  'symfony/http-kernel' => 'v4.4.36@dfb65dcad12ef433d45ad1c97f632cd52c7faa68',
  'symfony/inflector' => 'v4.4.34@cbbde60aa3aa2e7ea51830fd590b6151615c57bc',
  'symfony/intl' => 'v4.4.36@5a7fa2fab0f25b24c5cd0b8fd09f9dcb0dac8e40',
  'symfony/maker-bundle' => 'v1.36.4@716eee9c8b10b33e682df1b7d80b9061887e9691',
  'symfony/mime' => 'v5.4.2@1bfd938cf9562822c05c4d00e8f92134d3c8e42d',
  'symfony/monolog-bridge' => 'v4.4.27@9882c03d4c237d77ba5b2845639700653dcd9a84',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/options-resolver' => 'v4.4.30@fa0b12a3a47ed25749d47d6b4f61412fd5ca1554',
  'symfony/polyfill-ctype' => 'v1.24.0@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-iconv' => 'v1.24.0@f1aed619e28cb077fc83fac8c4c0383578356e40',
  'symfony/polyfill-intl-icu' => 'v1.24.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/polyfill-php72' => 'v1.24.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.24.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.24.0@57b712b08eddb97c762a8caa32c84e037892d2e9',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v4.4.36@a35d6b8f82e2272504f23a267de49b8717ca0028',
  'symfony/property-access' => 'v4.4.36@21c6c7a887e5b514c3decaa42d406a1f9ed92641',
  'symfony/proxy-manager-bridge' => 'v4.4.36@24abdc45251f76b55ed4d487714aeb91bf06228f',
  'symfony/routing' => 'v4.4.34@fc9dda0c8496f8ef0a89805c2eabfc43b8cef366',
  'symfony/security' => 'v4.4.36@922246c833700acd412ecf167abe4291eff03957',
  'symfony/security-bundle' => 'v4.4.36@ea53c7fc357a330e7d865ed1bf2d3583f462e3f5',
  'symfony/serializer' => 'v4.4.36@46809cc4694007c09b3134d6da76e508d8b72e46',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v4.4.27@c85d997af06a58ba83e2d2538e335b894c24523d',
  'symfony/swiftmailer-bundle' => 'v3.5.3@fa7d78cbdf0a16a4da126c465f25f6547ad69cf6',
  'symfony/templating' => 'v4.4.36@844e42e39125da6df59d66a72b6557877fbba1b2',
  'symfony/translation' => 'v4.4.34@26d330720627b234803595ecfc0191eeabc65190',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v4.4.36@9ca8db38f34058b4e94fb540a18dca1a9cd77111',
  'symfony/twig-bundle' => 'v4.4.36@3f6dd82ad6707dc647dd8d8e01c0931a4378c1ff',
  'symfony/validator' => 'v4.4.36@dba84cf8f0f26bdf76057235b3cdc881c476a282',
  'symfony/var-dumper' => 'v4.4.36@02685c62fcbc4262235cc72a54fbd45ab719ce3c',
  'symfony/var-exporter' => 'v5.4.2@2360c8525815b8535caac27cbc1994e2fa8644ba',
  'symfony/web-profiler-bundle' => 'v4.4.31@24227617a4ddbdf78f8ab12ce2b76dfb54a7d851',
  'symfony/web-server-bundle' => 'v4.4.27@c283d46b40b1c9dee20771433a19fa7f4a9bb97a',
  'symfony/workflow' => 'v4.4.27@53b6200838be1c60314a2cfb623d4e91edc92256',
  'symfony/yaml' => 'v4.4.36@a19f7c44ba665fa9d9d415cc4493361381b93f9b',
  'tecnickcom/tcpdf' => '6.4.4@42cd0f9786af7e5db4fcedaa66f717b0d0032320',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.14.11@66baa66f29ee30e487e05f1679903e36eb01d727',
  'vlucas/phpdotenv' => 'v2.4.0@3cc116adbe4b11be5ec557bf1d24dc5e3a21d18c',
  'behat/gherkin' => 'v4.9.0@0bc8d1e30e96183e4f36db9dc79caead300beff4',
  'bheller/images-generator' => '1.0.1@50b61fe1dcf1b72b6a830debec4db22afd1e8ee1',
  'captbaritone/mailcatcher-codeception-module' => '1.2.1@75ba9aa803d81780ee7e9b5c36bb5b8f9139d972',
  'codeception/codeception' => '4.1.28@e9bc22a3819f9d356068c0e372193ebcc9b06014',
  'codeception/lib-asserts' => '1.13.2@184231d5eab66bc69afd6b9429344d80c67a33b6',
  'codeception/lib-innerbrowser' => '1.5.1@31b4b56ad53c3464fcb2c0a14d55a51a201bd3c2',
  'codeception/module-asserts' => '1.3.1@59374f2fef0cabb9e8ddb53277e85cdca74328de',
  'codeception/module-phpbrowser' => '1.0.2@770a6be4160a5c0c08d100dd51bff35f6056bbf1',
  'codeception/module-rest' => '1.4.2@9cd7a87fd9343494e7782f7bdb51687c25046917',
  'codeception/module-webdriver' => '1.4.0@baa18b7bf70aa024012f967b5ce5021e1faa9151',
  'codeception/phpunit-wrapper' => '7.8.2@cafed18048826790c527843f9b85e8cc79b866f1',
  'codeception/stub' => '3.0.0@eea518711d736eab838c1274593c4568ec06b23d',
  'dama/doctrine-test-bundle' => 'v5.0.5@a60b0712f4659eab710c49783713b4b43e3c3149',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'mikey179/vfsstream' => 'v1.6.10@250c0825537d501e327df879fb3d4cd751933b85',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-webdriver/webdriver' => '1.12.0@99d4856ed7dffcdf6a52eccd6551e83d8d557ceb',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpstan/phpstan' => '0.12.99@b4d40f1d759942f523be267a1bab6884f46ca3f7',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.3@9c1da83261628cb24b6a6df371b6e312b3954768',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.4@0c32ea2e40dbf59de29f3b49bf375176ce7dd8db',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'softcreatr/jsonpath' => '0.7.5@008569bf80aa3584834f7890781576bc7b65afa7',
  'symfony/browser-kit' => 'v4.4.27@9629d1524d8ced5a4ec3e94abdbd638b4ec8319b',
  'symfony/phpunit-bridge' => 'v4.4.34@cb7b39854cb0950cc898c5b9bf6974e1c68564c2',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'ec-cube/ec-cube' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
