<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GoCart</title>
    <meta name="description" content="GoCart Documentation">
    <meta name="author" content="Clear Sky Designs">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

    <link rel="icon" type="image/png" href="favicon.png">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <style type="text/css">
        * { box-sizing: border-box; }
        html { overflow-x:hidden; }
        a {text-decoration: none; }
        h5 { margin-bottom:1rem; text-transform: uppercase; font-weight:normal; font-size:1.2em; border-bottom:1px solid #ddd;}

        .container {
            margin-left:250px;
        }
        .hand {
            height:40px;
            width:40px;
            position:fixed;
            left:15px;
            top:12px;
            cursor:pointer;
            z-index:10;
            display:none;
            -webkit-transition: all .33s ease-in-out;
            -moz-transition: all .33s ease-in-out;
            -o-transition: all .33s ease-in-out;
            transition: all .33s ease-in-out;
        }
        .hamburger, .hamburger:before, .hamburger:after {
            content:' ';
            position:absolute;
            height:5px;
            width:40px;
            top:18px;
            left:0px;
            background-color:#aaa;
            -webkit-transition: all .33s ease-in-out;
            -moz-transition: all .33s ease-in-out;
            -o-transition: all .33s ease-in-out;
            transition: all .33s ease-in-out;
        }
        .hand:hover .hamburger, .hand:hover .hamburger:before, .hand:hover .hamburger:after  { background-color:#ccc; }
        .hamburger:before { top:-12px; }
        .hamburger:after { top:12px; }
        .hand.activated {
            left:190px;
        }
        .hand.activated .hamburger {
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }
        .hand.activated .hamburger:after, .hand.activated .hamburger:before {
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            top:0px;
        }

        section {
            background-color:#fff;
            margin-bottom:40px;
            border-radius:4px;
            padding:15px;
            overflow-x:auto;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.15);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.15);
            box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.15);
        }

        .container .title {
            background-color:#eee;
            color:#555;
            margin:-20px -15px 0px;
            margin-bottom:20px;
            padding:10px 15px;
        }

        nav {
            width:250px;
            padding:0px 0px 50px;
            position:fixed;
            height:100%;
            overflow:auto;
            background-color:#222;
            -webkit-transition: all .33s ease-in-out;
            -moz-transition: all .33s ease-in-out;
            -o-transition: all .33s ease-in-out;
            transition: all .33s ease-in-out;
        }
        nav a {
            text-decoration:none;
            color:#fff;
            display:block;
            text-transform: uppercase;
            font-size:.8em;
            letter-spacing: .15em;
        }

        nav .title {
            color:#666;
            font-size:20px;
            padding:5px 15px;
            margin:0px 0px 5px 0px;
            border-bottom:1px solid #666;
            margin-top:20px;
        }
        nav ul li{
            list-style-type:none;
        }
        nav>ul li {
            margin-bottom:0px;
            padding:3px 15px;
        }
        nav>ul>li>ul {
            max-height:0px;
            overflow:hidden;
            margin:0px;
            padding-bottom:0px;
            -webkit-transition: all .33s ease-in-out;
            -moz-transition: all .33s ease-in-out;
            -o-transition: all .33s ease-in-out;
            transition: all .33s ease-in-out;
        }
        nav>ul>li>ul.expand {
            max-height:500px;
        }
        nav>ul>li>ul li {
            padding-left:15px;
        }

        nav>ul>li>ul li a{
            text-transform: none;
            opacity:.6;
        }

        main {
            z-index:2;
            padding:50px;
            color:#555;
            background-color:#f8f8f8;
            font-size:16px;
        }

        blockquote {
            border-left:5px solid #eee;
            padding-left:30px;
        }

        
        .tag {
            background-color:#1EAEDB;
            border-radius:3px;
            color:#fff;
            text-decoration:none;
            padding:3px 7px;
            font-size:.7em;
            text-transform: uppercase;
            font-family:arial, verdana, sans-serif;
        }
        .tag:hover {
            background-color:#0FA0CE;
            color:#fff;
        }



        @media (max-width:850px) {

            .hand {
                display:block;
            }

            nav {
                left:-250px;
            }
            nav.activated {
                left:0px;
            }
            .container {
                margin-left:50px;
            }
            main {
                padding:20px;
                font-size:14px;
            }
        }
    </style>

</head>
<body>
<div class="hand">
    <div class="hamburger"></div>
</div>
<nav>
    <div class="title">User Guide</div>
    <ul>
        <li><a href="#ug_introduction">Introduction</a></li>
        <li><a href="#ug_requirements">Requirements</a></li>
        <li><a href="#ug_installation">Installation</a></li>
        <li><a href="#ug_configuration">Configuration</a>
            <ul>
                <li><a href="#ug_configuration_shop_details">Shop Details</a>
                <li><a href="#ug_configuration_email_settings">Email Settings</a>
                <li><a href="#ug_configuration_ship_from_address">Ship From Address</a>
                <li><a href="#ug_configuration_locale_and_currency">Locale &amp; Currency</a>
                <li><a href="#ug_configuration_security">Security</a>
                <li><a href="#ug_configuration_package_details">Package Details</a>
                <li><a href="#ug_configuration_orders_and_inventory">Orders &amp; Inventory</a>
                <li><a href="#ug_configuration_tax_settings">Tax Settings</a>
            </ul>
        </li>
        <li><a href="#ug_shipping_methods">Shipping Methods</a>
            <ul>
                <li><a href="#ug_shipping_methods_install">Installation</a></li>
                <li><a href="#ug_shipping_methods_removal">Removal</a></li>
            </ul>
        </li>
        <li><a href="#ug_payment_methods">Payment Methods</a>
            <ul>
                <li><a href="#ug_payment_methods_install">Installation</a></li>
                <li><a href="#ug_payment_methods_removal">Removal</a></li>
            </ul>
        </li>
        <li><a href="#ug_locations">Taxes &amp; Localization</a>
            <ul>
                <li><a href="#ug_locations_countries">Countries</a></li>
                <li><a href="#ug_locations_zones">Zones (state/province)</a></li>
                <li><a href="#ug_locations_zone_areas">Zone Areas (post codes)</a></li>
            </ul>
        </li>
        <li><a href="#ug_administrators">Administrators</a></li>
        <li><a href="#ug_customers">Customers</a></li>
        <li><a href="#ug_groups">Customer Groups</a></li>
        <li><a href="#ug_categories">Categories</a></li>
        <li><a href="#ug_products">Products</a>
            <ul>
                <li><a href="#ug_products_the_product_form">The Product Form</a></li>
                <li><a href="#ug_products_digital_products_tab">Digital Products Tab</a></li>
                <li><a href="#ug_products_product_categories_tab">Product Categories Tab</a></li>
                <li><a href="#ug_products_product_options_tab">Product Options Tab</a></li>
                <li><a href="#ug_products_related_products_tab">Related Products Tab</a></li>
                <li><a href="#ug_products_images_tab">Images Tab</a></li>
                <li><a href="#ug_products_gift_card">Gift Card Products</a></li>
            </ul>
        </li>
        <li><a href="#ug_digital_products">Digital Products</a></li>
        <li><a href="#ug_orders">Orders</a></li>
        <li><a href="#ug_reports">Reports</a></li>
        <li><a href="#ug_pages">Pages &amp; Links</a></li>
        <li><a href="#ug_banners">Banners</a>
            <ul>
                <li><a href="#ug_banners_form">The Banner Form</a>
                <li><a href="#ug_banners_shortcode">Using the Banner Short Code</a>
            </ul>
        </li>
        <li><a href="#ug_coupons">Coupons</a></li>
        <li><a href="#ug_gift_cards">Gift Cards</a></li>
        <li><a href="#ug_canned_messages">Canned Messages</a></li>
    </ul>
</nav>
<main>
    <div class="container">
        <a name="ug_introduction"></a>
        <img src="grey-cart.png" style="width:100px; display:block; margin:auto">

        <h1>User Guide</h1>

        <section>
            <h3 class="title">Introduction</h3>
            <p>
                GoCart 3 is an open source ecommerce platform built on top of CodeIgniter by Clear Sky Designs.
                Our goal is not to build an enormous system, but rather to build an easy to use, easy to customize
                shopping cart that can be custom tailored to satisfy most ecommerce needs.
            </p>
        </section>

        <section>
            <a name="ug_requirements"></a>
            
            <h3 class="title">Requirements</h3>
            
            <p>
                It's important that before attempting to install GoCart your ensure your server fits the requirements to run the application.
            </p>

            <p>
                <strong>The following features are required in order to properly run GoCart</strong>:<br>
                <ul>
                    <li>PHP 5.4 or greater</li>
                    <li>PHP_INTL library <a class="tag" href="http://php.net/manual/en/intl.setup.php" target="_blank">read more</a></li>
                    <li>URL re-writing (to remove index.php from the URL)
                        <ul>
                            <li>By default, GoCart 3 supports MOD_REWRITE on Apache</li>
                        </ul>
                    </li>
                    <li>MySQL</li>
                </ul>
            </p>
        </section>

        <section>
            
            <a name="ug_installation"></a>
            <h3 class="title">Installation</h3>
            
            <p>
                Thanks for giving GoCart a spin. This guide will walk you through the basics of installing GoCart. If you haven't already,
                please review the section before this one titled <a class="tag" href="#ug_requirements">Requirements</a> to ensure that
                your server can actuall run GoCart.
            </p>

            <p>
                <h5>Download GoCart</h5>
                Start by heading over the to the GoCart website to <a class="tag" href="https://gocartdv.com/download">download GoCart 3</a>. If you have command line access to your server,
                you might find it more convenient to download GoCart directly to your server using cURL or wget.
            </p>

            <blockquote>
                <strong>cURL</strong><br>
                <code>
                    curl -O https://gocartdv.com/downloads/gocart3.zip
                </code>
            </blockquote>

            <blockquote>
                <strong>Wget</strong><br>
                <code>
                    wget https://gocartdv.com/downloads/gocart3.zip
                </code>
            </blockquote>

            <p>
                <h5>Upload GoCart to your server</h5>
                If you do not have command line access or you chose to download the GoCart 3 to your computer first,
                you'll need to unzip GoCart and upload the files to your servers public folder. If you do have command line access
                you should be able to unzip them directly on the server using the following:
            </p>
            
            <blockquote>
                <strong>Unzip</strong><br>
                <code>unzip gocart3.zip</code>
            </blockquote>

            <p>
                <h5>The Installer</h5>
                Now that you have the files for GoCart 3 uploaded to your servers public directory, go ahead and pull up your website in a browser. From here
                GoCart should detect that there are some configuration files missing and redirect you to the <strong>/install</strong> directory. If GoCart
                does NOT automatically direct you, try typing install into the URL directly <small>ex. http://yourdomain.com/install</small>
            </p>

            <p>
                Once the installer loads you should have one or more notices displayed as well as a form for entering your database credentials. If you see any
                red alerts you will not be able to successfully install GoCart until those problems are dealt with. GoCart DOES require write access to the
                <em>/application/config</em> directory as well as the <em>/uploads</em> directory.
            </p>

            <p>
                If you have not yet created a database for GoCart, do that now. Proceed to fill in the form with your database credentials. It's recommended
                that you use a database prefix in case your database is connected to multiple applications. Once the form is filled out, click the install button.
                If the system is able to connect to your database, the installer will generate the required configuration files and attempt to redirect you to the
                admin panel login page. <strong>The default username and password for the GoCart admin panel is admin/admin</strong>.

            </p>
            <p>
                If your server is not configured for URL rewriting you will likely run into a 404 error on this redirect. If that is the case you will need to
                rectify this problem before using GoCart.
            </p>

        </section>

        <section>
            <a name="ug_configuration"></a>
            
            <h3 class="title">Configuration</h3>
            <p>
                GoCart supports the ability to configure some elements of the platform from the admin panel. It's a good idea to configure your GoCart installation
                before launching your site in order to have the system properly reflect your organization.
            </p>

            <p>
                The GoCart configuration form is located in the Administrative submenu. Configuration is broken into some primary sections most of
                which are fairly self explanatory.
            </p>

            <p>
                <a name="ug_configuration_shop_details"></a>
                <h5>Shop Details</h5>
                Shop details are where we set the most basic details of the shop. Here we're going to enter the Name of our store, GoCart Theme, Homepage,
                Products per Category Page, Default Meta Keywords &amp; Default Meta Description. 
            </p>

            <p>
                <strong>Homepage</strong> is selectable and can point to any pages you have in your <a class="tag" href="#ug_pages">page list</a>. It's important to note that themes
                developers have the ability to overwrite this feature by simply including a homepage.php file.
            </p>

            <p>
                <strong>Default Meta Keywords</strong> &amp; <strong>Default Meta Description</strong> are used on any portions of the system that are not a
                <a class="tag" href="#ug_categories">Category</a>, <a class="tag" href="#ug_products">Product</a>, or <a class="tag" href="#ug_pages">Page</a>.
            </p>

            <p>
                <a name="ug_configuration_email_settings"></a>
                <h5>Email Settings</h5>
                This is one of the more important sections of the Configuration page. You will need to configure your shop's email. The <strong>Email To Address</strong>
                is the email address that orders are sent to when they are placed. The <strong>Email From Address</strong> the the email address that
                all correspondence from GoCart comes from.
            </p>

            <p>
                GoCart uses the SwiftMailer PHP Class for sending email and supports 3 different methods that can be adjusted for your server. Most people will probably use Mail which
                simply uses PHP's internal Mail method. Other options include SMTP &amp; Sendmail which will require additional settings.
            </p>

            <p>
                <a name="ug_configuration_ship_from_address"></a>
                <h5>Ship From Address</h5>
                The Ship From Address is only required if you are utilizing a real time rates shipping method that requires a point of origin.
            </p>

            <p>
                <a name="ug_configuration_locale_and_currency"></a>
                <h5>Locale &amp; Currency</h5>
                This section dictates how currency formatting that is used throughout the site is displayed. Some payment methods will also utilize
                the Currency field.
            </p>

            <p>
                <a name="ug_configuration_security"></a>
                <h5>Security</h5>
                There are 3 fields that require some explanation in the Security settings. <strong>DEV Username</strong> &amp; <strong>DEV Password</strong>
                Are used for setting basic HTTP Authentication on your site. This is really useful for restricting access to a GoCart installation while
                building in order to easily mitigate any indexing by search engines or accidental orders from people who might happen to find the site
                before it's ready for prime time.
            </p>
            <p>
                If <strong>Use SSL</strong> is checked in then the entire site will switch over to HTTPS. It's important to use SSL on a live ecommerce site.
                But only check this in once you have an SSL certificate installed for your site, otherwise you will get an error when you try to pull it up.
            </p>

            <p>
                <a name="ug_configuration_package_details"></a>
                <h5>Package Details</h5>
                These settings are utilized by some real time shipping rates modules.
            </p>

            <p>
                <a name="ug_configuration_orders_and_inventory"></a>
                <h5>Orders &amp; Inventory</h5>
                In GoCart 3, orders can have custom statuses typed in directly BUT there is also a droplist of default statuses available. This section of
                the Configuration details allows you to add or delete the default statuses available in the drop list. <strong>Enable Inventory Tracking</strong>
                turns inventory tracking on for your whole shop. Individual products can also have inventory turned on or off but if Enable Inventory Tracking
                is not checked in then none of the product level adjustments will have an effect. <strong>Allow customers to buy items that are out of stock</strong>
                will do exactly what it says. This will allow you to oversell an item while still maintaining a count of inventory in the database.
            </p>

            <p>
                <a name="ug_configuration_tax_settings"></a>
                <h5>Tax Settings</h5>
                Tax settings allows us to choose whether to apply taxes according to the customers billing or shipping address and whether or not to apply
                taxes to shipping charges. Setting actual tax rates for a geographic location is done in the <a class="tag" href="#ug_locations">Taxes &amp; Localization</a>
                section of the admin panel.
            </p>
        </section>

        <section>
            <a name="ug_shipping_methods"></a>
            <h3 class="title">Shipping Methods</h3>
            <p>
                Shipping methods are specialized addons that extend GoCart's ability to provide additional shipping rates during checkout. By default GoCart
                only comes with the flat rate shipping module. Additional shipping modules can be found on our <a href="http://gocartdv.com/shipping-methods" target="_blank">website</a>.
                Installing a shipping module addon is not difficult but is likely best done by whoever installed the shopping cart.
            </p>

            <p>
                <a name="ug_shipping_methods_install"></a>
                <h5>Installing a Shipping Module</h5>
                The first think you need to do is obtain the shipping module you want to install from the GoCart website. From here, unzip the contents and upload the
                folder to the addons directory of your GoCart installation.
            </p>
            
            <p>
                Now you'll need to delete the manifest file in located at <em>/application/config/manifest.php</em>. The next time you load a page of your site, GoCart
                will automatically regenerate this file thus recognizing that you have a new module installed.
            </p>
            
            <p>
                Now that your new module is uploaded to your GoCart installation we'll need to configure the shipping module. First login to your admin panel and click
                "Shipping Modules" found in the Administrative submenu. You should see your new shipping module listed in the table.
            </p>

            <p>
                Click the green check mark button all the way to the right. This action will tell GoCart that you intend to use the shipping module and will enable
                you to configure it appropriately. If all goes well the checkmark button should be replaced by two buttons. Clicking the gear icon will bring you
                to a configuration form. Each shipping module is different and the required fields are specific to the service which they tap into or provide and
                thus should contain their own instructions for configuration.
            </p>

            <p>
                <a name="ug_shipping_methods_removal"></a>
                <h5>Removing a Shipping Module</h5>
                Clicking the red x button will tell GoCart that you no longer intend to offer the selected shipping method and GoCart will remove all settings
                related to it from the database.
            </p>

            <p>
                You can completely remove a shipping method by deleting the related shipping method folder from the addons directory and then deleting the 
                <em>/application/config/manifest.php</em> file. The next page load will once again regenerate the manifest.php file.
            </p>
        </section>

        <section>
            <a name="ug_payment_methods"></a>
            
            <h3 class="title">Payment Methods</h3>
            <p>
                Payment methods are specialized addons that extend GoCart's ability to accept payments during checkout. By default GoCart
                only comes with the COD (charge on delivery) payment module. Additional payment modules can be found on our <a href="http://gocartdv.com/payment-methods" target="_blank">website</a>.
                Installing a payment module addon is not difficult but is likely best done by whoever installed the shopping cart.
            </p>

            <p>
                <a name="ug_payment_methods_install"></a>
                <h5>Installing a Payment Module</h5>
                The first think you need to do is obtain the payment module you want to install from the GoCart website. From here, unzip the contents and upload the
                folder to the addons directory of your GoCart installation.
            </p>
            
            <p>
                Now you'll need to delete the manifest file in located at <em>/application/config/manifest.php</em>. The next time you load a page of your site, GoCart
                will automatically regenerate this file thus recognizing that you have a new module installed.
            </p>
            
            <p>
                Now that your new module is uploaded to your GoCart installation we'll need to configure the payment module. First login to your admin panel and click
                "Payment Modules" found in the Administrative submenu. You should see your new payment module listed in the table.
            </p>

            <p>
                Click the green check mark button all the way to the right. This action will tell GoCart that you intend to use the payment module and will enable
                you to configure it appropriately. If all goes well the checkmark button should be replaced by two buttons. Clicking the gear icon will bring you
                to a configuration form. Each payment module is different and the required fields are specific to the service which they tap into or provide and
                thus should contain their own instructions for configuration.
            </p>

            <p>
                <a name="ug_payment_methods_removal"></a>
                <h5>Removing a Payment Module</h5>
                Clicking the red x button will tell GoCart that you no longer intend to offer the selected payment method and GoCart will remove all settings
                related to it from the database.
            </p>

            <p>
                You can completely remove a payment method by deleting the related payment method folder from the addons directory and then deleting the 
                <em>/application/config/manifest.php</em> file. The next page load will once again regenerate the manifest.php file.
            </p>
        </section>

        <section>
            <a name="ug_locations"></a>
            
            <h3 class="title">Taxes &amp; Localization</h3>
            <p>
                These settings are accessible in the submenu of Administrative under "Locations". GoCart uses the Locations to prepopulate the dropdowns for Country &amp; State
                select menus within the customer address form. GoCart also enables users to set percentage based tax rates at the country, state/province (referred to as "Zones")
                and zip or postal code level (referred to as Zone Areas).
            </p>

            <p>
                <a name="ug_locations_contries"></a>
                <h5>Countries</h5>
                Countries edited, deleted, and sorted from the main list page. If there are countries you do not want to support you have two choices.
                <ol>
                    <li>Delete the country by clicking the red x button.</li>
                    <li>Disable the country by clicking the edit button and unchecking "enabled" at the bottom of the form.</li>
                </ol>
                Countries can also support a national sales tax rate.
            </p>

            <p>
                <a name="ug_locations_zones"></a>
                <h5>Zones</h5>
                Zones are essentially states or provinces. To edit view the zones a country has, click the map marker button. This will bring you to a list of zones sorted alphabetically.
                If there is a zone you do not want to support you can handle them the same way as you handle countries.
                <ol>
                    <li>Delete the zone by clicking the red x button.</li>
                    <li>Disable the zone by clicking the edit button and unchecking "enabled" at the bottom of the form.</li>
                </ol>
                A percentage based zone sales tax can also be set from the zone form.
            </p>

            <p>
                <a name="ug_locations_zone_areas"></a>
                <h5>Zone Areas</h5>
                A Zone Area is essentially a zip or postal code. GoCart does not come pre-loaded with any Zone Areas and Zone Areas <strong>will not</strong> populate a dropdown based on a selected
                Zone. The only purpose of a Zone Area in GoCart is to provide a tax rate at the Zone Area level. This feature is useful for a businesses that needs to collect county or city/town sales taxes.
            </p>
        </section>

        <section>
            <a name="ug_administrators"></a>
            
            <h3 class="title">Administrators</h3>
            <p>
                The administrator list is accessible in the Administrative submenu and is where you go to add admin users to your GoCart Installation. GoCart supports two users types,
                Admins &amp; Order users. An admin has access to every part of the administration panel. Order users only have access to the order management portion of the system.
            </p>
        </section>

        <section>
            <a name="ug_customers"></a>
            
            <h3 class="title">Customers</h3>
            <p>
                Customers are accessible via the Sales submenu. From here customers can be added, edited, and deleted from GoCart. If you're using the <a class="tag" href="#ug_groups">Customer Groups</a>
                feature, the group a customer belongs to can be changed by editing their account. Customer addresses are accessible by clicking the envelope icon on the desired row.
            </p>
        </section>

        <section>
            <a name="ug_groups"></a>
            
            <h3 class="title">Customer Groups</h3>
            <p>
                Customer groups are accessible via the Sales submenu under "groups". By default GoCart comes with only one group titled "Retail". The name of this group can be changed but it cannot be
                deleted since it's requried for GoCart to have at least one customer group. Additional customer groups can be added by clicking the "Add New Group" button. For every group
                thats added there will be new fields related to that group created for <a class="tag" href="#ug_products">products</a> and <a class="tag" href="#ug_categories">categories</a>.
            </p>
            <p>
                Products will get an additional price, sale price, and enabled fields. Categories will get an additional enabled field. This allows us to price products differently for one customer group
                from another as well as show or hide a category or product all together from specific groups.
            </p>
        </section>

        <section>
            <a name="ug_categories"></a>
            
            <h3 class="title">Categories</h3>
            <p>
                Categories are accessible via the Catalog submenu. The primary list page will display every category in your GoCart installation according to it's heirachy.
                Categories can be Hidden, Top Level, or a child of another category. Hidden categories will not be displayed in the navigation bar on the front end but are
                accessible via the URL.
            </p>

            <p>
                To create a new category click the "Add New Category" button in the top right of the Category list page. To edit an existing category click the pencil icon to
                the right of the category you want to edit.
            </p>

            <p>
                If you're utilizing the <a class="tag" href="#ug_groups">customer groups</a> feature you will be able to enable or disable categories based on the type of customer
                logged in on the front end. You can also select whether a category is hidden, top level or a child category from the "Parent" select menu located on the right side
                of the form.
            </p>

            <p>
                The <strong>Name</strong> and <strong>Description</strong> fields will generally be displayed at the top of the category page on the front end of your website.
            </p>

            <p>
                The <strong>Slug</strong> field is what is displayed in the URL of your shop to reference the category <small><em>https://yourdomain.com/category/slug-goes-here</em></small>. It is not a required field.
                If you leave it blank, GoCart will generate a slug based on the title of the product.
            </p>

            <p>
                The <strong>Sequence</strong> field will enable you to decide which order this category will show up in according to it's parent.
            </p>

            <p>
                The <strong>SEO Title</strong> is the name that will be inserted in the pages "title" tag in the header of your cart.
            </p>

            <p>
                The <strong>Meta Data</strong> field is where you can enter any special meta data you want for this category. Keep in mind when editing the meta data field you need to
                use well formed HTML otherwise you could break the view and function of the category on the front end.
            </p>
                
            <p>
                Not every theme will utilize the excerpt or the image fields, but they are there for convenience in the event that they are required by a theme developer.
            </p>

            <p>
                <h5>Using the Category Short Code</h5>
                Categories can be displayed on a <a href="#ug_pages">page</a> using a shortcode. The shortcode formatting for a category looks something like this
                <strong>{category|slug|quantity}</strong>. In this case you would replace slug with the slug of the category you are wanting to display.
                Quantity should be replaced with the number of products you want to display. This is really useful for listing a small selection of products on a page outside
                the flow of the normal system.
            </p>
        </section>

        <section>
            <a name="ug_products"></a>
            
            <h3 class="title">Products</h3>
            <p>
                Products are accessible in the Catalog submenu. This is probably the most complicated admin panel in GoCart and there is a lot of functionality here.
                GoCart paginates the products list at 100 products per page. Products are searchable and can be filtered out by which categories they are in. GoCart supports
                two product types.
                <ol>
                    <li>Gift Cards</li>
                    <li>Normal Products</li>
                </ol>
                Gift Cards are special products. When a gift card is sold a new gift card is added to gocart and an email is sent to the recipient. Gift Card products do not
                have as many editable fields standard products.
            </p>
            
            <p>
                Products that have inventory tracking turned on, can be bulk edited from the list page by simply updating their available quantities and clicking the "Bulk Save"
                button in the top right of the list page.
            </p>
            
            <p>
                <a name="ug_products_the_product_form"></a>
                <h5>The Product Form</h5>
                To add a new product click the "New Product" button in the top right.
            </p>
            
            <p>
                <strong>Inventory Fields</strong> include track stock, fixed quantity, and available quantity. Track Stock just tells GoCart that you want the
                system to decrement the available quantity each time it's purchased. Fixed quantity will restrict the number of items a customer can purchase
                to one.
            </p>

            <p>
                <strong>SEO Information</strong> allows you to manipulate fields that are not generally visible to customers but are frequently used by search
                engines to designate the contents of a page. The URL Keyword is how the name of the product is represented in the URI <small><em>ex. https://yourdomain.com/product/url-keyword</em></small>
                Meta Tags allow you to enter your own meta tags in to the header. It's important to use well formed HTML in this field in order to avoid breaking the view
                and experience that a customer will be provided.
            </p>

            <p>
                The <strong>Shippable</strong> field lets GoCart know if this product can be shipped and is utilized by shipping addons as a flag to incorporate this products information in to the algorithm for
                calculating shipping costs.
            </p>

            <p>
                The <strong>Taxable</strong> field lets GoCart know if the cost of this product should be taken into account when calculating the taxes for a particular order.
            </p>

            <p>
                The <strong>Weight</strong> field is utilized by some shipping addons to calculate the price of shipping.
            </p>

            <p>
                <strong>Pricing</strong> in GoCart is based on <a class="tag" href="#ug_groups">Customer Groups</a>. Each group will have 3 fields: Enabled, Price, and Sale Price.
            </p>

            <p>
                <a name="ug_products_digital_products_tab"></a>
                <h5>Digital Products Tab</h5>
                You may or may not see the Digital Products tab. This tab will only show up if you have <a class="tag" href="#ug_digital_products">digital products</a> added to the system.
                To associate a digital product with this item, simply check in the checkbox to the right of the filename.
            </p>

            <p>
                <a name="ug_products_product_categories_tab"></a>
                <h5>Products Categories Tab</h5>
                The Categories tab will list out every category in your GoCart installation according to it's heirarchy. Each category has a checkbox and a radio button. The checkbox will
                ensure that the product is displayed in that category when accessed from the front end. The radio button represents the main, or primary category for a product.
                This is that category that is used to generate the breadcrumb that is displayed on the product page.
            </p>

            <p>
                For convenience each customer group is represented along side the catgory names with a checkmark indicating whether or not the category is enabled for that particular group.
            </p>

            <p>
                <a name="ug_products_product_options_tab"></a>
                <h5>Product Options Tab</h5>
                GoCart products support five different option types. To add a new option, select the option type you want to add from the select menu and click the add option button.
                This will create a new row in the options list. To edit details of the option Click the blue title of the newly added option. From here you can provide an option name and
                decide whether or not it's a required option by clicking the checkbox beside "Required".
            </p>

            <p>
                A Checklist, Radiolist, and Droplist all support Option Items. Thes are simply the values that are selectable on the front end. Each Option Item supports a Name, Value,
                Weight, and Price. Weight and price will be added to the base weight and price of the Product the option belongs to. 
            </p>

            <p>
                Text fields and Text Areas can be provided default values as well as additional weight and pricing, but do not support multiple option values.
            </p>

            <p>
                Options are drag and drop sortable by grabbing the blue button to the left of the option name and Option Items are sortable within the option they belong to
                by the same means.
            </p>
            <p>
                <a name="ug_products_related_products_tab"></a>
                <h5>Related Products Tab</h5>
                To add related items to a product, search for the name of the related item you want to add in the text field on the left.
                Items that have similar names will show up in multi-select box below. Simply click the product you want to add and then click the "Add Related Product" button.
                The product will then move from the multi-select box to a table on the right. To remove a related product all you need to do is click the red X button beside the
                product name on the table.
            </p>

            <p>
                <a name="ug_products_images_tab"></a>
                <h5>Images Tab</h5>
                To add an image or images to the product click the "Chose File" input under the Images tab. Once you have your image selected, click the upload button on the right.
                GoCart will then upload the image and add a new row to the images table. Images are drag and drop sortable by grabbing the image thumbnail
                and dragging it up or down. Images also support alt attributes and a caption though not every theme will make use of these fields. To choose a particular
                image as the main product image, click in the radio button beside Main Image.
            </p>

            <p>
                <a name="ug_products_gift_card"></a>
                <h5>Gift Card Products</h5>
                To add a gift card product, click the "New Gift Card" button. Adding or editinga  giftcard product is very similar to adding and editing a regular product.
                The gift card form however is much simpler. The one addition they have is the Predefined Values tab. Predefined Values are simply the suggested giftcard values
                provided to a shopper. To add a new Predefined Value click the "add" button on the tab and fill in the value. These Predefined values will be sorted numerically
                once the product is saved.
            </p>
        </section>

        <section>
            <a name="ug_digital_products"></a>
            
            <h3 class="title">Digital Products</h3>
            
            <p>
                Digital Products are files that can be attached to one or more products. When one of those products is purchased the Digital Product is made available as a download to the
                shopper. Digital Products can be added on the Digital Products page found in the Catalog submenu. To add a new digital product, click the "Add File" button in the top right.
                Once on the digital products form, select the file you want to upload using the file input. Give your digital download a title and set the maximum number of times a customer can
                download the file once purchased. Setting Max Downloads to 0 will result in no limit set to the number of times a customer can download the file.
            </p>

            <p>
                To attach a digital product to an item follow the instructions found under the <a class="tag" href="#ug_products_digital_products_tab">Digital Products tab</a> in the
                Product Form section of the User Guide.
            </p>
        </section>

        <section>
            <a name="ug_orders"></a>
            
            <h3 class="title">Orders</h3>
            <p>
                The most recent orders are always visible on the dashboard of the GoCart admin panel but for a more detailed view you can access the Orders via the Sales submenu.
                Orders are sorted by the order number by default with the most recent orders displayed first.
            </p>
            <p>
                Orders can be sorted by Order Number, Status, and Total. Orders can also be searched and limited by date. Orders can be downloaded in JSON format by clicking the download button
                to the right of the search form. Downloading orders will only export those orders displayed on the page.
            </p>
            <p>
                An order's status can be edited from the order list page by either typing in a custom status and clicking the green check button, or by clicking the attached down arrow button
                and selecting a predefined status from the list and then clicking the green check button.
            </p>
            <p>
                To get the full details of an order, click the order number of the order you're interested in looking at. This will being up the order detail page.
                The Order Detail page will allow you to change the status of an order or add additional notes. You can also click the packing slip button in the top left
                to get a printer friendly representation of the order with a focus on items and quantities.
            </p>
            <p>
                You can delete an order from the order detail page by clicking the red delete button in the top right of the page. It's not generally recommended to delete an order since there
                is no way to recover it once it's deleted.
            </p>
        </section>

        <section>
            <a name="ug_reports"></a>
            
            <h3 class="title">Reports</h3>
            <p>
                Sales Reports are accessible via the Sales submenu. Best Sellers can be displayed based on From and to Dates. Monthly Sales
                figures are available based on year.
            </p>
        </section>

        <section>
            <a name="ug_pages"></a>
            
            <h3 class="title">Pages &amp; Links</h3>
            <p>
                Pages and links are accessible in the Content submenu. To create a new page, click the "Add New Page" button in the top right corner.
                Hierarchically pages and links can be hidden from navigation, top level or under a different page or link. Also by manipulating the sequence
                field we can change the order in which a link or a page is displayed.
            </p>

            <p>
                The <strong>Title</strong> is displayed at the top of a Page and is used for the Menu Title, SEO Title and Slug if they are not provided.
            </p>

            <p>
                The <strong>Menu Title</strong> is an alternate title that is used in navigation.
            </p>

            <p>
                The <strong>SEO Title</strong> is used in the title tag for the page.
            </p>

            <p>
                The <strong>Slug</strong> is used to represent the page in the URL <small><em>http://yourdomain.com/page/page-slug-here</em></small>.
            </p>

            <p>
                Some themes will allow you to use shortcodes in your content. The default theme has this ability and ties into the <a class="tag" href="#ug_banners">Banner</a> tool.
                A short code will generally be encased in curly brackets and contain information pertinent to whatever content you're referencing. Check out the Banner section to see
                how to utilize the Banner shortcode on your pages.
            </p>
        </section>

        <section>
            <a name="ug_banners"></a>
            
            <h3 class="title">Banners</h3>
            <p>
                Banners are groups of images organized into collections that can be displayed on pages using shortcodes. To access the banner system click banners in the content submenu.
                Before adding banners to GoCart you'll need to create a banner collection. You can add a banner collection by clicking the "Add New Banner Collection" button in the top right.
                The only field for a banner collection is the name. Enter the name of the collection and click save. Now, you can click the image button beside the collection you want to add banners to.
                New banners can be added by clicking the Add new Banner button.
            </p>

            <p>
                <a name="ug_banners_form"></a>
               <h5>The Banner Form</h5>
               The <strong>Name</strong> field is for organizational purposes. This field allows you to provide a description for the image associated with the banner.
            </p>
            
            <p>
               The <strong>Enable</strong> and <strong>Disable</strong> dates allow you to set an active range for the banner to be displayed. The dates can be used together or individually.
            </p>

            <p>
               The <strong>Link</strong> field will provide a location to send the user if they click the banner. If you want the link to open in a new window, simply check in the new window checkbox.
            </p>

            <p>
                <a name="ug_banners_shortcode"></a>
                <h5>Using the Banner Short Code</h5>
                The Banner shortcode looks something like this <strong>{banners|collection_id|quantity|template}</strong>. In this case you would replace collection_id with the numerical ID of the banner collection you are
                wanting to reference. Quantity should be replaced with the number of banners you want to display and template should be replaced with the name of the view file used to render the banners.
            </p>
        </section>

        <section>
            <a name="ug_coupons"></a>
            
            <h3 class="title">Coupons</h3>
            <p>
                Coupon management is accessible in the Sales submenu. To create a new coupon, click the "Add New Coupon" button in the top right. Coupons can be for all products or just select products.
                If you want only select products, search for the products you want using the search field on the right. when the product shows up in the select box below click it
                and then click the "Add Product" button.
            </p>
            <p>
                Coupons use can be limited by several factors.
                <ul>
                    <li><strong>Max Uses</strong> refers to the number of times the coupon can be used all together. This includes times used on a particular order.</li>
                    <li><strong>Limit Per Order</strong> will restrict a coupons use in a single order.</li>
                    <li><strong>Enable on</strong> and <strong>Disable on</strong> dates will restrict the time frame in which a coupon is valid.</li>
                </ul>

                None of the restrictions are required for having a functional coupon.
            </p>
            <p>
                <strong>Reduction amount</strong> can be either a whole dollar amount or a percentage amount. First select the type of discount you want to offer and then set the
                value in the text field to the right. For dollar amounts do not include dollar signs or commas <small><em>ex. $1,000.00 would be 1000.00</em></small>. For percentage
                rates use whole numbers to represent the percentage. <small><em>ex. %10 would be 10.</em></small>
            </p>
        </section>

        <section>
            <a name="ug_gift_cards"></a>
            
            <h3 class="title">Gift Cards</h3>
            <p>
                Gift Cards are accessible in the Sales submenu. When someone orders a gift card through the shop and GoCart generates it, it will end up in this list.
                Gift cards can be deleted by clicking the red X button to the right of the gift card. If you want to add a new gift card, simply click the "Add Gift Card" button
                in the top right corner of the page.
            </p>
        </section>

        <section>
            <a name="ug_canned_messages"></a>
            
            <h3 class="title">Canned Messages</h3>
            <p>
                Canned Messages are used by GoCart for various purposes when corresponding with customers. By default the canned messages each use the variables that are available to them.
                Canned Messages utilize the Twig Templating language and can be edited but not deleted. You can visit the <a class="tag" href="http://twig.sensiolabs.org/doc/templates.html" target="_blank">Twig website</a> for more information about twig.
            </p>
            <p>
                The variables available to each stock Canned Message are as follows:
                <ul>
                    <li> Gift Card Email Notification
                        <ul>
                            <li>{{from}} represends the name of the sender.</li>
                            <li>{{site_name}} uses the name of the site as dictated by the <a class="tag" href="#ug_configuration_shop_details">GoCart Configuration</a> page.</li>
                            <li>{{code}} is the unique gift card code that is generated by GoCart.</li>
                            <li>{{amount}} is the value of the gift card.</li>
                            <li>{{url}} is the URL to your website.</li>
                            <li>{{personal_message}} is the message submitted by the purchaser of the gift card.</li>
                        </ul>
                    </li>
                    
                    <li> Reset Customer Password
                        <ul>
                            <li>{{site_name}} uses the name of the site as dictated by the <a class="tag" href="#ug_configuration_shop_details">GoCart Configuration</a> page.</li>
                            <li>{{password}} is the new password randomly generated by GoCart</li>
                        </ul>
                    </li>
                    
                    <li> Order Shipped Notification
                        <ul>
                            <li>{{customer_name}} is the name of the customer on the order.</li>
                            <li>{{site_name}} uses the name of the site as dictated by the <a class="tag" href="#ug_configuration_shop_details">GoCart Configuration</a> page.</li>
                            <li>{{order_number}} doesn't really need an explanation.</li>
                        </ul>
                    </li>
                    
                    <li> Registration Confirmation
                        <ul>
                            <li>{{customer_name}} is the full name of the customer on the account.</li>
                            <li>{{site_name}} uses the name of the site as dictated by the <a class="tag" href="#ug_configuration_shop_details">GoCart Configuration</a> page.</li>
                        </ul>
                    </li>

                    <li> Order Submitted Confirmation
                        <ul>
                            <li>{{customer_name}} is the name of the customer on the order.</li>
                            <li>{{site_name}} uses the name of the site as dictated by the <a class="tag" href="#ug_configuration_shop_details">GoCart Configuration</a> page.</li>
                            <li>{{order_summary | raw}} is a special variable. This one pulls in the view template for the order summary. the "| raw" tells GoCart that we have special data going here that shuold not be filtered.</li>
                        </ul>
                    </li>
                </ul>
            </p>
        </section>
    </div>
</main>

<script>
$('.hand').click(function(){
    $(this).toggleClass('activated');
    $('nav').toggleClass('activated');
});

$(function() {
    $('a[href*=#]:not([href=#])').click(function() {

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 20)
                }, 600);
                window.location.hash = $(this).attr('href');
                return false;
            }
        }
    });

    $("nav > ul > li > a").click(function() {
        $('ul.expand').removeClass('expand');
        $(this).siblings('ul').addClass('expand');
    });
});
</script>
</body>
</html>
