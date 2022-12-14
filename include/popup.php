<!-- Button trigger modal -->



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Form
                </h5>
                <button id="close2" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="function.php" method="post" role="form">
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
                                <label>Mobile</label>
                                <input type="tel" class="form-control form-control-subject" name="mobile" id="subject" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
                            </div>
                        </div>

                    </div>





            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<script type="text/javascript">
    window.onload = function() {

        document.getElementById("close").onclick = function() {
            document.getElementById("exampleModal").style.display = "none";
            sessionStorage.setItem("exampleModal", "none");
        };
        document.getElementById("close2").onclick = function() {
            document.getElementById("exampleModal").style.display = "none";
            sessionStorage.setItem("exampleModal", "none");
        };
    };

    function OpenBootstrapPopup() {

        $('#exampleModal').trigger('focus')

    }


    function addEvent(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    }
    addEvent(window, "load", function(e) {
        addEvent(document, "mouseout", function(e) {
            e = e ? e : window.event;
            var from = e.relatedTarget || e.toElement;
            if (!from || from.nodeName == "HTML") {
                // stop your drag event here
                // for now we can just use an alert
                if (sessionStorage.getItem("exampleModal") === "none") {
                    document.getElementById("exampleModal").style.display = "none";
                } else {
                    OpenBootstrapPopup();
                }


            }
        });
    });
</script>