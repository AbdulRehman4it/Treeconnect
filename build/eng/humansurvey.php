<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
<?php

?>

 <!-- Step 2 Modal -->
<div class=" flex items-center justify-center xl:py-20 py-10 ">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Human Resources</h1>

    <!-- Description -->
   
 <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      This section assesses how your company recruits, organizes, and supports its team. It covers hiring, onboarding, performance reviews, HR tools, and internal guidelines. Well-managed human resources reduce operational friction, legal risks, and costly turnover. They also support productivity, improve work climate, and contribute to long-term stability.
    </p>
    <form method="POST" action="./Administrationsurvey.php">
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">1. Have you defined a clear recruitment and onboarding process (job descriptions, structured interviews, employee integration)?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="aq1" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq1" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq1"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">2. Do you conduct regular performance and feedback meetings with your team members?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="aq2" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq2" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq2"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">3. Do you use any system or tool to manage contracts, payroll, absences, and time tracking?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="aq3" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq3" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq3"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">4. Are compensation, bonuses, and benefits defined transparently and applied consistently?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="aq4" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq4" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq4"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">5. Have you implemented an internal guide or document that clearly explains company policies, processes, and employee rights and duties?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="aq5" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq5" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="aq5"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
    Next
  </button>
</form>
  </div>
</div>
</body>