Personnalisation de la page d'accueil
=====================================

Sont personnalisables dans Phraseanet :

 - La page d'accueil.
 - Les pages d'inscription.
 - La page de récupération de mot de passe.
 - La page de changement de mot de passe.
 - La page de présentation des conditions générale d'utilisation.
 - Les pages d'authentification `oAuth`_.

Personnalisation simple : changer les couleurs
----------------------------------------------

Pour habiller les pages d'accueil, Phraseanet utilise la technologie `LESS`_.
Cette technologie permet de définir des variables au sein des feuilles de style.

Il est très simple de personnaliser les couleurs des différentes pages via
la configuration `LESS`_ des plugins.

(@todo Ajouter un lien vers la doc plugin).

Dans le plugin, le fichier **less/login.less** permet de personaliser les
couleurs des pages d'accueil, **less/account.less** les pages de compte.

Les variables LESS ?
~~~~~~~~~~~~~~~~~~~~

Ci-dessous la liste des variables `LESS`_ personnalisables.

Les fichiers `LESS`_ des pages d'accueil définissent par défault des variables
qui peuvent ainsi être réutilisées afin de garantir la consistence des
couleurs au sein de l'application.

.. code-block:: javascript

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
sont pas inhérent à `Twitter Bootstrap`_.

.. code-block:: javascript

    // couleur des bordures exterieures des champs texte des formulaires
    @inputOutsideBorder:                #4c4c4c;

    // couleur du text des champs en cas d'echec ou de succés
    @colorError:                        #af3030;
    @colorSuccess:                      #108946;

    // couleur des fournisseurs d'accés tierce
    @colorFacebook:                     #3b5a97;
    @colorGooglePlus:                   #ba2828;
    @colorViadeo:                       #242424;
    @colorTwitter:                      #2fa3dc;
    @colorLinkedin:                     #025b8e;
    @colorGithub:                       #908c8b;

    // couleur de fond de la barre d'authentification
    @backgroundSideBar:                 #1a1a1a;

    // couleur de fond de la page
    @background:                        #141414;

    // couleur ombrage de la barre d'authentification
    @sideBarGlow:                       0 0 15px rgba(0, 0, 0, 1);

    // couleur ombrage de la liste déroulante des langages disponibles
    @dropDownLanguageGlow:              0 0 15px rgba(0, 0, 0, 1);

    // couleur des bordures de la barre d'authentification
    @sideBarBlockBorderColorBottom:     @black;
    @sideBarBlockBorderColorTop:        #232222;

    // couleur badge phraseanet
    @identityPhraseanetBackgroundColor: #f2f2f2;
    @identityPhraseanetColor:           #323232;
    @identityPhraseanetIconColor:       #b3b3b3;

    // couleur de la fleche de la liste déroulante des langages disponibles
    @languageCaretColor:                @white;

    // couleur de fond des inputs sous internet explorer
    @inputIEBackground:                 #6D6D6D;

Les variables ci-dessous permettent de modifier l'aspect de la couleur du texte :

.. code-block:: javascript

    @textColor:             @white;
    @linkColor:             #fff;
    @linkColorHover:        darken(@linkColor, 15%);

Les variables ci-dessous permettent de modifier l'aspect de la typographie :

.. code-block:: javascript

    @sansFontFamily:        Tahoma, "Helvetica Neue", Helvetica, Arial, sans-serif;
    @serifFontFamily:       Georgia, "Times New Roman", Times, serif;
    @monoFontFamily:        Monaco, Menlo, Consolas, "Courier New", monospace;
    @baseFontFamily:        @sansFontFamily;

Les variables ci-dessous permettent de modifier l'aspect des boutons :

.. code-block:: javascript

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

Les variables ci-dessous permettent de modifier l'aspect des boites d'alertes:

.. code-block:: javascript

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

.. code-block:: javascript

    @inputBackground:               @black;
    @inputBorder:                   none;
    @inputBorderRadius:             0px;
    @inputDisabledBackground:       @grayLighter;
    @inputHeight:                   @baseLineHeight + 10px;
    @placeholderText:               @grayLight;

Les variables ci-dessous permettent de modifier l'aspect des listes
déroulantes :

.. code-block:: javascript

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

.. code-block:: javascript

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

Personnalisation générale : changer la structure de la page
-----------------------------------------------------------

Pour structurer les pages d'accueil, Phraseanet utilise le moteur de template
`Twig`_ dont le mécanisme est basé sur le principe de l' `héritage`_ des
templates. Ce mécanisme permet de redéfinir le template entier ou bien des
portions de celui-ci.

Le template principal de la page d'accueil reçoit des variables permettant
l'affichage de cette dernière dans de nombreuses conditions.

Par exemple, la variable **recaptcha_display** est un booléen signifiant la
nécessité d'afficher une captcha pour déverouiller le compte de l'utilisateur
final.

Voir :ref:`que-doit-on-afficher`.

.. note::

    Tout template qui modifie la structure HTML des pages d'accueil doit au
    minimum hérité du template de base qui par defaut définis les fondations
    d'une page d'accueil phraseanet sans son contenu.

Quels sont les différents mode de présentation ?
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Phraseanet inclus trois type différents de layouts :

    - **side_bar**, présentation sur deux colonnes.
    - **content_only**, présentation sans colonne.
    - **middle_bar**, presentation une colonne centrale.

Tous ces layouts étendent le layout principale ** base_layout** qui définis par
défault les blocs suivants :

    - header
        - title
        - favicon
        - header_rss
        - header_meta
        - header_stylesheet
        - header_javascript
        -
    - google_chrome_frame
    - content_scaffholding
    - footer_scaffholding
    - scripts
    - analytics

Les variable TWIG ?
~~~~~~~~~~~~~~~~~~~

Les variables commmunes a tous les templates sont :

- **instance_title**, string, retourne le titre de l'instance.
- **has_terms_of_use**, booléen, retourne true si l'application à des conditions
  d'utilisation.
- **display_google_chrome_frame**, booléen, retourne true si l'application doit
  proposer google chrome frame.
- **browser_version**, string, retourne la version du navigateur utilisé par
  l'utilisateur final.
- **browser_name**, string, retourne le nom du navigateur utilisé par le
  navigateur final.
- **locale**, string, retourne la locale courante.
- **available_language**, string, retourne la liste des langues disponibles.
- **current_url**, string, retourne l'url de la page courante.
- **flash_types**, array, retourne la liste des types de flash messages
  disponibles.
- **recaptcha_display**, booléen, retourne true si il faut afficher le système de
  recaptcha aprés un nombre de tentative de connection infructueuse.
- **unlock_usr_id**, entier, retourne l'identifiant du compte à dévérouiller.
  Si cette variable n'est pas vide c'est qu'elle indique que le compte avec
  lequel l'utilisateur final s'est connecté est vérouillé.
- **guest_allowed**, booléen, retourne true si les invités sont autorisés à se
  connecter sur l'instance.
- **register_enable**, booléan, retourne true si l'enregistrement des
  utilisateurs est activé sur l'instance.
- **authentication_providers**, array, retourne la liste des fournisseurs
  d'authentification tierces disponibles.
- **home_publi**, string, retourne le type de diaporama à afficher sur la page
  d'accueil.
- **registration_fields**, array, retourne la liste des champs du formulaire
  d'enregistrement.
- **registration_optional_fields**, array, retourne la liste des champs
  optionnels à afficher sur la page d'accueil.

Les variables disponibles pour la page d'accueil :

- **feeds**, object, représente la liste des flux RSS publiques à implementer
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
- Le recaptcha (protection anti-bot si activé).
- Le lien de dévouraillage des comptes vérouillés
  (si le compte actuel est vérouillé).

Sur les pages d'enregistrement, il est nécessaire d'afficher les éléments
suivants :

- Le lien vers les conditions générales d'utilisation (si activé).
- Le liens vers les fournisseurs d'authentifications tierces
  google, facebook etc ... (si activé).

.. _Twig: http://twig.sensiolabs.org/
.. _Twitter Bootstrap: http://twitter.github.io/bootstrap/
.. _LESS: http://lesscss.org
.. _oAuth: http://oauth.net/
.. _Form: http://symfony.com/fr/doc/current/cookbook/form/form_customization.html
.. _flash: http://symfony.com/fr/doc/current/components/http_foundation/sessions.html#messages-flash
.. _héritage: http://twig.sensiolabs.org/doc/templates.html#template-inheritance


