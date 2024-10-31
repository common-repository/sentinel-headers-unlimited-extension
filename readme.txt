=== Plugin Name ===
Contributors: unicorn03
Donate link: https://tentacleplugins.com/
Tags: csp, headers security, hsts, http headers, insecure content, force ssl, headers, login security, xss, clickjacking, mitm, cross origin, cross site, privacy
Requires at least: 4.7
Tested up to: 6.0 
Stable tag: 0.0.03
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Best all-in-one WordPress security plugin, uses HTTP & HSTS response headers to avoid vulnerabilities: XSS, injection, clickjacking. Force HTTP/HTTPS.

== Description ==

= ENGLISH =

**Sentinel Headers Unlimited Extension** is Best all-in-one a free plug-in for all WordPress users. Deactivating this plugin will return your site configuration exactly to the state it was in before.

The **Sentinel Headers Unlimited Extension** project implements HTTP response headers that your site can use to increase the security of your website. The plug-in will automatically set up all Best Practices (you don't have to think about anything), these HTTP response headers can prevent modern browsers from running into easily predictable vulnerabilities. The Sentinel Headers Unlimited Extension  project wants to popularize and increase awareness and usage of these headers for all wordpress users.

This plugin is developed by TentaclePlugins, we care about WordPress security and best practices.

Check out the best features of **Sentinel Headers Unlimited Extension :**

  * HSA Limit Login to block brute force attacks.
  * X-XSS-Protection
  * Expect-CT
  * Access-Control-Allow-Origin
  * Access-Control-Allow-Methods
  * Access-Control-Allow-Headers
  * X-Content-Security-Policy
  * X-Content-Type-Options
  * X-Frame-Options
  * X-Permitted-Cross-Domain-Policies
  * X-Powered-By
  * Content-Security-Policy
  * Referrer-Policy
  * HTTP Strict Transport Security / HSTS
  * Content-Security-Policy
  * Clear-Site-Data
  * Cross-Origin-Embedder-Policy-Report-Only
  * Cross-Origin-Opener-Policy-Report-Only
  * Cross-Origin-Embedder-Policy
  * Cross-Origin-Opener-Policy
  * Cross-Origin-Resource-Policy
  * Permissions-Policy
  * Strict-dynamic
  * Strict-Transport-Security
  * FLoC (Federated Learning of Cohorts)

We've put a lot of effort into using the most important services with **content security standards** (CSP), below are some examples we've tested and used:

  * CSP usage for **Google Tag Manager**
    world's most popular tag manager
  * Using CSP for **Gravatar**
    Avatar service for WordPress and Social sites
  * Using CSP for **Wordpress Internal Media**
    support Wordpress media
  * Using CSP for **Youtube Embedded Video SDK**
    support Youtube embedded frames and JS SDK
  * CSP usage for **CookieLaw**
    privacy technology to meet regulatory requirements
  * CSP usage for **Mailchimp**
    support for Mailchimp automation, SDK and modules
  * CSP usage for **Google Analytics**
    support for basic conversion domains such as: stats.g.doubleclick.net and www.google.com
  * CSP usage for **Google Fonts**
    you're not loading it on the page, chances are one of your SDKs is using it
  * Using CSP for **Facebook
    support Facebook SDK functionality
  * Using CSP for **Stripe**
    highly secure online payment system
  * Using CSP for **New Relic**
    it's a registration and monitoring utility
  * Using CSP for **Linkedin Tags + SDKs**
    support Linkedin Insight, Linkedin Ads and SDK
  * Using CSP for **OneTrust**
    OneTrust support helps companies manage privacy requirements
  * CSP usage for **Moat**
    Moat support to measurement suite such as: ad verification, brand safety, advertising and coverage
  * CSP usage for **jQuery**
    support of jQuery - JS library
  * CSP usage for **Twitter Widgets & SDKs**
    support Connect, Widgets and the Twitter client-side SDK
  * Using CSP for **Google Maps**
    support Google Maps as The ggpht used by streetview
  * Using CSP for **Quantcast Choice**
    Quantcast support for privacy such as GDPR and CCPA
  * CSP usage for **Twitter Ads & Analytics**
    Twitter support for advertising and Analytics
  * Using CSP for **Paypal**
    PayPal support for online payment system
  * Using CSP for **Drift**
    Drift and Driftt support
  * CSP usage for **Cookiebot**
    cookie and tracker support, GDPR/ePrivacy and CCPA compliance
  * CSP usage for **Vimeo Embedded Videos SDK**
    support frames, JS SDK, Froogaloop integration
  * Using CSP for **AppNexus (now Xandr)**
    AppNexus support for custom retargeting
  * Using CSP for **Mixpanel**
    support analytics tool with SDK/JS to collect client-side data
  * Using CSP for **Font Awesome**
    toolkit support for fonts and icons over CSS and Less
  * Using CSP for **Google reCAPTCHA**
    reCAPTCHA support for fraud and bot protection
  * CSP usage for **Bootstrap** CDN
    Bootstrap support for CSS frameworks
  * Using CSP for **HubSpot**
    Hubspot support with many features, used for monitoring and mkt functionality
  * Using CSP for **Hotjar**
    Hotjar tracker support for analytics and metrics
  * Using CSP for **WP.com**
    support for wp.com hosting
  * Using CSP for **Akamai mPulse**
    support for Akamai mPulse, for origin and perimeter integrations
  * CSP usage for **Cloudflare - Rocket-Loader & Mirage**
    support for Mirage libraries for performance acceleration
  * Using CSP for **Cloudflare - CDN.js**
    Cloudflare's open CDN support with multiple libraries
  * Using CSP for **jsDelivr**
    support jsDelivr free CDN for Open Source

  * We have added the **ReportUri** report service.

**All Free Features**
The Sentinel Headers Unlimited version includes all the free features.

**Sentinel Headers Unlimited Extension** is based on **OWASP CSRF** to protect your wordpress site. Using OWASP CSRF, once the plugin is installed, it will provide full CSRF mitigation without having to call a method to use nonce on the output. The site will be secure despite having other vulnerable plugins (CSRF).

HTTP security headers are a critical part of your website's security. After automatic implementation with Sentinel Headers Unlimited Extension , they protect you from the most notorious types of attacks your site might encounter. These headers protect against XSS, code injection, clickjacking, etc.

We have implemented **FLoC (Federated Learning of Cohorts)**, using best practices. First, using **Sentinel Headers Unlimited Extension** prevents the browser from including your site in the "cohort calculation" on **FLoC (Federated Learning of Cohorts)**. This means that nothing can call document.interestCohort() to get the FLoC ID of the currently used client. Obviously, this does nothing outside of your currently visited site and does not "disable" FLoC on the client beyond that scope.

Even though **FLoC** is still fairly new and not yet widely supported, as programmers we think that privacy protection elements are important, so we choose to give you the feature of being opt out of FLoC! We’ve created a special **“automatic blocking of FLoC”** feature, trying to always **offer the best tool with privacy protection and cyber security** as main targets and focus.

Analyze your site before and after using *Sentinel Headers Unlimited Extension * security headers are self-configured according to HTTP Security Headers and HTTP Strict Transport Security / HSTS best practices.

* Check HTTP Security Headers on <a href="https://securityheaders.com/" target="_blank">securityheaders.com</a> 
* Check HTTP Strict Transport Security / HSTS at <a href="https://hstspreload.org/" target="_blank">hstspreload.org</a>
* Check WebPageTest at <a href="https://www.webpagetest.org/" target="_blank">webpagetest.org</a>
* Check HSTS test website <a href="https://gf.dev/hsts-test/" target="_blank">gf.dev/hsts-test</a>
* Check Content Security Policy (CSP) <a href="https://cspscanner.com/" target="_blank">cspscanner.com</a>


This plugin is updated periodically, our limited support is free, we are available for your feedback (bugs, compatibility issues or recommendations for next updates). We are usually fast :-D.

== Frequently Asked Questions ==

= How do I get an A+ / A grade for security headers with the plugin? =

To earn an A+ / A grade, your site must issue all HTTP response headers that we check. This indicates a high level of commitment to improving the security of your visitors. Your site must also support HTTPS with a valid SSL certificate. This ensures that your visitors' data is protected from attackers.

= What are the recommended headers? =

Web security headers are important for protecting sensitive data and user privacy. Setting security headers correctly can help prevent man-in-the-middle attacks and ensure data privacy.

Recommended security headers include:
* Strict-Transport-Security
* Content-Security-Policy
* X-Content-Type-Options
* X-Frame-Options
* X-XSS-Protection

Make sure to check your headers before and after plugin installation. <a href="https://securityheaders.com/" target="_blank">https://securityheaders.com/</a>

= Can the Sentinel Headers Unlimited Extension create slowdowns? =

The Sentinel Headers Unlimited Extension is designed to be fast, secure, and not affect the SEO or speed of your website.

= What is HSTS (Strict Transport Security)? =

HSTS is a security measure that tells web browsers to only connect to websites using HTTPS, instead of HTTP. This ensures that all communication between the browser and the website is encrypted and secure. HSTS is important because it helps protect against man-in-the-middle attacks and other types of attacks that could compromise user data.

= Check before and after using Preload HSTS =

Preload HSTS is a great tool that can help improve your website's security. However, it is important to check your website before and after using Preload HSTS to make sure that everything is working as expected. If you're not familiar with Preload HSTS, it's a tool that allows you to tell browsers to only connect to your site using HTTPS. This means that if someone tries to access your site using HTTP, they'll be automatically redirected to the HTTPS version. Google officially compiles this list and it is used by Chrome, Firefox, Opera, Safari, IE11 and Edge. You can forward your site to the official HSTS preload directory. ('https://hstspreload.org/')

= how to use HTTP Strict Transport Security (HSTS) =

If you want to use Preload HSTS for your site, there are a few requirements before you can activate it.

* Have a valid SSL certificate. You can't do any of this anyway without it.
* You must redirect all HTTP traffic to HTTPS (recommended via permanent 301 redirects). This means that your site should be HTTPS only.
* You need to serve all subdomains in HTTPS as well. If you have subdomains, you will need an SSL certificate.

The HSTS header on your base domain (for example: example.com) is already configured you just need to activate the plug-in.

If you want to check the HSTS status of your site, you can do so here: <a href="https://hstspreload.org/" target="_blank">https://hstspreload.org/</a>

= Can I report a bug or request a feature? =

You can report bugs or request new features right <a href="mailto:support@tentacleplugins.com">click here!</a>

= Disable FLoC, Google's advertising technology =

FLoC is a mega tracker that monitors user activity on all sites, stores the information in the browser, and then uses machine learning to place users into cohorts with similar interests. This way, advertisers can target groups of people with similar interests. Plus, according to Google's own testing, FLoC achieves at least 95% more conversions than cookies.

= Who is disabling FLoC by Google? =

Scott Helme reported that as of May 3, already 967 of the first 1 million domains had disabled FLoC's interest-cohort in their Permissions-Policy header. That list included some big sites like The Guardian and IKEA.

= How to use and configure Report URI service with the plugin? =

Setting up **Report URI**, we have implemented the service to find out what is happening on your site.
To use Report Uri you just need to register on the website: <a href="https://report-uri.com/" target="_blank">report-uri.com</a>, once registered the account (verified the confirmation email and activated the two factors) you can go from the side menu and click the "SETUP", at this point you are the following procedure.

You can customize the custom domain name for Report URI directly in the plugin section "Sentinel".

1. once you enter the "Setup" page, in the custom subdomain box enter the domain name (example: yourdomain.com will be yourdomain.report-uri.com) and save;
2. once inserted the domain name in the box "Your report-uri value" select at the item "Policy Disposition" Report-Only.
3. now from the menu click the item "CSP" and "Reports" here you will see if there are value that are reported on the website.
4. once you enter the "Filters" page, in the Sites for which to collect reports box enter your domain name (example: yourdomain.com) and save;

We have used Uri reports because it allows 10'000 monthly reports and it is a free service but above all it is professional.

<a href="https://report-uri.com/" target="_blank">report-uri.com</a>

**Important:** if you use some external services that are not present on our CSP list please write us an email at support@tentacleplugins[dot]com


== Installation ==

= ITALIAN =

1. Vai in Plugin 'Aggiungi nuovo'.
2. Cerca questo plugin Sentinel Headers Unlimited Extension.
3. Scaricalo e attivalo.
5. Puoi cambiare questa opzione quando vuoi, Sentinel Headers Unlimited Extension viene impostato in automatico.

= ENGLISH =

1. Go to Plugins 'Add New'.
2. Search for this plugin Sentinel Headers Unlimited Extension.
3. Download and activate it.
5. You can change this option whenever you want, Sentinel Headers Unlimited Extension  is set automatically.

= FRANÇAIS =

1. Allez dans Plugins 'Add new'.
2. Recherchez ce plugin Sentinel Headers Unlimited Extension .
3. Téléchargez-le et activez-le.
5. Vous pouvez modifier cette option quand vous le souhaitez, Sentinel Headers Unlimited Extension  est réglé automatiquement.

= DEUTSCH =

1. Gehen Sie zu Plugins 'Neu hinzufügen'.
2. Suchen Sie nach diesem Plugin Sentinel Headers Unlimited Extension .
3. Laden Sie es herunter und aktivieren Sie es.
5. Sie können diese Option jederzeit ändern, Sentinel Headers Unlimited Extension  wird automatisch eingestellt.

== Screenshots ==

1. Sentinel Headers Unlimited Extension
2. Check HTTP Security Headers (AFTER)
3. Check HTTP Security Headers (BEFORE)
4. Check HTTP Strict Transport Security / HSTS (list)
5. Check WebPageTest (AFTER)
6. Check WebPageTest (BEFORE)
7. Check HTTP Security Headers - Serpworx (AFTER)
8. Check HTTP Security Headers - Serpworx (BEFORE)
9. Content Security Policy (CSP) (AFTER)
10. Content Security Policy (CSP) (BEFORE)
11. Site-wide security setting

== Changelog ==

== 0.0.03 ==
We don't want to tell you what to do, but here's the thing: I went over the version of the Sentinel Headers Unlimited Extension 2022 plugin and started with a really crazy, spacey update; if you updated the plugin last time, you saw that when I propose to do it, I don't just say it. Well, with this version 1.0.03 I have added, corrected, rewritten and tested a lot of code (improving and implementing some really crazy programmer stuff) and everything works like a charm. Do we agree? Tap "update" and I'll give you the best, fastest, most awesome plugin around with the best updates in the world. Now I am already planning the next updates 😀 I hope you pigeonhole the new features and have fun.
We've put a lot of effort into using the most important services with content security standards (CSP), below are some examples we've tested and used:
* CSP usage for **Google Tag Manager** > (world's most popular tag manager);
* Using CSP for **Gravatar** > (Avatar service for WordPress and Social sites);
* Using CSP for **Wordpress Internal Media** > (support Wordpress media);
* Using CSP for **Youtube Embedded Video SDK** > (support Youtube embedded frames and JS SDK);
* CSP usage for **CookieLaw** > (privacy technology to meet regulatory requirements);
* CSP usage for **Mailchimp** > (support for Mailchimp automation, SDK and modules);
* CSP usage for **Google Analytics** > (support for basic conversion domains such as: stats.g.doubleclick.net and www.google.com);
* CSP usage for **Google Fonts** > (you're not loading it on the page, chances are one of your SDKs is using it);
* Using CSP for **Facebook** (support Facebook SDK functionality);
* Using CSP for **Stripe** > (highly secure online payment system);
* Using CSP for **New Relic** > (it's a registration and monitoring utility);
* Using CSP for **Linkedin Tags + SDKs** > (support Linkedin Insight, Linkedin Ads and SDK);
* Using CSP for **OneTrust** > (OneTrust support helps companies manage privacy requirements);
* CSP usage for **Moat** > (Moat support to measurement suite such as: ad verification, brand safety, advertising and coverage);
* CSP usage for **jQuery** > (support of jQuery - JS library);
* CSP usage for **Twitter Widgets & SDKs** > (support Connect, Widgets and the Twitter client-side SDK);
* Using CSP for **Google Maps** > (support Google Maps as The ggpht used by streetview);
* Using CSP for **Quantcast Choice** > (Quantcast support for privacy such as GDPR and CCPA);
* CSP usage for **Twitter Ads & Analytics** > (Twitter support for advertising and Analytics);
* Using CSP for **Paypal** > (PayPal support for online payment system);
* Using CSP for **Drift** > (Drift and Driftt support);
* CSP usage for **Cookiebot** > (cookie and tracker support, GDPR/ePrivacy and CCPA compliance);
* CSP usage for **Vimeo Embedded Videos SDK** > (support frames, JS SDK, Froogaloop integration);
* Using CSP for **AppNexus (now Xandr)** > (AppNexus support for custom retargeting);
* Using CSP for **Mixpanel** > (support analytics tool with SDK/JS to collect client-side data);
* Using CSP for **Font Awesome** > (toolkit support for fonts and icons over CSS and Less);
* Using CSP for **Google reCAPTCHA** > (reCAPTCHA support for fraud and bot protection);
* CSP usage for **Bootstrap** CDN > (Bootstrap support for CSS frameworks);
* Using CSP for **HubSpot** > (Hubspot support with many features, used for monitoring and mkt functionality);
* Using CSP for **Hotjar** > (Hotjar tracker support for analytics and metrics);
* Using CSP for **WP.com** > (support for wp.com hosting);
* Using CSP for **Akamai mPulse** > (support for Akamai mPulse, for origin and perimeter integrations);
* CSP usage for **Cloudflare - Rocket-Loader & Mirage** > (support for Mirage libraries for performance acceleration);
* Using CSP for **Cloudflare - CDN.js** > (Cloudflare's open CDN support with multiple libraries);
* Using CSP for **jsDelivr** > (support jsDelivr free CDN for Open Source);
* We have added the **ReportUri** report service.
I am working hard to implement more services with CSP (Content-Security-Policy) directives, if you encounter any anomaly please feel free to open a ticket, you can inform us at <a href="mailto:support@tentacleplugins.com">support@tentacleplugins[dot]com</a>