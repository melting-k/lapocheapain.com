<?php
    
$META_author = 'La Poche à Pain';

switch ($PAGE_name) {
    case 'accueil':
        $META_title = "Sacs à pain publicitaires | La Poche à Pain";
        $META_description = "La Poche à Pain : impression de publicité sur sacs à pain. Découvrez un support de communication impactant & innovant !";
        break;
    case 'concept':
        $META_title = "La publicité sur sacs à pain : comment ça marche ?";
        $META_description = "Découvrez le concept de la poche à pain publicitaire : un support efficace pour vos campagnes de communication, pour un ciblage très précis de vos prospects";
        break;
    case 'realisations':
        $META_title = "Les campagnes de communication sur sacs à pain que nous avons réalisé";
        $META_description = "Pour avoir un aperçu des campagnes de communication que nous avons réalisé pour nos clients et connaitre nos références, visionnez notre galerie de réalisations";
        break;
    case 'contact':
        $META_title = "Demandez un devis pour votre campagne de communication sur sacs à pain";
        $META_description = "Notre support de communication vous intéresse ? Demandez-nous un devis pour l'impression de votre campagne de communication sur sacs à pain !";
        break;
    case 'mentions':
        $META_title = "Les mentions légales et politique de confidentialité de notre site";
        $META_description = "Les informations et mentions légales de notre site internet www.lapocheapain.com, ainsi que notre politique de confidentialité pour la protection de vos données";
        break;
    default:
        $META_description = '';
        $META_title = '';
}

//*******************************
// Navigation du site
//*******************************

$NAV_accueil = 'index.php';
$NAV_TITLE_accueil = 'La Poche à Pain - Publicité sur sacs à pain';

$NAV_concept = 'le-concept-de-sac-a-pain-publicitaire.php';
$NAV_TITLE_concept = 'Le sac à pain publicitaire : qu\'est-ce que c\'est ?';

$NAV_realisations = 'nos-campagnes-de-communication-sur-sac-a-pain.php';
$NAV_TITLE_realisations = 'Découvrez nos clients et nos références';

$NAV_contact = 'demande-de-devis-sac-a-pain-publicitaire.php';
$NAV_TITLE_contact = 'Demandez-nous un devis pour l\'impression de vos sacs à pain';

$NAV_mentions = 'mentions-legales.php';
$NAV_TITLE_mentions = 'Mentions légales et politique de confidentialité';

?>