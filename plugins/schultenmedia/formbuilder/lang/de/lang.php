<?php

return [
    'plugin' => [
        'name' => 'Form Builder',
        'description' => 'Erstelle eigene Formulare für das Front-End',
    ],
    'navigation' => [
        'formbuilder' => 'Form Builder',
        'forms' => 'Formulare',
        'fieldtypes' => 'Feldtypen',
        'formlogs' => 'Formular-Archiv',
    ],
    'field' => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'created_at' => 'Erstellt am',
        'updated_at' => 'Aktualisiert am',
        'from_email' => 'E-Mail des Senders',
        'from_name' => 'Name des Senders',
        'template' => 'Mail-Vorlage',
        'description' => 'Beschreibung',
        'success_message' => 'Erfolgsmeldung',
        'error_message' => 'Fehlermeldung',
        'field_type' => 'Feldtyp',
        'label' => 'Label',
        'is_visible' => 'Sichtbar',
        'custom_attributes' => 'Eigene Attribute',
        'validation' => 'Validierung',
        'default' => 'Standardwert',
        'default_comment' => 'Gibt den voreingestellten Wert für das Feld an.',
        'markup' => 'HTML-Markup',
        'code_comment' => 'Spezifischer Code für das Feld.',
        'markup_comment' => 'Du kannst hier Twig benutzen und die folgenden Variablen: label, name, default, comment, class, wrapper_class, placeholder, options, custom_attributes',
        'name_comment' => 'HTML-Attribut name. Dieser Wert kann in Mail-Vorlagen benutzt werden, um die Eingaben aus eingereichten Formularen zu verarbeiten.',
        'custom_attributes_comment' => 'Fügt eigene HTML-Attribute zum Formular-Feld hinzu.',
        'validation_comment' => 'Available validation rules: <a target="_blank" href="https://laravel.com/docs/6.x/validation#available-validation-rules">https://laravel.com/docs/6.x/validation#available-validation-rules</a>.',
        'is_visible_comment' => 'Ist das Feld sichtbar im Formular?',
        'options' => 'Optionen',
        'options_comment' => 'Optionen für Dropdowns oder andere Listentypen.',
        'option_key' => 'Wert der Option',
        'option_label' => 'Label der Option',
        'return' => 'Zurückkehren',
        'placeholder' => 'Platzhalter',
        'placeholder_comment' => 'Setzt den Platzhalter-Text, falls das Feld das unterstützt.',
        'class' => 'Class',
        'class_comment' => 'Weist dem Feld eine CSS-Klasse zu.',
        'wrapper_class' => 'Wrapper Class',
        'wrapper_class_comment' => 'Fügt dem umgebenden Element HTML-Klassen hinzu.',
        'form' => 'Formular',
        'send_at' => 'Gesendet am',
        'css_class' => 'CSS Classes',
        'css_class_comment' => 'Fügt dem HTML-Tag "form" CSS-Klassen hinzu.',
        'reply_email' => 'E-Mail für Reply to',
        'reply_name' => 'Name für Reply to',
        'response_email' => 'Email field',
        'response_name' => 'Name field',
        'response_template' => 'Autoresponder mail template',
        'comment' => 'Kommentar',
        'comment_help' => 'Platziert eine Beschreibung unterhalb des Feldes.',
        'validation_messages' => 'Eigene Validierungsnachricht',
        'validation_msg_comment' => 'Das überschreibt die Standard-Nachricht.',
        'validation_messages_prompt' => 'Fügt eine eigene Nachricht für eine Regel hinzu',
        'rule' => 'Regel',
        'message' => 'Nachricht',
        'options_comment_prompt' => 'Neue Option hinzufügen',
        'form_id' => 'Form ID',
        'form_name' => 'Form Name',
        'form_data' => 'Form Data',
        'content_html' => 'Content HTML',
        'recipients' => 'Recipients',
        'cc_recipients' => 'CC',
        'bcc_recipients' => 'BCC',
        'email' => 'Email',
        'recipient_name' => 'Name',
        'actions' => 'Actions',
        'label_class' => 'Label CSS classes',
        'redirect_to' => 'Custom redirect',
        'empty' => '-- choose --',
        'subject' => 'Subject',
        'ip_address' => 'IP Address',
        'from' => 'Sender',
        'to' => 'Recipients',
        'cc' => 'CC Recipients',
        'bcc' => 'BCC Recipients',
    ],
    'fields' => [
        'reorder' => 'Felder umordnen',
    ],
    'form' => [
        'name' => 'Formular',
        'create' => 'Formular erstellen',
        'edit' => 'Formular bearbeiten',
        'manage' => 'Formulare verwalten',
        'delete_confirm' => 'Willst du das Formular ',
        'new' => 'Neues Formular',
        'forms' => 'Formulare',
        'title' => 'Formular',
        'description' => 'Wähle das Formular, das angezeigt werden soll',
        'placeholder' => '-- wähle --',
        'duplicate_confirm' => 'Do you really want to duplicate this form?',
        'duplicate_success' => 'Form was successfully duplicated.',
    ],
    'forms' => [
        'return' => 'Zurück zur Formularliste',
        'delete_confirm' => 'Ausgewähle Formulare löschen?',
    ],
    'tab' => [
        'details' => 'Details',
        'fields' => 'Felder',
        'form_data' => 'Formulardaten',
        'attachments' => 'Anhänge',
        'messages' => 'Nachrichten',
        'html' => 'HTML',
        'attributes' => 'Attribute',
        'list_options' => 'Listen-Optionen',
        'options' => 'Optionen',
        'validation' => 'Validierung',
        'reply' => 'Reply To',
        'recipients' => 'Recipients',
        'response' => 'Autoresponder',
        'styles' => 'Styles',
    ],
    'relation' => [
        'field' => 'Feld',
    ],
    'field_type' => [
        'new' => 'Neuer Feldtyp',
        'field_types' => 'Feldtypen',
        'manage' => 'Feldtypen verwalten',
        'name' => 'Feldtyp',
        'create' => 'Feldtyp erstellen',
        'edit' => 'Feldtyp hinzufügen',
        'delete_confirm' => 'Willst du den Feldtyp wirklich löschen?',
        'duplicate_confirm' => 'Do you really want to duplicate this field type?',
        'duplicate_success' => 'Field type was successfully duplicated.',
        'restore' => 'Standard wiederherstellen',
        'restoring' => 'Standard wird wiederhergestellt',
        'restore_confirm' => 'Willst du wirklich auf Standardwerte zurücksetzen? Alle Änderungen gehen verloren!',
        'restore_success' => 'Erfolgreich auf das Standard-Markup zurückgesetzt.',
    ],
    'field_types' => [
        'delete_confirm' => 'Ausgewählte Feldtypen löschen?',
        'return' => 'Zurück zur Feldtypen-Liste',
    ],
    'render_form' => [
        'name' => 'Rendert die Formular-Komponente',
        'description' => 'Zeigt ein Formular auf der Seite an',
    ],
    'settings' => [
        'label' => 'Google reCaptcha',
        'category' => 'Form Builder',
        'description' => 'Verwalte Einstellungen von Google-reCaptcha',
        'site_key' => 'Site key',
        'secret_key' => 'Secret key',
        'theme' => 'Theme',
        'lang' => 'Sprache',
        'site_key_comment' => 'Site key von der reCaptcha-Website.',
        'secret_key_comment' => 'Secret key von der reCaptcha-Website.',
    ],
    'reCaptcha' => [
        'error' => 'Bitte zeigen Sie, dass Sie kein Roboter sind!',
        'hint' => 'reCaptcha-Zugangsdaten erhälst du bei folgender Seite: <a target="_blank" href="https://www.google.com/recaptcha/admin">https://www.google.com/recaptcha/admin</a>',
    ],
    'permissions' => [
        'tab' => 'Form Builder',
        'access_settings' => 'Einstellungen verwalten',
        'access_forms' => 'Formulare verwalten',
        'access_form_logs' => 'Archiv verwalten',
        'access_field_types' => 'Feldtypen verwalten',
    ],
    'message' => [
        'success' => 'Nachricht wurde erfolgreich versendet!',
        'error' => 'Es gab einen Fehler. Bitte versuchen Sie es erneut!',
    ],
    'logs' => [
        'delete_confirm' => 'Ausgewählte Einträge löschen?',
        'return' => 'Zurück zum Archiv',
        'log' => 'Formular-Archiv',
    ],
    'log' => [
        'manage' => 'Archiv verwalten',
        'preview' => 'Vorschau des Archivs',
        'export_to_csv' => 'Export to CSV',
    ],
    'comment' => [
        'recipients' => ' Principal recipients of the message.',
        'cc_recipients' => 'CC field indicates secondary recipients whose names are visible to one another and to the principal.',
        'bcc_recipients' => 'BCC (blind carbon copy) field contains the names of tertiary recipients whose names are invisible to each other and to the primary and secondary recipients.',
        'new_recipient' => 'Add new recipient',
        'success_message' => 'Message shown after successful form request.',
        'error_message' => 'Message shown when form request error occurs.',
        'label_class' => 'Custom CSS classes added to the label element.',
        'redirect_to' => 'Specify the redirect url after successful form submission.',
        'reply_email' => 'Specify email field used for reply message option.',
        'reply_name' => 'Specify name field used for reply message option.',
        'response_email' => 'Specify email field used for autoresponder message.',
        'response_name' => 'Specify name field used for autoresponder message.',
    ],
    'help' => [
        'duplicate' => 'Duplicate',
        'delete' => 'Delete',
        'copy' => 'Copy',
    ],
    'uploader' => [
        'file_hint' => 'Click or drag files to upload',
        'image_hint' => 'Click or drag images to upload',
    ],
];