<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
 <div class="container" data-aos="fade-up">

  <div class="section-title">
   <h2>Pendidikan</h2>
   <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div>

  <div class="row">
   <div class="col-lg-6">
    <h3 class="resume-title">Sumary</h3>
    <div class="resume-item pb-0">
     <?php
     foreach ($Allpekerjaan as $pekerjaan) {
     ?>
     <h4><?= $pekerjaan['nama_pekerjaan']; ?></h4>
     <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
     <ul>
      <li><?= $pekerjaan['nama_perusahaan']; ?></li>
      <li><?= $pekerjaan['thn_masuk']; ?></li>
      <li><?= $pekerjaan['thn_keluar']; ?></li>
     </ul>
    <?php } ?>
    </div>

    <h3 class="resume-title">Education</h3>
    <div class="resume-item">
     <?php
     foreach ($Allpekerjaan1 as $pekerjaan1) {
     ?>
     <h4><?= $pekerjaan1['nama_pekerjaan']; ?></h4>
     <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
     <ul>
      <li><?= $pekerjaan1['nama_perusahaan']; ?></li>
      <li><?= $pekerjaan1['thn_masuk']; ?></li>
      <li><?= $pekerjaan1['thn_keluar']; ?></li>
     </ul>
    <?php } ?>
    </div>

   </div>
  </div>

 </div>
</section><!-- End Resume Section -->