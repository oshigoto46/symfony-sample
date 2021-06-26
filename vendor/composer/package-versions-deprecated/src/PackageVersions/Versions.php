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
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.6.5@4e22a289e474db454480020ff37d20472668c11c',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.0.3@c9622c6820d3ede1e2315a6a377ea1076e421d88',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.4@207210c57f6c15835e8d6228075cd235bd061efc',
  'doctrine/orm' => '2.9.3@82e77cf5089a1303733f75f0f0ed01be3ab9ec22',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.3.0@13af2502d9bb6f7d33be2de4b51fb68c6cdb476e',
  'nelmio/cors-bundle' => '2.1.1@0b964b665016dfb61dd0fd2bb8c24afb1ae45a93',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'symfony/asset' => 'v5.3.2@29a4d5e6e39ffe16cea394fd5041d7a638bd580d',
  'symfony/cache' => 'v5.3.0@44fd0f97d1fb198d344f22379dfc56af2221e608',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v5.3.2@9c307728cfacbd50914f0db28aee1e0ecd82b99f',
  'symfony/console' => 'v5.3.2@649730483885ff2ca99ca0560ef0e5f6b03f2ac1',
  'symfony/dependency-injection' => 'v5.3.2@ddbff73bc4fa3d5b415431d486770ab0e72f6516',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v5.3.1@29516dcc8165bc7e2339182a9360ea7d3471fb03',
  'symfony/dotenv' => 'v5.3.0@1ac423fcc9548709077f90aca26c733cdb7e6e5c',
  'symfony/error-handler' => 'v5.3.0@0e6768b8c0dcef26df087df2bbbaa143867a59b2',
  'symfony/event-dispatcher' => 'v5.3.0@67a5f354afa8e2f231081b3fa11a5912f933c3ce',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/expression-language' => 'v5.3.0@e3c136ac5333b0d2ca9de9e7e3efe419362aa046',
  'symfony/filesystem' => 'v5.3.0@348116319d7fb7d1faa781d26a48922428013eb2',
  'symfony/finder' => 'v5.3.0@0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/framework-bundle' => 'v5.3.2@120e80e882debd7e705d53a3b054e1a0fae91fbc',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.2@7b6dd714d95106b831aaa7f3c9c612ab886516bd',
  'symfony/http-kernel' => 'v5.3.2@e7021165d9dbfb4051296b8de827e92c8a7b5c87',
  'symfony/maker-bundle' => 'v1.32.0@702558c5fc5a27796eedad12a82bb27be76247dc',
  'symfony/password-hasher' => 'v5.3.2@02320f981e26fdbeeaae575911e0afa7bdcae988',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/property-access' => 'v5.3.0@8988399a556cffb0fba9bb3603f8d1ba4543eceb',
  'symfony/property-info' => 'v5.3.1@6f8bff281f215dbf41929c7ec6f8309cdc0912cf',
  'symfony/proxy-manager-bridge' => 'v5.3.0@4e4997e77f30b4caed2b3cebefdecd7031e25a00',
  'symfony/routing' => 'v5.3.0@368e81376a8e049c37cb80ae87dbfbf411279199',
  'symfony/runtime' => 'v5.3.2@876ad7ce168c893550d20a1da58f52d3ec4eb574',
  'symfony/security-bundle' => 'v5.3.2@971ff372d07aacc1c92d1efd0e80947f99323483',
  'symfony/security-core' => 'v5.3.2@dc44d2a4275345621266356f6cb7ef6e0864c3fa',
  'symfony/security-csrf' => 'v5.3.0@c7b7006d3ed955da978a002d764cae388bed8d09',
  'symfony/security-guard' => 'v5.3.0@07b97d3c8fa9b761ad3a52d659a47661b458c51b',
  'symfony/security-http' => 'v5.3.2@6bf4c31219773a558b019ee12e54572174ff8129',
  'symfony/serializer' => 'v5.3.2@96f6ff6582d1bf1bf08281b563a6c7c917efe6c1',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.3.0@313d02f59d6543311865007e5ff4ace05b35ee65',
  'symfony/string' => 'v5.3.2@0732e97e41c0a590f77e231afc16a327375d50b0',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v5.3.0@cbd8f87a3d2445e566db3fe75e34a0bcad70c222',
  'symfony/twig-bundle' => 'v5.3.0@d386aaa46d1afe5afb51b39675fc2ab206159206',
  'symfony/validator' => 'v5.3.2@87621b2503601673b7e76aeffac3234ada8e1bf2',
  'symfony/var-dumper' => 'v5.3.2@905a22c68b292ffb6f20d7636c36b220d1fba5ae',
  'symfony/var-exporter' => 'v5.3.2@df663fb63bdcd7298373cbd431165ab031706cb2',
  'symfony/web-link' => 'v5.3.0@87b34e33e833e948256b237f25fdd54f85975a94',
  'symfony/webpack-encore-bundle' => 'v1.12.0@9943a59f8551b7a8181e19a2b4efa60e5907c667',
  'symfony/yaml' => 'v5.3.2@71719ab2409401711d619765aa255f9d352a59b2',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'willdurand/negotiation' => '3.0.0@04e14f38d4edfcc974114a07d2777d90c98f3d9c',
  'symfony/debug-bundle' => 'v5.3.0@b73833ac97189fc809816dfbb02185a1a793b072',
  'symfony/polyfill-ctype' => '*@ccd83c1bede2e27d26357f988d1524e0ff5fde39',
  'symfony/polyfill-iconv' => '*@ccd83c1bede2e27d26357f988d1524e0ff5fde39',
  'symfony/polyfill-php72' => '*@ccd83c1bede2e27d26357f988d1524e0ff5fde39',
  '__root__' => 'dev-master@ccd83c1bede2e27d26357f988d1524e0ff5fde39',
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
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
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
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
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
}
