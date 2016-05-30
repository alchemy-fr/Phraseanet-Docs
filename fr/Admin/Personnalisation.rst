Personnaliser Phraseanet
========================

.. topic:: L'essentiel

    Les pages suivantes sont personnalisables dans Phraseanet :

    - La page d'accueil.
    - Les pages d'inscription.
    - La page de récupération de mot de passe.
    - La page de changement de mot de passe.
    - La page de présentation des conditions générales d'utilisation.
    - Les pages d'authentification `oAuth`_.

    Ces personnalisations s'appuient sur deux technologies distinctes :

    - `LESS`_ pour la mise en forme des styles de présentation
    - `TWIG`_ pour la composition des éléments structurants les pages

Modifier l'aspect des pages de connexion
----------------------------------------

Changer les couleurs des pages
******************************

Pour personnaliser les couleurs des différentes pages intervenir sur la
configuration `LESS`_ des :doc:`plugins<Plugins>`.

Dans le plugin, le fichier **less/login.less** permet de personnaliser les
couleurs des pages d'accueil, **less/account.less** les pages de compte.

Les variables LESS
~~~~~~~~~~~~~~~~~~

Ci-dessous la liste des variables `LESS`_ personnalisables.

Les fichiers `LESS`_ des pages d'accueil définissent par défaut les variables
qui peuvent être réutilisées afin de garantir la constance des
couleurs au sein de l'application.

.. code-block:: css

    @black:                 #000;
    @grayDarker:            #222;
    @grayDark:              #333;
    @gray:                  #555;
    @grayLight:             #999;
    @grayLighter:           #eee;
    @white:                 #fff;
    @blue:                  #049cdb;
    @blueDark:              #0064cd;
    @green:                 #46a546;
    @red:                   #9d261d;
    @yellow:                #ffc40d;
    @orange:                #f89406;
    @pink:                  #c3325f;
    @purple:                #7a43b6;

Les variables ci-dessous permettent de modifier l'aspect des éléments qui ne
sont pas inhérents à `Bootstrap`_.

.. code-block:: css

    /** couleur des bordures exterieures des champs dans les formulaires */
    @inputOutsideBorder:                #4c4c4c;

    /** couleur du texte des champs en cas d'erreur ou de succès */
    @colorError:                        #af3030;
    @colorSuccess:                      #108946;

    /** couleur des fournisseurs d'accès tiers */
    @colorFacebook:                     #3b5a97;
    @colorGooglePlus:                   #ba2828;
    @colorViadeo:                       #242424;
    @colorTwitter:                      #2fa3dc;
    @colorLinkedin:                     #025b8e;
    @colorGithub:                       #908c8b;

    /** couleur de fond de la barre d'authentification */
    @backgroundSideBar:                 #1a1a1a;

    /** couleur de fond de la page */
    @background:                        #141414;

    /**  couleur de l'ombrage de la barre d'authentification */
    @sideBarGlow:                       0 0 15px rgba(0, 0, 0, 1);

    /** couleur de l'ombrage de la liste déroulante des langues disponibles */
    @dropDownLanguageGlow:              0 0 15px rgba(0, 0, 0, 1);

    /** couleur des bordures de la barre d'authentification */
    @sideBarBlockBorderColorBottom:     @black;
    @sideBarBlockBorderColorTop:        #232222;

    /** couleur du badge Phraseanet */
    @identityPhraseanetBackgroundColor: #f2f2f2;
    @identityPhraseanetColor:           #323232;
    @identityPhraseanetIconColor:       #b3b3b3;

    /** couleur de la flèche de la liste déroulante des langues disponibles */
    @languageCaretColor:                @white;

    /** couleur de fond des champs de formulaire (inputs) sous Internet Explorer */
    @inputIEBackground:                 #6D6D6D;

Les variables ci-dessous permettent de modifier la couleur du texte :

.. code-block:: css

    @textColor:             @white;
    @linkColor:             #fff;
    @linkColorHover:        darken(@linkColor, 15%);

Les variables ci-dessous permettent de modifier l'aspect de la typographie :

.. code-block:: css

    @sansFontFamily:        Tahoma, "Helvetica Neue", Helvetica, Arial, sans-serif;
    @serifFontFamily:       Georgia, "Times New Roman", Times, serif;
    @monoFontFamily:        Monaco, Menlo, Consolas, "Courier New", monospace;
    @baseFontFamily:        @sansFontFamily;

Les variables ci-dessous permettent de modifier l'aspect des boutons :

.. code-block:: css

    @btnBackground:                     @white;
    @btnBackgroundHighlight:            darken(@white, 10%);
    @btnBorder:                         #bbb;

    @btnPrimaryBackground:              @linkColor;
    @btnPrimaryBackgroundHighlight:     spin(@btnPrimaryBackground, 20%);

    @btnInfoBackground:                 #1c607f;
    @btnInfoBackgroundHighlight:        darken(@btnInfoBackground, 10%);

    @btnSuccessBackground:              #1ea062;
    @btnSuccessBackgroundHighlight:     darken(@btnSuccessBackground, 10%);

    @btnWarningBackground:              lighten(@orange, 15%);
    @btnWarningBackgroundHighlight:     @orange;

    @btnDangerBackground:               #ee5f5b;
    @btnDangerBackgroundHighlight:      #bd362f;

    @btnInverseBackground:              #444;
    @btnInverseBackgroundHighlight:     @grayDarker;

Les variables ci-dessous permettent de modifier l'aspect des boîtes d'alertes :

.. code-block:: css

    @warningText:             @white;
    @warningBackground:       @grayDark;
    @warningBorder:           darken(spin(@warningBackground, -10), 3%);

    @errorText:               @white;
    @errorBackground:         #c9322b;
    @errorBorder:             darken(spin(@errorBackground, -10), 3%);

    @successText:             @white;
    @successBackground:       #1f914f;
    @successBorder:           darken(spin(@successBackground, -10), 5%);

    @infoText:                @white;
    @infoBackground:          #4889af;
    @infoBorder:              darken(spin(@infoBackground, -10), 7%);

Les variables ci-dessous permettent de modifier l'aspect des formulaires :

.. code-block:: css

    @inputBackground:               @black;
    @inputBorder:                   none;
    @inputBorderRadius:             0px;
    @inputDisabledBackground:       @grayLighter;
    @inputHeight:                   @baseLineHeight + 10px;
    @placeholderText:               @grayLight;

Les variables ci-dessous permettent de modifier l'aspect des listes
déroulantes :

.. code-block:: css

    @dropdownBackground:            @backgroundSideBar;
    @dropdownBorder:                rgba(0,0,0,.2);
    @dropdownDividerTop:            #e5e5e5;
    @dropdownDividerBottom:         @white;

    @dropdownLinkColor:             @white;
    @dropdownLinkColorHover:        @white;
    @dropdownLinkColorActive:       @white;

    @dropdownLinkBackgroundActive:  lighten(@backgroundSideBar, 10%);
    @dropdownLinkBackgroundHover:   @dropdownLinkBackgroundActive;

Les variables ci-dessous permettent de modifier l'aspect des tooltips et des
popovers :

.. code-block:: css

    @tooltipColor:            #fff;
    @tooltipBackground:       #000;
    @tooltipArrowWidth:       5px;
    @tooltipArrowColor:       @tooltipBackground;

    @popoverBackground:       #fff;
    @popoverArrowWidth:       10px;
    @popoverArrowColor:       #fff;
    @popoverTitleBackground:  darken(@popoverBackground, 3%);

    @popoverArrowOuterWidth:  @popoverArrowWidth + 1;
    @popoverArrowOuterColor:  rgba(0,0,0,.25);

Changer la structure des pages
******************************

Les structures des pages d'accueil dans Phraseanet reposent sur le moteur de
template `Twig`. Son mécanisme est basé sur le principe de l' `héritage`_
des templates qui permet de redéfinir le template entier ou bien des
portions de celui-ci.

Le template principal de la page d'accueil reçoit des variables permettant
l'affichage de cette dernière dans de nombreuses conditions.

Par exemple, la variable **recaptcha_display** est un booléen signifiant la
nécessité d'afficher une captcha pour déverouiller le compte de l'utilisateur
final.

Voir :ref:`que-doit-on-afficher`.

.. note::

    Tout template qui modifie la structure HTML des pages d'accueil doit au
    moins hériter du template de base, celui qui définit les
    fondations d'une page d'accueil Phraseanet sans son contenu.

Quels sont les différents modes de présentation ?
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Phraseanet inclut trois types de layouts :

- **side_bar**, présentation sur deux colonnes.
- **content_only**, présentation sans colonne.
- **middle_bar**, présentation une colonne centrale.

Tous ces layouts étendent le layout principal ** base_layout** qui définit par
défaut les blocs suivants :

- header
    - title
    - favicon
    - header_rss
    - header_meta
    - header_stylesheet
    - header_javascript
- content_scaffholding
- footer_scaffholding
- scripts
- analytics

Les variables Twig
~~~~~~~~~~~~~~~~~~

Les variables communes à tous les templates sont :

- **instance_title**, string, retourne le titre de l'instance.
- **has_terms_of_use**, booléen, retourne true si l'application à des conditions
  d'utilisation.
- **browser_version**, string, retourne la version du navigateur utilisé par
  l'utilisateur final.
- **browser_name**, string, retourne le nom du navigateur utilisé par le
  navigateur final.
- **locale**, string, retourne la langue courante sour le format langage
  + locale régionale (fr_FR, en_GB).
- **available_language**, string, retourne la liste des langues disponibles.
- **current_url**, string, retourne l'url de la page courante.
- **flash_types**, array, retourne la liste des types de flash messages
  disponibles.
- **recaptcha_display**, booléen, retourne true s'il faut afficher le système de
  recaptcha aprés un nombre de tentative de connection infructueuse.
- **unlock_usr_id**, entier, retourne l'identifiant du compte à dévérouiller.
  Si cette variable n'est pas vide c'est qu'elle indique que le compte avec
  lequel l'utilisateur final s'est connecté est vérouillé.
- **guest_allowed**, booléen, retourne true si les invités sont autorisés à se
  connecter sur l'instance.
- **register_enable**, booléen, retourne true si l'enregistrement des
  utilisateurs est activé sur l'instance.
- **authentication_providers**, array, retourne la liste des fournisseurs
  d'authentification disponibles.
- **home_publi**, string, retourne le type de diaporama à afficher sur la page
  d'accueil.
- **registration_fields**, array, retourne la liste des champs du formulaire
  d'enregistrement.
- **registration_optional_fields**, array, retourne la liste des champs
  optionnels à afficher sur la page d'accueil.

Les variables disponibles pour la page d'accueil :

- **feeds**, object, eprésente la liste des flux RSS publics à implementer
  sur la page d'accueil.

.. note::

    Les formulaires utilisent le composant `Form`_ de Symfony.

.. _que-doit-on-afficher:

Que doit-on afficher sur les pages d'accueil ?
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Sur toutes les pages, il est nécessaire d'afficher les éléments
suivants :

- Les messages `flash`_

Sur la page d'authentification, il est nécessaire d'afficher les éléments
suivants :

- Le lien d'accés invité (si activé).
- Le lien d'enregistrement d'un nouveau compte (si activé).
- Le recaptcha (protection anti-bot si activée).
- Le lien de dévouraillage des comptes vérouillés
  (si le compte actuel est vérouillé).

Sur les pages d'enregistrement, il est nécessaire d'afficher les éléments
suivants :

- Le lien vers les conditions générales d'utilisation (si activé).
- Le liens vers les fournisseurs d'authentifications
  google, facebook etc ... (si activé).

.. _Twig: http://twig.sensiolabs.org/
.. _Bootstrap: http://getbootstrap.com/
.. _LESS: http://lesscss.org
.. _oAuth: http://oauth.net/
.. _Form: http://symfony.com/fr/doc/current/cookbook/form/form_customization.html
.. _flash: http://symfony.com/fr/doc/current/components/http_foundation/sessions.html#messages-flash
.. _héritage: http://twig.sensiolabs.org/doc/templates.html#template-inheritance
