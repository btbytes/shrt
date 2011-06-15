# shrt

Stupid Simple URL Redirection 

### Why? 

 * You want a URL shortner and redirector. That is http://go.mydomain.com/magic should go http://www.myreallylongcomapnyname/geography/language/product/campaigncode/blah
 * You are not looking to build a SEO business based on URL shortening services.
 * You don't want to use all the multi-million dollar URL shortners.
 * You don't want to contribute to link rot by using someone else's short lived "SEO startup"
 * You are comfortable using a text editor. 
 * You understand that a URL shortening "service" is not.
 * You know how to edit a file, configure a web server.
 * You don't want to "maintain" this service anymore than getting a root canal.
 * Less is more.

### How

 * put `index.php` and `links.txt` in the docroot of the domain.
 * add rewrite rule (see nginx.conf for nginx example) to handle requests
 * add new shortcuts to `links.txt` in `shortcut[TAB]url` format.

### Who 

[Pradeep Gowda](http://twitter.com/btbytes)

### Source

 * [github/btbytes/shrt](http://github.com/btbytes/shrt)

