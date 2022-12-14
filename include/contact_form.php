<!-- Button trigger modal -->




<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Step 1 - Verify Customer Information
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="include/function.php" method="post" role="form">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                            </div>
                        </div>
                    </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Verify Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->



<!-- contact-form-end -->
<section class="contact-form-area pt-5">
    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                <div class="contact-form-wrap">
                    <div class="section-title mb-50">
                        <!-- <p class="sub-title">.. request make ..</p> -->
                        <h2 class="title">Asked Anything You <br> Want To Know</h2>
                    </div>
                    <form action="include/function.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="full-name">Full Name</label>
                                    <input type="text" name="full-name" placeholder="Enter here" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" placeholder="Enter here" required="required" data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <select class="form-select" aria-label="Default select example" name="subject">
                            <option selected disabled>Select Subject **</option>
                            <option value="Delivery & Orders">Delivery & Orders</option>
                            <option value="Diet & Exercise">Diet & Exercise</option>
                            <option value="Marketing & Press">Marketing & Press</option>
                            <option value="Share Your Success">Share Your Success</option>
                            <option value="Wholesale And Returns">Wholesale And Returns</option>
                        </select>
                        <div class="form-grp">
                            <label for="message">Message</label>
                            <textarea name="message" name="message" placeholder="Enter here" required="required" data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="btn">make request</button>
                        </div>
                        <div class="messages"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-form-area-end -->