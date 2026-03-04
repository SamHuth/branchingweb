<!DOCTYPE html>
<html lang="en-AU">
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://branchingweb.com.au/contact/">
    <link rel="icon" href="data:,">

    <meta name="description" content="">
    <meta property="og:title" content="Contact Us - Branching Web" />
    <meta property="og:type" content="website" />    
    <meta property="og:url" content="https://branchingweb.com.au/contact/" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="Branching Web" />
    <meta property="og:locale" content="en_au" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://branchingweb.com.au/contact/#site">
    <meta name="twitter:title" content="Contact Us - Branching Web">
    <meta name="twitter:description" content="">

    <meta name="generator" content="Eleventy v3.1.2">

    <link type="text/plain" rel="author" href="https://branchingweb.com.au/humans.txt" />

    <title>Contact Us - Branching Web</title>
    
    <script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Person",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Brisbane",
        "addressCountry": "Australia"
    },
    "email": "mailto:sam@branchingweb.com.au",
    "jobTitle": "Owner",
    "name": "Samuel Huth",
    "url": "branchingweb.com.au"
}
</script>
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body id="site">
    <a href="#content">Skip to content</a>
    <main id="content">
        <h1>Copy the html of this generated page and wrap around the php logic and inputs of the contact.php file</h1>
        <p><a href="/">Home</a></p>
        <form method="post" action="/contact.php">
            <fieldset>
                <legend>Contact Information</legend>
                <label for="name">
                    Full Name
                    <input type="text" name="name" id="input-name" value="" placeholder="John Doe" autocomplete="name" required/>
                </label>
                <label for="company-name">
                    Company Name
                    <input type="text" name="company-name" id="input-company-name" value="" placeholder="Business ltd" autocomplete="organization" required/>
                </label>
                <label for="email">
                    Email Address
                    <input type="email" name="email" id="input-email" value="" placeholder="email@example.com" autocomplete="email" required/>
                </label>
                <label for="phone">
                    Phone Number
                    <input type="tel" name="phone" id="input-phone" value="" placeholder="04 1234 5678" autocomplete="tel" required/>
                </label>
            </fieldset>
            <button type="submit">Submit</button>
        </form>
    </main>
  </body>
</html>

<?php
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
?>
