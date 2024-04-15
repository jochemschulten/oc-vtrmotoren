<?php

return [
    'plugin' => [
        'name' => 'Formulierenbouwer',
        'description' => 'Maak aangepaste front-end formulieren',
    ],
    'navigation' => [
        'formbuilder' => 'Formulierenbouwer',
        'forms' => 'Formulieren',
        'fieldtypes' => 'Veldtypes',
        'formlogs' => 'Archief',
    ],
    'field' => [
        'add' => 'Veld toevoegen',
        'id' => 'ID',
        'name' => 'Naam',
        'code' => 'Code',
        'created_at' => 'Datum & tijd',
        'updated_at' => 'Bijgewerkt',
        'from_email' => 'E-mail afzender',
        'from_name' => 'Naam afzender',
        'template' => 'E-mailtemplate',
        'description' => 'Omschrijving',
        'success_message' => 'Succesbericht',
        'error_message' => 'Foutmelding',
        'field_type' => 'Veldtype',
        'label' => 'Label',
        'is_visible' => 'Zichtbaar',
        'custom_attributes' => 'Aantepaste attributen',
        'validation' => 'Validatie',
        'default' => 'Standaardwaarde',
        'default_comment' => 'Default value for the field.',
        'markup' => 'HTML markup',
        'code_comment' => 'Unieke veldcode',
        'markup_comment' => 'Je kunt hier Twig gebruiken, en de volgende variabelen: label, name, default, class, placeholder, options, custom_attributes',
        'name_comment' => 'HTML naam-attribuut. Deze naam gebruik je in e-mailtemplates om de waarde van het veld te krijgen.',
        'custom_attributes_comment' => 'Aangepaste HTML-attributen die aan het invoer-element worden toegevoegd.',
        'validation_comment' => 'Available validation rules: <a target="_blank" href="https://laravel.com/docs/6.x/validation#available-validation-rules">https://laravel.com/docs/6.x/validation#available-validation-rules</a>.',
        'is_visible_comment' => 'Bepaalt of dit veld zichtbaar is in het formulier.',
        'options' => 'Opties',
        'options_comment' => 'Opties voor dropdowns en andere lijst-velden.',
        'option_key' => 'Optie-sleutel',
        'option_label' => 'Optie-waarde',
        'return' => 'Terug naar de lijst van velden',
        'placeholder' => 'Placeholder',
        'placeholder_comment' => 'Voegt een placeholder-tekst toe aan text-, textarea- en dropdown-velden',
        'class' => 'Class',
        'class_comment' => 'Voegt HTML-classes toe aan het element',
        'wrapper_class' => 'Wrapper CSS classes',
        'wrapper_class_comment' => 'Custom CSS classes added to the wrapper element.',
        'form' => 'Formulier',
        'send_at' => 'Verstuurd op',
        'css_class' => 'CSS classes',
        'css_class_comment' => 'Add CSS classes to HTML form tag.',
        'reply_email' => 'Email field',
        'reply_name' => 'Name field',
        'response_email' => 'Email field',
        'response_name' => 'Name field',
        'response_template' => 'Autoresponder mail template',
        'comment' => 'Help block',
        'comment_help' => 'Places a descriptive help block below the field.',
        'validation_messages' => 'Custom validation messages',
        'validation_msg_comment' => 'Those will override default validation messages.',
        'validation_messages_prompt' => 'Add custom message for a rule',
        'rule' => 'Rule',
        'message' => 'Message',
        'options_comment_prompt' => 'Add new option',
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
        'reorder' => 'Herorden Velden',
    ],
    'form' => [
        'name' => 'Formulier',
        'create' => 'Nieuw formulier',
        'edit' => 'Bewerk formulier',
        'manage' => 'Beheer formulieren',
        'delete_confirm' => 'Wil je dit formulier echt verwijderen?',
        'new' => 'Nieuw formulier',
        'forms' => 'Formulieren',
        'title' => 'Formulier',
        'description' => 'Kies welk formulier op de pagina gerenderd wordt',
        'placeholder' => '-- kies --',
        'duplicate_confirm' => 'Do you really want to duplicate this form?',
        'duplicate_success' => 'Form was successfully duplicated.',
    ],
    'forms' => [
        'return' => 'Terug naar de lijst',
        'delete_confirm' => 'Geselecteerde formulieren verwijderen?',
    ],
    'tab' => [
        'details' => 'Details',
        'fields' => 'Velden',
        'form_data' => 'Formuliergegevens',
        'attachments' => 'Bijlagen',
        'messages' => 'Messages',
        'html' => 'HTML',
        'attributes' => 'Attributes',
        'list_options' => 'List options',
        'options' => 'Options',
        'validation' => 'Validation',
        'reply' => 'Reply To',
        'recipients' => 'Recipients',
        'response' => 'Autoresponder',
        'styles' => 'Styles',
    ],
    'relation' => [
        'field' => 'Veld',
    ],
    'field_type' => [
        'new' => 'Nieuw veldtype',
        'field_types' => 'Veldtypes',
        'manage' => 'Beheer veldtypes',
        'name' => 'Veldtype',
        'create' => 'Nieuw veldtype',
        'edit' => 'Bewerk veldtype',
        'delete_confirm' => 'Wil je dit veldtype echt verwijderen?',
        'duplicate_confirm' => 'Do you really want to duplicate this field type?',
        'duplicate_success' => 'Field type was successfully duplicated.',
        'restore' => 'Restore markup to default',
        'restoring' => 'Restoring to default',
        'restore_confirm' => 'Do you really want to restore markup to default? All custom changes will be lost!',
        'restore_success' => 'Successfully restored the default markup.',
    ],
    'field_types' => [
        'delete_confirm' => 'Geselecteerde veldtypes verwijderen?',
        'return' => 'Terug naar de lijst',
    ],
    'render_form' => [
        'name' => 'Render Formulier-component',
        'description' => 'Render een formulier op de pagina',
    ],
    'settings' => [
        'label' => 'Google reCaptcha',
        'category' => 'Formulierenbouwer',
        'description' => 'Beheer Google reCaptcha-instellingen',
        'site_key' => 'Site key',
        'secret_key' => 'Secret key',
        'theme' => 'Thema',
        'lang' => 'Taal',
        'site_key_comment' => 'Site key afkomstig van reCaptcha site.',
        'secret_key_comment' => 'Secret key afkomstig van reCaptcha site.',
    ],
    'reCaptcha' => [
        'error' => 'Toon aan dat je menselijk bent!',
        'hint' => 'Om reCaptcha credentials op te halen, ga je naar <a target="_blank" href="https://www.google.com/recaptcha/admin">https://www.google.com/recaptcha/admin</a>',
    ],
    'permissions' => [
        'tab' => 'Formulierenbouwer',
        'access_settings' => 'Beheer instellingen',
        'access_forms' => 'Beheer formulieren',
        'access_field_types' => 'Beheer veldtypes',
        'access_form_logs' => 'Beheer archief',
    ],
    'message' => [
        'success' => 'Bericht is succesvol verstuurd!',
        'error' => 'Er is een fout opgetreden. Probeer het nog een keer, a.u.b.',
    ],
    'logs' => [
        'delete_confirm' => 'Geselecteerde inzendingen verwijderen?',
        'return' => 'Terug naar de archieflijst',
        'log' => 'Archief',
    ],
    'log' => [
        'manage' => 'Beheer archief',
        'preview' => 'Bekijk inzending',
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
