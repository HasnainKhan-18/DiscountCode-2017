    <!-- Footer -->
    <div class="ftr-tp">
      <div class="cntnr">
        <p><b>Disclosure: </b>If you click a merchant link and buy a product or service on their website, we may be paid a fee by the merchant.</p>
      </div>
    </div>

    <div class="footer">
      <div class="cntnr">
        <div class="ftr-wrp">
          <div class="text">
            <h2>What We're About</h2>
            <p>Discount Code 2017 is a frugal online platform that was established to provide all the online savvy shoppers with the latest coupons, voucher codes and discounted offers from thousands of different top brands from all product categories. We provide online shoppers in making</p>
          </div>
          <div class="ftr">
            <h2>Browse Sites</h2>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/sitemap.php">All Brands</a><br>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/contact-us.php">Contact Us</a><br>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/sitemap.php">Sitemap</a><br>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/events.php">Events</a>
          </div>
          <div class="ftr">
            <h2>Information</h2>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/about-us.php">About Us</a><br>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/about-us.php">Privacy Policy</a><br>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/about-us.php">Terms and Conditions</a>
          </div>
          <div class="ftr">
            <h2>Special Events</h2>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/events.php">Click Frenzy</a><br>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/events.php">Easter Deals</a><br>
            <a href="http://192.168.168.110/bitbucket/front-end/newcopons/RevampWeb/events.php">Valentine's Day</a><br>
          </div>
          <div class="ftr">
            <h2>Connect With Us</h2>
            <a href="">Twitter</a><br>
            <a href="">Facebook</a><br>
            <a href="">Instagram</a>
          </div>
        </div>
        <div class="clsng-ftr">
          <p>© Copyright 2021 Discount Code 2017 all right reserved</p>
        </div>
      </div>
    </div>
    <!-- Footer -->

    <?php if (in_array("terms" || "deal" || "code", $_GET)) :
      require_once("./couponPopup.php");
    endif; ?>