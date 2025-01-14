<?php

// -----
// Important: read the instructions in README.md or at:
// https://github.com/matomo/matomo/tree/master/misc/proxy-hide-matomo-url#matomo-proxy-hide-url
// -----

// Edit the line below, and replace http://your-matomo-domain.example.org/matomo/
// with your Matomo URL ending with a slash.
// This URL will never be revealed to visitors or search engines.
// $MATOMO_URL = 'http://your-matomo-domain.example.org/matomo/';
$MATOMO_URL = getenv('MATOMO_URL');

// Edit the line below and replace http://your-tracker-proxy.org/ with the URL to your tracker-proxy
// setup. This URL will be used in Matomo output that contains the Matomo URL, so your Matomo is effectively
// hidden.
// $PROXY_URL = 'http://your-tracker-proxy.org/';
$PROXY_URL = getenv('PROXY_URL');

// Edit the line below, and replace xyz by the token_auth for the user "UserTrackingAPI"
// which you created when you followed instructions above.
//$TOKEN_AUTH = 'xyz';
$TOKEN_AUTH = getenv('TOKEN_AUTH');

// Maximum time, in seconds, to wait for the Matomo server to return the 1*1 GIF
$timeout = getenv('PROXY_TIMEOUT') ?: 5;

// By default, the HTTP User Agent will be set to the user agent of the client requesting matomo.php
// Edit the line below to force the proxy to always use a specific user agent string.
$user_agent = getenv('PROXY_USERAGENT') ?: '';

// In some situations the backend takes the sending IP address into account
// which by default is the IP address of the server/service proxy.php is executed from.
// If $http_forward_header is set, the clients IP address is sent over in the
// header field with the given name. An empty string means do not send the header. 
// A common header name is 'X-Forwarded-For'.
//
// In order to work, the http server serving the matomo instance, has to be configured
// to honor the additional header.
//
// For apache http see https://httpd.apache.org/docs/2.4/mod/mod_remoteip.html
// for nginx see https://www.nginx.com/resources/wiki/start/topics/examples/forwarded/
//
$http_ip_forward_header = getenv('PROXY_IP_FORWARD_HEADER') ?: '';
