<?php

   //encodes the xml, replaces all invalid characters with their hex value, decodes the xml, then parses it.
   var encoded = encodeURIComponent(xmlhttp.responseText);
   var replaced = encoded.replace(/%26/g,"&amp;");  // &
   var decoded = decodeURIComponent(replaced);
