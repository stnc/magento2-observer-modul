# Beon Mobile Magento Module

**Magento 2 Module development** or **Magento 2 Hello World Simple Module** trends is increase rapidly while Magento release official version. That why we - **Stnc** - are wring about a topic that introduces how to create a simple **Hello World module in Magento 2**.
As you know, the module is a  directory that contains `blocks, controllers, models, helper`, etc - that are related to a specific business feature. In Magento 2, modules will be live in `app/code` directory of a Magento installation, with this format: `app/code/<Vendor>/<ModuleName>`. Now we will follow this steps to create a simple module which work on Magento 2 and display `Hello World`.



## Beon Mobile Magento Module

- Step 1: Create a directory for the module like above format.
- Step 2: Declare module by using configuration file module.xml
- Step 3: Register module by registration.php
- Step 4: Enable the module
- Step 5: Create a Routers for the module.
- Step 6: Create controller and action.


### Step 1. Create a directory for the module like above format.

In this module, we will use `Stnc` for Vendor name and `Base` for ModuleName. So we need to make this folder:
`app/code/Stnc/Base`

### Step 2. Declare module by using configuration file module.xml

Magento 2 looks for configuration information for each module in that module’s etc directory. We need to create folder etc and add module.xml:

~~~
app/code/Stnc/Base/etc/module.xml
~~~

And the content for this file:

~~~ xml
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="Stnc_Base" setup_version="1.0.0" />
</config>
~~~

In this file, we register a module with name `Stnc_Base` and the version is `1.0.0`.

### Step 3. Register module by registration.php

All Magento 2 module must be registered in the Magento system through the magento ComponentRegistrar class. This file will be placed in module root directory.
In this step, we need to create this file:

~~~
app/code/Stnc/Base/registration.php
~~~

And it’s content for our module is:

~~~
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Stnc_Base',
    __DIR__
);
~~~

### Step 4. Enable the module

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

### Step 5. Create a Routers for the module.

In the Magento system, a request URL has the following format:

~~~
http://example.com/<router_name>/<controller_name>/<action_name>
~~~

The Router is used to assign a URL to a corresponding controller and action. In this module, we need to create a route for frontend area. So we need to add this file:

~~~
app/code/Stnc/Base/etc/frontend/routes.xml
~~~

And content for this file:

~~~
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:App/etc/routes.xsd">
    <router id="standard">
        <route id="mageplaza" frontName="Base">
            <module name="Stnc_Base" />
        </route>
    </router>
</config>
~~~

After define the route, the URL path to our module will be: `http://example.com/Base/*`

### Step 6. Create controller and action.

In this step, we will create controller and action to display `Hello World`.
Now we will choose the url for this action. Let assume that the url will be:
`http://example.com/Base/index/display`

So the file we need to create is:

~~~
app/code/Stnc/Base/Controller/Index/Display.php
~~~

And we will put this content:

~~~ php
<?php
namespace Stnc\Base\Controller\Index;

class Display extends \Magento\Framework\App\Action\Action
{
  public function __construct(
\Magento\Framework\App\Action\Context $context)
  {
    return parent::__construct($context);
  }

  public function execute()
  {
    echo 'Hello World';
    exit;
  }
}
~~~


If you have followed all above steps, you will see `Hello World` when open the url `http://example.com/Base/index/display`



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




