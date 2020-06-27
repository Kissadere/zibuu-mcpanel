<?php
include "includes/core.php"
?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Virtual console</h1>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Survival server</h2>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                    <form class="input-group mb-3" method="post" action="" accept-charset="utf-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text">/</span>
                            </div>
                            <input name="command" type="text" class="form-control" placeholder="Disabled" autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Send</button>
                            </div>
                      </form>
                        </div>
                          <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
                            <!--
                            <script>
                              $(document).ready(function(){
                                setInterval(function(){
                                  $("#output").load('handler/server-logs.php')
                                }, 2000);
                              });
                              </script>
                            -->
                        <div id="output" class="input-group">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
