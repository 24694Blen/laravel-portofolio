
<section class="testimonials">
  <div>
    <h2 class="testimonials__title">Testimonials</h2>
    <p class="testimonials__text">People I've worked with have said some nice things...</p>
  </div>
    <div class="slideshow-container">

        <div class="mySlides">
          <img src=".\images\avatar.jpg" alt="Avatar" style="width: auto;
          height: 135px;"><br>
          <q>“Matt was a real pleasure to work with and we look forward to working with him again. <br> He’s definitely the kind of designer you can trust with a project from start to finish.”</q>
          <p class="author">John Keats</p>
          <p class="author-job">Designer</p>
        </div>
        
        <div class="mySlides">
          <img src=".\images\avatar3.jpg" alt="Avatar" style="width: auto;
          height: 135px;"><br>
          <q>“Matt was a real pleasure to work with and we look forward to working with him again. <br> He’s definitely the kind of designer you can trust with a project from start to finish.”</q>
          <p class="author">Ernest Hemingway</p>
          <p class="author-job">Designer</p>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        
        <div class="dot-container">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
</section>



<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>