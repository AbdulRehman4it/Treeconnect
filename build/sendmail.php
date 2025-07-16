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
  <a href="https://treeconnect.fr" target="_blank" style="display: inline-block; background-color: #ffffff; color: #003366; font-size: 14px; font-weight: 600; padding: 10px 24px; border-radius: 8px; text-decoration: none; border: 1px solid #ccc; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    Contactez TreeConnect
  </a>
</div>
<?php if (!empty($_SESSION['companyData'])): ?>
  <div style="background-color: white; border: 1px solid #d1dbe8; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); padding: 40px 24px; margin-bottom: 40px;">
    <h2 style="color: #003366; font-size: 18px; font-weight: 600; border-bottom: 2px solid #d1dbe8; padding-bottom: 8px; margin-bottom: 24px;">
      📊 Données du formulaire (Company Info)
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
            <strong style=\"color: #003366;\">Analyse du niveau de maturité :</strong><br>$level
          </div>
          <div style=\"
            margin-bottom: 16px;
            background-color: #f9fbff;
            border: 1px solid #e1eaf2;
            border-radius: 8px;
            padding: 16px;
          \">
            <strong style=\"color: #003366;\">Accompagnement possible par TreeConnect :</strong><br>$support
          </div>
          <div style=\"
            background-color: #f9fbff;
            border: 1px solid #e1eaf2;
            border-radius: 8px;
            padding: 16px;
          \">
            <strong style=\"color: #003366;\">Impact pour votre organisation :</strong><br>$impact
          </div>
        </div>
      </div>
    ";
  }
if (isset($_SESSION['hr_score'])) {
    switch ($_SESSION['hr_score']) {
        case 0:
        case 1:
            renderCard("Ressources Humaines",
                "Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.",
                "TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.",
                "Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable.");
            break;
        case 2:
            renderCard("Ressources Humaines",
                "Un ou deux aspects RH sont présents de façon ponctuelle, mais l’ensemble reste informel ou dispersé.",
                "Nous pouvons identifier ensemble les priorités RH à structurer rapidement, avec des outils adaptés aux petites équipes.",
                "Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs.");
            break;
        case 3:
            renderCard("Ressources Humaines",
                "Des éléments RH existent (par exemple, contrats ou entretiens), mais sans logique globale.",
                "TreeConnect vous accompagne pour articuler vos pratiques RH autour d’un processus cohérent et duplicable.",
                "Favorise une gestion fluide, même en cas de turnover ou de croissance.");
            break;
        case 4:
            renderCard("Ressources Humaines",
                "Des démarches structurantes sont engagées, mais certains points clés comme l’intégration ou le suivi manquent de régularité.",
                "Nous vous aidons à formaliser des processus simples et reproductibles (fiche de poste, suivi collaborateur, trame d’entretien).",
                "Améliore la cohésion d’équipe et soutient l’engagement au quotidien.");
            break;
        case 5:
            renderCard("Ressources Humaines",
                "Les fondations RH sont bien présentes, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.",
                "TreeConnect peut vous proposer des outils RH légers et automatisés pour centraliser et gagner du temps.",
                "Rend la gestion RH plus fluide et limite les erreurs administratives.");
            break;
        case 6:
            renderCard("Ressources Humaines",
                "Votre approche RH est globalement en place. Une harmonisation et une digitalisation partielle pourraient en renforcer l’efficacité.",
                "Nous accompagnons la transition vers des outils intégrés pour le suivi, les absences ou les entretiens.",
                "Renforce la transparence et professionnalise la gestion interne.");
            break;
        case 7:
            renderCard("Ressources Humaines",
                "Les pratiques RH sont bien posées, avec une organisation visible. Quelques rituels peuvent encore être systématisés.",
                "TreeConnect peut vous aider à structurer les feedbacks réguliers ou à définir des grilles de rémunération plus lisibles.",
                "Favorise la fidélisation et la responsabilisation des équipes.");
            break;
        case 8:
            renderCard("Ressources Humaines",
                "La gestion RH est maîtrisée et adaptée à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.",
                "Nous vous proposons des outils de pilotage RH plus stratégiques (anticipation des besoins, suivi des talents).",
                "Accroît la capacité de projection et soutient le développement à long terme.");
            break;
        case 9:
            renderCard("Ressources Humaines",
                "Vous disposez d’un système RH solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.",
                "TreeConnect peut compléter votre démarche avec des conseils sur la marque employeur ou la culture d’entreprise.",
                "Valorise votre attractivité et soutient votre positionnement RH.");
            break;
        case 10:
            renderCard("Ressources Humaines",
                "Votre gestion RH est structurée, fluide et exemplaire. C’est un socle fort pour la stabilité et la croissance.",
                "TreeConnect peut nourrir votre réflexion stratégique RH à travers des benchmarks ou des outils avancés.",
                "Vous êtes en position d’attirer, engager et faire évoluer les bons profils.");
            break;
        default:
            renderCard("Ressources Humaines", "Score non reconnu.", "", "");
            break;
    }
}
if (isset($_SESSION['admin_score'])) {
    switch ($_SESSION['admin_score']) {
        case 0:
            renderCard("Administration & Back-Office",
                "Un ou deux outils administratifs sont utilisés ponctuellement, mais l’ensemble reste informel ou dispersé.",
                "Nous pouvons identifier ensemble les priorités à structurer avec des outils adaptés aux petites équipes.",
                "Apporte de la sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs.");
            break;
        case 1:
            renderCard("Administration & Back-Office",
                "Les processus administratifs ne sont pas encore formalisés. C’est un domaine structurable progressivement.",
                "TreeConnect peut vous aider à cartographier les fonctions clés et poser les bases de procédures simples.",
                "Établit un socle clair et évite les oublis critiques.");
            break;
        case 2:
            renderCard("Administration & Back-Office",
                "Certains documents ou tâches sont suivis de manière ponctuelle, sans méthode claire ou partagée.",
                "Nous pouvons vous proposer des trames adaptées à votre activité pour structurer progressivement vos flux administratifs.",
                "Aide à structurer les opérations du quotidien pour gagner du temps et mieux répartir les responsabilités.");
            break;
        case 3:
            renderCard("Administration & Back-Office",
                "Certains processus existent mais sont traités isolément, souvent par une seule personne.",
                "TreeConnect vous accompagne pour formaliser les pratiques et garantir la continuité des tâches, même en cas d’absence.",
                "Renforce la résilience organisationnelle et réduit la dépendance aux personnes clés.");
            break;
        case 4:
            renderCard("Administration & Back-Office",
                "Une organisation de base est présente mais repose encore plus sur les habitudes que sur des procédures écrites.",
                "Nous vous aidons à formaliser vos routines sous forme de procédures simples, avec des outils numériques de base.",
                "Stabilise l’activité administrative et facilite l’intégration de nouveaux membres dans l’équipe.");
            break;
        case 5:
            renderCard("Administration & Back-Office",
                "Des efforts de structuration sont engagés, mais leur application reste irrégulière.",
                "TreeConnect propose des outils accessibles pour renforcer et harmoniser vos pratiques.",
                "Améliore la régularité du suivi et garantit une meilleure traçabilité des informations.");
            break;
        case 6:
            renderCard("Administration & Back-Office",
                "Plusieurs procédures sont en place et suivies, avec des outils numériques partiellement intégrés.",
                "Nous vous aidons à intégrer des outils simples pour visualiser, suivre et automatiser certaines tâches.",
                "Fait gagner du temps et réduit les tâches répétitives ou manuelles.");
            break;
        case 7:
            renderCard("Administration & Back-Office",
                "L’organisation administrative est bien définie mais pourrait être mieux centralisée ou automatisée.",
                "TreeConnect vous aide à centraliser les informations et créer des référentiels partagés et à jour.",
                "Facilite le partage d’informations et réduit les frictions internes.");
            break;
        case 8:
            renderCard("Administration & Back-Office",
                "Les procédures sont documentées, les outils sont en place et l’information est bien partagée.",
                "Nous vous aidons à consolider vos outils numériques et à fluidifier les processus de validation et d’archivage.",
                "Facilite la collaboration et donne de la visibilité sur l’avancement administratif.");
            break;
        case 9:
            renderCard("Administration & Back-Office",
                "L’administration est fluide, proactive et peu dépendante d’une seule personne.",
                "TreeConnect vous aide à maintenir ce niveau d’efficacité en cas de changement d’équipe ou de croissance.",
                "Libère du temps pour se concentrer sur des tâches à plus forte valeur ajoutée.");
            break;
        case 10:
            renderCard("Administration & Back-Office",
                "L’organisation administrative est complète, claire et sécurisée. Elle soutient directement la performance globale.",
                "Nous valorisons votre système actuel et proposons des leviers pour automatiser les tâches à faible valeur ajoutée.",
                "Soutient la continuité opérationnelle et la gestion efficace de l’entreprise.");
            break;
        default:
            renderCard("Administration & Back-Office", "Score non reconnu.", "", "");
            break;
    }
}
if (isset($_SESSION['it_score'])) {
    switch ($_SESSION['it_score']) {
        case 0:
            renderCard("IT & Cybersécurité",
                "Un ou deux outils numériques sont utilisés ponctuellement, mais l’ensemble reste informel ou dispersé.",
                "Nous pouvons identifier les priorités numériques à structurer rapidement, avec des outils adaptés aux petites équipes.",
                "Apporte de la sérénité pour les usages de base et prépare l’arrivée de nouveaux collaborateurs.");
            break;
        case 1:
            renderCard("IT & Cybersécurité",
                "Des outils numériques sont utilisés ponctuellement, sans réelle structure ni mesures de sécurité.",
                "TreeConnect peut vous aider à évaluer votre configuration informatique et vos outils digitaux.",
                "Pose un socle clair et fiable pour les usages numériques quotidiens.");
            break;
        case 2:
            renderCard("IT & Cybersécurité",
                "Un environnement informatique de base existe mais est mal entretenu ou incohérent.",
                "Nous vous aidons à construire un environnement numérique cohérent et évolutif.",
                "Soutient un cadre de travail plus structuré et sécurisé.");
            break;
        case 3:
            renderCard("IT & Cybersécurité",
                "Des pratiques numériques sont en place, mais leur fiabilité et leur cohérence doivent être renforcées.",
                "TreeConnect propose des solutions simples pour sécuriser, centraliser et faire évoluer votre système numérique.",
                "Réduit les erreurs, les pertes d’informations et les interruptions liées à l’informatique.");
            break;
        case 4:
            renderCard("IT & Cybersécurité",
                "L’infrastructure informatique est fonctionnelle mais repose sur des habitudes ou des outils non intégrés.",
                "Nous vous aidons à mettre en place des outils collaboratifs et des règles d’usage partagées.",
                "Améliore l’efficacité des équipes et la continuité opérationnelle.");
            break;
        case 5:
            renderCard("IT & Cybersécurité",
                "Des outils numériques et des pratiques de sécurité sont présents, mais leur utilisation reste irrégulière.",
                "TreeConnect peut vous accompagner dans le choix et le déploiement d’outils adaptés à vos activités.",
                "Limite les risques de cybersécurité et facilite les opérations internes.");
            break;
        case 6:
            renderCard("IT & Cybersécurité",
                "L’environnement informatique est globalement stable, avec un début de structuration et de documentation.",
                "Nous renforçons vos pratiques de cybersécurité et la documentation technique interne.",
                "Améliore la stabilité du système et l’aisance des équipes avec les outils numériques.");
            break;
        case 7:
            renderCard("IT & Cybersécurité",
                "L’environnement informatique est bien structuré et couvre la majorité des besoins quotidiens.",
                "TreeConnect propose des solutions robustes pour maintenir un système fluide et sécurisé.",
                "Améliore la productivité globale et la sécurité de l’organisation.");
            break;
        case 8:
            renderCard("IT & Cybersécurité",
                "Les outils numériques sont cohérents, sécurisés et adaptés aux usages internes comme externes.",
                "Nous optimisons votre infrastructure digitale pour garantir son évolutivité et sa résilience.",
                "Permet de croître et d’évoluer sans perturbations techniques.");
            break;
        case 9:
            renderCard("IT & Cybersécurité",
                "Votre environnement IT est sécurisé et efficace, avec des pratiques de suivi régulières.",
                "TreeConnect vous aide à mettre en place des audits réguliers et des politiques de sécurité avancées.",
                "Protège les données de l’entreprise et sa réputation sur le long terme.");
            break;
        case 10:
            renderCard("IT & Cybersécurité",
                "Votre système informatique est fiable, tourné vers l’avenir et soutient à la fois l’efficacité et l’innovation.",
                "Nous positionnons votre système IT comme un levier de performance, de réputation et d’innovation durable.",
                "Fait de votre environnement digital un véritable avantage stratégique pour l’avenir.");
            break;
        default:
            renderCard("IT & Cybersécurité", "Score non reconnu.", "", "");
            break;
    }
}
if (isset($_SESSION['accounting_score'])) {
    switch ($_SESSION['accounting_score']) {
        case 0:
            renderCard("Comptabilité & Finance",
                "Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.",
                "TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.",
                "Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances.");
            break;
        case 1:
            renderCard("Comptabilité & Finance",
                "Le suivi financier est très limité voire inexistant. Il représente un levier stratégique à développer.",
                "TreeConnect peut vous aider à mettre en place les premiers indicateurs financiers adaptés à votre entreprise.",
                "Établit une base solide pour sécuriser la trésorerie et anticiper les échéances.");
            break;
        case 2:
            renderCard("Comptabilité & Finance",
                "Les données financières sont suivies ponctuellement, sans cadre régulier ni indicateurs définis.",
                "Nous vous aidons à structurer vos flux financiers (facturation, paiements, relances) et à identifier les bons indicateurs.",
                "Rend les flux financiers plus lisibles et limite les retards ou oublis de paiements.");
            break;
        case 3:
            renderCard("Comptabilité & Finance",
                "Une gestion financière de base existe, mais elle repose sur des outils manuels ou des routines informelles.",
                "TreeConnect propose des outils simples et automatisés pour assurer un suivi fiable de la trésorerie et des marges.",
                "Garantit des données fiables et améliore la prise de décision.");
            break;
        case 4:
            renderCard("Comptabilité & Finance",
                "Les documents financiers sont disponibles, mais leur utilisation et interprétation restent partielles.",
                "Nous vous aidons à construire des tableaux de bord financiers accessibles pour appuyer les décisions.",
                "Apporte une vision concrète et structurée des ressources financières disponibles.");
            break;
        case 5:
            renderCard("Comptabilité & Finance",
                "Des indicateurs clés sont suivis, mais ils ne sont pas toujours à jour ni exploités pour la prise de décision.",
                "TreeConnect peut renforcer vos pratiques de suivi avec des modèles adaptés à votre secteur.",
                "Favorise une lecture régulière et utile de la performance économique.");
            break;
        case 6:
            renderCard("Comptabilité & Finance",
                "Le suivi financier est régulier et basé sur des tableaux de bord ou outils simples.",
                "Nous vous accompagnons dans l’automatisation partielle des processus financiers avec des outils interconnectés.",
                "Fait gagner du temps dans la gestion financière quotidienne.");
            break;
        case 7:
            renderCard("Comptabilité & Finance",
                "La trésorerie et les données financières sont bien organisées et utilisées pour orienter les décisions.",
                "TreeConnect vous aide à relier vos données financières à vos décisions opérationnelles.",
                "Améliore les capacités de projection et le contrôle des coûts et des revenus.");
            break;
        case 8:
            renderCard("Comptabilité & Finance",
                "Votre gestion financière est structurée, avec une vue claire et à jour de la situation de l’entreprise.",
                "Nous facilitons la mise en place d’outils de prévision et d’analyse pour accompagner votre croissance.",
                "Aide à anticiper les périodes critiques ou les besoins d’investissement.");
            break;
        case 9:
            renderCard("Comptabilité & Finance",
                "Vous gérez activement vos marges, votre trésorerie et vos investissements, en anticipant les enjeux financiers.",
                "TreeConnect vous accompagne sur la stratégie de gestion des marges, des investissements et des risques financiers.",
                "Renforce la résilience financière et la stratégie globale de l’entreprise.");
            break;
        case 10:
            renderCard("Comptabilité & Finance",
                "Votre pilotage financier est précis, stratégique et intégré à la gouvernance globale.",
                "Nous vous aidons à renforcer votre système actuel et à contribuer à son évolution stratégique.",
                "Fait de la gestion financière un levier de maîtrise, d’optimisation et de croissance.");
            break;
        default:
            renderCard("Comptabilité & Finance", "Score non reconnu.", "", "");
            break;
    }
}
if (isset($_SESSION['marketing_score'])) {
    switch ($_SESSION['marketing_score']) {
        case 0:
            renderCard("Marketing & Communication",
                "Le sujet est peu traité, avec peu d’actions lisibles ou visibles à ce jour.",
                "Nous aidons à identifier les actions prioritaires pour clarifier le positionnement et structurer les premières communications.",
                "Pose les bases d’une communication utile et accessible.");
            break;
        case 1:
            renderCard("Marketing & Communication",
                "Aucune stratégie de communication structurée n’est mise en place à ce jour.",
                "TreeConnect peut vous aider à poser les bases d’une stratégie de visibilité adaptée à votre activité.",
                "Établit un socle cohérent et accessible pour votre visibilité.");
            break;
        case 2:
            renderCard("Marketing & Communication",
                "Quelques actions sont menées ponctuellement, sans direction claire.",
                "Nous vous aidons à identifier les bons canaux et messages clés à structurer.",
                "Clarifie le positionnement et l’offre auprès des publics cibles.");
            break;
        case 3:
            renderCard("Marketing & Communication",
                "Certains canaux ou supports sont utilisés, mais sans cohérence ni stratégie définie.",
                "TreeConnect vous accompagne pour construire une identité cohérente et une routine de communication de base.",
                "Renforce la cohérence de la présence en ligne et hors ligne.");
            break;
        case 4:
            renderCard("Marketing & Communication",
                "Des éléments de base sont présents (logo, site web, réseaux sociaux), mais sous-exploités.",
                "Nous vous aidons à valoriser vos supports existants et à les aligner à une approche stratégique.",
                "Structure l’image de marque et améliore la lisibilité de l’entreprise.");
            break;
        case 5:
            renderCard("Marketing & Communication",
                "Une stratégie existe en arrière-plan, mais elle n’est pas formalisée ni suivie de manière régulière.",
                "TreeConnect vous propose une formalisation claire de votre stratégie marketing et de vos cibles.",
                "Permet de concentrer les efforts de communication et d’en mesurer les retours.");
            break;
        case 6:
            renderCard("Marketing & Communication",
                "La communication est partiellement planifiée, la cohérence est en construction.",
                "Nous vous aidons à mettre en place un calendrier éditorial et des indicateurs de performance simples.",
                "Fait gagner du temps et construit des habitudes de communication.");
            break;
        case 7:
            renderCard("Marketing & Communication",
                "L’identité de marque est claire et les canaux sont utilisés de manière organisée.",
                "TreeConnect renforce votre stratégie de contenu et l’activation des canaux.",
                "Améliore la portée des messages et la cohérence de la marque.");
            break;
        case 8:
            renderCard("Marketing & Communication",
                "La stratégie de communication est claire et alignée avec vos objectifs et votre positionnement.",
                "Nous affinons votre positionnement et optimisons vos supports pour maximiser l’impact.",
                "Renforce la crédibilité et l’attractivité de l’entreprise.");
            break;
        case 9:
            renderCard("Marketing & Communication",
                "Les actions sont cohérentes, suivies, et ajustées en fonction des résultats mesurés.",
                "TreeConnect vous aide à piloter votre visibilité avec des tableaux de bord adaptés à vos objectifs.",
                "Aligne la communication sur les priorités commerciales et RH.");
            break;
        case 10:
            renderCard("Marketing & Communication",
                "Votre communication est professionnelle, structurée et contribue activement au développement de l’activité.",
                "Nous faisons de votre communication un levier régulier, mesurable de performance et de notoriété.",
                "Fait de la communication un moteur de croissance et de différenciation.");
            break;
        default:
            renderCard("Marketing & Communication", "Score non reconnu.", "", "");
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

    // Question Maps (Unchanged)
    $questionsHR = [ 'aq1' => "Onboarding et Recrutement", 'aq2' => "Objectifs et Performance ", 'aq3' => "SIRH et Paie", 'aq4' => "Politique de Rémunération", 'aq5' => "Charte et référentiel RH" ];
    $questionsAdmin = [ 'bq1' => "Modélisation des procédures", 'bq2' => "Automatisation des tâches ", 'bq3' => "Organisation documentaire centralisée", 'bq4' => "Suivi des échéances ", 'bq5' => "Continuité administrative" ];
    $questionsIT = [ 'cq1' => " Infrastructure informatique ", 'cq2' => "Sauvegarde des données ", 'cq3' => "Outils collaboratifs ", 'cq4' => "Accompagnement et veille technologique ", 'cq5' => " Cybersécurité " ];
    $questionsAccounting = [ 'dq1' => "Tableau de bord financier", 'dq2' => "Processus de facturation", 'dq3' => "Suivi des charges", 'dq4' => "Prévisions financières", 'dq5' => "Outils financiers digitaux" ];
    $questionsMarketing = [ 'cq1' => "Stratégie de communication ", 'cq2' => "Identité visuelle", 'cq3' => "Canaux de communication", 'cq4' => "Suivi des résultats ", 'cq5' => " Planification des actions" ];

    // Render each pillar section
    renderBlockInline('hr_heading', 'hr_score', 'hr_answers', $questionsHR, '👥');
    renderBlockInline('admin_heading', 'admin_score', 'admin_answers', $questionsAdmin, '📁');
    renderBlockInline('it_heading', 'it_score', 'it_answers', $questionsIT, '💻');
    renderBlockInline('accounting_heading', 'accounting_score', 'accounting_answers', $questionsAccounting, '📊');
    renderBlockInline('marketing_heading', 'marketing_score', 'marketing_answers', $questionsMarketing, '📣');
    ?>
  </div>
<!-- Footer -->
<div style="background-color: #3F6893; padding: 40px 0; text-align: center; color: white; font-size: 14px; margin-top: 64px; border-top: 1px solid #d1dbe8;">
  <p style="margin: 0 0 12px 0;">&copy; <?= date('Y') ?> TreeConnect. Tous droits réservés.</p>
  <div style="margin-top: 12px;">
    <a href="https://linkedin.com/company/treeconnect" target="_blank" style="display: inline-block; margin: 0 10px;">
      <img src="https://cdn-icons-png.flaticon.com/24/174/174857.png" alt="LinkedIn" style="width: 24px; height: 24px; vertical-align: middle;">
    </a>
    <a href="https://twitter.com/treeconnect" target="_blank" style="display: inline-block; margin: 0 10px;">
      <img src="https://cdn-icons-png.flaticon.com/24/733/733579.png" alt="Twitter" style="width: 24px; height: 24px; vertical-align: middle;">
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
