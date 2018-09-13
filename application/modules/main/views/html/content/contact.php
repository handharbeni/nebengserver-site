    <!-- Contact -->
    <div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
    </div>
    <section class="contact">
        <div class="row">
            <div class="col-sm-8">
                <h3>Contact us</h3>
                <div id="sendstatus"></div>
                <div id="contactform">
                    <form method="post" action="sendmail.php">
                        <p>
                            <label for="name">Name:*</label>
                            <input type="text" class="form-control" name="name" id="name" tabindex="1" />
                        </p>
                        <p>
                            <label for="email">Email:*</label>
                            <input type="text" class="form-control" name="email" id="email" tabindex="2" />
                        </p>
                        <p>
                            <label for="comments">Message:*</label>
                            <textarea  class="form-control" name="comments" id="comments" cols="12" rows="6" tabindex="3"></textarea>
                        </p>
                        <p>
                            <input name="submit" type="submit" id="submit" class="submit" value="Send" tabindex="4" />
                        </p>
                    </form>
                </div>
            </div>

            <div class="col-sm-3 col-sm-offset-1">
                <h4 class="badge">E-mail</h4>
                <p><a href="">info@servereast.com</a></p>
                <h4 class="badge">Phone</h4>
                <p>373.040.1847</p>
                <h4 class="badge">On the Web</h4>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Linked In</a></li>
                    <li><a href="">Github</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of Contact  -->
