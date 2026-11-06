# DocuSign Click PHP Client Changelog
See [DocuSign Support Center](https://support.docusign.com/en/releasenotes/) for Product Release Notes.

## [v2.0.0] - Click API v1-22.4.01.00 - 2026-11-02
### Breaking
- **A PHP release patched for PHP2Shell is required.** The minimum PHP version is raised from 7.4 to `"php": "~8.2.35 || ~8.3.36 || ~8.4.27 || >=8.5.12"`:
  - 8.2.35 or any later 8.2 release
  - 8.3.36 or any later 8.3 release
  - 8.4.27 or any later 8.4 release
  - 8.5.12 or later

  Composer refuses to install the SDK on PHP 7.4, 8.0 and 8.1 (end-of-life), and on releases affected by CVE-2026-109618 / CVE-2026-109619. See the [PHP security advisory](https://www.php.net/archive/2026.php#2026-10-21-5). If your Linux distribution has backported the fix but reports an older version number, install with `composer install --ignore-platform-req=php`, and only after confirming that your PHP build includes the fix.
- **JWT library changed to `firebase/php-jwt` (^7.0)**, replacing `adhocore/jwt` (^1.1). The signatures of `requestJWTUserToken()` and `requestJWTApplicationToken()` are unchanged.
- **JWT Grant now requires an RSA private key of at least 2048 bits.** A shorter key throws `DomainException: Provided key is too short` before any request is sent. To check your key size, run `openssl rsa -in private.key -noout -text | head -1`.
- **Response header names are now lowercased.** The header arrays returned by the `*WithHttpInfo` methods and by `ApiException::getResponseHeaders()` use lowercase keys (for example `content-type` and `content-disposition`). Code that reads a header with its original casing, such as `$headers['Content-Type']`, must use the lowercase key instead.

### Fixed
- Removed the deprecated `utf8_decode()` call from the Basic authorization header in `generateAccessToken()` and `refreshAccessToken()`. On PHP 8.2 and later it raised a deprecation warning on every call. The header value is unchanged.

### Changed
- Updated the README requirements and dependency list.
- Updated the SDK release version.

### Known issues
- 21 legacy classes raise PHP deprecation warnings when loaded. Functionality is not affected. This will be fixed in a future release.
  - From PHP 8.4, all 21 have constructors that declare `array $data = null` instead of an explicit nullable type: `AgreeButtonStyles`, `AgreementStatementStyles`, `BaseAgreeButtonStyles`, `ContainerStyles`, `DisclosureLinkStyles`, `DocumentLinkStylesFocus`, `DocumentLinkStyles`, `HeaderStyles`, `UserAgreementResponseStyle`, `ConversionDocument`, `DocumentConversionRequest`, `DocumentConversionResponse`, `DocumentData`, `HtmlResult`, `RecipientCopyRequest`, `UpdateAgreementRequest`, `Account`, `Link`, `OAuthToken`, `Organization` and `UserInfo`.
  - From PHP 8.1, 12 of them also implement `ArrayAccess` without return types: `Account`, `Link`, `OAuthToken`, `Organization`, `UserInfo`, `ConversionDocument`, `DocumentConversionRequest`, `DocumentConversionResponse`, `DocumentData`, `HtmlResult`, `RecipientCopyRequest` and `UpdateAgreementRequest`.

## [v1.4.3] - Click API v1-22.4.01.00 - 2026-06-16
### Changed
- Added support for version v2.1-26.1.1.00 of the DocuSign ESignature API.
- Updated the SDK release version.

## [v1.4.2] - Click API v1-22.4.02.00 - 2025-10-16
### Changed
- Added explicit nullable type hints (?Type) to parameters that accept null, improving type safety and consistency.
- Updated the SDK release version.

## [v1.4.1] - Click API v1-22.4.02.00 - 2024-04-22
### Changed
- Adjusted the minimum required `firebase/php-jwt` package version to 6.0.
- Minimum required PHP version is now PHP 7.4
## [v1.4.1-rc1] - Click API v1-22.4.02.00 - 2024-03-20
### Changed
- Adjusted the minimum required `firebase/php-jwt` package version to 6.0.
- Minimum required PHP version is now PHP 7.4

## [v1.4.0] - Click API v1-22.4.02.00 - 2023-06-27
### Changed
- Added support for version v1-22.4.02.00 of the DocuSign Click API.
- Updated the SDK release version.

## [v1.4.0-rc] - Click API v1-22.4.02.00 - 2023-06-12
### Changed
- Added support for version v1-22.4.02.00 of the DocuSign Click API.
- Updated the SDK release version.

## [v1.3.0-rc] - Click API v1-22.4.01.00 - 2023-02-14
### Changed
- Added support for version v1-22.4.01.00 of the DocuSign Click API.
- Updated the SDK release version.

## [v1.2.2] - Click API v1-22.3.01.00 - 2022-10-28
### Changed
- Added support for version v1-22.3.01.00 of the DocuSign Click API.
- Updated the SDK release version.

## [1.1.0] - Click API v1-21.4.01 - 2021-12-09
### Changed
- Added support for version v1-21.4.01 of the DocuSign Click API.
- Updated the SDK release version.


## [1.1.0-rc] - Click API v1-21.4.00 - 2021-11-23
### Changed
- Added support for version v1-21.4.00 of the DocuSign Click API.
- Updated the SDK release version.


## [v1.0.0] - DocuSign Click API v1 - 02/11/2021
### Changed
- First GA version of Click API, supports DocuSign Click v1-20.4.02.

## [1.0.0-Beta] - Click API v1-20.3.02 - 2020-12-17
### Changed
- First release of Click API.
