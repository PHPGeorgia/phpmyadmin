<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('P�h', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'M�r', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';
$timespanfmt = '%s p�eva, %s tundi, %s minutit ja %s sekundit';

$strAPrimaryKey = 'Primaarne v�ti lisati %s';
$strAbortedClients = 'Katkestatud';
$strAbsolutePathToDocSqlDir = 'Palun sisestage absoluutne tee webiserveris docSQL kataloogini';
$strAccessDenied = 'Ligip��s keelatud';
$strAccessDeniedExplanation = 'phpMyAdmin proovis �henduda MySQL serveriga ja server l�kkas �henduse tagasi. Te peaksite kontrollima serverit, kasutajanime ja parooli config.inc.php failis ning kontrollima, et need vastaks infole mis te saite oma MySQL serveri administraatori k�est.';
$strAction = 'Tegevus';
$strAddAutoIncrement = 'Lisa AUTO_INCREMENT v��rtus';
$strAddConstraints = 'Lisa piirangud';
$strAddDeleteColumn = 'Lisa/Kustuta v�lja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddDropDatabase = 'Lisa DROP DATABASE';
$strAddHeaderComment = 'Lisa vaba kommentaar p�isesse (\\n eraldab read)';
$strAddIfNotExists = 'Lisa IF NOT EXISTS';
$strAddIntoComments = 'Lisa kommentaaridesse';
$strAddNewField = 'Lisa uus v�li';
$strAddPriv = 'Lisa uus privileeg';
$strAddPrivMessage = 'Te lisasite uue privileegi.';
$strAddPrivilegesOnDb = 'Lisa privileegid antud andmebaasile';
$strAddPrivilegesOnTbl = 'Lisa privileegid antud tabelile';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("WHERE" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida/read';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAddedColumnComment = 'Kommentaar lisatud v�ljale';
$strAddedColumnRelation = 'S�ltuvus lisatud v�ljale';
$strAdministration = 'Administreerimine';
$strAffectedRows = 'M�jutatud read:';
$strAfter = 'Peale %s';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa j�rgmine uus rida';
$strAfterInsertSame = 'Mine tagasi sellele lehele';
$strAll = 'K�ik';
$strAllTableSameWidth = 'kuva k�ik tabelid sama laiusega?';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnIndex = 'Indeks lisati %s';
$strAnalyzeTable = 'Anal��si tabelit';
$strAnd = 'ja';
$strAny = 'k�ik';
$strAnyColumn = 'K�ik v�ljad';
$strAnyDatabase = 'K�ik andmebaasid';
$strAnyHost = 'K�ik masinad';
$strAnyTable = 'K�ik tabelid';
$strAnyUser = 'K�ik kasutajad';
$strArabic = 'Araabia';
$strArmenian = 'Armeenia';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli l�ppu';
$strAttr = 'Parameetrid';
$strAutodetect = 'Automaatne tuvastus';
$strAutomaticLayout = 'Automaatne v�ljund';

$strBack = 'Tagasi';
$strBaltic = 'Balti';
$strBeginCut = 'ALUSTA L�IGET';
$strBeginRaw = 'ALUSTA PUHAST';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - �rge muutke';
$strBookmarkAllUsers = 'Anna k�ikidele kasutajatele juurdep��s sellele j�rjehodjale';
$strBookmarkDeleted = 'J�rjehodja kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkOptions = 'J�rjehoidja seaded';
$strBookmarkQuery = 'J�rjehodjaga SQL p�ring';
$strBookmarkThis = 'Lisa see SQL p�ring j�rjehoidjasse';
$strBookmarkView = 'Vaata ainult';
$strBrowse = 'Vaata';
$strBrowseForeignValues = 'Vaata v�liseid v��rtuseid';
$strBulgarian = 'Bulgaaria';
$strBzError = 'phpMyAdmin ei suutnud pakkida seda andmebaasiv�ljundit kuna Bz2 moodul on vigane selles PHP versioonis. Me soovitame tungivalt oma phpMyAdmini konfiguratsioonifailis panna lipu <code>$cfg[\'BZipDump\']</code> v��rtuseks <code>FALSE</code>. Kui te soovite kasutada Bz2 pakkimist peaksite te oma PHP versiooni uuendama viimasele versioonile. Lugege PHP vea %s raportit t�psemaks infoks.';
$strBzip = '"bzipitud"';

$strCSVOptions = 'CSV seaded';
$strCannotLogin = 'Eei suuda MySQL serverisse logida';
$strCantLoad = 'ei suutnud lugeda moodulit %s,<br />palun kontrollige PHP konfiguratsiooni';
$strCantLoadRecodeIconv = 'Ei suuda lugeda iconv v�i recode moodulit mida on vaja t�hetabeli konvertimiseks, konfigureerige PHP-d nii, et see sisaldaks antud mooduleid v�i keelake t�hetabeli konvertimine phpMyAdminis.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCantUseRecodeIconv = 'Ei suuda kasutada iconv-d v�i libiconvi v�i recode_string funktsiooni kuigi moodul on installitud Kontrollige oma PHP konfiguratsiooni.';
$strCardinality = 'Kasulikkus';
$strCarriage = 'Reavahetus: \\r';
$strCaseInsensitive = 't�stutundetu';
$strCaseSensitive = 't�stutundlik';
$strCentralEuropean = 'Kesk-Euroopa';
$strChange = 'Muuda';
$strChangeCopyMode = 'Loo uus kasutaja samade privileegidega ja ...';
$strChangeCopyModeCopy = '... hoia vana alles.';
$strChangeCopyModeDeleteAndReload = ' ... kustuta vana kasutajate tabelist ja taaslae privileegid p�rast seda.';
$strChangeCopyModeJustDelete = ' ... kustuta vana kasutajate tabelist.';
$strChangeCopyModeRevoke = ' ... kanna k�ik aktiivsed privileegid �le vanast ja kustuta see p�rast.';
$strChangeCopyUser = 'Vaheta logimisinformatsiooni / Kopeeri kasutaja';
$strChangeDisplay = 'Vali v�li mida kuvada';
$strChangePassword = 'Muuda parooli';
$strCharset = 'T�heseade';
$strCharsetOfFile = 'Faili t�hekodeering:';
$strCharsets = 'T�hetabelid';
$strCharsetsAndCollations = 'T�hetabelid ja m��rangud';
$strCheckAll = 'M�rgista k�ik';
$strCheckDbPriv = 'Vaata andmebaasi privileege';
$strCheckOverhead = 'Kontrolli �lekulusid';
$strCheckPrivs = 'Kontrollige privileege';
$strCheckPrivsLong = 'Kontrolli privileege andmebaasile &quot;%s&quot;.';
$strCheckTable = 'Kontrolli tabelit';
$strChoosePage = 'Palun valige leht muutmiseks';
$strColComFeat = 'N�itan veeru kommentaare';
$strCollation = 'M��rang';
$strColumn = 'V�li';
$strColumnNames = 'V�ljade nimed';
$strColumnPrivileges = 'V�li-spetsiifilised privileegid';
$strCommand = 'K�sk';
$strComments = 'Kommentaarid';
$strCommentsForTable = 'KOMMENTAARID TABELILE';
$strCompleteInserts = 'T�ispikk INSERT';
$strCompression = 'Pakkimine';
$strConfigFileError = 'phpMyAdmin ei suutnud lugeda Teie konfiguratsioonifaili!<br />See v�ib juhtuda kui PHP leiab vea selles v�i PHP ei leia antud faili �les.<br />Palun kutsuge konfiguratsioonifail v�lja otseselt kasutades linki allpool ja lugege PHP veateadet(eid) mis teile �eldakse. Enamustel juhtudel on kuskilt puudu �lakoma v�i semikoolon.<br />Kui Teile kuvatakse t�hi leht on k�ik korras.';
$strConfigureTableCoord = 'Palun seadke koordinaadid tabelile %s';
$strConfirm = 'Kas Te t�esti tahate seda teha?';
$strConnectionError = 'Ei saa �hendust: vigased seaded.';
$strConnections = '�hendused';
$strConstraintsForDumped = 'Piirangud salvestatud tabelitele';
$strConstraintsForTable = 'Piirangud tabelile';
$strCookiesRequired = 'K�psised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCopyTableSameNames = 'Ei saa tabelit iseendasse kopeerida!';
$strCouldNotKill = 'phpMyAdmin ei suutnud katkestada protsessi %s. T�en�oliselt on see juba suletud.';
$strCreate = 'Loo';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;v�ljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCreatePage = 'Loo uus leht';
$strCreatePdfFeat = 'PDF-ide tegemine';
$strCreationDates = 'Loo/muuda/kontrolli kuup�evi';
$strCriteria = 'Kriteerium';
$strCroatian = 'Horvaatia';
$strCyrillic = 'Kirillitsa';
$strCzech = 'Tsehhi';
$strCzechSlovak = 'Tsehhi-Slovaki';

$strDBComment = 'Andmebaasi kommentaar: ';
$strDBGContext = 'Sisu';
$strDBGContextID = 'Sisu ID';
$strDBGHits = 'Vajutusi';
$strDBGLine = 'Rida';
$strDBGMaxTimeMs = 'Max aeg, ms';
$strDBGMinTimeMs = 'Min aeg, ms';
$strDBGModule = 'Moodul';
$strDBGTimePerHitMs = 'Aeg/vajutus, ms';
$strDBGTotalTimeMs = 'Koguaeg, ms';
$strDBRename = 'Nimeta andmebaas �mber';
$strDanish = 'Taani';
$strData = 'Andmed';
$strDataDict = 'Andmes�nastik';
$strDataOnly = 'Ainult andmed';
$strDatabase = 'Andmebaas ';
$strDatabaseEmpty = 'Andmebaasi nimi on t�hi!';
$strDatabaseExportOptions = 'Andmebaasi eksportimise seaded';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabaseNoTable = 'See andmebaas ei sisalda tabelit!';
$strDatabaseWildcard = 'Andmebaas (l�hendid lubatud):';
$strDatabases = 'andmebaasid';
$strDatabasesDropped = 'andmebaasid %s kustutati �nnestunult.';
$strDatabasesStats = 'Andmebaaside statistika';
$strDatabasesStatsDisable = 'Keelake statistika';
$strDatabasesStatsEnable = 'Lubage statistika';
$strDatabasesStatsHeavyTraffic = 'M�rkus: Lubades siin andmebaasi statistika v�ite tekitada v�ga koormava liikuse webiserveri ja MySQL-i vahel.';
$strDbPrivileges = 'Andmebaas-spetsiifilised privileegid';
$strDbSpecific = 'andmebaasip�hine';
$strDefault = 'Vaikimisi';
$strDefaultValueHelp = 'Vaikimisi v��rtuse jaoks sisestage lihtsalt �ksik v��rtus, ilma kaldkriipsudega varjestamata ning jutum�rkideta, kasutades j�rgmist kirjakuju: a';
$strDelOld = 'Antud lehel on viiteid tabelitele mida enam ei ole. Kas te soovite kustutada need viited?';
$strDelayedInserts = 'Kasuta ajastatud lisamisi';
$strDelete = 'Kustuta';
$strDeleteAndFlush = 'Kustutage kasutajad ja taaslaadige privileegid p�rast seda.';
$strDeleteAndFlushDescr = 'See on parim tee, kuid privileegide taaslaadimine v�ib v�tta aega.';
$strDeleteFailed = 'Kustutamine eba�nnestus!';
$strDeleteUserMessage = 'Te kustutasite kasutaja %s.';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDeleting = 'Kustutan %s';
$strDescending = 'Kahanev';
$strDescription = 'Kirjeldus';
$strDictionary = 's�naraamat';
$strDisabled = 'Keelatud';
$strDisplay = 'N�ita';
$strDisplayFeat = 'Kuva v�imalused';
$strDisplayOrder = 'N�itamise j�rjekord:';
$strDisplayPDF = 'N�ita PDF skeemi';
$strDoAQuery = 'Tee "p�ring n�ite j�rgi" (l�hend: "%")';
$strDoYouReally = 'Kas te t�esti tahate ';
$strDocu = 'Dokumentatsioon';
$strDrop = 'Kustuta';
$strDropDB = 'Kustuta andmebaas ';
$strDropDatabaseStrongWarning = 'T�helepanu! Te H�VITATE kogu andmebaasi!';
$strDropSelectedDatabases = 'Kustutage valitud andmebaasid';
$strDropTable = 'Kustuta tabel';
$strDropUsersDb = 'Kustuta andmebaasid millel on samad nimed nagu kasutajatel.';
$strDumpComments = 'Lisa veeru kommentaarid siseste SQL-kommentaaridena.';
$strDumpSaved = 'V�ljav�te salvestati faili %s.';
$strDumpXRows = 'P�ri %s rida alustades reast %s.';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDynamic = 'd�naamiline';

$strEdit = 'Muuda';
$strEditPDFPages = 'Muuda PDF lehti';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmpty = 'T�hjenda';
$strEmptyResultSet = 'MySQL tagastas t�hja tulemuse (s.t. null rida).';
$strEnabled = 'Lubatud';
$strEnd = 'L�pp';
$strEndCut = 'L�PETA L�IGE';
$strEndRaw = 'L�PETA PUHAS';
$strEnglish = 'Inglise';
$strEnglishPrivileges = ' M�rkus: MySQL privileegide nimed on ingliskeelsed ';
$strError = 'Viga';
$strEstonian = 'Eesti';
$strExcelEdition = 'Exceli versioon';
$strExcelOptions = 'Excel\'i seaded';
$strExecuteBookmarked = 'K�ivita salvestatud p�ring';
$strExplain = 'Seleta SQL-i';
$strExport = 'Ekspordi';
$strExportToXML = 'Ekspordi XML formaati';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Eba�nnestunud �ritused';
$strField = 'V�li';
$strFieldHasBeenDropped = 'V�li %s kustutatud';
$strFields = 'V�ljade arv';
$strFieldsEmpty = ' V�ljade loetelu on t�hi! ';
$strFieldsEnclosedBy = 'V�ljad �mbritsetud';
$strFieldsEscapedBy = 'V�ljad varjatud';
$strFieldsTerminatedBy = 'V�ljad eraldatud';
$strFileAlreadyExists = 'Fail %s on juba serveris olemas, muutke faili nime v�i kontrollige �lekirjutamise seadeid.';
$strFileCouldNotBeRead = 'Faili ei suudetud lugeda';
$strFileNameTemplate = 'Faili nime template';
$strFileNameTemplateHelp = 'Kasutage __DB__ andmebaasi nime jaoks, __TABLE__ tabeli nime jaoks ja %s�ksk�ik milliseid strftime%s seadeid aja m��ramiseks, moodul lisatakse automaatselt. �lej��nud teksti ei muudeta.';
$strFileNameTemplateRemember = 'j�ta template meelde';
$strFixed = 'parandatud';
$strFlushPrivilegesNote = 'M�rkus: phpMyAdmin v�tab kasutajate privileegid otse MySQL privileges tabelist. Tabeli sisu v�ib erineda sellest, mida server hetkel kasutab, seda juhul kui olete k�sitsi muudatusi teinud. Sellisel juhul peaksite te privileegid %staaslaadima%s enne j�tkamist.';
$strFlushTable = '�htlusta tabelid ("FLUSH")';
$strFormEmpty = 'Puuduv v��rtus vormis !';
$strFormat = 'Formaat';
$strFullText = 'T�istekstid';
$strFunction = 'Funktsioon';

$strGenBy = 'Genereerija ';
$strGenTime = 'Tegemisaeg';
$strGeneralRelationFeat = 'Peamised seoste v�imalused';
$strGeorgian = 'Gruusia';
$strGerman = 'Saksa';
$strGlobal = 'globaalne';
$strGlobalPrivileges = 'Globaalsed privileegid';
$strGlobalValue = '�ldine v��rtus';
$strGo = 'Mine';
$strGrantOption = '�igused';
$strGrants = '�igused';
$strGreek = 'Kreeka';
$strGzip = '"gzipitud"';

$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHaveToShow = 'Te peate valima v�hemalt �he veeru kuvamiseks';
$strHebrew = 'Heebrea';
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHomepageSourceforge = 'Sourceforge phpMyAdmini allalaadimisleht';
$strHost = 'Masin';
$strHostEmpty = 'Masin on t�hi!';
$strHungarian = 'Ungari';

$strId = 'ID';
$strIdxFulltext = 'T�istekst';
$strIfYouWish = 'Kui soovite lugeda ainult m�ningaid tabeli v�lju, sisestage komaga eraldatud v�ljade loetelu.';
$strIgnore = 'Ignoreeri';
$strIgnoreInserts = 'Kasutaja ignoreeritavaid lisamisi';
$strIgnoringFile = 'J�tan vahele faili %s';
$strImportDocSQL = 'docSQL failide importimine';
$strImportFiles = 'Importige failid';
$strImportFinished = 'Import l�petatud';
$strInUse = 'kasutusel';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi t��p&nbsp;:';
$strIndexes = 'Indeksid';
$strInnodbStat = 'InnoDB staatus';
$strInsecureMySQL = 'Teie konfiguratsioonifail sisaldab seadeid (root kasutaja ilma paroolita) mis vastab MySQL-i vaikimisi priviligeeritud kasutajale. Kui Teie MySQL-i server jookseb sellise seadega on ta avatud r�nnakutele, soovitav on see turvaauk kiiresti parandada.';
$strInsert = 'Lisa';
$strInsertAsNewRow = 'Lisa uue reana';
$strInsertNewRow = 'Lisa uus rida';
$strInsertTextfiles = 'Lisa andmed tekstifailist tabelisse';
$strInsertedRowId = 'Lisatud rea id:';
$strInsertedRows = 'Lisatud read:';
$strInstructions = 'sisestust';
$strInternalNotNecessary = '* Sisene seos ei ole vajalik kui ta eksisteerib ka InnoDB-s.';
$strInternalRelations = 'Sisesed seosed';
$strInvalidName = '"%s" on reserveeritud s�na, te ei saa seda kasutada andmebaasi/tabeli/v�lja nimena.';

$strJapanese = 'Jaapani';
$strJumpToDB = 'H�ppa andmebaasile &quot;%s&quot;.';
$strJustDelete = 'Lihtsalt kustutage kasutajad privilege tabelist.';
$strJustDeleteDescr = '&quot;Kustutatud&quot; kasutajad v�ivad ikka veel ligi p��seda serverile, kuni privileegid pole uuesti sisse loetud.';

$strKeepPass = '�rge muutke parooli';
$strKeyname = 'V�tme nimi';
$strKill = 'Tapa';
$strKorean = 'Korea';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX\'i seaded';
$strLandscape = 'Laipilt';
$strLatexCaption = 'Tabeli seletus';
$strLatexContent = 'Tabeli __TABLE__ sisu';
$strLatexContinued = '(j�tkub)';
$strLatexContinuedCaption = 'J�tkuva tabeli seletus';
$strLatexIncludeCaption = 'Lisa tabeli seletus';
$strLatexLabel = 'Nimetuse v�ti';
$strLatexStructure = 'Tabeli __TABLE__ struktuur';
$strLength = 'Pikkus';
$strLengthSet = 'Pikkus/V��rtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLineFeed = 'Real�pp: \\n';
$strLines = 'Read';
$strLinesTerminatedBy = 'Read l�petatud';
$strLinkNotFound = 'Linki ei leitud';
$strLinksTo = 'Lingib ';
$strLithuanian = 'Leedu';
$strLoadExplanation = 'Vaikimisi on aktiivne parim meetod aga te v�ite seda muuta, kui see ei t��ta.';
$strLoadMethod = 'LOAD meetod';
$strLocalhost = 'Lokaalne';
$strLocationTextfile = 'tekstifaili asukoht';
$strLogPassword = 'Parool:';
$strLogServer = 'Server';
$strLogUsername = 'Kasutajanimi:';
$strLogin = 'Sisselogimine';
$strLoginInformation = 'Logimise informatsioon';
$strLogout = 'Logi v�lja';

$strMIMETypesForTable = 'MIME T��BID TABELILE';
$strMIME_MIMEtype = 'MIME-t��p';
$strMIME_available_mime = 'Olemasolevad MIME-t��bid';
$strMIME_available_transform = 'Available transformations';
$strMIME_description = 'Kirjeldus';
$strMIME_file = 'Failinimi';
$strMIME_nodescription = 'Selle transformatsiooni jaoks ei ole kirjeldust.<br />Palun k�sige autorilt, mida %s teeb.';
$strMIME_transformation = 'Browseri transformatsioon';
$strMIME_transformation_note = 'Transformatsiooni v�imaluste ja tema MIME-t��bi transformatsiooni nimekirjaks vajutage %stransformatsiooni kirjeldusele%s';
$strMIME_transformation_options = 'Transformeerimise seaded';
$strMIME_transformation_options_note = 'Palun sisestage transformatsiooniks vajalikud v��rtused, kasutades j�rgmist formaati: \'a\',\'b\',\'c\'...<br />Kui teil on vaja edastada kaldkriips ("\") v�i �lakoma ("\'") nende v��rtuste seas, varjestage see tagurpidi kaldkriipsuga (n�iteks \'\\\\xyz\' v�i \'a\\\'b\').';
$strMIME_without = 'MIME-t��bid kursiivis ei oma eraldi transofrmatsiooni funktsiooni';
$strMaximumSize = 'Maksimaalne suurus: %s%s';
$strMissingBracket = 'Puuduv �lakoma';
$strModifications = 'Muutused salvestatud';
$strModify = 'Muuda';
$strModifyIndexTopic = 'Muuda indeksit';
$strMoreStatusVars = 'Rohkem staatusev��rtusi';
$strMoveTable = 'Vii tabel �le (andmebaas<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s viidu �le andmebaasi %s.';
$strMoveTableSameNames = 'Ei saa tabelit iseendasse liigutada!';
$strMultilingual = 'mitmekeelne';
$strMustSelectFile = 'Palun valige fail mida soovite lisada.';
$strMySQLCharset = 'MySQLi t�hetabel';
$strMySQLReloaded = 'MySQL uuesti laetud.';
$strMySQLSaid = 'MySQL �tles: ';
$strMySQLServerProcess = 'MySQL %pma_s1% jookseb %pma_s2%\'is - %pma_s3%';
$strMySQLShowProcess = 'N�ita protsesse';
$strMySQLShowStatus = 'N�ita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'N�ita MySQL s�steemseid muutujaid';

$strName = 'Nimi';
$strNeedPrimaryKey = 'Te peaksite defineerima primaarse v�tme sellele tabelile.';
$strNext = 'J�rgmine';
$strNo = 'Ei';
$strNoDatabases = 'Pole andmebaase';
$strNoDatabasesSelected = '�htegi andmebaasi ei ole valitud.';
$strNoDescription = 'pole kirjeldust';
$strNoDropDatabases = '"DROP DATABASE" k�sud keelatud.';
$strNoExplain = 'J�ta SQL-i seletamine vahele';
$strNoFrames = 'phpMyAdmin on s�bralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNoOptions = 'Sellel formaadil pole seadeid';
$strNoPassword = 'Ilma paroolita';
$strNoPermission = 'Webiserver ei oma �igusi , et salvestada fail %s.';
$strNoPhp = 'ilma PHP koodita';
$strNoPrivileges = 'Ei oma �htegi privileegi';
$strNoQuery = '�htegi SQL p�ringut!';
$strNoRights = 'Teil pole piisavalt �igusi, et hetkel siin olla!';
$strNoSpace = 'Liiga v�he kettaruumi, et salvestada fail %s.';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNoUsersFound = 'Ei leitud �htegi kasutajat.';
$strNoUsersSelected = 'Ei valitud �htegi kasutajat.';
$strNoValidateSQL = 'J�ta SQL-i kontroll vahele';
$strNone = 'Pole';
$strNotNumber = 'See pole number!';
$strNotOK = 'Ei ole korras';
$strNotSet = '<b>%s</b> tabelit ei leitud v�i ei eksisteeri %s';
$strNotValidNumber = ' pole korrektne reanumber!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s vaste(t) tabelis <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kokku:</b> <i>%s</i> vaste(t)';
$strNumTables = 'Tabelid';

$strOK = 'Korras';
$strOftenQuotation = 'Kasuta jutum�rke koguaeg. VALIKULISELT t�hendab, et ainult char ja varchar t��pi v�ljad �mbritsetakse m��ratud m�rkidega.';
$strOperations = 'Tegevused';
$strOperator = 'Operaator';
$strOptimizeTable = 'Optimiseeri tabelit';
$strOptionalControls = 'Mittekohustuslik. Kontrollib kuidas kirjutada v�i lugeda erim�rke.';
$strOptionally = 'VALIKULISELT';
$strOptions = 'Valikud';
$strOr = 'v�i';
$strOverhead = '�lej��v';
$strOverwriteExisting = 'Kirjuta olemasolev(ad) fail(id) �le';

$strPHP40203 = 'Te kasutate PHP 4.2.3, milles on t�sine viga mitmebaidiste tekstidega (mbstring). Vaadake PHP vearaportit 19404. Seda PHP versiooni ei soovitata kasutada phpMyAdminiga.';
$strPHPVersion = 'PHP versioon';
$strPageNumber = 'Lehenumber:';
$strPaperSize = 'Paberi suurus';
$strPartialText = 'L�hendatud tekstid';
$strPassword = 'Parool';
$strPasswordChanged = 'Kasutaja %s parool vahetati �nnestunult.';
$strPasswordEmpty = 'Parool on t�hi!';
$strPasswordNotSame = 'Paroolid ei �hti!';
$strPdfDbSchema = 'Andmebaasi "%s" skeem - lehek�lg %s';
$strPdfInvalidPageNum = 'Defineerimata PDF lehe number!';
$strPdfInvalidTblName = '"%s" tabel ei eksisteeri!';
$strPdfNoTables = 'Pole tabeleid';
$strPerHour = 'tunni kohta';
$strPerMinute = 'minutis';
$strPerSecond = 'sekundis';
$strPhoneBook = 'telefoniraamat';
$strPhp = 'Loo PHP kood';
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> konstant peab teie konfiguratsioonifailis m��ratud olema!';
$strPortrait = 'Portreepilt';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimary = 'Primaarne';
$strPrimaryKey = 'Primaarne v�ti';
$strPrimaryKeyHasBeenDropped = 'Primaarne v�ti kustutatud';
$strPrimaryKeyName = 'Primaarse v�tme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse v�tme nimi!)';
$strPrint = 'Prindi';
$strPrintView = 'Tr�kivaade';
$strPrintViewFull = 'Tr�kivaade (t�ispikkade tekstidega)';
$strPrivDescAllPrivileges = 'Sisaldab k�iki privileege peale GRANT.';
$strPrivDescAlter = 'Lubab muuta olemasolevate tabelite struktuure.';
$strPrivDescCreateDb = 'Lubab luua uusi andmebaase ja tabeleid.';
$strPrivDescCreateTbl = 'Lubab luua uusi tabeleid.';
$strPrivDescCreateTmpTable = 'Lubab luua ajutisi tabeleid.';
$strPrivDescDelete = 'Lubab kustutada infot.';
$strPrivDescDropDb = 'Lubab kustuada andmebaase ja tabeleid.';
$strPrivDescDropTbl = 'Lubab kustutada tabeleid..';
$strPrivDescExecute = 'Lubab k�ivitada salvestatud protseduure; Ei oma mingit effekti antud MySQL versioonis.';
$strPrivDescFile = 'Lubab andmete eksportimist faili ja andmete importimist failidest.';
$strPrivDescGrant = 'Lubab lisada kasutajaid ja privileege ilma privileges tabelit taask�ivitamata.';
$strPrivDescIndex = 'Lubab luua ja kustutada indekseid.';
$strPrivDescInsert = 'Lubab lisada ja muuta infot.';
$strPrivDescLockTables = 'Lubab lukustada tabeleid aktiivse p�ringu tarbeks.';
$strPrivDescMaxConnections = 'Limiteerib �henduste arvu tunnis kasutaja jaoks.';
$strPrivDescMaxQuestions = 'Limiteerib p�ringute arvu tunnis kasutaja jaoks.';
$strPrivDescMaxUpdates = 'Limiteerib k�skude, mis muudavad suvalist tabelit v�i andmebaasi, arvu tunnis kasutaja jaoks';
$strPrivDescProcess3 = 'Lubab tappa kasutajate protsesse.';
$strPrivDescProcess4 = 'Lubab vaadata t�ielikult p�ringuid protsessitabelis.';
$strPrivDescReferences = 'Ei oma antud MySQL versioonis mingit effekti.';
$strPrivDescReload = 'Lubab taaslaadida serveri seadmeid ja puhastada serveri cachet.';
$strPrivDescReplClient = 'Lubab kasutajal k�sida kus on slaved/masterid.';
$strPrivDescReplSlave = 'Vajalik slavede paljundamiseks.';
$strPrivDescSelect = 'Lubab lugeda infot.';
$strPrivDescShowDb = 'Annab ligip��su kogu andmebaasilistingule.';
$strPrivDescShutdown = 'Lubab serverit maha lasta.';
$strPrivDescSuper = 'Lubab �henduda, isegi kui maksimaalne �henduste arv on saavutatud; Vajalik enamike administratiivsete operatsioonide jaoks, nagu globaalsete muutujate seadmine v�i teiste kasutajate �henduste tapmine.';
$strPrivDescUpdate = 'Lubab muuta infot.';
$strPrivDescUsage = 'Mitte �htegi privileegi.';
$strPrivileges = 'Privileegid';
$strPrivilegesReloaded = 'Privileegid taaslaeti edukalt.';
$strProcesslist = 'Protsessinimekiri';
$strProperties = 'Seaded';
$strPutColNames = 'Pange v�ljade nimed esimesse ritta';

$strQBE = 'P�ring n�ite j�rgi';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'P�ringuaken';
$strQueryFrameDebug = 'Silumisinformatsioon';
$strQueryFrameDebugBox = 'Aktiivsed muutujad p�ringuvormile:\nAB: %s\nTabel: %s\nServer: %s\n\nOlemasolevad muutjad p�ringuvormile:\nAB: %s\nTabel: %s\nServer: %s\n\nAvaja asukoht: %s\nFreimi asukoht: %s.';
$strQueryOnDb = 'SQL-p�ring andmebaasist <b>%s</b>:';
$strQuerySQLHistory = 'SQL-ajalugu';
$strQueryStatistics = '<b>P�ringu statistika</b>: Alates stardist, %s p�ringut on saadetud serverile.';
$strQueryTime = 'P�ring kestis %01.4f sek';
$strQueryType = 'P�ringu t��p';
$strQueryWindowLock = 'Antud p�ringut mitte muuta v�ljaspool akent.';

$strReType = 'Sisesta uuesti';
$strReceived = 'Saadud';
$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli p�rinevust:';
$strRelationNotWorking = 'Lisav�imalused t��tamiseks lingitud tabelitega on deaktiveeritud. Et lugeda miks see nii on, vajutage %ssiia%s.';
$strRelationView = 'P�rinevuse vaade';
$strRelationalSchema = 'Seoseskeem';
$strRelations = 'Suhted';
$strRelationsForTable = 'SEOSED TABELILE';
$strReloadFailed = 'MySQL taaslaadimine eba�nnestus.';
$strReloadMySQL = 'Taaslae MySQL';
$strReloadingThePrivileges = 'Taaslaen privileege';
$strRememberReload = '�rge unustage serverit taaslaadida.';
$strRemoveSelectedUsers = 'Eemalda valitud kasutajad';
$strRenameDatabaseOK = 'Andmebaas %s on �mber nimetatud %s';
$strRenameTable = 'Nimeta tabel �mber';
$strRenameTableOK = 'Tabel %s on �mber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplace = 'Asenda';
$strReplaceNULLBy = 'Asenda NULL ';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReset = 'T�hista';
$strResourceLimits = 'Ressursilimiidid';
$strRevoke = 'V�ta tagasi';
$strRevokeAndDelete = 'Eemalda k�ik aktiivsed privileegid kasutajatelt ning kustuta nad p�rast seda.';
$strRevokeAndDeleteDescr = 'Kasutajatel on ikka veel USAGE privileeg, kuni privileegid pole taaslaetud.';
$strRevokeGrant = 'V�ta n�udmine tagasi';
$strRevokeGrantMessage = 'Te v�tsite privileegi andmise %s -le tagasi';
$strRevokeMessage = 'Te v�tsite tagasi privileegid %s-lt';
$strRevokePriv = 'V�tke privileegid';
$strRowLength = 'Rea pikkus';
$strRowSize = ' rea suurus ';
$strRows = 'Ridu';
$strRowsFrom = 'read alates';
$strRowsModeFlippedHorizontal = 'horisontaalne (p��ratud p�is)';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'n�ita %s and korda pealkirju iga %s j�rel';
$strRowsModeVertical = 'vertikaalselt';
$strRowsStatistic = 'Rea statistika';
$strRunQuery = 'Lae p�ring';
$strRunSQLQuery = 'P�ri SQL p�ring(uid) andmebaasist %s';
$strRunning = 'jookseb masinas %s';
$strRussian = 'Vene';

$strSQL = 'SQL';
$strSQLExportType = 'Ekspordi t��p';
$strSQLOptions = 'SQL seaded';
$strSQLParserBugMessage = 'On v�imalus, et te leidsite vea SQL parseris. Palun kontrollige oma p�ringut t�psemalt ja kontrollige, et jutum�rgid/�lakomad oleks korrektselt l�petatud. Veel on v�imalik, et te loete sisse faili kus on binaarne info v�ljaspool varjestatud tekstiala. Samuti v�iksite te proovida oma p�ringut MySQLi k�sureal. MySQLi viga v�ljastatakse p�ringu all, kui seal t�esti on m�ni viga, siis see v�ib aidata teil leida vea algp�hjuseid. Kui teil on peale seda ikka veel probleeme v�i kui mu parser keeldub t��tamast ning MySQL k�surida t��tab, siis palun v�hendage oma p�ringuid �ksiku p�ringuni, mis p�hjustab probleeme ja sisestage vea raport koos viga p�hjustanud p�ringuga L�IGET sektsioonis allpool:';
$strSQLParserUserError = 'Tundub, et teie SQL p�ringus on viga. MySQLi serveri error peaks ilmuma allpool, kui seal on midagi, siis peaks see teil aitama leia vea p�hjust.';
$strSQLQuery = 'SQL-p�ring';
$strSQLResult = 'SQL tulemus';
$strSQPBugInvalidIdentifer = 'Vigane identifikaator';
$strSQPBugUnclosedQuote = 'Sulgemata jutum�rk/�lakoma';
$strSQPBugUnknownPunctuation = 'Tundmatu suunav tekst';
$strSave = 'Salvesta';
$strSaveOnServer = 'Salvestage serverisse kataloogi %s';
$strScaleFactorSmall = 'Skalaarfaktor on liiga v�ike, et skeem mahuks �hele lehele.';
$strSearch = 'Otsi';
$strSearchFormTitle = 'Otsi andmebaasist';
$strSearchInTables = 'Otsi tabeli(te)st:';
$strSearchNeedle = 'S�na(d) v�i v��rtus(ed) otsinguks (l�hend: "%"):';
$strSearchOption1 = 'v�hemalt �ks s�nadest';
$strSearchOption2 = 'k�ik s�nadest';
$strSearchOption3 = 't�pne fraas';
$strSearchOption4 = 'regulaaravaldisena';
$strSearchResultsFor = 'Otsingu tulemused "<i>%s</i>" %s:';
$strSearchType = 'Leia:';
$strSecretRequired = 'Konfiguratsioonifail n�uab n��d salajast v�tmes�na (blowfish_secret).';
$strSelect = 'Vali';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'M�rgista k�ik';
$strSelectFields = 'Vali v�ljad (v�hemalt �ks):';
$strSelectNumRows = 'p�ringus';
$strSelectTables = 'Vali tabelid';
$strSend = 'Salvesta failina';
$strSent = 'Saadetud';
$strServer = 'Server %s';
$strServerChoice = 'Serveri valik';
$strServerStatus = 'Jooksev informatsioon';
$strServerStatusUptime = 'See MySQL server on k�inud %s. K�ivitusaeg %s.';
$strServerTabProcesslist = 'Protsessid';
$strServerTabVariables = 'Muutujad';
$strServerTrafficNotes = '<b>Serveri liiklus</b>: Need tabelid n�itavad v�rguliikluse statistikat selle MySQL serveri jaoks alates tema k�ivitamisest.';
$strServerVars = 'Serveri muutujad ja seaded.';
$strServerVersion = 'Serveri versioon';
$strSessionValue = 'Sessiooni v��rtus';
$strSetEnumVal = 'Kui v�lja t��p on "enum" v�i "set", palun sisestage v��rtused kasutades j�rgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") v�i �lakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (n�iteks \'\\\\xyz\' v�i \'a\\\'b\').';
$strShow = 'N�ita';
$strShowAll = 'N�ita k�iki';
$strShowColor = 'N�ita v�rvi';
$strShowCols = 'N�ita v�lju';
$strShowDatadictAs = 'Andmes�nastiku formaat';
$strShowFullQueries = 'N�ita t�ispikkasid p�ringuid';
$strShowGrid = 'N�ita v�rgustiku';
$strShowPHPInfo = 'N�ita PHP informatsiooni';
$strShowTableDimension = 'N�ita tabelite dimensiooni';
$strShowTables = 'N�ita tabeleid';
$strShowThisQuery = ' N�ita p�ringut siin uuesti ';
$strShowingRecords = 'N�ita ridu';
$strSimplifiedChinese = 'Lihtsustatud Hiina';
$strSingly = '(�ksikult)';
$strSize = 'Suurus';
$strSort = 'Sorteeri';
$strSortByKey = 'Sorteeri v�tme j�rgi';
$strSpaceUsage = 'Ruumiv�tt';
$strSplitWordsWithSpace = 'S�nad on eraldatud t�hikuga (" ").';
$strStatCheckTime = 'Viimane vaatamine';
$strStatCreateTime = 'Loodud';
$strStatUpdateTime = 'Viimane muudatus';
$strStatement = 'Parameerid';
$strStatus = 'Staatus';
$strStrucCSV = 'CSV andmed';
$strStrucData = 'Struktuur ja andmed';
$strStrucDrop = 'Lisa \'drop table\'';
$strStrucExcelCSV = 'CSV Ms Exceli jaoks';
$strStrucOnly = 'Ainult struktuur';
$strStructPropose = 'Soovita tabeli struktuuri';
$strStructure = 'Struktuur';
$strSubmit = 'Vali';
$strSuccess = 'Teie SQL p�ring t�ideti edukalt';
$strSum = 'Summa';
$strSwedish = 'Rootsi';
$strSwitchToTable = 'Mine �le kopeeritud tabelile';

$strTable = 'Tabel';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on t�hi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s t�hjendatud';
$strTableHasBeenFlushed = 'Tabel %s �htlustatud';
$strTableMaintenance = 'Tabeli hooldus';
$strTableOfContents = 'Sisukord';
$strTableOptions = 'Tabeli seaded';
$strTableStructure = 'Struktuur tabelile';
$strTableType = 'Tabeli t��p';
$strTables = '%s tabel(it)';
$strTblPrivileges = 'Tabel-spetsiifilised privileegid';
$strTextAreaLength = ' Oma suuruse t�ttu<br /> v�ib see v�li olla mittemuudetav ';
$strThai = 'Tai';
$strTheContent = 'Teie faili sisu on lisatud.';
$strTheContents = 'Faili sisu asendab valitud tabeli sisu ridades kus on identsed primaarsed v�i unikaalsed v�tmed.';
$strTheTerminator = 'V�ljade eraldaja.';
$strThisHost = 'Antud host';
$strThisNotDirectory = 'See ei olnud kataloog';
$strThreadSuccessfullyKilled = 'Protsess %s katkestati edukalt.';
$strTime = 'Aeg';
$strToggleScratchboard = 'vaheta m�rkmetahvlit';
$strTotal = 'kokku';
$strTotalUC = 'Kokku';
$strTraditionalChinese = 'Traditsionaalne Hiina';
$strTraffic = 'Liiklus';
$strTransformation_application_octetstream__download = 'N�ita linki millega laadida alla v�lja binaarne info. Esimene seade on binaarse faili nimi. Teine seade on v�imalik v�ljanimi tabelis mis sisaldab failinime. Kui te m��rate teise seade siis peab esimene seade olema t�hi tekst';
$strTransformation_image_jpeg__inline = 'Kuvab lingitud v�ikepildi; seaded: laius,k�rgus pikslites (hoiab alles originaalpildi laiuse-k�rguse suhte)';
$strTransformation_image_jpeg__link = 'Kuvab lingi sellele pildile (otsene binaarne allalaadimine, jne.).';
$strTransformation_image_png__inline = 'Vaata image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'V�tab TIME, TIMESTAMP v�i DATETIME t��pi v�lja ja teisendab selle Teie lokaalse ajaseade j�rgi. Esimene seade on lisa (tundides) , mis lisatakse ajale (vaikimisi: 0). Teine seade on teistsugune ajam��rang vastavalt PHP  strftime() funktsioonile.';
$strTransformation_text_plain__external = 'AINULT LINUXILE: K�ivitab v�lise aplikatsiooni ja annab talle standard sisendisse ette v�lja sisu. Tagastab aplikatsiooni standard v�ljundi. Vaikimisi on selleks Tidy, et kuvada ilusti formaaditud HTML koodi. Turvariskide maandamiseks peate te k�sitsi muutma faili libraries/transformations/text_plain__external.inc.php ja lisama sinna programmid mida te lasete k�ivitada. Esimene seade on siis kasutatava programmi number, teine seade on programmi parameetrid. Kui kolmas seade on 1 siis t��deldakse v�ljund funktsiooniga htmlspecialchars() (vaikimisi 1). Kui neljas seade on  1 pannakse NOWRAP sisu lahtrile nii, et kogu v�ljund kuvatakse ilma formaati muutmata(vaikimisi 1)';
$strTransformation_text_plain__formatted = 'Hoiab alles originaalset v�lja formaati. Ei varjestata.';
$strTransformation_text_plain__imagelink = 'Kuvab pildi ja lingi, v�li sisaldab failinime; esimene seade on eelnev tekst nagu "http://domain.com/", teine seade on laius pikslites, kolmas on k�rgus.';
$strTransformation_text_plain__link = 'Kuvab lingi, v�li sisaldab failinime; esimene seade on eelnev tekst n�iteks "http://domain.com/", teine seade on nimi lingile.';
$strTransformation_text_plain__substr = 'N�itab ainult osa tekstist. Esimene seade on m��rang kust positsioonilt teie teksti kuva hakkab.(vaikimisi 0). Teine seade on kuipalju teksti tagastatakse, kui see t�hjaks j�tta, tagastatakse kogu allesj��nud tekst. Kolmas seade defineerib mis tekst lisatakse v�ljundi l�ppu kui saadud tekst tagastatakse. (vaikimisi: ...) .';
$strTransformation_text_plain__unformatted = 'N�itab HTML koodi puhta tekstina. HTML formateerimist ei n�idata.';
$strTruncateQueries = 'L�henda n�idatavad p�ringud';
$strTurkish = 'T�rgi';
$strType = 'T��p';

$strUkrainian = 'Ukraina';
$strUncheckAll = 'Puhasta k�ik';
$strUnicode = 'Unikaalne';
$strUnique = 'Unikaalne';
$strUnknown = 'tundmatu';
$strUnselectAll = 'Puhasta k�ik';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfile = 'Uuendatav profiil:';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda p�ringut';
$strUpgrade = 'Te peaksite uuendama %s -i versioonini %s v�i uuemaks.';
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites v�i tabelinimedes';
$strUseHostTable = 'Kasuta host tabelit';
$strUseTables = 'Kasuta tabeleid';
$strUseTextField = 'Kasutage tekstiv�lja';
$strUseThisValue = 'Kasuta seda v��rtust';
$strUser = 'Kasutaja';
$strUserAlreadyExists = 'Kasutaja %s on juba olemas!';
$strUserEmpty = 'Kasutajanimi on t�hi!';
$strUserName = 'Kasutajanimi';
$strUserNotFound = 'Valitud kasutajat ei leitud privileegide tabelist.';
$strUserOverview = 'Kasutaja �levaade';
$strUsers = 'Kasutajad';
$strUsersDeleted = 'Valitud kasutajad on �nnestunult kustutatud.';
$strUsersHavingAccessToDb = 'Kasutajad kellel on ligip��s &quot;%s&quot;';

$strValidateSQL = 'Kontrolli SQL-i';
$strValidatorError = 'SQL-i valideerijat ei suudetud avada. Palun kontrollige, et te olete installinud vastavad php moodulid nagu on kirjeldatud %sdokumentatsioonis%s.';
$strValue = 'V��rtus';
$strVar = 'Muutuja';
$strViewDump = 'Vaata tabeli v�ljundit (skeemi)';
$strViewDumpDB = 'Vaata andmebaasi v�ljundit (skeemi)';
$strViewDumpDatabases = 'N�ita andmebaaside sisu (skeemi)';

$strWebServerUploadDirectory = 'webiserveri �leslaadimiskataloogi';
$strWebServerUploadDirectoryError = 'Kataloog mille Te �leslaadimiseks s�ttisite ei ole ligip��setav';
$strWelcome = 'Tere tulemast %s';
$strWestEuropean = 'L��ne-Euroopa';
$strWildcard = 'metam�rk';
$strWindowNotFound = 'Vajaliku sirvija akent ei suudetud uuendada. V�ibolla Te olete peaakna sulgenud v�i Teie sirvija ei luba akendevahelist suhtlist t�nu turvaseadetele.';
$strWithChecked = 'Valitud:';
$strWritingCommentNotPossible = 'Kommentaaride kirjutamine ei ole v�imalik.';
$strWritingRelationNotPossible = 'S�ltuvuse kirjutamine ei ole v�imalik';
$strWrongUser = 'Vale kasutajanimi/parool. Ligip��s keelatud.';

$strXML = 'XML';

$strYes = 'Jah';

$strZeroRemovesTheLimit = 'M�rkus: M�rkides antud seaded 0 (null) , eemaldate limiidi.';
$strZip = '"zipitud"';

// To translate:

$strCalendar = 'Calendar';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate

$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSQPBugSyntaxError = 'Syntax error';  //to translate
?>
