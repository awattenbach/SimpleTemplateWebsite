SimpleTemplateWebsite (STW)
==============

`stw.class.php` is a simple PHP Class to handle a multilangauge template based Website with speaking URLs. 
This class is made for people who are good in html templating and want to make an easy multilanguage website. Basicly this parses a url which is given by modrewrite and includes the requested template. You are completly free with templating every page.
The complete documentation comes later on. For people who want to use this now i commitet a little sample site which shows how to use this.

Function overview
=============

`parseUrl()` parses the url given by modrewrite over GET parameter to an array. This function is part of STW-Class construct. So the parsed array is avaible wihtin each page. Only one GET parameter is loaded. You donnot need more than this.

`createLink()` is used to create a valid url. You can give GET Parameters to this function. createlink() will encrypt these parameters and adds this to the url.

`switchLanguageLink()` is used to create a link to the same page in another language.

`createPrintLink()` creates a link with all GET and POST Variables and adds "printview=1". This functions is used to handle a printview for the actual page. 

`showLayout()` is used to include the layout-file. If the requested file not exists a fallback is loaded.

`rebuildGetVars()` is used to decrypt and register the encryptet GET parameter given bei createLink() function. This function registers all given parameters as global. The function is part of class construct.

`getInputFromUrl()` loads the get parameter "input" given by modrewrite

License
=======

This work is licensed under the [MIT license](http://en.wikipedia.org/wiki/MIT_License).