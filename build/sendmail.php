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
    <h2 style="color: #003366; border-bottom: 2px solid #d1dbe8; padding-bottom: 8px; margin-bottom: 20px;">🗂 Données du formulaire (Company Info)</h2>
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
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">Domaine évalué</th>
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">Analyse du niveau de maturité</th>
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">Accompagnement possible par TreeConnect</th>
        <th style="border: 1px solid #d1dbe8; padding: 14px 24px;">Impact pour votre organisation</th>
      </tr>
    </thead>
    <tbody style="background-color: #ffffff;">
<?php
if (isset($_SESSION['hr_score'])) {
    echo "<tr>";
    $commonStyle = "border: 1px solid white; padding: 12px 32px;";

    switch ($_SESSION['hr_score']) {
        case 0:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.</td>";
            echo "<td style='$commonStyle'>TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable.</td>";
            break;
        case 1:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.</td>";
            echo "<td style='$commonStyle'>TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable.</td>";
            break;
        case 2:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Un ou deux aspects RH sont présents de façon ponctuelle, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td style='$commonStyle'>Nous pouvons identifier ensemble les priorités RH à structurer rapidement, avec des outils adaptés aux petites équipes.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 3:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Des éléments RH existent (par exemple, contrats ou entretiens), mais sans logique globale.</td>";
            echo "<td style='$commonStyle'>TreeConnect vous accompagne pour articuler vos pratiques RH autour d’un processus cohérent et duplicable.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Favorise une gestion fluide, même en cas de turnover ou de croissance.</td>";
            break;
        case 4:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Des démarches structurantes sont engagées, mais certains points clés comme l’intégration ou le suivi manquent de régularité.</td>";
            echo "<td style='$commonStyle'>Nous vous aidons à formaliser des processus simples et reproductibles (fiche de poste, suivi collaborateur, trame d’entretien).</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Améliore la cohésion d’équipe et soutient l’engagement au quotidien.</td>";
            break;
        case 5:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Les fondations RH sont bien présentes, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.</td>";
            echo "<td style='$commonStyle'>TreeConnect peut vous proposer des outils RH légers et automatisés pour centraliser et gagner du temps.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Rend la gestion RH plus fluide et limite les erreurs administratives.</td>";
            break;
        case 6:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Votre approche RH est globalement en place. Une harmonisation et une digitalisation partielle pourraient en renforcer l’efficacité.</td>";
            echo "<td style='$commonStyle'>Nous accompagnons la transition vers des outils intégrés pour le suivi, les absences ou les entretiens.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Renforce la transparence et professionnalise la gestion interne.</td>";
            break;
        case 7:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Les pratiques RH sont bien posées, avec une organisation visible. Quelques rituels peuvent encore être systématisés.</td>";
            echo "<td style='$commonStyle'>TreeConnect peut vous aider à structurer les feedbacks réguliers ou à définir des grilles de rémunération plus lisibles.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Favorise la fidélisation et la responsabilisation des équipes.</td>";
            break;
        case 8:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>La gestion RH est maîtrisée et adaptée à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.</td>";
            echo "<td style='$commonStyle'>Nous vous proposons des outils de pilotage RH plus stratégiques (anticipation des besoins, suivi des talents).</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Accroît la capacité de projection et soutient le développement à long terme.</td>";
            break;
        case 9:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Vous disposez d’un système RH solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.</td>";
            echo "<td style='$commonStyle'>TreeConnect peut compléter votre démarche avec des conseils sur la marque employeur ou la culture d’entreprise.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Valorise votre attractivité et soutient votre positionnement RH.</td>";
            break;
        case 10:
            echo "<td style='$commonStyle'>Ressources Humaines</td>";
            echo "<td style='$commonStyle'>Votre gestion RH est structurée, fluide et exemplaire. C’est un socle fort pour la stabilité et la croissance.</td>";
            echo "<td style='$commonStyle'>TreeConnect peut nourrir votre réflexion stratégique RH à travers des benchmarks ou des outils avancés.</td>";
            echo "<td style='$commonStyle; border-right: 0;'>Vous êtes en position d’attirer, engager et faire évoluer les bons profils.</td>";
            break;
        default:
            echo "<td colspan='3' style='$commonStyle'>Score non reconnu.</td>";
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
            echo "<td style='$baseStyle'>Un ou deux outils administratifs sont utilisés ponctuellement, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td style='$baseStyle'>Nous pouvons identifier ensemble les priorités à structurer avec des outils adaptés aux petites équipes.</td>";
            echo "<td style='$lastColStyle'>Apporte de la sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 1:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Les processus administratifs ne sont pas encore formalisés. C’est un domaine structurable progressivement.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut vous aider à cartographier les fonctions clés et poser les bases de procédures simples.</td>";
            echo "<td style='$lastColStyle'>Établit un socle clair et évite les oublis critiques.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Certains documents ou tâches sont suivis de manière ponctuelle, sans méthode claire ou partagée.</td>";
            echo "<td style='$baseStyle'>Nous pouvons vous proposer des trames adaptées à votre activité pour structurer progressivement vos flux administratifs.</td>";
            echo "<td style='$lastColStyle'>Aide à structurer les opérations du quotidien pour gagner du temps et mieux répartir les responsabilités.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Certains processus existent mais sont traités isolément, souvent par une seule personne.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous accompagne pour formaliser les pratiques et garantir la continuité des tâches, même en cas d’absence.</td>";
            echo "<td style='$lastColStyle'>Renforce la résilience organisationnelle et réduit la dépendance aux personnes clés.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Une organisation de base est présente mais repose encore plus sur les habitudes que sur des procédures écrites.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à formaliser vos routines sous forme de procédures simples, avec des outils numériques de base.</td>";
            echo "<td style='$lastColStyle'>Stabilise l’activité administrative et facilite l’intégration de nouveaux membres dans l’équipe.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Des efforts de structuration sont engagés, mais leur application reste irrégulière.</td>";
            echo "<td style='$baseStyle'>TreeConnect propose des outils accessibles pour renforcer et harmoniser vos pratiques.</td>";
            echo "<td style='$lastColStyle'>Améliore la régularité du suivi et garantit une meilleure traçabilité des informations.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Plusieurs procédures sont en place et suivies, avec des outils numériques partiellement intégrés.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à intégrer des outils simples pour visualiser, suivre et automatiser certaines tâches.</td>";
            echo "<td style='$lastColStyle'>Fait gagner du temps et réduit les tâches répétitives ou manuelles.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>L’organisation administrative est bien définie mais pourrait être mieux centralisée ou automatisée.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous aide à centraliser les informations et créer des référentiels partagés et à jour.</td>";
            echo "<td style='$lastColStyle'>Facilite le partage d’informations et réduit les frictions internes.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>Les procédures sont documentées, les outils sont en place et l’information est bien partagée.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à consolider vos outils numériques et à fluidifier les processus de validation et d’archivage.</td>";
            echo "<td style='$lastColStyle'>Facilite la collaboration et donne de la visibilité sur l’avancement administratif.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>L’administration est fluide, proactive et peu dépendante d’une seule personne.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous aide à maintenir ce niveau d’efficacité en cas de changement d’équipe ou de croissance.</td>";
            echo "<td style='$lastColStyle'>Libère du temps pour se concentrer sur des tâches à plus forte valeur ajoutée.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>Administration & Back-Office</td>";
            echo "<td style='$baseStyle'>L’organisation administrative est complète, claire et sécurisée. Elle soutient directement la performance globale.</td>";
            echo "<td style='$baseStyle'>Nous valorisons votre système actuel et proposons des leviers pour automatiser les tâches à faible valeur ajoutée.</td>";
            echo "<td style='$lastColStyle'>Soutient la continuité opérationnelle et la gestion efficace de l’entreprise.</td>";
            break;
        default:
            echo "<td colspan='4' style='$baseStyle'>Score non reconnu.</td>";
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
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Un ou deux outils numériques sont utilisés ponctuellement, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td style='$baseStyle'>Nous pouvons identifier les priorités numériques à structurer rapidement, avec des outils adaptés aux petites équipes.</td>";
            echo "<td style='$lastColStyle'>Apporte de la sérénité pour les usages de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 1:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Des outils numériques sont utilisés ponctuellement, sans réelle structure ni mesures de sécurité.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut vous aider à évaluer votre configuration informatique et vos outils digitaux.</td>";
            echo "<td style='$lastColStyle'>Pose un socle clair et fiable pour les usages numériques quotidiens.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Un environnement informatique de base existe mais est mal entretenu ou incohérent.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à construire un environnement numérique cohérent et évolutif.</td>";
            echo "<td style='$lastColStyle'>Soutient un cadre de travail plus structuré et sécurisé.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Des pratiques numériques sont en place, mais leur fiabilité et leur cohérence doivent être renforcées.</td>";
            echo "<td style='$baseStyle'>TreeConnect propose des solutions simples pour sécuriser, centraliser et faire évoluer votre système numérique.</td>";
            echo "<td style='$lastColStyle'>Réduit les erreurs, les pertes d’informations et les interruptions liées à l’informatique.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>L’infrastructure informatique est fonctionnelle mais repose sur des habitudes ou des outils non intégrés.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à mettre en place des outils collaboratifs et des règles d’usage partagées.</td>";
            echo "<td style='$lastColStyle'>Améliore l’efficacité des équipes et la continuité opérationnelle.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Des outils numériques et des pratiques de sécurité sont présents, mais leur utilisation reste irrégulière.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut vous accompagner dans le choix et le déploiement d’outils adaptés à vos activités.</td>";
            echo "<td style='$lastColStyle'>Limite les risques de cybersécurité et facilite les opérations internes.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>L’environnement informatique est globalement stable, avec un début de structuration et de documentation.</td>";
            echo "<td style='$baseStyle'>Nous renforçons vos pratiques de cybersécurité et la documentation technique interne.</td>";
            echo "<td style='$lastColStyle'>Améliore la stabilité du système et l’aisance des équipes avec les outils numériques.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>L’environnement informatique est bien structuré et couvre la majorité des besoins quotidiens.</td>";
            echo "<td style='$baseStyle'>TreeConnect propose des solutions robustes pour maintenir un système fluide et sécurisé.</td>";
            echo "<td style='$lastColStyle'>Améliore la productivité globale et la sécurité de l’organisation.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Les outils numériques sont cohérents, sécurisés et adaptés aux usages internes comme externes.</td>";
            echo "<td style='$baseStyle'>Nous optimisons votre infrastructure digitale pour garantir son évolutivité et sa résilience.</td>";
            echo "<td style='$lastColStyle'>Permet de croître et d’évoluer sans perturbations techniques.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Votre environnement IT est sécurisé et efficace, avec des pratiques de suivi régulières.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous aide à mettre en place des audits réguliers et des politiques de sécurité avancées.</td>";
            echo "<td style='$lastColStyle'>Protège les données de l’entreprise et sa réputation sur le long terme.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>IT & Cybersécurité</td>";
            echo "<td style='$baseStyle'>Votre système informatique est fiable, tourné vers l’avenir et soutient à la fois l’efficacité et l’innovation.</td>";
            echo "<td style='$baseStyle'>Nous positionnons votre système IT comme un levier de performance, de réputation et d’innovation durable.</td>";
            echo "<td style='$lastColStyle'>Fait de votre environnement digital un véritable avantage stratégique pour l’avenir.</td>";
            break;
        default:
            echo "<td colspan='4' style='$baseStyle'>Score non reconnu.</td>";
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
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.</td>";
            echo "<td style='$lastColStyle'>Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances.</td>";
            break;
        case 1:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Le suivi financier est très limité voire inexistant. Il représente un levier stratégique à développer.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut vous aider à mettre en place les premiers indicateurs financiers adaptés à votre entreprise.</td>";
            echo "<td style='$lastColStyle'>Établit une base solide pour sécuriser la trésorerie et anticiper les échéances.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Les données financières sont suivies ponctuellement, sans cadre régulier ni indicateurs définis.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à structurer vos flux financiers (facturation, paiements, relances) et à identifier les bons indicateurs.</td>";
            echo "<td style='$lastColStyle'>Rend les flux financiers plus lisibles et limite les retards ou oublis de paiements.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Une gestion financière de base existe, mais elle repose sur des outils manuels ou des routines informelles.</td>";
            echo "<td style='$baseStyle'>TreeConnect propose des outils simples et automatisés pour assurer un suivi fiable de la trésorerie et des marges.</td>";
            echo "<td style='$lastColStyle'>Garantit des données fiables et améliore la prise de décision.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Les documents financiers sont disponibles, mais leur utilisation et interprétation restent partielles.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à construire des tableaux de bord financiers accessibles pour appuyer les décisions.</td>";
            echo "<td style='$lastColStyle'>Apporte une vision concrète et structurée des ressources financières disponibles.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Des indicateurs clés sont suivis, mais ils ne sont pas toujours à jour ni exploités pour la prise de décision.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut renforcer vos pratiques de suivi avec des modèles adaptés à votre secteur.</td>";
            echo "<td style='$lastColStyle'>Favorise une lecture régulière et utile de la performance économique.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Le suivi financier est régulier et basé sur des tableaux de bord ou outils simples.</td>";
            echo "<td style='$baseStyle'>Nous vous accompagnons dans l’automatisation partielle des processus financiers avec des outils interconnectés.</td>";
            echo "<td style='$lastColStyle'>Fait gagner du temps dans la gestion financière quotidienne.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>La trésorerie et les données financières sont bien organisées et utilisées pour orienter les décisions.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous aide à relier vos données financières à vos décisions opérationnelles.</td>";
            echo "<td style='$lastColStyle'>Améliore les capacités de projection et le contrôle des coûts et des revenus.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Votre gestion financière est structurée, avec une vue claire et à jour de la situation de l’entreprise.</td>";
            echo "<td style='$baseStyle'>Nous facilitons la mise en place d’outils de prévision et d’analyse pour accompagner votre croissance.</td>";
            echo "<td style='$lastColStyle'>Aide à anticiper les périodes critiques ou les besoins d’investissement.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Vous gérez activement vos marges, votre trésorerie et vos investissements, en anticipant les enjeux financiers.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous accompagne sur la stratégie de gestion des marges, des investissements et des risques financiers.</td>";
            echo "<td style='$lastColStyle'>Renforce la résilience financière et la stratégie globale de l’entreprise.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>Comptabilité & Finance</td>";
            echo "<td style='$baseStyle'>Votre pilotage financier est précis, stratégique et intégré à la gouvernance globale.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à renforcer votre système actuel et à contribuer à son évolution stratégique.</td>";
            echo "<td style='$lastColStyle'>Fait de la gestion financière un levier de maîtrise, d’optimisation et de croissance.</td>";
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
            echo "<td style='$baseStyle'>Aucune stratégie de communication structurée n’est mise en place à ce jour.</td>";
            echo "<td style='$baseStyle'>TreeConnect peut vous aider à poser les bases d’une stratégie de visibilité adaptée à votre activité.</td>";
            echo "<td style='$lastColStyle'>Établit un socle cohérent et accessible pour votre visibilité.</td>";
            break;
        case 2:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Quelques actions sont menées ponctuellement, sans direction claire.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à identifier les bons canaux et messages clés à structurer.</td>";
            echo "<td style='$lastColStyle'>Clarifie le positionnement et l’offre auprès des publics cibles.</td>";
            break;
        case 3:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Certains canaux ou supports sont utilisés, mais sans cohérence ni stratégie définie.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous accompagne pour construire une identité cohérente et une routine de communication de base.</td>";
            echo "<td style='$lastColStyle'>Renforce la cohérence de la présence en ligne et hors ligne.</td>";
            break;
        case 4:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Des éléments de base sont présents (logo, site web, réseaux sociaux), mais sous-exploités.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à valoriser vos supports existants et à les aligner à une approche stratégique.</td>";
            echo "<td style='$lastColStyle'>Structure l’image de marque et améliore la lisibilité de l’entreprise.</td>";
            break;
        case 5:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Une stratégie existe en arrière-plan, mais elle n’est pas formalisée ni suivie de manière régulière.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous propose une formalisation claire de votre stratégie marketing et de vos cibles.</td>";
            echo "<td style='$lastColStyle'>Permet de concentrer les efforts de communication et d’en mesurer les retours.</td>";
            break;
        case 6:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>La communication est partiellement planifiée, la cohérence est en construction.</td>";
            echo "<td style='$baseStyle'>Nous vous aidons à mettre en place un calendrier éditorial et des indicateurs de performance simples.</td>";
            echo "<td style='$lastColStyle'>Fait gagner du temps et construit des habitudes de communication.</td>";
            break;
        case 7:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>L’identité de marque est claire et les canaux sont utilisés de manière organisée.</td>";
            echo "<td style='$baseStyle'>TreeConnect renforce votre stratégie de contenu et l’activation des canaux.</td>";
            echo "<td style='$lastColStyle'>Améliore la portée des messages et la cohérence de la marque.</td>";
            break;
        case 8:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>La stratégie de communication est claire et alignée avec vos objectifs et votre positionnement.</td>";
            echo "<td style='$baseStyle'>Nous affinons votre positionnement et optimisons vos supports pour maximiser l’impact.</td>";
            echo "<td style='$lastColStyle'>Renforce la crédibilité et l’attractivité de l’entreprise.</td>";
            break;
        case 9:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Les actions sont cohérentes, suivies, et ajustées en fonction des résultats mesurés.</td>";
            echo "<td style='$baseStyle'>TreeConnect vous aide à piloter votre visibilité avec des tableaux de bord adaptés à vos objectifs.</td>";
            echo "<td style='$lastColStyle'>Aligne la communication sur les priorités commerciales et RH.</td>";
            break;
        case 10:
            echo "<td style='$baseStyle'>Marketing & Communication</td>";
            echo "<td style='$baseStyle'>Votre communication est professionnelle, structurée et contribue activement au développement de l’activité.</td>";
            echo "<td style='$baseStyle'>Nous faisons de votre communication un levier régulier, mesurable de performance et de notoriété.</td>";
            echo "<td style='$lastColStyle'>Fait de la communication un moteur de croissance et de différenciation.</td>";
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
                      <th style='padding:12px; border:1px solid #d1dbe8;'>Réponse</th>
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
          echo "<div style='font-weight: bold; margin-bottom: 40px; color: #003366;'>Total des points: " . $_SESSION[$scoreKey] . " / 10</div>";
      }
  }

  // ✅ Question maps
  $questionsHR = [
      'aq1' => "Onboarding et Recrutement",
      'aq2' => "Objectifs et Performance ",
      'aq3' => "SIRH et Paie",
      'aq4' => "Politique de Rémunération",
      'aq5' => "Charte et référentiel RH"
  ];
  $questionsAdmin = [
      'bq1' => "Modélisation des procédures",
      'bq2' => "Automatisation des tâches ",
      'bq3' => "Organisation documentaire centralisée",
      'bq4' => "Suivi des échéances ",
      'bq5' => "Continuité administrative"
  ];
  $questionsIT = [
      'cq1' => " Infrastructure informatique ",
      'cq2' => "Sauvegarde des données ",
      'cq3' => "Outils collaboratifs ",
      'cq4' => "Accompagnement et veille technologique ",
      'cq5' => " Cybersécurité "
  ];
  $questionsAccounting = [
      'dq1' => "Tableau de bord financier",
      'dq2' => "Processus de facturation",
      'dq3' => "Suivi des charges",
      'dq4' => "Prévisions financières",
      'dq5' => "Outils financiers digitaux"
  ];
  $questionsMarketing = [
      'cq1' => "Stratégie de communication ",
      'cq2' => "Identité visuelle",
      'cq3' => "Canaux de communication",
      'cq4' => "Suivi des résultats ",
      'cq5' => " Planification des actions"
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
    $mail->Subject = '📝 Résultats du Diagnostic de votre entreprise';
    $mail->Body = $mailBody;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Mail sent successfully']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
?>
