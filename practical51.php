<!DOCTYPE html>
<html>
<head>
  <title>10% Discount Offer</title>
  <script>
    function checkOffer() {
      if (document.cookie.indexOf("offerShown=true") == -1) {
        document.getElementById("offer").style.display = "block";
        let d = new Date();
        d.setTime(d.getTime() + (10 * 60 * 1000));
        document.cookie = "offerShown=true; expires=" + d.toUTCString();
      } else {
        document.getElementById("offer").style.display = "none";
      }
    }
  </script>
</head>

<body onload="checkOffer()">
  <h3 id="offer" style="display:none; color:green;">
     Welcome! You get 10% off (valid for 10 minutes)!
  </h3>
</body>
</html>