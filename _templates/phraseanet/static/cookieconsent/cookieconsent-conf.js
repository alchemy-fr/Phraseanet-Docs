// obtain cookieconsent plugin
var cc = initCookieConsent();
var cookie = '🍪';
let cookieName = 'docs_phraseanet_consent';
// run plugin with config object

current_lang = window.location.pathname.search('\/en\/') === -1 ? 'fr' : 'en';

cc.run({
	current_lang : current_lang,
	autoclear_cookies : true,                   // default: false
	//theme_css: '../_static/cookieconsent.css',
	cookie_name: cookieName,             // default: 'cc_cookie'
	//cookie_expiration : 365,                    // default: 182
	page_scripts: true,                         // default: false

	//auto_language : true,                   // default: false
	// autorun : true,                          // default: true
	// delay : 0,                               // default: 0
	force_consent: true,
	// hide_from_bots: false,                   // default: false
	// remove_cookie_tables: false              // default: false
	// cookie_domain: location.hostname,        // default: current domain
	// cookie_path: "/",                        // default: root
	// cookie_same_site: "Lax",
	// use_rfc_cookie: false,                   // default: false
	// revision: 0,                             // default: 0

	gui_options : {
		consent_modal : {
			layout : 'cloud',                     // box,cloud,bar
			position : 'top center',         // bottom,middle,top + left,right,center
			transition : 'slide'                // zoom,slide
		},
		settings_modal : {
			layout : 'box',                 // box,bar
			// position: 'left',            // right,left (available only if bar layout selected)
			transition : 'zoom'            // zoom,slide
		}
	},

	onChange: function(cookie, changed_preferences){
		//console.log("onChange fired ...");

		// If analytics category's status was changed ...
		if(changed_preferences.indexOf('analytics') > -1){

			// If analytics category is disabled ...
			if(!cc.allowedCategory('analytics')){

				// Disable gtag ...
				//console.log("disabling gtag")
				window.dataLayer = window.dataLayer || [];
				function gtag() { dataLayer.push(arguments); }
				gtag('consent', 'default', {
					'ad_storage': 'denied',
					'analytics_storage': 'denied'
				});
			}
		}
	},

	languages : {
		'en' : {
			consent_modal : {
				title :  cookie + " We use cookies!",
				description :  'Our website uses essential cookies to ensure its proper operation and tracking cookies to understand how you interact with it. The latter will be set only after consent. <button type="button" data-cc="c-settings" class="cc-link">Let me choose</button>',
				primary_btn: {
					text: 'Accept all',
					role: 'accept_all'				//'accept_selected' or 'accept_all'
				},
				secondary_btn: {
					text : 'Reject all',
					role : 'accept_necessary'		//'settings' or 'accept_necessary'
				}
			},
			settings_modal : {
				title : '<div>Cookie preferences</div><div style="margin-top: .2em; color: #8d98a3; font-weight: 400; font-size: .85em;">docs.phraseanet.com</div>',
				save_settings_btn : "Save settings",
				accept_all_btn : "Accept all",
				reject_all_btn: "Reject all",
				close_btn_label: "Close",
				cookie_table_headers : [
					{col1: "Name" },
					{col2: "Domain" },
					{col3: "Expiration" },
					{col4: "Description" }
				],
				blocks : [
					{
						title : "Cookie usage",
						description: 'We use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in/out whenever you want. For more details relative to cookies and other sensitive data, please read our privacy policy page.'
					},{
						title : "Strictly necessary cookies",
						description: 'These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly',
						toggle : {
							value : 'necessary',
							enabled : true,
							readonly: true							//cookie categories with readonly=true are all treated as "necessary cookies"
						},
						cookie_table: [
							{
								col1:  cookieName,
								col2: 'docs.phraseanet.com',
								col3: 'End of browser session',
								col4: 'Used to record consent user choice.'
							}]
					},{
						title : "Performance and Analytics cookies",
						description: 'These cookies collect information about how you use the website, which pages you visited and which links you clicked on.',
						toggle : {
							value : 'analytics',	//there are no default categories => you specify them
							enabled : false,
							readonly: false
						},
						cookie_table: [
							{
								col1: '__utma',
								col2: 'google.com',
								col3: '2 years from set/update',
								col4: 'Used to distinguish users and sessions. The cookie is created when the javascript library executes and no existing __utma cookies exists. The cookie is updated every time data is sent to Google Analytics.'
							},
							{
								col1: '__utmb',
								col2: 'google.com',
								col3: '30 mins from set/update',
								col4: 'Used to determine new sessions/visits. The cookie is created when the javascript library executes and no existing __utmb cookies exists. The cookie is updated every time data is sent to Google Analytics.'
							},
							{
								col1: '__utmc',
								col2: 'google.com',
								col3: 'End of browser session',
								col4: 'Not used in ga.js. Set for interoperability with urchin.js. Historically, this cookie operated in conjunction with the __utmb cookie to determine whether the user was in a new session/visit.',
							},
							{
								col1: '__utmt',
								col2: 'google.com',
								col3: '10 minutes',
								col4: 'Used to throttle request rate.',
							},
							{
								col1: '__utmz',
								col2: 'google.com',
								col3: '6 months from set/update',
								col4: 'Stores the traffic source or campaign that explains how the user reached your site. The cookie is created when the javascript library executes and is updated every time data is sent to Google Analytics.',
							}
						]
					}/*,{
                        title : "Advertisement and Targeting cookies",
                        description: 'These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you',
                        toggle : {
                            value : 'targeting',
                            enabled : false,
                            readonly: false
                        }
                    }*/,{
						title : "More information",
						description: 'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" target="_blank" href="https://www.alchemy.fr/en/contact/">contact us</a>.',
					}
				]
			}
		},
		'fr' : {
			consent_modal : {
				title :  cookie + " Nous utilisons des cookies !",
				description :  'Notre site Web utilise des cookies essentiels pour assurer son bon fonctionnement et des cookies de suivi pour comprendre comment vous interagissez avec lui. Ce dernier ne sera envoyé qu\'après accord. <button type="button" data-cc="c-settings" class="cc-link">Laissez-moi choisir</button>',
				primary_btn: {
					text: 'Accepter tout',
					role: 'accept_all'				//'accept_selected' or 'accept_all'
				},
				secondary_btn: {
					text : 'Refuser tout',
					role : 'accept_necessary'		//'settings' or 'accept_necessary'
				}
			},
			settings_modal : {
				title : '<div>Préferences des Cookies</div><div style="margin-top: .2em; color: #8d98a3; font-weight: 400; font-size: .85em;">docs.phraseanet.com</div>',
				save_settings_btn : "Sauver mes réglages",
				accept_all_btn : "Accepter tout",
				reject_all_btn: "Refuser tout",
				close_btn_label: "Fermer",
				cookie_table_headers : [
					{col1: "Nom" },
					{col2: "Domaine" },
					{col3: "Expiration" },
					{col4: "Description" }
				],
				blocks : [
					{
						title : "Utilisation des Cookies",
						description: 'Nous utilisons des cookies pour assurer les fonctionnalités de base du site Web et pour améliorer votre expérience en ligne. Vous pouvez choisir pour chaque catégorie de vous inscrire/désinscrire quand vous le souhaitez (lien "Préférence des cookies" au pied du site). Pour plus de détails concernant les cookies et autres données sensibles, veuillez consulter notre page "politique de confidentialité" au pied de ce site.'
					},{
						title : "Cookies strictement nécessaires",
						description: 'Ces cookies sont indispensables au bon fonctionnement général. Sans ces cookies, le site Web ne fonctionnerait pas correctement.',
						toggle : {
							value : 'necessary',
							enabled : true,
							readonly: true							//cookie categories with readonly=true are all treated as "necessary cookies"
						},
						cookie_table: [
							{
								col1:  cookieName,
								col2: 'docs.phraseanet.com',
								col3: 'Fin de session navigateur',
								col4: 'Utilisé pour enregisterr les préférences de l\'utilisateur.'
							}]
					},{
						title : 'Cookies de performance et d\'analyse',
						description: 'Ces cookies collectent des informations sur la façon dont vous utilisez le site Web, les pages que vous avez visitées et les liens sur lesquels vous avez cliqué.',
						toggle : {
							value : 'analytics',	//there are no default categories => you specify them
							enabled : false,
							readonly: false
						},
						cookie_table: [
							{
								col1: '__utma',
								col2: 'google.com',
								col3: '2 ans',
								col4: 'Utilisé pour distinguer les utilisateurs et les sessions. Le cookie est créé lorsque la bibliothèque javascript s\'exécute et qu\'aucun cookie __utma existant n\'existe. Le cookie est mis à jour à chaque fois que des données sont envoyées à Google Analytics.'
							},
							{
								col1: '__utmb',
								col2: 'google.com',
								col3: '30 minutes',
								col4: 'Utilisé pour déterminer les nouvelles sessions/visites. Le cookie est créé lorsque la bibliothèque javascript s\'exécute et qu\'aucun cookie __utmb existant n\'existe. Le cookie est mis à jour à chaque fois que des données sont envoyées à Google Analytics.'
							},
							{
								col1: '__utmc',
								col2: 'google.com',
								col3: 'Fin de session navigateur',
								col4: 'Non utilisé dans ga.js. Ensemble pour l\'interopérabilité avec urchin.js. Historiquement, ce cookie fonctionnait conjointement avec le cookie __utmb pour déterminer si l\'utilisateur était dans une nouvelle session/visite.',
							},
							{
								col1: '__utmt',
								col2: 'google.com',
								col3: '10 minutes',
								col4: 'Utilisé pour limiter le taux de requetes.',
							},
							{
								col1: '__utmz',
								col2: 'google.com',
								col3: '6 mois',
								col4: 'Stocke la source de trafic ou la campagne qui explique comment l\'utilisateur a atteint votre site. Le cookie est créé lors de l\'exécution de la bibliothèque javascript et est mis à jour à chaque fois que des données sont envoyées à Google Analytics',
							}
						]
					}/*,{
                        title : "Advertisement and Targeting cookies",
                        description: 'These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you',
                        toggle : {
                            value : 'targeting',
                            enabled : false,
                            readonly: false
                        }
                    }*/,{
						title : "Information complémentaire",
						description: 'Pour toute question relative à notre politique sur les cookies et vos préférences, merci de  <a class="cc-link" target="_blank" href="https://www.alchemy.fr/en/contact/">nous contacter</a>.',
					}
				]
			}
		}
	}
});

document.getElementById('cookie-management').addEventListener("click", function()
{
	cc.showSettings();
	return false;
});

