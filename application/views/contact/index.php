 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

   <div class="section-title">
    <h2>Contact</h2>
   </div>

   <div class="row mt-1">

    <div class="col-lg-4">
     <div class="info">
      <div class="address">
       <i class="bi bi-geo-alt"></i>
       <h4>Location:</h4>
       <p>A108 Adam Street, New York, NY 535022</p>
      </div>

      <div class="email">
       <i class="bi bi-envelope"></i>
       <h4>Email:</h4>
       <p>info@example.com</p>
      </div>

      <div class="phone">
       <i class="bi bi-phone"></i>
       <h4>Call:</h4>
       <p>+1 5589 55488 55s</p>
      </div>

     </div>

    </div>

    <div class="col-lg-8 mt-5 mt-lg-0">

     <form action="<?= base_url('contact/simpancontact') ?>" method="POST">
      <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Yourname</label>
       <input type="text" name="nama_pengunjung" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengunjung">
      </div>
      <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Your Email</label>
       <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
      </div>
      <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Subject</label>
       <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="subject">
      </div>
      <div class="mb-3">
       <label for="exampleFormControlTextarea1" class="form-label">message</label>
       <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3">
       <button type='submit' class="btn btn-primary">Save</button>
      </div>
     </form>
    </div>

   </div>

  </div>
 </section><!-- End Contact Section -->