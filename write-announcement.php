<?php
require "includes/core.php";
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Announcements</h1>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                      <form method="post" action="handler/new-announcement.php" autocomplete="off">
                        <input type="hidden" name="form_name" id="form_name" value="ufid_announcement">
                        <input type="hidden" name="action" value="new">
                        <input type="hidden" name="creator" value="<? echo $_SESSION['username']; ?>">
                        <div class="form-group">
                          <label>Title</label>
                          <input class="form-control" type="text" name="title" maxlength="70" required>
                        </div>
                        <div class="form-group">
                          <label>Short description</label>
                          <textarea class="form-control" name="description" maxlength="250" placeholder="(Up to 250 characters)" required></textarea>
                        </div>
                        <div class="form-group">
                          <label>Category</label>
                          <select class="form-control" name="category" required>
                              <optgroup label="Currently selected">
                              </optgroup>
                              <optgroup label="All categories">
                            <option value="updates">Updates</option>
                            <option value="offers">Special offers</option>
                            <option value="showcase">Showcase</option>
                            <option value="pools">Pools</option>
                            <option value="campaigns">Campaigns and activities</option>
                              </optgroup>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Banner</label>
                          <input class="form-control" type="text" name="banner" maxlength="120" required>
                        </div>
                        <div class="form-group">
                          <label>Announcement</label>
                          <textarea class="summernote" name="content" required>
                          </textarea>
                        </div>
                        <div class="button-group">
                          <button class="btn btn-success">Add</button>
                          <button class="btn btn-danger">Reset</button>
                        </div>
                      </form>
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
<script src="../assets/vendor/summernote/dist/summernote.js"></script>
</body>
</html>
