# Magento Community Edition Mirror

This repository is a history of Magento Community releases going all the way back to 1.3.2.  The files were pulled from Magento download page.

http://www.magentocommerce.com/download

There is a branch for each Magento release version and no files have been modified.

## Disclaimer

While no files have been modified, please **do not use these branches for production sites**.  I am in no way responsible for the functionality of this codebase.  I'm simply providing a mirror of it for comparative purposes.  Please use the [official Magento site for downloading working copies](http://www.magentocommerce.com/download) of the Magento Community Edition codebase for production use.

## Useful Commands

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
