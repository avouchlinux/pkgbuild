// Use LANG environment variable to choose locale
pref("intl.locale.matchOS", 			true);

// Disable default browser checking.
pref("browser.shell.checkDefaultBrowser", 	false);

pref("app.update.auto",                     	false);
pref("app.update.enabled",                  	false);
pref("app.update.autoInstallEnabled",       	false);
pref("general.smoothScroll",                	true);

// Don't disable our bundled extensions in the application directory
pref("extensions.autoDisableScopes", 		11);
pref("extensions.shownSelectionUI", 		true);

pref("browser.startup.homepage",            	"data:text/plain,browser.startup.homepage=about:newtab");
pref("browser.newtabpage.pinned",           	'[{"url":"https://avouch.org/","title":"Avouch Linux - Home Page"}]');
