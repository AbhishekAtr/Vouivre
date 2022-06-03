<div class="modal fade " id="modals">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1>Let's Discuss about your project</h1>
                <p>We create websites that drive businesses to your organization. Drop your info, we will call you back
                </p>
                <div class="contact_form modal_contact">
                    <form id="enquerynow" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Enter Name <span>*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Enter Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Enter Phone number <span>*</span></label>
                                    <input id="phone" name="phone" type="tel"
                                        oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*)\./g, '$1');"
                                        class="form-control" onkeypress="if ( isNaN(this.value +
                                        String.fromCharCode(event.keyCode) )) return false;" numbers-only
                                        maxlength="10" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Enter Message</label>
                                    <textarea name="message" id="" cols="30" name="message" class="form-control"
                                        rows="5" placeholder="Enter Message" maxlength="1000"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <Button class="btn btn_enquiry" onclick="submitForm('enquerynow')">Send Message</Button>
                            </div>

                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer">
    <div class="container header_desgin">
        <div class="footer-inner row">
            <div class="footer-center footer_desktop_hide col-lg-8 text-center">
                <h2>Let's Work Together</h2>
                <div class="footer-address-center field--name-body block--lets-work-together">
                    <h1  >
                        <a href="#" data-toggle="modal" data-target="#modals">
                            <span class="link-content">Start a project</span>
                        </a>
                    </h1>
                </div>
                <div>
                    <ul class="my-custom-menu">
                        <li class="menu-item"><a href="about" title="ABOUT US">About Us</a></li>
                        <li class="menu-item"><a href="#" title="OUR PORTFOLIO">Our Services</a></li>
                        <li class="menu-item"><a href="contact-us" title="CONTACT US">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-left col-lg-3 col-sm-4 ">
                <div class="widget-item">
                    <h4>Contact Us</h4>
                    <ul class="contact_information">
                        <li><i class="fa fa-map-marker" aria-hidden="true" style="
                        width: 40px;"></i>
                            <a href="#" target="blank">
                                <p>
                                    B-110, abc Avenue, abc Complex, Main market Dwarka, New Delhi-43
                                </p>
                            </a>
                        </li>
                        
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:abc@gmail.com" style="font-weight: 400;">
                                abc@gmail.com</a>
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+91-1234567890">
                                <p> +91-1234567890</p>
                            </a> </li>
                    </ul>

                    <ul class="footer_social">
                        <li><a href="#"
                                title="Facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="twitter" target="blank"><i
                                    class="fa fa-twitter twiiter"></i></a>
                        </li>
                        <li><a href="#" title="Linkedin"
                                target="blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="#" title="Instagram" target="blank"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="footer-center footer_desktop_show col-lg-6 col-sm-7 text-center">
                <h2>Let's Work Together</h2>
                <div class="footer-address-center field--name-body block--lets-work-together">
                    <h1 >
                        <a href="#" data-toggle="modal" data-target="#modals">
                            <span class="link-content">Start a project</span>
                        </a>
                    </h1>
                </div>
                <div>
                    <ul class="my-custom-menu">
                        <li class="menu-item"><a href="about" title="ABOUT US">About Us</a></li>
                        <li class="menu-item"><a href="#" title="OUR PORTFOLIO">Our Services</a></li>
                        <li class="menu-item"><a href="contact-us" title="CONTACT US">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-right col-lg-3 col-sm-6">
                <div class="widget-item ">
                    <h4>Recent Work</h4>
                    <div class="hb-stream columns-3 ">
                        <ul>
                         
                           
                            <li><img src="image/costgard.png" width="250" height="250" />
                               <li><img src="image/airforce.png" width="250" height="250"  />
                            </li>
                                <li><img src="image/yatra-icon.png" width="250" height="250" />

                                    <li><img src="image/noida.png" width="250" height="250" style="
                                        margin-top: 22px;" />

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copy_right text-center" id="copyright-text">
                    <p>© Copyrights "VOUIVRE" 2022. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- Contact Form Snackbar start -->

<div id="snackbar">Form Submitted Successfully</div>

<!-- Contact Form Snackbar end -->

