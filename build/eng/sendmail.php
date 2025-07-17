<?php
// ✅ Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ✅ Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
ob_start();

// ✅ Include header with proper path
$headerPath = __DIR__ . '/inc/header.php';
if (file_exists($headerPath)) {
    include_once $headerPath;
} else {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Header file not found']);
    exit;
}
ob_end_clean(); 

// ✅ Load PHPMailer
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require './PHPMailer/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ✅ Capture HTML email content
ob_start();
?>
<!-- HTML Email Starts -->
<div style="font-family: 'Segoe UI', sans-serif; background-color: #3F6893; color: #333; padding: 40px; line-height: 1.6;">

<!-- Header with Logo and Title -->
<div style="background-color: #3F6893; border: 1px solid #d1dbe8; border-radius: 12px; padding: 24px 32px; text-align: center; margin-bottom: 40px;">
  <div style="margin-bottom: 16px;">
    <img src="https://www.treeconnect.ch/assets/img/logo3.png" alt="Logo" style="width: 140px; height: auto; max-width: 100%; display: block; margin: 0 auto;">
  </div>
  <a href="https://treeconnect.ch" target="_blank" style="display: inline-block; background-color: #ffffff; color: #003366; font-size: 14px; font-weight: 600; padding: 10px 24px; border-radius: 8px; text-decoration: none; border: 1px solid #ccc; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    Contact TreeConnect
  </a>
</div>
<?php if (!empty($_SESSION['companyData'])): ?>
  <div style="background-color: white; border: 1px solid #d1dbe8; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); padding: 40px 24px; margin-bottom: 40px;">
    <h2 style="color: #003366; font-size: 18px; font-weight: 600; border-bottom: 2px solid #d1dbe8; padding-bottom: 8px; margin-bottom: 24px;">
      Form Submission Data (Company Info)
    </h2>

    <?php foreach ($_SESSION['companyData'] as [$label, $value]): ?>
      <div style="margin-bottom: 16px; padding: 16px; background-color: #f9fbff; border: 1px solid #e1eaf2; border-radius: 8px;">
        <span style="display: block; color: #003366; font-weight: 600; margin-bottom: 6px;">
          <?= htmlspecialchars($label) ?>
        </span>
        <span style="color: #4a4a4a;">
          <?= htmlspecialchars($value) ?>
        </span>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
<!-- Pillar Cards (stacked vertically) -->
<div id="scoreCards" style=" margin-bottom: 40px;">
  <?php
  function renderCard($title, $level, $support, $impact) {
    echo "
      <div style=\"
        background-color: #ffffff;
        border: 1px solid #d1dbe8;
        border-radius: 12px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        padding: 24px;
        margin-bottom: 32px;
      \">
        <h2 style=\"
          font-size: 18px;
          font-weight: 600;
          color: #003366;
          margin: 0 0 16px 0;
        \">$title</h2>
        <div style=\"
          font-size: 14px;
          line-height: 1.6;
          color: #4a4a4a;
        \">
          <div style=\"
            margin-bottom: 16px;
            background-color: #f9fbff;
            border: 1px solid #e1eaf2;
            border-radius: 8px;
            padding: 16px;
          \">
            <strong style=\"color: #003366;\">Maturity level analysis:</strong><br>$level
          </div>
          <div style=\"
            margin-bottom: 16px;
            background-color: #f9fbff;
            border: 1px solid #e1eaf2;
            border-radius: 8px;
            padding: 16px;
          \">
            <strong style=\"color: #003366;\">Support possible by TreeConnect:</strong><br>$support
          </div>
          <div style=\"
            background-color: #f9fbff;
            border: 1px solid #e1eaf2;
            border-radius: 8px;
            padding: 16px;
          \">
            <strong style=\"color: #003366;\">Impact on your organization:</strong><br>$impact
          </div>
        </div>
      </div>
    ";
  }
if (isset($_SESSION['hr_score'])) {
    switch ($_SESSION['hr_score']) {
        case 0:
        case 1:
            renderCard("Human Resources",
                "HR processes are not yet formalized at this stage. This pillar represents a great opportunity for structuring.",
                "TreeConnect can help you lay the first bricks of a simple HR foundation tailored to your structure.",
                "Clarifies roles, ensures compliance, and lays the groundwork for a stable team.");
            break;
        case 2:
            renderCard("Human Resources",
                "One or two HR aspects are present sporadically, but overall it remains informal or scattered.",
                "We can identify together the HR priorities to structure quickly, with tools adapted to small teams.",
                "Provides peace of mind on basic obligations and prepares for the arrival of new team members.");
            break;
        case 3:
            renderCard("Human Resources",
                "Some HR elements exist (e.g., contracts or interviews), but without an overarching logic.",
                "TreeConnect supports you in organizing your HR practices around a coherent and repeatable process.",
                "Promotes smooth management, even in cases of turnover or growth.");
            break;
        case 4:
            renderCard("Human Resources",
                "Structuring efforts are underway, but key aspects like onboarding or follow-up lack regularity.",
                "We help you formalize simple and repeatable processes (job descriptions, employee follow-up, interview templates).",
                "Improves team cohesion and supports daily engagement.");
            break;
        case 5:
            renderCard("Human Resources",
                "HR foundations are in place with several functional elements. Some optimizations are possible.",
                "TreeConnect can offer you light and automated HR tools to centralize and save time.",
                "Makes HR management smoother and reduces administrative errors.");
            break;
        case 6:
            renderCard("Human Resources",
                "Your HR approach is largely established. Partial harmonization and digitization could enhance its efficiency.",
                "We support the transition to integrated tools for tracking, absences, or interviews.",
                "Strengthens transparency and professionalizes internal management.");
            break;
        case 7:
            renderCard("Human Resources",
                "HR practices are well established, with visible organization. Some rituals could still be systematized.",
                "TreeConnect can help you structure regular feedback or define clearer compensation grids.",
                "Fosters team retention and accountability.");
            break;
        case 8:
            renderCard("Human Resources",
                "HR management is well controlled and suited to your needs. Minor improvements can increase agility.",
                "We offer you more strategic HR management tools (needs forecasting, talent tracking).",
                "Increases projection capacity and supports long-term development.");
            break;
        case 9:
            renderCard("Human Resources",
                "You have a solid, clear, and well-integrated HR system. Only a few adjustments remain to reach excellence.",
                "TreeConnect can enhance your approach with advice on employer branding or company culture.",
                "Highlights your attractiveness and strengthens your HR positioning.");
            break;
        case 10:
            renderCard("Human Resources",
                "Your HR management is structured, smooth, and exemplary. It is a strong foundation for stability and growth.",
                "TreeConnect can support your strategic HR thinking through benchmarks or advanced tools.",
                "You are well positioned to attract, engage, and develop the right talent.");
            break;
        default:
            renderCard("Human Resources", "Unrecognized score.", "", "");
            break;
    }
}

if (isset($_SESSION['admin_score'])) {
    switch ($_SESSION['admin_score']) {
        case 0:
            renderCard("Administration & Back-Office",
                "One or two administrative tools are used occasionally, but overall it remains informal or scattered.",
                "We can work together to identify the priorities to structure with tools adapted to small teams.",
                "Brings peace of mind on basic obligations and prepares for the arrival of new team members.");
            break;
        case 1:
            renderCard("Administration & Back-Office",
                "Administrative processes are not yet formalized. This is an area that can be progressively structured.",
                "TreeConnect can help you map key functions and lay the groundwork for simple procedures.",
                "Establishes a clear foundation and avoids critical oversights.");
            break;
        case 2:
            renderCard("Administration & Back-Office",
                "Some documents or tasks are tracked occasionally, without a clear or shared method.",
                "We can offer templates tailored to your activity to gradually structure your administrative flows.",
                "Helps organize daily operations to save time and better distribute responsibilities.");
            break;
        case 3:
            renderCard("Administration & Back-Office",
                "Some processes exist but are handled in isolation, often by just one person.",
                "TreeConnect supports you in formalizing practices to ensure task continuity even in case of absence.",
                "Strengthens organizational resilience and reduces reliance on key individuals.");
            break;
        case 4:
            renderCard("Administration & Back-Office",
                "A basic organization is in place but still relies more on habits than written procedures.",
                "We help you formalize your routines into simple procedures, with basic digital tools.",
                "Stabilizes administrative activity and makes it easier to onboard new team members.");
            break;
        case 5:
            renderCard("Administration & Back-Office",
                "Structuring efforts are underway, but their application remains inconsistent.",
                "TreeConnect provides accessible tools to strengthen and harmonize your practices.",
                "Improves tracking consistency and ensures better traceability of information.");
            break;
        case 6:
            renderCard("Administration & Back-Office",
                "Several procedures are in place and followed, with partially integrated digital tools.",
                "We help you integrate simple tools to visualize, track, and automate certain tasks.",
                "Saves time and reduces repetitive or manual tasks.");
            break;
        case 7:
            renderCard("Administration & Back-Office",
                "Administrative organization is well defined but could be better centralized or automated.",
                "TreeConnect helps you centralize information and create up-to-date shared repositories.",
                "Facilitates information sharing and reduces internal friction.");
            break;
        case 8:
            renderCard("Administration & Back-Office",
                "Procedures are documented, tools are in place, and information is well shared.",
                "We help you consolidate your digital tools and streamline validation and archiving processes.",
                "Improves collaboration and provides visibility into administrative progress.");
            break;
        case 9:
            renderCard("Administration & Back-Office",
                "Administration is smooth, proactive, and not overly dependent on one person.",
                "TreeConnect helps you maintain this level of efficiency during team changes or growth.",
                "Frees up time to focus on higher-value tasks.");
            break;
        case 10:
            renderCard("Administration & Back-Office",
                "Administrative organization is complete, clear, and secure. It directly supports overall performance.",
                "We highlight your current system and suggest ways to automate low-value tasks.",
                "Supports operational continuity and effective business management.");
            break;
        default:
            renderCard("Administration & Back-Office", "Unrecognized score.", "", "");
            break;
    }
}

if (isset($_SESSION['it_score'])) {
    switch ($_SESSION['it_score']) {
        case 0:
            renderCard("IT & Cybersecurity",
                "One or two digital tools are used occasionally, but everything remains informal or scattered.",
                "We can identify digital priorities to structure quickly, using tools adapted for small teams.",
                "Provides peace of mind for basic usage and prepares for the arrival of new team members.");
            break;
        case 1:
            renderCard("IT & Cybersecurity",
                "Digital tools are used occasionally, without real structure or security measures.",
                "TreeConnect can help you assess your IT setup and digital tools.",
                "Lays a clear and reliable foundation for daily digital usage.");
            break;
        case 2:
            renderCard("IT & Cybersecurity",
                "A basic IT environment exists but is poorly maintained or inconsistent.",
                "We help you build a coherent and scalable digital environment.",
                "Supports a more structured and secure working framework.");
            break;
        case 3:
            renderCard("IT & Cybersecurity",
                "Digital practices are in place, but their reliability and consistency need to be strengthened.",
                "TreeConnect offers simple solutions to secure, centralize, and evolve your digital system.",
                "Reduces errors, information loss, and IT-related interruptions.");
            break;
        case 4:
            renderCard("IT & Cybersecurity",
                "The IT infrastructure is functional but relies on habits or non-integrated tools.",
                "We help you implement collaborative tools and shared usage rules.",
                "Improves team efficiency and operational continuity.");
            break;
        case 5:
            renderCard("IT & Cybersecurity",
                "Digital tools and security practices are present, but their use remains irregular.",
                "TreeConnect can assist you in choosing and deploying tools suited to your activities.",
                "Limits cybersecurity risks and facilitates internal operations.");
            break;
        case 6:
            renderCard("IT & Cybersecurity",
                "The IT environment is generally stable, with some structuring and documentation beginning.",
                "We strengthen your cybersecurity practices and internal technical documentation.",
                "Improves system stability and team ease with digital tools.");
            break;
        case 7:
            renderCard("IT & Cybersecurity",
                "The IT environment is well structured and covers most daily needs.",
                "TreeConnect offers robust solutions to maintain a smooth and secure system.",
                "Improves overall productivity and organizational security.");
            break;
        case 8:
            renderCard("IT & Cybersecurity",
                "Digital tools are coherent, secure, and adapted to both internal and external uses.",
                "We optimize your digital infrastructure to ensure its scalability and resilience.",
                "Enables growth and evolution without technical disruptions.");
            break;
        case 9:
            renderCard("IT & Cybersecurity",
                "Your IT environment is secure and efficient, with regular monitoring practices.",
                "TreeConnect helps you implement regular audits and advanced security policies.",
                "Protects company data and long-term reputation.");
            break;
        case 10:
            renderCard("IT & Cybersecurity",
                "Your IT system is reliable, future-oriented, and supports both efficiency and innovation.",
                "We position your IT system as a lever for performance, reputation, and sustainable innovation.",
                "Makes your digital environment a true strategic advantage for the future.");
            break;
        default:
            renderCard("IT & Cybersecurity", "Unrecognized score.", "", "");
            break;
    }
}

if (isset($_SESSION['accounting_score'])) {
    switch ($_SESSION['accounting_score']) {
        case 0:
            renderCard("Accounting & Finance",
                "Financial tracking is very limited or even nonexistent. It is a strategic area to strengthen.",
                "TreeConnect can support you in setting up the first financial management indicators adapted to your activity.",
                "Establishes a clear foundation to secure cash flow and anticipate deadlines.");
            break;
        case 1:
            renderCard("Accounting & Finance",
                "Financial tracking is very limited or even nonexistent. It represents a strategic lever to develop.",
                "TreeConnect can help you set up the first financial indicators tailored to your business.",
                "Establishes a solid base to secure cash flow and anticipate deadlines.");
            break;
        case 2:
            renderCard("Accounting & Finance",
                "Financial data is tracked occasionally, without a regular framework or defined indicators.",
                "We help you structure your financial flows (invoicing, payments, reminders) and identify the right indicators.",
                "Makes financial flows more readable and reduces late or missed payments.");
            break;
        case 3:
            renderCard("Accounting & Finance",
                "Basic financial management exists, but it relies on manual tools or informal routines.",
                "TreeConnect offers simple and automated tools to ensure reliable tracking of cash flow and margins.",
                "Ensures reliable data and improves decision-making.");
            break;
        case 4:
            renderCard("Accounting & Finance",
                "Financial documents are available, but their use and interpretation remain partial.",
                "We help you build accessible financial dashboards to support decisions.",
                "Provides a concrete and structured view of available financial resources.");
            break;
        case 5:
            renderCard("Accounting & Finance",
                "Key indicators are tracked, but they are not always up to date or used for decision-making.",
                "TreeConnect can strengthen your monitoring practices with models adapted to your sector.",
                "Promotes a regular and useful understanding of economic performance.");
            break;
        case 6:
            renderCard("Accounting & Finance",
                "Financial tracking is regular and based on dashboards or simple tools.",
                "We support you in partially automating financial processes with interconnected tools.",
                "Saves time in daily financial management.");
            break;
        case 7:
            renderCard("Accounting & Finance",
                "Cash flow and financial data are well organized and used to guide decisions.",
                "TreeConnect helps you link your financial data to your operational decisions.",
                "Improves forecasting capabilities and cost/revenue control.");
            break;
        case 8:
            renderCard("Accounting & Finance",
                "Your financial management is structured, with a clear and up-to-date view of the company’s situation.",
                "We facilitate the implementation of forecasting and analysis tools to support your growth.",
                "Helps anticipate critical periods or investment needs.");
            break;
        case 9:
            renderCard("Accounting & Finance",
                "You actively manage your margins, cash flow, and investments, anticipating financial challenges.",
                "TreeConnect supports your strategy for managing margins, investments, and financial risks.",
                "Strengthens financial resilience and the company’s overall strategy.");
            break;
        case 10:
            renderCard("Accounting & Finance",
                "Your financial management is precise, strategic, and integrated into overall governance.",
                "We help you strengthen your current system and contribute to its strategic development.",
                "Turns financial management into a lever for control, optimization, and growth.");
            break;
        default:
            renderCard("Accounting & Finance", "Unrecognized score.", "", "");
            break;
    }
}

if (isset($_SESSION['marketing_score'])) {
    switch ($_SESSION['marketing_score']) {
        case 0:
            renderCard("Marketing & Communication",
                "The topic is barely addressed, with few visible or structured actions so far.",
                "We help identify priority actions to clarify positioning and structure initial communications.",
                "Lays the foundation for useful and accessible communication.");
            break;
        case 1:
            renderCard("Marketing & Communication",
                "No structured communication strategy has been implemented yet.",
                "TreeConnect can help you lay the foundation for a visibility strategy tailored to your business.",
                "Establishes a consistent and accessible base for your visibility.");
            break;
        case 2:
            renderCard("Marketing & Communication",
                "Some actions are taken occasionally, without a clear direction.",
                "We help you identify the right channels and key messages to structure.",
                "Clarifies your positioning and offer for target audiences.");
            break;
        case 3:
            renderCard("Marketing & Communication",
                "Some channels or media are used, but without consistency or defined strategy.",
                "TreeConnect supports you in building a coherent identity and a basic communication routine.",
                "Strengthens the coherence of your online and offline presence.");
            break;
        case 4:
            renderCard("Marketing & Communication",
                "Basic elements are present (logo, website, social networks), but underutilized.",
                "We help you enhance your existing materials and align them with a strategic approach.",
                "Structures brand image and improves company clarity.");
            break;
        case 5:
            renderCard("Marketing & Communication",
                "A strategy exists in the background, but it is not formalized or regularly monitored.",
                "TreeConnect provides a clear formalization of your marketing strategy and target audiences.",
                "Allows you to focus communication efforts and measure their impact.");
            break;
        case 6:
            renderCard("Marketing & Communication",
                "Communication is partially planned, with coherence still in development.",
                "We help you implement an editorial calendar and simple performance indicators.",
                "Saves time and builds communication habits.");
            break;
        case 7:
            renderCard("Marketing & Communication",
                "The brand identity is clear and channels are used in an organized way.",
                "TreeConnect strengthens your content strategy and channel activation.",
                "Improves message reach and brand consistency.");
            break;
        case 8:
            renderCard("Marketing & Communication",
                "The communication strategy is clear and aligned with your goals and positioning.",
                "We refine your positioning and optimize your materials to maximize impact.",
                "Strengthens the company’s credibility and attractiveness.");
            break;
        case 9:
            renderCard("Marketing & Communication",
                "Actions are consistent, monitored, and adjusted based on measured results.",
                "TreeConnect helps you manage visibility with dashboards tailored to your goals.",
                "Aligns communication with commercial and HR priorities.");
            break;
        case 10:
            renderCard("Marketing & Communication",
                "Your communication is professional, structured, and actively contributes to business development.",
                "We make your communication a regular, measurable lever for performance and awareness.",
                "Turns communication into a driver of growth and differentiation.");
            break;
        default:
            renderCard("Marketing & Communication", "Unrecognized score.", "", "");
            break;
    }
}

?>
</div>
<!-- Pillar Score Breakdown Cards -->
<div style="margin-top: 0; margin-bottom: 40px;">
  <?php
  function renderBlockInline($headingKey, $scoreKey, $answersKey, $questionsMap, $icon) {
    if (isset($_SESSION[$headingKey], $_SESSION[$scoreKey], $_SESSION[$answersKey])) {
      echo "
        <div style='background-color: #ffffff; border: 1px solid #d1dbe8; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); padding: 32px; margin-bottom: 40px;'>
          <h2 style='color: #003366; font-size: 20px; font-weight: 700; border-bottom: 2px solid #d1dbe8; padding-bottom: 12px; margin-bottom: 24px;'>
            <span style='display: inline-block; vertical-align: middle; width: 36px; height: 36px; line-height: 36px; border-radius: 50%; background-color: #e8eff7; color: #003366; font-weight: bold; text-align: center; margin-right: 8px;'>$icon</span>
            " . htmlspecialchars($_SESSION[$headingKey]) . "
          </h2>";

      foreach ($_SESSION[$answersKey] as $q => [$response, $score]) {
        $question = $questionsMap[$q] ?? strtoupper($q);
        echo "
          <div style='margin-bottom: 20px; background-color: #f9fbff; border: 1px solid #d1dbe8; border-radius: 10px; padding: 20px;'>
            <div style='color: #003366; font-weight: 600; font-size: 15px; margin-bottom: 6px;'>" . htmlspecialchars($question) . "</div>
            <div style='color: #4a4a4a; margin-bottom: 6px;'><strong>Réponse :</strong> " . htmlspecialchars($response) . "</div>
            <div style='color: #6b7280; font-size: 13px;'>
              <strong>Score :</strong>
              <span style='display: inline-block; background-color: #003366; color: #ffffff; font-size: 12px; font-weight: 600; padding: 4px 10px; border-radius: 9999px; margin-left: 4px;'>$score / 2</span>
            </div>
          </div>";
      }

      echo "
        <div style='color: #003366; font-weight: bold; font-size: 15px; padding-top: 12px; border-top: 1px solid #d1dbe8; text-align: right;'>
          Total des points : " . $_SESSION[$scoreKey] . " / 10
        </div>
      </div>";
    }
  }

    // ✅ Question maps
  $questionsHR = [
    'aq1' => "Onboarding and Recruitment",
'aq2' => "Objectives and Performance",
'aq3' => "HRIS and Payroll",
'aq4' => "Compensation Policy",
'aq5' => "HR Charter and Reference Framework"
  ];
  $questionsAdmin = [
      'bq1' => "Procedure Modeling",
'bq2' => "Task Automation",
'bq3' => "Centralized Document Management",
'bq4' => "Deadline Tracking",
'bq5' => "Administrative Continuity"
  ];
  $questionsIT = [
      'cq1' => "IT Infrastructure",
'cq2' => "Data Backup",
'cq3' => "Collaborative Tools",
'cq4' => "Support and Technology Monitoring",
'cq5' => "Cybersecurity"
  ];
  $questionsAccounting = [
      'dq1' => "Financial Dashboard",
'dq2' => "Billing Process",
'dq3' => "Expense Tracking",
'dq4' => "Financial Forecasting",
'dq5' => "Digital Financial Tools"
  ];
  $questionsMarketing = [
     'cq1' => "Communication Strategy",
'cq2' => "Visual Identity",
'cq3' => "Communication Channels",
'cq4' => "Performance Tracking",
'cq5' => "Action Planning"
  ];

    // Render each pillar section
    renderBlockInline('hr_heading', 'hr_score', 'hr_answers', $questionsHR, '');
    renderBlockInline('admin_heading', 'admin_score', 'admin_answers', $questionsAdmin, '');
    renderBlockInline('it_heading', 'it_score', 'it_answers', $questionsIT, '');
    renderBlockInline('accounting_heading', 'accounting_score', 'accounting_answers', $questionsAccounting, '');
    renderBlockInline('marketing_heading', 'marketing_score', 'marketing_answers', $questionsMarketing, '');
    ?>
  </div>
<!-- Footer -->
<div style="background-color: #3F6893; padding: 40px 0; text-align: center; color: white; font-size: 14px; margin-top: 64px; border-top: 1px solid #d1dbe8;">
  <p style="margin: 0 0 12px 0;">&copy; <?= date('Y') ?> TreeConnect. All rights reserved.</p>
  <p style="margin: 0 0 12px 0;">This message is confidential and intended solely for its recipient. If you are not the intended recipient, please delete it.</p>
  <p style="margin: 0 0 12px 0;color:white!important">TreeConnect Sàrl - contact@treeconnect.ch - ‪+41 78 233 53 17‬</p>
  <div style="margin-top: 12px;">
   <a href="https://www.linkedin.com/company/treeconnect/ ">
        <i class="fa-brands fa-linkedin text-white text-3xl pt-2"></i>
      </a>
  </div>
</div>
</div>
<!-- HTML Email Ends -->

<?php
$mailBody = ob_get_clean();

// ✅ Check if content exists
if (empty(trim($mailBody))) {
    echo json_encode(['success' => false, 'message' => 'Email body is empty']);
    exit;
}

// ✅ Send Email
try {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "treeconnectsarl@gmail.com";
    $mail->Password = "badt nrpr rced uyed";    // Note: consider using env variable
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom('contact@treeconnect.ch', 'Treeconnect');
    $userEmail = $_POST['user_email'] ?? 'fallback@example.com';
    $mail->addAddress('contact@treeconnect.ch', 'Client');
    $mail->addAddress($userEmail, 'Treeconnect');
    $mail->isHTML(true);
    $mail->Subject = '📝 Results of Your Business Diagnosis';
    $mail->Body = $mailBody;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Mail sent successfully']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
?>
