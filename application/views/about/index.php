 <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
   <div class="container" data-aos="fade-up">

    <div class="section-title">
     <h2>About</h2>
     <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
     <div class="col-lg-4">
      <img src="<?=base_url()?>assets_tampil/img/profile-img.jpg" class="img-fluid" alt="">
     </div>
     <div class="col-lg-8 pt-4 pt-lg-0 content">
      <h3>UI/UX Designer &amp; Web Developer.</h3>
      <p class="fst-italic">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
       magna aliqua.
      </p>
      <div class="row">
       <div class="col-lg-6">
        <ul>
         <?php
         foreach ($Allabout as $about) {
         ?>
          <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span><?= $about['nama']; ?></span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Profile:</strong> <span><?= $about['profile']; ?></span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $about['email']; ?></span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $about['phone']; ?></span></li>
         <?php } ?>
       </div>
       </ul>
      </div>

     </div>
     <p>
      Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
      Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
     </p>
    </div>
   </div>

   </div>
  </section><!-- End About Section -->