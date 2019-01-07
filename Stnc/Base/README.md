
## Magento Module

- Step 1: Create a directory for the module like above format.
- Step 2: Declare module by using configuration file module.xml
- Step 3: Register module by registration.php
- Step 4: Enable the module
- Step 5: Create a Routers for the module.
- Step 6: Create controller and action.


### Step 1. Create a directory for the module like above format.

In this module, we will use `Stnc` for Vendor name and `Base` for ModuleName. So we need to make this folder:
`app/code/Stnc/Base`



### Step 2. Enable the module

By finish above step, you have created an empty module. Now we will enable it in Magento environment.
Before enable the module, we must check to make sure Magento has recognize our module or not by enter the following at the command line:

~~~
php bin/magento module:status
~~~

If you follow above step, you will see this in the result:

~~~
List of disabled modules:
Stnc_Base
~~~

This means the module has recognized by the system but it is still disabled. Run this command to enable it:

~~~
php bin/magento module:enable Stnc_Base
~~~

The module has enabled successfully if you saw this result:

~~~
The following modules has been enabled:
- Stnc_Base
~~~

This’s the first time you enable this module so Magento require to check and upgrade module database. We need to run this comment:

~~~
php bin/magento setup:upgrade
~~~

Now you can check under `Stores -> Configuration -> Advanced -> Advanced` that the module is present.

# controller test 
http://mage2.test//helloworld/index/test



If you have followed all above steps, you will see `Hello World` when open the url `http://example.com//helloworld/index/test`



<header class="stnc-beon-header"> add class 

/app/design/frontend/Smartwave/porto/Magento_Catalog/templates/product/list.phtml
add class  -> .stnc-cat-list


categori page 
stnc-cat-list



//TODO thumbnail image helper a aktarılacak 

bu üçü block olacak bunları module aktar 
/var/www/mage2/app/design/frontend/Smartwave/porto/Magento_Catalog/templates/product/view/selman_write_review.phtml
/var/www/mage2/app/design/frontend/Smartwave/porto/Magento_Catalog/templates/product/view/selman_write_review.phtml
/var/www/mage2/app/design/frontend/Smartwave/porto/Magento_Catalog/templates/product/view/selman_warranty.phtml

//burada 801 satır todo selman 
/var/www/mage2/app/code/Stnc/Base/view/frontend/web/css/source/_module.less



hataalr 
http://mage2.test/shop/power.html?color=47
load more ajax onun gorunumu güzelleşecek 
layered navgiation sıralasmına bakılacak 
footer da başlıklar font bold olacak 
mobiledeki header sorunları 




