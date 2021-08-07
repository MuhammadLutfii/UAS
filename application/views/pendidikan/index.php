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
      foreach ($Allsd as $sd) {
      ?>
       <h4><?= $sd['nama']; ?></h4>
         <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
         <ul>
          <li><?= $sd['alamat']; ?></li>
          <li><?= $sd['thn_masuk']; ?></li>
          <li><?= $sd['thn_lulus']; ?>< /li>
         </ul>
        <?php } ?>
     </div>

     <h3 class="resume-title">Education</h3>
     <div class="resume-item">
      <?php
      foreach ($Allsmp as $smp) {
      ?>
       <h4><?= $smp['nama']; ?></h4>
         <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
         <ul>
          <li><?= $smp['alamat']; ?></li>
          <li><?= $smp['thn_masuk']; ?></li>
          <li><?= $smp['thn_lulus']; ?></li>
         </ul>
        <?php } ?>
     </div>

     <div class="col-lg-6">
      <h3 class="resume-title">Professional Experience</h3>
      <div class="resume-item">
       <?php
       foreach ($Allsma as $sma) {
       ?>
        <h4><?= $sma['nama']; ?></h4>
          <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
          <ul>
           <li><?= $sma['alamat']; ?></li>
           <li><?= $sma['thn_masuk']; ?></li>
           <li><?= $sma['thn_lulus']; ?></li>
          </ul>
         <?php } ?>
      </div>
      <h3 class="resume-title">Education</h3>
      <div class="resume-item">
       <?php
       foreach ($Alluniv as $univ) {
       ?>
        <h4><?= $univ['nama']; ?></h4>
          <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
          <ul>
           <li><?= $univ['alamat']; ?></li>
           <li><?= $univ['prodi']; ?></li>
           <li><?= $univ['thn_masuk']; ?></li>
              <li><?= $univ['thn_lulus']; ?></li>
          </ul>
         <?php } ?>
      </div>
     </div>
    </div>

   </div>
 </section><!-- End Resume Section -->