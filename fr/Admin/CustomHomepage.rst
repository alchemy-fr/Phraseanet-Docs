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
couleurs des pages d'accueil, **less/account.less** les page de compte.
(@todo changer le code source pour ajouter le fichier less)

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

@todo ajouter le block analytics

Les variable TWIG ?
~~~~~~~~~~~~~~~~~~~

@todo supprimer - **module_name**,  le nom du module qui n'est pas utilisé
@todo supprimer - **redirect**,  ou redirigé l'utilisateur qui n'est pas utilisé

Les variables commmunes a tous les templates sont :

- **feeds**, les flux RSS public
- **instance_title**, le titre de l'application
- **has_terms_of_use**, si l'application a des condition d'utilisation
- **display_google_chrome_frame**, afficher google chrome frame
- **browser_version**, la version du browser
- **browser_name**, le nom du browser
- **locale**, la locale courante
- **available_language** les langage disponibles
- **current_url**, l'url courante
- **flash_types**, liste des flash types
- **flash_messages**, liste des flash messages

@todo supprimer les appels dans les templates
 -  app['phraseanet.registry'].get('GV_homeTitle')
 -  app['phraseanet.registry'].get('GV_metaDescription')
 -  app['phraseanet.registry'].get('GV_metakeywords')
 -  app['phraseanet.registry'].get('GV_display_gcf')
 -  app['browser'].getBrowser()
 -  app['browser'].getVersion()
 -  app.hasTermsOfUse()
 -  app.getAvailableLanguages()
 -  app['locale']
 -  app['request'].getBaseUrl()
 -  app['request'].getPathInfo()
 -  app['request'].getQueryString()
 -  app.getAvailableFlashTypes
 -  app.getFlash('type')

Les variables mises à disposition pour la page de connexion sont :

- **recaptcha_display**, booléen indiquant si il faut afficher le système de
  recaptcha aprés un nombre de tentative de connection infructueuse.

- **unlock_usr_id**, entier représentant l'identifiant du compte à dévérouillé.
  Si cette variable n'est pas vide c'est qu'elle indique que le compte avec
  lequel l'utilisateur final s'est connecté est vérouillé.

- **guest_allowed**, booléen indiquant si les invités sont autorisés a se connecter
  sur l'instance.

@todo ajouter une variable register_enable et supprimer l'appel d'app['registration.enable'] dans les templates
@todo ajouter une variable auth_providers et supprimer l'appel d'app['authentication.providers'] dans les templates
@todo ajouter une variable home_diaporama et supprimer l'appel app['phraseanet.registry'].get('GV_home_publi')

Les variables mises à disposition pour la page d'enregistrement sont :

- app['registration.fields']
- app['registration.optional-fields']
- app['auth-providers']

@todo remplacer ces appels a app en incluant de nouvelles variables dans les templates concernés

.. note::

    Les formulaires utilisent le composant `Form`_ de Symfony.

.. _que-doit-on-afficher:

Que doit-on afficher sur les pages d'accueil ?
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Sur toutes les pages, il est nécessaire d'afficher les éléments
suivants :

- Les messages flash

Sur la page d'authentification, il est nécessaire d'afficher les éléments
suivants :

- Le lien d'accés invité (si activé).
- Le lien d'enregistrement d'un nouveau compte (si activé).
- Le recaptcha (protection anti-bot si activé).
- Le lien de dévouraillage des comptes vérouillés
  (si le compte actuel est verouillé).

Sur les pages d'enregistrement, il est nécessaire d'afficher les éléments
suivants :

- Le lien vers les conditions générales d'utilisation (si activé).
- Le liens vers les fournisseurs d'authentifications tierces
  google, facebook etc ... (si activé).


@todo compléter le fichier des macros pour faciliter l'affichage des features
de la page d'accueil

- bug possible à corrigé sur les pages d'enregistrement, il n' y pas de check préalable pour savoir si des CGUS
  existent, le lien est toujours affiché.
- affichage du lien de devérouillage du compte sous forme de macro
- affichage du lien d'accés inviter (remplacer le fichier include/guest-link par une macro car erreur de design un include n'a pas de flag et simplifie la customisation)
- affichage de la recaptcha sous forme de macro
- affichage du lien d'enregistrement (remplacer le fichier include/register-link par une macro car erreur de design un include n'a pas de flag et simplifie la customisation)
- affichage du lien vers les conditions d'utilisation sous forme de macro

.. _Twig: http://twig.sensiolabs.org/
.. _Twitter Bootstrap: http://twitter.github.io/bootstrap/
.. _LESS: http://lesscss.org
.. _oAuth: http://oauth.net/
.. _Form: http://symfony.com/fr/doc/current/cookbook/form/form_customization.html
.. _héritage: http://twig.sensiolabs.org/doc/templates.html#template-inheritance


