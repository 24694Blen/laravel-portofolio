
<section class="testimonials">
    <div class="slideshow-container">

        <div class="mySlides">
          <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
          <p class="author">- John Keats</p>
        </div>
        
        <div class="mySlides">
          <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
          <p class="author">- Ernest Hemingway</p>
        </div>
        
        <div class="mySlides">
            <img style="height: 60px; width: auto; border-radius: 50%;" src="\images\ultraviolet.jpg" alt="avatar">
          <p class="testimonials__text">Blen is a good and hard working student.</p>
          <p class="author">Thomas A. Edison
              <br>
             <span>Full-stack Developer</span> 
          </p>
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