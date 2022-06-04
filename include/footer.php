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

<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 links">
                    <h5 class="text-white mb-4">Address</h5>
                    <p class="mb-2"><a href="" class="btn add-text"><i class="fa fa-map-marker mr-2"></i>123 Street, New York, USA</a></p>
                    <p class="mb-2"><a href="" class="btn add-text"><i class="fa fa-phone mr-2"></i>+012 345 67890</a></p>
                    <p class="mb-2"><a href="" class="btn add-text"><i class="fa fa-envelope mr-2"></i>info@example.com</a></p>
                </div>
                <div class="col-lg-4 col-md-6 links">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <p><a class="btn btn-link add-text" href="">About Us</a></p>
                    <p><a class="btn btn-link add-text" href="">Our Services</a></p>
                    <p><a class="btn btn-link add-text" href="">Contact Us</a></p>
                    <p><a class="btn btn-link add-text" href="">Products</a></p> 
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_logo w-50 mb-3">
                        <a href="">
                            <img src="image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fa fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 add-text">
                        © <a href="#" class="text-white">Copyrights "Vouivre" 2022</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end add-text">
                        Designed By <a href="#" class="text-white">UEDeveloper</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Snackbar start -->

<div id="snackbar">Form Submitted Successfully</div>

<!-- Contact Form Snackbar end -->