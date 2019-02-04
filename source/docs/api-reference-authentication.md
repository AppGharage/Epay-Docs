---
extends: _layouts.documentation
section: documentation_content
---
#### [API Overview](/docs/api-reference)

## API Authentication
Once you have created an Epay account, you need to call **/v1/token** to obtain an access token. This access token grants you access to all protected resources / Endpoints. To generate an access token you will first need a **merchant_key, app_id** and **app_secret**.


### Generate API Access Token
You will need to first create an Integration on your dashboard to get your **app_id** and **app_secret**. Your **merchant_key** can be located on your  **dashboard under Settings**.  

> The **access_token** would grant access to the protected resources, each  
> generated access_token **expires in 3600 seconds (1hr)**.

<br>

**Endpoint Details** 
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest bg-grey-lighter whitespace-no-wrap">
                    Endpoint Url
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap"> 
                    https://epaygh.com/api/v1/token
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest bg-grey-lighter whitespace-no-wrap">
                    Method
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                POST
                </td>
            </tr>
        </tbody>
    </table>
</div>

<br>

**Request Headers**
<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                   Content-type
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">        
                    application/json
                </td>
            </tr>
            <tr>
                <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                    Accept
                </td>
                <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                application/json
                </td>
            </tr>
        </tbody>
    </table>
</div>

<br>

**Request Body Parameters**

<div class="overflow-y-auto scrollbar-w-2 scrollbar-track-grey-lighter scrollbar-thumb-rounded scrollbar-thumb-grey scrolling-touch">
    <table class="w-full text-left table-collapse">
    <thead>
        <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Parameter</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Field Type</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Required</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lighter">Description</th>
        </tr>
    </thead>
    <tbody class="align-baseline">
        <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                merchant_key
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is a unique key related to your <br>
                epay account and can be found on your <br>
                dashboard under settings section.<br><br>
                <b>This key carries many privileges, so 
                <br>be sure to keep them secure</b> 
            </td>
        </tr>
         <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                app_id
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is a unique ID related to your <br>
                integration and can also be found on <br>
                your dashboard under integration section.<br><br>
                <b>This key carries many privileges, so 
                <br>be sure to keep them secure</b> 
            </td>
        </tr>
        <tr>
         <tr>
            <td class="p-2 border-t border-grey-light bg-grey-lighter font-mono text-sm text-grey-darkest whitespace-no-wrap">
                app_secret
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-blue-lighter whitespace-no-wrap">
                String
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-purple-dark whitespace-no-wrap">
               Yes
            </td>
            <td class="p-2 border-t border-grey-light font-mono text-sm text-grey-darkest whitespace-no-wrap">
                This is a unique key related to your <br>
                integration and can also be found on <br>
                your dashboard under settings section.<br><br> 
                <b>This key carries many privileges, so 
                <br>be sure to keep them secure</b> 
            </td>
        </tr>
    </tbody>
    </table>
</div>


> Your **API keys carry many privileges**, so be sure to **keep them secure!** **Do not share your API keys** in publicly accessible areas such as GitHub, client-side code, and so forth.

<br>

**Example Json Format**
```

//Example Request Body

{	
	"merchant_key" : "AWDFEv7eTFrzCSIY",
	"app_id" : "5c654089bcd30",
	"app_secret": "ASDSDCGKj9IWtkM2hNIgPDHbvvEPb67X"
}

//Example Success Response

{
    "success": true,
    "message": "Verification Successful",
    "data": {
        "access_token": "eUJGUmR2a0RxQ0hESlhCTVl6VVly
                        YndNWDJhYlZwQDS=5c4af8b9a3681",
        "expires_at": "2019-01-25 12:53:29"
    }
}
```
<br>

-------

**Sample PHP Script**
```php
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://epaygh.com/api/v1/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\t\n\t\"merchant_key\" : \"JHYbJv7eTFrzCSIY\",\n\t\"app_id\" : \"5c980089bcd30\",\n\t\"app_secret\": \"2pFNXCGJUHIWtkM2hNIgPDHbvvEPb67X\"\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
} 
?>
```

<br>

**Sample Ruby Script**
```ruby
require "uri"
require "net/http"

url = URI("https://epaygh.com/api/v1/token")

http = Net::HTTP.new(url.host, url.port)

request = Net::HTTP::Post.new(url)
request["Content-Type"] = "application/json"
request.body = "{\t\n\t\"merchant_key\" : \"JHYbJv7eTFrzCSIY\",\n\t\"app_id\" : \"5c980089bcd30\",\n\t\"app_secret\": \"2pFNXCGJUHIWtkM2hNIgPDHbvvEPb67X\"\n}"

response = http.request(request)
puts response.read_body
```
<br>

**Sample Python Script**
```python
import requests

url = 'https://epaygh.com/api/v1/token'
payload = "{\t\n\t\"merchant_key\" : \"JHYbJv7eTFrzCSIY\",\n\t\"app_id\" : \"5c980089bcd30\",\n\t\"app_secret\": \"2pFNXCGJUHIWtkM2hNIgPDHbvvEPb67X\"\n}"
headers = {
  'Content-Type': 'application/json'
}

response = requests.request('POST', url, headers = headers, data = payload, allow_redirects=False, timeout=undefined, allow_redirects=false)

print(response.text)
```
<br>

**Sample Node.js Script**
```javascript
var http = require('http');

var options = {
  'method': 'POST',
  'hostname': 'https://epaygh.com',
  'path': '/api/v1/token',
  'headers': {
    'Content-Type': 'application/json'
  }
};

var req = http.request(options, function (res) {
  var chunks = [];

  res.on("data", function (chunk) {
    chunks.push(chunk);
  });

  res.on("end", function (chunk) {
    var body = Buffer.concat(chunks);
    console.log(body.toString());
  });

  res.on("error", function (error) {
    console.error(error);
  });
});

var postData =  "{\t\n\t\"merchant_key\" : \"JHYbJv7eTFrzCSIY\",\n\t\"app_id\" : \"5c980089bcd30\",\n\t\"app_secret\": \"2pFNXCGJUHIWtkM2hNIgPDHbvvEPb67X\"\n}";

req.write(postData);

req.end();
```

----------
Next, learn more about how to [Charge a customer](/docs/api-reference-charge).