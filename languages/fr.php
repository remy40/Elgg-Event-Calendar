<?php
$language = array (
  'tag_names:event_tags' => 'Mots-clés',
  'event_calendar:optional' => 'Optionnel.',
  'event_calendar:required' => 'Requis.',
  'event_calendar:add_to_my_calendar_error' => 'Cet évènement ne peut pas être ajouté à votre agenda personnel. (Peut être que l\'évènement est complet ou qu\'il est prévu en même temps qu\'un autre évènement de votre agenda personnel ?)',
  'event_calendar:add_to_the_calendar' => 'Ajouter à l\'agenda',
  'event_calendar:remove_from_the_calendar' => 'Supprimer',
  'event_calendar:add_to_the_calendar_menu_text' => 'Ajouter à mon agenda',
  'event_calendar:remove_from_the_calendar_menu_text' => 'Supprimer de mon agenda',
  'event_calendar:remove_from_the_calendar_button' => 'Supprimer de l\'agenda',
  'event_calendar:added_to_the_calendar' => 'Ajouté à l\'agenda',
  'event_calendar:removed_from_the_calendar' => 'Supprimé de l\'agenda',
  'event_calendar:add_to_the_calendar_response' => 'Evènement ajouté à l\'agenda de cette personne.',
  'event_calendar:add_to_the_calendar_error' => 'Cet évènement ne peut pas être ajouté à l\'agenda de cette personne. (Peut être que l\'évènement est complet ou qu\'il est prévu en même temps qu\'un autre évènement de l\'agenda de cette personne ?)',
  'event_calendar:remove_from_the_calendar_response' => 'Evènement supprimé de l\'agenda de cette personne.',
  'event_calendar:users_for_event_menu_title' => 'Ces personnes ont ajouté l\'évènement à leur agenda',
  'event_calendar:personal_event_calendars_link_one' => 'Dans 1 agenda',
  'event_calendar:users_for_event_breadcrumb' => 'Agendas personnels',
  'event_calendar:settings:agenda' => 'agenda',
  'event_calendar:settings:full' => 'vue complète',
  'event_calendar:settings:spots_display:title' => 'Ajouter un champ quota pour chaque évènement pour permettre de limiter le nombre de personnes qui peuvent ajouter l\'évènement à leur agenda.',
  'event_calendar:settings:no_collisions:title' => 'Détection de collision: prévenir les personnes de l\'ajout de 2 évènements qui ont lieu en même temps dans leur agenda',
  'event_calendar:settings:collision_length:title' => 'Combien de temps (en secondes) devrait durer un évènement dont la date de fin n\'est pas spécifiée (utilisé pour la détection de collision). Par defaut, 3600 secondes = 1 heure.',
  'event_calendar:spots_label' => 'Quotas',
  'event_calendar:spots_description' => 'Combien de personnes sont autorisées à ajouter cet évènement à ler agenda ?',
  'event_calendar:open' => 'Ouvert',
  'event_calendar:settings:add_users:title' => 'Autoriser le créateur de l\'évènement et les administrateurs du site à ajouter leurs évènements aux agendas d\'autres personnes.',
  'event_calendar:add_user_label' => 'Ajouter des utilisateurs',
  'event_calendar:add_user_description' => 'Ajoutez cet événement aux agendas personnels en tapant quelques caractères dans le zone de complétion automatique pour sélectionner un utilisateur. Vous pouvez ajouter plusieurs utilisateurs en cliquant sur le lien "+". (Vous devez valider le formulaire pour ajouter l\'événement aux agendas).',
  'event_calendar:settings:add_users_notify:title' => 'Envoyer un email aux utilisateurs qui ont eu un événement ajouté dans leur agenda personnel par un administrateur ou le créateur de l\'événement.',
  'event_calendar:add_users_notify:subject' => 'Un nouvel événement a été ajouté à votre agenda personnel',
  'event_calendar:add_users_notify:body' => '%s,

L\'événement "%s" a été ajouté à votre agenda.

Vous pouvez le voir ici: 

%s',
  'event_calendar:settings:region_list_handles:title' => 'Les noms de régions ci-dessous sont des identifiants de traduction. Utilisez le système de traduction de Elgg.',
  'event_calendar:settings:type_list_handles:title' => 'Les noms de type ci-dessous sont des identifiants de traduction. Utilisez le système de traduction de Elgg.',
  'event_calendar:settings:personal_manage:title' => 'Droits d\'accès de l\'agenda',
  'event_calendar:settings:personal_manage:description' => 'Ouvert : l\'utilisateur peut ajouter l\'événement à son agenda,
Sur invitation: l\'utilisateur doit demander confirmation au créateur de l\'événement
Privé: l\'utilisateur ne peut pas ajouter l\'événement à son agenda
Par événement : laisser le créateur de l\'événement choisir.
Si vous choisissez l\'option "Privé", vous devrais activer l\'option ci-dessus pour permettre aux créateurs des événements et aux administrateurs du site, de pouvoir ajouter des événements aux agendas personnels des utilisateurs.',
  'event_calendar:strapline' => '%s ajouté par %s',
  'event_calendar:request_event_response' => 'Votre demande d\'inscription à l\'événement a été envoyée.',
  'event_calendar:request_event_error' => 'Erreur: impossible d\'envoyer votre demande d\'inscription à l\'événement.',
  'event_calendar:request_subject' => 'Vous avez reçu une demande d\'invitation',
  'event_calendar:request_message' => '%s a demandé à être inscrit à l\'événement "%s" :

%s

Vous pouvez gérer les demandes d\'inscription pour cet événement ici :

%s',
  'event_calendar:review_requests_error' => 'Cet événement n\'existe pas, ou vous n\'avez pas l\'accès pour accepter les demandes d\'inscription.',
  'event_calendar:review_requests_request_none' => 'Il n\'y a aucune demande d\'inscription pour cet événement.',
  'event_calendar:request:remove:check' => 'Etes-vous sûr de vouloir refuser cette demande d\'inscription?',
  'event_calendar:requestkilled' => 'Cette demande d\'inscription a été rejetée.',
  'event_calendar:request_approved' => 'Cette demande d\'inscription a été acceptée.',
  'event_calendar:review_requests_title' => 'Demandes d\'inscription pour "%s"',
  'event_calendar:review_requests_menu_title' => 'Demandes d\'inscription',
  'event_calendar:make_request_title' => 'Demandes d\'inscription pour cet événement',
  'event_calendar:review_requests:reject' => 'Rejeter',
  'event_calendar:review_requests:reject:title' => 'Rejeter cette demande d\'inscription',
  'event_calendar:review_requests:accept' => 'Accepter',
  'event_calendar:review_requests:accept:title' => 'Accepter cette demande d\'inscription',
  'event_calendar:review_requests:error:approve' => 'Erreur: impossible d\'accepter cette demande d\'inscription.',
  'event_calendar:review_requests:error:reject' => 'Erreur: impossible de rejeter cette demande d\'inscription.',
  'event_calendar:settings:hide_access:title' => 'Masquer la liste d\'accès à l\'événement',
  'event_calendar:settings:default_access:title' => 'Si le niveau d\'accès à l\'événement est masqué, quel doit-il être par défaut?',
  'event_calendar:settings:hide_end:title' => 'Masquer les champs heure et date de fin',
  'event_calendar:settings:more_required:title' => 'Rendre tous les champs visibles requis, à part la description longue.',
  'event_calendar:add_to_group:remove_group_title' => 'Supprimer cet événement du groupe.',
  'event_calendar:add_to_group:remove_group_button' => 'Supprimer du groupe',
  'event_calendar:remove_from_group:success' => 'Evénement supprimé de l\'agenda du groupe',
  'event_calendar:add_to_group:add_group_title' => 'Ajouter cet événement au groupe',
  'event_calendar:add_to_group:add_group_button' => 'Ajouter au groupe',
  'event_calendar:add_to_group:success' => 'Evénement ajouté à l\'agenda du groupe',
  'event_calendar:settings:add_to_group_calendar:title' => 'Autoriser les administrateurs de groupe d\'ajouter n\'importe quel événement à l\'agenda du groupe',
  'event_calendar:group_breadcrumb' => 'Agenda du groupe',
  'event_calendar:no_group' => 'Groupe introuvable',
  'event_calendar:generic_error_title' => 'Erreur',
  'event_calendar:error_event_edit' => 'Erreur: événement inexistant ou vous n\'avez pas accès à cet événement.',
  'event_calendar:add' => 'Ajouter',
  'feed:ical' => 'iCal feed pour cette page',
  'event_calendar:ical_popup_message' => 'Vous pouvez utiliser l\'URL suivante pour avoir un iCalendar feed des événements publics de la page:',
  'event_calendar:ical_auth_file_name:title' => 'Chemin du fichier d\'authentification iCal sur votre système de fichiers local (expérimental - non nécessaire pour les feeds publics)',
  'event_calendar:owner:permissions_error' => 'Vous n\'avez pas la permission de voir cette page.',
  'event_calendar:feature_not_activated' => 'Cette fonctionnalité n\'est pas activée.',
  'event_calendar:show_all' => 'Voir tous',
  'event_calendar:show_open' => 'Voir les ouverts',
  'event_calendar:show_mine' => 'Mon agenda',
  'event_calendar:show_friends' => 'Les agendas de mes amis',
  'event_calendar:show_only' => 'Afficher seulement ceux:',
  'event_calendar:listing_title:all' => 'Tous les événements',
  'event_calendar:listing_title:open' => 'Evénements ouverts',
  'event_calendar:listing_title:mine' => 'Mon agenda',
  'event_calendar:listing_title:friends' => 'Agendas de mes amis',
  'event_calendar:manage_users:title' => 'Gérer les inscriptions pour "%s"',
  'event_calendar:manage_users:breadcrumb' => 'Gérer les inscriptions',
  'event_calendar:manage_users:description' => 'Ajouter ou supprimer des événements des agendas personnels.',
  'event_calendar:manage_users:unauthorized' => 'Erreur: vous n\'êtes pas autorisé à gérer les agendas personnels pour cet événement.',
  'event_calendar:add_to_group_members:success' => 'Cet événement a été ajouté aux agendas personnels de tous les membres du groupe.',
  'event_calendar:add_to_group_members:error' => 'Erreur: impossible d\'ajouter cet événement aux agendas personnels de tous les membres du groupe.',
  'event_calendar:remove_from_group_members:success' => 'Cet événement a été supprimé des agendas personnels de tous les membres du groupe.',
  'event_calendar:remove_from_group_members:error' => 'Erreur: impossible de supprimer cet événement des agendas personnels de tous les membres du groupe.',
  'event_calendar:add_to_group_members:button' => 'Ajouter à tous',
  'event_calendar:remove_from_group_members:button' => 'Supprimer de tous',
  'event_calendar:manage_subscribers:success' => 'Agendas personnels mis à jour.',
  'event_calendar:manage_subscribers:error' => 'Erreur: impossible de mettre à jour les agendas personnels.',
  'event_calendar:personal_manage:open' => 'ouvert',
  'event_calendar:personal_manage:closed' => 'sur inscription',
  'event_calendar:personal_manage:private' => 'privé',
  'event_calendar:personal_manage:by_event' => 'par événement',
  'event_calendar:personal_manage:label' => 'Agendas personnels',
  'event_calendar:personal_manage:description' => 'Détermine comment les utilisateurs peuvent ajouter l\'événement à leur agenda.
Ouvert: sans restriction.
Sur inscription: nécessite une demande d\'inscription.
Privé: seuls les créateurs de l\'événement et les administrateurs du site peuvent ajouter l\'événement aux agendas personnels.',
  'event_calendar:personal_manage:by_event:open' => 'Ouvert. Les utilisateurs peuvent librement ajouter cet événement à leurs agendas personnels;',
  'event_calendar:personal_manage:by_event:closed' => 'Sur inscription. Les utilisateurs doivent envoyer une demande d\'inscription pour ajouter cet événement à leurs agendas personnels; Vous pouvez lire et accepter ces demandes.',
  'event_calendar:personal_manage:by_event:private' => 'Privé. Seuls les créateurs de l\'événement ou les administrateurs du site peuvent ajouter l\'événement aux agendas personnels.',
  'event_calendar:settings:full_calendar:title' => 'Support de l\'agenda complet',
  'event_calendar:modify_full_calendar:error' => 'Erreur: impossible de modifier l\'agenda complet',
  'event_calendar:from_label' => 'Du:',
  'event_calendar:to_label' => 'Au:',
  'event_calendar:settings:timeformat:title' => 'Format de temps',
  'event_calendar:time_format:12hour' => '12 heurs (am/pm)',
  'event_calendar:time_format:24hour' => '24 heures',
  'event_calendar:all_day_label' => 'Evénement sur toute la journée',
  'event_calendar:repeat_interval_label' => 'Répéter chaque',
  'event_calendar:repeat_weeks' => 'semaine(s)',
  'event_calendar:on_these_days' => 'les jours :',
  'event_calendar:day_abbrev:monday' => 'M',
  'event_calendar:day_abbrev:tuesday' => 'T',
  'event_calendar:day_abbrev:wednesday' => 'W',
  'event_calendar:day_abbrev:thursday' => 'T',
  'event_calendar:day_abbrev:friday' => 'F',
  'event_calendar:day_abbrev:saturday' => 'S',
  'event_calendar:day_abbrev:sunday' => 'S',
  'event_calendar:dow:full:monday' => 'Lundi',
  'event_calendar:dow:full:tuesday' => 'Mardi',
  'event_calendar:dow:full:wednesday' => 'Mercredi',
  'event_calendar:dow:full:thursday' => 'Jeudi',
  'event_calendar:dow:full:friday' => 'Vendredi',
  'event_calendar:dow:full:saturday' => 'Samedi',
  'event_calendar:dow:full:sunday' => 'Dimanche',
  'event_calendar:schedule_type:poll' => 'Créer un sondage pour demander aux inscrits à propos du jour et de l\'heure',
  'event_calendar:schedule_type:fixed' => 'Définir le jour et l\'heure',
  'elgg_calendar:send_reminder_label' => 'Envoyer un rappel',
  'elgg_calendar:send_reminder_before' => 'avant',
  'event_calendar:interval:minute' => 'minute(s)',
  'event_calendar:interval:hour' => 'heure(s)',
  'event_calendar:interval:day' => 'jour(s)',
  'event_calendar:site_calendar' => 'Agenda du site',
  'event_calendar:calendar_label' => 'Agenda',
  'event_calendar:calendar_description' => 'Agenda pour cet événement.',
  'event_calendar:are_you_sure' => 'Etes-vous sûr de ces changements ?',
  'event_calendar:schedule:header' => 'Planning',
  'event_calendar:permissions:header' => 'Droits',
  'event_calendar:read_access' => 'Accès en lecture',
  'event_calendar:web_conference_label' => 'Inclure une conférence web pour cet événement.',
  'event_calendar:share_ownership:label' => 'Partager la propriété de cet événement.',
  'event_calendar:share_ownership:description' => 'Autoriser les utilisateurs suivants à modifier ou supprimer cet événement, les participants, etc.',
  'event_calendar:settings:fewer_fields:title' => 'Masquer les champs frais, contact, organisateur et description longue',
  'event_calendar:settings:restricted_times:title' => 'Obliger que l\'heure soit entre 6h et 21h.',
  'event_calendar:add_event' => 'Ajouter un événement',
  'event_calendar:schedule_event' => 'Planifier un événement',
  'event_calendar:list_polls' => 'Lister les sondage des événements',
  'event_calendar:edit_form:error:missing_title' => 'Erreur: veuillez ajouter un titre.',
  'event_calendar:repeated_event:week_interval' => 'chaque %s semaines.',
  'event_calendar:repeated_event:week_single' => 'chaque semaine.',
  'event_calendar:repeated_event:format' => 'commence le %s et se répète les %s',
  'event_calendar:settings:repeated_events:title' => 'Autoriser les événements répétitifs (actuellement, ne fonctionne correctement qu\'en mode agenda complet)',
  'event_calendar:settings:reminders:title' => 'Autoriser l\'envoi de rappels',
  'event_calendar:reminder:subject' => 'Rappel pour l\'événement : %s',
  'event_calendar:reminder:body' => 'L\'événement 

%s

aura lieu à 

%s.

Vous pouvez voir les détails de l\'événement ici :
%s',
  'event_calendar:bbb_server_url' => 'URL du bouton Big Blue server (doit terminer par un slash)',
  'event_calendar:bbb_security_salt' => 'Big Blue Button security salt',
  'event_calendar:bbb_create_error' => 'Erreur: impossible de créer une conférence Big Blue Button. Le message est : %s',
  'event_calendar:conference_create_error' => 'Erreur: impossible de créer une conférence web.',
  'event_calendar:bbb_settings_error' => 'Erreur: vous devez définir l\'URL de la conférence et le security salt dans les paramètres du plugin.',
  'event_calendar:couldnotjoin' => 'Erreur: impossible de rejoindre la conférence.',
  'event_calendar:join_conf_button' => 'Rejoindre la conférence',
  'event_calendar:poll_suffix' => '(vote)',
  'event_calendar:resend_poll_invitation' => 'Voulez-vous avertir les participants que les paramètres ont changés?',
  'river:update:object:event_calendar' => '%s a mis à jour l\'événement %s',
  'river:create:object:event_calendar' => '%s a ajouté l\'événement %s',
  'river:comment:object:event_calendar' => '%s a commenté l\'événement %s',
  'event_calendar:widget_title' => 'Derniers événements',
  'event_calendar:personal_event_calendars_link' => 'dans (%s) agendas',
  'event_calendar:manage_event_description' => 'Entrez les détails de votre événement ci-dessous. Le titre, le lieu et la date de début sont obligatoires. Vous pouvez cliquer sur les icônes du calendrier pour indiquer les dates de début et de fin.',
  'event_calendar:start_time_label' => 'Horaire de départ',
  'event_calendar:start_time_description' => 'À quelle heure cet événement commence?',
  'event_calendar:end_time_label' => 'Horaire de fin',
  'event_calendar:end_time_description' => 'À quelle heure se termine cet événement?',
  'event_calendar:event_tags_label' => 'Balises',
  'event_calendar:event_tags_description' => 'Optionnel. Une liste de balises séparées par des virgules.',
  'event_calendar:error_nosuchevent' => 'Erreur: il n\'y a pas de tel événement.',
  'event_calendar:settings:times:title' => 'Ajouter du temps et la date aux événements',
  'event_calendar:settings:autogroup:title' => 'Ajouter automatiquement des événements de groupe à tous les membres dans leurs agendas personnels.',
  'event_calendar:settings:agenda_view:title' => 'Utilisez la vue Agenda',
  'event_calendar:settings:venue_view:title' => 'Afficher le lieu en vue sommaire (listings des événements)',
  'event_calendar:settings:group_always_display:title' => 'Si un calendrier de groupe est activé, toujours l\'afficher (même vides)',
  'event_calendar:settings:region_display:title' => 'Ajouter un champ région aux événements',
  'event_calendar:settings:region_list:title' => 'Liste des rListe des régions (un par ligne)
 (une seule par ligne)',
  'event_calendar:region_label' => 'Régions',
  'event_calendar:region_description' => 'Sélectionnez la région dans laquelle cet événement aura lieu',
  'event_calendar:settings:type_display:title' => 'Ajouter le type d\'événement aux événements',
  'event_calendar:settings:type_list:title' => 'Liste des types d\'événement (un seul par ligne)',
  'event_calendar:type_label' => 'Type d\'événement',
  'event_calendar:type_description' => 'Sélectionnez le type d\'événement.',
  'event_calendar:all' => 'Tous',
  'event_calendar:region_filter_by_label' => 'Filtrer par région:',
  'event_calendar:settings:first_date:title' => 'Première date d\'entrée admissible (au format AAAA-MM-JJ)',
  'event_calendar:settings:last_date:title' => 'Dernière date admissible (au format AAAA-MM-JJ)',
  'event_calendar:mine' => 'Le mien',
  'event_calendar:feature' => 'Mise en vedette',
  'event_calendar:unfeature' => 'Enlever la mise en vedette',
  'event_calendar:agenda:column:time' => 'Heure',
  'event_calendar:agenda:column:session' => 'Session',
  'event_calendar:agenda:column:venue' => 'Lieu',
  'event_calendar:upcoming_events_title' => 'Événements à venir',
  'event_calendar:settings:paged' => 'Pagé',
  'event_calendar:settings:month' => 'par mois',
  'event_calendar:settings:listing_format:title' => 'Format des listes d\'événements',
  'event_calendar:paged:column:date' => 'Date',
  'event_calendar:paged:column:time' => 'Heure',
  'event_calendar:paged:column:event' => 'Evénement',
  'event_calendar:paged:column:venue' => 'Lieu',
  'event_calendar:paged:column:calendar' => 'Calendrier',
  'item:object:event_calendar' => 'Agenda',
  'event_calendar:new_event' => 'Nouvel événement',
  'event_calendar:no_such_event_edit_error' => 'Erreur: Il n\'y a pas de tel événement, ou vous n\'avez pas la permission de le modifier.',
  'event_calendar:add_event_title' => 'Ajouter un événement',
  'event_calendar:manage_event_title' => 'Modifier un événement',
  'event_calendar:title_label' => 'Titre',
  'event_calendar:title_description' => 'Obligatoire. Un à quatre mots',
  'event_calendar:brief_description_label' => 'Courte description',
  'event_calendar:brief_description_description' => 'Optionnel. Une phrase courte.',
  'event_calendar:venue_label' => 'Lieu',
  'event_calendar:venue_description' => 'Obligatoire. Où se tiendra l\'événement?',
  'event_calendar:start_date_label' => 'Date de départ',
  'event_calendar:start_date_description' => 'Obligatoire. A quelle date cet événement démarera?',
  'event_calendar:end_date_label' => 'Date de fin de l\'événement',
  'event_calendar:end_date_description' => 'Optionnel. Quand c\'est événement s\'achèvera-t-il? La date de départ sera utilisée comme date de fin si ce champ n\'est pas rempli.',
  'event_calendar:fees_label' => 'Prix d\'entrée',
  'event_calendar:fees_description' => 'Optionnel. Le côut de l\'événement.',
  'event_calendar:contact_label' => 'Contact',
  'event_calendar:contact_description' => 'Optionnel. La personne à contacter pour avoir plus de renseignements, préférablement avec un numéro de téléphone ou une adresse emailpreferably with a telephone number or email address.',
  'event_calendar:organiser_label' => 'Organisateur',
  'event_calendar:organiser_description' => 'Optionnel. La personne ou l\'organisation responsable de l\'événement.',
  'event_calendar:long_description_label' => 'Description longue',
  'event_calendar:long_description_description' => 'Optionnel. Peut être un paragraphe ou plus si nécessaire.',
  'event_calendar:manage_event_response' => 'Votre événement a été sauvegardé.',
  'event_calendar:add_event_response' => 'Votre événement a été ajouté.',
  'event_calendar:manage_event_error' => 'Erreur: Une erreur s\'est produite lors de l\'enregistrement de votre événement. Assurez-vous que les champs spécifiés ont bien été remplis.',
  'event_calendar:show_events_title' => 'Agenda des événements',
  'event_calendar:day_label' => 'Jour',
  'event_calendar:week_label' => 'Semaine',
  'event_calendar:month_label' => 'Mois',
  'event_calendar:group' => 'Agenda de groupe',
  'event_calendar:new' => 'Ajouter un événement',
  'event_calendar:submit' => 'Ok',
  'event_calendar:cancel' => 'Annuler',
  'event_calendar:widget:description' => 'Afficher vos événements.',
  'event_calendar:num_display' => 'Nombre d\'événement à afficher',
  'event_calendar:groupprofile' => 'Les prochains événements',
  'event_calendar:view_calendar' => 'Voir l\'agenda',
  'event_calendar:when_label' => 'Quand',
  'event_calendar:site_wide_link' => 'Voir tous les événements',
  'event_calendar:view_link' => 'Voir cet événement',
  'event_calendar:edit_link' => 'Modifier cet événement',
  'event_calendar:delete_link' => 'Supprimer cet événement',
  'event_calendar:delete_response' => 'Cet événement a été supprimé.',
  'event_calendar:error_delete' => 'Cet événement n\'existe pas ou vous n\'avez pas le droit de le supprimer.',
  'event_calendar:delete_cancel_response' => 'Suppression de l\'événement annulé.',
  'event_calendar:add_to_my_calendar' => 'Ajouter à mon agenda',
  'event_calendar:remove_from_my_calendar' => 'Supprimer de mon agenda',
  'event_calendar:add_to_my_calendar_response' => 'Cet événement a été ajouté à votre agenda personnel.',
  'event_calendar:remove_from_my_calendar_response' => 'Cet événement a été supprimé de votre agenda personnel.',
  'event_calendar:users_for_event_title' => 'Membre du site intéressé par l\'événement "%s"\'',
  'event_calendar:settings:group_profile_display:title' => 'Afficher le profil de l\'agenda du groupe (Si les agendas de groupe ont été permis)',
  'event_calendar:settings:group_profile_display_option:left' => 'Colonne de gauche',
  'event_calendar:settings:group_profile_display_option:right' => 'Colonne de droite',
  'event_calendar:settings:group_profile_display_option:none' => 'aucun',
  'event_calendar:settings:autopersonal:title' => 'Ajouter automatiquement les événements d\'un utilisateur à son agenda personnelA.',
  'event_calendar:settings:yes' => 'oui',
  'event_calendar:settings:no' => 'non',
  'event_calendar:settings:site_calendar:title' => 'Side de l\'agenda',
  'event_calendar:settings:site_calendar:admin' => 'oui, seuls les administrateurs peuvent proposer des événements',
  'event_calendar:settings:site_calendar:loggedin' => 'oui, seuls les utilisateurs identifiés peuvent publier un événement',
  'event_calendar:settings:group_calendar:title' => 'Les agendas du groupe',
  'event_calendar:settings:group_calendar:admin' => 'oui seuls les administrateurs et les créateurs du groupe peuvent publier un événement',
  'event_calendar:settings:group_calendar:members' => 'oui, les membres du groupe peuvent publier un événement',
  'event_calendar:settings:group_default:title' => 'Les nouveaux groupes par défaut peuvent avoir leur propre agenda (Si les agendas de groupe sont permis)',
  'event_calendar:settings:group_default:no' => 'non (mais les administrateurs du groupe peuvement ajouter la fonction agenda si désiré)',
  'event_calendar:settings:group_default:yes' => 'oui (mais les administrateurs ou les créateurs du groupe peuvent supprimer la fonction agenda si désiré)',
  'event_calendar:enable_event_calendar' => 'Ajouter la fonction agenda au groupe',
  'event_calendar:no_events_found' => 'Aucun événement trouvé.',
  'event_calendar:river:created' => '%s ajouté',
  'event_calendar:river:updated' => '%s mis à jour',
  'event_calendar:river:annotated1' => '%s ajouté',
  'event_calendar:river:annotated2' => 'à son agenda personnel.',
  'event_calendar:river:create' => 'un nouvel événement intitulé',
  'event_calendar:river:the_event' => 'un événement intitulé',
);
add_translation("fr", $language);
