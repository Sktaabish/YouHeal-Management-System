<!-- SEESION-START -->
<?php
include 'config.php';
session_start();
$email = $_SESSION['user_email'];
if (!isset($email)) {
  header('location:login.php');
}
?>

<!-- HEADER -->
<?php include('include/header.php') ?>
<!-- SERVICE_WRAPPER -->
<div class="service_wrapper">
  <!-- CONTAINER -->
  <div class="container">
    <!-- TOP -->
    <div class="top">
      <!-- DETAILS -->
      <div class="details">
        Contact Us +91 96366 96366 | enquiry@youhealhospital.com
        <div>
          <button class="open_btn"><i class="fa-solid fa-bars"></i></button>
          SERVICE
        </div>
        <!-- LOGO -->
        <div class="logo1">
          <img src="images/logo.png" alt="LOGO">
        </div>
      </div>
    </div>
    <!-- NAVIGATION -->
    <div class="nav">
      <button class="close_btn"><i class="fa-solid fa-xmark"></i></button>
      <div>
        <a href="logout.php">LOGOUT</a>
        <a href="home.php">HOME</a>
        <a href="about2.php">ABOUT US</a>
        <a href="service.php">SERVICE</a>
        <a href="contact2.php">CONTACT</a>
      </div>
    </div>
    <!-- CONTAINER4 -->
    <div class="container4">
      <!-- CONATINER-8 -->
      <div class="container-8">
        <!-- PHOTOCLASS -->
        <div class="photoclass">
          <img src="images/photo.jpg" alt="Photo">
        </div>
        <!-- MAIN -->
        <div class="main">
          <!-- TEXT -->
          <div class="text">
            Services
          </div>
          <!-- TEXT1 -->
          <div class="text1">
            Youheal hospital has more than 0 doctor consultants for almost all of your health needs.
          </div>
          <!-- TEXT1 -->
          <div class="text1">
            All doctors associated with Youheal are highly trained and have tremendous experience in their field of
            expertise.
          </div>
        </div>
      </div>
      <!-- CONTAINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>DERMATOLOGIST</h1>
          <!-- IMAGE -->
          <div class="imgg">
            <img src="images/dermatologist.jpg" alt="Dermatologist">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              Dermatologists also understand that a skin condition can have a serious impact on your health and
              well-being.
              Sometimes, a skin condition is a sign of a serious underlying health issue, and your dermatologist may be
              the
              first one to notice it. For example, signs of diabetes and heart disease can show up on the skin.
              Your dermatologist knows that a skin condition doesn’t have to be life-threatening to reduce a person’s
              quality
              of life. A skin condition can cause sleep loss, poor self-image, serious depression, or lost productivity.
              Eczema (aka atopic dermatitis), hair loss that causes scarring, and psoriasis are some conditions that can
              do this.
              The dermatopathologist examines tissue removed during a skin biopsy with a microscope and provides your
              dermatologist
              with a written report called a biopsy report or pathology report. This report will tell if you have a
              disease, and if so,
              what it is. If a disease is found, it will include other information that can help determine the best
              possible treatment.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR-CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor1.jpg">
          </div>
          <h2>Kiran<br>Acharya</h2>
          <h3>Dermatologist</h3>
          <p>Dr. Kiran is a board-certified Dermatologist with over 10 years of experience treating a wide range of skin
            conditions.<br>kiranacharya@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR-CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor2.jpg">
          </div>
          <h2>ADITA<br>AGRAWAL</h2>
          <h3>Dermatologist</h3>
          <p>Dr. Adita is a board-certified Dermatologist with over 10 years of experience treating a wide range of skin
            conditions.<br>aditiagarwal@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>PATHOLOGIST</h1>
          <!-- IMAGE -->
          <div class="imgg1">
            <img src="images/pathologist.jpg" alt="Pathologist">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              A pathologist is a medical healthcare provider who examines bodies and body tissues. He or she is
              also responsible for performing lab tests. A pathologist helps other healthcare providers reach diagnoses
              and is an important member of the treatment team. Pathologists have completed medical school and must have
              at least 3 years of advanced medical education in a residency training program to be eligible to take
              board
              certification exams. Pathologists are board-certified through the American Board of Pathology. Most
              pathologists
              receive training in both clinical and anatomical pathology. Pathologists may practice in all areas of
              pathology
              Pathologists practice in community, university, and government hospitals and clinics, as well as in
              independent
              laboratories, private offices, and other medical facilities. Pathologists recertify every 10 years through
              the American
              Board of Pathology.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor3.jpg">
          </div>
          <h2>SUNIL<br>AGRAWAL</h2>
          <h3>Pathologist</h3>
          <p>Dr. Sunil is a board-certified Pathologist with over 10 years of experience treating a wide range of skin
            conditions.<br>sunilagarwal@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR-CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor4.jpg">
          </div>
          <h2>ARPITA<br>SINGHAL</h2>
          <h3>Pathologist</h3>
          <p>Dr. Arpita is a board-certified Pathologist with over 10 years of experience treating a wide range of skin
            conditions.<br>arpitasinghal@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>CHEST PHYSICIAN</h1>
          <!-- IMAGE -->
          <div class="imgg">
            <img src="images/chestphysician.jpg" alt="Chest Physician">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              Respiratory Medicine is an extremely rewarding career choice for any junior doctor seeking a future in
              frontline
              medicine. The prospective trainee can look forward to experience in a broad and constantly evolving field
              of medicine
              closely linked to many other specialities. Hence a chest Physician is the embodiment of a team player;
              linking with oncology,
              radiology, intensive care, cardiology and the emergency medicine departments. Current developments in
              Ambulatory and Community
              linked services dovetail a service with a strong history of chronic disease management. Chronic
              Obstructive Pulmonary Disease,
              Asthma and Lung Cancer represent a sizeable component of the Respiratory Team workload. However more than
              30% of a General Medical
              acute Take-in has a primary respiratory diagnosis. Lung infections, Tuberculosis, Cystic Fibrosis &
              Bronchiectasis are another significant
              cohort of patients requiring multiprofessional training and a specialized skillset.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor5.jpg">
          </div>
          <h2>BHARAT<br>PATEL</h2>
          <h3>Chest Physician</h3>
          <p>Dr. Bharat is a board-certified Chest Physician with over 10 years of experience treating a wide range of
            skin conditions.<br>bharatpatel@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor6.jpg">
          </div>
          <h2>DHAVAL<br>ACHARYA</h2>
          <h3>Chest Physician</h3>
          <p>Dr. Dhaval is a board-certified Chest Physician with over 10 years of experience treating a wide range of
            skin conditions.<br>dhavalacharya@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>NEURO PHYSICIAN</h1>
          <!-- IMAGE -->
          <div class="imgg1">
            <img src="images/neurophysician.jpg" alt="Neuro Physician">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              A neurologist is a medical doctor who specializes in treating diseases of the nervous system. The nervous
              system is made of two parts: the central and peripheral nervous system. It includes the brain and spinal
              cord.
              Illnesses, disorders, and injuries that involve the nervous system often require a neurologist’s
              management and
              treatment. Neurologists manage and treat neurological conditions, or problems with the nervous
              system.People who
              are having problems with their senses, such as touch, vision, or smell, may also need to see a
              neurologist.
              Problems with senses are sometimes caused by nervous system disorders. Because the nervous system is
              complex,
              a neurologist may specialize in a specific area. They’ll do a fellowship in that area after residency
              training.
              Subspecialties have evolved to narrow a doctor’s focus.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor7.jpg">
          </div>
          <h2>NEHA<br>SHAH</h2>
          <h3>Neuro Physician</h3>
          <p>Dr. Neha is a board-certified Neuro Physician with over 10 years of experience treating a wide range of
            skin conditions.<br>nehashah@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor8.jpg">
          </div>
          <h2>PAVAN<br>SONAR</h2>
          <h3>Neuro Physician</h3>
          <p>Dr. Pavan is a board-certified Neuro Physician with over 10 years of experience treating a wide range of
            skin conditions.<br>pavansonar@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>CANCER SURGEON</h1>

          <!-- IMAGE -->
          <div class="imgg">
            <img src="images/cancersurgeon.jpg" alt="Cancer Surgeon">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              Cancer surgery is an operation or procedure to take out a tumor and possibly some nearby tissue.
              It is the oldest kind of cancer treatment, and it still works well to treat many types of cancer today.
              A doctor who specializes in cancer surgery is called a "surgical oncologist".Surgery can be performed in
              a doctor's office, clinic, surgery center, or hospital. Where you go depends on the type of surgery and
              how much time you need to heal. Your surgery may require medication to block the awareness of pain, called
              anesthesia.
              There are different types of anesthesia depending on the type and extent of the surgery.If you need to
              stay in the
              hospital overnight or for several days after surgery, it is called inpatient surgery. Or you might not
              need to stay
              in the hospital at all. If you can go home the same day, it is called outpatient surgery or ambulatory
              surgery.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor9.jpg">
          </div>
          <h2>RAM<br>TAINWALA</h2>
          <h3>Cancer Surgeon</h3>
          <p>Dr. Ram is a board-certified Cancer Surgeon with over 10 years of experience treating a wide range of skin
            conditions.<br>ramtainwala@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor10.jpg">
          </div>
          <h2>RAJANI<br>MODI</h2>
          <h3>Cancer Surgeon</h3>
          <p>Dr. Rajani is a board-certified Cancer Surgeon with over 10 years of experience treating a wide range of
            skin conditions.<br>rajanimodi@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>SPINE SURGEON</h1>

          <!-- IMAGE -->
          <div class="imgg1">
            <img src="images/spinesurgeon.jpg" alt="Spine Surgeon">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              Spine surgeons are doctors who specialize in the treatment of conditions that affect the spine.
              Both orthopedic Surgeons and Neurosurgeons are trained in and may specialize in spinal procedures.
              In some cases, specialization training may be involve a combined team of both orthopedic and
              neurosurgeons.
              Spine surgeons are medical doctors, meaning they have an M.D. or a D.O. Both degree titles require the
              same
              certifications and post-medical school training to specialize in spine surgery.After completing medical
              school,
              doctors who aim to become spine surgeons must graduate from an approved residency program. Doctors who
              have
              specialized in orthopedic Surgery or Neurological Surgery may subspecialize in spinal surgery. After
              completing
              their residencies, doctors must then spend a year or more completing fellowship training to specialize in
              spine surgery.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor11.jpg">
          </div>
          <h2>RITU<br>JAIN</h2>
          <h3>Spine Surgeon</h3>
          <p>Dr. Ritu is a board-certified Spine Surgeon with over 10 years of experience treating a wide range of skin
            conditions.<br>ritujain@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor12.jpg">
          </div>
          <h2>RAMESH<br>KAWAR</h2>
          <h3>Spine Surgeon</h3>
          <p>Dr. Ramesh is a board-certified Spine Surgeon with over 10 years of experience treating a wide range of
            skin conditions.<br>rameshkawar@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>PSYCHIATRIST</h1>

          <!-- IMAGE -->
          <div class="imgg">
            <img src="images/psychiatrist.jpg" alt="Psychiatrist">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              Psychiatry is the branch of medicine focused on the diagnosis, treatment and prevention of mental,
              emotional
              and behavioral disorders. A psychiatrist is a medical doctor (an M.D. or D.O.) who specializes in mental
              health,
              including substance use disorders. Psychiatrists are qualified to assess both the mental and physical
              aspects of
              psychological problems.People seek psychiatric help for many reasons. The problems can be sudden, such as
              a panic
              attack, frightening hallucinations, thoughts of suicide, or hearing "voices." Or they may be more
              long-term, such
              as feelings of sadness, hopelessness, or anxiousness that never seem to lift or problems functioning,
              causing everyday
              life to feel distorted or out of control. Because they are physicians, psychiatrists can order or perform
              a full range of
              medical laboratory and psychological tests which, combined with discussions with patients, help provide a
              picture of a
              patient's physical and mental state.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor13.jpg">
          </div>
          <h2>SAMIR<br>PARIKH</h2>
          <h3>Psychiatrist</h3>
          <p>Dr. Samir is a board-certified Psychiatrist with over 10 years of experience treating a wide range of skin
            conditions.<br>samirparikh@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor14.jpg">
          </div>
          <h2>SNEHA<br>KAMAT</h2>
          <h3>Psychiatrist</h3>
          <p>Dr. Sneha is a board-certified Psychiatrist with over 10 years of experience treating a wide range of skin
            conditions.<br>snehakamat@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>PHYSIOTHERAPIST</h1>
          <!-- IMAGE -->
          <div class="imgg1">
            <img src="images/physiotherapist.jpg" alt="Physiotherapist">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              If you’ve ever had an illness or injury that impacted your ability to move or carry out daily
              tasks, your doctor may have referred you to a physiotherapist to get you back on your feet.
              A physiotherapist, or physical therapist, works with patients to help them manage pain, balance,
              mobility, and motor function. Most people at some point in their lifetime will work with a
              physiotherapist.
              You may have been referred to one after a car accident, after surgery, or to address low back pain.
              They work with patients with all types of conditions or limitations. A physiotherapist works with patients
              to develop customized programs designed to restore as much as possible their functional ability and
              movement.
              They take a holistic (whole-body) approach, addressing not only the physical aspects of your well-being,
              but also your emotional, psychological, and social well-being.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor15.jpg">
          </div>
          <h2>VARSHA<br>HARIYANI</h2>
          <h3>Physiotherapist</h3>
          <p>Dr. Varsha is a board-certified Physiotherapist with over 10 years of experience treating a wide range of
            skin conditions.<br>varshahariyani@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor16.jpg">
          </div>
          <h2>VIKAS<br>KUMAR</h2>
          <h3>Physiotherapist</h3>
          <p>Dr. Vikas is a board-certified Physiotherapist with over 10 years of experience treating a wide range of
            skin conditions.<br>vikaskumar@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>PAEDIATRICIAN</h1>

          <!-- IMAGE -->
          <div class="imgg">
            <img src="images/paediatrician.jpg" alt="Paediatrician">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              Paediatrics is the branch of Medical Courses that deals with the health care of
              babies, children, adolescents, and young adults from birth to age 21 years. A medical
              practitioner who specializes in this area is known as a Pediatrician. The word pediatrics
              comes from the Greek that means “healer of children”. They also treat an organic disease & various
              other ailments such as jaundice, tuberculosis, typhoid & growth related disorders. Pediatric doctor
              (Pediatricians)
              guides & counsels the children and their parents or guardians regarding hygiene, diet and disease
              prevention.
              Pediatricians are physicians that provide care for infants, children, teenagers, and young adults.
              They specialize in diagnosing and treating problems specific to younger people. Most pediatricians
              treat common illnesses, minor injuries, and infectious diseases, and administer vaccinations.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor17.jpg">
          </div>
          <h2>VISHAL<br>BALDUA</h2>
          <h3>Paediatrician</h3>
          <p>Dr. Vishal is a board-certified Paediatrician with over 10 years of experience treating a wide range of
            skin conditions.<br>vishalbaldua@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor18.jpg">
          </div>
          <h2>KIRAN<br>ACHARYA</h2>
          <h3>Paediatrician</h3>
          <p>Dr. Kiran is a board-certified Paediatrician with over 10 years of experience treating a wide range of skin
            conditions.<br>kiranacharya@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
      <!-- CONATINER-9 -->
      <div class="container-9">
        <!-- HEAD -->
        <div class="head">
          <h1>DIETICIAN</h1>

          <!-- IMAGE -->
          <div class="imgg1">
            <img src="images/dietician.jpg" alt="Dietician">
          </div>
          <!-- PARAGRAPH -->
          <div class="para-1">
            <p>
              Dietitians develop and oversee nutritional programs for many types of institutions, including schools,
              hospitals and nursing homes.
              These professionals usually need a degree and licensure, although certification is also possible.
              Read on to learn about the job duties of different types of dietitians, as well as the educational
              requirements and career prospects for these professionals. A dietitian is qualified to develop and manage
              nutritional
              programs for individuals or groups of people in various institutions. There are several types of
              dietitians, including
              clinical dietitians, community dietitians, management dietitians, consultant dietitians and research
              dietitians.
              In large health care facilities, schools and even prisons, a management dietitian is generally needed to
              oversee
              food selection and preparation. These professionals might also monitor adherence to sanitary regulations
              and review
              the nutritional values of all meals served.
            </p>
          </div>
        </div>
      </div>
      <!-- DOCNAME -->
      <div class="docname">
        DOCTORS
      </div>
      <!-- DOCTOR-CONTAINER -->
      <div class="doctorcontainer">
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor19.jpg">
          </div>
          <h2>RAMESH<br>YADAV</h2>
          <h3>Dietician</h3>
          <p>Dr. Ramesh is a board-certified Dietician with over 10 years of experience treating a wide range of skin
            conditions.<br>rameshyadav@gmail.com<br>Call : +91 9696969696</p>
          <h5>MORNING SCHEDULE | 9:00 AM - 12:00 PM</h5>
          <a href="appointment.php">Book Appointment</a>
        </div>
        <!-- DOCTOR_CARD -->
        <div class="doctorcard">
          <!-- DOCTOR-IMAGE -->
          <div class="doctorimg">
            <img src="images/doctor20.jpg">
          </div>
          <h2>JAINIL<br>KORE</h2>
          <h3>Dietician</h3>
          <p>Dr. Jainil is a board-certified Dietician with over 10 years of experience treating a wide range of skin
            conditions.<br>jainilkore@gmail.com<br>Call : +91 9696969696</p>
          <h5>EVENING SCHEDULE | 4:00 PM - 7:00 PM</h5>
          <a href="appointment2.php">Book Appointment</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<?php 
include('include/footer2.php');
?>