<?php
// Footer include file for CPCS403 Final Project
?>
    </main>
    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date('Y'); ?> CPCS403 Final Project</p>
        </div>
        <div class="footer-validation">
            <a href="https://validator.w3.org/check?uri=referer" target="_blank">
                <img src="/images/valid-xhtml10.png" alt="Valid XHTML 1.0" />
            </a>
            <a href="https://jigsaw.w3.org/css-validator/check/referer" target="_blank">
                <img src="/images/valid-css-blue.png" alt="Valid CSS" />
            </a>
        </div>
    </footer>
    <?php if(isset($additionalScripts)) { echo $additionalScripts; } ?>
</body>
</html>
