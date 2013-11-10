<?php
/** Occitan (occitan)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Boulaur
 * @author Cedric31
 * @author ChrisPtDe
 * @author Fryed-peach
 * @author Jfblanc
 * @author Kaganer
 * @author McDutchie
 * @author Nemo bis
 * @author Spacebirdy
 * @author Горан Анђелковић
 * @author לערי ריינהארט
 */

$bookstoreList = array(
	'Amazon.fr' => 'http://www.amazon.fr/exec/obidos/ISBN=$1'
);

$namespaceNames = array(
	NS_MEDIA            => 'Mèdia',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discutir',
	NS_USER             => 'Utilizaire',
	NS_USER_TALK        => 'Discussion_Utilizaire',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'Fichièr',
	NS_FILE_TALK        => 'Discussion_Fichièr',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Modèl',
	NS_TEMPLATE_TALK    => 'Discussion_Modèl',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Discussion_Ajuda',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Discussion_Categoria',
);

$namespaceAliases = array(
	'Utilisator'            => NS_USER,
	'Discussion_Utilisator' => NS_USER_TALK,
	'Discutida_Utilisator' => NS_USER_TALK,
	'Discutida_Imatge'     => NS_FILE_TALK,
	'Mediaòiqui'           => NS_MEDIAWIKI,
	'Discussion_Mediaòiqui' => NS_MEDIAWIKI_TALK,
	'Discutida_Mediaòiqui' => NS_MEDIAWIKI_TALK,
	'Discutida_Modèl'      => NS_TEMPLATE_TALK,
	'Discutida_Ajuda'      => NS_HELP_TALK,
	'Discutida_Categoria'  => NS_CATEGORY_TALK,
	'Imatge'               => NS_FILE,
	'Discussion_Imatge'    => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Messatge_sistèma', 'Messatge_del_sistèma' ),
	'Allpages'                  => array( 'Totas_las_paginas' ),
	'Ancientpages'              => array( 'Paginas_ancianas' ),
	'Blankpage'                 => array( 'Pagina_blanca', 'PaginaBlanca' ),
	'Block'                     => array( 'Blocar', 'Blocatge' ),
	'Blockme'                   => array( 'Blocatz_me', 'Blocatz-me' ),
	'Booksources'               => array( 'Obratge_de_referéncia', 'Obratges_de_referéncia' ),
	'BrokenRedirects'           => array( 'Redireccions_copadas', 'RedireccionsCopadas' ),
	'Categories'                => array( 'Categorias' ),
	'ChangePassword'            => array( 'Reïnicializacion_del_senhal', 'Reinicializaciondelsenhal' ),
	'Confirmemail'              => array( 'Confirmar_lo_corrièr_electronic', 'Confirmarlocorrièrelectronic', 'ConfirmarCorrièrElectronic' ),
	'Contributions'             => array( 'Contribucions' ),
	'CreateAccount'             => array( 'Crear_un_compte', 'CrearUnCompte', 'CrearCompte' ),
	'Deadendpages'              => array( 'Paginas_sul_camin_d\'enlòc' ),
	'DeletedContributions'      => array( 'Contribucions_escafadas', 'ContribucionsEscafadas' ),
	'Disambiguations'           => array( 'Omonimia', 'Omonimias', 'Paginas_d\'omonimia' ),
	'DoubleRedirects'           => array( 'Redireccions_doblas', 'RedireccionsDoblas' ),
	'Emailuser'                 => array( 'Corrièr_electronic', 'Email', 'Emèl', 'Emèil' ),
	'Export'                    => array( 'Exportar', 'Exportacion' ),
	'Fewestrevisions'           => array( 'Mens_de_revisions' ),
	'FileDuplicateSearch'       => array( 'Recèrca_fichièr_en_doble', 'RecèrcaFichièrEnDoble' ),
	'Filepath'                  => array( 'Camin_del_Fichièr', 'CamindelFichièr', 'CaminFichièr' ),
	'Import'                    => array( 'Impòrt', 'Importacion' ),
	'Invalidateemail'           => array( 'Invalidar_Corrièr_electronic', 'InvalidarCorrièrElectronic' ),
	'BlockList'                 => array( 'Utilizaires_blocats' ),
	'LinkSearch'                => array( 'Recèrca_de_ligams', 'RecèrcaDeLigams' ),
	'Listadmins'                => array( 'Lista_dels_administrators', 'Listadelsadministrators', 'Lista_dels_admins', 'Listadelsadmins', 'Lista_admins', 'Listaadmins' ),
	'Listbots'                  => array( 'Lista_dels_Bòts', 'ListadelsBòts', 'Lista_dels_Bots', 'ListadelsBots' ),
	'Listfiles'                 => array( 'Lista_dels_imatges', 'ListaDelsImatges' ),
	'Listgrouprights'           => array( 'Lista_dels_gropes_utilizaire', 'ListadelsGropesUtilizaire', 'ListaGropesUtilizaire', 'Tièra_dels_gropes_utilizaire', 'TièradelsGropesUtilizaire', 'TièraGropesUtilizaire' ),
	'Listredirects'             => array( 'Lista_de_las_redireccions', 'Listadelasredireccions', 'Lista_dels_redirects', 'Listadelsredirects', 'Lista_redireccions', 'Listaredireccions', 'Lista_redirects', 'Listaredirects' ),
	'Listusers'                 => array( 'Lista_dels_utilizaires', 'ListaDelsUtilizaires' ),
	'Lockdb'                    => array( 'Varrolhar_la_banca' ),
	'Log'                       => array( 'Jornal', 'Jornals' ),
	'Lonelypages'               => array( 'Paginas_orfanèlas' ),
	'Longpages'                 => array( 'Articles_longs' ),
	'MergeHistory'              => array( 'Fusionar_l\'istoric', 'Fusionarlistoric' ),
	'MIMEsearch'                => array( 'Recèrca_MIME' ),
	'Mostcategories'            => array( 'Mai_de_categorias' ),
	'Mostimages'                => array( 'Mai_d\'imatges' ),
	'Mostlinked'                => array( 'Imatges_mai_utilizats' ),
	'Mostlinkedcategories'      => array( 'Categorias_mai_utilizadas', 'CategoriasMaiUtilizadas' ),
	'Mostlinkedtemplates'       => array( 'Modèls_mai_utilizats', 'ModèlsMaiUtilizats' ),
	'Mostrevisions'             => array( 'Mai_de_revisions' ),
	'Movepage'                  => array( 'Tornar_nomenar', 'Cambiament_de_nom' ),
	'Mycontributions'           => array( 'Mas_contribucions', 'Mascontribucions' ),
	'Mypage'                    => array( 'Ma_pagina', 'Mapagina' ),
	'Mytalk'                    => array( 'Mas_discussions', 'Masdiscussions' ),
	'Newimages'                 => array( 'Imatges_novèls', 'ImatgesNovèls' ),
	'Newpages'                  => array( 'Paginas_novèlas' ),
	'Popularpages'              => array( 'Paginas_mai_visitadas', 'Paginas_las_mai_visitadas', 'Paginasmaivisitadas' ),
	'Preferences'               => array( 'Preferéncias' ),
	'Prefixindex'               => array( 'Indèx' ),
	'Protectedpages'            => array( 'Paginas_protegidas' ),
	'Protectedtitles'           => array( 'Títols_protegits', 'TítolsProtegits' ),
	'Randompage'                => array( 'Pagina_a_l\'azard' ),
	'Randomredirect'            => array( 'Redireccion_a_l\'azard', 'Redirect_a_l\'azard' ),
	'Recentchanges'             => array( 'Darrièrs_cambiaments', 'DarrièrsCambiaments', 'Darrièras_Modificacions' ),
	'Recentchangeslinked'       => array( 'Seguit_dels_ligams' ),
	'Revisiondelete'            => array( 'Versions_suprimidas' ),
	'Search'                    => array( 'Recèrca', 'Recercar', 'Cercar' ),
	'Shortpages'                => array( 'Articles_brèus' ),
	'Specialpages'              => array( 'Paginas_especialas' ),
	'Statistics'                => array( 'Estatisticas', 'Stats' ),
	'Tags'                      => array( 'Balisas' ),
	'Uncategorizedcategories'   => array( 'Categorias_sens_categoria' ),
	'Uncategorizedimages'       => array( 'Imatges_sens_categoria' ),
	'Uncategorizedpages'        => array( 'Paginas_sens_categoria' ),
	'Uncategorizedtemplates'    => array( 'Modèls_sens_categoria' ),
	'Undelete'                  => array( 'Restablir', 'Restabliment' ),
	'Unlockdb'                  => array( 'Desvarrolhar_la_banca' ),
	'Unusedcategories'          => array( 'Categorias_inutilizadas' ),
	'Unusedimages'              => array( 'Imatges_inutilizats' ),
	'Unusedtemplates'           => array( 'Modèls_inutilizats', 'Modèlsinutilizats', 'Models_inutilizats', 'Modelsinutilizats', 'Modèls_pas_utilizats', 'Modèlspasutilizats', 'Models_pas_utilizats', 'Modelspasutilizats' ),
	'Unwatchedpages'            => array( 'Paginas_pas_seguidas' ),
	'Upload'                    => array( 'Telecargament', 'Telecargaments' ),
	'Userlogin'                 => array( 'Nom_d\'utilizaire' ),
	'Userlogout'                => array( 'Desconnexion' ),
	'Userrights'                => array( 'Dreches', 'Permission' ),
	'Wantedcategories'          => array( 'Categorias_demandadas' ),
	'Wantedfiles'               => array( 'Fichièrs_demandats', 'FichièrsDemandats' ),
	'Wantedpages'               => array( 'Paginas_demandadas' ),
	'Wantedtemplates'           => array( 'Modèls_demandats', 'ModèlsDemandats' ),
	'Watchlist'                 => array( 'Lista_de_seguit', 'ListraDeSeguit', 'Seguit', 'Lista_de_seguiment', 'ListraDeSeguiment', 'Seguiment' ),
	'Whatlinkshere'             => array( 'Paginas_ligadas' ),
	'Withoutinterwiki'          => array( 'Sens_interwiki', 'Sensinterwiki', 'Sens_interwikis', 'Sensinterwikis' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#REDIRECCION', '#REDIRECT' ),
	'notoc'                     => array( '0', '__CAPDETAULA__', '__PASCAPDESOMARI__', '__PASCAPDETDM__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__CAPDEGALARIÁ__', '__CAPDEGALARIA__', '__PASCAPDEDEGALARIÁ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORÇARTAULA__', '__FORÇARSOMARI__', '__FORÇARTDM__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__TAULA__', '__SOMARI__', '__TDM__', '__TOC__' ),
	'noeditsection'             => array( '0', '__SECCIONNONEDITABLA__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'MESCORRENT', 'MESACTUAL', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'NOMMESCORRENT', 'NOMMESACTUAL', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'NOMGENMESCORRENT', 'NOMGENMESACTUAL', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'ABREVMESCORRENT', 'ABREVMESACTUAL', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'JORNCORRENT', 'JORNACTUAL', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'JORNCORRENT2', 'JORNACTUAL2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NOMJORNCORRENT', 'NOMJORNACTUAL', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ANNADACORRENTA', 'ANNADAACTUALA', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'DATACORRENTA', 'DATAACTUALA', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ORACORRENTA', 'ORAACTUALA', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MESLOCAL', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonthname'            => array( '1', 'NOMMESLOCAL', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'NOMGENMESLOCAL', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'ABREVMESLOCAL', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'JORNLOCAL', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'JORNLOCAL2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NOMJORNLOCAL', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ANNADALOCALA', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'ORARILOCAL', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ORALOCALA', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'NOMBREPAGINAS', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NOMBREARTICLES', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NOMBREFICHIÈRS', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NOMBREUTILIZAIRES', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NOMBREUTILIZAIRESACTIUS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NOMBREEDICIONS', 'NOMBREMODIFS', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'NOMBREVISTAS', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'NOMPAGINA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NOMPAGINAX', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ESPACINOMENATGE', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ESPACINOMENATGEX', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'ESPACIDISCUSSION', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'ESPACIDISCUSSIONX', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ESPACISUBJECTE', 'ESPACISUBJÈCTE', 'ESPACIARTICLE', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ESPACISUBJECTEX', 'ESPACISUBJÈCTEX', 'ESPACIARTICLEX', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'NOMPAGINACOMPLET', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'NOMPAGINACOMPLETX', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NOMSOSPAGINA', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NOMSOSPAGINAX', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NOMBASADEPAGINA', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NOMBASADEPAGINAX', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NOMPAGINADISCUSSION', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NOMPAGINADISCUSSIONX', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NOMPAGINASUBJECTE', 'NOMPAGINASUBJÈCTE', 'NOMPAGINAARTICLE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NOMPAGINASUBJECTEX', 'NOMPAGINASUBJÈCTEX', 'NOMPAGINAARTICLEX', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'img_thumbnail'             => array( '1', 'vinheta', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'vinheta=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'drecha', 'dreta', 'right' ),
	'img_left'                  => array( '1', 'esquèrra', 'senèstra', 'gaucha', 'left' ),
	'img_none'                  => array( '1', 'neant', 'nonrés', 'none' ),
	'img_center'                => array( '1', 'centrat', 'center', 'centre' ),
	'img_framed'                => array( '1', 'quadre', 'enquagrat', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'sens_quadre', 'frameless' ),
	'img_upright'               => array( '1', 'redreça', 'redreça$1', 'redreça $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'bordadura', 'border' ),
	'img_baseline'              => array( '1', 'linha_de_basa', 'baseline' ),
	'img_sub'                   => array( '1', 'indici', 'ind', 'sub' ),
	'img_super'                 => array( '1', 'exp', 'super', 'sup' ),
	'img_top'                   => array( '1', 'naut', 'top' ),
	'img_text_top'              => array( '1', 'naut-tèxte', 'naut-txt', 'text-top' ),
	'img_middle'                => array( '1', 'mitan', 'middle' ),
	'img_bottom'                => array( '1', 'bas', 'bottom' ),
	'img_text_bottom'           => array( '1', 'bas-tèxte', 'bas-txt', 'text-bottom' ),
	'img_link'                  => array( '1', 'ligam=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'NOMSIT', 'NOMSITE_NOMSITI', 'SITENAME' ),
	'ns'                        => array( '0', 'ESPACEN:', 'NS:' ),
	'localurl'                  => array( '0', 'URLLOCALA:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'URLLOCALAX:', 'LOCALURLE:' ),
	'server'                    => array( '0', 'SERVIDOR', 'SERVER' ),
	'servername'                => array( '0', 'NOMSERVIDOR', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'CAMINESCRIPT', 'SCRIPTPATH' ),
	'grammar'                   => array( '0', 'GRAMATICA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GENRE:', 'GENDER:' ),
	'currentweek'               => array( '1', 'SETMANACORRENTA', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'JDSCORRENT', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'SETMANALOCALA', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'JDSLOCAL', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'NUMÈROVERSION', 'REVISIONID' ),
	'revisionday'               => array( '1', 'DATAVERSION', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'DATAVERSION2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'MESREVISION', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ANNADAREVISION', 'ANREVISION', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'ORAREVISION', 'REVISIONTIMESTAMP' ),
	'fullurl'                   => array( '0', 'URLCOMPLETA:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'URLCOMPLETAX:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'INITMINUS:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'INITMAJUS:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'MINUS:', 'LC:' ),
	'uc'                        => array( '0', 'MAJUS:', 'CAPIT:', 'UC:' ),
	'raw'                       => array( '0', 'LINHA:', 'BRUT:', 'RAW:' ),
	'displaytitle'              => array( '1', 'AFICHARTÍTOL', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'BRUT', 'B', 'R' ),
	'newsectionlink'            => array( '1', '__LIGAMSECCIONNOVÈLA__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__PASCAPDELIGAMSECCIONNOVÈLA__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'VERSIONACTUALA', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'ENCÒDAURL:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'ENCÒDAANCÒRA', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'INSTANTACTUAL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'INSTANTLOCAL', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'MARCADIRECCION', 'MARCADIR', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#LENGA:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'LENGACONTENGUT', 'LENGCONTENGUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'PAGINASDINSESPACI:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'NOMBREADMINS', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATNOMBRE', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'BORRATGEESQUÈRRA', 'PADLEFT' ),
	'padright'                  => array( '0', 'BORRATGEDRECHA', 'PADRIGHT' ),
	'special'                   => array( '0', 'especial', 'special' ),
	'defaultsort'               => array( '1', 'ORDENA:', 'CLAUDETRIADA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'CAMIN:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'balisa', 'tag' ),
	'hiddencat'                 => array( '1', '__CATAMAGADA__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'PAGINASDINSCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'TALHAPAGINA', 'PAGESIZE' ),
	'noindex'                   => array( '1', '__PASCAPDINDÈX__', '__NOINDEX__' ),
	'staticredirect'            => array( '1', '__REDIRECCIONESTATICA__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'NIVÈLDEPROTECCION', 'PROTECTIONLEVEL' ),
);

$datePreferences = array(
	'default',
	'oc normal',
	'ISO 8601',
);

$defaultDateFormat = 'oc normal';

$dateFormats = array(
	'oc normal time' => 'H.i',
	'oc normal date' => 'j F "de" Y',
	'oc normal both' => 'j F "de" Y "a" H.i',
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$linkTrail = "/^([a-zàâçéèêîôû]+)(.*)$/sDu";

$messages = array(
# User preference toggles
'tog-underline' => 'Soslinhar los ligams :',
'tog-justify' => 'Justificar los paragrafs',
'tog-hideminor' => 'Amagar los darrièrs cambiaments menors',
'tog-hidepatrolled' => 'Amagar las modificacions susvelhadas dels darrièrs cambiaments',
'tog-newpageshidepatrolled' => 'Amagar las paginas susvelhadas de la lista de las paginas novèlas',
'tog-extendwatchlist' => 'Espandir la lista de seguiment per afichar totas las modificacions e non pas solament las mai recentas',
'tog-usenewrc' => 'Agropar los cambiaments per pagina dins los darrièrs cambiaments e la lista de seguiment',
'tog-numberheadings' => 'Numerotar automaticament los títols',
'tog-showtoolbar' => 'Far veire la barra de menú',
'tog-editondblclick' => 'Modificar las paginas amb un clic doble',
'tog-editsection' => 'Modificar una seccion via los ligams [modificar]',
'tog-editsectiononrightclick' => 'Modificar una seccion en fasent un clic drech suls títols de seccion',
'tog-showtoc' => "Afichar l'ensenhador (per las paginas de mai de 3 seccions)",
'tog-rememberpassword' => 'Se remembrar de mon senhal sus aqueste ordinator (al mai $1 {{PLURAL:$1|jorn|jorns}})',
'tog-watchcreations' => "Apondre las paginas que creï e los fichièrs qu'impòrti a ma lista de seguiment",
'tog-watchdefault' => "Apondre las paginas que modifiqui e los fichièrs qu'impòrti a ma lista de seguiment",
'tog-watchmoves' => 'Apondre las paginas e los fichièrs que tòrni nomenar a ma lista de seguiment',
'tog-watchdeletion' => 'Apondre las paginas e los fichièrs que suprimissi de ma lista de seguiment',
'tog-minordefault' => 'Considerar mas modificacions coma menoras per defaut',
'tog-previewontop' => 'Far veire la previsualizacion al dessús de la zòna de modificacion',
'tog-previewonfirst' => 'Far veire la previsualizacion al moment de la primièra edicion',
'tog-nocache' => "Desactivar l'escondedor de las paginas pel navigador",
'tog-enotifwatchlistpages' => 'M’avertir per corrièr electronic quand una pagina o un fichièr de ma lista de seguiment es modificat',
'tog-enotifusertalkpages' => 'M’avertir per corrièr electronic en cas de modificacion de ma pagina de discussion',
'tog-enotifminoredits' => 'M’avertir per corrièr electronic quitament en cas de modificacions menoras de las paginas o dels fichièrs',
'tog-enotifrevealaddr' => 'Afichar mon adreça electronica dins la los corrièrs electronics d’avertiment',
'tog-shownumberswatching' => "Afichar lo nombre d'utilizaires que seguisson aquesta pagina",
'tog-oldsig' => 'Apercebut de la signatura existenta :',
'tog-fancysig' => 'Tractar la signatura coma de wikitèxte (sens ligam automatic)',
'tog-uselivepreview' => 'Utilizar l’apercebut rapid (experimental)',
'tog-forceeditsummary' => "M'avertir quand ai pas completat lo contengut de la bóstia de comentaris",
'tog-watchlisthideown' => 'Amagar mas pròprias modificacions dins la lista de seguiment',
'tog-watchlisthidebots' => 'Amagar los cambiaments faches pels bòts dins la lista de seguiment',
'tog-watchlisthideminor' => 'Amagar las modificacions menoras dins la lista de seguiment',
'tog-watchlisthideliu' => 'Amaga, de la lista, las modificacions pels utilizaires connectats',
'tog-watchlisthideanons' => 'Amaga, de la lista, las modificacions anonimas',
'tog-watchlisthidepatrolled' => 'Amagar las modificacions susvelhadas de la lista de seguiment',
'tog-ccmeonemails' => 'Me mandar una còpia dels corrièrs electronics que mandi als autres utilizaires',
'tog-diffonly' => 'Far pas veire lo contengut de las paginas jos las difs',
'tog-showhiddencats' => 'Afichar las categorias amagadas',
'tog-noconvertlink' => 'Desactivar la conversion dels títols',
'tog-norollbackdiff' => 'Ometre lo diff aprèp l’utilizacion d’un revert',
'tog-useeditwarning' => 'M’avisar quand quiti una pagina de modificacion sens publicar los cambiaments',
'tog-prefershttps' => 'Utilizar totjorn una connexion securizada en essent connectat',

'underline-always' => 'Totjorn',
'underline-never' => 'Pas jamai',
'underline-default' => 'Valor per defaut del navigador o del tèma',

# Font style option in Special:Preferences
'editfont-style' => "Estil de poliça de la zòna d'edicion :",
'editfont-default' => 'Lo del navigador per defaut',
'editfont-monospace' => 'Poliça monoespaçada',
'editfont-sansserif' => 'Poliça sens empatament',
'editfont-serif' => 'Poliça amb empataments',

# Dates
'sunday' => 'dimenge',
'monday' => 'diluns',
'tuesday' => 'dimars',
'wednesday' => 'dimècres',
'thursday' => 'dijòus',
'friday' => 'divendres',
'saturday' => 'dissabte',
'sun' => 'Dimg',
'mon' => 'Dil',
'tue' => 'Dima',
'wed' => 'Dimè',
'thu' => 'Dij',
'fri' => 'Div',
'sat' => 'Diss',
'january' => 'de genièr',
'february' => 'de febrièr',
'march' => 'de març',
'april' => "d'abril",
'may_long' => 'de mai',
'june' => 'de junh',
'july' => 'de julhet',
'august' => "d'agost",
'september' => 'de setembre',
'october' => "d'octobre",
'november' => 'de novembre',
'december' => 'de decembre',
'january-gen' => 'Genièr',
'february-gen' => 'Febrièr',
'march-gen' => 'Març',
'april-gen' => 'Abril',
'may-gen' => 'Mai',
'june-gen' => 'Junh',
'july-gen' => 'Julhet',
'august-gen' => 'Agost',
'september-gen' => 'Setembre',
'october-gen' => 'Octobre',
'november-gen' => 'Novembre',
'december-gen' => 'Decembre',
'jan' => 'de gen',
'feb' => 'de feb',
'mar' => 'de març',
'apr' => "d'abr",
'may' => 'de mai',
'jun' => 'de junh',
'jul' => 'de julh',
'aug' => "d'ago",
'sep' => 'de set',
'oct' => "d'oct",
'nov' => 'de nov',
'dec' => 'de dec',
'january-date' => '$1 genièr',
'february-date' => '$1 febrièr',
'march-date' => '$1 març',
'april-date' => '$1 abril',
'may-date' => '$1 mai',
'june-date' => '$1 junh',
'july-date' => '$1 julhet',
'august-date' => '$1 agost',
'september-date' => '$1 setembre',
'october-date' => '$1 octobre',
'november-date' => '$1 novembre',
'december-date' => '$1 decembre',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categoria|Categorias}}',
'category_header' => 'Articles dins la categoria « $1 »',
'subcategories' => 'Soscategorias',
'category-media-header' => 'Fichièrs multimèdia dins la categoria « $1 »',
'category-empty' => "''Actualament, aquesta categoria conten pas cap d'articles, de soscategoria o de fichièr multimèdia.''",
'hidden-categories' => '{{PLURAL:$1|Categoria amagada|Categorias amagadas}}',
'hidden-category-category' => 'Categorias amagadas',
'category-subcat-count' => '{{PLURAL:$2|Aquesta categoria dispausa pas que de la soscategoria seguenta.|Aquesta categoria dispausa de {{PLURAL:$1|soscategoria|$1 soscategorias}}, sus un total de $2.}}',
'category-subcat-count-limited' => 'Aquesta categoria dispausa {{PLURAL:$1|d’una soscategoria|de $1 soscategorias}}.',
'category-article-count' => '{{PLURAL:$2|Aquesta categoria conten unicament la pagina seguenta.|{{PLURAL:$1|La pagina seguenta figura|Las $1 paginas seguentas figuran}} dins aquesta categoria, sus un total de $2.}}',
'category-article-count-limited' => '{{PLURAL:$1|La pagina seguenta figura|Las $1 paginas seguentas figuran}} dins la presenta categoria.',
'category-file-count' => '{{PLURAL:$2|Aquesta categoria conten unicament lo fichièr seguent.|{{PLURAL:$1|Lo fichièr seguent figura|Los $1 fichièrs seguents figuran}} dins aquesta categoria, sus una soma de $2.}}',
'category-file-count-limited' => '{{PLURAL:$1|Lo fichièr seguent figura|Los $1 fichièrs seguents figuran}} dins la presenta categoria.',
'listingcontinuesabbrev' => '(seguida)',
'index-category' => 'Paginas indexadas',
'noindex-category' => 'Paginas pas indexadas',
'broken-file-category' => 'Paginas amb ligams copats',

'about' => 'A prepaus',
'article' => 'Article',
'newwindow' => '(dobrís una fenèstra novèla)',
'cancel' => 'Anullar',
'moredotdotdot' => 'E mai...',
'morenotlisted' => 'Aquesta lista es pas completa.',
'mypage' => 'Pagina',
'mytalk' => 'Discussion',
'anontalk' => 'Discussion amb aquesta adreça IP',
'navigation' => 'Navigacion',
'and' => '&#32;e',

# Cologne Blue skin
'qbfind' => 'Recercar',
'qbbrowse' => 'Far desfilar',
'qbedit' => 'Modificar',
'qbpageoptions' => 'Opcions de la pagina',
'qbmyoptions' => 'Mas opcions',
'qbspecialpages' => 'Paginas especialas',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Apondre un subjècte',
'vector-action-delete' => 'Suprimir',
'vector-action-move' => 'Tornar nomenar',
'vector-action-protect' => 'Protegir',
'vector-action-undelete' => 'Restablir',
'vector-action-unprotect' => 'Suprimir la proteccion',
'vector-simplesearch-preference' => "Activar la barra de recèrca simplificada (solament per l'abilhatge Vector)",
'vector-view-create' => 'Crear',
'vector-view-edit' => 'Modificar',
'vector-view-history' => "Veire l'istoric",
'vector-view-view' => 'Legir',
'vector-view-viewsource' => 'Veire la font',
'actions' => 'Accions',
'namespaces' => 'Espacis de noms',
'variants' => 'Variantas',

'navigation-heading' => 'Menú de navigacion',
'errorpagetitle' => 'Error de títol',
'returnto' => 'Tornar a la pagina $1.',
'tagline' => 'Un article de {{SITENAME}}.',
'help' => 'Ajuda',
'search' => 'Recercar',
'searchbutton' => 'Recercar',
'go' => 'Consultar',
'searcharticle' => 'Consultar',
'history' => 'Istoric',
'history_short' => 'Istoric',
'updatedmarker' => 'modificat dempuèi ma darrièra visita',
'printableversion' => 'Version imprimibla',
'permalink' => 'Ligam istoric',
'print' => 'Imprimir',
'view' => 'Veire',
'edit' => 'Modificar',
'create' => 'Crear',
'editthispage' => 'Modificar aquesta pagina',
'create-this-page' => 'Crear aquesta pagina',
'delete' => 'Suprimir',
'deletethispage' => 'Suprimir aquesta pagina',
'undeletethispage' => "Anullar la supression d'aquesta pagina",
'undelete_short' => 'Restablir {{PLURAL:$1|1 modificacion| $1 modificacions}}',
'viewdeleted_short' => 'Veire {{PLURAL:$1|una edicion escafada|$1 edicions escafadas}}',
'protect' => 'Protegir',
'protect_change' => 'modificar',
'protectthispage' => 'Protegir aquesta pagina',
'unprotect' => 'Desprotegir',
'unprotectthispage' => 'Desprotegir aquesta pagina',
'newpage' => 'Pagina novèla',
'talkpage' => 'Pagina de discussion',
'talkpagelinktext' => 'Discussion',
'specialpage' => 'Pagina especiala',
'personaltools' => 'Aisinas personalas',
'postcomment' => 'Seccion novèla',
'articlepage' => "Vejatz l'article",
'talk' => 'Discussion',
'views' => 'Afichatges',
'toolbox' => 'Aisinas',
'userpage' => "Pagina d'utilizaire",
'projectpage' => 'Pagina meta',
'imagepage' => 'Veire la pagina del fichièr',
'mediawikipage' => 'Vejatz la pagina dels messatges',
'templatepage' => 'Vejatz la pagina del modèl',
'viewhelppage' => "Vejatz la pagina d'ajuda",
'categorypage' => 'Vejatz la pagina de las categorias',
'viewtalkpage' => 'Pagina de discussion',
'otherlanguages' => 'Autras lengas',
'redirectedfrom' => '(Redirigit dempuèi $1)',
'redirectpagesub' => 'Pagina de redireccion',
'lastmodifiedat' => "Darrièr cambiament d'aquesta pagina lo $1, a $2.",
'viewcount' => 'Aquesta pagina es estada consultada {{PLURAL:$1|un còp|$1 còps}}.',
'protectedpage' => 'Pagina protegida',
'jumpto' => 'Anar a :',
'jumptonavigation' => 'navigacion',
'jumptosearch' => 'Recercar',
'view-pool-error' => "O planhèm, los servidors son subrecargats pel moment.
Tròp d’utilizaires cercan a accedir a aquesta pagina.
Esperatz un moment abans d'ensajar d’accedir a aquesta pagina.

$1",
'pool-timeout' => "Relambi depassat pendent l'espèra del varrolh",
'pool-queuefull' => 'La fila de trabalh es plena',
'pool-errorunknown' => 'Error desconeguda',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'A prepaus de {{SITENAME}}',
'aboutpage' => 'Project:A prepaus',
'copyright' => 'Lo contengut es disponible jos licéncia $1 levat mencion contrària.',
'copyrightpage' => '{{ns:project}}:Copyright',
'currentevents' => 'Actualitats',
'currentevents-url' => 'Project:Actualitats',
'disclaimers' => 'Avertiments',
'disclaimerpage' => 'Project:Avertiments generals',
'edithelp' => 'Ajuda',
'helppage' => 'Help:Acuèlh',
'mainpage' => 'Acuèlh',
'mainpage-description' => 'Acuèlh',
'policy-url' => 'Project:Règlas',
'portal' => 'Comunautat',
'portal-url' => 'Project:Acuèlh',
'privacy' => 'Politica de confidencialitat',
'privacypage' => 'Project:Confidencialitat',

'badaccess' => 'Error de permission',
'badaccess-group0' => 'Avètz pas los dreches sufisents per realizar l’accion que demandatz.',
'badaccess-groups' => "L’accion qu'ensajatz de realizar es pas accessibla qu’als utilizaires {{PLURAL:$2|del grop|d´un d´aquestes gropes}}: $1.",

'versionrequired' => 'Version $1 de MediaWiki necessària',
'versionrequiredtext' => 'La version $1 de MediaWiki es necessària per utilizar aquesta pagina. Consultatz [[Special:Version|la pagina de las versions]]',

'ok' => "D'acòrdi",
'retrievedfrom' => 'Recuperada de « $1 »',
'youhavenewmessages' => 'Avètz $1 ($2).',
'newmessageslink' => 'de messatges novèls',
'newmessagesdifflink' => 'darrièr cambiament',
'youhavenewmessagesfromusers' => "Avètz $1 {{PLURAL:$3|d'un autre utilizaire|de $3 autres utilizaires}} ($2).",
'youhavenewmessagesmanyusers' => 'Avètz $1 de fòrça utilizaires ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|un novèl messatge|de novèls messatges}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|darrièr cambiament|darrièrs cambiaments}}',
'youhavenewmessagesmulti' => 'Avètz de messatges novèls sus $1',
'editsection' => 'modificar',
'editold' => 'modificar',
'viewsourceold' => 'veire la font',
'editlink' => 'modificar',
'viewsourcelink' => 'veire la font',
'editsectionhint' => 'Modificar la seccion : $1',
'toc' => 'Somari',
'showtoc' => 'afichar',
'hidetoc' => 'amagar',
'collapsible-collapse' => 'Rebatre',
'collapsible-expand' => 'Desplegar',
'thisisdeleted' => 'Desiratz afichar o restablir $1?',
'viewdeleted' => 'Veire $1?',
'restorelink' => '{{PLURAL:$1|una edicion escafada|$1 edicions escafadas}}',
'feedlinks' => 'Flux :',
'feed-invalid' => 'Tipe de flux invalid.',
'feed-unavailable' => 'Los fluxes de sindicacion son pas disponibles',
'site-rss-feed' => 'Flux RSS de $1',
'site-atom-feed' => 'Flux Atom de $1',
'page-rss-feed' => 'Flux RSS de "$1"',
'page-atom-feed' => 'Flux Atom de "$1"',
'red-link-title' => '$1 (la pagina existís pas)',
'sort-descending' => 'Botar en òrdre creissent',
'sort-ascending' => 'Botar en òrdre descreissent',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Article',
'nstab-user' => "Pagina d'utilizaire",
'nstab-media' => 'Pagina del mèdia',
'nstab-special' => 'Pagina especiala',
'nstab-project' => 'A prepaus',
'nstab-image' => 'Fichièr',
'nstab-mediawiki' => 'Messatge',
'nstab-template' => 'Modèl',
'nstab-help' => 'Ajuda',
'nstab-category' => 'Categoria',

# Main script and global functions
'nosuchaction' => 'Accion desconeguda',
'nosuchactiontext' => "L'accion especificada dins l'Url es invalida.
Benlèu avètz mal picat l’URL o seguit un ligam incorrècte.
Aquò tanben pòt indicar un problèma dins lo logicial utilizat per {{SITENAME}}.",
'nosuchspecialpage' => 'Pagina especiala inexistanta',
'nospecialpagetext' => "<strong>Avètz demandat una pagina especiala qu'es pas reconeguda pel logicial {{SITENAME}}.</strong>

Una lista de las paginas especialas pòt èsser trobada sus [[Special:SpecialPages|{{int:specialpages}}]].",

# General errors
'error' => 'Error',
'databaseerror' => 'Error de la banca de donadas',
'databaseerror-text' => "Una error de requèsta de banca de donadas s'es producha. Aquò pòt provenir d'un bug dins lo logicial.",
'databaseerror-textcl' => "Una error de requèsta de banca de donadas s'es produsida.",
'databaseerror-query' => 'Requèsta : $1',
'databaseerror-function' => 'Foncion : $1',
'databaseerror-error' => 'Error : $1',
'laggedslavemode' => 'Atencion : Aquesta pagina pòt conténer pas totes los darrièrs cambiaments efectuats.',
'readonly' => 'Mesas a jorn blocadas sus la banca de donadas',
'enterlockreason' => 'Indicatz la rason del blocatge, e mai una estimacion de sa durada',
'readonlytext' => "Los ajustons e mesas a jorn de la banca de donadas son actualament blocats, probablament per permetre la mantenença de la banca, aprèp aquò, tot dintrarà dins l'òrdre.

L’administrator qu'a varrolhat la banca de donadas a balhat l’explicacion seguenta : $1",
'missing-article' => "La banca de donada a pas trobat lo tèxte d’una pagina qu’auriá degut trobar, intitolada « $1 » $2.

Aquò es, en principi, causat en seguissent lo ligam perimit d'un diff o de l’istoric cap a una pagina qu'es estada suprimida.

S'es pas lo cas, belèu avètz trobat un bòg dins lo programa.
Informatz-ne un [[Special:ListUsers/sysop|administrator]] aprèp aver notada l’adreça cibla del ligam.",
'missingarticle-rev' => '(revision#: $1)',
'missingarticle-diff' => '(Diff: $1, $2)',
'readonly_lag' => 'La banca de donadas es estada automaticament clavada pendent que los servidors segondaris ratrapan lor retard sul servidor principal.',
'internalerror' => 'Error intèrna',
'internalerror_info' => 'Error intèrna: $1',
'fileappenderrorread' => 'Impossible de legir « $1 » al moment de l’insercion',
'fileappenderror' => "Impossible d'apondre « $1 » a « $2 ».",
'filecopyerror' => 'Impossible de copiar lo fichièr « $1 » cap a « $2 ».',
'filerenameerror' => 'Impossible de tornar nomenar lo fichièr « $1 » en « $2 ».',
'filedeleteerror' => 'Impossible de suprimir lo fichièr « $1 ».',
'directorycreateerror' => 'Impossible de crear lo dorsièr « $1 ».',
'filenotfound' => 'Impossible de trobar lo fichièr « $1 ».',
'fileexistserror' => 'Impossible d’escriure dins lo dorsièr « $1 » : lo fichièr existís',
'unexpected' => 'Valor imprevista : « $1 » = « $2 ».',
'formerror' => 'Error: Impossible de sometre lo formulari',
'badarticleerror' => 'Aquesta accion pòt pas èsser efectuada sus aquesta pagina.',
'cannotdelete' => 'Impossible de suprimir la pagina o lo fichièr « $1 ».
Benlèu la supression ja es estada efectuada per qualqu’un mai.',
'cannotdelete-title' => 'Impossible de suprimir la pagina "$1"',
'delete-hook-aborted' => "Supression anullada per una extension.
Cap d'explicacion es pas estada provesida.",
'no-null-revision' => 'Impossible de crear una novèla revision voida per la pagina « $1 »',
'badtitle' => 'Títol marrit',
'badtitletext' => 'Lo títol de la pagina demandada es invalid, void o s’agís d’un títol interlenga o interprojècte mal ligat. Benlèu conten un o maites caractèrs que pòdon pas èsser utilizats dins los títols.',
'perfcached' => "Las donadas seguendas son en escondedor e benlèu, son pas a jorn. Un maximum de {{PLURAL:$1|un resultat|$1 resultats}} es disponible dins l'escondedor.",
'perfcachedts' => "Las donadas seguendas son en escondedor e benlèu, son pas a jorn. Un maximum de {{PLURAL:$1|un resultat|$1 resultats}} es disponible dins l'escondedor.",
'querypage-no-updates' => 'Las mesas a jorn per aquesta pagina son actualamnt desactivadas. Las donadas çaijós son pas mesas a jorn.',
'wrong_wfQuery_params' => 'Paramètres incorrèctes sus wfQuery()<br />
Foncion : $1<br />
Requèsta : $2',
'viewsource' => 'Vejatz lo tèxte font',
'viewsource-title' => 'Veire la font de $1',
'actionthrottled' => 'Accion limitada',
'actionthrottledtext' => "Per luchar contra lo spam, l’utilizacion d'aquesta accion es limitada a un cèrt nombre de còps dins una sosta pro corta. S'avèra qu'avètz depassat aqueste limit. Ensajatz tornamai dins qualques minutas.",
'protectedpagetext' => "Aquesta pagina es estada protegida per empachar sa modificacion o d'autras accions.",
'viewsourcetext' => 'Podètz veire e copiar lo contengut de l’article per poder trabalhar dessús :',
'viewyourtext' => "Podètz veire e copiar lo contengut de '''vòstras modificacions''' a aquesta pagina :",
'protectedinterface' => 'Aquesta pagina provesís de tèxte d’interfàcia pel logicial susaqueste wiki, e es protegida per evitar los abuses.
Per apondre o modificar de traduccions sus totes los wikis, utilizatz [//translatewiki.net/ translatewiki.net], lo projècte de localizacion de MediaWiki.',
'editinginterface' => "'''Atencion :''' sètz a mand de modificar una pagina utilizada per crear lo tèxte de l’interfàcia del logicial. Los cambiaments sus aquesta pagina se repercutaràn sus l'aparéncia de l'interfàcia d'utilizaire pels autres utilizaires d'aqueste wiki. Per apondre o modificar de traduccions per totes los wikis, utilizatz [//translatewiki.net/translatewiki.net], lo projècte MediaWiki d'internacionalizacion dels messatges .",
'cascadeprotected' => "Aquesta pagina es actualament protegida perque es inclusa dins {{PLURAL:$1|la pagina seguenta|las paginas seguentas}}, {{PLURAL:$1|qu'es estada protegida|que son estadas protegidas}} amb l’opcion « proteccion en cascada » activada :
$2",
'namespaceprotected' => "Avètz pas la permission de modificar las paginas de l’espaci de noms « '''$1''' ».",
'customcssprotected' => "Avètz pas la permission d'editar aquesta pagina CSS perque conten de preferéncias d’autres utilizaires.",
'customjsprotected' => "Avètz pas la permission d'editar aquesta pagina JavaScript perque conten de preferéncias d’autres utilizaires.",
'mycustomcssprotected' => 'Avètz pas lo drech de modificar aquesta pagina CSS.',
'mycustomjsprotected' => 'Avètz pas lo drech de modificar aquesta pagina JavaScript.',
'myprivateinfoprotected' => 'Avètz pas los dreches per modificar vòstras informacions personalas.',
'mypreferencesprotected' => 'Avètz pas los dreches per modificar vòstras preferéncias.',
'ns-specialprotected' => 'Las paginas dins l’espaci de noms « {{ns:special}} » pòdon pas èsser modificadas',
'titleprotected' => "Aqueste títol es estat protegit a la creacion per [[User:$1|$1]].
Lo motiu avançat es « ''$2'' ».",
'filereadonlyerror' => "Impossible de modificar lo fichièr « $1 » perque lo repertòri de fichièrs « $2 » es en lectura sola.

L'administrator que l'a varrolhat a provesit aqueste motiu : « $3 ».",
'invalidtitle-knownnamespace' => "Títol invalid amb l'espaci de noms « $2 » e l'intitulat « $3 »",
'invalidtitle-unknownnamespace' => "Títol invalid amb lo numèro d'espaci de noms $1 e l'intitulat « $2 » desconeguts",
'exception-nologin' => 'Pas connectat',
'exception-nologin-text' => "Aquesta pagina o aquesta accion necessita d'èsser connectada sus aqueste wiki.",

# Virus scanner
'virus-badscanner' => "Marrida configuracion : escaner de virús desconegut : ''$1''",
'virus-scanfailed' => 'Fracàs de la recèrca (còde $1)',
'virus-unknownscanner' => 'antivirús desconegut :',

# Login and logout pages
'logouttext' => "'''Ara, sètz desconnectat.'''

Notatz que d'unas paginas pòdon èsser encara afichadas coma s'eratz encara connectat, fins al moment qu'escafaretz l'amagatal de vòstre navigador.",
'welcomeuser' => 'Benvenguda, $1&nbsp;!',
'welcomecreation-msg' => "Vòstre compte d'utilizaire es estat creat.
Doblidetz pas de modificar [[Special:Preferences|vòstras preferéncias per {{SITENAME}}]].",
'yourname' => "Nom d'utilizaire :",
'userlogin-yourname' => "Nom d'utilizaire",
'userlogin-yourname-ph' => "Picatz vòstre nom d'utilizaire",
'createacct-another-username-ph' => "Picar lo nom d'utilizaire",
'yourpassword' => 'Vòstre senhal :',
'userlogin-yourpassword' => 'Senhal',
'userlogin-yourpassword-ph' => 'Picatz vòstre senhal',
'createacct-yourpassword-ph' => 'Picatz un senhal',
'yourpasswordagain' => 'Confirmar lo senhal :',
'createacct-yourpasswordagain' => 'Confirmatz lo senhal',
'createacct-yourpasswordagain-ph' => 'Entratz lo senhal tornarmai',
'remembermypassword' => 'Me reconnectar automaticament a las visitas venentas (al maximum $1 {{PLURAL:$1|jorn|jorns}})',
'userlogin-remembermypassword' => 'Gardar ma sesilha activa',
'userlogin-signwithsecure' => 'Utilizar una connexion securizada',
'yourdomainname' => 'Vòstre domeni',
'password-change-forbidden' => 'Podètz pas modificar los senhals sus aqueste wiki.',
'externaldberror' => 'Siá una error s’es producha amb la banca de donadas d’autentificacion extèrna, siá sètz pas autorizat a metre a jorn vòstre compte extèrne.',
'login' => 'Identificacion',
'nav-login-createaccount' => 'Crear un compte o se connectar',
'loginprompt' => 'Vos cal activar los cookies per vos connectar a {{SITENAME}}.',
'userlogin' => 'Crear un compte o se connectar',
'userloginnocreate' => 'Connexion',
'logout' => 'Se desconnectar',
'userlogout' => 'Desconnexion',
'notloggedin' => 'Vos sètz pas identificat(ada)',
'userlogin-noaccount' => 'Avètz pas de compte ?',
'userlogin-joinproject' => 'Rejonhètz {{SITENAME}}',
'nologin' => "Avètz pas un compte ? '''$1'''.",
'nologinlink' => 'Creatz un compte',
'createaccount' => 'Crear un compte novèl',
'gotaccount' => "Ja avètz un compte ? '''$1'''.",
'gotaccountlink' => 'Identificatz-vos',
'userlogin-resetlink' => 'Avètz doblidat vòstres detalhs de connexion ?',
'userlogin-resetpassword-link' => 'Senhal doblidat ?',
'helplogin-url' => 'Help:Connexion',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Ajuda a la connexion]]',
'userlogin-loggedin' => 'Sètz ja connectat en tant que {{GENDER:$1|$1}}.
Utilizatz lo formulari çaijós per vos connectar amb un autre utilizaire.',
'userlogin-createanother' => 'Crear un autre compte',
'createacct-join' => 'Entratz vòstras informacions çaijós.',
'createacct-another-join' => 'Picar las informacions del novèl compte çaijós.',
'createacct-emailrequired' => 'Adreça electronica',
'createacct-emailoptional' => 'Adreça de corrièr electronic (facultativa)',
'createacct-email-ph' => 'Entratz vòstra adreça de corrièr electronic',
'createacct-another-email-ph' => "Picar l'adreça de corrièr electronic",
'createaccountmail' => 'Utilizar un senhal aleatòri temporari e lo mandar a l’adreça de corrièl especificada',
'createacct-realname' => 'Nom vertadièr (facultatiu)',
'createaccountreason' => 'Motiu :',
'createacct-reason' => 'Motiu',
'createacct-reason-ph' => 'Perqué creatz un autre compte',
'createacct-captcha' => 'Contraròtle de seguretat',
'createacct-imgcaptcha-ph' => 'Entratz lo tèxte que vesètz çaisús',
'createacct-submit' => 'Creatz vòstre compte',
'createacct-another-submit' => 'Crear un autre compte',
'createacct-benefit-heading' => '{{SITENAME}} es escrich per de monde coma vos.',
'createacct-benefit-body1' => '{{PLURAL:$1|cambiament|cambiaments}}',
'createacct-benefit-body2' => '{{PLURAL:$1|pagina|paginas}}',
'createacct-benefit-body3' => '{{PLURAL:$1|contributor recent|contributors recents}}',
'badretype' => "Los senhals qu'avètz picats son pas identics.",
'userexists' => "Lo nom d'utilizaire qu'avètz picat ja es utilizat.
Causissètz-ne un autre.",
'loginerror' => "Error d'identificacion",
'createacct-error' => 'Error al moment de la creacion del compte',
'createaccounterror' => 'Impossible de crear lo compte : $1',
'nocookiesnew' => "Lo compte d'utilizaire es estat creat, mas sètz pas connectat. {{SITENAME}} utiliza de cookies per la connexion mas los avètz desactivats. Activatz-los e reconnectatz-vos amb lo meteis nom e lo meteis senhal.",
'nocookieslogin' => '{{SITENAME}} utiliza de cookies per la connexion mas avètz los cookies desactivats. Activatz-los e reconnectatz-vos.',
'nocookiesfornew' => "Lo compte d'utilizaire es pas estat creat, perque avèm pas pogut identificar son origina.
Verificatz qu'avètz activat los cookies, recargatz la pagina e tornatz ensajar.",
'noname' => "Avètz pas picat de nom d'utilizaire valid.",
'loginsuccesstitle' => 'Identificacion capitada.',
'loginsuccess' => 'Sètz actualament connectat(ada) sus {{SITENAME}} en tant que « $1 ».',
'nosuchuser' => "L'utilizaire « $1 » existís pas.
Lo nom d'utilizaire es sensible a la cassa.
Verificatz qu'avètz plan ortografiat lo nom, o [[Special:UserLogin/signup|creatz-vos un compte novèl]].",
'nosuchusershort' => 'I a pas de contributor amb lo nom « $1 ». Verificatz l’ortografia.',
'nouserspecified' => "Vos cal especificar vòstre nom d'utilizaire.",
'login-userblocked' => 'Aqueste utilizaire es blocat. Connexion pas autorizada.',
'wrongpassword' => 'Lo senhal es incorrècte. Ensajatz tornarmai.',
'wrongpasswordempty' => 'Lo senhal picat èra void. Se vos plai, ensajatz tornarmai.',
'passwordtooshort' => 'Vòstre senhal deu conténer al mens {{PLURAL:$1|1 caractèr|$1 caractèrs}}.',
'password-name-match' => 'Vòstre senhal deu èsser diferent de vòstre nom d’utilizaire.',
'password-login-forbidden' => "L'usatge d'aquestes nom d'utilizaire e senhal es pas autorisat",
'mailmypassword' => 'Mandar un senhal novèl per corrièr electronic',
'passwordremindertitle' => 'Senhal temporari novèl sus {{SITENAME}}',
'passwordremindertext' => "Qualqu'un (probablament vos, amb l'adreça IP $1) a demandat un senhal novèl
per {{SITENAME}} ($4). Un senhal temporari es estat creat per
l’utilizaire « $2 » e es « $3 ». S'aquò èra vòstra intencion, vos caldrà
vos connectar e causir un senhal novèl.
Vòstre senhal temporari expirarà dins $5 {{PLURAL:$5|jorn|jorns}}.

Se sètz pas l’autor d'aquesta demanda, o se vos remembratz ara
de vòstre senhal ancian e que desiratz pas mai ne cambiar,
podètz ignorar aqueste messatge e contunhar d'utilizar vòstre senhal ancian.",
'noemail' => "Cap d'adreça electronica es pas estada enregistrada per l'utilizaire « $1 ».",
'noemailcreate' => 'Vos cal provesir una adreça de corrièl valida',
'passwordsent' => "Un senhal novèl es estat mandat a l'adreça electronica de l'utilizaire « $1 ».
Identificatz-vos tre que l'aurètz recebut.",
'blocked-mailpassword' => 'Vòstra adreça IP es blocada en edicion, la foncion de rapèl del senhal es doncas desactivada per evitar los abuses.',
'eauthentsent' => 'Un corrièr de confirmacion es estat mandat a l’adreça indicada.
Abans qu’un autre corrièr sià mandat a aqueste compte, vos caldrà seguir las instruccions donadas dins lo messatge per confirmar que lo compte es plan vòstre.',
'throttled-mailpassword' => 'Un corrièr electronic de reïnicializacion de vòstre senhal es ja estat mandat durant {{PLURAL:$1|la darrièra ora|las $1 darrièras oras}}. Per evitar los abuses, un sol corrièr de reïnicializacion de vòstre senhal serà pas mandat per {{PLURAL:$1|ora|interval de $1 oras}}.',
'mailerror' => 'Error en mandant lo corrièr electronic : $1',
'acct_creation_throttle_hit' => "De visitors d'aqueste wiki qu'utilizan vòstra adreça IP an creat $1 {{PLURAL:$1|compte|comptes}} lo jorn darrièr, aquò es lo limit maximum autorizat pendent aqueste periòde.
Atal los visitors qu'utilizan aquesta adreça IP pòdon pas crear mai de compte novèl pel moment.",
'emailauthenticated' => 'Vòstra adreça de corrièr electronic es estada confirmada lo $2 a $3.',
'emailnotauthenticated' => 'Vòstra adreça de corrièr electronic es pas encara confirmada. Cap de corrièr serà pas mandat per caduna de las foncions seguentas.',
'noemailprefs' => "Cap d'adreça electronica es pas estada indicada, las foncions seguentas seràn pas disponiblas.",
'emailconfirmlink' => 'Confirmatz vòstra adreça de corrièr electronic',
'invalidemailaddress' => "Aquesta adreça de corrièr electronic pòt pas èsser acceptada perque sembla qu'a un format incorrècte.
Picatz una adreça plan formatada o daissatz aqueste camp void.",
'cannotchangeemail' => 'Las adreças de corrièr electronic dels comptes pòdon pas èsser modificadas sus aqueste wiki.',
'emaildisabled' => 'Aqueste site pòt pas mandar de corrièls.',
'accountcreated' => 'Compte creat.',
'accountcreatedtext' => "Lo compte d'utilizaire per [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|discussion]]) es estat creat.",
'createaccount-title' => "Creacion d'un compte per {{SITENAME}}",
'createaccount-text' => "Qualqu'un a creat un compte per vòstra adreça de corrièr electronic sus {{SITENAME}} ($4) intitolat « $2 », amb per senhal « $3 ». Deuriaz dobrir una sessilha e cambiar, tre ara, aqueste senhal.

Ignoratz aqueste messatge se aqueste compte es estat creat per error.",
'usernamehasherror' => "Lo nom d'utilizaire pòt pas conténer de caractèrs de hachage",
'login-throttled' => 'Avètz ensajat un tròp grand nombre de connexions darrièrament.
Esperatz $1 abans d’ensajar tornarmai.',
'login-abort-generic' => 'Vòstra temptativa de connexion a fracassat',
'loginlanguagelabel' => 'Lenga: $1',
'suspicious-userlogout' => 'Vòstra demanda de desconnexion es estada refusada perque sembla qu’es estada mandada per un navigador copat o la mesa en escondedor d’un proxy.',
'createacct-another-realname-tip' => 'Lo nom vertadièr es opcional.
Se decidissètz de lo provesir, serà utilizat per atribuir a l’utilizaire sos trabalhs.',

# Email sending
'php-mail-error-unknown' => 'Error desconeguda dins la foncion mail() de PHP.',
'user-mail-no-addy' => 'Ensajat de mandar un corrièr electronic sens adreça',
'user-mail-no-body' => "Ensag de mandadís d'un corrièr electronic amb un còs void o desrasonablament cort.",

# Change password dialog
'resetpass' => 'Cambiar lo senhal del compte',
'resetpass_announce' => 'Vos sètz enregistrat amb un senhal temporari mandat per corrièr electronic. Per acabar l’enregistrament, vos cal picar un senhal novèl aicí :',
'resetpass_text' => '<!-- Apondètz lo tèxte aicí -->',
'resetpass_header' => 'Modificar lo senhal del compte',
'oldpassword' => 'Senhal ancian :',
'newpassword' => 'Senhal novèl :',
'retypenew' => 'Confirmar lo senhal novèl :',
'resetpass_submit' => 'Cambiar lo senhal e s’enregistrar',
'changepassword-success' => 'Vòstre senhal es estat cambiat amb succès !',
'resetpass_forbidden' => 'Los senhals pòdon pas èsser cambiats',
'resetpass-no-info' => 'Vos cal èsser connectat per aver accès a aquesta pagina.',
'resetpass-submit-loggedin' => 'Modificar lo senhal',
'resetpass-submit-cancel' => 'Anullar',
'resetpass-wrong-oldpass' => 'Senhal actual o temporari invalid.
Benlèu ja avètz modificat vòstre senhal o demandat un senhal temporari novèl.',
'resetpass-temp-password' => 'Senhal temporari :',
'resetpass-abort-generic' => 'La modificacion del senhal es estada anulada per una extension.',

# Special:PasswordReset
'passwordreset' => 'Remesa a zèro del senhal',
'passwordreset-text-one' => 'Emplenatz aqueste formulari per reïnicializar vòstre senhal.',
'passwordreset-text-many' => "{{PLURAL:$1|Completatz un d'aqueles camps per reïnicializar vòstre senhal.}}",
'passwordreset-legend' => 'Reïnicializar lo senhal',
'passwordreset-disabled' => 'La reïnicializacion dels senhals es estada desactivada sus aqueste wiki.',
'passwordreset-emaildisabled' => 'Las foncionalitats e-mail son estadas desactivadas sus aqueste wiki.',
'passwordreset-username' => "Nom d'utilizaire :",
'passwordreset-domain' => 'Domeni:',
'passwordreset-capture' => 'Veire lo corrièl resultant ?',
'passwordreset-capture-help' => "Se marcatz aquesta casa, lo corrièr electronic (amb lo senhal temporari) vos serà afichat al meteis temps que serà mandat a l'utilizaire.",
'passwordreset-email' => 'Adreça de corrièr electronic :',
'passwordreset-emailtitle' => "Detailhs d'un compte per {{SITENAME}}",
'passwordreset-emailtext-ip' => "Qualqu'un (probablament vos, dempuèi l'adreça IP $1) a demandat una reïnicializacion de vòstre senhal per {{SITENAME}} ($4). {{PLURAL:$3|Lo compte d'utilizaire seguent es associat|Los comptes d'utilizaires seguents son associats}} a aquesta adreça de corrièr electronic :

$2

{{PLURAL:$3|Aqueste senhal temporari expirarà|Aquestes senhals temporaris expiraràn}} dins {{PLURAL:$5|un jorn|$5 jorns}}. Ara, vos cal vos connectar e causir un senhal novèl. Se aquesta demanda proven pas de vos, o que vos sètz remembrat de vòstre senhal inicial, e que volètz pas mai lo modificar, podètz ignorar aqueste messatge e contunhar d'utilizar vòstre ancian senhal.",
'passwordreset-emailtext-user' => "L'utilizaire $1 sus {{SITENAME}} a demandat una reïnicializacion de vòstre senhal per {{SITENAME}} ($4). {{PLURAL:$3|Lo compte d'utilizaire seguent es associat|Los comptes d'utilizaires seguents son associats}} a aquesta adreça de corrièr electronic :

$2

{{PLURAL:$3|Aqueste senhal temporari expirarà|Aquestes senhals temporaris expiraràn}} dins {{PLURAL:$5|un jorn|$5 jorns}}. Ara, vos cal vos connectar e causir un senhal novèl. Se aquesta demanda proven pas de vos, o que vos sètz remembrat de vòstre senhal inicial, e que lo volètz pas mai modificar, podètz ignorar aqueste messatge e contunhar d'utilizar vòstre ancian senhal.",
'passwordreset-emailelement' => 'Utilizaire: $1
Senhal temporari: $2',
'passwordreset-emailsent' => 'Un corrièr electronic de reïnicializacion de senhal es estat mandat.',
'passwordreset-emailsent-capture' => "Un corrièr electronic de reïnicializacion senhal es estat mandat, qu'es afichat çaijós.",
'passwordreset-emailerror-capture' => "Un corrièr electronic de reïnicializacion de senhal es estat generat, qu'es afichat çaijós, mas lo mandadís a l'{{GENDER:$2|utilizaire}} a fracassat : $1",

# Special:ChangeEmail
'changeemail' => "Cambiar l'adreça electronica:",
'changeemail-header' => "Cambiar l'adreça electronica del compte",
'changeemail-text' => 'Emplenatz aqueste formulari per cambiar vòstra adreça de corrièr electronic. Vos cal entrar vòstre senhal per confirmar aqueste cambiament.',
'changeemail-no-info' => 'Vos cal èsser connectat per aver accès a aquesta pagina.',
'changeemail-oldemail' => 'Adreça electronica actuala:',
'changeemail-newemail' => 'Novela adreça electronica:',
'changeemail-none' => '(pas cap)',
'changeemail-password' => 'Vòstre senhal sus {{SITENAME}} :',
'changeemail-submit' => "Cambiar l'adreça electronica:",
'changeemail-cancel' => 'Anullar',

# Special:ResetTokens
'resettokens' => 'Reïnicializar los getons',
'resettokens-text' => "Aici, podètz reïnicializar los getons que permeton d’accedir a d'unas donadas privadas associadas a vòstre compte.

Lo vos caldriá far se las avètz partejats accidentalament amb qualqu'un o se vòstre compte es estat compromés.",
'resettokens-no-tokens' => 'I a pas cap de geton de reïnicializar.',
'resettokens-legend' => 'Reïnicializar los getons',
'resettokens-tokens' => 'Getons :',
'resettokens-token-label' => '$1 (valor actuala : $2)',
'resettokens-watchlist-token' => 'Geton pel flux (Atom/RSS) web de [[Special:Watchlist|modificacions de paginas de vòstra lista de seguiment]]',
'resettokens-done' => 'Getons reïnicializats.',
'resettokens-resetbutton' => 'Reïnicializar los getons seleccionats',

# Edit page toolbar
'bold_sample' => 'Tèxte en gras',
'bold_tip' => 'Tèxte en gras',
'italic_sample' => 'Tèxte en italica',
'italic_tip' => 'Tèxte en italica',
'link_sample' => 'Títol del ligam',
'link_tip' => 'Ligam intèrne',
'extlink_sample' => 'http://www.example.com títol del ligam',
'extlink_tip' => 'Ligam extèrne (doblidetz pas lo prefixe http://)',
'headline_sample' => 'Tèxte de sostítol',
'headline_tip' => 'Sostítol nivèl 2',
'nowiki_sample' => 'Picatz lo tèxte pas formatat aicí',
'nowiki_tip' => 'Ignorar la sintaxi wiki',
'image_sample' => 'Exemple.jpg',
'image_tip' => 'Imatge inserit',
'media_sample' => 'Exemple.ogg',
'media_tip' => 'Ligam cap a un fichièr mèdia',
'sig_tip' => 'Vòstra signatura amb la data',
'hr_tip' => "Linha orizontala (n'abusetz pas)",

# Edit pages
'summary' => 'Resumit :',
'subject' => 'Subjècte/títol :',
'minoredit' => 'Aquò es un cambiament menor',
'watchthis' => 'Seguir aquesta pagina',
'savearticle' => 'Salvar',
'preview' => 'Previsualizar',
'showpreview' => 'Previsualizacion',
'showlivepreview' => 'Apercebut rapid',
'showdiff' => 'Cambiaments en cors',
'anoneditwarning' => "'''Atencion :''' sètz pas identificat(ada).
Vòstra adreça IP serà enregistrada dins l’istoric d'aquesta pagina.",
'anonpreviewwarning' => "''Sètz pas identificat. Salvar enregistrarà vòstra adreça IP dins l’istoric de las modificacions de la pagina.''",
'missingsummary' => "'''Atencion :''' avètz pas modificat lo resumit de vòstra modificacion. Se clicatz tornarmai sul boton « Salvar », lo salvament serà fach sens avertiment mai.",
'missingcommenttext' => 'Mercé de metre un comentari çaijós.',
'missingcommentheader' => "'''*Rampèl:''' Avètz pas escrich de títol per aqueste comentari. Se tornatz clicar sus \"{{*int:*savearticle}}\" serà enregistrat sens títol.",
'summary-preview' => 'Previsualizacion del resumit :',
'subject-preview' => 'Previsualizacion del subjècte/títol :',
'blockedtitle' => "L'utilizaire es blocat",
'blockedtext' => "'''Vòstre compte d'utilizaire o vòstra adreça IP es estat blocat'''

Lo blocatge es estat efectuat per $1.
La rason invocada es la seguenta : ''$2''.

* Començament del blocatge : $8
* Expiracion del blocatge : $6
* Compte blocat : $7.

Podètz contactar $1 o un autre [[{{MediaWiki:Grouppage-sysop}}|administrator]] per ne discutir.
Podètz pas utilizar la foncion « Mandar un corrièr electronic a aqueste utilizaire » que se una adreça de corrièr valida es especificada dins vòstras [[Special:Preferences|preferéncias]].
Vòstra adreça IP actuala es $3 e vòstre identificant de blocatge es #$5.
Incluissètz aquesta adreça dins tota requèsta.",
'autoblockedtext' => 'Vòstra adreça IP es estada blocada automaticament perque es estada utilizada per un autre utilizaire, ele-meteis blocat per $1.
La rason invocadaa es :

:\'\'$2\'\'

* Començament del blocatge : $8
* Expiracion del blocatge : $6
* Compte blocat : $7

Podètz contactar $1 o un dels autres [[{{MediaWiki:Grouppage-sysop}}|administrators]] per discutir d\'aqueste blocatge.

Notatz que podètz pas utilizar la foncionalitat "Mandar un messatge a aqueste utilizaire" tant qu\'auretz pas  una adreça e-mail enregistrada dins vòstras [[Special:Preferences|preferéncias]] e tant que seretz pas blocat per son utilizacion.

Vòstra adreça IP actuala es $3, e lo numèro de blocatge es $5.
Precisatz aquestas indicacions dins totas las requèstas que faretz.',
'blockednoreason' => 'Cap de rason balhada',
'whitelistedittext' => 'Vos cal èsser $1 per modificar las paginas.',
'confirmedittext' => "Vos cal confirmar vòstra adreça electronica abans de modificar l'enciclopèdia. Picatz e validatz vòstra adreça electronica amb l'ajuda de la pagina [[Special:Preferences|preferéncias]].",
'nosuchsectiontitle' => 'Impossible de trobar la seccion',
'nosuchsectiontext' => "Avètz ensajat de modificar una seccion qu’existís pas.
Benlèu qu'es estada desplaçada o suprimida dempuèi qu'avètz legida aquesta pagina.",
'loginreqtitle' => 'Connexion necessària',
'loginreqlink' => 'connectar',
'loginreqpagetext' => 'Vos cal vos $1 per veire las autras paginas.',
'accmailtitle' => 'Senhal mandat.',
'accmailtext' => "Un senhal generat aleatòriament per [[User talk:$1|$1]] es estat mandat a $2.
Lo senhal per aqueste compte novèl pòt èsser cambiat sus la pagina ''[[Special:ChangePassword|Cambiament de senhal]]'' aprèp s'èsser connectat.",
'newarticle' => '(Novèl)',
'newarticletext' => "Avètz seguit un ligam cap a una pagina qu’existís pas encara o qu'es estada [{{fullurl:Special:Log|type=delete&page={{FULLPAGENAMEE}}}} escafada].
Per crear aquesta pagina, picatz vòstre tèxte dins la bóstia çaijós (podètz consultar [[{{MediaWiki:Helppage}}|la pagina d’ajuda]] per mai d’entresenhas).
Se sètz arribat(ada) aicí per error, clicatz sul boton '''retorn''' de vòstre navigador.",
'anontalkpagetext' => "---- ''Sètz sus la pagina de discussion d'un utilizaire anonim qu'a pas encara creat un compte o que n'utiliza pas.
Per aquesta rason, devèm utilizar son adreça IP per l'identificar. Una adreça d'aqueste tipe pòt èsser partejada entre mantun utilizaire. Se sètz un utilizaire anonim e se constatatz que de comentaris que vos concernisson pas vos son estats adreçats, podètz [[Special:UserLogin/signup|crear un compte]] o [[Special:UserLogin|vos connectar]] per evitar tota confusion venenta amb d’autres contributors anonims.''",
'noarticletext' => 'Pel moment, i a pas cap de tèxte sus aquesta pagina ;
podètz [[Special:Search/{{PAGENAME}}|aviar una recèrca sul títol d\'aqueste títol de pagina]] dins las autras pagina,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} recercar dins las operacions ligadas]
o [{{fullurl:{{FULLPAGENAME}}|action=edit}} crear aquesta pagina]</span>.',
'noarticletext-nopermission' => 'Actualament i a pas cap de tèxte dins aquesta pagina.
Podètz [[Special:Search/{{PAGENAME}}|far una recèrca sul títol de la pagina]] dins las autras paginas,
o <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} recercar dins los jornals associats]</span>.',
'missing-revision' => "La revision n° $1 de la pagina intitulada « {{PAGENAME}} » existís pas.

Aquò se produsís en general en seguent un ligam istoric obsolet cap a una pagina qu'es estada suprimida.
Podètz trobar mai de detalhs dins lo [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} jornal de las supressions].",
'userpage-userdoesnotexist' => "Lo compte d'utilizaire « <nowiki>$1</nowiki> » es pas enregistrat. Indicatz se volètz crear o editar aquesta pagina.",
'userpage-userdoesnotexist-view' => "Lo compte d'utilizaire « $1 » es pas enregistrat.",
'blocked-notice-logextract' => 'Aqueste utilizaire es actualament blocat.
La darrièra entrada del jornal dels blocatges es indicada çaijós a títol d’informacion :',
'clearyourcache' => "'''Nòta :''' Aprèp aver enregistrat vòstras modificacions, es possible que vos calga forçar lo recargament complet de l'escondedor de vòstre navigador per veire los cambiaments : 
*'''Firefox / Safari :''' mantenètz la tòca ''Majuscula'' (''Shift'') en clicant lo boton ''Actualizar'' (''Reload,'') o quichatz sus ''Ctrl-F5'' o ''Ctrl-R''  (''⌘-R'' sus un Mac)
* '''Google Chrome:''' Quichatz sus ''Ctrl-Shift-R'' (''⌘-Shift-R'' sus un Mac) 
* '''Internet Explorer:''' Mantenètz la tòca ''Ctrl'' en clicant sul boton ''Actualizar'', o quichatz ''Ctrl-F5'' 
* '''Opera:''' Voidatz l'escondedor dins ''Aisinas → Preferéncias''",
'usercssyoucanpreview' => "'''Astúcia :''' Utilizatz lo boton 'Previsualizacion' per testar vòstre fuèlh css/js novèl abans de l'enregistrar.",
'userjsyoucanpreview' => "'''Astúcia :''' Utilizatz lo boton 'Previsualizacion' per testar vòstre fuèlh css/js novèl abans de l'enregistrar.",
'usercsspreview' => "'''Remembratz-vos que sètz a previsualizar vòstre pròpri fuèlh CSS !'''
'''Es pas estada encara enregistrada !'''",
'userjspreview' => "'''Remembratz-vos que sètz a visualizar o testar vòstre còde JavaScript e qu’es pas encara estat enregistrat !'''",
'sitecsspreview' => "'''Remembratz-vos que sètz a previsualizar vòstre pròpri fuèlh CSS !'''
'''Es pas estada encara enregistrada !'''",
'sitejspreview' => "'''Remembratz-vos que sètz a visualizar o testar vòstre còde JavaScript e qu’es pas encara estat enregistrat !'''",
'userinvalidcssjstitle' => "'''Atencion :''' existís pas d'estil « $1 ». Remembratz-vos que las paginas personalas amb extensions .css e .js utilizan de títols en minusculas, per exemple, {{ns:user}}:Foo/vector.css e non pas {{ns:user}}:Foo/Vector.css.",
'updated' => '(Mes a jorn)',
'note' => "'''Nòta :'''",
'previewnote' => "'''Remembratz-vos qu'es pas qu'una previsualizacion.'''
Vòstras modificacions son pas encara estadas enregistradas !",
'continue-editing' => 'Anar a la zòna de modificacion',
'previewconflict' => 'Aquesta previsualizacion fa veire lo tèxte de la bóstia de modificacion superiora coma apareisserà se causissètz de lo salvar.',
'session_fail_preview' => "'''Podèm pas enregistrar vòstra modificacion a causa d’una pèrda d’informacions concernent vòstra sesilha.
Ensajatz tornarmai.
S'aquò fracassa encara, [[Special:UserLogout|desconnectatz-vos]], puèi connectatz-vos tornamai.'''",
'session_fail_preview_html' => "'''Podèm pas enregistrar vòstra modificacion a causa d’una pèrda d’informacions que concernís vòstra sesilha.'''

''Perque {{SITENAME}} a activat l’HTML brut, la previsualizacion es estada amagada per prevenir un atac per JavaScript.''

'''Se la temptativa de modificacion èra legitima, ensajatz encara.
S'aquò capita pas un còp de mai, [[Special:UserLogout|desconnectatz-vos]], puèi connectatz-vos tornamai.'''",
'token_suffix_mismatch' => "'''Vòstra modificacion es pas estada acceptada perque vòstre navigador a mesclat los caractèrs de ponctuacion dins l’identificant d’edicion. La modificacion es estada regetada per empachar la corrupcion del tèxte de l’article. Aqueste problèma se produtz quand utilizatz un mandatari (proxy) anonim problematic.'''",
'edit_form_incomplete' => "'''D'unas partidas del formulari de modificacion an pas atench lo servidor, verificatz que vòstras modificacions son intactas e ensajatz tornarmai.'''",
'editing' => 'Modificacion de $1',
'creating' => 'Creacion de $1',
'editingsection' => 'Modificacion de $1 (seccion)',
'editingcomment' => 'Modificacion de $1 (seccion novèla)',
'editconflict' => 'Conflicte de modificacion : $1',
'explainconflict' => "Aqueste pagina es estada salvada aprèp qu'avètz començat de la modificar.
La zòna d'edicion superiora conten lo tèxte tal coma es enregistrat actualament dins la banca de donadas.
Vòstras modificacions apareisson dins la zòna d'edicion inferiora.
Vos va caler aportar vòstras modificacions al tèxte existent.
'''Sol''' lo tèxte de la zòna superiora serà salvat.",
'yourtext' => 'Vòstre tèxte',
'storedversion' => 'Version enregistrada',
'nonunicodebrowser' => "'''Atencion : Vòstre navigador supòrta pas l’unicode. Una solucion temporària es estada trobada per vos permetre de modificar un article en tota seguretat : los caractèrs non-ASCII apareisseràn dins vòstra bóstia de modificacion en tant que còdes exadecimals. Deuriatz utilizar un navigador mai recent.'''",
'editingold' => "'''Atencion : sètz a modificar una version obsolèta d'aquesta pagina. Se salvatz, totas las modificacions efectuadas dempuèi aquesta version seràn perdudas.'''",
'yourdiff' => 'Diferéncias',
'copyrightwarning' => "Totas las contribucions a {{SITENAME}} son consideradas coma publicadas jols tèrmes de la $2 (vejatz $1 per mai de detalhs). Se desiratz pas que vòstres escriches sián modificats e distribuits a volontat, mercés de los sometre pas aicí.<br /> Nos prometètz tanben qu'avètz escrich aquò vos-meteis, o que l’avètz copiat d’una font provenent del domeni public, o d’una ressorsa liura.'''UTILIZETZ PAS DE TRABALHS JOS COPYRIGHT SENS AUTORIZACION EXPRÈSSA !'''",
'copyrightwarning2' => "Totas las contribucions a {{SITENAME}} pòdon èsser modificadas o suprimidas per d’autres utilizaires. Se desiratz pas que vòstres escriches sián modificats e distribuits a volontat, mercés de los sometre pas aicí.<br /> Tanben nos prometètz qu'avètz escrich aquò vos-meteis, o que l’avètz copiat d’una font provenent del domeni public, o d’una ressorsa liura. (vejatz $1 per mai de detalhs). '''UTILIZETZ PAS DE TRABALHS JOS COPYRIGHT SENS AUTORIZACION EXPRÈSSA !'''",
'longpageerror' => "'''ERROR : Lo tèxte qu'avètz somés fa {{PLURAL:$1|un Kio|$1 Kio}}, çò que depassa lo limit fixat a {{PLURAL:$2|un Kio|$2 Kio}}.'''. Pòt pas èsser salvat.",
'readonlywarning' => "'''AVERTIMENT : La banca de donadas es estada varrolhada per d'operacions de mantenença. Doncas, poiretz pas publicar vòstras modificacions pel moment.'''
Podètz copiar e pegar vòstre tèxte dins un fichièr de tèxte e lo salvar per mai tard.

L’administrator qu'a varrolhat la banca de donadas a balhat l’explicacion seguenta : $1",
'protectedpagewarning' => "'''AVERTIMENT : Aquesta pagina es protegida. Sols los utilizaires qu'an l'estatut d'administrator la p�don modificar. ''' La darri�ra entrada del jornal es afichada �aij�s per refer�ncia :",
'semiprotectedpagewarning' => "'''N�ta:''' Aquesta pagina es estada protegida d'un tal biais que sols los contributors enregistrats la p�scan modificar. La darri�ra entrada del jornal es afichada �aij�s per refer�ncia :",
'cascadeprotectedwarning' => "'''ATENCION :''' Aquesta pagina es estada protegida de biais que sols los administrators pòscan l’editar.
Aquesta proteccion es estada facha perque aquesta pagina es inclusa dins {{PLURAL:$1|una pagina protegida|de paginas protegidas}} amb la « proteccion en cascada » activada.",
'titleprotectedwarning' => "'''ATENCION : Aquesta pagina es estada protegida de tal biais que de [[Special:ListGroupRights|dreches especifics]] son requesits per la poder crear.''' La darri�ra entrada del jornal es afichada �aij�s per refer�ncia :",
'templatesused' => '{{PLURAL:$1|Modèl utilizat|Modèls utilizats}} sus aquesta pagina :',
'templatesusedpreview' => '{{PLURAL:$1|Modèl utilizat|Modèls utilizats}} dins aquesta previsualizacion :',
'templatesusedsection' => '{{PLURAL:$1|Modèl utilizat|Modèls utilizats}} dins aquesta seccion :',
'template-protected' => '(protegit)',
'template-semiprotected' => '(semiprotegit)',
'hiddencategories' => "{{PLURAL:$1|Categoria amagada|Categorias amagadas}} qu'aquesta pagina ne fa partida :",
'edittools' => '<!-- Tot tèxte picat aicí serà afichat jos las bóstias de modificacion o d’impòrt de fichièr. -->',
'nocreatetext' => '{{SITENAME}} a restrencha la possibilitat de crear de paginas novèlas.
Podètz tonar en rèire e modificar una pagina existenta, [[Special:UserLogin|vos connectar o crear un compte]].',
'nocreate-loggedin' => 'Avètz pas la permission de crear de paginas novèlas.',
'sectioneditnotsupported-title' => 'Modificacion de seccion pas presa en carga',
'sectioneditnotsupported-text' => "La modificacion d'una seccion es pas suportada dins aquesta pagina de modificacion.",
'permissionserrors' => 'Error de permission',
'permissionserrorstext' => 'Avètz pas la permission d’efectuar l’operacion demandada per {{PLURAL:$1|la rason seguenta|las rasons seguentas}} :',
'permissionserrorstext-withaction' => 'Sètz pas autorizat(ada) a $2, per {{PLURAL:$1|la rason seguenta|las rasons seguentas}} :',
'recreate-moveddeleted-warn' => "'''Atencion : sètz a tornar crear una pagina qu'es estada suprimida precedentament.'''

Demandatz-vos s'es vertadièrament apropriat de contunhar de l’editar.
L’istoric de las supressions e dels cambiaments de nom es afichat çaijós :",
'moveddeleted-notice' => "Aquesta pagina es estat suprimida.
L'istoric de las supressions e dels cambiaments de nom es afichat çaijós coma referéncia.",
'log-fulllog' => 'Veire lo jornal complet',
'edit-hook-aborted' => "Modificacion fracassada per croquet.
Cap d'explicacion pas balhada.",
'edit-gone-missing' => 'A pas pogut metre a jorn la pagina.
Sembla que siá estada suprimida.',
'edit-conflict' => 'Modificar lo conflicte.',
'edit-no-change' => 'Vòstra modificacion es estada ignorada perque cap de cambiament es pas estat fach dins lo tèxte.',
'postedit-confirmation' => 'Vòstra modificacion es estada salvada.',
'edit-already-exists' => 'La pagina novèla a pogut èsser creada .
Existís ja.',
'defaultmessagetext' => 'Messatge per defaut',
'content-failed-to-parse' => "Fracàs de l'analisi del contengut de $2 pel modèl $1: $3",
'invalid-content-data' => 'Donadas del contengut invalidas',
'content-not-allowed-here' => 'Lo contengut "$1" es pas autorizat sus la pagina [[$2]]',
'editwarning-warning' => "Quitar aquesta pagina vos farà pèrdre totas las modificacions qu'avètz fachas. Se sètz connectat amb vòstre compte, podètz levar aqueste avertiment dins la seccion « Modificacion » de vòstras preferéncias.",

# Content models
'content-model-wikitext' => 'wikitèxte',
'content-model-text' => 'tèxte brut',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Atencion : Aquesta pagina conten tròp d’apèls dispendioses de foncions del parser.

I deurià aver mens de {{PLURAL:$2|ampèl|ampèls}}, e actualament {{PLURAL:$1|i a $1 ampèl|i a $1 ampèls}}..',
'expensive-parserfunction-category' => 'Paginas amb tròp d’apèls dispendioses de foncions parsaires',
'post-expand-template-inclusion-warning' => "Atencion : Aquesta pagina conten tròp d'inclusions de modèls.
D'unas inclusions seràn pas efectuadas.",
'post-expand-template-inclusion-category' => "Paginas que contenon tròp d'inclusions de modèls",
'post-expand-template-argument-warning' => "Atencion : Aquesta pagina conten al mens un paramètre de modèl que l'inclusion es renduda impossibla. Aprèp extension, aqueste auriá produch un resultat tròp long, doncas, es pas estat inclut.",
'post-expand-template-argument-category' => 'Paginas que contenon al mens un paramètre de modèl pas evaluat',
'parser-template-loop-warning' => 'Modèl en bocla detectat : [[$1]]',
'parser-template-recursion-depth-warning' => 'Limit de longor de la recursion del modèl depassat ($1)',
'language-converter-depth-warning' => 'Limit de prigondor del convertissor de lenga depassada ($1)',
'node-count-exceeded-category' => 'Paginas ont nombre de nosèls es depassat',
'node-count-exceeded-warning' => 'Pagina depassant lo nombre de nosèls',
'expansion-depth-exceeded-category' => "Paginas ont la prigondor d'espandiment es depassada",
'expansion-depth-exceeded-warning' => "Pagina depassant la prigondor d'espandiment",
'parser-unstrip-loop-warning' => 'Bocla pas desmontabla detectada',
'parser-unstrip-recursion-limit' => 'Limit de recursion pas desmontable depassat ($1)',
'converter-manual-rule-error' => 'Error detectada dins la règla manuala de conversion de lenga',

# "Undo" feature
'undo-success' => "Aquesta modificacion va èsser desfacha. Confirmatz los cambiaments (visibles en bas d'aquesta pagina), puèi salvatz se sètz d’acòrdi. Mercés de motivar l’anullacion dins la bóstia de resumit.",
'undo-failure' => 'Aquesta modificacion a pas pogut èsser desfacha a causa de conflictes amb de modificacions intermediàrias.',
'undo-norev' => 'La modificacion a pas pogut èsser desfacha perque siá es inexistenta siá es estada suprimida.',
'undo-summary' => 'Anullacion de las modificacions $1 de [[Special:Contributions/$2|$2]] ([[User talk:$2|discutir]] | [[Special:Contributions/$2|{{MediaWiki:Contribslink}}]])',
'undo-summary-username-hidden' => 'Anullar la revision $1 per un utilizaire amagat',

# Account creation failure
'cantcreateaccounttitle' => 'Podètz pas crear de compte.',
'cantcreateaccount-text' => "La creacion de compte dempuèi aquesta adreça IP ('''$1''') es estada blocada per [[User:$3|$3]].

La rason balhada per $3 èra ''$2''.",

# History pages
'viewpagelogs' => 'Vejatz las operacions per aquesta pagina',
'nohistory' => "Existís pas d'istoric per aquesta pagina.",
'currentrev' => 'Version actuala',
'currentrev-asof' => 'Version actuala en data del $1',
'revisionasof' => 'Version del $1',
'revision-info' => 'Version del $1 per $2',
'previousrevision' => '← Version precedenta',
'nextrevision' => 'Version seguenta →',
'currentrevisionlink' => 'vejatz la version correnta',
'cur' => 'actu',
'next' => 'seg',
'last' => 'darr',
'page_first' => 'primièra',
'page_last' => 'darrièra',
'histlegend' => 'Legenda : ({{MediaWiki:Cur}}) = diferéncia amb la version actuala ,
({{MediaWiki:Last}}) = diferéncia amb la version precedenta, <b>m</b> = cambiament menor',
'history-fieldset-title' => "Percórrer l'istoric",
'history-show-deleted' => 'Suprimits solament',
'histfirst' => 'Las mai ancianas',
'histlast' => 'Las mai recentas',
'historysize' => '({{PLURAL:$1|1 octet|$1 octets}})',
'historyempty' => '(void)',

# Revision feed
'history-feed-title' => 'Istoric de las versions',
'history-feed-description' => 'Istoric per aquesta pagina sul wiki',
'history-feed-item-nocomment' => '$1 lo $2',
'history-feed-empty' => 'La pagina demandada existís pas.
Benlèu es estada escafada o renomenada.
Ensajatz de [[Special:Search|recercar sul wiki]] per trobar de paginas en rapòrt.',

# Revision deletion
'rev-deleted-comment' => '(comentari suprimit)',
'rev-deleted-user' => '(nom d’utilizaire suprimit)',
'rev-deleted-event' => '(entrada suprimida)',
'rev-deleted-user-contribs' => "[nom d'utilizaire o adreça IP suprimida - modificacion amagada sus las contribucions]",
'rev-deleted-text-permission' => "Aquesta version de la pagina es estada '''escafada'''.
I pòt aver de detalhs dins lo [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} jornal dels escafaments].",
'rev-deleted-text-unhide' => "Aquesta version de la pagina es estada '''escafada'''.
I pòt aver mai de detalhs dins [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} lo jornal dels escafaments].
Coma administrator, podètz encara [$1 veire aquesta version] s'o volètz.",
'rev-suppressed-text-unhide' => "Aquesta version de la pagina es estada '''suprimida'''.
I pòt aver mai de detalhs dins [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} lo jornal de las supressions].
Coma administrator, podètz encara [$1 veire aquesta version] s'o volètz.",
'rev-deleted-text-view' => "Aquesta version de la pagina es estada '''escafada'''.
La podètz visualizar ; de detalhs son disponibles dins lo [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} jornal dels escafaments].",
'rev-suppressed-text-view' => "Aquesta version de la pagina es estada '''suprimida'''.
La podètz visualizar ; de detalhs son disponibles dins lo [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} jornal de las supressions].",
'rev-deleted-no-diff' => "Podètz pas veire aquesta dif per que una de las versions es estada '''escafada'''.
I pòt aver mai de detalhs dins lo [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} jornal dels escafaments].",
'rev-suppressed-no-diff' => "Pod�tz pas veire aquesta difer�ncia perque una de las revisions es estada '''suprimida'''.",
'rev-deleted-unhide-diff' => "Una de las revisions d'aquesta diferéncia es estada '''escafada'''.
De detalhs son disponibles dins lo [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} jornal dels escafaments].
Podètz totjorn [$1 veire aquesta diferéncia] se lo volètz.",
'rev-suppressed-unhide-diff' => "Una de las revisions d'aqueste diff es estada '''suprimida'''.
De detalhs son disponibles dins lo [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} jornal de las supressions].
Podètz totjorn [$1 veire aqueste diff] se volètz contunhar.",
'rev-deleted-diff-view' => "Una de las revisions d'aquesta diff es estada '''suprimida'''.
Podètz veire aquesta diff ; i pòt aver mai de detalhs dins lo [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} jornal de las supressions].",
'rev-suppressed-diff-view' => "Una de las revisions d'aquesta diff es estada '''escafada'''.
Podètz veire aquesta diff ; i pòt aver mai de detalhs dins lo [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} jornal dels escafaments].",
'rev-delundel' => 'afichar/amagar',
'rev-showdeleted' => 'afichar',
'revisiondelete' => 'Suprimir/Restablir de versions',
'revdelete-nooldid-title' => 'Cibla per la revision invalida',
'revdelete-nooldid-text' => "Avètz pas precisat la o las revision(s) cibla(s) per utilizar aquesta foncion, la revision cibla existís pas, o alara la revision cibla es la qu'es en cors.",
'revdelete-nologtype-title' => 'Cap de tipe de jornal pas balhat',
'revdelete-nologtype-text' => 'Avètz pas especificat un tipe de jornal sul qual aquesta accion deu èsser realizada.',
'revdelete-nologid-title' => 'Entrada del jornal invalida',
'revdelete-nologid-text' => 'Siá avètz pas especificat un eveniment del jornal sul qual aquesta accion se deu realizar, siá existís pas.',
'revdelete-no-file' => 'Lo fichièr especificat existís pas.',
'revdelete-show-file-confirm' => 'Sètz segur(a) que volètz veire la revision suprimida del fichièr « <nowiki>$1</nowiki> » datant del $2 a $3?',
'revdelete-show-file-submit' => 'Òc',
'revdelete-selected' => "'''{{PLURAL:$2|Version seleccionada|Versions seleccionadas}} de [[:$1]] :'''",
'logdelete-selected' => "'''{{PLURAL:$1|Eveniment d'istoric seleccionat|Eveniments d'istoric seleccionats}} :'''",
'revdelete-text' => "'''Las revisions e eveniments suprimits apareisseràn encara dins l’istoric e los jornals de la pagina, mas lor contengut textual serà inaccessible al public.'''
D’autres administrators sus {{SITENAME}} poiràn totjorn accedir al contengut amagat e lo restablir tornamai a travèrs d'aquesta meteissa interfàcia, a mens qu’una restriccion suplementària siá mesa en plaça pels operators del site.",
'revdelete-confirm' => "Confirmatz que volètz efectuar aquesta accion, que ne comprenètz las consequéncias, e qu'o fasètz en acòrd amb [[{{MediaWiki:Policy-url}}|las règlas]].",
'revdelete-suppress-text' => "La supression deu èsser utilizada '''sonque''' dins los cases seguents :
* Informacions personalas inapropriadas
*: ''adreça, numèro de telefòn, numèro de seguretat sociala, ...''",
'revdelete-legend' => 'Metre en plaça de restriccions de version :',
'revdelete-hide-text' => 'Tèxte de la revision',
'revdelete-hide-image' => 'Amagar lo contengut del fichièr',
'revdelete-hide-name' => 'Amagar l’accion e la cibla',
'revdelete-hide-comment' => 'Modificar lo resumit',
'revdelete-hide-user' => 'Nom d’utilizaire/Adreça IP de l’editor',
'revdelete-hide-restricted' => 'Suprimir aquestas donadas als administrators e mai als autres',
'revdelete-radio-same' => '(cambiar pas)',
'revdelete-radio-set' => 'Visible',
'revdelete-radio-unset' => 'Amagat',
'revdelete-suppress' => 'Suprimir las donadas dels administrators e tanben dels autres utilizaires',
'revdelete-unsuppress' => 'Levar las restriccions sus las versions restablidas',
'revdelete-log' => 'Motiu :',
'revdelete-submit' => 'Aplicar {{PLURAL:$1|a la version seleccionada|a las versions seleccionadas}}',
'revdelete-success' => "'''Visibilitat de las versions mesas a jorn amb succès.'''",
'revdelete-failure' => "'''La visibilitat de la revision a pas pogut èsser mesa a jorn :'''
$1",
'logdelete-success' => "'''Jornal de las visibilitat parametrat amb succès.'''",
'logdelete-failure' => "'''La visibilitat del jornal a pas pogut èsser definida :'''
$1",
'revdel-restore' => 'Modificar la visibilitat',
'revdel-restore-deleted' => 'revisions suprimidas',
'revdel-restore-visible' => 'revisions visiblas',
'pagehist' => 'Istoric de la pagina',
'deletedhist' => 'Istoric de las supressions',
'revdelete-hide-current' => "Error al moment de la supression de l'element datat del $1 e $2 : es la revision correnta.
Pòt pas èsser suprimit.",
'revdelete-show-no-access' => "Error al moment de l'afichatge de l'element datat del $1 e $2 : es marcat coma « restrench ».
I avètz pas accès.",
'revdelete-modify-no-access' => "Error al moment de la modificacion de l'element datat del $1 a $2 : es marcat coma « restrench ».
I avètz pas accès.",
'revdelete-modify-missing' => "Error al moment de la modificacion de l'element amb l'ID $1 : es mancant dins la banca de donadas !",
'revdelete-no-change' => "'''Atencion :''' l'element datat del $1 a $2 ja a los paramètres de visibilitat demandats.",
'revdelete-concurrent-change' => "Error al moment de la modificacion de l'element datat del $1 a $2 : son estatut es estat cambiat per qualqu'un mai pendent qu'o modificatz.
Verificatz los jornals.",
'revdelete-only-restricted' => "Error al moment de la supression de l'entrada datada del $1 a $2 : podètz pas suprimir aqueles elements als administrators sens seleccionar tanben d'opcions de supression mai.",
'revdelete-reason-dropdown' => "* Rasons correntas de supression
** Violacion dels dreches d'autors
** Entresenhas personalas inapropriadas
** Nom d'utilizaire inapropriat
** Informacions potencialament difamatòrias.",
'revdelete-otherreason' => 'Autra rason / rason suplementària :',
'revdelete-reasonotherlist' => 'Autra rason',
'revdelete-edit-reasonlist' => 'Modifica los motius de la supression',
'revdelete-offender' => 'Autor de la revision :',

# Suppression log
'suppressionlog' => 'Jornal de las supressions',
'suppressionlogtext' => 'Çaijós, se tròba la lista de las supressions e dels blocatges que comprenon las revisions amagadas als administrators. Vejatz [[Special:BlockList|la lista dels blocatges de las IP]] per la lista dels fòrabandiments e dels blocatges operacionals.',

# History merging
'mergehistory' => "Fusion dels istorics d'una pagina",
'mergehistory-header' => "Aquesta pagina vos permet de fusionar las revisions de l'istoric d'una pagina d'origina cap a una novèla.
Asseguratz-vos qu'aqueste cambiament pòsca conservar la continuitat de l'istoric.",
'mergehistory-box' => 'Fusionar las versions de doas paginas :',
'mergehistory-from' => "Pagina d'origina :",
'mergehistory-into' => 'Pagina de destinacion :',
'mergehistory-list' => 'Edicion dels istorics fusionables',
'mergehistory-merge' => "Las versions seguentas de [[:$1]] pòdon èsser fusionadas amb [[:$2]]. Utilizatz lo boton ràdio de la colomna per fusionar unicament las versions creadas del començament fins a la data indicada. Notatz plan que l'utilizacion dels ligams de navigacion reïnicializarà la colomna.",
'mergehistory-go' => 'Veire las edicions fusionablas',
'mergehistory-submit' => 'Fusionar las revisions',
'mergehistory-empty' => 'Cap de revision pòt pas èsser fusionada.',
'mergehistory-success' => '$3 {{PLURAL:$3|revision|revisions}} de [[:$1]] {{PLURAL:$3|fusionada|fusionadas}} amb succès amb [[:$2]].',
'mergehistory-fail' => 'Impossible de procedir a la fusion dels istorics. Seleccionatz  tornamai la pagina e mai los paramètres de data.',
'mergehistory-no-source' => "La pagina d'origina $1 existís pas.",
'mergehistory-no-destination' => 'La pagina de destinacion $1 existís pas.',
'mergehistory-invalid-source' => 'La pagina d’origina deu aver un títol valid.',
'mergehistory-invalid-destination' => 'La pagina de destinacion deu aver un títol valid.',
'mergehistory-autocomment' => '[[:$1]] fusionat amb [[:$2]]',
'mergehistory-comment' => '[[:$1]] fusionat amb [[:$2]] : $3',
'mergehistory-same-destination' => "Las paginas d'origina e de destinacion pòdon pas èsser la meteissa",
'mergehistory-reason' => 'Motiu :',

# Merge log
'mergelog' => 'Istoric de las fusions',
'pagemerge-logentry' => '[[$1]] fusionada amb [[$2]] (revisions fins al $3)',
'revertmerge' => 'Separar',
'mergelogpagetext' => "Vaquí, çaijós, la lista de las fusions las mai recentas de l'istoric d'una pagina amb una autra.",

# Diffs
'history-title' => '$1 : Istoric de las versions',
'difference-title' => '$1 : Diferéncia entre versions',
'difference-title-multipage' => 'Diferéncias entre las paginas « $1 » e « $2 »',
'difference-multipage' => '(Diferéncias entre las paginas)',
'lineno' => 'Linha $1 :',
'compareselectedversions' => 'Comparar las versions seleccionadas',
'showhideselectedversions' => 'Afichar/amagar las versions seleccionadas',
'editundo' => 'desfar',
'diff-empty' => '(Pas cap de diferéncia)',
'diff-multi' => '({{PLURAL:$1|Una revision intermediària amagada|$1 revisions intermediàrias amagadas}}) per ({{PLURAL:$2|un utilizaire pas afichada|$2 utilizaires pas afichadas}})',
'diff-multi-manyusers' => '({{PLURAL:$1|Una revision intermediària amagada|$1 revisions intermediàrias amagadas}}) per ({{PLURAL:$2|un utilizaire pas afichada|$2 utilizaires pas afichadas}})',
'difference-missing-revision' => "{{PLURAL:$2|Una revision|$2 revisions}} d'aquesta diferéncia ($1) {{PLURAL:$2|es pas estada trobada|son pas estadas trobadas}}.

Aquò se produtz en general en seguent un ligam de diferéncia obsolèta cap a una pagina qu'es estada suprimada.
Podètz trobar de detalhs dins lo [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} jornal de las supressions].",

# Search results
'searchresults' => 'Resultats de la recèrca',
'searchresults-title' => 'Resultats de la recèrca per « $1 »',
'searchresulttext' => "Per mai d'informacions sus la recèrca dins {{SITENAME}}, vejatz [[{{MediaWiki:Helppage}}|{{int:help}}]].",
'searchsubtitle' => "Avètz recercat « '''[[:$1]]''' » ([[Special:Prefixindex/$1|totas las paginas que començan per « $1 »]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|totas las paginas qu'an un ligam cap a « $1 »]])",
'searchsubtitleinvalid' => 'Avètz recercat « $1 »',
'toomanymatches' => 'Tròp d’ocuréncias son estadas trobadas, sètz pregat de sometre una requèsta diferenta.',
'titlematches' => "Correspondéncias dins los títols d'articles",
'notitlematches' => "Cap de títol d'article correspond pas a la recèrca.",
'textmatches' => "Correspondéncias dins los tèxtes d'articles",
'notextmatches' => "Cap de tèxte d'article correspond pas a la recèrca",
'prevn' => '{{PLURAL:$1|precedenta|$1 precedentas}}',
'nextn' => '{{PLURAL:$1|seguenta|$1 seguentas}}',
'prevn-title' => '$1 {{PLURAL:$1|resultat precedent|resultats precedents}}',
'nextn-title' => '$1 {{PLURAL:$1|resultat seguent|resultats seguents}}',
'shown-title' => 'Afichar $1 {{PLURAL:$1|resultat|resultats}} per pagina',
'viewprevnext' => 'Veire ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Opcions de recèrca',
'searchmenu-exists' => "* Pagina '''[[$1]]'''",
'searchmenu-new' => "'''Crear la pagina ''[[:$1|$1]]'' sus aqueste wiki !'''",
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Recercar las paginas amb aqueste prefix]]',
'searchprofile-articles' => 'Paginas de contengut',
'searchprofile-project' => "Paginas d'ajuda e del projècte",
'searchprofile-images' => 'Multimèdia',
'searchprofile-everything' => 'Tot',
'searchprofile-advanced' => 'Avançat',
'searchprofile-articles-tooltip' => 'Recercar dins $1',
'searchprofile-project-tooltip' => 'Recercar dins $1',
'searchprofile-images-tooltip' => 'Recercar de fichièrs',
'searchprofile-everything-tooltip' => 'Recercar dins tot lo contengut (tot incluissent las paginas de discussion)',
'searchprofile-advanced-tooltip' => "Recercar dins d'espacis de noms personalizats",
'search-result-size' => '$1 ({{PLURAL:$2|1 mot|$2 mots}})',
'search-result-category-size' => '$1 membre{{PLURAL:$1||s}} ($2 soscategoria{{PLURAL:$2||s}}, $3 fichièr{{PLURAL:$3||s}})',
'search-result-score' => 'Pertinéncia : $1%',
'search-redirect' => '(redireccion cap a $1)',
'search-section' => '(seccion $1)',
'search-suggest' => 'Avètz volgut dire : $1',
'search-interwiki-caption' => 'Projèctes fraires',
'search-interwiki-default' => '$1 resultats :',
'search-interwiki-more' => '(mai)',
'search-relatedarticle' => 'Relatat',
'mwsuggest-disable' => 'Desactivar las suggestions de recèrca',
'searcheverything-enable' => 'Recercar dins totes los espacis de noms',
'searchrelated' => 'relatat',
'searchall' => 'Totes',
'showingresults' => "Afichatge {{PLURAL:$1|d''''1''' resultat|de '''$1''' resultats}} a partir del #'''$2'''.",
'showingresultsnum' => "Afichatge {{PLURAL:$3|d''''1''' resultat|de '''$3''' resultats}} a partir del #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Resultat '''$1'''|Resultats '''$1 - $2'''}} de '''$3''' per '''$4'''",
'nonefound' => "<strong>Nòta</strong>: Sonque qualques espacis de noms son recercats per defaut
Ensajatz en utilizant lo prefix ''all:'' per recercar tot lo contengut (tot incluent las paginas de discussion, los modèls, etc), o utilizatz l'espaci de nom coma prefix.",
'search-nonefound' => 'I a pas cap de resultat correspondent a la requèsta.',
'powersearch' => 'Recèrca avançada',
'powersearch-legend' => 'Recèrca avançada',
'powersearch-ns' => 'Recercar dins los espacis de nom :',
'powersearch-redir' => 'Lista de las redireccions',
'powersearch-field' => 'Recercar',
'powersearch-togglelabel' => 'Marcar :',
'powersearch-toggleall' => 'Tot',
'powersearch-togglenone' => 'Pas cap',
'search-external' => 'Recèrca extèrna',
'searchdisabled' => 'La recèrca sus {{SITENAME}} es desactivada.
En esperant la reactivacion, podètz efectuar una recèrca via Google.
Atencion, lor indexacion de contengut {{SITENAME}} benlèu es pas a jorn.',
'search-error' => "Una error s'es producha en recercant : $1",

# Preferences page
'preferences' => 'Preferéncias',
'mypreferences' => 'Preferéncias',
'prefs-edits' => 'Nombre d’edicions :',
'prefsnologin' => 'Vos sètz pas identificat(ada)',
'prefsnologintext' => 'Vos cal èsser <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} connectat(ada)]</span> per modificar vòstras preferéncias d’utilizaire.',
'changepassword' => 'Modificacion del senhal',
'prefs-skin' => 'Aparéncia',
'skin-preview' => 'Previsualizar',
'datedefault' => 'Cap de preferéncia',
'prefs-beta' => 'Foncionalitats bèta',
'prefs-datetime' => 'Data e ora',
'prefs-labs' => 'Foncionalitats « labs »',
'prefs-user-pages' => "Paginas d'utilizaire",
'prefs-personal' => 'Entresenhas personalas',
'prefs-rc' => 'Darrièrs cambiaments',
'prefs-watchlist' => 'Lista de seguiment',
'prefs-watchlist-days' => "Nombre de jorns d'afichar dins la lista de seguiment :",
'prefs-watchlist-days-max' => '(maximum $1 jorn{{PLURAL:$1||s}})',
'prefs-watchlist-edits' => "Nombre de modificacions d'afichar dins la lista de seguiment espandida :",
'prefs-watchlist-edits-max' => 'Nombre maximum : 1000',
'prefs-watchlist-token' => 'Geton per la lista de seguiment :',
'prefs-misc' => 'Preferéncias divèrsas',
'prefs-resetpass' => 'Modificar lo senhal',
'prefs-changeemail' => "Cambiar l'adreça electronica:",
'prefs-setemail' => 'Entrar una adreça electronica',
'prefs-email' => 'Opcions del corrièr electronic',
'prefs-rendering' => 'Aparéncia',
'saveprefs' => 'Enregistrar las preferéncias',
'resetprefs' => 'Restablir las preferéncias',
'restoreprefs' => 'Restablir totes los paramètres per defaut (dins totas las seccions)',
'prefs-editing' => 'Fenèstra de modificacion',
'rows' => 'Rengadas :',
'columns' => 'Colomnas :',
'searchresultshead' => 'Recèrca',
'resultsperpage' => 'Nombre de responsas per pagina :',
'stub-threshold' => 'Limit superior pels <a href="#" class="stub">ligams cap als esbòsses</a> (octets) :',
'stub-threshold-disabled' => 'Desactivat',
'recentchangesdays' => "Nombre de jorns d'afichar dins los darrièrs cambiaments :",
'recentchangesdays-max' => '(maximum $1 {{PLURAL:$1|jorn|jorns}})',
'recentchangescount' => "Nombre de modificacions d'afichar per defaut :",
'prefs-help-recentchangescount' => 'Aquò inclutz las modificacions recentas, las paginas d’istorics e los jornals.',
'prefs-help-watchlist-token2' => 'Aquí la clau secreta del flux Web de vòstra lista de seguiment.
Tota persona que la coneis poirà legir vòstra lista de seguiment, doncas, la comuniquetz pas.
[[Special:ResetTokens|Clicatz aicí se la vos cal reïnicializar]].',
'savedprefs' => 'Las preferéncias son estadas salvadas.',
'timezonelegend' => 'Fus orari :',
'localtime' => 'Ora locala :',
'timezoneuseserverdefault' => 'Utilizar la valor del servidor ($1)',
'timezoneuseoffset' => 'Autre (especificar lo descalatge)',
'timezoneoffset' => 'Decalatge orari¹ :',
'servertime' => 'Ora del servidor :',
'guesstimezone' => 'Utilizar la valor del navigador',
'timezoneregion-africa' => 'Africa',
'timezoneregion-america' => 'America',
'timezoneregion-antarctica' => 'Antartica',
'timezoneregion-arctic' => 'Artic',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Ocean Atlantic',
'timezoneregion-australia' => 'Austràlia',
'timezoneregion-europe' => 'Euròpa',
'timezoneregion-indian' => 'Ocean Indian',
'timezoneregion-pacific' => 'Ocean Pacific',
'allowemail' => 'Autorizar lo mandadís de corrièr electronic venent d’autres utilizaires',
'prefs-searchoptions' => 'Recèrca',
'prefs-namespaces' => 'Noms d’espacis',
'defaultns' => 'Autrament recercar dins aquestes espacis de noms :',
'default' => 'defaut',
'prefs-files' => 'Fichièrs',
'prefs-custom-css' => 'CSS personalizat',
'prefs-custom-js' => 'JS personalizat',
'prefs-common-css-js' => 'JavaScript e CSS partejat per totes los abilhatges :',
'prefs-reset-intro' => 'Podètz utilizar aquesta pagina per restablir vòstras preferéncias a las valors per defaut del site. Aquò pòt pas èsser desfach.',
'prefs-emailconfirm-label' => 'Confirmacion del corrièr electronic :',
'youremail' => 'Adreça de corrièr electronic :',
'username' => "{{GENDER:$1|Nom d'utilizaire|Nom d'utilizaira}}:",
'uid' => "Numèro d'{{GENDER:$1|utilizaire|utilizaira}}:",
'prefs-memberingroups' => '{{GENDER:$2|Membre|Membra}} {{PLURAL:$1|del grop|dels gropes}}:',
'prefs-registration' => 'Data de creacion del compte :',
'yourrealname' => 'Nom vertadièr :',
'yourlanguage' => "Lenga de l'interfàcia :",
'yourvariant' => 'Varianta lingüistica :',
'prefs-help-variant' => "Vòstra varianta o ortografia preferida dins la quala cal afichar las paginas de contengut d'aqueste wiki.",
'yournick' => 'Signatura per las discussions :',
'prefs-help-signature' => 'Los comentaris sus las paginas de discussion devon èsser signats amb « <nowiki>~~~~</nowiki> », que serà convertit en vòstra signatura e un orodatament.',
'badsig' => 'Signatura bruta incorrècta, verificatz vòstras balisas HTML.',
'badsiglength' => 'Vòstra signatura es tròp longa.
Deu aver, al maximum $1 caractèr{{PLURAL:$1||s}}.',
'yourgender' => 'Cossí vos agrada mai èsser descrich ?',
'gender-unknown' => "M'agrada mai sens detalh",
'gender-male' => 'Modifica de pagina del wiki',
'gender-female' => 'Modifica de paginas del wiki',
'prefs-help-gender' => 'Definir aquesta preferéncia es facultatiu.
Aqueste logicial utiliza sa valor per s’adreçar a vos e vos mencionar als autres en utilizant lo bon genre gramatical.
Aquesta informacion serà publica.',
'email' => 'Corrièr electronic',
'prefs-help-realname' => "(facultatiu) : se l'especificatz, serà utilizat per vos atribuir vòstras contribucions.",
'prefs-help-email' => 'L’adreça de corrièr electronic es facultativa mas vos permet de reçaupre lo senhal se lo doblidatz.
Tanben podètz causir de permetre a d’autres de vos contactar per vòstra pagina d’utilizaire o la de discussion sens sofracha de desvelar vòstra idenditat.',
'prefs-help-email-others' => "Tanben podètz causir de daissar los autres vos contactar sus vòstra pagina de discussion d'utilizaire sens que siá necessari de revelar vòstra identitat.",
'prefs-help-email-required' => 'Una adreça de corrièr electronic es requesa.',
'prefs-info' => 'Informacion de basa',
'prefs-i18n' => 'Internationalizacion',
'prefs-signature' => 'Signatura',
'prefs-dateformat' => 'Format de las datas',
'prefs-timeoffset' => 'Descalatge orari',
'prefs-advancedediting' => 'Opcions generalas',
'prefs-editor' => 'Editor',
'prefs-preview' => 'Apercebut',
'prefs-advancedrc' => 'Opcions avançadas',
'prefs-advancedrendering' => 'Opcions avançadas',
'prefs-advancedsearchoptions' => 'Opcions avançadas',
'prefs-advancedwatchlist' => 'Opcions avançadas',
'prefs-displayrc' => "Opcions d'afichatge",
'prefs-displaysearchoptions' => "Opcions d'afichatge",
'prefs-displaywatchlist' => "Opcions d'afichatge",
'prefs-tokenwatchlist' => 'Geton',
'prefs-diffs' => 'Diferéncias',
'prefs-help-prefershttps' => 'Aquesta preferéncia serà efectiva al moment de vòstra connexion que ven.',

# User preference: email validation using jQuery
'email-address-validity-valid' => "L'adreça electronica sembla bona",
'email-address-validity-invalid' => 'entrar una adreça electronica valida',

# User rights
'userrights' => "Gestion dels dreches d'utilizaire",
'userrights-lookup-user' => "Gestion dels dreches d'utilizaire",
'userrights-user-editname' => 'Entrar un nom d’utilizaire :',
'editusergroup' => "Modificacion dels gropes d'utilizaires",
'editinguser' => "Modificacion dels dreches de l'{{GENDER:$1|utilizaire|utilizaire}} '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Modificar los gropes de l’utilizaire',
'saveusergroups' => "Salvar los gropes d'utilizaires",
'userrights-groupsmember' => 'Membre de :',
'userrights-groupsmember-auto' => 'Membre implicit de :',
'userrights-groups-help' => "Podètz modificar los gropes alsquals aparten aqueste utilizaire.
* Una casa marcada significa que l'utilizaire se tròba dins aqueste grop.
* Una casa pas marcada significa, al contrari, que s’i tròba pas.
* Una * indica que podretz pas levar aqueste grop un còp que l'auretz apondut e vice-versa.",
'userrights-reason' => 'Motiu :',
'userrights-no-interwiki' => "Sètz pas abilitat per modificar los dreches dels utilizaires sus d'autres wikis.",
'userrights-nodatabase' => 'La banca de donadas « $1 » existís pas o es pas en local.',
'userrights-nologin' => "Vos cal [[Special:UserLogin|vos connectar]] amb un compte d'administrator per balhar los dreches d'utilizaire.",
'userrights-notallowed' => "Avètz pas la permission d'apondre o suprimir de dreches d'utilizaire.",
'userrights-changeable-col' => 'Los gropes que podètz cambiar',
'userrights-unchangeable-col' => 'Los gropes que podètz pas cambiar',
'userrights-conflict' => "Conflicte de modificacion de dreches d'utilizaire ! Relegissètz e confirmatz vòstras modificacions.",
'userrights-removed-self' => 'Avètz suprimit vòstres pròpris dreches corrèctament. Del còp, podètz pas mai accedir a aquela pagina.',

# Groups
'group' => 'Grop :',
'group-user' => 'Utilizaires',
'group-autoconfirmed' => 'Utilizaires enregistrats',
'group-bot' => 'Bòts',
'group-sysop' => 'Administrators',
'group-bureaucrat' => 'Burocratas',
'group-suppress' => 'Supervisors',
'group-all' => '(totes)',

'group-user-member' => 'Utilizaire',
'group-autoconfirmed-member' => 'Utilizaire enregistrat',
'group-bot-member' => 'Robòt',
'group-sysop-member' => 'Administrator',
'group-bureaucrat-member' => 'Burocrata',
'group-suppress-member' => 'Supervisor',

'grouppage-user' => '{{ns:project}}:Utilizaires',
'grouppage-autoconfirmed' => '{{ns:project}}:Utilizaires enregistrats',
'grouppage-bot' => '{{ns:project}}:Bòts',
'grouppage-sysop' => '{{ns:project}}:Administrators',
'grouppage-bureaucrat' => '{{ns:project}}:Burocratas',
'grouppage-suppress' => '{{ns:project}}:Supervisor',

# Rights
'right-read' => 'Legir las paginas',
'right-edit' => 'Modificar las paginas',
'right-createpage' => 'Crear de paginas (que son pas de paginas de discussion)',
'right-createtalk' => 'Crear de paginas de discussion',
'right-createaccount' => "Crear de comptes d'utilizaire novèls",
'right-minoredit' => 'Marcar de cambiaments coma menors',
'right-move' => 'Tornar nomenar de paginas',
'right-move-subpages' => 'Desplaçar de paginas amb lor sospaginas',
'right-move-rootuserpages' => 'Tornar nomenar las paginas de l’utilizaire de banca.',
'right-movefile' => 'Desplaçar los fichièrs',
'right-suppressredirect' => 'Crear pas de redireccion dempuèi la pagina anciana en renomenant la pagina',
'right-upload' => 'Telecargar de fichièrs',
'right-reupload' => 'Espotir un fichièr existent',
'right-reupload-own' => 'Espotir un fichièr telecargat pel meteis utilizaire',
'right-reupload-shared' => 'Espotir localament un fichièr present sus un depaus partejat',
'right-upload_by_url' => 'Importar un fichièr dempuèi una adreça URL',
'right-purge' => "Purgar l'amagatal de las paginas sens l'aver de confirmar",
'right-autoconfirmed' => 'Èsser pas afectat per las limitacions de debit ligadas a las adreças IP',
'right-bot' => 'Èsser tractat coma un procediment automatizat',
'right-nominornewtalk' => 'Desenclavar pas lo bendèl "Avètz de messatges novèls" al moment d\'un cambiament menor sus una pagina de discussion d\'un utilizaire',
'right-apihighlimits' => "Utilizar de limits superiors dins las requèstas l'API",
'right-writeapi' => "Utilizar l'API per modificar lo wiki",
'right-delete' => 'Suprimir de paginas',
'right-bigdelete' => "Suprimir de paginas amb d'istorics grands",
'right-deletelogentry' => 'Suprimir e restablir una entrada particulara del jornal',
'right-deleterevision' => "Suprimir e restablir una revision especifica d'una pagina",
'right-deletedhistory' => 'Veire las entradas dels istorics suprimits mas sens lor tèxte',
'right-deletedtext' => 'Veire lo tèxte suprimit e las diferéncias entre las versions suprimidas',
'right-browsearchive' => 'Recercar de paginas suprimidas',
'right-undelete' => 'Restablir una pagina',
'right-suppressrevision' => 'Examinar e restablir las revisions amagadas als administrators',
'right-suppressionlog' => 'Veire los jornals privats',
'right-block' => "Blocar d'autres utilizaires en escritura",
'right-blockemail' => 'Empachar un utilizaire de mandar de corrièrs electronics',
'right-hideuser' => 'Blocar un utilizaire en amagant son nom al public',
'right-ipblock-exempt' => "Èsser pas afectat per las IP blocadas, los blocatges automatics e los blocatges de plajas d'IP",
'right-proxyunbannable' => 'Èsser pas afectat pels blocatges automatics de servidors mandataris',
'right-unblockself' => 'Se desblocar se-meteis',
'right-protect' => 'Modificar los nivèls de proteccion e modificar las paginas protegidas en cascada',
'right-editprotected' => 'Modificar las paginas protegidas amb « {{int:protect-level-sysop}} »',
'right-editsemiprotected' => 'Modificar las paginas protegidas amb « {{int:protect-level-autoconfirmed}} »',
'right-editinterface' => "Modificar l'interfàcia d'utilizaire",
'right-editusercssjs' => "Modificar los fichièrs CSS e JS d'autres utilizaires",
'right-editusercss' => "Modificar los fichièrs CSS d'autres utilizaires",
'right-edituserjs' => "Modificar los fichièrs JS d'autres utilizaires",
'right-editmyusercss' => 'Modificar vòstres pròpris fichièrs CSS utilizaire',
'right-editmyuserjs' => 'Modificar vòstres pròpris fichièrs JavaScript utilizaire',
'right-viewmywatchlist' => 'Afichar vòstra pròpria lista de seguiment',
'right-viewmyprivateinfo' => 'Veire vòstras donadas personalas (exemple adreça, nom vertadièr)',
'right-editmyprivateinfo' => 'Modificar vòstras donadas personalas (exemple adreça, nom vertadièr)',
'right-editmyoptions' => 'Modificar vòstras preferéncias',
'right-rollback' => "Revocacion rapida del darrièr utilizaire qu'a modificat una pagina particulara",
'right-markbotedits' => 'Marcar los cambiaments revocats coma de cambiaments que son estats fachs per de robòts',
'right-noratelimit' => 'Pas afectat pels limits de taus',
'right-import' => "Importar de paginas dempuèi d'autres wikis",
'right-importupload' => 'Importar de paginas dempuèi un fichièr',
'right-patrol' => 'Marcar de cambiaments coma verificats',
'right-autopatrol' => 'Aver sos cambiaments marcats automaticament coma verificats',
'right-patrolmarks' => 'Utilizar las foncionalitats de la patrolha dels darrièrs cambiaments',
'right-unwatchedpages' => 'Veire la lista de las paginas pas seguidas',
'right-mergehistory' => 'Fusionar los istorics de las paginas',
'right-userrights' => "Modificar totes los dreches d'un utilizaire",
'right-userrights-interwiki' => "Modificar los dreches d'utilizaires que son sus un autre wiki",
'right-siteadmin' => 'Varrolhar e desvarrolhar la banca de donadas',
'right-override-export-depth' => 'Exportar las paginas en incluent las paginas ligadas fins a una prigondor de 5 nivèls',
'right-sendemail' => 'Mandar un corrièl als autres utilizaires',
'right-passwordreset' => 'Veire los corrièrs electronics de reïnicializacion dels senhals',

# Special:Log/newusers
'newuserlogpage' => 'Istoric de las creacions de comptes',
'newuserlogpagetext' => "Jornal de las creacions de comptes d'utilizaires.",

# User rights log
'rightslog' => "Istoric de las modificacions d'estatut",
'rightslogtext' => "Aquò es un jornal dels cambiaments d'estatut d’utilizaire.",

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'legir aquesta pagina',
'action-edit' => 'modificar aquesta pagina',
'action-createpage' => 'crear de paginas',
'action-createtalk' => 'crear de paginas de discussion',
'action-createaccount' => "crear aqueste compte d'utilizaire",
'action-minoredit' => 'marcar aqueste cambiament coma menor',
'action-move' => 'tornar nomenar aquesta pagina',
'action-move-subpages' => 'tornar nomenar aquesta pagina e sas sospaginas',
'action-move-rootuserpages' => 'tornar nomenar las paginas de l’utilizaire de banca.',
'action-movefile' => 'tornar nomenar aqueste fichièr',
'action-upload' => 'importar aqueste fichièr',
'action-reupload' => 'espotir aqueste fichièr existent',
'action-reupload-shared' => 'passar otra aqueste fichièr sus un depaus partejat',
'action-upload_by_url' => 'importar aqueste fichièr a partir d’una adreça internet',
'action-writeapi' => 'utilizar l‘API d’escritura',
'action-delete' => 'suprimir aquesta pagina',
'action-deleterevision' => 'suprimir aquesta version',
'action-deletedhistory' => "veire l’istoric suprimit d'aquesta pagina",
'action-browsearchive' => 'recercar de paginas suprimidas',
'action-undelete' => 'restablir aquesta pagina',
'action-suppressrevision' => 'tornar veire e restablir aquesta version suprimida',
'action-suppressionlog' => 'veire aqueste jornal privat',
'action-block' => 'blocar aqueste utilizaire a l’edicion',
'action-protect' => 'modificar los nivèls de proteccion per aquesta pagina',
'action-rollback' => "anullar rapidament las modificacions del darrièr utilizaire qu'a modificat una pagina donada",
'action-import' => 'importar de paginas dempuèi un autre wiki',
'action-importupload' => 'importar de paginas dempuèi un fichièr telecargat',
'action-patrol' => 'marcar la modificacion dels autres coma patrolhada',
'action-autopatrol' => 'aver vòstra modificacion marcada coma patrolhada',
'action-unwatchedpages' => 'veire la lista de las paginas pas susvelhadas',
'action-mergehistory' => "fusionar l’istoric d'aquesta pagina",
'action-userrights' => 'modificar totes los dreches d’utilizaire',
'action-userrights-interwiki' => 'modificar los dreches d’utilizaire e los sus d’autres wikis',
'action-siteadmin' => 'varrolhar o desvarrolhar la banca de donadas',
'action-sendemail' => 'mandar corrièrs electronics',
'action-editmywatchlist' => 'modificar vòstra lista de seguiment',
'action-viewmywatchlist' => 'afichar vòstra pròpria lista de seguiment',
'action-viewmyprivateinfo' => 'veire vòstras informacions personalas',
'action-editmyprivateinfo' => 'modificar vòstras informacions personalas',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|cambiament|cambiaments}}',
'enhancedrc-since-last-visit' => '$1 {{PLURAL:$1|dempuèi la darrièra visita}}',
'enhancedrc-history' => 'istoric',
'recentchanges' => 'Darrièrs cambiaments',
'recentchanges-legend' => 'Opcions dels darrièrs cambiaments',
'recentchanges-summary' => 'Vaquí sus aquesta pagina, los darrièrs cambiaments de {{SITENAME}}.',
'recentchanges-feed-description' => "Seguissètz los darrièrs cambiaments d'aqueste wiki dins un flux.",
'recentchanges-label-newpage' => 'Aquesta modificacion a creat una pagina novèla',
'recentchanges-label-minor' => 'Aqueste cambiament es menor',
'recentchanges-label-bot' => 'Aqueste cambiament es estat efectuat per un bòt.',
'recentchanges-label-unpatrolled' => 'Aqueste cambiament es pas estat verificat encara.',
'rcnote' => 'Vaquí {{PLURAL:$1|lo darrièr cambiament|los $1 darrièrs cambiaments}} dempuèi {{PLURAL:$2|lo darrièr jorn|los <b>$2</b> darrièrs jorns}}, determinat{{PLURAL:$1||s}} lo $4, a $5.',
'rcnotefrom' => "Vaquí los cambiaments efectuats dempuèi lo '''$2''' ('''$1''' al maximum).",
'rclistfrom' => 'Afichar las modificacions novèlas dempuèi lo $1.',
'rcshowhideminor' => '$1 los cambiaments menors',
'rcshowhidebots' => '$1 los robòts',
'rcshowhideliu' => '$1 los utilizaires enregistrats',
'rcshowhideanons' => '$1 los utilizaires anonims',
'rcshowhidepatr' => '$1 las modificacions susvelhadas',
'rcshowhidemine' => '$1 mas modificacions',
'rclinks' => 'Afichar los $1 darrièrs cambiaments efectuats al cors dels $2 darrièrs jorns; $3 cambiaments menors.',
'diff' => 'dif',
'hist' => 'ist',
'hide' => 'amagar',
'show' => 'far veire',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|utilizaire seguent|utilizaires seguents}}]',
'rc_categories' => 'Limit de las categorias (separacion amb « | »)',
'rc_categories_any' => 'Totas',
'rc-change-size-new' => '$1 {{PLURAL:$1|octet|octets}} aprèp cambiament',
'newsectionsummary' => '/* $1 */ seccion novèla',
'rc-enhanced-expand' => 'Vejatz los detalhs',
'rc-enhanced-hide' => 'Amagar los detalhs',
'rc-old-title' => 'creat amb lo títol « $1 »',

# Recent changes linked
'recentchangeslinked' => 'Seguit dels ligams',
'recentchangeslinked-feed' => 'Seguit dels ligams',
'recentchangeslinked-toolbox' => 'Seguit dels ligams',
'recentchangeslinked-title' => 'Seguit dels ligams associats a "$1"',
'recentchangeslinked-summary' => "Aquesta pagina especiala fa veire los darrièrs cambiaments sus las paginas que son ligadas. Las paginas de [[Special:Watchlist|vòstra lista de seguimznt]] son '''en gras'''.",
'recentchangeslinked-page' => 'Nom de la pagina :',
'recentchangeslinked-to' => 'Afichar los cambiaments cap a las paginas ligadas al luòc de la pagina donada',

# Upload
'upload' => 'Importar un fichièr',
'uploadbtn' => 'Importar un fichièr',
'reuploaddesc' => 'Anullar lo cargament e tornar al formulari.',
'upload-tryagain' => 'Mandar la descripcion del fichièr modificada',
'uploadnologin' => 'Vos sètz pas identificat(ada)',
'uploadnologintext' => 'Vos cal $1 per importar de fichièrs.',
'upload_directory_missing' => 'Lo repertòri d’impòrt ($1) es mancant e a pas pogut èsser creat pel servidor web.',
'upload_directory_read_only' => 'Lo servidor Web pòt escriure dins lo dorsièr cibla ($1).',
'uploaderror' => 'Error',
'upload-recreate-warning' => "'''Atencion : Un fichièr amb aqueste nom es estat suprimit o desplaçat.'''

Lo jornal de las supressions e lo dels desplaçaments d'aquesta pagina son afichats aicí per informacion :",
'uploadtext' => "Utilizatz lo formulari çaijós per importar de fichièrs sul servidor.
Per veire o recercar d'imatges mandats precedentament, consultatz [[Special:FileList|la lista dels imatges]]. Las còpias e las supressions tanben son enregistradas dins l'[[Special:Log/upload|istoric dels impòrts]], las supressions dins l’[[Special:Log/delete|istoric de las supressions]].

Per inclure un imatge dins una pagina, utilizatz un ligam de la forma
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:fichièr.jpg]]</nowiki></code>''',
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:fichièr.png|200px|thumb|left|tèxte descriptiu]]</nowiki></code>''' per utilizar una miniatura de 200 pixèls de larg dins una bóstia a esquèrra amb 'tèxte descriptiu' coma descripcion
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:fichièr.ogg]]</nowiki></code>''' per ligar dirèctament cap al fichièr sens l'afichar.",
'upload-permitted' => 'Formats de fichièrs autorizats : $1.',
'upload-preferred' => 'Formats de fichièrs preferits : $1.',
'upload-prohibited' => 'Formats de fichièrs interdiches : $1.',
'uploadlog' => 'Istoric de las importacions',
'uploadlogpage' => 'Istoric de las importacions de fichièrs multimèdia',
'uploadlogpagetext' => 'Aquí la lista dels darrièrs fichièrs copiats sul servidor.
Vejatz la [[Special:NewFiles|galariá dels imatges novèls]] per una presentacion mai visuala.',
'filename' => 'Nom del fichièr',
'filedesc' => 'Descripcion',
'fileuploadsummary' => 'Resumit :',
'filereuploadsummary' => 'Modificacions del fichièr :',
'filestatus' => "Estatut dels dreches d'autor :",
'filesource' => 'Font :',
'uploadedfiles' => 'Fichièrs importats',
'ignorewarning' => 'Ignorar l’avertiment e salvar lo fichièr',
'ignorewarnings' => 'Ignorar los avertiments al moment de l’impòrt',
'minlength1' => 'Los noms de fichièrs devon comprendre almens una letra.',
'illegalfilename' => 'Lo nom de fichièr « $1 » conten de caractèrs interdiches dins los títols de paginas. Mercé de lo tornar nomenar e de lo copiar tornarmai.',
'filename-toolong' => 'Lo nom del fichièr pòt pas depassar 240 octets.',
'badfilename' => "L'imatge es estat renomenat « $1 ».",
'filetype-mime-mismatch' => "L'extension del fichièr « .$1 » correspond pas al tipe MIME detectat del fichièr ($2).",
'filetype-badmime' => 'Los fichièrs del tipe MIME « $1 » pòdon pas èsser importats.',
'filetype-bad-ie-mime' => 'Lo fichièr pòt pas èsser importat perque serià detectat coma « $1 » per Internet Explorer, tipe de fichièr interdich perque potencialament dangierós.',
'filetype-unwanted-type' => "«.$1»''' es un format de fichièr pas desirat.
{{PLURAL:$3|Lo tipe de fichièr preconizat es|Los tipes de fichièrs preconizats son}} $2.",
'filetype-banned-type' => "''' « .$1 » '''{{PLURAL:$4|est pas un tipe de fichièr autorizat|son pas de tipes de fichièrs autorizats}}. 
{{PLURAL:$3|lo tipe de fichièr autorizat es |los tipes de fichièrs autorizats son}} $2.",
'filetype-missing' => "Lo fichièr a pas cap d'extension (coma « .jpg » per exemple).",
'empty-file' => "Lo fichièr qu'avètz somés èra void.",
'file-too-large' => "Lo fichièr qu'avètz somés èra tròp grand.",
'filename-tooshort' => 'Lo nom de fichièr es tròp cort.',
'filetype-banned' => 'Aqueste tipe de fichièr es interdich',
'verification-error' => 'Aqueste fichièr passa pas la verificacion dels fichièrs.',
'hookaborted' => "La modificacion qu'avètz ensajat de realizar es estada anullada per un croquet d'extension.",
'illegal-filename' => 'Lo nom del fichièr es pas autorizat.',
'overwrite' => 'Espotir un fichièr existent es pas autorizat.',
'unknown-error' => "Una error desconeguda s'es producha.",
'tmp-create-error' => 'Impossible de crear lo fichièr temporari.',
'tmp-write-error' => "Error d'escritura del fichièr temporari.",
'large-file' => 'Los fichièrs importats deurián pas èsser mai gros que $1 ; aqueste fichièr fa $2.',
'largefileserver' => "La talha d'aqueste fichièr es superiora al maximum autorizat.",
'emptyfile' => 'Lo fichièr que volètz importar sembla void. Aquò pòt èsser degut a una error dins lo nom del fichièr. Verificatz que desiratz vertadièrament copiar aqueste fichièr.',
'windows-nonascii-filename' => 'Aqueste wiki supòrta pas los noms de fichièrs amb de caractèrs especials.',
'fileexists' => 'Un fichièr amb aqueste nom existís ja.
Mercé de verificar <strong>[[:$1]]</strong>.
Sètz segur de voler modificar aqueste fichièr ? [[$1|thumb]]',
'filepageexists' => "La pagina de descripcion per aqueste fichièr ja es estada creada aicí <strong>[[:$1]]</strong>, mas cap de fichièr existís pas actualament jos aqueste nom.
Lo resumit qu'anatz especificar apareisserà pas sus la pagina de descripcion.
Per o far, vos caldrà modificar la pagina manualament. [[$1|vinheta]]",
'fileexists-extension' => "Un fichièr amb un nom pròchi existís ja : [[$2|thumb]]
* Nom del fichièr d'importar : <strong>[[:$1]]</strong>
* Nom del fichièr existent : <strong>[[:$2]]</strong>
Causissètz-ne un autre.",
'fileexists-thumbnail-yes' => "Lo fichièr sembla èsser un imatge en talha reducha ''(thumbnail)''. [[$1|thumb]]
Verificatz lo fichièr <strong>[[:$1]]</strong>.
Se lo fichièr verificat es lo meteis imatge (dins una resolucion melhora), es pas de besonh d’importar una version reducha.",
'file-thumbnail-no' => "Lo nom del fichièr comença per <strong>$1</strong>.
Es possible que s’agisca d’una version reducha ''(miniatura)''.
Se dispausatz del fichièr en resolucion nauta, importatz-lo, si que non cambiatz lo nom del fichièr.",
'fileexists-forbidden' => "Un fichièr amb aqueste nom existís ja e pòt pas èsser espotit.
Se volètz totjorn importar aquel fichièr, mercé de tornar en arrièr e d'utilizar un nom novèl. [[File:$1|thumb|center|$1]]",
'fileexists-shared-forbidden' => "Un fichièr amb lo meteis nom existís ja dins la banca de donadas comuna.
S'o volètz importar tornamai, tornatz en rèire e importatz-lo jos un autre nom. [[File:$1|thumb|center|$1]]",
'file-exists-duplicate' => 'Aqueste fichièr es un doble {{PLURAL:$1|del fichièr seguent|dels fichièrs seguents}} :',
'file-deleted-duplicate' => "Un fichièr identic a aqueste ([[:$1]]) ja es estat suprimit. Vos caldriá verificar lo jornal de las supressions d'aqueste fichièr abans de la tornar telecargar.",
'uploadwarning' => 'Atencion !',
'uploadwarning-text' => 'Modificatz la descripcion del fichièr e ensajatz tornarmai.',
'savefile' => 'Salvar lo fichièr',
'uploadedimage' => '«[[$1]]» copiat sul servidor',
'overwroteimage' => 'a importat una version novèla de « [[$1]] »',
'uploaddisabled' => 'O planhèm, lo mandadís de fichièr es desactivat.',
'copyuploaddisabled' => 'Mandadís de fichièr per URL desactivat.',
'uploadfromurl-queued' => "Vòstre mandadís es estat mes dins la fila d'espèra.",
'uploaddisabledtext' => "L'impòrt de fichièrs cap al servidor es desactivat.",
'php-uploaddisabledtext' => "Lo telecargament de fichièrs es estat desactivat dins PHP. Verificatz l'opcion de configuracion file_uploads.",
'uploadscripted' => "Aqueste fichièr conten de còde HTML o un escript que poiriá èsser interpretat d'un biais incorrècte per un navigador Internet.",
'uploadvirus' => 'Aqueste fichièr conten un virús ! Per mai de detalhs, consultatz : $1',
'uploadjava' => 'Es un fichièr ZIP que conten un fichièr Java .class.
Lo telecargament de fichièrs Java es pas autorizat, perque pòdon contornar de restriccions de seguretat.',
'upload-source' => 'Fichièr font',
'sourcefilename' => 'Nom del fichièr font :',
'sourceurl' => 'URL font :',
'destfilename' => 'Nom jolqual lo fichièr serà enregistrat&nbsp;:',
'upload-maxfilesize' => 'Talha maximala del fichièr : $1',
'upload-description' => 'Descripcion del fichièr',
'upload-options' => 'Opcions de telecargament',
'watchthisupload' => 'Seguir aqueste fichièr',
'filewasdeleted' => 'Un fichièr amb aqueste nom ja es estat copiat, puèi suprimit. Vos caldriá verificar lo $1 abans de procedir a una còpia novèla.',
'filename-bad-prefix' => "Lo nom del fichièr qu'importatz comença per '''\"\$1\"''' qu'es un nom generalament donat pels aparelhs de fòto numerica e que decritz pas lo fichièr. Causissetz un nom de fichièr descrivent vòstre fichièr.",
'filename-prefix-blacklist' => ' #<!-- daissatz aquesta linha coma es --> <pre>
# La sintaxi es la seguenta :
#   * Tot çò que seguís lo caractèr "#" fins a la fin de la linha es un comentari
#   * Tota linha non vioda es un prefix tipic de nom de fichièr assignat automaticament pels aparelhs numerics
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # some mobil phones
IMG # generic
JD # Jenoptik
MGP # Pentax
PICT # misc.
 #</pre> <!-- daissatz aquesta linha coma es -->',
'upload-success-subj' => 'Importacion capitada',
'upload-success-msg' => 'Vòstre impòrt dempuèi [$2] a capitat. Es disponible aicí : [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problèma de mandadís',
'upload-failure-msg' => 'I a agut un problèma amb vòstre mandadís [$2]: $1',
'upload-warning-subj' => 'Avertiment al moment del telecargament',
'upload-warning-msg' => "Un problèma s'es produch al moment de l'impòrt dempuèi [$2]. Podètz tornar al [[Special:Upload/stash/$1|formulari d'impòrt]] per lo resòlvre.",

'upload-proto-error' => 'Protocòl incorrècte',
'upload-proto-error-text' => "L’impòrt requerís d'URLs començant per <code>http://</code> o <code>ftp://</code>.",
'upload-file-error' => 'Error intèrna',
'upload-file-error-text' => "Una error intèrna s'es producha en volent crear un fichièr temporari sul servidor. Contactatz un [[Special:ListUsers/sysop|administrator del sistèma]].",
'upload-misc-error' => 'Error d’impòrt desconeguda',
'upload-misc-error-text' => "Una error desconeguda s'es producha pendent l’impòrt.
Verificatz que l’URL es valida e accessibla, puèi ensajatz tornamai.
Se lo problèma persistís, contactatz un [[Special:ListUsers/sysop|administrator del sistèma]].",
'upload-too-many-redirects' => "L'URL conten tròp de redireccions",
'upload-unknown-size' => 'Talha desconeguda',
'upload-http-error' => 'Una error HTTP es intervenguda : $1',
'upload-copy-upload-invalid-domain' => 'La còpia dels telecargaments es pas disponibla dempuèi aqueste domeni.',

# File backend
'backend-fail-stream' => 'Impossible de legir lo fichièr $1.',
'backend-fail-backup' => 'Impossible de salvar lo fichièr $1.',
'backend-fail-notexists' => 'Lo fichièr $1 existís pas.',
'backend-fail-hashes' => "Impossible d'obténer lis hashatges del fichièr per comparason.",
'backend-fail-notsame' => 'Un fichièr diferent existís ja per $1 .',
'backend-fail-invalidpath' => "$1 es pas un camin d'emmagazinatge valid.",
'backend-fail-delete' => 'Impossible de suprimir lo fichièr « $1 ».',
'backend-fail-describe' => 'Impossible de modificar las metadonadas del fichièr "$1".',
'backend-fail-alreadyexists' => 'Lo fichièr $1 existís ja.',
'backend-fail-store' => "Impossible d'emmagazinar lo fichièr « $1 » dins « $2 ».",
'backend-fail-copy' => 'Impossible de copiar lo fichièr « $1 » dins « $2 ».',
'backend-fail-move' => 'Impossible de desplaçar lo fichièr « $1 » cap a « $2 ».',
'backend-fail-opentemp' => 'Impossible de dobrir lo fichièr temporari.',
'backend-fail-writetemp' => "Impossible d'escriure dins lo fichièr temporari.",
'backend-fail-closetemp' => 'Impossible de tampar lo fichièr temporari.',
'backend-fail-read' => 'Impossible de legir lo fichièr $1.',
'backend-fail-create' => "Impossible d'escriure lo fichièr $1.",
'backend-fail-maxsize' => "Impossible d'escriure lo fichièr $1 perque es mai grand {{PLURAL:$2|qu'un octet|que $2 octets}}.",
'backend-fail-readonly' => 'Lo supòrt d\'emmagazinatge "$1" es actualament en lectura sola. La rason indicada es : "$2"',
'backend-fail-synced' => 'Lo fichièr "$1" es dins un estat incoerent dins los supòrts d\'emmagazinatge intèrnes',
'backend-fail-connect' => 'Impossible de se connectar al supòrt d\'emmagazinatge "$1".',
'backend-fail-internal' => 'Una error desconeguda s\'es producha dins lo supòrt d\'emmagazinatge "$1".',
'backend-fail-contenttype' => 'Impossible de determinar lo tipe de contengut del fichièr d\'emmagazinar en "$1".',
'backend-fail-batchsize' => "Lo supòrt d'emmagazinatge a provesit un lòt de $1 {{PLURAL:$1|operacion|operacions}} de fichièr ; lo limit es de $2 {{PLURAL:$2|operacion|operacions}}.",
'backend-fail-usable' => "Impossible de legir o d'escriure lo fichièr « $1 » en rason de dreches insufisents o repertòris/contenidors mancants.",

# File journal errors
'filejournal-fail-dbconnect' => 'Impossible de se connectar a la banca de donadas del jornal pel terminal d\'emmagazinatge "$1".',
'filejournal-fail-dbquery' => 'Impossible de metre a jorn la banca de donadas del jornal pel terminal d\'emmagazinatge "$1".',

# Lock manager
'lockmanager-notlocked' => 'Impossible de desvarrolhar « $1 » ; es pas varrolhada.',
'lockmanager-fail-closelock' => 'Impossible de tampar lo fichièr de varrolh per « $1 ».',
'lockmanager-fail-deletelock' => 'Impossible de suprimir lo fichièr de varrolh per « $1 ».',
'lockmanager-fail-acquirelock' => "Impossible d'obténer lo fichièr de varrolh per « $1 ».",
'lockmanager-fail-openlock' => 'Impossible de dobrir lo fichièr de varrolh per « $1 ».',
'lockmanager-fail-releaselock' => 'Impossible de daissar anar lo fichièr de varrolh per « $1 ».',
'lockmanager-fail-db-bucket' => 'Impossible de contactar pro de bancas de donadas de varrolhatge dins lo godet $1.',
'lockmanager-fail-db-release' => 'Impossible de daissar anar los varrolhs sus la banca de donadas $1.',
'lockmanager-fail-svr-acquire' => "Impossible d'aquerir de varrolhs sul servidor $1.",
'lockmanager-fail-svr-release' => 'Impossible de daissar anar los varrolhs sul servidor $1.',

# ZipDirectoryReader
'zip-file-open-error' => "Una error s'es producha al moment de la dobertura del fichièr ZIP per contraròtle.",
'zip-wrong-format' => 'Lo fichièr especificat es pas un archiu ZIP.',
'zip-bad' => 'Lo fichièr es un archiu ZIP corromput o illegible.
Pòt pas èsser verificat corrèctament per la seguretat.',
'zip-unsupported' => "Lo fichièr es un archiu ZIP qu'utiliza de caracteristicas pas suportadas per MediaWiki. 
Sa seguretat pòt pas èsser verificada corrèctament.",

# Special:UploadStash
'uploadstash' => "Escondedor d'impòrt",
'uploadstash-clear' => 'Escafar los fichièrs en escondedor',
'uploadstash-nofiles' => "Avètz pas de fichièrs en escondedor d'impòrt.",
'uploadstash-errclear' => "L'escafament dels fichièrs a fracassat.",
'uploadstash-refresh' => 'Actualizar la lista dels fichièrs',
'invalid-chunk-offset' => 'Offset de segment invalid',

# img_auth script messages
'img-auth-accessdenied' => 'Accès refusat',
'img-auth-nopathinfo' => 'PATH_INFO mancant. Vòstre servidor es pas parametrat per passar aquesta informacion.
Benlèu que fonciona en CGI e supòrta pas img_atuh. Consultatz https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Lo camin demandat es pas lo repertòri de telecargament configurat.',
'img-auth-badtitle' => 'Impossible de construire un títol valid a partir de « $1 ».',
'img-auth-nologinnWL' => 'Sètz pas connectat e « $1 » es pas dins la lista blanca.',
'img-auth-nofile' => 'Lo fichièr « $1 » existís pas.',
'img-auth-isdir' => "Ensajatz d'accedir al repertòri « $1 ».
Sol l'accès als fichièrs es permesa.",
'img-auth-streaming' => 'Lectura en continú de « $1 ».',
'img-auth-public' => "La foncion d'img_auth.php es d'afichar de fichièrs d'un wiki privat.
Aqueste wiki es configurat coma un wiki public.
Per una seguretat optimala, img_auth.php es desactivat.",
'img-auth-noread' => "L'utilizaire a pas lo drech en lectura sus « $1 ».",
'img-auth-bad-query-string' => "L'URL a una cadena de requèsta invalida.",

# HTTP errors
'http-invalid-url' => 'URL incorrècta : $1',
'http-invalid-scheme' => 'Las URLs amb l"esquèma « $1 » son pas suportadas',
'http-request-error' => 'Error desconeguda al moment del mandadís de la requèsta.',
'http-read-error' => 'HTTP Error de lectura.',
'http-timed-out' => 'HTTP request timed out.',
'http-curl-error' => "Error al moment de la recuperacion de l'URL : $1",
'http-bad-status' => 'I a agut un problèma al moment de la requèsta HTTP : $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Pòt pas aténher l’URL',
'upload-curl-error6-text' => 'L’URL provesida pòt pas èsser atencha. Verificatz que l’URL es corrècta e que lo site es en linha.',
'upload-curl-error28' => 'Depassament de la sosta al moment de l’impòrt',
'upload-curl-error28-text' => "Lo site a pres tròp de temps per respondre. Verificatz que lo site es en linha, esperatz un pauc e ensajatz tornarmai. Tanben podètz ensajar a una ora d'afluéncia mendra.",

'license' => 'Licéncia&nbsp;:',
'license-header' => 'Publicat jos licéncia(s)',
'nolicense' => 'Cap de licéncia seleccionada',
'license-nopreview' => '(Previsualizacion impossibla)',
'upload_source_url' => ' (una URL valida e accessibla publicament)',
'upload_source_file' => ' (un fichièr sus vòstre ordenador)',

# Special:ListFiles
'listfiles-summary' => 'Aquesta pagina especiala permet de far la lista de totes los fichièrs importats.',
'listfiles_search_for' => 'Recèrca del mèdia nomenat :',
'imgfile' => 'fichièr',
'listfiles' => 'Lista dels imatges',
'listfiles_thumb' => 'Apercebut',
'listfiles_date' => 'Data',
'listfiles_name' => 'Nom',
'listfiles_user' => 'Utilizaire',
'listfiles_size' => 'Talha (en octets)',
'listfiles_description' => 'Descripcion',
'listfiles_count' => 'Versions',
'listfiles-show-all' => 'Inclure las ancianas versions dels imatges',
'listfiles-latestversion' => 'Version actuala',
'listfiles-latestversion-yes' => 'Òc',
'listfiles-latestversion-no' => 'Non',

# File description page
'file-anchor-link' => 'Fichièr',
'filehist' => 'Istoric del fichièr',
'filehist-help' => 'Clicar sus una data e una ora per veire lo fichièr tal coma èra a aqueste moment',
'filehist-deleteall' => 'suprimir tot',
'filehist-deleteone' => 'suprimir',
'filehist-revert' => 'revocar',
'filehist-current' => 'actual',
'filehist-datetime' => 'Data e ora',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => 'Miniatura per la version del $1',
'filehist-nothumb' => 'Pas de miniatura',
'filehist-user' => 'Utilizaire',
'filehist-dimensions' => 'Dimensions',
'filehist-filesize' => 'Talha del fichièr',
'filehist-comment' => 'Comentari',
'filehist-missing' => 'Fichièr mancant',
'imagelinks' => 'Paginas que contenon lo fichièr',
'linkstoimage' => '{{PLURAL:$1|La pagina çaijós compòrta|Las paginas çaijós compòrtan}} aqueste imatge :',
'linkstoimage-more' => 'Mai {{PLURAL:$1|d’un ligam de pagina|de $1 ligams de paginas}} cap a aqueste fichièr.
La lista seguenta aficha {{PLURAL:$1|lo primièr ligam de pagina|los $1 primièrs ligams de pagina}} unicament cap a aqueste fichièr.
Una [[Special:WhatLinksHere/$2|lista completa]] es disponibla.',
'nolinkstoimage' => 'Cap de pagina compòrta pas de ligam cap a aqueste imatge.',
'morelinkstoimage' => 'Vejatz [[Special:WhatLinksHere/$1|mai de ligams]] cap a aqueste imatge.',
'linkstoimage-redirect' => '$1 (redireccion de fichièr) $2',
'duplicatesoffile' => "{{PLURAL:$1|Lo fichièr seguent es un duplicata|Los fichièrs seguents son de duplicatas}} d'aqueste fichièr ([[Special:FileDuplicateSearch/$2|mai de detalhs]]):",
'sharedupload' => 'Aqueste fichièr proven de $1 e pòt èsser utilizat per d’autres projèctes.',
'sharedupload-desc-there' => "Aqueste fichièr proven de $1 e pòt èsser utilizat per d'autres projèctes. Vejatz [$2 sa pagina de descripcion] per mai d'entresenhas.",
'sharedupload-desc-here' => "Aqueste fichièr proven de $1 e pòt èsser utilizat per d'autres projèctes. La descripcion de [$2 sa pagina de descripcion] es afichada çaijós.",
'filepage-nofile' => 'Cap de fichièr amb aqueste nom existís pas.',
'filepage-nofile-link' => 'Cap de fichièr amb aqueste nom existís pas, mas ne podètz [$1 telecargar un].',
'uploadnewversion-linktext' => "Importar una version novèla d'aqueste fichièr",
'shared-repo-from' => 'de $1',
'shared-repo' => 'un depaus partejat',
'upload-disallowed-here' => 'Podètz pas remplaçar aqueste fichièr.',

# File reversion
'filerevert' => 'Revocar $1',
'filerevert-legend' => 'Revocar lo fichièr',
'filerevert-intro' => "Anatz revocar '''[[Media:$1|$1]]''' fins a [$4 la version del $2 a $3].",
'filerevert-comment' => 'Motiu :',
'filerevert-defaultcomment' => 'Revocat fins a la version del $1 a $2',
'filerevert-submit' => 'Revocar',
'filerevert-success' => "'''[[Media:$1|$1]]''' es estat revocat fins a [$4 la version del $2 a $3].",
'filerevert-badversion' => 'I a pas de version mai anciana del fichièr amb lo Timestamp donat.',

# File deletion
'filedelete' => 'Suprimir $1',
'filedelete-legend' => 'Suprimir lo fichièr',
'filedelete-intro' => "Sètz a suprimir '''[[Media:$1|$1]]''' amb tot son istoric.",
'filedelete-intro-old' => "Sètz a escafar la version de '''[[Media:$1|$1]]''' del [$4 $2 a $3].",
'filedelete-comment' => 'Motiu :',
'filedelete-submit' => 'Suprimir',
'filedelete-success' => "'''$1''' es estat suprimit.",
'filedelete-success-old' => "La version de '''[[Media:$1|$1]]''' del $2 a $3 es estada suprimida.",
'filedelete-nofile' => "'''$1''' existís pas.",
'filedelete-nofile-old' => "Existís pas cap de version archivada de '''$1''' amb los atributs indicats.",
'filedelete-otherreason' => 'Rason diferenta/suplementària :',
'filedelete-reason-otherlist' => 'Autra rason',
'filedelete-reason-dropdown' => '*Motius de supression costumièrs
** Violacion de drech d’autor
** Fichièr duplicat',
'filedelete-edit-reasonlist' => 'Modifica los motius de la supression',
'filedelete-maintenance' => 'La supression e lo restabliment de fichièrs es temporàriament desactivada pendent la mantenença.',
'filedelete-maintenance-title' => 'Impossible de suprimir lo fichièr',

# MIME search
'mimesearch' => 'Recèrca per tipe MIME',
'mimesearch-summary' => 'Aquesta pagina especiala permet de cercar de fichièrs en foncion de lor tipe MIME. Entrada : tipe/sostipe, per exemple <code>image/jpeg</code>.',
'mimetype' => 'Tipe MIME :',
'download' => 'telecargament',

# Unwatched pages
'unwatchedpages' => 'Paginas pas seguidas',

# List redirects
'listredirects' => 'Lista de las redireccions',

# Unused templates
'unusedtemplates' => 'Modèls inutilizats',
'unusedtemplatestext' => "Aquesta pagina lista totas las paginas de l’espaci de noms {{ns:template}} que son pas enclusas dins cap d'autra pagina.
Doblidetz pas de verificar se i a pas d’autre ligam cap als modèls abans de los suprimir.",
'unusedtemplateswlh' => 'autres ligams',

# Random page
'randompage' => "Una pagina a l'azard",
'randompage-nopages' => "I a pas cap de pagina dins {{PLURAL:$2|l'espaci de nom|los espacis de noms}} : $1.",

# Random page in category
'randomincategory' => "Pagina a l'azard dins la categoria",
'randomincategory-invalidcategory' => '« $1 » es pas un nom de categoria valid.',
'randomincategory-nopages' => 'I a pas cap de pagina dins [[:Category:$1]].',
'randomincategory-selectcategory' => "Prene una pagina a l'azard dins la categoria : $1 $2.",
'randomincategory-selectcategory-submit' => 'Anar',

# Random redirect
'randomredirect' => "Una pagina de redireccion a l'azard",
'randomredirect-nopages' => "I a pas cap de redireccion dins l'espaci de nom « $1 ».",

# Statistics
'statistics' => 'Estatisticas',
'statistics-header-pages' => 'Estatisticas de las paginas',
'statistics-header-edits' => 'Estatisticas sus las edicions',
'statistics-header-views' => 'Estatisticas sus las visitas',
'statistics-header-users' => "Estatisticas d'utilizaire",
'statistics-header-hooks' => 'Autras estatisticas',
'statistics-articles' => 'Paginas de contengut',
'statistics-pages' => 'Paginas',
'statistics-pages-desc' => 'Totas las paginas del wiki, enclusas las paginas de discussion, las redireccions, ...',
'statistics-files' => 'Fichièrs importats',
'statistics-edits' => 'Modificacions de paginas dempuèi que {{SITENAME}} foguèt installat',
'statistics-edits-average' => 'Modificacions mejanas per pagina',
'statistics-views-total' => 'Visitas totalas',
'statistics-views-peredit' => 'Visitas per modificacions',
'statistics-users' => '[[Special:ListUsers|Utilizaires]] enregistrats',
'statistics-users-active' => 'Utilizaires actius',
'statistics-users-active-desc' => "Utilizaires qu'an fach al mens una accion durant {{PLURAL:$1|lo darrièr jorn|los $1 darrièrs jorns}}",
'statistics-mostpopular' => 'Paginas mai consultadas',

'pageswithprop' => 'Paginas amb una proprietat de pagina',
'pageswithprop-legend' => 'Paginas amb una proprietat de pagina',
'pageswithprop-prop' => 'Nom de la proprietat :',
'pageswithprop-submit' => 'Anar',
'pageswithprop-prophidden-long' => 'valor de proprietat de tèxte long amagada ($1)',
'pageswithprop-prophidden-binary' => 'valor de proprietat binària amagada ($1)',

'doubleredirects' => 'Redireccions doblas',
'doubleredirectstext' => 'Vaquí una lista de las paginas que redirigisson cap a de paginas que son elas-meteissas de paginas de redireccion.
Cada entrada conten de ligams cap a la primièra e la segonda redireccions, e mai la primièra linha de tèxte de la segonda pagina, çò que provesís, de costuma, la « vertadièra » pagina cibla, cap a la quala la primièra redireccion deuriá redirigir.
Las entradas <del>barradas</del> son estadas resolgudas.',
'double-redirect-fixed-move' => '[[$1]] es estat renomenat, aquò es ara una redireccion cap a [[$2]]',
'double-redirect-fixed-maintenance' => 'Correccion de  la doble redireccion de [[$1]] a [[$2]]',
'double-redirect-fixer' => 'Corrector de redireccion',

'brokenredirects' => 'Redireccions copadas',
'brokenredirectstext' => "Aquestas redireccions mènan cap a de paginas qu'existisson pas :",
'brokenredirects-edit' => 'modificar',
'brokenredirects-delete' => 'suprimir',

'withoutinterwiki' => 'Paginas sens ligams interlengas',
'withoutinterwiki-summary' => "Las paginas seguentas an pas de ligams cap a las versions dins d'autras lengas.",
'withoutinterwiki-legend' => 'Prefix',
'withoutinterwiki-submit' => 'Afichar',

'fewestrevisions' => 'Articles mens modificats',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|octet|octets}}',
'ncategories' => '$1 {{PLURAL:$1|categoria|categorias}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|ligam|ligams}}',
'nmembers' => '$1 {{PLURAL:$1|membre|membres}}',
'nrevisions' => '$1 {{PLURAL:$1|revision|revisions}}',
'nviews' => '$1 {{PLURAL:$1|consultacion|consultacions}}',
'nimagelinks' => 'Utilisat sus $1 {{PLURAL:$1|pagina|paginas}}',
'ntransclusions' => 'Utilisat sus $1 {{PLURAL:$1|pagina|paginas}}',
'specialpage-empty' => 'Aquesta pagina es voida.',
'lonelypages' => 'Paginas orfanèlas',
'lonelypagestext' => 'Las paginas seguentas son pas ligadas o enclusas a partir d’autras paginas de {{SITENAME}}.',
'uncategorizedpages' => 'Paginas sens categorias',
'uncategorizedcategories' => 'Categorias sens categorias',
'uncategorizedimages' => 'Imatges sens categorias',
'uncategorizedtemplates' => 'Modèls sens categoria',
'unusedcategories' => 'Categorias inutilizadas',
'unusedimages' => 'Imatges orfanèls',
'popularpages' => 'Paginas mai consultadas',
'wantedcategories' => 'Categorias mai demandadas',
'wantedpages' => 'Paginas mai demandadas',
'wantedpages-badtitle' => 'Títol invalid dins los resultats : $1',
'wantedfiles' => 'Fichièrs desirats',
'wantedtemplates' => 'Modèls demandats',
'mostlinked' => 'Paginas mai ligadas',
'mostlinkedcategories' => 'Categorias mai utilizadas',
'mostlinkedtemplates' => 'Modèls mai utilizats',
'mostcategories' => 'Articles utilizant mai de categorias',
'mostimages' => 'Fichièrs mai utilizats',
'mostinterwikis' => "Paginas amb lo mai d'interwikis",
'mostrevisions' => 'Articles mai modificats',
'prefixindex' => 'Totas las paginas que començan per…',
'prefixindex-namespace' => 'Totas las paginas amb prefix (espaci de noms $1)',
'prefixindex-strip' => 'Levar lo prefix dins la lista',
'shortpages' => 'Paginas brèvas',
'longpages' => 'Paginas longas',
'deadendpages' => "Paginas sul camin d'enlòc",
'deadendpagestext' => 'Las paginas seguentas contenon pas cap de ligam cap a d’autras paginas de {{SITENAME}}.',
'protectedpages' => 'Paginas protegidas',
'protectedpages-indef' => 'Unicament las proteccions permanentas',
'protectedpages-cascade' => 'Unicament las proteccions en cascada',
'protectedpagestext' => 'Las paginas seguentas son protegidas contra las modificacions e/o lo cambiament de nom :',
'protectedpagesempty' => 'Cap de pagina es pas protegida actualament.',
'protectedtitles' => 'Títols protegits',
'protectedtitlestext' => 'Los títols seguents son protegits a la creacion',
'protectedtitlesempty' => 'Cap de títol es pas actualament protegit amb aquestes paramètres.',
'listusers' => 'Lista dels participants',
'listusers-editsonly' => "Far veire sonque los utilizaires qu'an al mens una contribucion",
'listusers-creationsort' => 'Triar per data de creacion',
'listusers-desc' => 'Triar en òrdre descendent',
'usereditcount' => '$1 {{PLURAL:$1|cambiament|cambiaments}}',
'usercreated' => '{{GENDER:$3|Creat}} lo $1 a $2',
'newpages' => 'Paginas novèlas',
'newpages-username' => "Nom d'utilizaire :",
'ancientpages' => 'Articles mai ancians',
'move' => 'Tornar nomenar',
'movethispage' => 'Tornar nomenar la pagina',
'unusedimagestext' => 'Los fichièrs seguents existisson, mas son pas incluses dins cap de pagina.
Notatz que d’autres sites pòdon aver un ligam dirècte cap a un fichièr, e doncas qu’un fichièr pòt èsser listat aicí alara qu’es en realitat utilisat sus aqueles sites.',
'unusedcategoriestext' => "Las categorias seguentas existisson mas cap d'article o de categoria los utilizan pas.",
'notargettitle' => 'Pas de cibla',
'notargettext' => 'Indicatz una pagina cibla o un utilizaire cibla.',
'nopagetitle' => 'Cap de pagina cibla',
'nopagetext' => "La pagina cibla qu'avètz indicada existís pas.",
'pager-newer-n' => '{{PLURAL:$1|1 mai recenta|$1 mai recentas}}',
'pager-older-n' => '{{PLURAL:$1|1 mai anciana|$1 mai ancianas}}',
'suppress' => 'Supervisor',

# Book sources
'booksources' => 'Obratges de referéncia',
'booksources-search-legend' => "Recercar demest d'obratges de referéncia",
'booksources-isbn' => 'ISBN :',
'booksources-go' => 'Validar',
'booksources-text' => "Vaquí una lista de ligams cap a d’autres sites que vendon de libres nòus e d’ocasion e suls quals trobaretz benlèu d'entresenhas suls obratges que cercatz. {{SITENAME}} es pas ligada a cap d'aquestas societats, a pas l’intencion de ne far la promocion.",
'booksources-invalid-isbn' => "Lo numèro ISBN balhat sembla pas èsser valid ; verificatz s'avètz fach una error al moment de la còpia dempuèi la font.",

# Special:Log
'specialloguserlabel' => 'Autor :',
'speciallogtitlelabel' => 'Cibla (títol o utilizaire):',
'log' => 'Jornals',
'all-logs-page' => 'Totas las operacions publicas',
'alllogstext' => 'Afichatge combinat de totes los jornals de {{SITENAME}}.
Podètz restrénher la vista en seleccionant un tipe de jornal, un nom d’utilizaire (cassa sensibla) o una pagina ciblada (idem).',
'logempty' => 'I a pas res dins l’istoric per aquesta pagina.',
'log-title-wildcard' => 'Recercar de títols que començan per aqueste tèxte',
'showhideselectedlogentries' => 'Afichar/amagar las entradas de jornal seleccionadas',

# Special:AllPages
'allpages' => 'Totas las paginas',
'alphaindexline' => '$1 a $2',
'nextpage' => 'Pagina seguenta ($1)',
'prevpage' => 'Pagina precedenta ($1)',
'allpagesfrom' => 'Afichar las paginas a partir de :',
'allpagesto' => 'Afichar las paginas fins a :',
'allarticles' => 'Totas las paginas',
'allinnamespace' => 'Totas las paginas (espaci de noms $1)',
'allnotinnamespace' => 'Totas las paginas (que son pas dins l’espaci de noms $1)',
'allpagesprev' => 'Precedent',
'allpagesnext' => 'Seguent',
'allpagessubmit' => 'Validar',
'allpagesprefix' => 'Afichar las paginas que començan pel prefix :',
'allpagesbadtitle' => 'Lo títol rensenhat per la pagina es incorrècte o possedís un prefix reservat. Conten segurament un o mantun caractèr especial que pòt pas èsser utilizats dins los títols.',
'allpages-bad-ns' => '{{SITENAME}} a pas d’espaci de noms « $1 ».',
'allpages-hide-redirects' => 'Amagar las redireccions',

# SpecialCachedPage
'cachedspecial-refresh-now' => 'Veire lo mai recent.',

# Special:Categories
'categories' => 'Categorias',
'categoriespagetext' => '{{PLURAL:$1|La categoria seguenta es utilizada|Las categorias seguentas son utilizadas}} per de paginas o de fichièrs.
[[Special:UnusedCategories|Las categorias inutilizadas]] son pas afichadas aicí.
Vejatz tanben [[Special:WantedCategories|las categorias demandadas]].',
'categoriesfrom' => 'Afichar las categorias que començan a :',
'special-categories-sort-count' => 'triada per compte',
'special-categories-sort-abc' => 'triada alfabetica',

# Special:DeletedContributions
'deletedcontributions' => 'Contribucions suprimidas d’un utilizaire',
'deletedcontributions-title' => 'Contribucions suprimidas d’un utilizaire',
'sp-deletedcontributions-contribs' => 'contribucions',

# Special:LinkSearch
'linksearch' => 'Recèrca de ligams extèrnes',
'linksearch-pat' => 'Recercar l’expression :',
'linksearch-ns' => 'Espacis de noms :',
'linksearch-ok' => 'Recercar',
'linksearch-text' => 'De caractèrs jokers coma « *.wikipedia.org » pòdon èsser utilizats.
Necessitan al mens un domeni de nivèl superior, per exemple « *.org ».<br />
{{PLURAL:$2|Protocòl reconegut|Protocòls reconeguts}}: <code>$1</code> (http:// per defaut se cap de protocòl es pas indicat).',
'linksearch-line' => '$1 amb un ligam a partir de $2',
'linksearch-error' => 'Los caractèrs « joker » pòdon pas èsser utilizats qu’al començament del nom de domeni.',

# Special:ListUsers
'listusersfrom' => 'Afichar los utilizaires a partir de :',
'listusers-submit' => 'Mostrar',
'listusers-noresult' => "S'es pas trobat de noms d'utilizaires correspondents. Cercatz tanben amb de majusculas e minusculas.",
'listusers-blocked' => '(blocat)',

# Special:ActiveUsers
'activeusers' => 'Lista dels utilizaires actius',
'activeusers-intro' => "Aquò es una lista dels utilizaires qu'an exerçat una activitat quina que siá al cors {{PLURAL:$1|de la darrièra jornada|dels $1 darrièrs jorns}}.",
'activeusers-count' => '$1 {{PLURAL:$1|accion|accions}} al moment {{PLURAL:$3|del darrièr jorn|dels $3 darrièrs jorns}}',
'activeusers-from' => 'Afichar los utilizaires dempuèi :',
'activeusers-hidebots' => 'Amagar los robòts',
'activeusers-hidesysops' => 'Amagar los administrators',
'activeusers-noresult' => "Cap d'utilizaire pas trobat.",

# Special:ListGroupRights
'listgrouprights' => "Dreches dels gropes d'utilizaires",
'listgrouprights-summary' => "Aquesta pagina conten una lista de gropes definits sus aqueste wiki e mai los dreches d'accès qu'i son associats.
I pòt aver [[{{MediaWiki:Listgrouprights-helppage}}|d'entresenhas complementàrias]] a prepaus dels dreches.",
'listgrouprights-key' => 'Legenda :
*<span class="listgrouprights-granted">Drech autrejat</span>
*<span class="listgrouprights-revoked">Drech revocat</span>',
'listgrouprights-group' => 'Grop',
'listgrouprights-rights' => 'Dreches associats',
'listgrouprights-helppage' => 'Help:Dreches dels gropes',
'listgrouprights-members' => '(lista dels membres)',
'listgrouprights-addgroup' => 'Pòt apondre $2 {{PLURAL:$2|grop|gropes}} : $1',
'listgrouprights-removegroup' => 'Pòt levar $2 {{PLURAL:$2|gropa|gropes}} : $1',
'listgrouprights-addgroup-all' => 'Pòt apondre totes los gropes',
'listgrouprights-removegroup-all' => 'Pòt levar totes los gropes',
'listgrouprights-addgroup-self' => 'Se pòt apondre {{PLURAL:$2|lo grop|los gropes}} a son compte pròpri : $1',
'listgrouprights-removegroup-self' => 'Se pòt levar {{PLURAL:$2|lo grop|los gropes}} de son compte pròpri : $1',
'listgrouprights-addgroup-self-all' => 'Se pòt apondre totes los gropes a son compte pròpri',
'listgrouprights-removegroup-self-all' => 'Se pòt levar totes los gropes de son compte pròpri',

# Email user
'mailnologin' => "Pas d'adreça",
'mailnologintext' => 'Vos cal èsser [[Special:UserLogin|connectat(ada)]]
e aver indicat una adreça electronica valida dins vòstras [[Special:Preferences|preferéncias]]
per poder mandar un messatge a un autre utilizaire.',
'emailuser' => 'Mandar un messatge a aqueste utilizaire',
'emailuser-title-target' => 'Mandar un corrièl a {{GENDER:$1|aqueste utilizaire|aquesta utilizaira}}',
'emailuser-title-notarget' => 'Mandar un corrièr electronic a l’utilizaire',
'emailpage' => 'Mandar un corrièr electronic a l’utilizaire',
'emailpagetext' => "Podètz utilizar lo formulari çaijós per mandar un corrièr electronic a {{GENDER:$1|aqueste utilizaire|aquesta utilizaira}}.
L'adreça electronica qu'avètz indicada dins [[Special:Preferences|vòstras preferéncias]] apareisserà dins lo camp « Expeditor » de vòstre messatge. E mai, lo destinatari vos poirà respondre dirèctament.",
'usermailererror' => 'Error dins lo subjècte del corrièr electronic :',
'defemailsubject' => "{{SITENAME}} Corrièl de l'utilizaire « $1 »",
'usermaildisabled' => 'Lo mandadís de corrièrs electronics entre utilizairers es desactivat',
'usermaildisabledtext' => "Podètz pas mandar de corrièrs electronics a d'autres utilizaires sur aquel wiki",
'noemailtitle' => "Pas d'adreça electronica",
'noemailtext' => "Aqueste utilizaire a pas especificat d'adreça electronica valida.",
'nowikiemailtitle' => 'Pas de corrièr electronic autorizat',
'nowikiemailtext' => "Aqueste utilizaire a causit de recebre pas de corrièr electronic de la part d'autres utilizaires.",
'emailnotarget' => "Nom d'utilizaire del destinatari inexistent o invalid.",
'emailtarget' => "Entratz lo nom d'utilizaire del destinatari",
'emailusername' => "Nom d'utilizaire :",
'emailusernamesubmit' => 'Sometre',
'email-legend' => 'Mandar un corrièr electronic a un autre utilizaire de {{SITENAME}}',
'emailfrom' => 'Expeditor :',
'emailto' => 'Destinatari :',
'emailsubject' => 'Subjècte :',
'emailmessage' => 'Messatge :',
'emailsend' => 'Mandar',
'emailccme' => 'Me mandar per corrièr electronic una còpia de mon messatge.',
'emailccsubject' => 'Còpia de vòstre messatge a $1 : $2',
'emailsent' => 'Messatge mandat',
'emailsenttext' => 'Vòstre messatge es estat mandat.',
'emailuserfooter' => 'Aqueste corrièr electronic es estat mandat per « $1 » a « $2 » per la foncion « Mandar un corrièr electronic a l’utilizaire » sus {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'A daissat un messatge de sistèma.',
'usermessage-editor' => 'Messatgièr del sistèma',

# Watchlist
'watchlist' => 'Lista de seguiment',
'mywatchlist' => 'Lista de seguiment',
'watchlistfor2' => 'Per $1 ($2)',
'nowatchlist' => "Vòstra lista de seguiment conten pas cap d'article.",
'watchlistanontext' => 'Per poder afichar o editar los elements de vòstra lista de seguiment, vos cal vos $1.',
'watchnologin' => 'Vos sètz pas identificat(ada)',
'watchnologintext' => 'Vos cal èsser [[Special:UserLogin|connectat(ada)]]
per modificar vòstra lista de seguiment.',
'addwatch' => 'Ajustar a la lista de seguiment',
'addedwatchtext' => "La pagina « [[:$1]] » es estada aponduda a vòstra [[Special:Watchlist|lista de seguiment]]. Las modificacions venentas d'aquesta pagina e de la pagina de discussion associada i seràn repertoriadas.",
'removewatch' => 'Suprimir de la lista de seguiment',
'removedwatchtext' => 'La pagina « [[:$1]] » es estada levada de vòstra [[Special:Watchlist|lista de seguiment]].',
'watch' => 'Seguir',
'watchthispage' => 'Seguir aquesta pagina',
'unwatch' => 'Arrestar de seguir',
'unwatchthispage' => 'Arrestar de seguir',
'notanarticle' => "Pas cap d'article",
'notvisiblerev' => 'Version suprimida',
'watchlist-details' => 'I a {{PLURAL:$1|pagina|paginas}} dins vòstra lista de seguiment, sens comptar las paginas de discussion.',
'wlheader-enotif' => 'La notificacion per corrièr electronic es activada.',
'wlheader-showupdated' => "Las paginas que son estadas modificadas dempuèi vòstra darrièra visita son afichadas en '''gras'''.",
'watchmethod-recent' => 'verificacion dels darrièrs cambiaments de las paginas seguidas',
'watchmethod-list' => 'verificacion de las paginas seguidas per de modificacions recentas',
'watchlistcontains' => 'Vòstra lista de seguiment conten $1 {{PLURAL:$1|pagina|paginas}}.',
'iteminvalidname' => "Problèma amb l'article « $1 » : lo nom es invalid...",
'wlnote' => "Çaijós {{PLURAL:$1|se tròba la darrièra modificacion efectuada|se tròban las $1 darrièras modificacions efectuadas}} pendent {{PLURAL:$2|la darrièra ora|las '''$2''' darrièras oras}} dempuèi $3, $4.",
'wlshowlast' => 'Far veire las darrièras $1 oras, los darrièrs $2 jorns, o $3.',
'watchlist-options' => 'Opcions de la lista de seguiment',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Seguit...',
'unwatching' => 'Fin del seguit...',

'enotif_mailer' => 'Sistèma d’expedicion de notificacion de {{SITENAME}}',
'enotif_reset' => 'Marcar totas las paginas coma visitadas',
'enotif_impersonal_salutation' => 'Utilizaire de {{SITENAME}}',
'enotif_subject_deleted' => 'La pagina $1 sus {{SITENAME}} es estada suprimida per {{GENDER:$2|$2}}',
'enotif_subject_created' => 'La pagina $1 sus {{SITENAME}} es estada creada per {{GENDER:$2|$2}}',
'enotif_subject_moved' => 'La pagina $1 sus {{SITENAME}} es estada renomenada per {{GENDER:$2|$2}}',
'enotif_subject_restored' => 'La pagina $1 sus {{SITENAME}} es estada restablida per {{GENDER:$2|$2}}',
'enotif_subject_changed' => 'La pagina $1 sus {{SITENAME}} es estada modificada per {{GENDER:$2|$2}}',
'enotif_body_intro_deleted' => 'La pagina $1 sus {{SITENAME}} es estada escafada lo $PAGEEDITDATE per {{gender:$2|$2}}, veire $3 per la revision actuala.',
'enotif_body_intro_created' => 'La pagina $1 sus {{SITENAME}} es estada creada lo $PAGEEDITDATE per {{gender:$2|$2}}, veire $3 per la revision actuala.',
'enotif_body_intro_moved' => 'La pagina $1 sus {{SITENAME}} es estada renomenada lo $PAGEEDITDATE per {{gender:$2|$2}}, veire $3 per la revision actuala.',
'enotif_body_intro_restored' => 'La pagina $1 sus {{SITENAME}} es estada restablida lo $PAGEEDITDATE per {{gender:$2|$2}}, veire $3 per la revision actuala.',
'enotif_body_intro_changed' => 'La pagina $1 sus {{SITENAME}} es estada modificada lo $PAGEEDITDATE per {{gender:$2|$2}}, veire $3 per la revision actuala.',
'enotif_lastvisited' => 'Consultatz $1 per totes los cambiaments dempuèi vòstra darrièra visita.',
'enotif_lastdiff' => 'Consultatz $1 per veire aquesta modificacion.',
'enotif_anon_editor' => 'utilizaire anonim $1',
'enotif_body' => 'Car(a) $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

Resumit del contributor : $PAGESUMMARY 
$PAGEMINOREDIT

Contactatz aqueste contributor :
corrièl : $PAGEEDITOR_EMAIL
wiki : $PAGEEDITOR_WIKI

I aurà pas d’autras notificacions en cas de cambiaments ulteriors, levat se visitatz aquela pagina.
Podètz tanben reïnicializar las bandièras de notificacion per totas las paginas de vòstra lista de seguiment.

             Vòstre sistèma de notificacion de {{SITENAME}}

--
Pour modificar los paramètres de notificacion per corrièl, visitatz {{canonicalurl:{{#special:Preferences}}}}

Per modificar los paramètres de vòstra lista de seguiment, visitatz
{{canonicalurl:{{#special:EditWatchlist}}}}

Per suprimir la pagina de vòstra lista de seguiment, visitatz
$UNWATCHURL

Retorn e assisténcia :
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'creada',
'changed' => 'modificada',

# Delete
'deletepage' => 'Suprimir la pagina',
'confirm' => 'Confirmar',
'excontent' => "contenent '$1'",
'excontentauthor' => "lo contengut èra : « $1 » (e l'unic contributor èra « [[Special:Contributions/$2|$2]] »)",
'exbeforeblank' => "lo contengut abans blanquiment èra :'$1'",
'exblank' => 'pagina voida',
'delete-confirm' => 'Escafar «$1»',
'delete-legend' => 'Escafar',
'historywarning' => "'''Atencion :''' La pagina que s�tz a mand de suprimir a un istoric que conten aproximadament $1 {{PLURAL:$1|revision|revisions}} :",
'confirmdeletetext' => "Sètz a mand de suprimir una pagina o un fichièr, e mai totas sas versions anterioras istorizadas.
Confirmatz qu'es plan çò que volètz far, que ne comprenètz las consequéncias e que fasètz aquò en acòrdi amb las [[{{MediaWiki:Policy-url}}|règlas intèrnas]].",
'actioncomplete' => 'Accion efectuada',
'actionfailed' => 'L’accion a fracassat',
'deletedtext' => '"$1" es estat suprimit.
Vejatz $2 per una lista de las supressions recentas.',
'dellogpage' => 'Istoric dels escafaments',
'dellogpagetext' => 'Vaquí çaijós la lista de las supressions recentas.',
'deletionlog' => 'istoric dels escafaments',
'reverted' => 'Restabliment de la version precedenta',
'deletecomment' => 'Motiu :',
'deleteotherreason' => 'Motius suplementaris o autres :',
'deletereasonotherlist' => 'Autre motiu',
'deletereason-dropdown' => '* Motius de supression los mai corrents
** Corrièrs indesirables
** Vandalisme
** Violacion dels dreches d’autor
** Demanda de l’autor
** Redireccion copada',
'delete-edit-reasonlist' => 'Modifica los motius de la supression',
'delete-toobig' => "Aquesta pagina dispausa d'un istoric important, depassant {{PLURAL:$1|revision|revisions}}.
La supression de talas paginas es estada limitada per evitar de perturbacions accidentalas de {{SITENAME}}.",
'delete-warning-toobig' => "Aquesta pagina dispausa d'un istoric important, depassant {{PLURAL:$1|revision|revisions}}.
La suprimir pòt perturbar lo foncionament de la banca de donada de {{SITENAME}}.
D'efectuar amb prudéncia.",

# Rollback
'rollback' => 'Anullar las modificacions',
'rollback_short' => 'Anullar',
'rollbacklink' => 'anullar',
'rollbacklinkcount' => 'revocar $1 {{PLURAL:$1|modificacion|modificacions}}',
'rollbacklinkcount-morethan' => 'revocar mai de $1 {{PLURAL:$1|modificacion|modificacions}}',
'rollbackfailed' => "L'anullacion a pas capitat",
'cantrollback' => "Impossible d'anullar : l'autor es la sola persona a aver efectuat de modificacions sus aqueste article",
'alreadyrolled' => "Impossible d'anullar la darrièra modificacion de l'article « [[:$1]] » efectuada per [[User:$2|$2]] ([[User talk:$2|Discutir]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) ;
qualqu’un mai ja a modificat o revocat la pagina.

La darrièra modificacion es estada efectuada per [[User:$3|$3]] ([[User talk:$3|Discutir]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).",
'editcomment' => "Lo resumit de la modificacion èra : « ''$1'' ».",
'revertpage' => 'Anullacion de las modificacions de [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussion]]) cap a la darrièra version de [[User:$1|$1]]',
'revertpage-nouser' => 'Revocacion de las modificacions per un utilizaire amagat a la darrièra version per {{GENDER:$1|[[User:$1|$1]]}}',
'rollback-success' => 'Anullacion de las modificacions de $1 ; retorn a la version de $2.',

# Edit tokens
'sessionfailure-title' => 'La session capitèt mal',
'sessionfailure' => 'Vòstra sesilha de connexion sembla aver de problèmas ;
aquesta accion es estada anullada en prevencion d’un piratatge de sesilha.
Clicatz sus « Precedent » e tornatz cargar la pagina d’ont venètz, puèi ensajatz tornarmai.',

# Protect
'protectlogpage' => 'Istoric de las proteccions',
'protectlogtext' => 'Aquí una lista de las modificacions de las proteccions de paginas.
Consultatz la [[Special:ProtectedPages|lista de las paginas protegidas]] per la lista de las proteccions actualament operacionalas.',
'protectedarticle' => 'a protegit « [[$1]] »',
'modifiedarticleprotection' => 'a modificat lo nivèl de proteccion de « [[$1]] »',
'unprotectedarticle' => 'a suprimit la proteccion de « [[$1]] »',
'movedarticleprotection' => 'a desplaçat los paramètres de proteccion dempuèi « [[$2]] » cap a « [[$1]] »',
'protect-title' => 'Cambiar lo nivèl de proteccion de « $1 »',
'protect-title-notallowed' => 'Veire lo nivèl de proteccion de « $1 »',
'prot_1movedto2' => 'a renomenat [[$1]] en [[$2]]',
'protect-badnamespace-title' => 'Espaci de noms pas protegible',
'protect-badnamespace-text' => 'Las paginas dins aqueste espaci de noms pòdon pas èsser protegidas.',
'protect-norestrictiontypes-title' => 'Pagina pas protegibla',
'protect-legend' => 'Confirmar la proteccion',
'protectcomment' => 'Rason :',
'protectexpiry' => 'Expiracion (expira pas per defaut)',
'protect_expiry_invalid' => 'Lo temps d’expiracion es invalid',
'protect_expiry_old' => 'Lo temps d’expiracion ja es passat.',
'protect-unchain-permissions' => "Desvarrolhar ancara mai d'opcions de proteccion",
'protect-text' => "Podètz consultar e modificar lo nivèl de proteccion de la pagina '''$1'''. Asseguratz-vos que seguissètz las règlas intèrnas.",
'protect-locked-blocked' => "Podètz pas modificar lo nivèl de proteccion tant que sètz blocat. Vaquí los reglatges actuals de la pagina '''$1''' :",
'protect-locked-dblock' => "Lo nivèl de proteccion pòt pas èsser modificat perque la banca de donadas es blocada. Vaquí los reglatges actuals de la pagina '''$1''' :",
'protect-locked-access' => "Avètz pas los dreches necessaris per modificar la proteccion de la pagina. Vaquí los reglatges actuals de la pagina '''$1''' :",
'protect-cascadeon' => "Aquesta pagina es actualament protegida perque es inclusa dins {{PLURAL:$1|la pagina seguenta|las paginas seguentas}}, {{PLURAL:$1|qu'es estada protegida|que son estadas protegidas}} amb l’opcion « proteccion en cascada » activada. Podètz cambiar lo nivèl de proteccion d'aquesta pagina sens qu'aquò afècte la proteccion en cascada.",
'protect-default' => 'Autorizar totes los utilizaires',
'protect-fallback' => 'Autorizar unicament los utilizaires amb lo drech « $1 »',
'protect-level-autoconfirmed' => 'Autorizar unicament los utilizaires autoconfirmats',
'protect-level-sysop' => 'Autorizar unicament los administrators',
'protect-summary-cascade' => 'proteccion en cascada',
'protect-expiring' => 'expira lo $1',
'protect-expiring-local' => 'expira lo $1',
'protect-expiry-indefinite' => 'indefinit',
'protect-cascade' => 'Proteccion en cascada - Protegís totas las paginas enclusas dins aquesta.',
'protect-cantedit' => "Podètz pas modificar los nivèls de proteccion d'aquesta pagina perque avètz pas la permission de l'editar.",
'protect-othertime' => 'Autra expiracion :',
'protect-othertime-op' => 'Autra expiracion',
'protect-existing-expiry' => 'Durada d’expiracion existenta : $2 a $3',
'protect-otherreason' => 'Motiu suplementari o autre :',
'protect-otherreason-op' => 'Autra rason',
'protect-dropdown' => "*Motius de proteccion mai corrents
** Vandalisme excessiu
** Spam excessiu
** Guèrra d'edicion
** Pagina de trafic fòrt",
'protect-edit-reasonlist' => 'Modificar las rasons de proteccion',
'protect-expiry-options' => '1 ora:1 hour,1 jorn:1 day,1 setmana:1 week,2 setmanas:2 weeks,1 mes:1 month,3 meses:3 months,6 meses:6 months,1 an:1 year,indefinidament:infinite',
'restriction-type' => 'Permission :',
'restriction-level' => 'Nivèl de restriccion :',
'minimum-size' => 'Talha minimoma',
'maximum-size' => 'Talha maximala :',
'pagesize' => '(octets)',

# Restrictions (nouns)
'restriction-edit' => 'Modificacion',
'restriction-move' => 'Cambiament de nom',
'restriction-create' => 'Crear',
'restriction-upload' => 'Importar',

# Restriction levels
'restriction-level-sysop' => 'Proteccion completa',
'restriction-level-autoconfirmed' => 'Semiproteccion',
'restriction-level-all' => 'Totes',

# Undelete
'undelete' => 'Veire las paginas escafadas',
'undeletepage' => 'Veire e restablir la pagina escafada',
'undeletepagetitle' => "'''La lista seguenta se compausa de versions suprimidas de [[:$1]]'''.",
'viewdeletedpage' => 'Istoric de la pagina suprimida',
'undeletepagetext' => "{{PLURAL:$1|Aquesta pagina es estada escafada e se tròba|Aquestas paginas son estadas escafadas e se tròban}} dins l'archiu. {{PLURAL:$1|Figura|Figuran}} encara dins la banca de donada e {{PLURAL:$1|pòt èsser restablida|pòdon èsser restablidas}}.
L'archiu pòt èsser escafat periodicament.",
'undelete-fieldset-title' => 'Restablir las versions',
'undeleteextrahelp' => "Per restablir l'istoric complet d'aquesta pagina, daissatz vèrjas totas las casas de marcar, puèi clicatz sus '''''Restablir'''''.
Per efectuar un restabliment parcial, marcatz las casas que correspondon a las versions que son de restablir, puèi clicatz sus '''''Restablir'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|revision archivada|revisions archivadas}}',
'undeletehistory' => "Se restablissètz la pagina, totas las revisions seràn plaçadas tornamai dins l'istoric.

S'una pagina novèla amb lo meteis nom es estada creada dempuèi la supression, las revisions restablidas apareisseràn dins l'istoric anterior e la version correnta serà pas automaticament remplaçada.",
'undeleterevdel' => 'Lo restabliment serà pas efectuat se, fin finala, la version mai recenta de la pagina es parcialament suprimida. Dins aqueste cas, vos cal deseleccionatz las versions mai recentas (en naut). Las versions dels fichièrs a las qualas avètz pas accès seràn pas restablidas.',
'undeletehistorynoadmin' => "Aqueste article es estat suprimit. Lo motiu de la supression es indicat dins lo resumit çaijós, amb los detalhs dels utilizaires que l’an modificat abans sa supression. Lo contengut d'aquestas versions es pas accessible qu’als administrators.",
'undelete-revision' => 'Version suprimida de $1, (revision del $4 a $5) per $3 :',
'undeleterevision-missing' => 'Version invalida o mancanta. Benlèu avètz un ligam marrit, o la version es estada restablida o suprimida de l’archiu.',
'undelete-nodiff' => 'Cap de revision precedenta pas trobada.',
'undeletebtn' => 'Restablir',
'undeletelink' => 'veire/restablir',
'undeleteviewlink' => 'veire',
'undeletereset' => 'Reïnicializar',
'undeleteinvert' => 'Inversar la seleccion',
'undeletecomment' => 'Motiu :',
'undeletedrevisions' => '{{PLURAL:$1|1 revision restablida|$1 revisions restablidas}}',
'undeletedrevisions-files' => '{{PLURAL:$1|1 revision|$1 revisions}} e {{PLURAL:$2|1 fichièr restablit|$2 fichièrs restablits}}',
'undeletedfiles' => '$1 {{PLURAL:$1|fichièr restablit|fichièrs restablits}}',
'cannotundelete' => 'Fracàs del restabliment :
$1',
'undeletedpage' => "'''La pagina $1 es estada restablida'''.

Consultatz l’[[Special:Log/delete|istoric de las supressions]] per veire las paginas recentament suprimidas e restablidas.",
'undelete-header' => 'Consultatz l’[[Special:Log/delete|istoric de las supressions]] per veire las paginas recentament suprimidas.',
'undelete-search-title' => 'Recercar las paginas suprimidas',
'undelete-search-box' => 'Cercar una pagina suprimida',
'undelete-search-prefix' => 'Far veire las paginas que començan per :',
'undelete-search-submit' => 'Cercar',
'undelete-no-results' => 'Cap de pagina correspondent a la recèrca es pas estada trobada dins los archius.',
'undelete-filename-mismatch' => 'Impossible de restablir lo fichièr datat del $1 : fichièr introbable',
'undelete-bad-store-key' => 'Impossible de restablir lo fichièr datat del $1 : lo fichièr èra absent abans la supression.',
'undelete-cleanup-error' => 'Error al moment de la supression de l’archiu inutilizada « $1 ».',
'undelete-missing-filearchive' => 'Impossible de restablir lo fichièr amb l’ID $1 perque es pas dins la banca de donadas. Benlèu ja i es estat restablit.',
'undelete-error' => "Pagina d'error d'anullacion",
'undelete-error-short' => 'Error al moment del restabliment del fichièr : $1',
'undelete-error-long' => "D'errors son estadas rencontradas al moment del restabliment del fichièr :

$1",
'undelete-show-file-confirm' => 'Sètz segur(a) que volètz visionar una version suprimida del fichièr « <nowiki>$1</nowiki> » que data del $2 a $3 ?',
'undelete-show-file-submit' => 'Òc',

# Namespace form on various pages
'namespace' => 'Espaci de noms :',
'invert' => 'Inversar la seleccion',
'namespace_association' => 'Espaci de nom associat',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => "Contribucions de l'{{GENDER:$1|utilizaire|utilizaira}}",
'contributions-title' => 'Lista de las contribucions de l’utilizaire $1',
'mycontris' => 'Contribucions',
'contribsub2' => 'Per {{GENDER:$3|$1}} ($2)',
'nocontribs' => 'Cap de modificacion correspondenta a aquestes critèris es pas estada trobada.',
'uctop' => '(actual)',
'month' => 'A partir del mes (e precedents) :',
'year' => 'A partir de l’annada (e precedentas) :',

'sp-contributions-newbies' => 'Far veire sonque las contribucions dels utilizaires novèls',
'sp-contributions-newbies-sub' => 'Lista de las contribucions dels utilizaires novèls. Las paginas que son estadas suprimidas son pas afichadas.',
'sp-contributions-newbies-title' => 'Las contribucions de l’utilizaire pels comptes novèls',
'sp-contributions-blocklog' => 'Istoric dels blocatges',
'sp-contributions-deleted' => 'contribucions suprimidas',
'sp-contributions-uploads' => 'importat',
'sp-contributions-logs' => 'jornals',
'sp-contributions-talk' => 'Discutir',
'sp-contributions-userrights' => 'gerir los dreches',
'sp-contributions-blocked-notice' => 'Aqueste utilizaire es actualament blocat. La darrièra entrada del jornal dels blocatges es indicada çaijós a títol d’informacion :',
'sp-contributions-blocked-notice-anon' => 'Aquesta adreça IP es actualament blocada.
La darrièra intrada del jornal dels blocatges es indicada çaijós a títol d’informacion :',
'sp-contributions-search' => 'Cercar las contribucions',
'sp-contributions-username' => 'Adreça IP o nom d’utilizaire :',
'sp-contributions-toponly' => 'Mostrar sonque las contribucions que son lo darrièr cambiament',
'sp-contributions-submit' => 'Cercar',

# What links here
'whatlinkshere' => 'Paginas ligadas a aquesta',
'whatlinkshere-title' => 'Paginas que puntan cap a « $1 »',
'whatlinkshere-page' => 'Pagina :',
'linkshere' => "Las paginas çaijós contenon un ligam cap a '''[[:$1]]''':",
'nolinkshere' => "Cap de pagina conten pas de ligam cap a '''[[:$1]]'''.",
'nolinkshere-ns' => "Cap de pagina conten pas de ligam cap a '''[[:$1]]''' dins l’espaci de nom causit.",
'isredirect' => 'pagina de redireccion',
'istemplate' => 'inclusion',
'isimage' => 'Paginas ligadas al fichièr',
'whatlinkshere-prev' => '{{PLURAL:$1|precedent|$1 precedents}}',
'whatlinkshere-next' => '{{PLURAL:$1|seguent|$1 seguents}}',
'whatlinkshere-links' => '← ligams',
'whatlinkshere-hideredirs' => '$1 redireccions',
'whatlinkshere-hidetrans' => '$1 transclusions',
'whatlinkshere-hidelinks' => '$1 ligams',
'whatlinkshere-hideimages' => '$1 los fichièrs ligats',
'whatlinkshere-filters' => 'Filtres',

# Block/unblock
'autoblockid' => 'Blocatge automatic #$1',
'block' => 'Blocar un utilizaire',
'unblock' => 'Desblocar un utilizaire',
'blockip' => 'Blocar en escritura',
'blockip-title' => 'Blocar l’utilizaire',
'blockip-legend' => 'Blocar en escritura',
'blockiptext' => "Utilizatz lo formulari çaijós per blocar l'accès a las modificacions a partir d'una adreça IP especifica o d'un nom d'utilizaire.
Una tala mesura deu pas èsser presa pas que per empachar lo vandalisme e en acòrdi amb las [[{{MediaWiki:Policy-url}}|règlas intèrnas]].
Donatz çaijós un motiu precís (per exemple en citant las paginas que son estadas vandalizadas).",
'ipadressorusername' => 'Adreça IP o nom d’utilizaire :',
'ipbexpiry' => 'Durada del blocatge :',
'ipbreason' => 'Motiu :',
'ipbreasonotherlist' => 'Autre motiu',
'ipbreason-dropdown' => '* Motius de blocatge mai frequents
** Vandalisme
** Insercion d’informacions faussas
** Supression de contengut sens justificacion
** Insercion repetida de ligams extèrnes publicitaris (spam)
** Insercion de contengut sens cap de sens
** Temptativa d’intimidacion o agarriment
** Abús d’utilizacion de comptes multiples
** Nom d’utilizaire inacceptable, injuriós o difamant',
'ipbcreateaccount' => 'Empachar la creacion de compte',
'ipbemailban' => 'Empachar l’utilizaire de mandar de corrièrs electronics',
'ipbenableautoblock' => 'Blocar automaticament las adreças IP utilizadas per aqueste utilizaire',
'ipbsubmit' => 'Blocar aqueste utilizaire',
'ipbother' => 'Autra durada',
'ipboptions' => '2 oras:2 hours,1 jorn:1 day,3 jorns:3 days,1 setmana:1 week,2 setmanas:2 weeks,1 mes:1 month,3 meses:3 months,6 meses:6 months,1 an:1 year,indefinidament:infinite',
'ipbotheroption' => 'autre',
'ipbotherreason' => 'Motiu diferent o suplementari',
'ipbhidename' => 'Amagar lo nom d’utilizaire de las modificacions e de las listas',
'ipbwatchuser' => "Seguir las paginas d'utilizaire e de discussion d'aqueste utilizaire",
'ipb-change-block' => 'Tornar blocar aqueste utilizaire amb aquestes paramètres',
'ipb-confirm' => 'Confirmar lo blocatge',
'badipaddress' => "L'adreça IP es incorrècta",
'blockipsuccesssub' => 'Blocatge capitat',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] es esta{{GENDER:||t|(da)}} bloca{{GENDER:||t|(da)}}.<br />
Podètz consultar la [[Special:BlockList|lista dels comptes e de las adreças IP blocats]].',
'ipb-edit-dropdown' => 'Modificar los motius de blocatge per defaut',
'ipb-unblock-addr' => 'Desblocar $1',
'ipb-unblock' => "Desblocar un compte d'utilizaire o una adreça IP",
'ipb-blocklist' => 'Vejatz los blocatges existents',
'ipb-blocklist-contribs' => 'Contribucions per $1',
'unblockip' => 'Desblocar un utilizaire o una adreça IP',
'unblockiptext' => "Utilizatz lo formulari çaijós per restablir l'accès en escritura
a partir d'una adreça IP precedentament blocada.",
'ipusubmit' => 'Suprimir aqueste blocatge',
'unblocked' => '[[User:$1|$1]] es estat desblocat',
'unblocked-range' => '$1 es estat desblocat',
'unblocked-id' => 'Lo blocatge $1 es estat levat',
'blocklist' => 'Utilizaires o adreças IP blocats',
'ipblocklist' => 'Utilizaires o adreças IP blocats',
'ipblocklist-legend' => 'Cercar un utilizaire blocat',
'blocklist-userblocks' => 'Amagar los blocatges de comptes',
'blocklist-tempblocks' => 'Amagar los blocatges temporaris',
'blocklist-addressblocks' => "Amagar los blocatges d'adreças IP unicas",
'blocklist-rangeblocks' => 'Amagar los blòts de portada',
'blocklist-timestamp' => 'Data e ora',
'blocklist-target' => 'Cibla',
'blocklist-expiry' => "Data d'expiracion",
'blocklist-by' => "Administrator qu'a efectuat lo blocatge",
'blocklist-params' => 'Paramètres de blocatge',
'blocklist-reason' => 'Motiu',
'ipblocklist-submit' => 'Recercar',
'ipblocklist-localblock' => 'Blocatge local',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Autre blocatge|Autres blocatges}}',
'infiniteblock' => 'permanent',
'expiringblock' => 'expira lo $1 a $2',
'anononlyblock' => 'utilizaire anonim unicament',
'noautoblockblock' => 'blocatge automatic desactivat',
'createaccountblock' => 'La creacion de compte es blocada.',
'emailblock' => 'mandadís de corrièr electronic blocat',
'blocklist-nousertalk' => 'pòdon pas modificar lor pròpria pagina de discussion',
'ipblocklist-empty' => 'La lista dels blocatges es voida.',
'ipblocklist-no-results' => 'L’adreça IP o l’utilizaire es pas esta blocat.',
'blocklink' => 'blocar',
'unblocklink' => 'desblocar',
'change-blocklink' => 'modificar lo blocatge',
'contribslink' => 'contribucions',
'emaillink' => 'mandar un messatge',
'autoblocker' => 'Sètz estat autoblocat perque partejatz una adreça IP amb "[[User:$1|$1]]".
La rason balhada per $1 es : « $2 ».',
'blocklogpage' => 'Istoric dels blocatges',
'blocklog-showlog' => 'Aqueste utilizaire es estat blocat precedentament. Lo jornal dels blocatges es disponible çaijós :',
'blocklog-showsuppresslog' => 'Aqueste utilizaire es estat blocat e amagat precedentament. Lo jornal de las supressions es disponible çaijós :',
'blocklogentry' => 'a blocat « [[$1]] » - durada : $2 $3',
'reblock-logentry' => 'a modificat los parametratge de blocatge per [[$1]] amb una durada d’expiracion de $2 $3',
'blocklogtext' => "Aquò es l'istoric dels blocatges e desblocatges dels utilizaires.
Las adreças IP automaticament blocadas son pas listadas.
Consultatz la [[Special:BlockList|lista dels utilizaires blocats]] per veire los bandiments e blocatges actualament en cors.",
'unblocklogentry' => 'a desblocat « $1 »',
'block-log-flags-anononly' => 'utilizaires anonims solament',
'block-log-flags-nocreate' => 'creacion de compte interdicha',
'block-log-flags-noautoblock' => 'autoblocatge de las IP desactivat',
'block-log-flags-noemail' => 'Mandadís de corrièr electronic blocat',
'block-log-flags-nousertalk' => 'pòt pas modificar sa pròpria pagina de discussion',
'block-log-flags-angry-autoblock' => 'autoblocatge melhorat en servici',
'block-log-flags-hiddenname' => "nom d'utilizaire amagat",
'range_block_disabled' => "Lo blocatge de plajas d'IP es estat desactivat.",
'ipb_expiry_invalid' => 'Temps d’expiracion invalid.',
'ipb_expiry_temp' => 'Las plajas dels utilizaires amagats deurián èsser permanentas.',
'ipb_hide_invalid' => "Impossible de suprimir aqueste compte ; sembla qu'a tròp de modificacions.",
'ipb_already_blocked' => '« $1 » ja es blocat',
'ipb-needreblock' => '$1 ja es blocat. Volètz modificar los paramètres ?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Autre blocatge|Autres blocatges}}',
'ipb_cant_unblock' => 'Error : Lo blocatge d’ID $1 existís pas. Es possible qu’un desblocatge ja siá estat efectuat.',
'ipb_blocked_as_range' => "Error : L'adreça IP $1 es pas estada blocada dirèctament e doncas pòt pas èsser deblocada. Çaquelà, es estada blocada per la plaja $2 la quala pòt èsser deblocada.",
'ip_range_invalid' => 'Plaja IP incorrècta.',
'ip_range_toolarge' => 'Los blocatges de plajas mai grandas que /$1 son pas autorizadas.',
'proxyblocker' => 'Blocaire de mandatari (proxy)',
'proxyblockreason' => "Vòstra ip es estada blocada perque s’agís d’un proxy dobèrt. Mercé de contactar vòstre fornidor d’accès internet o vòstre supòrt tecnic e de l’informar d'aqueste problèma de seguretat.",
'sorbsreason' => 'Vòstra adreça IP es listada en tant que mandatari (proxy) dobèrt DNSBL per {{SITENAME}}.',
'sorbs_create_account_reason' => 'Vòstra adreça IP es listada en tant que mandatari (proxy) dobèrt DNSBL per {{SITENAME}}.
Podètz pas crear un compte',
'cant-block-while-blocked' => "Podètz pas blocar d'autres utilizaires pendent que sètz blocat(ada).",
'cant-see-hidden-user' => "L'utilizaire qu'ensajatz de blocar es ja estat blocat e amagat. Sens lo drech hideuser, podètz pas veire o modificar lo blocatge de l'utilizaire.",
'ipbblocked' => "Podètz pas blocar o desblocar d'autres utilizaire, perque vos {{GENDER:|meteis|meteissa|meteis}} sètz {{GENDER:|blocat|blocada|blocat}}.",
'ipbnounblockself' => 'Sètz pas autorizat a vos desblocar vos meteis',

# Developer tools
'lockdb' => 'Varrolhar la banca',
'unlockdb' => 'Desvarrolhar la banca',
'lockdbtext' => "Lo clavatge de la banca de donadas empacharà totes los utilizaires de modificar las paginas, de salvar lors preferéncias, de modificar lor lista de seguiment e d'efectuar totas las autras operacions necessitant de modificacions dins la banca de donadas.
Confirmatz qu'es plan çò que volètz far e que desblocaretz la banca tre que vòstra operacion de mantenença serà acabada.",
'unlockdbtext' => "Lo desclavatge de la banca de donadas permetrà a totes los utilizaires de modificar tornarmai de paginas, de metre a jorn lors preferéncias e lor lista de seguiment, e mai d'efectuar las autras operacions que necessitan de modificacions dins la banca de donadas.
Confirmatz qu'es plan çò que volètz far.",
'lockconfirm' => 'Òc, confirmi que desiri varrolhar la banca de donadas.',
'unlockconfirm' => 'Òc, confirmi que desiri desvarrolhar la banca de donadas.',
'lockbtn' => 'Varrolhar la banca',
'unlockbtn' => 'Desvarrolhar la banca',
'locknoconfirm' => 'Avètz pas marcat la casa de confirmacion.',
'lockdbsuccesssub' => 'Varrolhatge de la banca capitat.',
'unlockdbsuccesssub' => 'Banca desvarrolhada.',
'lockdbsuccesstext' => 'La banca de donadas de {{SITENAME}} es varrolhada.

Doblidetz pas de la desvarrolhar quand auretz acabat vòstra operacion de mantenença.',
'unlockdbsuccesstext' => 'La banca de donadas de {{SITENAME}} es desvarrolhada.',
'lockfilenotwritable' => 'Lo fichièr de blocatge de la banca de donadas es pas inscriptible. Per blocar o desblocar la banca de donadas, vos cal poder escriure sul servidor web.',
'databasenotlocked' => 'La banca de donadas es pas varrolhada.',
'lockedbyandtime' => '(per $1 lo $2 a $3)',

# Move page
'move-page' => 'Tornar nomenar $1',
'move-page-legend' => 'Tornar nomenar una pagina',
'movepagetext' => "Utilizatz lo formulari çaijós per tornar nomenar una pagina, en desplaçant tot son istoric cap al nom novèl. Lo títol ancian vendrà una pagina de redireccion cap al títol novèl. Podètz metre a jorn automaticament las redireccions actualas que puntan cap al títol original. Se causissètz de lo far pas, asseguratz-vos de verificar tota [[Special:DoubleRedirects|redireccion dobla]] o [[Special:BrokenRedirects|redireccion copada]]. Avètz la responsabilitat de vos assegurar que los ligams contunhen de puntar cap a lor destinacion supausada.

Notatz que la pagina serà '''pas''' renomada s'existís ja una pagina amb lo novèl títol, levat se aquesta darrièra a un istoric de modificacions verge e es una simpla redireccion. Aquò permet de renomenar una pagina cap a sa posicion d'origina se lo desplaçament s'avera erronèu.

'''ATENCION !'''
Aquò pòt provocar un cambiament radical e imprevist per una pagina consultada frequentament ; asseguratz-vos de n'aver comprés las consequéncias abans de contunhar.",
'movepagetalktext' => "La pagina de discussion associada, se presenta, serà automaticament desplaçada amb ''' levat se :'''
*Desplaçatz una pagina cap a un autre espaci,
*Una pagina de discussion ja existís amb lo nom novèl, o
*Avètz deseleccionat lo boton çaijós.

Dins aqueste cas, vos caldrà desplaçar o fusionar la pagina manualament se o volètz.",
'movearticle' => "Tornar nomenar l'article",
'moveuserpage-warning' => "'''Atencion :''' Sètz a mand de tornar nomenar una pagina d’utilizaire. Notatz que sola la pagina serà renomenada e que l’utilizaire '''ne''' serà '''pas''' renomenat.",
'movenologin' => 'Vos sètz pas identificat(ada)',
'movenologintext' => "Per poder tornar nomenar un article, vos cal èsser [[Special:UserLogin|connectat(ada)]]
en tant qu'utilizaire enregistrat.",
'movenotallowed' => 'Avètz pas la permission de tornar nomenar de paginas.',
'movenotallowedfile' => 'Avètz pas la permission de desplaçar los fichièrs.',
'cant-move-user-page' => "Avètz pas la permission de tornar nomenar de paginas d'utilizaires raices sus aqueste wiki.",
'cant-move-to-user-page' => "Avètz pas la permission de tornar nomenar una pagina cap a una pagina d'utilizaire (a l'excepcion d'una sospagina).",
'newtitle' => 'Títol novèl',
'move-watch' => 'Seguir aquesta pagina',
'movepagebtn' => "Tornar nomenar l'article",
'pagemovedsub' => 'Cambiament de nom capitat',
'movepage-moved' => 'La pagina « $1 » es estada renomenada en « $2 ».',
'movepage-moved-redirect' => 'Una redireccion es estada creada.',
'movepage-moved-noredirect' => 'La creacion de la redireccion es estada suprimida.',
'articleexists' => "Existís ja un article que pòrta aqueste títol, o lo títol qu'avètz causit es pas valid.
Causissètz-ne un autre.",
'cantmove-titleprotected' => 'Avètz pas la possibilitat de desplaçar una pagina cap a aqueste emplaçament perque lo títol es estat protegit a la creacion.',
'talkexists' => "La pagina ela-meteissa es estada desplaçada amb succès, mas
la pagina de discussion a pas pogut èsser desplaçada perque ja n'existissiá una
jol nom novèl. Se vos plai, fusionatz-las manualament.",
'movedto' => 'renomenat en',
'movetalk' => 'Tornar nomenar tanben la pagina de discussion associada',
'move-subpages' => 'Tornar nomenar las sospaginas (fins a $1 paginas)',
'move-talk-subpages' => 'Tornar nomenar las sospaginas de la pagina de discussion (fins a $1 paginas)',
'movepage-page-exists' => 'La pagina $1 existís ja e pòt pas èsser espotida automaticament.',
'movepage-page-moved' => 'La pagina $1 es estada renomenada en $2.',
'movepage-page-unmoved' => 'La pagina $1 pòt èsser renomenada en $2.',
'movepage-max-pages' => "Lo maximum de $1 {{PLURAL:$1|pagina es estada renomenada|paginas son estadas renomenadas}} e cap d'autra o poirà pas èsser automaticament.",
'movelogpage' => 'Istoric dels cambiaments de nom',
'movelogpagetext' => 'Vaquí la lista de las darrièras paginas renomenadas.',
'movesubpage' => '{{PLURAL:$1|Sospagina|Sospaginas}}',
'movesubpagetext' => 'Aquesta pagina a $1 {{PLURAL:$1|sospagina afichada|sospaginas afichadas}} çaijós.',
'movenosubpage' => 'Aquesta pagina a pas cap de sospagina.',
'movereason' => 'Motiu :',
'revertmove' => 'anullar',
'delete_and_move' => 'Suprimir e tornar nomenar',
'delete_and_move_text' => '==Supression requerida==
L’article de destinacion « [[:$1]] » existís ja.
Lo volètz suprimir per permetre lo cambiament de nom ?',
'delete_and_move_confirm' => 'Òc, accèpti de suprimir la pagina de destinacion per permetre lo cambiament de nom.',
'delete_and_move_reason' => 'Pagina suprimida per permetre lo cambiament de nom dempuèi « [[$1]] »',
'selfmove' => 'Los títols d’origina e de destinacion son los meteisses : impossible de tornar nomenar una pagina sus ela-meteissa.',
'immobile-source-namespace' => "Podètz pas tornar nomenar de paginas dins l'espaci de noms « $1 »",
'immobile-target-namespace' => "Podètz pas desplaçar de paginas cap a l'espaci de noms « $1 »",
'immobile-target-namespace-iw' => 'Los ligams interwikis son pas una cibla valida pels cambiaments de nom.',
'immobile-source-page' => 'Aquesta pagina se pòt pas tornar nomenar.',
'immobile-target-page' => 'Es pas possible de desplaçar la pagina cap a aqueste títol.',
'imagenocrossnamespace' => 'Pòt pas desplaçar un imatge cap a un espaci de nomenatge que siá pas un imatge.',
'nonfile-cannot-move-to-file' => "Impossible de renomenar quicòm mai qu'un fichièr cap a l'espaci de noms fichièr.",
'imagetypemismatch' => "L'extension novèla d'aqueste fichièr reconeis pas aqueste format.",
'imageinvalidfilename' => 'Lo nom del fichièr cibla es incorrècte',
'fix-double-redirects' => 'Metre a jorn las redireccions que puntant cap al títol ancian',
'move-leave-redirect' => 'Daissar una redireccion darrièr',
'protectedpagemovewarning' => "'''ATENCION:''' Aquesta pagina es estada protegida per que sonque los utilizaires qu'an los dreches d'administrators la pòscan tornar nomenar. La darrièra entrada del jornal es afichada çaijós per referéncia :",
'semiprotectedpagemovewarning' => "'''Nòta :''' Aquesta pagina es estada blocada per que sonque los utilizaires enregistrats la pòscan tornar nomenar. La darrièra entrada del jornal es afichada çaijós per referéncia :",
'move-over-sharedrepo' => '== Lo fichièr existís ==
[[:$1]] existís ja sus un depaus partejat. Tornar nomenar aqueste fichièr farà lo fichièr sul depaus partatge inaccessible.',
'file-exists-sharedrepo' => 'Lo nom causit es ja utilizat per un fichièr sus un depaus partejat.
Causissètz un autre nom.',

# Export
'export' => 'Exportar de paginas',
'exporttext' => "Podètz exportar en XML lo tèxte e l’istoric d’una pagina o d’un ensemble de paginas; lo resultat pòt alara èsser importat dins un autre wiki que fonciona amb lo logicial MediaWiki.

Per exportar de paginas, entratz lors títols dins la bóstia de tèxte çaijós, un títol per linha, e seleccionatz s'o desiratz o pas la version actuala amb totas las versions ancianas, amb la pagina d’istoric, o simplament la pagina actuala amb d'informacions sus la darrièra modificacion.

Dins aqueste darrièr cas, podètz tanben utilizar un ligam, coma [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] per la pagina [[{{MediaWiki:Mainpage}}]].",
'exportall' => 'Exportar totas las paginas',
'exportcuronly' => 'Exportar unicament la version correnta sens l’istoric complet',
'exportnohistory' => "----
'''Nòta :''' l’exportacion completa de l’istoric de las paginas amb l’ajuda d'aqueste formulari es estada desactivada per de rasons de performàncias.",
'exportlistauthors' => 'Inclure una lista completa dels contributors per cada pagina',
'export-submit' => 'Exportar',
'export-addcattext' => 'Apondre las paginas de la categoria :',
'export-addcat' => 'Apondre',
'export-addnstext' => "Apondre de paginas dins l'espaci de noms :",
'export-addns' => 'Apondre',
'export-download' => 'Salvar en tant que fichièr',
'export-templates' => 'Enclure los modèls',
'export-pagelinks' => 'Enclure las paginas ligadas a una prigondor de :',

# Namespace 8 related
'allmessages' => 'Lista dels messatges del sistèma',
'allmessagesname' => 'Nom del camp',
'allmessagesdefault' => 'Messatge per defaut',
'allmessagescurrent' => 'Messatge actual',
'allmessagestext' => 'Aquò es la lista de totes los messatges disponibles dins l’espaci MediaWiki.
Visitatz la [//www.mediawiki.org/wiki/Localisation Localizacion MediaWiki] e [//translatewiki.net translatewiki.net] se desiratz contribuir a la localizacion MediaWiki generica.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:Allmessages''' es pas disponible perque '''\$wgUseDatabaseMessages''' es desactivat.",
'allmessages-filter-legend' => 'Filtre',
'allmessages-filter' => 'Filtrar per estat de modificacion :',
'allmessages-filter-unmodified' => 'Pas modificat',
'allmessages-filter-all' => 'Totes',
'allmessages-filter-modified' => 'Modificat',
'allmessages-prefix' => 'Filtrar per prefix :',
'allmessages-language' => 'Lenga :',
'allmessages-filter-submit' => 'Aplicar',

# Thumbnails
'thumbnail-more' => 'Agrandir',
'filemissing' => 'Fichièr absent',
'thumbnail_error' => 'Error al moment de la creacion de la miniatura : $1',
'thumbnail_error_remote' => "Messatge d'error de $1 :
$2",
'djvu_page_error' => 'Pagina DjVu fòra limits',
'djvu_no_xml' => "Impossible d’obténer l'XML pel fichièr DjVu",
'thumbnail-temp-create' => 'Impossible de crear lo fichièr de vinheta temporari',
'thumbnail-dest-create' => "Impossible d'enregistrar la vinheta sus la destinacion",
'thumbnail_invalid_params' => 'Paramètres de la miniatura invalids',
'thumbnail_dest_directory' => 'Impossible de crear lo repertòri de destinacion',
'thumbnail_image-type' => 'Tipe d’imatge pas suportat',
'thumbnail_gd-library' => 'Configuracion incompleta de la bibliotèca GD : foncion $1 introbabla',
'thumbnail_image-missing' => 'Lo fichièr seguent es introbable : $1',

# Special:Import
'import' => 'Importar de paginas',
'importinterwiki' => 'Impòrt interwiki',
'import-interwiki-text' => "Seleccionatz un wiki e un títol de pagina d'importar.
Las datas de las versions e los noms dels editors seràn preservats.
Totas las accions d’importacion interwiki son conservadas dins lo [[Special:Log/import|jornal d’impòrt]].",
'import-interwiki-source' => 'Wiki e pagina font :',
'import-interwiki-history' => "Copiar totas las versions de l'istoric d'aquesta pagina",
'import-interwiki-templates' => 'Enclure totes los modèls',
'import-interwiki-submit' => 'Importar',
'import-interwiki-namespace' => 'Espaci de noms de destinacion :',
'import-interwiki-rootpage' => 'Pagina raiç de destinacion (opcionala):',
'import-upload-filename' => 'Nom del fichièr :',
'import-comment' => 'Comentari :',
'importtext' => "Exportatz lo fichièr dempuèi lo wiki d’origina en utilizant [[Special:Export|aisina d'exportacion]].
Salvatz-lo sus vòstre disc dur puèi importatz-lo aicí.",
'importstart' => 'Impòrt de las paginas...',
'import-revision-count' => '$1 {{PLURAL:$1|version|versions}}',
'importnopages' => "Cap de pagina d'importar.",
'imported-log-entries' => '$1 {{PLURAL:$1|entrada|entradas}} del jornal {{PLURAL:$1|importada|importadas}}.',
'importfailed' => 'Fracàs de l’impòrt : $1',
'importunknownsource' => 'Tipe de la font d’impòrt desconegut',
'importcantopen' => "Impossible de dobrir lo fichièr d'importar",
'importbadinterwiki' => 'Ligam interwiki marrit',
'importnotext' => 'Void o sens tèxte',
'importsuccess' => "L'impòrt a capitat !",
'importhistoryconflict' => "I a un conflicte dins l'istoric de las versions (aquesta pagina a pogut èsser importada de per abans).",
'importnosources' => 'Cap de font interwiki es pas estada definida e la còpia dirècta d’istoric es desactivada.',
'importnofile' => 'Cap de fichièr es pas estat importat.',
'importuploaderrorsize' => "Lo telecargament del fichièr d'importar a pas capitat. Sa talha es mai granda que la autorizada.",
'importuploaderrorpartial' => "Lo telecargament del fichièr d'importar a pas capitat. Aqueste o es pas estat que parcialament.",
'importuploaderrortemp' => "Lo telecargament del fichièr d'importar a pas capitat. Un dorsièr temporari es mancant.",
'import-parse-failure' => "Ruptura dins l'analisi de l'impòrt XML",
'import-noarticle' => "Pas de pagina d'importar !",
'import-nonewrevisions' => 'Totas las revisions son estadas importadas deperabans.',
'xml-error-string' => '$1 a la linha $2, col $3 (octet $4) : $5',
'import-upload' => "Impòrt d'un fichier XML",
'import-token-mismatch' => 'Pèrda de las donadas de sesilha. Tornatz ensajar.',
'import-invalid-interwiki' => "Impossible d'importar dempuèi lo wiki especificat.",
'import-error-edit' => 'La pagina « $1 » es pas estada importada perque sètz pas autorizat a la modificar.',
'import-error-create' => 'La pagina « $1 » es pas estada importada perque sètz pas autorizat a la crear.',
'import-options-wrong' => '{{PLURAL:$2|Marrida opcion|Marridas opcions}} : <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'La pagina raiç provesida es un títol invalid.',

# Import log
'importlogpage' => 'Istoric de las importacions de paginas',
'importlogpagetext' => 'Impòrts administratius de paginas amb l’istoric a partir dels autres wikis.',
'import-logentry-upload' => 'a importat (telecargament) [[$1]]',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|version|versions}}',
'import-logentry-interwiki' => 'a importat (transwiki) $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|version|versions}} dempuèi $2',

# JavaScriptTest
'javascripttest' => 'Tèst de JavaScript',
'javascripttest-title' => 'Execucion dels tèsts $1',
'javascripttest-pagetext-noframework' => "Aquesta pagina es reservada per l'execucion dels tèsts JavaScript.",
'javascripttest-pagetext-unknownframework' => 'Estructura « $1 » desconeguda.',
'javascripttest-pagetext-frameworks' => 'Causissètz una de las estructuras de tèst seguentas : $1',
'javascripttest-pagetext-skins' => 'Causissètz un abilhatge amb lo qual cal aviar los tèsts :',
'javascripttest-qunit-intro' => 'Veire [$1 la documentacion de tèst] sus mediawiki.org.',
'javascripttest-qunit-heading' => 'Seguida de tèst QUnit de JavaScript sus MediaWiki',

# Tooltip help for the actions
'tooltip-pt-userpage' => "Vòstra pagina d'utilizaire",
'tooltip-pt-anonuserpage' => "La pagina d'utilizare de l’IP amb la quala contribuissètz",
'tooltip-pt-mytalk' => 'Vòstra pagina de discussion',
'tooltip-pt-anontalk' => 'La pagina de discussion per aquesta adreça IP',
'tooltip-pt-preferences' => 'Mas preferéncias',
'tooltip-pt-watchlist' => 'La lista de las paginas que seguissètz',
'tooltip-pt-mycontris' => 'Lista de vòstras contribucions',
'tooltip-pt-login' => 'Sètz convidat(ada) a vos identificar, mas es pas obligatòri.',
'tooltip-pt-anonlogin' => 'Sètz convidat(ada) a vos identificar, mas es pas obligatòri.',
'tooltip-pt-logout' => 'Se desconnectar',
'tooltip-ca-talk' => "Discussion a prepaus d'aquesta pagina",
'tooltip-ca-edit' => 'Podètz modificar aquesta pagina. Mercé de previsualizar abans d’enregistrar.',
'tooltip-ca-addsection' => 'Començar una seccion novèla',
'tooltip-ca-viewsource' => 'Aquesta pagina es protegida. Çaquelà, ne podètz veire lo contengut.',
'tooltip-ca-history' => "Los autors e versions precedentas d'aquesta pagina.",
'tooltip-ca-protect' => 'Protegir aquesta pagina',
'tooltip-ca-unprotect' => "Cambiar la proteccion d'aquesta pagina",
'tooltip-ca-delete' => 'Suprimir aquesta pagina',
'tooltip-ca-undelete' => 'Restablir aquesta pagina',
'tooltip-ca-move' => 'Tornar nomenar aquesta pagina',
'tooltip-ca-watch' => 'Apondètz aquesta pagina a vòstra lista de seguiment',
'tooltip-ca-unwatch' => 'Levatz aquesta pagina de vòstra lista de seguiment',
'tooltip-search' => 'Cercar dins {{SITENAME}}',
'tooltip-search-go' => 'Anar cap a una pagina que pòrta exactament aqueste nom se existís.',
'tooltip-search-fulltext' => 'Recercar las paginas que compòrtan aqueste tèxte.',
'tooltip-p-logo' => 'Pagina principala',
'tooltip-n-mainpage' => 'Visitatz la pagina principala',
'tooltip-n-mainpage-description' => 'Anar a l’acuèlh',
'tooltip-n-portal' => 'A prepaus del projècte',
'tooltip-n-currentevents' => "Trobar d'entresenhas suls eveniments actuals",
'tooltip-n-recentchanges' => 'Lista dels darrièrs cambiaments sul wiki.',
'tooltip-n-randompage' => "Afichar una pagina a l'azard",
'tooltip-n-help' => "L'endrech per s'assabentar.",
'tooltip-t-whatlinkshere' => 'Lista de las paginas ligadas a aquesta',
'tooltip-t-recentchangeslinked' => 'Lista dels darrièrs cambiaments de las paginas ligadas a aquesta',
'tooltip-feed-rss' => 'Flux RSS per aquesta pagina',
'tooltip-feed-atom' => 'Flux Atom per aquesta pagina',
'tooltip-t-contributions' => "Veire la lista de las contribucions d'aqueste utilizaire",
'tooltip-t-emailuser' => 'Mandar un corrièr electronic a aqueste utilizaire',
'tooltip-t-upload' => 'Mandar un imatge o fichièr mèdia sul servidor',
'tooltip-t-specialpages' => 'Lista de totas las paginas especialas',
'tooltip-t-print' => "Version imprimibla d'aquesta pagina",
'tooltip-t-permalink' => 'Ligam permanent cap a aquesta version de la pagina',
'tooltip-ca-nstab-main' => 'Veire l’article',
'tooltip-ca-nstab-user' => "Veire la pagina d'utilizaire",
'tooltip-ca-nstab-media' => 'Veire la pagina del mèdia',
'tooltip-ca-nstab-special' => 'Aquò es una pagina especiala, la podètz pas modificar.',
'tooltip-ca-nstab-project' => 'Veire la pagina del projècte',
'tooltip-ca-nstab-image' => 'Veire la pagina del fichièr',
'tooltip-ca-nstab-mediawiki' => 'Vejatz lo messatge del sistèma',
'tooltip-ca-nstab-template' => 'Vejatz lo modèl',
'tooltip-ca-nstab-help' => 'Vejatz la pagina d’ajuda',
'tooltip-ca-nstab-category' => 'Vejatz la pagina de la categoria',
'tooltip-minoredit' => 'Marcar mas modificacions coma un cambiament menor',
'tooltip-save' => 'Salvar vòstras modificacions',
'tooltip-preview' => 'Mercé de previsualizar vòstras modificacions abans de salvar!',
'tooltip-diff' => "Permet de visualizar los cambiaments qu'avètz efectuats",
'tooltip-compareselectedversions' => "Afichar las diferéncias entre doas versions d'aquesta pagina",
'tooltip-watch' => 'Apondre aquesta pagina a vòstra lista de seguiment',
'tooltip-watchlistedit-normal-submit' => 'Levar los títols',
'tooltip-watchlistedit-raw-submit' => 'Mesa a jorn de la lista de seguiment',
'tooltip-recreate' => 'Tornar crear la pagina, quitament se es estada escafada',
'tooltip-upload' => 'Amodar lo mandadís',
'tooltip-rollback' => '"Revocar" anulla en un clic la o las edicion(s) sus aquesta pagina del darrièr contributor.',
'tooltip-undo' => '"Desfar" revòca aquesta edicion e dobrís la fenèstra d’edicion en mòde previsualizacion. Permet d’apondre una rason dins la bóstia de resumit.',
'tooltip-preferences-save' => 'Salvar las preferéncias',
'tooltip-summary' => 'Apondètz un brèu resumit',

# Stylesheets
'common.css' => '/** Lo CSS plaçat aicí serà aplicat a totas las aparéncias. */',
'cologneblue.css' => '/* Lo CSS plaçat aicí afectarà los utilizaires de l’abilhatge Cologne Blue */',
'monobook.css' => '/* Lo CSS plaçat aicí afectarà los utilizaires del skin Monobook */',
'modern.css' => '/* Lo CSS plaçat aicí afectarà los utilizaires de l’abilhatge Modern */',
'vector.css' => '/* Lo CSS plaçat aicí afectarà los utilizaires de l’abilhatge Vector */',
'print.css' => '/* Lo CSS plaçat aicí afectarà las impressions */',

# Scripts
'common.js' => '/* Tot JavaScript serà cargat amb cada pagina accedida per un utilizaire quin que siá. */',
'cologneblue.js' => '/* Tot JavaScript aicí serà cargat amb las paginas accedidas pels utilizaires de l’abilhatge Cologne Blue unicament. */',
'monobook.js' => '/* Tot JavaScript aicí serà cargat amb las paginas accedidas pels utilizaires de l’abilhatge MonoBook unicament. */',
'modern.js' => '/* Tot JavaScript aicí serà cargat amb las paginas accedidas pels utilizaires de l’abilhatge Modern unicament. */',
'vector.js' => '/* Tot JavaScript aicí serà cargat amb las paginas accedidas pels utilizaires de l’abilhatge Vector unicament. */',

# Metadata
'notacceptable' => 'Aqueste servidor wiki pòt pas fornir las donadas dins un format que vòstre client es capable de legir.',

# Attribution
'anonymous' => '{{PLURAL:$1|Utilizaire anonim|Utilizaires anonims}} de {{SITENAME}}',
'siteuser' => 'Utilizaire $1 de {{SITENAME}}',
'anonuser' => "l'utilizaire anonim $1 de {{SITENAME}}",
'lastmodifiedatby' => 'Aquesta pagina es estada modificada pel darrièr còp lo $1 a $2 per $3.',
'othercontribs' => 'Basat sul trabalh de $1.',
'others' => 'autres',
'siteusers' => '{{PLURAL:$2|utilizaire|utilizaires}} $1 de {{SITENAME}}',
'anonusers' => "{{PLURAL:$2|l'utilizaire anonim|los utilizaires anonims}} $1 de {{SITENAME}}",
'creditspage' => 'Pagina de crèdits',
'nocredits' => 'I a pas d’entresenhas d’atribucion disponiblas per aquesta pagina.',

# Spam protection
'spamprotectiontitle' => 'Pagina protegida automaticament per causa de spam',
'spamprotectiontext' => "La pagina qu'avètz ensajat de publicar es estada blocada pel filtre antispam.
Aquò es probablament causat per un ligam sus lista negra que punta cap a un site extèrne.",
'spamprotectionmatch' => "La cadena de caractèrs « '''$1''' » a desenclavat lo detector de spam.",
'spambot_username' => 'Netejatge de spam de MediaWiki',
'spam_reverting' => 'Restabliment de la darrièra version que conten pas de ligam cap a $1',
'spam_blanking' => 'Totas las versions que contenon de ligams cap a $1 son blanquidas',
'spam_deleting' => 'Totas las versions contenonián de ligams cap a $1, supression',
'simpleantispam-label' => "Verificacion antispam.
Inscriviscatz '''PAS RES''' dedins !",

# Info page
'pageinfo-title' => 'Informacions per « $1 »',
'pageinfo-header-basic' => 'Informacions de basa',
'pageinfo-header-edits' => 'Istoric de las modificacions',
'pageinfo-header-restrictions' => 'Proteccion de la pagina',
'pageinfo-header-properties' => 'Proprietats de la pagina',
'pageinfo-display-title' => 'Títol afichat',
'pageinfo-default-sort' => 'Clau de triada per defaut',
'pageinfo-length' => 'Talha de la pagina (en octets)',
'pageinfo-article-id' => 'Numèro de la pagina',
'pageinfo-language' => 'Lenga del contengut de la pagina',
'pageinfo-robot-policy' => 'Indexacion per robòts',
'pageinfo-robot-index' => 'Autorizada',
'pageinfo-robot-noindex' => 'Interdicha',
'pageinfo-views' => 'Nombre de vistas',
'pageinfo-watchers' => "Nombre de contributors qu'an la pagina dins lor lista de seguiment",
'pageinfo-few-watchers' => 'Mens de $1 {{PLURAL:$1|observator|observators}}',
'pageinfo-redirects-name' => 'Nombre de redireccions cap a aquesta pagina',
'pageinfo-subpages-name' => "Sospaginas d'aquesta pagina",
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|redireccion|redireccions}}; $3 {{PLURAL:$3|non-redireccion|non-redireccions}})',
'pageinfo-firstuser' => 'Creator de la pagina',
'pageinfo-firsttime' => 'Data de creacion de la pagina',
'pageinfo-lastuser' => 'Darrièr contributor',
'pageinfo-lasttime' => 'Data de la darrièra modificacion',
'pageinfo-edits' => 'Nombre total de modificacions',
'pageinfo-authors' => "Nombre total d'autors distinctes",
'pageinfo-recent-edits' => 'Nombre de modificacions recentas (dins los darrièrs $1)',
'pageinfo-recent-authors' => "Nombre d'autors distinctes recents",
'pageinfo-magic-words' => '{{PLURAL:$1|Mot magic|Mots magics}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Categoria amagada|Categorias amagadas}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Modèl inclús|Modèls incluses}} ($1)',
'pageinfo-transclusions' => '{{PLURAL:$1|Pagina tradusida|Paginas tradusidas}} sus ($1)',
'pageinfo-toolboxlink' => 'Informacion sus la pagina',
'pageinfo-redirectsto' => 'Redirigir cap a',
'pageinfo-redirectsto-info' => 'info',
'pageinfo-contentpage' => 'Comptat coma pagina de contengut',
'pageinfo-contentpage-yes' => 'Òc',
'pageinfo-protect-cascading' => "Las proteccions son dedusidas d'aicí",
'pageinfo-protect-cascading-yes' => 'Òc',
'pageinfo-protect-cascading-from' => 'Las proteccions son dedusidas dempuèi',
'pageinfo-category-info' => 'Informacions sus la categoria',
'pageinfo-category-pages' => 'Nombre de paginas',
'pageinfo-category-subcats' => 'Nombre de soscategorias',
'pageinfo-category-files' => 'Nombre de fichièrs',

# Skin names
'skinname-cologneblue' => 'Colonha Blau',
'skinname-monobook' => 'Monobook',
'skinname-modern' => 'Modèrne',

# Patrolling
'markaspatrolleddiff' => 'Marcar coma essent pas un vandalisme',
'markaspatrolledtext' => 'Marcar aqueste article coma pas vandalizat',
'markedaspatrolled' => 'Marcat coma pas vandalizat',
'markedaspatrolledtext' => 'La revision seleccionada de [[:$1]] es estada coma patrolhada.',
'rcpatroldisabled' => 'La foncion de patrolha dels darrièrs cambiaments es pas activada.',
'rcpatroldisabledtext' => 'La foncionalitat de susvelhança dels darrièrs cambiaments es pas activada.',
'markedaspatrollederror' => 'Pòt pas èsser marcat coma pas vandalizat',
'markedaspatrollederrortext' => 'Vos cal seleccionar una version per poder la marcar coma pas vandalizada.',
'markedaspatrollederror-noautopatrol' => 'Avètz pas lo drech de marcar vòstras pròprias modificacions coma susvelhadas.',
'markedaspatrollederrornotify' => 'Fracàs del marcatge coma contrarotlat.',

# Patrol log
'patrol-log-page' => 'Istoric de las versions patrolhadas',
'patrol-log-header' => 'Vaquí un jornal de las versions patrolhadas.',
'log-show-hide-patrol' => "$1 l'istoric de las versions patrolhadas",

# Image deletion
'deletedrevision' => 'La version anciana $1 es estada suprimida.',
'filedeleteerror-short' => 'Error al moment de la supression del fichièr : $1',
'filedeleteerror-long' => "D'errors son estadas rencontradas al moment de la supression del fichièr :

$1",
'filedelete-missing' => 'Lo fichièr « $1 » pòt pas èsser suprimit perque existís pas.',
'filedelete-old-unregistered' => 'La revision del fichièr especificat « $1 » es pas dins la banca de donadas.',
'filedelete-current-unregistered' => 'Lo fichièr especificat « $1 » es pas dins la banca de donadas.',
'filedelete-archive-read-only' => 'Lo dorsièr d’archivatge « $1 » es pas modificable pel servidor.',

# Browsing diffs
'previousdiff' => '← Cambiament precedent',
'nextdiff' => 'Cambiament seguent →',

# Media information
'mediawarning' => "'''Atencion :''' Aqueste fichièr pòt conténer de còde malvolent.
Se l'executatz, vòstre sistèma pòt èsser compromés.",
'imagemaxsize' => "Format maximal dels imatges :<br />''(per las paginas de descripcion d’imatges)''",
'thumbsize' => 'Talha de la miniatura :',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|pagina|paginas}}',
'file-info' => 'Talha del fichièr: $1, tipe MIME: $2',
'file-info-size' => '$1 × $2 pixèl, talha del fichièr: $3, tipe MIME: $4',
'file-info-size-pages' => '$1 × $2 pixèls, talha de fichièr: $3, tipe MIME: $4, $5 {{PLURAL:$5|pagina|paginas}}',
'file-nohires' => 'Pas de resolucion mai nauta disponibla.',
'svg-long-desc' => 'Fichièr SVG, resolucion de $1 × $2 pixèls, talha : $3',
'svg-long-desc-animated' => 'Fichièr SVG animat, talha $1 x $2 pixèls, talha del fichièr : $3',
'svg-long-error' => 'Fichièr SVG invalid : $1',
'show-big-image' => 'Imatge en resolucion mai nauta',
'show-big-image-preview' => "Talha d'aqueste apercebut : $1.",
'show-big-image-other' => '{{PLURAL:$2|Autra resolucion|Autras resolucions}} : $1.',
'show-big-image-size' => '$1 × $2 pixèls',
'file-info-gif-looped' => 'en bocla',
'file-info-gif-frames' => '$1 {{PLURAL:$1|imatge|imatges}}',
'file-info-png-looped' => 'en bocla',
'file-info-png-repeat' => 'jogat $1 {{PLURAL:$1|còp|còps}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|imatge|imatges}}',

# Special:NewFiles
'newimages' => 'Galariá dels fichièrs novèls',
'imagelisttext' => "Vaquí una lista de '''$1''' {{PLURAL:$1|fichièr|fichièrs}} classats $2.",
'newimages-summary' => 'Aquesta pagina especiala aficha los darrièrs fichièrs importats.',
'newimages-legend' => 'Filtre',
'newimages-label' => "Nom del fichièr (o una partida d'aqueste) :",
'showhidebots' => '($1 bòts)',
'noimages' => "Cap d'imatge d'afichar pas.",
'ilsubmit' => 'Cercar',
'bydate' => 'per data',
'sp-newimages-showfrom' => 'Afichar los imatges novèls importats dempuèi lo $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 segonda|$1 segondas}}',
'minutes' => '{{PLURAL:$1|$1 minuta|$1 minutas}}',
'hours' => '{{PLURAL:$1|$1 ora|$1 oras}}',
'days' => '{{PLURAL:$1|$1 jorn|$1 jorns}}',
'weeks' => '{{PLURAL:$1|$1 setmana|$1 setmanas}}',
'months' => '{{PLURAL:$1|$1 mes|$1 meses}}',
'years' => '{{PLURAL:$1|$1 an|$1 ans}}',
'ago' => 'I a $1',
'just-now' => 'sulpic',

# Human-readable timestamps
'hours-ago' => 'i a $1 {{PLURAL:$1|ora|oras}}',
'minutes-ago' => 'i a $1 {{PLURAL:$1|minuta|minutas}}',
'seconds-ago' => 'i a $1 {{PLURAL:$1|segonda|segondas}}',
'monday-at' => 'Diluns a $1',
'tuesday-at' => 'Dimars a $1',
'wednesday-at' => 'Dimècres a $1',
'thursday-at' => 'Dijòus a $1',
'friday-at' => 'Divendres a $1',
'saturday-at' => 'Dissabte a $1',
'sunday-at' => 'Dimenge a $1',
'yesterday-at' => 'Ièr a $1',

# Bad image list
'bad_image_list' => "Lo format es lo seguent :

Solas las listas d'enumeracion (las linhas començant per *) son presas en compte. Lo primièr ligam d'una linha deu èsser cap a un imatge marrit.
Los autres ligams sus la meteissa linha son considerats coma d'excepcions, per exemple d'articles sulsquals l'imatge deu aparéisser.",

# Variants for Kazakh language
'variantname-kk-arab' => 'kk-arabi',

# Variants for Kurdish language
'variantname-ku-arab' => 'ku-Arabi',

# Metadata
'metadata' => 'Metadonadas',
'metadata-help' => "Aqueste fichièr conten d'entresenhas suplementàrias probablament apondudas per l’aparelh de fòto numeric o l'escanèr que las a aquesas. Se lo fichièr es estat modificat dempuèi son estat original, d'unes detalhs pòdon reflectir pas entièrament l’imatge modificat.",
'metadata-expand' => 'Far veire las entresenhas detalhadas',
'metadata-collapse' => 'Amagar las entresenhas detalhadas',
'metadata-fields' => 'Los camps de metadonadas d’EXIF listats dins aqueste message seràn incluses dins la pagina de descripcion de l’imatge quand la taula de metadonadas serà reducha. Los autres camps seràn amagats per manca.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'Largor',
'exif-imagelength' => 'Nautor',
'exif-bitspersample' => 'Bits per compausanta',
'exif-compression' => 'Tipe de compression',
'exif-photometricinterpretation' => 'Composicion dels pixèls (Modèl colorimetric)',
'exif-orientation' => 'Orientacion',
'exif-samplesperpixel' => 'Nombre de compausants (Compausantas per pixèl)',
'exif-planarconfiguration' => 'Arrengament de las donadas',
'exif-ycbcrsubsampling' => 'Taus d’escandalhatge de las compausantas de la crominança',
'exif-ycbcrpositioning' => 'Posicionament YCbCr',
'exif-xresolution' => 'Resolucion orizontala',
'exif-yresolution' => 'Resolucion verticala',
'exif-stripoffsets' => 'Emplaçament de las donadas de l’imatge',
'exif-rowsperstrip' => 'Nombre de linhas per benda',
'exif-stripbytecounts' => 'Talha en octets per benda',
'exif-jpeginterchangeformat' => 'Posicion del SOI JPEG',
'exif-jpeginterchangeformatlength' => 'Talha en octet de las donadas JPEG',
'exif-whitepoint' => 'Cromaticitat del punt blanc',
'exif-primarychromaticities' => 'Cromaticitats de las colors primàrias',
'exif-ycbcrcoefficients' => 'Coeficients de la matritz de transformacion de l’espaci colorimetric (YCbCr)',
'exif-referenceblackwhite' => 'Valors de referéncia blanc e negre',
'exif-datetime' => 'Data e ora de cambiament del fichièr',
'exif-imagedescription' => 'Títol de l’imatge',
'exif-make' => 'Fabricant de l’aparelh',
'exif-model' => 'Modèl de l’aparelh',
'exif-software' => 'Logicial utilizat',
'exif-artist' => 'Autor',
'exif-copyright' => 'Detentor del copyright',
'exif-exifversion' => 'Version exif',
'exif-flashpixversion' => 'Version Flashpix suportada',
'exif-colorspace' => 'Espaci colorimetric',
'exif-componentsconfiguration' => 'Significacion de cada compausanta',
'exif-compressedbitsperpixel' => 'Mòde de compression de l’imatge',
'exif-pixelydimension' => 'Largor de l’imatge',
'exif-pixelxdimension' => 'Nautor de l’imatge',
'exif-usercomment' => "Comentaris de l'utilizaire",
'exif-relatedsoundfile' => 'Fichièr àudio associat',
'exif-datetimeoriginal' => 'Data e ora de la generacion de donadas',
'exif-datetimedigitized' => 'Data e ora de numerizacion',
'exif-subsectime' => 'Data de darrièr cambiament',
'exif-subsectimeoriginal' => 'Data de la presa originala',
'exif-subsectimedigitized' => 'Data de la numerizacion',
'exif-exposuretime' => "Temps d'exposicion",
'exif-exposuretime-format' => '$1 seg ($2)',
'exif-fnumber' => 'Nombre f (Focala)',
'exif-exposureprogram' => 'Programa d’exposicion',
'exif-spectralsensitivity' => 'Sensibilitat espectrala',
'exif-isospeedratings' => 'Sensibilitat ISO',
'exif-shutterspeedvalue' => "velocitat d’obturacion de l'APEX",
'exif-aperturevalue' => "Dobertura de l'APEX",
'exif-brightnessvalue' => 'Luminança APEX',
'exif-exposurebiasvalue' => 'Correccion d’exposicion',
'exif-maxaperturevalue' => 'Camp de dobertura maximal',
'exif-subjectdistance' => 'Distància del subjècte',
'exif-meteringmode' => 'Mòde de mesura',
'exif-lightsource' => 'Font de lutz',
'exif-flash' => 'Flash',
'exif-focallength' => 'Longor de focala',
'exif-subjectarea' => 'Emplaçament del subjècte',
'exif-flashenergy' => 'Energia del flash',
'exif-focalplanexresolution' => 'Resolucion orizontala focala plana',
'exif-focalplaneyresolution' => 'Resolucion verticala focala plana',
'exif-focalplaneresolutionunit' => 'Unitat de resolucion de focala plana',
'exif-subjectlocation' => 'Posicion del subjècte',
'exif-exposureindex' => 'Indèx d’exposicion',
'exif-sensingmethod' => 'Tipe de captador',
'exif-filesource' => 'Font del fichièr',
'exif-scenetype' => 'Tipe de scèna',
'exif-customrendered' => 'Tractament d’imatge personalizat',
'exif-exposuremode' => 'Mòde d’exposicion',
'exif-whitebalance' => 'Balança dels blancs',
'exif-digitalzoomratio' => 'Taus d’agrandiment numeric (zoom)',
'exif-focallengthin35mmfilm' => 'Longor de focala per un filme 35 mm',
'exif-scenecapturetype' => 'Tipe de captura de la scèna',
'exif-gaincontrol' => 'Contraròtle de luminositat',
'exif-contrast' => 'Contraste',
'exif-saturation' => 'Saturacion',
'exif-sharpness' => 'Netetat',
'exif-devicesettingdescription' => 'Descripcion de la configuracion del dispositiu',
'exif-subjectdistancerange' => 'Distància del subjècte',
'exif-imageuniqueid' => 'Identificant unic de l’imatge',
'exif-gpsversionid' => 'Version de la balisa (tag) GPS',
'exif-gpslatituderef' => 'Referéncia per la Latitud (Nòrd o Sud)',
'exif-gpslatitude' => 'Latitud',
'exif-gpslongituderef' => 'Referéncia per la longitud (Èst o Oèst)',
'exif-gpslongitude' => 'Longitud',
'exif-gpsaltituderef' => 'Referéncia d’altitud',
'exif-gpsaltitude' => 'Altitud',
'exif-gpstimestamp' => 'Ora GPS (relòtge atomic)',
'exif-gpssatellites' => 'Satellits utilizats per la mesura',
'exif-gpsstatus' => 'Estat del receptor',
'exif-gpsmeasuremode' => 'Mòde de mesura',
'exif-gpsdop' => 'Precision de la mesura',
'exif-gpsspeedref' => 'Unitat de velocitat del receptor GPS',
'exif-gpsspeed' => 'Velocitat del receptor GPS',
'exif-gpstrackref' => 'Referéncia per la direccion del movement',
'exif-gpstrack' => 'Direccion del movement',
'exif-gpsimgdirectionref' => 'Referéncia per l’orientacion de l’imatge',
'exif-gpsimgdirection' => 'Direccion de l’imatge',
'exif-gpsmapdatum' => 'Sistèma geodesic utilizat',
'exif-gpsdestlatituderef' => 'Referéncia per la latitud de la destinacion',
'exif-gpsdestlatitude' => 'Latitud de la destinacion',
'exif-gpsdestlongituderef' => 'Referéncia per la longitud de la destinacion',
'exif-gpsdestlongitude' => 'Longitud de la destinacion',
'exif-gpsdestbearingref' => 'Referéncia pel relevament de la destinacion',
'exif-gpsdestbearing' => 'Relevament de la destinacion',
'exif-gpsdestdistanceref' => 'Referéncia per la distància de la destinacion',
'exif-gpsdestdistance' => 'Distància a la destinacion',
'exif-gpsprocessingmethod' => 'Nom del metòde de tractament del GPS',
'exif-gpsareainformation' => 'Nom de la zòna GPS',
'exif-gpsdatestamp' => 'Data GPS',
'exif-gpsdifferential' => 'Correccion diferenciala GPS',
'exif-jpegfilecomment' => 'Comentari de fichièr JPEG',
'exif-keywords' => 'Mots claus',
'exif-worldregioncreated' => 'Region del mond dins la quala la fòto es estada presa',
'exif-countrycreated' => 'País dins lo qual la fòto es estada presa',
'exif-countrycodecreated' => 'Còde del país dins lo qual la fòto es estada presa',
'exif-provinceorstatecreated' => 'Província o Estat dins lo qual la fòto es estada presa',
'exif-citycreated' => 'Vila dins la quala la fòto es estada presa',
'exif-sublocationcreated' => 'Partida de la vila dins la quala la fòto es estada presa',
'exif-worldregiondest' => 'Region del mond representada',
'exif-countrydest' => 'País representat',
'exif-countrycodedest' => 'Còde del país representat',
'exif-provinceorstatedest' => 'Província o Estat representat',
'exif-citydest' => 'Vila representada',
'exif-sublocationdest' => 'Partida de la vila representada',
'exif-objectname' => 'Títol cort',
'exif-specialinstructions' => 'Instruccions especialas',
'exif-headline' => 'Títol',
'exif-credit' => 'Credit / provesidor',
'exif-source' => 'Font',
'exif-editstatus' => "Estatut editorial de l'imatge",
'exif-urgency' => 'Urgéncia',
'exif-fixtureidentifier' => 'Nom element recurrent',
'exif-locationdest' => 'Luòc representat',
'exif-locationdestcode' => 'Còde del luòc representat',
'exif-objectcycle' => 'Moment de la jornada al qual aqueste mèdia es destinat',
'exif-contact' => 'Informacions de contacte',
'exif-writer' => 'Autor',
'exif-languagecode' => 'Lenga',
'exif-iimversion' => 'version IIM',
'exif-iimcategory' => 'Categoria',
'exif-iimsupplementalcategory' => 'Categorias suplementàrias',
'exif-datetimeexpires' => 'Utilizar pas aprèp',
'exif-datetimereleased' => 'Paregut lo',
'exif-originaltransmissionref' => 'Còde de localizacion de la transmission originala',
'exif-identifier' => 'Identificant',
'exif-lens' => 'Lentilha utilizada',
'exif-serialnumber' => "Numèro de seria de l'aparelh de fòto",
'exif-cameraownername' => "Proprietari de l'aparelh de fòto",
'exif-label' => 'Libellat',
'exif-datetimemetadata' => 'Data de la darrièra modificacion de las metadonadas',
'exif-nickname' => "Nom informal de l'imatge",
'exif-rating' => 'Nòta (sus 5)',
'exif-rightscertificate' => 'Certificat de gestion dels dreches',
'exif-copyrighted' => "Estatut del drech d'autor",
'exif-copyrightowner' => "Detentor del drech d'autor",
'exif-usageterms' => "Condicions d'utilizacion",
'exif-webstatement' => "Declaracion de dreches d'autor en linha",
'exif-originaldocumentid' => 'Identificant unic del document original',
'exif-licenseurl' => 'URL de la licéncia',
'exif-morepermissionsurl' => 'Informacions sus las licéncias alternativas',
'exif-attributionurl' => "Al moment de la reütilizacion d'aqueste trabalh, ligatz a",
'exif-preferredattributionname' => "Al moment de la reütilizacion d'aqueste trabalh, creditatz",
'exif-pngfilecomment' => 'Comentari de fichièr JPEG',
'exif-disclaimer' => 'Desistiment',
'exif-contentwarning' => 'Avertiment sul contengut',
'exif-giffilecomment' => 'Comentari de fichièr GIF',
'exif-intellectualgenre' => "Tipe d'element",
'exif-subjectnewscode' => 'Còde del subjècte',
'exif-scenecode' => 'Còde de scèna IPTC',
'exif-event' => 'Eveniment representat',
'exif-organisationinimage' => 'Organizacion representada',
'exif-personinimage' => 'Persona representada',
'exif-originalimageheight' => "Nautor de l'imatge abans d'èsser requadrada",
'exif-originalimagewidth' => "Largor de l'imatge abans d'èsser requadrada",

# Exif attributes
'exif-compression-1' => 'Sens compression',
'exif-compression-2' => "CCITT Grop 3 Longor de l'encodatge Huffman modificat de dimension 1",
'exif-compression-3' => 'CCITT Grop 3 encodatge del fax',
'exif-compression-4' => 'CCITT Grop 4 encodatge del fax',

'exif-copyrighted-true' => "Somés al drech d'autor",
'exif-copyrighted-false' => 'Estat dels dreches d’autor pas definit',

'exif-unknowndate' => 'Data desconeguda',

'exif-orientation-1' => 'Normala',
'exif-orientation-2' => 'Inversada orizontalament',
'exif-orientation-3' => 'Virada de 180°',
'exif-orientation-4' => 'Inversada verticalament',
'exif-orientation-5' => 'Virada de 90° dins lo sens antiorari e inversada verticalament',
'exif-orientation-6' => 'Virada de 90° dins lo sens antiorari',
'exif-orientation-7' => 'Virada de 90° dins lo sens orari e inversada verticalament',
'exif-orientation-8' => 'Virada de 90° dins lo sens orari',

'exif-planarconfiguration-1' => 'Donadas atenentas',
'exif-planarconfiguration-2' => 'Donadas separadas',

'exif-colorspace-65535' => 'Pas calibrat',

'exif-componentsconfiguration-0' => 'existís pas',
'exif-componentsconfiguration-5' => 'V',

'exif-exposureprogram-0' => 'Indefinit',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programa normal',
'exif-exposureprogram-3' => 'Prioritat a la dobertura',
'exif-exposureprogram-4' => 'Prioritat a l’obturacion',
'exif-exposureprogram-5' => 'Programa de creacion (preferéncia a la prigondor de camp)',
'exif-exposureprogram-6' => "Programa d'accion (preferéncia a la velocitat d’obturacion)",
'exif-exposureprogram-7' => 'Mòde retrach (per clichats de prèp amb rèire plan fosc)',
'exif-exposureprogram-8' => 'Mòde païsatge (per de clichats de païsatges nets)',

'exif-subjectdistance-value' => '{{PLURAL:$1|$1 mètre|$1 mètres}}',

'exif-meteringmode-0' => 'Desconegut',
'exif-meteringmode-1' => 'Mejana',
'exif-meteringmode-2' => 'Mesura centrala mejana',
'exif-meteringmode-3' => 'Espòt',
'exif-meteringmode-4' => 'MultiEspòt',
'exif-meteringmode-5' => 'Paleta',
'exif-meteringmode-6' => 'Parcial',
'exif-meteringmode-255' => 'Autra',

'exif-lightsource-0' => 'Desconeguda',
'exif-lightsource-1' => 'Lutz del jorn',
'exif-lightsource-2' => 'Fluorescent',
'exif-lightsource-3' => 'Tungstèn (lum incandescent)',
'exif-lightsource-4' => 'Flash',
'exif-lightsource-9' => 'Temps clar',
'exif-lightsource-10' => 'Temps ennivolat',
'exif-lightsource-11' => 'Ombra',
'exif-lightsource-12' => 'Esclairatge fluorescent lutz del jorn (D 5700 – 7100K)',
'exif-lightsource-13' => 'Esclairatge fluorescent blanc (N 4600 – 5400K)',
'exif-lightsource-14' => 'Esclairatge fluorescent blanc freg (W 3900 – 4500K)',
'exif-lightsource-15' => 'Esclairatge fluorescent blanc (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Lum estandard A',
'exif-lightsource-18' => 'Lum estandard B',
'exif-lightsource-19' => 'Lum estandard C',
'exif-lightsource-24' => "Tungstèni ISO d'estudiò",
'exif-lightsource-255' => 'Autra font de lum',

# Flash modes
'exif-flash-fired-0' => 'Flash pas desenclavat',
'exif-flash-fired-1' => 'Flash desenclavat',
'exif-flash-return-0' => "cap d'estroboscòpi retorna pas una foncion de deteccion",
'exif-flash-return-2' => "l'estroboscòpi retorna un lum pas detectat",
'exif-flash-return-3' => "l'estroboscòpi retorna un lum detectat",
'exif-flash-mode-1' => 'lum del flash obligatòri',
'exif-flash-mode-2' => 'supression del flash obligatòri',
'exif-flash-mode-3' => 'Mòde automatic',
'exif-flash-function-1' => 'Pas de foncion de flash',
'exif-flash-redeye-1' => 'Mòde anti uèlhs roges',

'exif-focalplaneresolutionunit-2' => 'poce',

'exif-sensingmethod-1' => 'Pas definit',
'exif-sensingmethod-2' => 'Captador de zòna de colors monocromaticas',
'exif-sensingmethod-3' => 'Captador de zòna de colors bicromaticas',
'exif-sensingmethod-4' => 'Captador de zòna de colors tricromaticas',
'exif-sensingmethod-5' => 'Captador de color sequencial',
'exif-sensingmethod-7' => 'Captador trilinear',
'exif-sensingmethod-8' => 'Captador de color linear sequencial',

'exif-filesource-3' => 'Aparelh de fòto numeric',

'exif-scenetype-1' => 'Imatge dirèctament fotografiat',

'exif-customrendered-0' => 'Procediment normal',
'exif-customrendered-1' => 'Procediment personalizat',

'exif-exposuremode-0' => 'Exposicion automatica',
'exif-exposuremode-1' => 'Exposicion manuala',
'exif-exposuremode-2' => 'Forqueta (Bracketting) automatica',

'exif-whitebalance-0' => 'Balança dels blancs automatica',
'exif-whitebalance-1' => 'Balança dels blancs manuala',

'exif-scenecapturetype-0' => 'Estandard',
'exif-scenecapturetype-1' => 'Païsatge',
'exif-scenecapturetype-2' => 'Retrach',
'exif-scenecapturetype-3' => 'Scèna nuechenca',

'exif-gaincontrol-0' => 'Cap',
'exif-gaincontrol-1' => 'Augmentacion febla de l’aquisicion',
'exif-gaincontrol-2' => 'Augmentacion fòrta de l’aquisicion',
'exif-gaincontrol-3' => 'Reduccion febla de l’aquisicion',
'exif-gaincontrol-4' => 'Reduccion fòrta de l’aquisicion',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Feble',
'exif-contrast-2' => 'Fòrt',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Saturacion febla',
'exif-saturation-2' => 'Saturacion elevada',

'exif-sharpness-0' => 'Normala',
'exif-sharpness-1' => 'Doça',
'exif-sharpness-2' => 'Dura',

'exif-subjectdistancerange-0' => 'Desconegut',
'exif-subjectdistancerange-1' => 'Macrò',
'exif-subjectdistancerange-2' => 'Sarrat',
'exif-subjectdistancerange-3' => 'Luenhenc',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitud Nòrd',
'exif-gpslatitude-s' => 'Latitud Sud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitud Èst',
'exif-gpslongitude-w' => 'Longitud Oèst',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|mètre|mètres}} en dessús del nivèl de la mar',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|mètre|mètres}} en dejós del nivèl de la mar',

'exif-gpsstatus-a' => 'Mesura en cors',
'exif-gpsstatus-v' => 'Interoperabilitat de la mesura',

'exif-gpsmeasuremode-2' => 'Mesura de 2 dimensions',
'exif-gpsmeasuremode-3' => 'Mesura de 3 dimensions',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Quilomètres per ora',
'exif-gpsspeed-m' => 'Miles per ora',
'exif-gpsspeed-n' => 'Noses',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Quilomètres',
'exif-gpsdestdistance-m' => 'Milas anglesas',
'exif-gpsdestdistance-n' => 'Milas nauticas',

'exif-gpsdop-excellent' => 'Excellenta ($1)',
'exif-gpsdop-good' => 'Bona ($1)',
'exif-gpsdop-moderate' => 'Mejana ($1)',
'exif-gpsdop-fair' => 'Passable ($1)',
'exif-gpsdop-poor' => 'Marrida ($1)',

'exif-objectcycle-a' => 'Matin solament',
'exif-objectcycle-p' => 'Serada solament',
'exif-objectcycle-b' => 'Matin e ser',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Direccion vertadièra',
'exif-gpsdirection-m' => 'Nòrd magnetic',

'exif-ycbcrpositioning-1' => 'Centrat',
'exif-ycbcrpositioning-2' => 'Cosituat',

'exif-dc-contributor' => 'Contributors',
'exif-dc-coverage' => 'Portada espaciala o temporala del mèdia',
'exif-dc-date' => 'Data(s)',
'exif-dc-publisher' => 'Editor',
'exif-dc-relation' => 'Mèdias connèxes',
'exif-dc-rights' => 'dreches',
'exif-dc-source' => 'Mèdia font',
'exif-dc-type' => 'Tipe de mèdia',

'exif-rating-rejected' => 'Regetat',

'exif-isospeedratings-overflow' => 'Mai grand que 65535',

'exif-iimcategory-ace' => 'Arts, cultura e lésers',
'exif-iimcategory-clj' => 'Crime e drech',
'exif-iimcategory-dis' => 'Catastròfas e accidents',
'exif-iimcategory-fin' => 'Economia e afars',
'exif-iimcategory-edu' => 'Educacion',
'exif-iimcategory-evn' => 'Environament',
'exif-iimcategory-hth' => 'Santat',
'exif-iimcategory-hum' => 'Interès uman',
'exif-iimcategory-lab' => 'Tribailh',
'exif-iimcategory-lif' => 'Mòde de vida e de lésers',
'exif-iimcategory-pol' => 'Politic',
'exif-iimcategory-rel' => 'Religion e cresenças',
'exif-iimcategory-sci' => 'Sciéncia e tecnologia',
'exif-iimcategory-soi' => 'Questions socialas',
'exif-iimcategory-spo' => 'Espòrts',
'exif-iimcategory-war' => 'Guèrra, conflictes',
'exif-iimcategory-wea' => 'Metèo',

'exif-urgency-normal' => 'Normala ($1)',
'exif-urgency-low' => 'Febla ($1)',
'exif-urgency-high' => 'Nauta ($1)',
'exif-urgency-other' => "Urgéncia definida per l'utilizaire ($1)",

# External editor support
'edit-externally' => 'Modificar aqueste fichièr en utilizant una aplicacion extèrna',
'edit-externally-help' => "(Consultatz [//www.mediawiki.org/wiki/Manual:External_editors/oc las instruccions d'installacion] per mai d’entresenhas)",

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'tot',
'namespacesall' => 'Totes',
'monthsall' => 'totes',
'limitall' => 'totes',

# Email address confirmation
'confirmemail' => "Confirmar l'adreça de corrièr electronic",
'confirmemail_noemail' => 'L’adreça de corrièr electronic configurada dins vòstras [[Special:Preferences|preferéncias]] es pas valida.',
'confirmemail_text' => '{{SITENAME}} necessita la verificacion de vòstra adreça de corrièr electronic abans de poder utilizar tota foncion de messatjariá. Utilizatz lo boton çaijós per mandar un corrièr electronic de confirmacion a vòstra adreça. Lo corrièr contendrà un ligam contenent un còde, cargatz aqueste ligam dins vòstre navigador per validar vòstra adreça.',
'confirmemail_pending' => 'Un còde de confirmacion ja vos es estat mandat per corrièr electronic ; se venètz de crear vòstre compte, esperatz qualques minutas que l’e-mail arribe abans de demandar un còde novèl.',
'confirmemail_send' => 'Mandar un còde de confirmacion',
'confirmemail_sent' => 'Corrièr electronic de confirmacion mandat.',
'confirmemail_oncreate' => "Un còde de confirmacion es estat mandat a vòstra adreça de corrièr electronic.
Aqueste còde es pas requerit per se connectar, mas n'aurètz besonh per activar las foncionalitats ligadas als corrièrs electronics sus aqueste wiki.",
'confirmemail_sendfailed' => '{{SITENAME}} pòt pas mandar lo corrièr de confirmacion.
Verificatz se vòstra adreça conten pas de caractèrs interdiches.

Retorn del programa de corrièr : $1',
'confirmemail_invalid' => 'Còde de confirmacion incorrècte. Benlèu lo còde a expirat.',
'confirmemail_needlogin' => 'Vos cal vos $1 per confirmar vòstra adreça de corrièr electronic.',
'confirmemail_success' => 'Vòstra adreça de corrièr electronic es confirmada. Ara, vos podètz connectar e aprofechar del wiki.',
'confirmemail_loggedin' => 'Ara, vòstra adreça es confirmada',
'confirmemail_error' => "Un problèma s'es produch en volent enregistrar vòstra confirmacion.",
'confirmemail_subject' => 'Confirmacion d’adreça de corrièr electronic per {{SITENAME}}',
'confirmemail_body' => "Qualqu’un, probablament vos,e amb l’adreça IP $1, a enregistrat un compte « $2 » amb aquesta adreça de corrièr electronic sul site {{SITENAME}}.

Per confirmar qu'aqueste compte vos aparten vertadièrament e activar las foncions de messatjariá sus {{SITENAME}}, seguissètz lo ligam çaijós dins vòstre navigador :

$3

Se s’agís pas de vos, dobriscatz pas lo ligam.
Aqueste còde de confirmacion expirarà lo $4, seguissètz l’autre ligam çaijós dins vòstre navigador :

$5

Aqueste còde de confirmacion expirarà lo $4.",
'confirmemail_body_changed' => "Qualqu’un, probablament vos, a partir de l’adreça IP $1,
a modificat l’adreça de corrièr associada al compte « $2 » de {{SITENAME}}
en aquesta adreça.

Per confirmar qu'aqueste compte vos aparten vertadièrament e per tal
de reactivar las foncions de messatjariá sus {{SITENAME}},
seguissètz aqueste ligam dins vòstre navigador :

$3

S'aqueste compte vos aparten *pas*, dobriscatz pas aqueste ligam ;
podètz seguir l’autre ligam çaijós per anullar la
confirmacion de vòstra adreça de corrièl :

$5

Aqueste còde de confirmacion expirarà lo $4.",
'confirmemail_body_set' => "Qualqu’un, probablament vos, dempuèi l’adreça IP $1, a modificat l'adreça de corrièr electronic del compte « $2 » amb aquesta sul site {{SITENAME}}.

Per confirmar qu'aqueste compte vos aparten vertadièrament e reactivar las foncions de messatjariá sus {{SITENAME}}, seguissètz lo ligam çaijós dins vòstre navigador :

$3

Aqueste còde de confirmacion expirarà lo $4.

Se s’agís *pas* de vòstre compte, seguissètz aqueste ligam per anullar la confirmacion de l'adreça de corrièr electronic :

$5",
'confirmemail_invalidated' => 'Confirmacion de l’adreça de corrièr electronic anullada',
'invalidateemail' => 'Anullar la confirmacion del corrièr electronic',

# Scary transclusion
'scarytranscludedisabled' => '[La transclusion interwiki es desactivada]',
'scarytranscludefailed' => '[La recuperacion de modèl a pas capitat per $1]',
'scarytranscludefailed-httpstatus' => '[Fracàs de la recuperacion del modèl per  $1 : HTTP  $2 ]',
'scarytranscludetoolong' => '[L’URL es tròp longa]',

# Delete conflict
'deletedwhileediting' => "'''Atencion''' : aquesta pagina es estada suprimida aprèp qu'avètz començat de la modificar !",
'confirmrecreate' => "L'utilizaire [[User:$1|$1]] ([[User talk:$1|talk]]) a suprimit aquesta pagina, alara que l'aviatz començat d'editar, pel motiu seguent:
: ''$2''
Confirmatz que desiratz tornar crear aqueste article.",
'recreate' => 'Tornar crear',

# action=purge
'confirm_purge_button' => 'Confirmar',
'confirm-purge-top' => "Volètz refrescar aquesta pagina (purgar l'amagatal) ?",
'confirm-purge-bottom' => "Purgar una pagina vioda l'amagatal e fòrça la darrièra version a èsser afichada.",

# action=watch/unwatch
'confirm-watch-button' => 'Confirmar',
'confirm-watch-top' => 'Apondre aquesta pagina a vòstra lista de seguiment?',
'confirm-unwatch-button' => 'Confirmar',
'confirm-unwatch-top' => 'Levar aquesta pagina de vòstra lista de seguiment?',

# Separators for various lists, etc.
'colon-separator' => '&nbsp;:&#32;',

# Multipage image navigation
'imgmultipageprev' => '← pagina precedenta',
'imgmultipagenext' => 'pagina seguenta →',
'imgmultigo' => 'Accedir !',
'imgmultigoto' => 'Anar a la pagina $1',

# Table pager
'ascending_abbrev' => 'creissent',
'descending_abbrev' => 'descreissent',
'table_pager_next' => 'Pagina seguenta',
'table_pager_prev' => 'Pagina precedenta',
'table_pager_first' => 'Primièra pagina',
'table_pager_last' => 'Darrièra pagina',
'table_pager_limit' => 'Far veire $1 elements per pagina',
'table_pager_limit_label' => 'Elements per pagina:',
'table_pager_limit_submit' => 'Accedir',
'table_pager_empty' => 'Cap de resultat',

# Auto-summaries
'autosumm-blank' => 'Blanquiment de la pagina',
'autosumm-replace' => 'Resumit automatic : contengut remplaçat per « $1 ».',
'autoredircomment' => 'Redireccion cap a [[$1]]',
'autosumm-new' => 'Creacion de la pagina amb « $1 »',

# Size units
'size-bytes' => '$1 o',
'size-kilobytes' => '$1 Ko',
'size-megabytes' => '$1 Mo',
'size-gigabytes' => '$1 Go',

# Live preview
'livepreview-loading' => 'Cargament…',
'livepreview-ready' => 'Cargament… Acabat!',
'livepreview-failed' => 'L’apercebut rapid a pas capitat!
Ensajatz la previsualizacion normala.',
'livepreview-error' => 'Impossible de se connectar : $1 "$2"
Ensajatz la previsualizacion normala.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Los cambiaments que datan de mens de $1 {{PLURAL:$1|segonda|segondas}} pòdon aparéisser pas dins aquesta lista.',
'lag-warn-high' => 'En rason d’una fòrta carga de las bancas de donadas, los cambiaments que datan de mens de $1 {{PLURAL:$1|segonda|segondas}} pòdon aparéisser pas dins aquesta lista.',

# Watchlist editor
'watchlistedit-numitems' => 'Vòstra lista de seguiment conten {{PLURAL:$1|una pagina|$1 paginas}}, sens comptar las paginas de discussion',
'watchlistedit-noitems' => 'Vòstra lista de seguiment conten pas cap de pagina.',
'watchlistedit-normal-title' => 'Modificacion de la lista de seguiment',
'watchlistedit-normal-legend' => 'Levar de paginas de la lista de seguiment',
'watchlistedit-normal-explain' => 'Las paginas que seguissètz son visiblas çaijós, classadas per espaci de noms. Per levar una pagina (e sa pagina de discussion) de la lista, seleccionatz la casa al costat puèi clicatz sul boton en bas. Tanben la podètz [[Special:EditWatchlist/raw|modificar en mòde brut]].',
'watchlistedit-normal-submit' => 'Levar las paginas seleccionadas',
'watchlistedit-normal-done' => '{{PLURAL:$1|Una pagina es estada levada|$1 paginas son estadas levadas}} de vòstra lista de seguiment :',
'watchlistedit-raw-title' => 'Modificacion de la lista de seguiment (mòde brut)',
'watchlistedit-raw-legend' => 'Modificacion de la lista de seguiment en mòde brut',
'watchlistedit-raw-explain' => '!!FLa lista de las paginas que seguissètz es afichada çaijós, sens las paginas de discussion (enclusas automaticament) e triadas per espaci de noms. Podètz modificar la lista, apondètz las paginas que volètz seguir (pauc impòrta ont), una pagina per linha, e levatz las paginas que volètz pas mai seguir. Tanlèu acabat, clicatz sul boton en bas per metre la lista a jorn. Tanben podètz utilizar [[Special:EditWatchlist|l’editor normal]].',
'watchlistedit-raw-titles' => 'Títols :',
'watchlistedit-raw-submit' => 'Metre la lista a jorn',
'watchlistedit-raw-done' => 'Vòstra lista de seguiment es estada mesa a jorn.',
'watchlistedit-raw-added' => '{{PLURAL:$1|Una pagina es estada aponduda|$1 paginas son estadas apondudas}} :',
'watchlistedit-raw-removed' => '{{PLURAL:$1|Una pagina es estada levada|$1 paginas son estadas levadas}} :',

# Watchlist editing tools
'watchlisttools-view' => 'Lista de seguiment',
'watchlisttools-edit' => 'Veire e modificar la lista de seguiment',
'watchlisttools-raw' => 'Modificar la lista (mòde brut)',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|discussion]])',

# Core parser functions
'unknown_extension_tag' => "Balisa d'extension « $1 » desconeguda",
'duplicate-defaultsort' => 'Atencion : La clau de triada per defaut « $2 » espotís la mai recenta « $1 ».',

# Special:Version
'version' => 'Version',
'version-extensions' => 'Extensions installadas',
'version-specialpages' => 'Paginas especialas',
'version-parserhooks' => 'Extensions del parser',
'version-variables' => 'Variablas',
'version-antispam' => 'Prevencion del spam',
'version-skins' => 'Abilhatges',
'version-other' => 'Divèrs',
'version-mediahandlers' => 'Supòrts mèdia',
'version-hooks' => 'Croquets',
'version-parser-extensiontags' => 'Balisas suplementàrias del parser',
'version-parser-function-hooks' => 'Croquets de las foncions del parser',
'version-hook-name' => 'Nom del croquet',
'version-hook-subscribedby' => 'Definit per',
'version-version' => '(Version $1)',
'version-license' => 'Licéncia',
'version-poweredby-credits' => "Aqueste wiki fonciona gràcias a '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'autres',
'version-poweredby-translators' => 'traductors de translatewiki.net',
'version-software' => 'Logicial installat',
'version-software-product' => 'Produch',
'version-software-version' => 'Version',
'version-entrypoints' => "URL dels punts d'entrada",
'version-entrypoints-header-entrypoint' => "Punt d'entrada",
'version-entrypoints-header-url' => 'URL',

# Special:Redirect
'redirect' => 'Redirigit per fichièr, utilizaire, o ID de revision',
'redirect-legend' => 'Redirigir cap a una pagina o un fichièr',
'redirect-submit' => 'Validar',
'redirect-lookup' => 'Recèrca :',
'redirect-value' => 'Valor :',
'redirect-user' => "ID de l'utilizaire",
'redirect-revision' => 'Revision de la pagina',
'redirect-file' => 'Nom del fichièr',
'redirect-not-exists' => 'Valor pas trobada',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Recèrca dels fichièrs en doble',
'fileduplicatesearch-summary' => 'Recèrca per de fichièrs en doble sus la banca de valors fragmentàrias.',
'fileduplicatesearch-legend' => 'Recèrca d’un doble',
'fileduplicatesearch-filename' => 'Nom del fichièr :',
'fileduplicatesearch-submit' => 'Recercar',
'fileduplicatesearch-info' => '$1 × $2 pixèls<br />Talha del fichièr : $3<br />MIME type : $4',
'fileduplicatesearch-result-1' => 'Lo fichièr « $1 » a pas de doble identic.',
'fileduplicatesearch-result-n' => 'Lo fichièr « $1 » a {{PLURAL:$2|1 doble identic|$2 dobles identics}}.',
'fileduplicatesearch-noresults' => 'Cap de fichièr nomenat « $1 » es pas estat trobat.',

# Special:SpecialPages
'specialpages' => 'Paginas especialas',
'specialpages-note' => '----
* Paginas especialas normalas.
* <span class="mw-specialpagerestricted">Paginas especialas restrenchas.</span>
* <span class="mw-specialpagecached">Paginas especialas solament en escondedor (poirián èsser obsolètas).</span>',
'specialpages-group-maintenance' => 'Rapòrts de mantenença',
'specialpages-group-other' => 'Autras paginas especialas',
'specialpages-group-login' => "S'identificar / s'inscriure",
'specialpages-group-changes' => 'Darrièrs cambiaments e jornals',
'specialpages-group-media' => 'Rapòrts dels fichièrs de mèdias e dels impòrts',
'specialpages-group-users' => 'Utilizaires e dreches estacats',
'specialpages-group-highuse' => 'Utilizacion intensa de las paginas',
'specialpages-group-pages' => 'Listas de paginas',
'specialpages-group-pagetools' => 'Aisinas per las paginas',
'specialpages-group-wiki' => 'Donadas e aisinas',
'specialpages-group-redirects' => 'Redireccions',
'specialpages-group-spam' => 'Aisinas antispam',

# Special:BlankPage
'blankpage' => 'Pagina voida',
'intentionallyblankpage' => 'Aquesta pagina es intencionalament voida e es utilizada coma un tèst de performància, eca.',

# External image whitelist
'external_image_whitelist' => " #Daissatz aquesta linha exactament coma es<pre>
#Indicatz los fragments d’expression regularas (sonque la partida indicada entre los //) çaijós
#Correspondràn amb las URLs dels imatges (fòrt ligadas) extèrnes
#Las que correspondon s'aficharàn coma d'imatges, siquenon solament un ligam cap a l'imatge serà afichat
#Las linhas que començan amb # seràn consideradas coma de comentaris
#Aquesta linha es pas sensibla a la cassa

#Metetz totes los fragments d’expressions regularas al dessús d'aquesta linha. Daissatz aquesta darrièra linha exactament coma es.</pre>",

# Special:Tags
'tags' => 'Balisas de las modificacions validas',
'tag-filter' => 'Filtrar las [[Special:Tags|balisas]] :',
'tag-filter-submit' => 'Filtrar',
'tag-list-wrapper' => '([[Special:Tags|{{PLURAL:$1|Balisa|Balisas}}]] : $2)',
'tags-title' => 'Balisas',
'tags-intro' => 'Aquesta pagina lista las balisas que lo logicial pòt utilizar per marcar una modificacion, e lor significacion.',
'tags-tag' => 'Nom de la balisa',
'tags-display-header' => 'Aparéncia dins las listas de modificacions',
'tags-description-header' => 'Descripcion completa de la balisa',
'tags-active-header' => 'Actiu ?',
'tags-hitcount-header' => 'Modificacions balisadas',
'tags-active-yes' => 'Òc',
'tags-active-no' => 'Non',
'tags-edit' => 'modificar',
'tags-hitcount' => '$1 {{PLURAL:$1|cambiament|cambiaments}}',

# Special:ComparePages
'comparepages' => 'Comparar de paginas',
'compare-selector' => 'Comparar las versions de las paginas',
'compare-page1' => 'Pagina 1',
'compare-page2' => 'Pagina 2',
'compare-rev1' => 'Version 1',
'compare-rev2' => 'Version 2',
'compare-submit' => 'Comparar',
'compare-invalid-title' => "Lo títol qu'avètz especificat es incorrècte.",
'compare-title-not-exists' => "Lo títol qu'avètz especificat existís pas",
'compare-revision-not-exists' => "La revision qu'avètz especificada existís pas.",

# Database error messages
'dberr-header' => 'Aqueste wiki a un problèma',
'dberr-problems' => 'O planhèm ! Aqueste site rencontra de dificultats tecnicas.',
'dberr-again' => "Ensajatz d'esperar qualques minutas e tornatz cargar.",
'dberr-info' => '(Se pòt pas connectar al servidor de la banca de donadas : $1)',
'dberr-info-hidden' => '(Connexion al servidor de la banca de donadas impossibla)',
'dberr-usegoogle' => 'Podètz ensajar de cercar amb Google pendent aqueste temps.',
'dberr-outofdate' => 'Notatz que lors indèxes de nòstre contengut pòdon èsser depassats.',
'dberr-cachederror' => 'Aquò es una còpia amagada de la pagina demandada e pòt èsser depassada.',

# HTML forms
'htmlform-invalid-input' => "De problèmas son arribats amb d'unas valors",
'htmlform-select-badoption' => "La valor qu'avètz especificada es pas una opcion valida.",
'htmlform-int-invalid' => "La valor qu'avètz especificada es pas un nombre entièr.",
'htmlform-float-invalid' => "La valor qu'avètz especificada es pas un nombre.",
'htmlform-int-toolow' => "La valor qu'avètz especificada es en dejós del minimum de $1",
'htmlform-int-toohigh' => "La valor qu'avètz especificada es en dessús del minimum de $1",
'htmlform-required' => 'Aquesta valor es obligatòria',
'htmlform-submit' => 'Sometre',
'htmlform-reset' => 'Desfar las modificacions',
'htmlform-selectorother-other' => 'Autre',
'htmlform-no' => 'Non',
'htmlform-yes' => 'Òc',
'htmlform-chosen-placeholder' => 'Causir una opcion',

# SQLite database support
'sqlite-has-fts' => '$1 amb recèrca en tèxte integral suportada',
'sqlite-no-fts' => '$1 sens recèrca en tèxte integral suportada',

# New logging system
'logentry-delete-delete' => '$1 {{GENDER:$2|a suprimit}} la pagina $3',
'logentry-delete-restore' => '$1 {{GENDER:$2|a restablit}} la pagina $3',
'logentry-delete-event' => "$1 {{GENDER:$2|a modificat}} la visibilitat {{PLURAL:$5|d'un eveniment del jornal|de $5 eveniments del jornal}} sus $3 : $4",
'logentry-delete-revision' => "$1 {{GENDER:$2|a modificat}} la visibilitat {{PLURAL:$5|d'una revision|de $5 revisions}} sus la pagina $3 : $4",
'logentry-delete-event-legacy' => '$1 {{GENDER:$2|a modificat}} la visibilitat dels eveniments del jornal sus $3',
'logentry-delete-revision-legacy' => '$1 {{GENDER:$2|a modificat}} la visibilitat de las revisions sus la pagina $3',
'logentry-suppress-delete' => '$1 {{GENDER:$2|a suprimit}} la pagina $3',
'logentry-suppress-event' => "$1 {{GENDER:$2|a modificat secretament}} la visibilitat {{PLURAL:$5|d'un eveniment del jornal|de $5 eveniments del jornal}} sus $3 : $4",
'logentry-suppress-revision' => "$1 {{GENDER:$2|a modificat secretament}} la visibilitat {{PLURAL:$5|d'una revision|de $5 revisions}} sus la pagina $3 : $4",
'logentry-suppress-event-legacy' => '$1 {{GENDER:$2|a modificat secretament}} la visibilitat dels eveniments del jornal sus $3',
'logentry-suppress-revision-legacy' => '$1 {{GENDER:$2|a modificat secretament}} la visibilitat de las revisions sus la pagina $3',
'revdelete-content-hid' => 'contengut amagat',
'revdelete-summary-hid' => 'resumit de modificacion amagat',
'revdelete-uname-hid' => 'nom d’utilizaire amagat',
'revdelete-content-unhid' => 'contengut afichat',
'revdelete-summary-unhid' => 'resumit de modificacion afichat',
'revdelete-uname-unhid' => 'nom d’utilizaire afichat',
'revdelete-restricted' => 'aplicar las restriccions als administrators',
'revdelete-unrestricted' => 'restriccions levadas pels administrators',
'logentry-move-move' => '$1  {{GENDER:$2|a deplaçat}} la pagina $3 cap a $4',
'logentry-move-move-noredirect' => '$1 {{GENDER:$2|a deplaçat}} la pagina $3 cap a $4 sens daissar cap de redireccion',
'logentry-move-move_redir' => '$1 {{GENDER:$2|a deplaçat}} la pagina $3 cap a $4 per dessús una redireccion',
'logentry-move-move_redir-noredirect' => '$1 {{GENDER:$2|a desplaçat}} la pagina $3 cap a $4 per dessús una redireccion sens daissar cap de redireccion',
'logentry-patrol-patrol' => '$1 {{GENDER:$2|a marcat}} la revision $4 de la pagina $3 coma relegida',
'logentry-patrol-patrol-auto' => '$1 {{GENDER:$2|a marcat automaticament}} la revision $4 de la pagina $3 coma relegida',
'logentry-newusers-newusers' => 'Lo compte utilizaire $1 {{GENDER:$2|es estat creat}}',
'logentry-newusers-create' => "Lo compte d'utilizaire $1 {{GENDER:$2|es estat creat}}",
'logentry-newusers-create2' => "Lo compte d'utilizaire $3 {{GENDER:$2|es estat creat}} per $1",
'logentry-newusers-byemail' => "Lo compte d'utilizaire $3 {{GENDER:$2|es estat creat}} per $1 e lo senhal es estat mandat per corrièr electronic",
'logentry-newusers-autocreate' => 'Lo compte $1 {{GENDER:$2|es estat creat}} automaticament',
'logentry-rights-rights' => "$1 {{GENDER:$2|a modificat}} l'apartenéncia al grop per $3 de $4 a $5",
'logentry-rights-rights-legacy' => "$1 {{GENDER:$2|a modificat}} l'apartenéncia al grop per $3",
'logentry-rights-autopromote' => '$1 {{GENDER:$2|es estat promolgut}} automaticament de $4 a $5',
'rightsnone' => '(cap)',

# Feedback
'feedback-subject' => 'Subjècte :',
'feedback-message' => 'Messatge :',
'feedback-cancel' => 'Anullar',
'feedback-submit' => 'Mandar vòstres comentaris',
'feedback-adding' => 'Apondon de vòstres comentaris a la pagina...',
'feedback-error1' => "Error : Resultat de l'IPA pas reconegut",
'feedback-error2' => 'Error : la modificacion a fracassat',
'feedback-error3' => "Error : pas cap de responsa de l'API",
'feedback-close' => 'Fach',
'feedback-bugnew' => 'Ai verificat. Senhalar un bug novèl',

# Search suggestions
'searchsuggest-search' => 'Recercar',
'searchsuggest-containing' => 'que conten...',

# API errors
'api-error-badaccess-groups' => 'Sètz pas autorizat a cargar de fichièrs sus aqueste wiki.',
'api-error-badtoken' => 'Error intèrna : marrit « geton ».',
'api-error-copyuploaddisabled' => 'Los cargaments via URL son desactivats sus aqueste servidor.',
'api-error-duplicate-archive-popup-title' => 'Duplicar {{PLURAL:$1|lo fichièr|los fichièrs}} que {{PLURAL:$1|ja es estat suprimit|je son estats suprimits}}',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|fichièr|fichièrs}} en doble',
'api-error-empty-file' => "Lo fichièr qu'avètz somés èra void.",
'api-error-emptypage' => 'Creacion de paginas voidas pas autorizada.',
'api-error-fetchfileerror' => "Error intèrna : Quicòm s'es mal passat al moment de la recuperacion del fichièr.",
'api-error-fileexists-forbidden' => 'Un fichièr nomenat "$1" existís ja, e pòt pas èsser espotir.',
'api-error-file-too-large' => "Lo fichièr qu'avètz somés èra tròp grand.",
'api-error-filename-tooshort' => 'Lo nom del fichièr es tròp cort.',
'api-error-filetype-banned' => 'Aqueste tipe de fichièr es interdich',
'api-error-filetype-missing' => "L'extension del fichièr es mancanta.",
'api-error-hookaborted' => "La modificacion qu'avètz ensajat de realizar es estada anullada per una extension.",
'api-error-http' => 'Error intèrna : se pòt pas connectar al servidor.',
'api-error-illegal-filename' => 'Lo nom del fichièr es pas autorizat.',
'api-error-internal-error' => "Error intèrna : Quicòm s'es mal passat al moment del tractament de vòstre impòrt sul wiki.",
'api-error-invalid-file-key' => "Error intèrna : cap de fichièr pas trobat dins l'emmagazinatge temporari.",
'api-error-missingparam' => 'Error intèrna : Manca de paramètres dins la requèsta.',
'api-error-missingresult' => 'Error intèrna : Avèm pas pogut determinar se la còpia aviá capitat.',
'api-error-mustbeloggedin' => 'Vos cal èsser connectat per telecargar de fichièrs.',
'api-error-mustbeposted' => 'Error intèrna : aquesta requèsta necessita lo metòde HTTP POST.',
'api-error-nomodule' => 'Error intèrna : cap de modul de versament pas definit.',
'api-error-ok-but-empty' => 'Error intèrna : Lo servidor a pas respondut.',
'api-error-overwrite' => 'Espotir un fichièr existent es pas autorizat.',
'api-error-stashfailed' => 'Error intèrna : lo servidor a pas pogut enregistrar lo fichièr temporari.',
'api-error-publishfailed' => 'Error intèrna: Lo servidor a pas pogut publicar lo fichièr temporari.',
'api-error-timeout' => 'Lo servidor a pas respondut dins lo relambi pervist.',
'api-error-unclassified' => "Una error desconeguda s'es producha.",
'api-error-unknown-code' => 'Error desconeguda : « $1 »',
'api-error-unknown-error' => 'Error intèrna : Quicòm a mal virat al moment del mandadís de vòstre fichièr.',
'api-error-unknown-warning' => 'Avertiment desconegut : $1',
'api-error-unknownerror' => 'Error desconeguda : « $1 »',
'api-error-uploaddisabled' => 'Lo cargament es desactivat sus aqueste wiki.',
'api-error-verification-error' => 'Aqueste fichièr pòt èsser corromput, o son extension es incorrècta.',

# Durations
'duration-seconds' => '$1 segonda{{PLURAL:$1||s}}',
'duration-minutes' => '$1 minuta{{PLURAL:$1||s}}',
'duration-hours' => '$1 ora{{PLURAL:$1||s}}',
'duration-days' => '$1 jorn{{PLURAL:$1||s}}',
'duration-weeks' => '$1 setmana{{PLURAL:$1||s}}',
'duration-years' => '$1 annada{{PLURAL:$1||s}}',
'duration-decades' => '$1 decenni{{PLURAL:$1||s}}',
'duration-centuries' => '$1 sègle{{PLURAL:$1||s}}',
'duration-millennia' => '$1 milleni{{PLURAL:$1||s}}',

# Image rotation
'rotate-comment' => "Imatge pivotat de $1 {{PLURAL:$1|gras|grases}} dins lo sens de las agulhas d'una mòstra",

# Limit report
'limitreport-title' => 'Donadas d’optimizacion de l’analisador :',
'limitreport-cputime' => 'Temps CPU d’utilizacion',
'limitreport-cputime-value' => '$1 {{PLURAL:$1|segonda|segondas}}',
'limitreport-walltime' => 'Temps real d’utilizacion',
'limitreport-walltime-value' => '$1 {{PLURAL:$1|segonda|segondas}}',
'limitreport-ppvisitednodes' => 'Nombre de nosèls de preprocessor visitats',
'limitreport-ppgeneratednodes' => 'Nombre de nosèls de preprocessor generats',
'limitreport-postexpandincludesize' => 'Talha d’inclusion aprèp espandiment',
'limitreport-postexpandincludesize-value' => '$1/$2 {{PLURAL:$2|octet|octets}}',
'limitreport-templateargumentsize' => 'Talha de l’argument del modèl',
'limitreport-templateargumentsize-value' => '$1/$2 {{PLURAL:$2|octet|octets}}',
'limitreport-expansiondepth' => 'Mai granda prigondor d’espandiment',
'limitreport-expensivefunctioncount' => 'Nombre de foncions d’analisi costosas',

);
