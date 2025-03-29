-- Table user (compte admin de base)
INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `dtype`) VALUES
(1, 'dev@admin.com', '[\"ROLE_ADMIN\"]', '$2a$12$PbgVJo4mLlcjrGd5ryrjAuF/LMcNEwgwbMsFOx0ZCtdZyzvBcZW1y', 'Admin', 'Dev', 'admin');

-- Table admin (lié au user)
INSERT INTO `admin` (`id`) VALUES (1);

-- Catégories d'événements
INSERT INTO `categorie_evenement` (`id`, `name`) VALUES
(9, 'Réunion'),
(10, 'Rencontre'),
(11, 'Assemblée génégrale'),
(12, 'Evenement');

-- Page About
INSERT INTO `page_about` (`id`, `mission_titre`, `mission_text`, `mot_titre`, `mot_contenu`) VALUES
(1, 'Mission de l\'Amicale de MEMBA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec volutpat elit...</p>', 'Quelques mots de la présidente', '\'\'Lorem ipsum dolor sit amet, consectetur adipiscing elit...\'\'');

-- Page Accueil
INSERT INTO `page_accueil` (`id`, `carousel_titre1`, `carousel_titre2`, `carousel_titre3`, `carousel_text1`, `carousel_text2`, `carousel_text3`, `carousel_image1`, `carousel_image2`, `carousel_image3`, `mission_titre`, `mission_text`, `chiffre_alumni`, `chiffre_projet`, `chiffre_fonds`, `chiffre_alumni_text`, `chiffre_projet_text`, `chiffre_fonds_text`, `entreprise_titre`, `entreprise_texte`, `temoignage_auteur1`, `temoignage_auteur2`, `temoignage_auteur3`, `temoignage_auteur4`, `temoignage_titre1`, `temoignage_titre2`, `temoignage_text1`, `temoignage_text2`, `temoignage_text4`, `temoignage_text3`, `membre_titre`, `membre_text`) VALUES
    (1, 'test ', 'LE RESEAU ALUMNI FAIT LE LIEN', 'LE RESEAU ALUMNI FAIT LE LIEN', ' Lorem ipsum dolor...', ' Lorem ipsum dolor...', ' Lorem ipsum dolor...', '62d188adee06f.png', '62d187f3a7b51.png', '62d187f3a8b87.png', 'Mission de l\'Amicale ', '<p>L’Amicale a trois missions principales :</p><ul>...</ul>', '1200', '50000', '50000', 'Lorem ipsum dolor...', 'Lorem ipsum dolor...', 'Lorem ipsum dolor...', 'Vous êtes une entreprise ? oui', 'Lorem ipsum dolor...', 'Nom et prenom', 'Nom et prenom', 'Auteur 3', 'Nom et prenom', 'A.S nous raconte son parcours...', 'A.S nous raconte son parcours...', 'Amet minim mollit non...', 'Amet minim mollit non...', '“ Lorem ipsum dolor...', '“ Lorem ipsum dolor...', 'Vous êtes une ancienne', 'Lorem ipsum dolor...');

-- Partenaires
INSERT INTO `partenaire` (`id`, `nom`, `description`, `logo`, `etat`) VALUES
      (1, 'Hôpital Militaire de Ouakam', 'Hôpital Militaire de Ouakam', '63362e65a298f.png', 1),
      (2, 'AIMES-AFRIQUE SENEGAL', 'AIMES-AFRIQUE SENEGAL', '63362f4ee844f.png', 1);

-- Catégorie produit
INSERT INTO `categorie_produit` (`id`, `libelle`) VALUES (1, 'Categorie Test0');

-- Produit
INSERT INTO `produit` (`id`, `categorie_id`, `libelle`, `prix`, `qte_stock`, `etat`, `description`, `slug`) VALUES
(1, 1, 'Produit Test', 1000, 5, 1, 'Ceci est le test de cette description', 'slugTest');

-- Image
INSERT INTO `image` (`id`, `produit_id`, `evenement_id`, `article_id`, `path`) VALUES
(1, 1, NULL, NULL, 'test.png');

-- Footer
INSERT INTO footer (mail,facebook,instagram,twitter,whatsapp,youtube) VALUES
('contact@amemba.org', 'https://fb.com/Amemba', 'https://instagram.com/Amemba', 'https://twitter.com/Amemba', 'https://wa.me/1234567890', 'https://youtube.com/Amemba'),
('info@amemba.org', 'https://fb.com/AmembaSupport', 'https://instagram.com/AmembaSupport', 'https://twitter.com/AmembaHelp', 'https://wa.me/0987654321', 'https://youtube.com/AmembaTutorials');

-- PostesBureau
INSERT INTO  postes_bureau (id, libelle) VALUES
(1, 'College Présidentes d\'Honneur');
