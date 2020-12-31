<?php
require 'app/views/statics/_navbar.php'
?>


<!-- Add your site or app content here -->
  <div class="hero-full-container background-image-container white-text-container" style="background-image: url('https://images.unsplash.com/photo-1561972465-05c968dc2c91?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80')">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero-full-wrapper">
            <div class="text-content">
              <h1>Hello,<br>
                <span id="typed-strings">
                  <span>I'm Gian Franco Lasala</span>
                  <span>This is my first PHP site</span>
                  <span>Done without prior knowledge</span>
                </span>
                <span id="typed"></span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     type();
     movingBackgroundImage();
  });
</script>


</html>