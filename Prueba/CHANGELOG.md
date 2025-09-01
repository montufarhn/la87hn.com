## 🐾 PawTunes Changelog

### [v1.0.6](https://github.com/Jackysi/pawtunes/compare/v1.0.5...v1.0.6) -  30 January 2025 

#### Fixes

- Fix: when clicking "reset" on template advanced options, value wasn't sent to server   [`4d1bc0c`](https://github.com/Jackysi/pawtunes/commit/4d1bc0c0d014de601973cd21bbe060beb488a4a6)
- Fix: not certain, but this change should handle HTML Encoded entities coming from XML sources #14   [`2418128`](https://github.com/Jackysi/pawtunes/commit/2418128e555532086e59def4894a683d37ddc686)
- Fix: when adding channel logo and editing channel again, image reference disparaged #6   [`ca189b1`](https://github.com/Jackysi/pawtunes/commit/ca189b1646a728235fbf445f735806e8ab40c2d9)
- Fix: templates advanced options checkboxes didn't properly work #9   [`7f8629b`](https://github.com/Jackysi/pawtunes/commit/7f8629b1ce441051e8b471bb56bc1940fef6a309)

#### Tidying of Code eg Whitespace

- Style: slowly adapting Laravel PSR style of code, except 80 character line limit  [`87ea771`](https://github.com/Jackysi/pawtunes/commit/87ea771e38f56ee7d0631828ece0a25cb509937e)
- Style: improve readability of API Panel files as well  [`cb15a41`](https://github.com/Jackysi/pawtunes/commit/cb15a41e7070e050d05e4be945884dddd6297540)

#### General Changes

- Create FUNDING.yml  [`15b53f8`](https://github.com/Jackysi/pawtunes/commit/15b53f865c984c9f76cac198c3cbccce636d2846)

### [v1.0.5](https://github.com/Jackysi/pawtunes/compare/v1.0.4...v1.0.5) -  22 January 2025 

#### New Features

- Feat: PawTunes now also supports "Icecast Public" track info method which uses status-json.xsl (Icecast 2.4+)   [`cbe0bbf`](https://github.com/Jackysi/pawtunes/commit/cbe0bbff875ea0510aab2f373685b336f0d919a3)

#### Fixes

- Fix: channing channels dynamically via hash now properly works   [`d1eed36`](https://github.com/Jackysi/pawtunes/commit/d1eed36ec98389520622a658712ba008166d8114)
- Fix: on channels edit page, when empty track info method is submitted, warnings no longer appear   [`434f270`](https://github.com/Jackysi/pawtunes/commit/434f2701dd38c4bb63e87f75bb76acfcd9437f08)
- Fix: when submitting invalid data on channels add page, don't hide track info fields   [`2afcc48`](https://github.com/Jackysi/pawtunes/commit/2afcc4893842f5d5613c088c9dcfc87c9897158f)
- Fix: Remove notice "Undefined offset: 0" when using a single Icecast channel (Issue #10)   [`71442fb`](https://github.com/Jackysi/pawtunes/commit/71442fbd947d923845125661b6f50238130fa557)
- Fix: configuring Google Analytics caused player to hang   [`669c0a5`](https://github.com/Jackysi/pawtunes/commit/669c0a5527e4688ee10a13ef89747948af7bac42)

#### Documentation Changes

- Docs: Add Docker deployment info to the README file   [`241d13a`](https://github.com/Jackysi/pawtunes/commit/241d13aca59da43e111c3d8a2570fabb00552f2f)

#### Refactoring and Updates

- Refactor: Memcached/Redis Caching methods require "host" parameter. Previously "path" was shared with all  [`536058c`](https://github.com/Jackysi/pawtunes/commit/536058c0ff78bac17d55b3eaac75d9cf11d4a6dd)

#### Tidying of Code eg Whitespace

- Style: remove the initial &lt;?php indents. I've been using these for 16+ years; it's time to switch!  [`860c77a`](https://github.com/Jackysi/pawtunes/commit/860c77a2a7eff0ef4ec3185fb8a8e32b8f1399bf)
- Style: run reindent on SVG images, tidy up standards a little and re-order tags  [`39a8e46`](https://github.com/Jackysi/pawtunes/commit/39a8e46f091e0a9eee5ce2a101a0ee78dd7d693e)
- Style: refactor PawTunes libraries that were left out when changing indents in jackysi/pawtunes@860c77a  [`3ccc059`](https://github.com/Jackysi/pawtunes/commit/3ccc0598c579f70ebb4a6564f4c534728b3cf812)

#### General Changes

- Added ability to set custom caching prefix to the players via config file  [`d95e3cb`](https://github.com/Jackysi/pawtunes/commit/d95e3cb94bdbc7058f4780d734f004be5f12673c)

### [v1.0.4](https://github.com/Jackysi/pawtunes/compare/v1.0.3...v1.0.4) -  6 January 2025 

#### Fixes

- Fix: DO NOT Override configuration files on update and skip default artwork when installing   [`409dfbf`](https://github.com/Jackysi/pawtunes/commit/409dfbf4c60edbc70be15f19d473334e86bac91c)

#### General Changes

- Remove splitbrain/PHPArchive dependency from PawTunes Updater (still requires PHP ZIP Extension)  [`ae1d471`](https://github.com/Jackysi/pawtunes/commit/ae1d4716a86c72a812b5693b0d8b3dbef32a55fa)
- Optimize POST processing script messages and add cache cleanup (missing)  [`b8e9b9d`](https://github.com/Jackysi/pawtunes/commit/b8e9b9d747ba0caf0b6520cfd0cb2ce3f0af72ee)

### [v1.0.3](https://github.com/Jackysi/pawtunes/compare/v1.0.2...v1.0.3) -  6 January 2025 

#### Fixes

- Fix: Simple template didn't show the channels list option at all   [`2f6a433`](https://github.com/Jackysi/pawtunes/commit/2f6a4337d2cfea5ba52e3b20c187ff9be0d3c14e)
- Fix: 'headers already sent' error when serving artwork directly   [`915f434`](https://github.com/Jackysi/pawtunes/commit/915f434ef044472f29e4874c297ebbf76078d158)
- Fix: Without initial data folders and panel view caches, player didn't work properly   [`7aea2fb`](https://github.com/Jackysi/pawtunes/commit/7aea2fb2192621222b0b60cedfe21a6098a09d85)

#### Chores And Housekeeping

- Chore: renamed fn findChannel to findAndSetChannel, makes more sense   [`beaeaee`](https://github.com/Jackysi/pawtunes/commit/beaeaee2ee2609d2053691e34c1e96027e242b37)

#### Refactoring and Updates

- Refactor: Remove Debugging statements for the update changelog  [`40805f4`](https://github.com/Jackysi/pawtunes/commit/40805f43393c97e7e6fda800691e7c3f72c43053)

#### General Changes

- Added ERROR handler for HTTP fetch and Web Socket failure to retrieve data  [`f6c49d1`](https://github.com/Jackysi/pawtunes/commit/f6c49d162c844b0fb3575d7fad19c2d657ab9245)
- The retry timer has to be removed when "close" function is called  [`9bbdd65`](https://github.com/Jackysi/pawtunes/commit/9bbdd652c8e2e88d676d50680e44898903c8e2f8)
- When cleaning player cache, delete cache keys before cached artworks  [`b18d407`](https://github.com/Jackysi/pawtunes/commit/b18d4070de132476504e4c4916f0aed28442165f)
- On "Updates History" panel add scroll bars if the container is bigger than 80% of view port  [`085bb3c`](https://github.com/Jackysi/pawtunes/commit/085bb3c8f20f464d00c9d8f101cabac27684fd5d)
- Don't output Web Socket error from ws class, but instead handle it in new fn  [`5a508d8`](https://github.com/Jackysi/pawtunes/commit/5a508d893d6149bd36e91058ebcd0220e3b23707)
- Refined default Artwork image, removed a gibberish AI-generated text for better clarity  [`0272dc9`](https://github.com/Jackysi/pawtunes/commit/0272dc9f0d82879610959248191b2278bfe99181)

### [v1.0.2](https://github.com/Jackysi/pawtunes/compare/v1.0.1...v1.0.2) -  20 December 2024 

#### New Features

- Feat: long awaited custom web sockets support. Works with any WSS (SSL) socket that sends JSON in the same format as "custom" track info   [`fa9fed3`](https://github.com/Jackysi/pawtunes/commit/fa9fed35b8eccd9863b8f741c9e1105f796220c6)
- Feat: When web socket fails, retry connecting every x seconds, each retry adds 2.5sek delay   [`4de8c1d`](https://github.com/Jackysi/pawtunes/commit/4de8c1dee53eba40dcee8af1404f4e21c9a0121c)

#### Fixes

- Fix: system incorrectly showed update available even if the latest "PawTunes" release was installed   [`52c20f3`](https://github.com/Jackysi/pawtunes/commit/52c20f360cdaff9a2c8acb1e9370f5ab8216060f)
- Fix: changelog didn't properly display headings in the "Update History" panel/tab   [`ef3451a`](https://github.com/Jackysi/pawtunes/commit/ef3451a49f4b11556f215214f89068bd9c8f1a20)
- Fix: small issue with PHP 8.4, which is strict with null types now   [`f6741bf`](https://github.com/Jackysi/pawtunes/commit/f6741bf07b62dd91115f7ad17af598cfc3b360a9)
- Fix: PawTunes template should not show only "-" when track info methods fail   [`82eee34`](https://github.com/Jackysi/pawtunes/commit/82eee3477433f05d25ae8ec1c9f1dbf389e02a27)
- Fix: allow empty language values when using pure javascript library   [`03e208e`](https://github.com/Jackysi/pawtunes/commit/03e208eb1581e7f4e495889963947dae60bf34db)

#### Chores And Housekeeping

- Chore: use PHP's http status code generator instead of manual, modern approach   [`4f77005`](https://github.com/Jackysi/pawtunes/commit/4f77005e6440d2b7343be1ea268ba2c95da50544)
- Chore: metadata event on Custom Media Source should just pass pure data from StreamTitle   [`d3893cf`](https://github.com/Jackysi/pawtunes/commit/d3893cf588f4a28fd77e90d3007253b950d152bc)
- Chore: remove useless padding and margin on the player bottom UI   [`f4164b6`](https://github.com/Jackysi/pawtunes/commit/f4164b6acaf4919b0dfc0e1ef9c0bfa10a9a7b39)

#### Refactoring and Updates

- Refactor: add notes to TS files, these are not present in minified output files  [`b5113b3`](https://github.com/Jackysi/pawtunes/commit/b5113b3b04713ab01b7fcae57da314f37a1faec6)
- Refactor: slight adjustment to await/async functions in main PawTunes TS file  [`dcaf82a`](https://github.com/Jackysi/pawtunes/commit/dcaf82a7fc50c23aa7a4ba2fd16e1ed0cc245411)
- Refactor: improve IDE warnings/notices for the "Simple" template  [`740a5b6`](https://github.com/Jackysi/pawtunes/commit/740a5b6aed09c74c12352b56f9da392c93254bd7)
- Refactor: slightly improved type definition on the default "PawTunes" template  [`08f1557`](https://github.com/Jackysi/pawtunes/commit/08f155774e360e90030d5f16f532e56874748f58)

### v1.0.1

#### Fixes

- Fix: PawTunes didn't properly parse version differences, so 1.0.1 wouldn't be triggered as an update   [`2411926`](https://github.com/Jackysi/pawtunes/commit/2411926091bd1421c3d261a6429cce4679c80ca1)
- Fix: PHP 8.4.1 issues with explicit "nullable"   [`f372362`](https://github.com/Jackysi/pawtunes/commit/f372362c7464bd455e58a0c645ae13ea2d836c46)
- Fix: updates history on the updates page had invalid line breaks which caused too many empty lines   [`0d59fa6`](https://github.com/Jackysi/pawtunes/commit/0d59fa6121cb2f3c8162912af07296d442a614e0)
- Fix: mmd function for warnings and updates was renamed to markdown   [`f4b7f1d`](https://github.com/Jackysi/pawtunes/commit/f4b7f1d4c62043e63d080f97ae9f11b5433c19a5)

#### Refactoring and Updates

- Refactor: remove CHANGELOG from GIT (it is auto generated on release) also spell fix CHANGELOG generator  [`758d9e2`](https://github.com/Jackysi/pawtunes/commit/758d9e2ef2f1c50b977eced2c3b95ecc0e371ccc)

#### General Changes

- First release, PawTunes v1.0.0  [`63f1c99`](https://github.com/Jackysi/pawtunes/commit/63f1c993a8de3ed8b85d594fbd8ae35935217b43)
- Improve change log looks on the update page  [`cda67dc`](https://github.com/Jackysi/pawtunes/commit/cda67dc6de90cfb13b665e0e1f20956d98b32c71)
