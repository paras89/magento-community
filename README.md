# Magento Community Edition Mirror

This repository is a history of Magento Community releases going all the way back to 1.0.

There is a branch for each Magento release version (74 in total, so far) and no files have been modified.

## Disclaimer

While no files have been modified, please **do not use these branches for production sites**.  I am in no way responsible for the functionality of this codebase.  I'm simply providing a mirror of it for comparative purposes.  Please use the [official Magento site for downloading working copies](http://www.magentocommerce.com/download) of the Magento Community Edition codebase for production use.

## Latest Changes (1.9.0.1 vs. 1.9.0.0)

    $ git diff --name-status 1.9.0.1..1.9.0.0
    M       app/Mage.php
    M       app/code/core/Mage/SalesRule/Model/Resource/Rule/Collection.php
    M       downloader/Maged/Controller.php
    M       skin/frontend/rwd/default/css/styles-ie8.css
    M       skin/frontend/rwd/default/css/styles.css
    M       skin/frontend/rwd/default/js/app.js
    M       skin/frontend/rwd/default/scss/layout/_header-nav.scss
    M       var/package/Interface_Adminhtml_Default-1.9.0.0.xml
    M       var/package/Interface_Frontend_Base_Default-1.9.0.0.xml
    M       var/package/Interface_Frontend_Default-1.9.0.0.xml
    A       var/package/Interface_Frontend_Rwd_Default-1.9.0.0.xml
    D       var/package/Interface_Frontend_Rwd_Default-1.9.0.1.xml
    M       var/package/Interface_Install_Default-1.9.0.0.xml
    M       var/package/Lib_Js_Mage-1.9.0.0.xml
    M       var/package/Lib_Js_Prototype-1.7.0.0.5.xml
    M       var/package/Lib_Js_TinyMCE-3.4.7.1.xml
    M       var/package/Lib_Magento-1.9.0.0.xml
    M       var/package/Lib_Varien-1.9.0.0.xml
    M       var/package/Lib_ZF-1.12.3.0.xml
    M       var/package/Lib_ZF_Locale-1.12.3.0.xml
    A       var/package/Mage_All_Latest-1.9.0.0.xml

## Useful Commands

Note that across release years these commands don't work as well due to the fact that the license year changes.  As long as the releases are from the same year, you'll get corrent info with the below commands.  If anyone has a good work-around for ignoring comments when doing a diff against branches, shoot me an email.

See what files changed from version to version.

    $ git diff --name-status 1.7.0.2..1.7.0.1
    M       RELEASE_NOTES.txt
    M       app/Mage.php
    M       app/code/core/Mage/Paypal/Model/Config.php
    D       app/code/core/Zend/XmlRpc/Request.php
    D       app/code/core/Zend/XmlRpc/Response.php
    A       var/package/Mage_All_Latest-1.7.0.1.xml
    D       var/package/Mage_All_Latest-1.7.0.2.xml
    A       var/package/Mage_Core_Modules-1.7.0.1.xml
    D       var/package/Mage_Core_Modules-1.7.0.2.xml

What changed from version to version.

    $ git diff 1.7.0.2..1.7.0.1 -- app/Mage.php
    diff --git a/app/Mage.php b/app/Mage.php
    index bc7a6cb..7cccc9f 100644
    --- a/app/Mage.php
    +++ b/app/Mage.php
    @@ -170,7 +170,7 @@ final class Mage
                 'major'     => '1',
                 'minor'     => '7',
                 'revision'  => '0',
    -            'patch'     => '2',
    +            'patch'     => '1',
                 'stability' => '',
                 'number'    => '',
             );

This repository will be maintained moving forward.
