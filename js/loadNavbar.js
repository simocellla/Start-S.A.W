
$(document).ready(
    function() {
       
        var filePath = window.location.pathname;
        
        if (filePath == "/~S4334970/SauceForYou/index.php" || filePath == "/~S4334970/SauceForYou/")
            $('#includedContent2').load('/~S4334970/SauceForYou/commonParts/navbars/navbarHome.php');
        else if (filePath == "/~S4334970/SauceForYou/nav/about.php")
            $('#includedContent2').load('/~S4334970/SauceForYou/commonParts/navbars/navbarAbout.php');
        else if (filePath == "/~S4334970/SauceForYou/shop-home/index.php")
            $('#includedContent2').load('/~S4334970/SauceForYou/commonParts/navbars/navbarShop.php');
        else if (filePath == "/~S4334970/SauceForYou/nav/contatti.php")
            $('#includedContent2').load('/~S4334970/SauceForYou/commonParts/navbars/navbarContatti.php');
        else
            $('#includedContent2').load('/~S4334970/SauceForYou/commonParts/navbars/navbarUser.php');

    }
);