Normal Install:
git clone https://github.com/KariTrace/EGTGC.git
composer selfupdate
composer install
composer update

Nerd Install:
composer selfupdate
composer install --verbose --profile
composer update --verbose --profile


*****
Install Issues:
If composer fails tried these steps:
(Source: http://getcomposer.org/doc/03-cli.md#http-proxy-or-http-proxy)

http_proxy or HTTP_PROXY#

If you are using composer from behind an HTTP proxy, you can use the standard http_proxy or HTTP_PROXY env vars. Simply set it to the URL of your proxy. Many operating systems already set this variable for you.

Using http_proxy (lowercased) or even defining both might be preferable since some tools like git or curl will only use the lower-cased http_proxy version. Alternatively you can also define the git proxy using git config --global http.proxy <proxy url>.

HTTP_PROXY_REQUEST_FULLURI#

If you use a proxy but it does not support the request_fulluri flag, then you should set this env var to false or 0 to prevent composer from setting the request_fulluri option.

HTTPS_PROXY_REQUEST_FULLURI#

If you use a proxy but it does not support the request_fulluri flag for HTTPS requests, then you should set this env var to false or 0 to prevent composer from setting the request_fulluri option.