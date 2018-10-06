# project-4-flight-php
Using a GET request to return JSON data object

<p>  <b> You must have Flight PHP framework installed to use this. </b> </p>

<p>  Simply download the index.php file.  </p>

<p>  This is an different version to calculate life cover premiums.  </p>

<p>  Use postman app to send a Get request to the index.php.  </p>
<p>  You will see the JSON response in Postman App  </p>

<p>  Use the following format to send request and get result::  </p>
<p>  <b> http://localhost/project-folder/index.php/1976/03/15/50000 </b> </p>

<p> you should get the following response</p>
<br/>
{<br/>
    "input": {<br/>
        "dob": "1976-03-15",<br/>
        "cover": "50000"<br/>
    },<br/>
    "output": {<br/>
        "premium": 253<br/>
    }<br/>
}<br/>

<p>  Other formats were not tested and may produce unexpected results.  </p>
