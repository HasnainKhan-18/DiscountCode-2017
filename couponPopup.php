<style>
    <?php echo readfile("./assets/css/popup.css") ?>
</style>

<div class="cpopup">
    <div class="cpopov"></div>
    <div class="hddn"></div>
    <!-- Deal / Code Popup <start> -->
    <?php if (isset($_GET['deal']) || isset($_GET['code'])) : ?>
        <div class="cntnr">
            <div class="popup">
                <div class="sd-wrp">
                    <div class="side1">
                        <button role="button" class="closes ">&times;</button>
                        <div class="pop-img flex">
                            <img src="./assets/images/logo.png" alt="">
                        </div>
                    </div>
                    <div class="side2">
                        <button role="button" class="closed">&times;</button>
                        <div class="pop-up">
                            <h1>10% Off First Order With Newsletter Sign-ups</h1>
                            <hr>

                            <!-- Deal content <start> -->
                            <?php if (isset($_GET['deal'])) : ?>

                                <p>No Code Required</p>
                                <button role="button" class="btn">Go To Deal</button>

                            <?php endif; ?>
                            <!-- Deal content <end> -->

                            <!-- Code content <start> -->
                            <?php if (isset($_GET['code'])) : ?>

                                <p>The Trip website has been opened in a new tab. Simply copy and paste the code and enter it at the checkout.</p>
                                <div class="input">
                                    <input id="input_output" value="MODIBODI5" readonly="readonly" type="text" class="code"></input>
                                    <button class="cpy-btn" role="button">Copy</button>
                                </div>
                            <?php endif; ?>
                            <!-- Code content <end> -->

                            <h4>Terms & Conditions</h4>
                            <ol class="list">
                                <li>Some exclusions apply.</li>
                                <li>Cannot be used in conjunction with any other offer.</li>
                                <li>For full Terms & Conditions kindly visit brand’s website.</li>
                                <li>All brands reserve the right to remove any offer without giving prior notice.</li>
                            </ol>
                            <h3>Expires: Jan-03-2021</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <script src="./src/js/modal.js"></script>
    <!-- Deal / Code Popup <end> -->

    <!-- Terms <start> -->
    <?php if (isset($_GET['terms'])) : ?>
        <div class="tpopup">
            <div class="tpopov"></div>
            <div class="hddn"></div>
            <div class="Wrp">
                <div class="m-top">
                    <h2>Terms & Conditions</h2>
                    <span role="button" class="closed">&times;</span>
                </div>
                <ol class="list">
                    <li>For full Terms & Conditions please see website.</li>
                    <li>Available whilst stocks last.</li>
                    <li>One per person.</li>
                </ol>
            </div>
        </div>
    <?php endif ?>
    <script src="./src/js/terms.js"></script>
    <!-- Terms <end> -->
</div>