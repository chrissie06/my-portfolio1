<!DOCTYPE html>
<html>

<head>
  <title>Thank You</title>
</head>

<body>
  <h1>Thank You!</h1>
  <p>Your message has been sent successfully. We will get back to you soon.</p>

  <script>
    // Function to display a notification using XMLHttpRequest
    function showNotification(message) {
      var notification = new XMLHttpRequest();
      notification.open("GET", "notify.php?message=" + encodeURIComponent(message), true);
      notification.send();
    }

    // Display the notification on page load
    var thankYouMessage = "Your message has been sent. We will get back to you soon.";
    showNotification(thankYouMessage);
  </script>
</body>

</html>
