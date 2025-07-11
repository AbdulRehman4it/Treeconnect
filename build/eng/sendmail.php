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
<div style="font-family: 'Segoe UI', sans-serif; background-color: #f4f6fb; color: #333; padding: 40px; line-height: 1.6;">
  <?php if (!empty($_SESSION['companyData'])): ?>
    <h2 style="color: #003366; border-bottom: 2px solid #d1dbe8; padding-bottom: 8px; margin-bottom: 20px;">🗂 Form Submission Data (Company Info)</h2>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 40px; font-size: 15px;">
      <?php foreach ($_SESSION['companyData'] as [$label, $value]): ?>
        <tr>
          <td style="background-color: #e8eff7; border: 1px solid #d1dbe8; padding: 12px 16px; font-weight: bold; color: #003366;"><?= htmlspecialchars($label) ?></td>
          <td style="border: 1px solid #d1dbe8; padding: 12px 16px; background-color: #ffffff;"><?= htmlspecialchars($value) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

  <table style="width: 100%; border-collapse: collapse; font-size: 14px; color: #333; margin-bottom: 40px;">
    <thead style="background-color: #e0e8f3; color: #003366;">
      <tr>
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">Domain</th>
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">Structural Maturity Overview</th>
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">How TreeConnect can support</th>
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">Business Value</th>
      </tr>
    </thead>
    <tbody style="background-color: #ffffff;">
    <?php
if (isset($_SESSION['hr_score'])) {
    echo "<tr>";
    $commonStyle = "border: 1px solid white; padding: 12px 32px;";

    switch ($_SESSION['hr_score']) {
        case 0:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.</td>";
            echo "<td style='$commonStyle'>TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable.</td>";
            break;
        case 1:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>HR processes are not yet formalized. This pillar represents a good opportunity for structuring.</td>";
            echo "<td style='$commonStyle'>TreeConnect can help you lay the groundwork for a simple, tailored HR foundation.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Clarifies roles, ensures compliance, and builds the foundation for a stable team.</td>";
            break;
        case 2:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>One or two HR elements are present on a case-by-case basis, but overall the approach remains informal or fragmented.</td>";
            echo "<td style='$commonStyle'>We can work with you to identify and prioritize key HR areas and select tools adapted to small teams.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Increases peace of mind on legal obligations and supports future team growth.</td>";
            break;
        case 3:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>Some HR components exist (e.g., contracts or reviews), but there is no overall logic behind them yet.</td>";
            echo "<td style='$commonStyle'>TreeConnect supports you in aligning your existing practices into a coherent, replicable HR process.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Supports smooth HR management, even during transitions or rapid growth.</td>";
            break;
        case 4:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>Structuring efforts have begun, but key aspects such as onboarding or performance reviews lack consistency.</td>";
            echo "<td style='$commonStyle'>We assist you in formalizing easy-to-use, reproducible HR processes (job descriptions, feedback templates, onboarding flows).</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Enhances team cohesion and promotes daily engagement.</td>";
            break;
        case 5:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>The HR foundation is in place with several working elements. Some areas can be optimized.</td>";
            echo "<td style='$commonStyle'>TreeConnect offers lightweight, automated HR tools to help you centralize and save time.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Streamlines HR operations and minimizes administrative errors.</td>";
            break;
        case 6:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>Your HR approach is generally implemented. Harmonization and partial digitalization could enhance efficiency.</td>";
            echo "<td style='$commonStyle'>We guide you in transitioning to integrated tools for tracking time off, evaluations, and contracts.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Improves transparency and professionalizes internal processes.</td>";
            break;
        case 7:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>HR practices are clearly defined and visible. A few rituals can still be systematized.</td>";
            echo "<td style='$commonStyle'>TreeConnect helps you structure regular feedback and define transparent compensation guidelines.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Encourages employee retention and accountability.</td>";
            break;
        case 8:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>HR management is well under control and aligned with your needs. Minor improvements can enhance agility.</td>";
            echo "<td style='$commonStyle'>We offer strategic HR management tools (talent tracking, workforce forecasting, etc.).</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Boosts foresight and supports long-term development.</td>";
            break;
        case 9:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>You have a solid, well-integrated HR system. Only minor adjustments are needed to reach excellence.</td>";
            echo "<td style='$commonStyle'>TreeConnect complements your existing setup with employer branding or culture development support.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Strengthens your HR positioning and employer appeal.</td>";
            break;
        case 10:
            echo "<td style='$commonStyle'>Human Resources</td>";
            echo "<td style='$commonStyle'>Your HR system is structured, smooth, and exemplary. It provides a strong foundation for stability and growth.</td>";
            echo "<td style='$commonStyle'>TreeConnect can support your strategic HR reflection through benchmarks and advanced tools.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Positions you to attract, engage, and grow the right talent.</td>";
            break;
        default:
            echo "<td colspan='3' style='$commonStyle'>Score not recognized.</td>";
            break;
    }

    echo "</tr>";
}
?>

<?php
if (isset($_SESSION['admin_score'])) {
    echo "<tr>";
    $baseStyle = "border: 1px solid white; padding: 8px 32px;";
    $lastColStyle = "border-right: none; border: 1px solid white; padding: 8px 32px;";
    switch ($_SESSION['admin_score']) {
        case 0:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>One or two administrative tools are used occasionally, but everything remains informal or scattered.</td>";
            echo "<td style='$baseStyle'>We can identify structuring priorities together with tools tailored to small teams.</td>";
            echo "<td style='$lastColStyle'>Gains peace of mind on basic obligations and prepares for the arrival of new employees.</td>";
            break;
        case 1:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Administrative processes are not yet formalized. This is an area that can be gradually structured.</td>";
            echo "<td style='$baseStyle'>TreeConnect can help you map out key functions and establish the foundation for simple procedures.</td>";
            echo "<td style='$lastColStyle'>Establishes a clear foundation and avoids critical oversights.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Some documents or tasks are tracked occasionally, but without a clear or shared method.</td>";
            echo "<td style='$baseStyle'>We can offer templates tailored to your business to gradually structure your administrative flows.</td>";
            echo "<td style='$lastColStyle'>Helps structure daily operations to save time and distribute responsibilities more effectively.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Certain processes exist, but they are handled in isolation, often by a single person.</td>";
            echo "<td style='$baseStyle'>TreeConnect supports you in formalizing practices and ensuring task continuity even during staff absences.</td>";
            echo "<td style='$lastColStyle'>Strengthens organizational resilience and reduces key-person dependencies.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Basic organization is present but still relies more on habits than written procedures.</td>";
            echo "<td style='$baseStyle'>We assist in translating your routines into simple procedures, with basic digital tooling.</td>";
            echo "<td style='$lastColStyle'>Stabilizes administrative activity and eases the onboarding of new team members.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Structuring efforts have begun, but their application remains inconsistent.</td>";
            echo "<td style='$baseStyle'>TreeConnect provides accessible tools to reinforce your practices and make them more consistent.</td>";
            echo "<td style='$lastColStyle'>Improves consistency in tracking and ensures better traceability of information.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Several procedures are in place and followed, with some digital tools supporting them.</td>";
            echo "<td style='$baseStyle'>We support the integration of simple tools to visualize, track, and automate certain tasks.</td>";
            echo "<td style='$lastColStyle'>Saves time and reduces repetitive or manual tasks.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Administrative organization is well defined but could benefit from better centralization or automation.</td>";
            echo "<td style='$baseStyle'>TreeConnect helps centralize your information and create shared, up-to-date references.</td>";
            echo "<td style='$lastColStyle'>Facilitates information sharing and minimizes internal friction.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Procedures are documented, tools are in place, and information is well shared.</td>";
            echo "<td style='$baseStyle'>We assist in consolidating your digital tools and streamlining validation and archiving processes.</td>";
            echo "<td style='$lastColStyle'>Streamlines collaboration and provides visibility over administrative progress.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Administration is smooth, proactive, and not overly dependent on a single individual.</td>";
            echo "<td style='$baseStyle'>TreeConnect helps you maintain this level of efficiency through team changes or growth.</td>";
            echo "<td style='$lastColStyle'>Frees up the team to focus on higher value tasks.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Administrative organization is complete, clear, and secure. It directly supports overall performance.</td>";
            echo "<td style='$baseStyle'>We enhance your current system and can suggest additions to automate low-value tasks.</td>";
            echo "<td style='$lastColStyle'>Supports operational continuity and efficient business management.</td>";
            break;
        default:
            echo "<td colspan='4' style='$baseStyle'>Score not recognized.</td>";
            break;
    }
    echo "</tr>";
}
?>
<?php
if (isset($_SESSION['it_score'])) {
    echo "<tr>";
    $baseStyle = "border: 1px solid white; padding: 8px 32px;";
    $lastColStyle = "border-right: none; border: 1px solid white; padding: 8px 32px;";
    
    switch ($_SESSION['it_score']) {
        case 0:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>One or two IT tools are used occasionally, but everything remains informal or scattered.</td>";
            echo "<td style='$baseStyle'>We can identify digital priorities to quickly structure, using tools tailored to small teams.</td>";
            echo "<td style='$lastColStyle'>Gains peace of mind for basic usage and prepares for the arrival of new employees.</td>";
            break;
        case 1:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>Digital tools are used occasionally, without real structure or security measures.</td>";
            echo "<td style='$baseStyle'>TreeConnect can help you assess your IT setup and digital tools.</td>";
            echo "<td style='$lastColStyle'>Lays a clear and reliable foundation for everyday digital usage.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>A basic IT environment exists but is poorly maintained or inconsistent.</td>";
            echo "<td style='$baseStyle'>We assist in building a coherent and scalable digital environment.</td>";
            echo "<td style='$lastColStyle'>Supports a more structured and secure work environment.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>Digital practices are in place, but their reliability and coherence need improvement.</td>";
            echo "<td style='$baseStyle'>TreeConnect offers simple solutions to secure, centralize, and evolve your digital system.</td>";
            echo "<td style='$lastColStyle'>Reduces errors, information loss, and IT-related interruptions.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>The IT infrastructure is functional but relies on habits or unintegrated tools.</td>";
            echo "<td style='$baseStyle'>We help implement collaborative tools and shared usage policies.</td>";
            echo "<td style='$lastColStyle'>Improves team efficiency and operational continuity.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>Digital tools and security practices are present, but their usage is inconsistent.</td>";
            echo "<td style='$baseStyle'>TreeConnect can support you in selecting and deploying tools suited to your operations.</td>";
            echo "<td style='$lastColStyle'>Limits cybersecurity risks and facilitates internal operations.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>The IT environment is generally stable with some early consolidation and documentation.</td>";
            echo "<td style='$baseStyle'>We strengthen your cybersecurity practices and internal technical documentation.</td>";
            echo "<td style='$lastColStyle'>Enhances system stability and team proficiency with digital tools.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>The IT setup is well structured and meets most daily needs.</td>";
            echo "<td style='$baseStyle'>TreeConnect provides robust solutions to maintain a smooth and secure IT system.</td>";
            echo "<td style='$lastColStyle'>Improves overall productivity and organizational security.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>Digital tools are coherent, secure, and suited to internal and client uses.</td>";
            echo "<td style='$baseStyle'>We optimize your digital infrastructure to ensure scalability and resilience.</td>";
            echo "<td style='$lastColStyle'>Enables growth and evolution without technical disruption.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>Your IT environment is secure and efficient, with regular monitoring practices.</td>";
            echo "<td style='$baseStyle'>TreeConnect helps implement regular audits and advanced security policies.</td>";
            echo "<td style='$lastColStyle'>Protects company data and reputation over the long term.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>IT & Cybersecurity</td>";
            echo "<td style='$baseStyle'>Your IT system is reliable, forward-thinking, and supports both efficiency and innovation.</td>";
            echo "<td style='$baseStyle'>We position your IT system as a driver of performance, reputation, and sustainable innovation.</td>";
            echo "<td style='$lastColStyle'>Turns your digital system into a strategic advantage for the future.</td>";
            break;
        default:
            echo "<td colspan='4' style='$baseStyle'>Score not recognized.</td>";
            break;
    }
    echo "</tr>";
}
?>

<?php
if (isset($_SESSION['accounting_score'])) {
    echo "<tr>";
    $baseStyle = "border: 1px solid white; padding: 8px 32px;";
    $lastColStyle = "border-right: none; border: 1px solid white; padding: 8px 32px;";
    
    switch ($_SESSION['accounting_score']) {
        case 0:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.</td>";
            echo "<td style='$lastColStyle'>Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances.</td>";
            break;
        case 1:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Financial monitoring is very limited or non-existent. It represents a key area for strategic development.</td>";
            echo "<td style='$baseStyle'>TreeConnect can support you in setting up initial financial indicators tailored to your business.</td>";
            echo "<td style='$lastColStyle'>Establishes a solid foundation to secure cash flow and anticipate deadlines.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Financial data is tracked occasionally, without a regular framework or defined indicators.</td>";
            echo "<td style='$baseStyle'>We help structure your financial flows (invoicing, payments, reminders) and identify relevant KPIs.</td>";
            echo "<td style='$lastColStyle'>Makes financial flows clearer and reduces late or missed payments.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Basic financial management exists but relies on manual tools or informal routines.</td>";
            echo "<td style='$baseStyle'>TreeConnect offers simple and automated tools to ensure reliable tracking of cash flow and margins.</td>";
            echo "<td style='$lastColStyle'>Ensures reliable financial data and improves decision-making.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Financial documents are available, but their use and interpretation remain partial.</td>";
            echo "<td style='$baseStyle'>We assist in building accessible financial dashboards that support decision-making.</td>";
            echo "<td style='$lastColStyle'>Provides a concrete and structured view of available financial resources.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Key indicators are tracked but not always updated or used for decision-making.</td>";
            echo "<td style='$baseStyle'>TreeConnect can enhance your tracking practices with templates adapted to your industry.</td>";
            echo "<td style='$lastColStyle'>Encourages regular and useful reading of economic performance.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Financial tracking is regular and based on simple dashboards or tools.</td>";
            echo "<td style='$baseStyle'>We support the partial automation of financial processes using interconnected tools.</td>";
            echo "<td style='$lastColStyle'>Saves time in the day-to-day financial management.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Cash flow and data are well organized and used to support decisions.</td>";
            echo "<td style='$baseStyle'>TreeConnect helps connect your financial data to operational decision-making.</td>";
            echo "<td style='$lastColStyle'>Improves projection capabilities and control over costs and revenue.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Your financial management is structured, with a clear and updated overview of company finances.</td>";
            echo "<td style='$baseStyle'>We facilitate the setup of forecasting and analysis tools to support your growth.</td>";
            echo "<td style='$lastColStyle'>Helps anticipate critical periods or investment needs.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>You proactively manage margins, cash flow, and investments with anticipation of financial challenges.</td>";
            echo "<td style='$baseStyle'>TreeConnect offers strategic support to manage margins, investments, and financial risks.</td>";
            echo "<td style='$lastColStyle'>Strengthens financial resilience and overall business strategy.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>Accounting & Finance</td>";
            echo "<td style='$baseStyle'>Your financial steering is precise, strategic, and integrated into overall business governance.</td>";
            echo "<td style='$baseStyle'>We help enhance your current financial steering system and contribute to its strategic evolution.</td>";
            echo "<td style='$lastColStyle'>Turns financial management into a driver for control, optimization, and growth.</td>";
            break;
        default:
            echo "<td colspan='4' style='$baseStyle'>Score non reconnu.</td>";
            break;
    }
    echo "</tr>";
}
?>
<?php
if (isset($_SESSION['marketing_score'])) {
    echo "<tr>";
    $baseStyle = "border: 1px solid white; padding: 8px 32px;";
    $lastColStyle = "border-right: none; border: 1px solid white; padding: 8px 32px;";
    
    switch ($_SESSION['marketing_score']) {
        case 0:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Le sujet est peu traité, avec peu d’actions lisibles ou visibles à ce jour.</td>";
            echo "<td style='$baseStyle'>Nous aidons à identifier les actions prioritaires pour clarifier le positionnement et structurer les premières communications.</td>";
            echo "<td style='$lastColStyle'>Pose les bases d’une communication utile et accessible.</td>";
            break;
        case 1:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>No structured communication strategy is currently in place.</td>";
            echo "<td style='$baseStyle'>TreeConnect can help you lay the foundation of a visibility strategy tailored to your business.</td>";
            echo "<td style='$lastColStyle'>Establishes the foundation for coherent and accessible visibility.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Some actions are taken occasionally, without a clear direction.</td>";
            echo "<td style='$baseStyle'>We work with you to identify the right channels and key messages to structure.</td>";
            echo "<td style='$lastColStyle'>Clarifies positioning and offer to target audiences.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Some channels or materials are used, but without consistency or defined strategy.</td>";
            echo "<td style='$baseStyle'>TreeConnect supports you in building a coherent identity and a basic communication routine.</td>";
            echo "<td style='$lastColStyle'>Increases consistency in online and offline presence.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Basic elements are in place (logo, website, social media), but they are underutilized.</td>";
            echo "<td style='$baseStyle'>We help enhance your existing assets and align them with a strategic approach.</td>";
            echo "<td style='$lastColStyle'>Structures the brand image and improves company readability.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>A strategy exists in the background, but it is not formalized or consistently followed.</td>";
            echo "<td style='$baseStyle'>TreeConnect offers clear formalization of your marketing strategy and target audiences.</td>";
            echo "<td style='$lastColStyle'>Helps focus communication efforts and measure returns.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Communication is partially planned, with coherence still in development.</td>";
            echo "<td style='$baseStyle'>We assist with implementing an editorial calendar and basic performance indicators.</td>";
            echo "<td style='$lastColStyle'>Saves time and builds communication routines.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>The brand identity is clear and channels are used in an organized way.</td>";
            echo "<td style='$baseStyle'>TreeConnect strengthens your content strategy and channel activation.</td>";
            echo "<td style='$lastColStyle'>Improves message reach and brand consistency.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>The communication strategy is clear and aligned with your goals and positioning.</td>";
            echo "<td style='$baseStyle'>We refine your positioning and optimize your materials to increase impact.</td>";
            echo "<td style='$lastColStyle'>Enhances the company’s credibility and appeal.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Actions are consistent, tracked, and adjusted based on measured results.</td>";
            echo "<td style='$baseStyle'>TreeConnect helps you manage your visibility with dashboards aligned to your objectives.</td>";
            echo "<td style='$lastColStyle'>Aligns communication with commercial and HR priorities.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Your communication is professional, structured, and actively contributes to business growth.</td>";
            echo "<td style='$baseStyle'>We turn your communication into a regular, measurable driver of performance and brand awareness.</td>";
            echo "<td style='$lastColStyle'>Turns communication into a growth and differentiation engine.</td>";
            break;
        default:
            echo "<td colspan='4' style='$baseStyle'>Score non reconnu.</td>";
            break;
    }
    echo "</tr>";
}
?>
      </tbody>
    </table>
 

 <?php
  function renderBlockInline($headingKey, $scoreKey, $answersKey, $questionsMap, $icon) {
      if (isset($_SESSION[$headingKey], $_SESSION[$scoreKey], $_SESSION[$answersKey])) {
          echo "<h2 style='color:#003366; margin-top: 40px; border-bottom: 2px solid #d1dbe8; padding-bottom: 8px;'>$icon " . htmlspecialchars($_SESSION[$headingKey]) . "</h2>";
          echo "<table style='width:100%; border-collapse:collapse; margin-bottom:20px; font-size: 14px;'>
                  <thead>
                    <tr style='background-color: #e8eff7; color: #003366;'>
                      <th style='padding:12px; border:1px solid #d1dbe8;'>Question</th>
                      <th style='padding:12px; border:1px solid #d1dbe8;'>Answer</th>
                      <th style='padding:12px; border:1px solid #d1dbe8;'>Score</th>
                    </tr>
                  </thead>
                  <tbody>";
          foreach ($_SESSION[$answersKey] as $q => [$response, $score]) {
              $question = $questionsMap[$q] ?? strtoupper($q);
              echo "<tr>
                      <td style='border:1px solid #d1dbe8; padding:12px; background-color:#f9fbff;'>" . htmlspecialchars($question) . "</td>
                      <td style='border:1px solid #d1dbe8; padding:12px; background-color:#ffffff;'>" . htmlspecialchars($response) . "</td>
                      <td style='border:1px solid #d1dbe8; padding:12px; background-color:#ffffff;'>$score</td>
                    </tr>";
          }
          echo "</tbody></table>";
          echo "<div style='font-weight: bold; margin-bottom: 40px; color: #003366;'>Total points: " . $_SESSION[$scoreKey] . " / 10</div>";
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

  renderBlockInline('hr_heading', 'hr_score', 'hr_answers', $questionsHR, '👥');
  renderBlockInline('admin_heading', 'admin_score', 'admin_answers', $questionsAdmin, '📁');
  renderBlockInline('it_heading', 'it_score', 'it_answers', $questionsIT, '💻');
  renderBlockInline('accounting_heading', 'accounting_score', 'accounting_answers', $questionsAccounting, '📊');
  renderBlockInline('marketing_heading', 'marketing_score', 'marketing_answers', $questionsMarketing, '📣');
  ?>
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
    $mail->Username = "abdulrehman226721skp@gmail.com";
    $mail->Password = "puhd yvrw nfth uzgp";  // Note: consider using env variable
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
