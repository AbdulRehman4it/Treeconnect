<?php include_once './inc/header.php';?>

<?php
session_unset();

// OR (alternative way):
// $_SESSION = [];

// If you also want to destroy the session completely:
session_destroy();
?>
<body class="bg-[#304B68] overflow-x-hidden">
    <?php include_once './inc/nav.php';?>
    <!-- Heading  -->
  <div class="text-center 2xl:pt-24 lg:pt-16 pt-10">
        <h1 class="2xl:text-[90px] lg:text-6xl text-4xl text-white">Maturity Audit</h1>
    </div>


<section class="2xl:px-28 lg:px-10 px-5 2xl:pt-14 lg:pt-10 pt-6">
  <div class="bg-[#3F6893] xl:p-12 p-6 rounded-2xl">
        <div>
            <h1 class="2xl:text-[40px] lg:text-3xl text-2xl text-white">Why this audit?</h1>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-6 2xl:leading-[44px] lg:leading-7 leading-6">At TreeConnect, we believe that a high-performing company relies as much on solid internal structure as on the tools it uses. This audit helps you take a clear, honest, and practical look at how your business operates across five essential areas:</p>

            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
        •	Human Resources
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Administration & Back Office
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
      •	IT & Cybersecurity
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Accounting & Finance
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Marketing & Communication
            </p>

            <h2 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">This audit is provided free of charge to help you:</h2>

             <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-4 2xl:pt-5">
       •	Take a step back and reflect on your organization
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Quickly identify your key areas for improvement
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Gain immediately actionable insights
            </p>

            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-8">You can complete it independently, without registration or any required contact.</p>

            <h1 class="2xl:text-[40px] lg:text-3xl text-2xl text-white pt-10">How does the audit work?</h1>
           

            <div>
                <h2 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">For each question, choose the answer that best reflects your current situation:
                </h2>

                <div class="bg-[#3F6893] p-7 mt-8 shadow-xl lg:w-2/3 w-full rounded-2xl">
                    <p class="2xl:text-[26px] lg:text-base text-sm text-[#D3D3D3] pt-2 2xl:pt-5">
         <span class="text-white">•	Yes :</span> The item is in place, operational, and under control
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-[#D3D3D3] pt-2 2xl:pt-5">
         <span class="text-white">•	Partially :</span>   It exists, but is not yet fully implemented or consistent
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-[#D3D3D3] pt-2 2xl:pt-5">
         <span class="text-white">•	No :</span>   It is not in place yet
            </p>
                </div>
            </div>

            <div>
                <h2 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-10">Each area is scored out of 10. Points are allocated as follows:</h2>

                <div class="bg-[#3F6893] p-7 mt-8 shadow-xl lg:w-2/3 w-full rounded-2xl">
                    <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
         <span class="text-[#D3D3D3]">• Yes = </span>  2 points
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
         <span class="text-[#D3D3D3]">• Partially = </span> 1 points
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
         <span class="text-[#D3D3D3]">• No = </span>  0 points
            </p>
                </div>
            </div>

            <div>
                <h1 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">Note:</h1>
                 <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       Your results will be visualized as a radar chart, instantly visible at the end of the questionnaire. No data is saved.
            </p>
            </div>

            <!-- <div>
                <h1 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">Final Line:</h1>
                 <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       This audit is a clear and constructive starting point to identify strengths and development opportunities.
            </p>
            </div> -->
        </div>

        <div class="text-center xl:pt-20 pt-10">
             
      <button  onclick="openPopup()" class="text-[#FFFFFF] xl:text-lg text-base py-2 px-10 border border-white rounded-full font-medium hover:bg-white hover:text-[#304B68]">Let’s begin!</button>
     
        </div>
  </div>
</section>


<!-- footer  -->
<?php include_once './inc/footer.php';?>
<!-- Popup Overlay -->
<div id="popup" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-50 flex items-center justify-center hidden">
  <!-- Scrollable Form Container -->

  <!-- Step 1 Modal -->
  <div id="modalStep1" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">  
      <div class="relative bg-[#3F6893] text-white w-full  max-h-[90vh] overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl xl:p-20 p-8 shadow-lg">
    <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>

    <!-- Form Content -->
    <h2 class="2xl:text-6xl lg:text-4xl text-3xl font-semibold text-center ">Company Information</h2>
    <p class="text-sm text-center pt-5 text-white">Please take a few moments to provide context. This allows us to better understand your company’s profile and tailor the analysis.</p>

    <form id="companyForm" method="POST" action="./humansurvey.php" class="space-y-4 pb-6 xl:pt-20 pt-10">
        <div class="pb-2">
        <label for="" class="text-sm xl:text-base font-Nonrmal">Company name</label>
      <input type="text" id="companyName" name="companyName" placeholder="Example: Cabinet SLV Sàrl" class="w-full border border-white p-3 mt-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] outline-Nonne focus:outline-Nonne"/>
      </div>

      <div class="pb-2">
<label for="" class="text-sm xl:text-base font-Nonrmal">Industry sector</label>
      <select id="industry" name="industry" class="w-full border border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] mt-3 outline-Nonne focus:outline-Nonne">
        <option value="" >Choose from the list </option>
        <option>Commerce or Distribution</option>
        <option>Services (HR, consulting, legal, etc.)</option>
        <option>Health or Well-being</option>
        <option>IT or Digital activities</option>
        <option>Construction or Real Estate</option>
        <option>Hospitality or Catering</option>
        <option>Manufacturing or Production</option>
        <option>Education or Training</option>
        <option>Public sector or Non-profit organization</option>
        <option>Other</option>
      </select>
      </div>

      <div class="pb-2">
      <label for="" class="text-sm xl:text-base font-Nonrmal">Number of employees</label>
      <select id="employees" name="employees" class="w-full  border border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] mt-3 outline-Nonne focus:outline-Nonne">
        <option value="">Select a range</option>
      <option>1 to 5</option>
      <option>6 to 10</option>
      <option>11 to 20</option>
      <option>21 to 50</option>
      <option>More than 50</option>
      </select>
      </div>

      <div class="pb-2">

      <label for="founded" class="text-sm xl:text-base font-Nonrmal">Year founded</label>
<select id="founded" name="founded" class="w-full border border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] mt-3 outline-none focus:outline-none">
  <option value="">Select a year (1980–2025) </option>
  <?php
    for ($year = 1980; $year <= 2025; $year++) {
      echo "<option value=\"$year\">$year</option>";
    }
  ?>
</select>
      </div>

      <div class="pb-2">
       <label for="" class="text-sm xl:text-base font-Nonrmal">Location </label>
      <input type="text" id="location" name="location" placeholder="Example: Geneva" class="w-full  border border-white p-3 rounded-2xl  mt-3 outline-Nonne focus:outline-Nonne text-white bg-transparent placeholder-[#D3D3D3] placeholder-italic" />
      </div>
      
      <div class="pb-2">
       <label for="" class="text-sm xl:text-base font-Nonrmal">Contact Email</label>
      <input type="text" id="contact" name="contact" placeholder="Example: Peter Martin – Director" class="w-full  border border-white p-3 mt-3 outline-Nonne focus:outline-Nonne rounded-2xl text-white bg-transparent placeholder-[#D3D3D3]" />
       </div>

      <div class="pb-2">
       <label for="" class="text-sm xl:text-base font-Nonrmal">Main organizational challenge today</label>
      <input type="text" id="challenge" name="challenge" placeholder="Example: Employee retention, scheduling, admin overload…" class="w-full  border mt-3 outline-Nonne focus:outline-Nonne border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3]" />
      </div>
 <div class="pt-6">
      
      <input type="submit" id="submit" value="Next" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg" />
      </div>
      
    </form>
  </div>
  </div>

<!-- JavaScript -->
<script>
  function openPopup() {
    document.getElementById('popup').classList.remove('hidden');
    document.body.classList.add('overflow-hidden'); // Disable background scroll
  }

  function closePopup() {
    document.getElementById('popup').classList.add('hidden');
    document.body.classList.remove('overflow-hidden'); // Re-enable background scroll
  }

  // document.getElementById('companyForm').addEventListener('submit', function (e) {
  //   e.preventDefault();

  //   const companyName = document.getElementById('companyName').value;
  //   const industry = document.getElementById('industry').value;
  //   const employees = document.getElementById('employees').value;
  //   const founded = document.getElementById('founded').value;
  //   const location = document.getElementById('location').value;
  //   const contact = document.getElementById('contact').value;

  //   if (!companyName || !industry || !employees || !founded || !location || !contact) {
  //     alert("Please fill in all required fields.");
  //     return;
  //   }

  //   alert("Form submitted successfully!");
  //   closePopup();
  //   document.getElementById('companyForm').reset();
  // });
</script>

  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="aNonnymous"></script>

</body>
</html>