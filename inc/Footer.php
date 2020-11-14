    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <div>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><?php echo $WebSite->getAddress()->getStreetAddress(); ?> </li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>
    <div style=" background-color: var(--primary-color); padding: 10px 0; color:#fff;">
        <div class="container" style="display: flex; justify-content: space-between;">
            <div>Fish Market @copyright <?php echo $WebSite->getPublished();?></div>
            <div>Developed by <a href="https://shariatpur-lab.herokuapp.com/" target="_blank" style="color: #7ebb6b;">Shariatpur Lab</a></div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    </body>

    </html>